<?php 
require_once ('conn.php');
session_start();
if (!isset( $_SESSION['user']['user_name'])) {
header("location:signup.php");
}
else
{
		$sql="SELECT count(user_id) AS cntuser from user where token ='".$_SESSION['user']['token']."'";
		//echo $sql;
		//exit();
		$rs=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($rs);
		if(intval($row['cntuser'])<=0){
    unset($_SESSION['user']['loguser_id']);
           session_destroy();
           header("location:signup.php");   
}
}
if (isset($_POST['logout'])) {
  unset($_SESSION['user']['loguser_id']);
  session_destroy();
  header("location:signup.php");
  }
$std_id = 1;
if(isset($_GET['stdid']) && $_GET['stdid']!="")
{
	$std_id = $_GET['stdid'];
}
$sql2="UPDATE sub_topic_details SET std_view = std_view + 1 where std_id =".$std_id;
$rs=mysqli_query($conn,$sql2);
?>
<!DOCTYPE html>
<html data-wf-domain="highs-128.webflow.io" data-wf-page="644280470797b2ad7482d746" data-wf-site="644280460797b2c0be82d724" lang="en">

  <head>
    <meta charset="utf-8" />
    <title>Digital Mumma</title>
    <meta content="Digital Mumma" property="og:title" />
    <meta content="Digital Mumma" property="twitter:title" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <link href="asset/css/subtopic.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="asset/css/digitalmumma.css">
  <link rel="shortcut icon" type="image/png" href="asset/image/logo.png"/>
 
    <script src="asset/js/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
      WebFont.load({
        google: {
          families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic", "Inter:300,regular,500,600,700", "Marko One:regular"]
        }
      });
    </script>
    <script type="text/javascript">
      ! function(o, c) {
        var n = c.documentElement,
          t = " w-mod-";
        n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
      }(window, document);
    </script>

    <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-20GN6163RJ"></script>
    <script type="text/javascript">
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('set', 'developer_id.dZGVlNj', true);
      gtag('config', 'G-20GN6163RJ');
    </script>
    <script type="text/javascript">
      window.__WEBFLOW_CURRENCY_SETTINGS = {
        "currencyCode": "USD",
        "symbol": "$",
        "decimal": ".",
        "fractionDigits": 2,
        "group": ",",
        "template": "{{wf {\"path\":\"symbol\",\"type\":\"PlainText\"} }} {{wf {\"path\":\"amount\",\"type\":\"CommercePrice\"} }} {{wf {\"path\":\"currencyCode\",\"type\":\"PlainText\"} }}",
        "hideDecimalForWholeNumbers": false
      };
    </script>
  
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Lora&family=Open+Sans:wght@500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/" rel="preconnect" />
    <link href="https://fonts.gstatic.com/" rel="preconnect" crossorigin="anonymous" />

    <script type="text/javascript">
      WebFont.load({  google: {    families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Crimson Text:regular,italic,600,600italic,700,700italic"]  }});
    </script>
    <script type="text/javascript">
      !function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);
    </script>
    <script type="text/javascript">
      window.__WEBFLOW_CURRENCY_SETTINGS = {"currencyCode":"USD","$init":true,"symbol":"$","decimal":".","fractionDigits":2,"group":",","template":"{{wf {\"path\":\"symbol\",\"type\":\"PlainText\"} }} {{wf {\"path\":\"amount\",\"type\":\"CommercePrice\"} }} {{wf {\"path\":\"currencyCode\",\"type\":\"PlainText\"} }}","hideDecimalForWholeNumbers":false};
    </script>


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


.video .container{
   max-width: 1200px;
   margin:100px auto;
   display: flex;
   flex-wrap: wrap;
   align-items: flex-start;
   gap:20px;
}

.video .container .main-video-container{
   flex:1 1 700px;
   border-radius: 5px;
   box-shadow: 0 5px 15px rgba(0,0,0,.1);
   background-color: #fff;
   padding:15px;
}

.video .container .main-video-container .main-video{
   margin-bottom: 7px;
   border-radius: 5px;
   width: 100%;
}

.video .container .main-video-container .main-vid-title{
   font-size: 20px;
   color:#444;
}

.video .container .video-list-container{
   flex:1 1 350px;
   height: 485px;
   overflow-y: scroll;
   border-radius: 5px;
   box-shadow: 0 5px 15px rgba(0,0,0,.1);
   background-color: #fff;
   padding:15px;
}

.video .container .video-list-container::-webkit-scrollbar{
   width: 10px;
}

.video .container .video-list-container::-webkit-scrollbar-track{
   background-color: #fff;
   border-radius: 5px;
}

.video .container .video-list-container::-webkit-scrollbar-thumb{
   background-color: #444;
   border-radius: 5px;
}

.video .container .video-list-container .list{
   display: flex;
   align-items: center;
   gap:15px;
   padding:10px;
   background-color: #c9e6c9;
   cursor: pointer;
   border-radius: 5px;
   margin-bottom: 10px;
}

.video .container .video-list-container .list:last-child{
   margin-bottom: 0;
}

.video .container .video-list-container .list.active{
   background-color: #14494b;
}

.video .container .video-list-container .list.active .list-title{
   color:#fff;
}

.video .container .video-list-container .list .list-video{
   width: 100px;
   border-radius: 5px;
}

.video .container .video-list-container .list .list-title{
   font-size: 17px;
   color:#444;
}

@media (max-width:1200px){

   .container{
      margin:0;
   }

}

@media (max-width:450px){

   .container .main-video-container .main-vid-title{
      font-size: 15px;
      text-align: center;
   }

   .container .video-list-container .list{
      flex-flow: column;
      gap:10px;
   }

   .container .video-list-container .list .list-video{
      width: 100%;
   }

   .container .video-list-container .list .list-title{
      font-size: 15px;
      text-align: center;
   }

}


/* Image slider */
.wrapper{
  display: flex;
  max-width: 1200px;
  position: relative;
}
.wrapper i{
  top: 50%;
  height: 44px;
  width: 44px;
  color: #343F4F;
  cursor: pointer;
  font-size: 1.15rem;
  position: absolute;
  text-align: center;
  line-height: 44px;
  background: #fff;
  border-radius: 50%;
  transform: translateY(-50%);
  transition: transform 0.1s linear;
}
.wrapper i:active{
  transform: translateY(-50%) scale(0.9);
}
.wrapper i:hover{
  background: #f2f2f2;
}
.wrapper i:first-child{
  left: -22px;
  display: none;
}
.wrapper i:last-child{
  right: -22px;
}
.wrapper .carousel{
  font-size: 0px;
  cursor: pointer;
  overflow: hidden;
  white-space: nowrap;
  scroll-behavior: smooth;
}
.carousel.dragging{
  cursor: grab;
  scroll-behavior: auto;
}
.carousel.dragging img{
  pointer-events: none;
}
.carousel img{
  height: 340px;
  object-fit: cover;
  user-select: none;
  margin-left: 14px;
  width: calc(100% / 3);
}
.carousel img:first-child{
  margin-left: 0px;
}

@media screen and (max-width: 900px) {
  .carousel img{
    width: calc(100% / 2);
  }
}

@media screen and (max-width: 550px) {
  .carousel img{
    width: 100%;
  }
}
</style>
  </head>

  <body>

  <div class="page-wrapper">
 
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
  class="w-commerce-commercecartopenlinkcount cart-quantity" style="margin-right: 5.5%;margin-top: 0.2%;"><?php echo $tot_wish;?></div>
</a>

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

<?php
		
      $sql = "SELECT * from sub_topic_details where std_id=".$std_id;
			
      if ($result = mysqli_query($conn, $sql)) 
      {
        if (mysqli_num_rows($result) > 0) 
        {
          while ($row = mysqli_fetch_array($result))
          {  
    ?>

    <div class="section-with-minh pricing" style="background-position: 50%; background-repeat: no-repeat; background-size: cover; margin-left:8%">
    <div class="gradient-bgr" style="height: 100%; width: 100%; margin-left: -9%;">
        <img src="asset/image/std_image/<?php echo $row["std_thumbimage"]; ?>" alt="" srcset="" style="width: 100%; margin-top:-20%;">
      </div>
           <div class="right-square">
          <div class="large-square article-template"></div>
          <div class="w-layout-grid dots-grid article-template">
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
            <div class="dot e2a57b"></div>
          </div>
        </div>
      <div class="base-container w-container">
        <div class="banner-title-wrapper"> 
        </div>
      </div>
    </div>
    
    <div class="blog-content-contain" style="text-align: left; margin-left: 160px;">
    <div class="title-and-author" style="display: flex;">
            <h1 class="artcile-heading"><?php echo $row["std_title"]; ?></h1>
          </div> 
    <?php	
        $sql1 ="SELECT * from std_sub_points where std_id = ".$row["std_id"];
				if ($result1 = mysqli_query($conn, $sql1)) 
				{
					if (mysqli_num_rows($result1) > 0) 
					{
						while($row1 = mysqli_fetch_array($result1))
						{
			?>
        
          <div class="rich-text-block w-richtext">
            <h5 style="margin-top: 10px;
    margin-bottom: 10px;
    font-family: Montserrat, sans-serif;
    color: #19494b;
    font-size: 20px;
    line-height: 24px;
    font-weight: 600;"><?php echo $row1["point_title"]; ?></h5>
            <p style="text-align: justify;">
            <?php echo $row1["points"]; ?>
            </p>
            </div>
            <?php }}} ?>
            </div>

        
<!--image gallery-->
<h2 style="text-align: center; padding-top:5%; margin-bottom:-5%;">Image Gallery</h2>
    <div class="wrapper" style=" margin-top: 8%;
    margin-bottom: 8%;
    margin-left: 10%;">
      <i id="left" class="fa-solid fa-angle-left" style="background-color:#70a0a2;">
      <img src="asset/image/sidescrolldown.png" alt="" height="22px"></i> 
      <div class="carousel">
      <?php	
                  $sql2 ="SELECT * from std_image where std_id = ".$row["std_id"];
                  if ($result2 = mysqli_query($conn, $sql2)) 
                  {
                    if (mysqli_num_rows($result2) > 0) 
                    {
                      while($row2 = mysqli_fetch_array($result2))
                      {
                ?>
        <img src="asset/image/std_image/<?php echo $row2["std_image"]; ?>" alt="img" draggable="false">
        <?php }}} ?>
      </div>
      <i id="right" class="fa-solid fa-angle-right" style="background-color:#70a0a2;">
      <img src="asset/image/rightsidescrolldown.png" alt="" height="22px"></i>
    </div>
           
    
  </div>


    <div class="section-small gradient" style="background-image: url(asset/image/greenback.jpg); height:50%">
      <div class="base-container w-container">
        <div class="counter-wrapper">

        <?php
			  $tot_user = 0;
			  
                    $sql = "SELECT count(user_id) AS tot_user FROM user";
                    $result = mysqli_query($conn, $sql);
    
                    if ( $result) {
                      // output data of each row
                      $row_user = mysqli_fetch_assoc($result); 
					  $tot_user =  $row_user['tot_user'];
					}
          ?>
          <div id="w-node-_64fdddf3-1183-ad21-1189-305ac247db01-7482d746" data-w-id="64fdddf3-1183-ad21-1189-305ac247db01" style="opacity:0" class="counter-block">
            <div class="number-counter"><?php echo $tot_user;?></div>
            <div class="bold-text">User</div>
          </div>

          <?php
			  $tot_cat = 0;
			  
                    $sql = "SELECT count(cat_id) AS tot_cat FROM categories";
                    $result = mysqli_query($conn, $sql);
    
                    if ( $result) {
                      // output data of each row
                      $row_cat = mysqli_fetch_assoc($result); 
					  $tot_cat =  $row_cat['tot_cat'];
					}
          ?>
          <div id="w-node-_64fdddf3-1183-ad21-1189-305ac247db06-7482d746" data-w-id="64fdddf3-1183-ad21-1189-305ac247db06" style="opacity:0" class="counter-block">
            <div class="number-counter"><?php echo $tot_cat;?></div>
            <div class="bold-text">Total Category</div>
          </div>

          <?php
			  $tot_top = 0;
			  
                    $sql = "SELECT count(topic_id) AS tot_top FROM topic";
                    $result = mysqli_query($conn, $sql);
    
                    if ( $result) {
                      // output data of each row
                      $row_top = mysqli_fetch_assoc($result); 
					  $tot_top =  $row_top['tot_top'];
					}
          ?>
          <div id="w-node-_64fdddf3-1183-ad21-1189-305ac247db0b-7482d746" data-w-id="64fdddf3-1183-ad21-1189-305ac247db0b" style="opacity:0" class="counter-block">
            <div class="number-counter"><?php echo $tot_top;?></div>
            <div class="bold-text">Total Topic</div>
          </div>

          <?php
			  $tot_eve = 0;
			  
                    $sql = "SELECT count(event_id) AS tot_eve FROM event";
                    $result = mysqli_query($conn, $sql);
    
                    if ( $result) {
                      // output data of each row
                      $row_eve = mysqli_fetch_assoc($result); 
					  $tot_eve =  $row_eve['tot_eve'];
					}
          ?>
          <div id="w-node-_64fdddf3-1183-ad21-1189-305ac247db10-7482d746" data-w-id="64fdddf3-1183-ad21-1189-305ac247db10" style="opacity:0" class="counter-block">
            <div class="number-counter"><?php echo $tot_eve;?></div>
            <div class="bold-text">Events</div>
          </div>
        </div>
      </div>
    </div>


     <!--video gallery-->
      <h2 style="text-align: center; padding-top:5%; margin-bottom:-5%;">Video Gallery</h2>

        <div class="video"> 

        <?php	
        $sql3 ="SELECT * from std_video where std_id = ".$row["std_id"];
				if ($result3 = mysqli_query($conn, $sql3)) 
				{
					if (mysqli_num_rows($result3) > 0) 
					{
						($row3 = mysqli_fetch_array($result3))			
			   ?> 
          <div class="container">
 
          <div class="main-video-container" style="    height: 485px;">
                <iframe loop controls class="main-video" width="100%" height="82%" src="<?php echo $row3["std_video"];?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>

       
          <div class="video-list-container">
          <?php	
        $sqls ="SELECT * from std_video where std_id = ".$row["std_id"];
				if ($results = mysqli_query($conn, $sqls)) 
				{
					if (mysqli_num_rows($results) > 0) 
					{
						while($rows = mysqli_fetch_array($results)){		
			   ?> 
            <div class="list active">
                <iframe 
                src="<?php echo $rows["std_video"];?>" class="list-video" style="width: 30%;
    height: 70px;">
                </iframe>
                <h3 class="list-title"><?php echo $rows["std_video_title"];?></h3>
            </div>
            <?php }}}?>
          </div>
          </div>
          <?php
        }
    else {
         echo "<div style='text-align: center; margin-top: 8%;
         margin-bottom: 8%;'>There are no videos available.</div>";
    }
} ?>
        </div>   

 

    <?php
include('comment.php')
?> 

<?php
				}	} }
		?>

    <?php
include('footer1.php')
?>
  </div>



  <script
      src="asset/jquery/jquery-3.5.1.min.dc5e7f18c8029d.js?site=5f3f8d55ff908923739ee74a"
      type="text/javascript"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script>
    <script
      src="asset/js/webflow.6522dc490.js"
      type="text/javascript"
    ></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="asset/js/subtopic.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
    $('#collapse-1').on('shown.bs.collapse', function() {
    
    $(".servicedrop").addClass('fa-chevron-up').removeClass('fa-chevron-down');
    });
    
    $('#collapse-1').on('hidden.bs.collapse', function() {
    $(".servicedrop").addClass('fa-chevron-down').removeClass('fa-chevron-up');
    });
    
    });</script>
   
