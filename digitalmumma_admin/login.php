<?php
session_start();
if(isset($_SESSION['admin']['admin_id']))
{
	header("Location:index.php");
}
require_once('connection.php')
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Login and Registration Form in HTML & CSS | CodingLab </title>-->
    <link rel="stylesheet" href="stylelogin.css">
    
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="shortcut icon" type="image/png" href="asset/img/logo.png"/>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Digital Mumma</title>
    <style>
  
    </style>
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="assets/img/pic1.jfif" alt="">
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
			
          <form action="" method="post" name="login"  enctype="multipart/form-data">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Enter your email" name="user_email" required>
              </div>

              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" name="password" required>
              </div>
			   
 <!--                           <br>
 <div class="text"><a href="forgetpassword.php?user_id='.$row['user_id'].">Forgot password?</a></div>
              <div class="button input-box">-->
                <input type="submit" value="Submit" name="btn-login"style="
    background-color: #14494b;
    color: white;
    padding: 10px;
    width: 45%;
    margin-left: 22%;
    margin-top: 11%;
    border-radius: 10px;
">
             
        </form>
      </div>
</body>
</html>

<?php

	function getIPAddress() 
	{  
		 $ipaddress = '';
			if (getenv('HTTP_CLIENT_IP'))
				$ipaddress = getenv('HTTP_CLIENT_IP');
			else if(getenv('HTTP_X_FORWARDED_FOR'))
				$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
			else if(getenv('HTTP_X_FORWARDED'))
				$ipaddress = getenv('HTTP_X_FORWARDED');
			else if(getenv('HTTP_FORWARDED_FOR'))
				$ipaddress = getenv('HTTP_FORWARDED_FOR');
			else if(getenv('HTTP_FORWARDED'))
			   $ipaddress = getenv('HTTP_FORWARDED');
			else if(getenv('REMOTE_ADDR'))
				$ipaddress = getenv('REMOTE_ADDR');
			else
				$ipaddress = 'UNKNOWN';
			return $ipaddress;  
	}  
	if(isset($_POST['btn-login']))
	{
		$sql = "SELECT * FROM admin_login where log_email='".$_POST['user_email']."' AND log_password='".$_POST['password']."'";
		$result = mysqli_query($conn, $sql);

		if ($result === false) 
		{
			echo "Error: " . mysqli_error($conn);
		} 
		else 
		{
			if (mysqli_num_rows($result) > 0) 
			{
				$row = mysqli_fetch_assoc($result);
				$_SESSION['admin']['admin_id'] = $row['login_id'];
				$_SESSION['admin']['admin_email'] = $row['log_email'];
				 date_default_timezone_set("Asia/Calcutta"); 
				$current_date = date('Y-m-d H:i:s');
				
				 $uip= getIPAddress();   // get the user ip
				// query for inser user log in to data base
				$token = getToken(6);
				mysqli_query($conn,"INSERT INTO `admin_login_logs` (`log_id`, `admin_id`, `admin_email`, `admin_ip`, `login_datetime`) VALUES (NULL, '".$_SESSION['admin']['admin_id']."', '".$_SESSION['admin']['admin_email']."', '".$uip."', '".$current_date ."');");
				mysqli_query($conn,"UPDATE admin_login SET `token`='".$token."' WHERE `admin_login`.`login_id`=".$_SESSION['admin']['admin_id'].";");
				//echo "UPDATE user SET `token`='".$token."' WHERE `user`.`id`=".$_SESSION['admin']['admin_id'].";";
				$_SESSION['admin']['token'] = $token;
				mysqli_query($conn,"UPDATE `admin_login` SET `admin_last_logined` = '".$current_date."' WHERE `admin_login`.`login_id` = ".$_SESSION['admin']['admin_id'].";");
									        
				header("Location:index.php");
			}
			else
			{
				$_SESSION['error_msg'] = "Oops!! You are not Registered with us.";
				header("Location:login.php");
			}
		}
	}
		
// Generate token
function getToken($length){
  $token = "";
  $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
  $codeAlphabet.= "0123456789";
  $max = strlen($codeAlphabet); // edited

  for ($i=0; $i < $length; $i++) {
    $token .= $codeAlphabet[random_int(0, $max-1)];
  }

  return $token;
}
?>
