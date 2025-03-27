<?php
if (isset($_POST['logout'])) {
unset($_SESSION['user']['loguser_id']);
session_destroy();
header("location:signup.php");
}
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
$(document).ready(function(){
  $("#items").hide();
  $("#category").click(function(){
    $("#items").slideToggle("slow");
  });
  $("#topic").hide();
  $("#sec-topic").click(function(){
    $("#topic").slideToggle("slow");
  });
});
    </script>

<style>
.drop .profile {
    position: relative;
    text-align: center;
}

.drop .profile img {
    width: 35px;
    height: 35px;
    border-radius: 50%;
    cursor: pointer
}

.drop .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 140px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
    transition:all 2s;
}

.drop .dropdown:hover .dropdown-content {
    display: block
}

.drop .profile ul {
    background-color: #fff;
    width: 200px;
    height: 130px;
    border-radius: 10px;
    right: 25px;
    top: 7px;
    position: absolute;
    padding: 8px;
    transition: all 0.5s;
    z-index: 1
}

.drop .profile ul::before {
    content: '';
    position: absolute;
    background-color: #fff;
    height: 10px;
    width: 10px;
    top: -5px;
    transform: rotate(45deg)
}

.drop .profile ul li {
    list-style: none;
    text-align: center;
    font-weight: 500;
    font-size: 15px;
    padding: 10px;
    display: flex;
    align-items: center;
    transition: all 0.5s;
    cursor: pointer;
    border-radius: 4px;
    height: 60%;

}

.drop .profile ul li:hover {
    background-color: #eee
}

.drop .profile ul li i {
    margin-right: 7px
}
</style>

<div
        data-collapse="small"
        data-animation="default"
        data-duration="400"
        data-easing="ease"
        data-easing2="ease"
        role="banner"
        class="navbar w-nav"
      >
        <div class="container navbar">
            <img src="asset/image/logo.png" alt="" srcset="" height="90%" style="margin-top: 1px;">
          <a href="main.php" aria-current="page" class="home-link w-nav-brand w--current"
            ><h2 class="title" style=" font-family: 'Rubik', sans-serif;
 font-size: 38px; font-weight:900; margin-left:-158%">Digital<span class="e2a57b" style="font-weight: 900;">Mumma</span></h2></a>  
          <div class="navbar-right">
          

<div class="drop">
  <div class="dropdown">
  <?php	
$sql = "SELECT * from user where user_id = '".$_SESSION['user']['user_id']."'";
				if ($result = mysqli_query($conn, $sql)) 
				{
					if (mysqli_num_rows($result) > 0) 
					{
					  while($row = mysqli_fetch_array($result))
					  {
			?>
    <div class="profile">
      <img class="dropbtn" src="asset/image/user_img/<?php echo $row["thumb_image"]; ?>" />
      <div class="dropdown-content">
        <ul>
          <li>WELCOME 
              <?php echo  $_SESSION['user']['user_name']."&nbsp;&nbsp;&nbsp;"; ?></li>
          <form method="post">
            <button name="logout" style="text-align: left; background-color:white"><li><span>Logout</span></li></button>  
          </form>      
        </ul>
      </div>
    </div>
	<?php }}}
    ?>
  </div>
  </div>

  
      
<a href="wishlist.php"><img src="asset/image/favourite.png" alt="" srcset="" style="height: 35px;
    padding-left: 10px;">
  </a>
  
  <?php
			  $tot_wish = 0;
			  
                    $sql = "SELECT count(wishlist_id) AS tot_wish FROM wishlist 
                    where user_id = '".$_SESSION['user']['user_id']."'";
                    $result = mysqli_query($conn, $sql);
    
                    if ( $result) {
                      // output data of each row
                      $row_wish = mysqli_fetch_assoc($result); 
					  $tot_wish =  $row_wish['tot_wish'];
					}
          ?>
  <div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22Number%22%2C%22filter%22%3A%7B%22type%22%3A%22numberPrecision%22%2C%22params%22%3A%5B%220%22%2C%22numberPrecision%22%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItemsCount%22%7D%7D%5D"
  class="w-commerce-commercecartopenlinkcount cart-quantity" style="margin-top: -11%;margin-left:2px;" id="wl_heart"><?php echo $tot_wish;?></div>

            <div data-w-id="924e2aef-0920-0dc1-661e-7301431ac23c" class="hamburger">
              <div class="hamburger-line top"></div>
              <div class="hamburger-line middle"></div>
              <div class="hamburger-line bottom"></div>
            </div>
          </div>
        </div>

        <div class="nav-menu" style="text-align: justify;">
          <div class="menu-section-wrap top">
          <h2 class="title" style="font-size: 30px; font-family: 'Rubik', sans-serif;">Digital<span class="e2a57b">Mumma</span></h2>
            <a href="aboutus1.php" class="nav-menu-link">About Us</a>
            <a href="faqs1.php" class="nav-menu-link">FAQs</a>
            <a href="contactus1.php" class="nav-menu-link">Contact Us</a>
          </div>


          <div class="menu-section-wrap">
          <h4 class="menu-section-title" id="category">Categories 
            &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            <img src="asset/image/scrolldown.png" alt="" style="height: 10px; width:20px; margin-left:-2%"></h4>
            <div class="w-dyn-list">
            <div role="list" class="w-dyn-items" id="items">
            
            <?php  
               $sql = "SELECT * from categories where usertype_id ='".$_SESSION['user']['user_identity']."'";
                if ($result = mysqli_query($conn, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {  
                            echo "<a class='nav-menu-link' href='information.php?catid=".$row["cat_id"]."'>".$row["cat_title"]. "</a>";
                        }
                        // Free result set
                        mysqli_free_result($result);
                        } else {
                        echo '<div class="alert alert-danger"><em>No records were 
                        found.</em></div>';
                        }
                        } else {
                        echo "Oops! Something went wrong. Please try again later.";
                        }
                        ?>
            
              </div>
            </div>
          </div>
          
          <div class="menu-section-wrap">
            <h4 class="menu-section-title" id="sec-topic" >Topic
            &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;
            <img src="asset/image/scrolldown.png" alt="" style="height: 10px; width:20px"></h4>
           
            <div class="w-dyn-list">
              <div role="list" class="w-dyn-items" id="topic">
                
              <?php  
               $sql = "SELECT * from topic where usertype_id ='".$_SESSION['user']['user_identity']."'";
                if ($result = mysqli_query($conn, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {  
                            echo "<a class='nav-menu-link' href='information.php?topicid=".$row["topic_id"]."'>".$row["topic_title"]. "</a>";
                        }
                        // Free result set
                        mysqli_free_result($result);
                        } else {
                        echo 'No records were 
                        found.';
                        }
                        } else {
                        echo "Oops! Something went wrong. Please try again later.";
                        }
                        ?>
               </div>
            </div>
          </div>
          
          
           <div class="menu-section-wrap">
            <h4 class="menu-section-title">Notification</h4>
            <a href="event.php" class="nav-menu-link">Events</a>
            <a href="goodthought.php" class="nav-menu-link">good thoughts</a>
          </div>
        </div>
      </div>
