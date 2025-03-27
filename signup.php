<?php
require_once('conn.php');
session_start();
if(isset($_SESSION['loguser_id']))
{
	header("Location:main.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Login and Registration Form in HTML & CSS | CodingLab </title>-->
    <link rel="stylesheet" href="asset/css/style.css">
    
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="shortcut icon" type="image/png" href="asset/image/logo.png"/>
    <title>Digital Mumma</title>
    <style>
  
    </style>
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="asset/image/pic1.jfif" alt="">
        <div class="text">
          <span class="text-1"> <br> </span>
          <span class="text-2"></span>
        </div>
      </div>
    </div>

 <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>

            <?php
				if(isset($_SESSION['error_msg']))
				{
					echo '<div class="alert alert-danger alert-dismissible fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong></strong>'.$_SESSION['error_msg'].'
						  </div>';
					unset($_SESSION['error_msg']);
				}
			?>

          <form action="loginsert.php" method="post" name="login">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Enter your email" name="user_email" required>
              </div>

              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" name="password" required>
              </div>

              <div class="input-box">
                <i class='fas fa-user-friends'></i>
                <select name="user_identity" class="user_identity" >
                <option value="identity">--Identity--</option>
                <?php
				$sql = " SELECT * from usertype";
				if ($result = mysqli_query($conn, $sql)) 
				{
					if (mysqli_num_rows($result) > 0) 
					{
						while ($row = mysqli_fetch_array($result))
						{  
			?>
                  <option value="<?php echo $row["usertype_id"];?>"><?php echo $row["usertype"]; ?></option>
            <?php }}} ?>
                </select>
              </div>

              <!--<div class="text"><a href="forgetpassword.php?user_id='.$row['user_id'].">Forgot password?</a></div>-->
              <div class="button input-box">
                <input type="submit" value="Submit" name="btn-login">
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
            </div>
        </form>
      </div>


        <div class="signup-form">
          <div class="title">Signup</div>

        <form action="insert.php" method="post" name="signup" onsubmit="return validateform()" enctype="multipart/form-data">
            <div class="input-boxes">
              <div class="step step1 active">
              
              <div class="input-box" style="display: flex;">
               <img src="asset/image/share-database.png" alt="" srcset="" height="22px"> 
              <input type="file" name="thumb_image" id="" placeholder="Upload your proflie image" style=" border: none;
    color: #848282;
    padding: 8px 10px;
    border-radius: 5px;
    font-size: 17px;
    display: block;
    margin-top: 3%;"></div>
              

              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Enter your name" name="user_name" required>
              </div>

              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Enter your email" name="user_email" required>
              </div>

              <div class="input-box">
                <i class='fas fa-venus-mars'></i>
                <input type="radio" name="user_gender" value="male" > Male
                <input type="radio" name="user_gender" value="female"> Female
              </div>

              <div class="input-box">
                <i class='fas fa-user-friends'></i>
                <select name="user_identity" class="user_identity" id="user_identity">
                <option value="identity">--Identity--</option>
                <?php
				$sql = "SELECT * from usertype";
				if ($result = mysqli_query($conn, $sql)) 
				{
					if (mysqli_num_rows($result) > 0) 
					{
						while ($row = mysqli_fetch_array($result))
						{  
			?>
                  <option value="<?php echo $row["usertype_id"];?>"><?php echo $row["usertype"]; ?></option>
            <?php }}} ?>
                </select>
              </div>
            

              <div class="input-box">
                <i class="fas fa-birthday-cake"></i>
                <input type="number" placeholder="Enter your age" name="user_age" required>
              </div>

            
              <div class="button input-box">
               <button type="button" class="next-btn" id="nxt">Next</button>
            </div>

            <div class="text sign-up-text" style="margin-top: -10px;">Already have an account? <label for="flip">Login now</label></div>
               </div>

            <div class="step step2" id="step2">
            <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" name="password" id="password" required>
              </div>

              <div class="stp-2" id="stp-2">
              <div class="input-box" id="box">
                <i class="fas fa-baby-carriage"></i>
                <input type="text" placeholder="Enter your child name" name="child_name">
              </div>

              <div class="input-box" id="box">
                <i class="fas fa-birthday-cake"></i>
                <input type="number" placeholder="Enter your child age" name="child_age" >
              </div>

              <div class="input-box" id="box">
                <i class='fas fa-venus-mars'></i>
                <input type="radio" name="child_gender" value="male"> Boy
                <input type="radio" name="child_gender" value="female"> Girl
              </div>
              </div>

              <div class="button input-box">
                <button type="button" class="previous-btn" id="prev">Prev</button>
              </div>
              <div class="button input-box">
                <input type="submit" value="Submit" name="submit">
              </div>
             
            </div>
            </div>
      </form>
    </div>

    </div>
    </div>
  </div>
  <script src="asset/js/main.js"></script>

  <script>
    document.getElementById('stp-2').style.display = 'none';
document.getElementById('user_identity').addEventListener('change', function() {
  var selectedOption = this.value;
  
  // Hide all element groups
  var elementGroups = document.querySelectorAll('.stp-2');
  elementGroups.forEach(function(group) {
    group.style.display = 'none';
  });
  // Show the selected element group
  if (selectedOption === '1') {
    document.getElementById('stp-2').style.display = 'block';
  } else if (selectedOption === '2','3','4') {
    document.getElementById('stp-2').style.display = 'none';
  }
});
</script>


<script>
function validateform() {
    var user_name = document.signup.user_name.value;
    var user_email = document.signup.user_email.value;
    var user_gender = document.signup.user_gender.value;
    var user_identity = document.signup.user_identity.value;
    var user_age = document.signup.user_age.value;
    var password = document.signup.password.value;


    var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
    var letters = /^[A-Za-z]+$/;
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (user_name == "" || user_email == "" || user_gender == "" || user_identity == "" || user_age == "" || password == "") {
        alert('Fill All the Details');
        return false;

    } else if (!letters.test(user_name)) {
        alert('Name field required only alphabet characters');
        document.signup.user_name.focus();
        return false;

    } else if (!filter.test(user_email)) {
        alert('Invalid email Detail');
        document.signup.user_email.focus();
        return false;

    } else if (user_identity == "teen" && (user_age < 6 || user_age > 17)) {
        alert('User age is not within valid range for teen');
        return false;

    } else if (user_identity == "parent" && user_age < 25) {
        alert('User age is not within valid range for parent');
        return false;

    } else if (user_identity == "adult" && (user_age < 18 || user_age > 50)) {
        alert('User age is not within valid range for adult');
        return false;

    } else if (user_identity == "old" && (user_age < 60)) {   
        alert('User age is not within valid range for old');
        return false;

    } else if (!pwd_expression.test(password)) {
        alert('Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character.');
        document.signup.password.focus();
        return false;

    } else if (password.length < 6) {
        alert('Password minimum length is 6');
        document.signup.password.focus();
        return false;

    } else {
        alert("Thank you for signing up. Your signup was successful.");
        return true;
    }
}
</script>

</body>
</html>