<script>
  var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {  
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i,
      x = document.getElementsByClassName("video-slide"),
      y = document.getElementsByTagName("video");
  
  if (n > x.length) {
    slideIndex = 1
  }
  
  if (n < 1) {
    slideIndex = x.length
  }
  
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
    y[i].pause();
  }
  
  x[slideIndex-1].style.display = "block";
  
}
</script>

<script>
  let videoList = document.querySelectorAll('.video-list-container .list');

videoList.forEach(vid =>{
   vid.onclick = () =>{
      videoList.forEach(remove =>{remove.classList.remove('active')});
      vid.classList.add('active');
      let src = vid.querySelector('.list-video').src;
      let title = vid.querySelector('.list-title').innerHTML;
      document.querySelector('.main-video-container .main-video').src = src;
      document.querySelector('.main-video-container .main-video').play();
      document.querySelector('.main-video-container .main-vid-title').innerHTML = title;
   };
});
</script>


<!--image slider-->
<script>
const carousel = document.querySelector(".carousel"),
firstImg = carousel.querySelectorAll("img")[0],
arrowIcons = document.querySelectorAll(".wrapper i");

let isDragStart = false, isDragging = false, prevPageX, prevScrollLeft, positionDiff;

const showHideIcons = () => {
    // showing and hiding prev/next icon according to carousel scroll left value
    let scrollWidth = carousel.scrollWidth - carousel.clientWidth; // getting max scrollable width
    arrowIcons[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
    arrowIcons[1].style.display = carousel.scrollLeft == scrollWidth ? "none" : "block";
}

arrowIcons.forEach(icon => {
    icon.addEventListener("click", () => {
        let firstImgWidth = firstImg.clientWidth + 14; // getting first img width & adding 14 margin value
        // if clicked icon is left, reduce width value from the carousel scroll left else add to it
        carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
        setTimeout(() => showHideIcons(), 60); // calling showHideIcons after 60ms
    });
});

const autoSlide = () => {
    // if there is no image left to scroll then return from here
    if(carousel.scrollLeft - (carousel.scrollWidth - carousel.clientWidth) > -1 || carousel.scrollLeft <= 0) return;

    positionDiff = Math.abs(positionDiff); // making positionDiff value to positive
    let firstImgWidth = firstImg.clientWidth + 14;
    // getting difference value that needs to add or reduce from carousel left to take middle img center
    let valDifference = firstImgWidth - positionDiff;

    if(carousel.scrollLeft > prevScrollLeft) { // if user is scrolling to the right
        return carousel.scrollLeft += positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
    }
    // if user is scrolling to the left
    carousel.scrollLeft -= positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
}

const dragStart = (e) => {
    // updatating global variables value on mouse down event
    isDragStart = true;
    prevPageX = e.pageX || e.touches[0].pageX;
    prevScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
    // scrolling images/carousel to left according to mouse pointer
    if(!isDragStart) return;
    e.preventDefault();
    isDragging = true;
    carousel.classList.add("dragging");
    positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
    carousel.scrollLeft = prevScrollLeft - positionDiff;
    showHideIcons();
}

const dragStop = () => {
    isDragStart = false;
    carousel.classList.remove("dragging");

    if(!isDragging) return;
    isDragging = false;
    autoSlide();
}

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("touchstart", dragStart);

document.addEventListener("mousemove", dragging);
carousel.addEventListener("touchmove", dragging);

document.addEventListener("mouseup", dragStop);
carousel.addEventListener("touchend", dragStop);</script>

</body>
</html>