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

  $pages = 0;
$per_page_rec = 3;
$page = 1;
if(isset($_GET['page']))
{
	$page = $_GET['page'];
}
?>
<!DOCTYPE html>
<html data-wf-domain="highs-128.webflow.io" data-wf-page="644280470797b2940b82d76b" data-wf-site="644280460797b2c0be82d724" lang="en"
data-wf-domain="healthfulbits.webflow.io"
  data-wf-page="5f3f8d55ff908988cc9ee74b"
  data-wf-site="5f3f8d55ff908923739ee74a">
  <head>
    <meta charset="utf-8" />
    <title>Digital Mumma</title>

    <!--healthfulbits-->
    <meta
      content="Blog and online store for health companies and other businesses looking to sell products online, publish articles and  start a community."
      name="description"
    />
    <meta content="HealthfulBits - Webflow Ecommerce website template" property="og:title" />
    <meta
      content="Blog and online store for health companies and other businesses looking to sell products online, publish articles and  start a community."
      property="og:description"
    />
    <meta content="HealthfulBits - Webflow Ecommerce website template" property="twitter:title" />
    <meta
      content="Blog and online store for health companies and other businesses looking to sell products online, publish articles and  start a community."
      property="twitter:description"
    />

    <!--highs-->
    <meta content="Highs 128 - Webflow Ecommerce website template" property="og:title" />
    <meta content="Highs 128 - Webflow Ecommerce website template" property="twitter:title" />

    <!--digital mumma-->
    <meta property="og:type" content="website" />
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />

    <link href="asset/css/subtopic.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="asset/css/digitalmumma.css">
    <link rel="shortcut icon" type="image/png" href="asset/image/logo.png"/>


        <!--healthfulbits-->
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Lora&family=Open+Sans:wght@500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/" rel="preconnect" />
    <link href="https://fonts.gstatic.com/" rel="preconnect" crossorigin="anonymous" />
    <script src="asset/js/webfont.js" type="text/javascript"></script>

    <script type="text/javascript">
      WebFont.load({  google: {    families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Crimson Text:regular,italic,600,600italic,700,700italic"]  }});
    </script>
    <script type="text/javascript">
      !function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);
    </script>
    <script type="text/javascript">
      window.__WEBFLOW_CURRENCY_SETTINGS = {"currencyCode":"USD","$init":true,"symbol":"$","decimal":".","fractionDigits":2,"group":",","template":"{{wf {\"path\":\"symbol\",\"type\":\"PlainText\"} }} {{wf {\"path\":\"amount\",\"type\":\"CommercePrice\"} }} {{wf {\"path\":\"currencyCode\",\"type\":\"PlainText\"} }}","hideDecimalForWholeNumbers":false};
    </script>

<!--highs-->
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

    <style>
.drop .profile {
    position: relative;
    text-align: center;
}

.drop .profile img {
    width: 35px;
    height: 35px;
    border-radius: 50%;
    cursor: pointer;
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

      @media (min-width:992px) {
        html.w-mod-js:not(.w-mod-ix) [data-w-id="403ebf1f-d631-e52e-d753-4615b31d6e7e"] {
          opacity: 0;
        }

        html.w-mod-js:not(.w-mod-ix) [data-w-id="e342ad86-3077-af32-5a45-bcc4c4412324"] {
          opacity: 0;
        }
      }

      @media (max-width:991px) and (min-width:768px) {
        html.w-mod-js:not(.w-mod-ix) [data-w-id="e342ad86-3077-af32-5a45-bcc4c4412324"] {
          opacity: 0;
        }

        html.w-mod-js:not(.w-mod-ix) [data-w-id="403ebf1f-d631-e52e-d753-4615b31d6e7e"] {
          opacity: 0;
        }
      }

      @media (max-width:767px) and (min-width:480px) {
        html.w-mod-js:not(.w-mod-ix) [data-w-id="e342ad86-3077-af32-5a45-bcc4c4412324"] {
          opacity: 0;
        }

        html.w-mod-js:not(.w-mod-ix) [data-w-id="403ebf1f-d631-e52e-d753-4615b31d6e7e"] {
          opacity: 0;
        }
      }

      @media (max-width:479px) {
        html.w-mod-js:not(.w-mod-ix) [data-w-id="e342ad86-3077-af32-5a45-bcc4c4412324"] {
          opacity: 0;
        }

        html.w-mod-js:not(.w-mod-ix) [data-w-id="403ebf1f-d631-e52e-d753-4615b31d6e7e"] {
          opacity: 0;
        }
      }
    </style>


<style>/* Import Google font - Poppins */
.event {
  background-image: url(asset/image/events/clay\ time.jpg);
  background-repeat: no-repeat;
  background-size: cover;
}
.event .container {
  margin-top: 6%;
  margin-left: 5%;
  position: relative;
  max-width: 700px;
  width: 100%;
  background: #fff;
  padding: 25px;
  border-radius: 8px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}
.event .container header {
  font-size: 1.5rem;
  color: #333;
  font-weight: 500;
  text-align: center;
}
.event .container .form {
  margin-top: 30px;
}
.event .form .input-box {
  width: 100%;
  margin-top: 20px;
}
.event .input-box label {
  color: #333;
}
.event .form :where(.input-box input, .select-box) {
  position: relative;
  height: 50px;
  width: 100%;
  outline: none;
  font-size: 1rem;
  color: #707070;
  margin-top: 8px;
  border: 1px solid #ddd;
  border-radius: 6px;
  padding: 0 15px;
}
.input-box input:focus {
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
}
.form .column {
  display: flex;
  column-gap: 15px;
}
.form .gender-box {
  margin-top: 20px;
}
.gender-box h3 {
  color: #333;
  font-size: 1rem;
  font-weight: 400;
  margin-bottom: 8px;
}
.form :where(.gender-option, .gender) {
  display: flex;
  align-items: center;
  column-gap: 50px;
  flex-wrap: wrap;
}
.form .gender {
  column-gap: 5px;
}
.gender input {
  accent-color: rgb(130, 106, 251);
}
.form :where(.gender input, .gender label) {
  cursor: pointer;
}
.gender label {
  color: #707070;
}
.address :where(input, .select-box) {
  margin-top: 15px;
}
.select-box select {
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  color: #707070;
  font-size: 1rem;
}
.form button {
  height: 55px;
  width: 100%;
  color: #fff;
  font-size: 1rem;
  font-weight: 400;
  margin-top: 30px;
  border: none;
  cursor: pointer;
  transition: all 0.2s ease;
  background: rgb(130, 106, 251);
}
.form button:hover {
  background: rgb(88, 56, 250);
}
/*Responsive*/
@media screen and (max-width: 500px) {
  .form .column {
    flex-wrap: wrap;
  }
  .form :where(.gender-option, .gender) {
    row-gap: 15px;
  }
}</style>

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
  </head>
  <body>
   
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
      <div class="dropdown-content" style="background-color: white;">
        <ul>
          <li>WELCOME 
              <?php echo $_SESSION['user']['user_name']."&nbsp;&nbsp;&nbsp;"; ?></li>
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
  class="w-commerce-commercecartopenlinkcount cart-quantity" style="    margin-right: 5.5%;
    margin-top: 0.2%;"><?php echo $tot_wish;?></div>
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
            <h4 class="menu-section-title">Notification</h4>
            <a href="event.php" class="nav-menu-link">Events</a>
            <a href="goodthought.php" class="nav-menu-link">good thoughts</a>
          </div>
        </div>
      </div>

<div class="right-square">
        <div class="large-square support"></div>
        <div class="w-layout-grid dots-grid support">
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
        </div>
      </div>
    </div>

    <div class="home-banner-section">
      <div class="base-container centered w-container">
        <div class="banner-content">
          <div class="description-block-left">
            <h1 data-w-id="12885718-655a-8479-0754-77a5a6bae0e7" style="opacity:0;">Event Celebration</h1>
            <p data-w-id="e0868072-55a4-4d04-0fda-12f4a5a42c79" style="opacity:0" class="text-with-margin maxw">
            Looking for family activity ideas to keep the kids entertained,
             while also making beautiful memories together? Sometimes you want to do more than just go to the park together, 
             but you’re stuck for fun ideas to do together as a family. Never fear, I’ve got ideas aplenty here.
          </p>
            <div data-w-id="a2741b24-df28-954a-7218-fb56481f46ff" style="opacity:0" class="button-block-description">
            <div class="upload" style="margin-top: -17px;">
            <button class="button type1">
            <span class="btn-txt"><a href="main.php">Home</a></span>
            </button></div>
            </div>
          </div>
          <div class="image-block-right">
            <img class="image-cover" src="asset/image/events/familyday.png" alt="" style="opacity:0; margin-left:92px" sizes="(max-width: 479px) 100vw, (max-width: 991px) 470px, (max-width: 1279px) 42vw, 470px" data-w-id="17c6e8c5-2fb2-7438-3e78-5d6a642fadd3" loading="lazy" />
            <div class="image-banner-absolute">
              <img src="asset/image/events/funday.webp"  loading="lazy" style="opacity:0" data-w-id="00aaace7-0d44-ae7b-5978-6aca9b40b9e0" alt="" class="image-cover" />
            </div>
          </div>
        </div>
      </div>
    </div>
   



   <div class="event">
    <section class="container">
      <header> EVENT REGISTER </header>

      <div class="form-outline flex-fill mb-0" style="text-align: center;">
                      <img src="asset/image/events/qr.jpeg" height="150px" alt="">
                    </div>

      <form class="form" method="post">
      <div class="input-box">
        <select class="input-box" name="event_id">
                    <?php
					$sql = "SELECT * FROM event;";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) 
					{
					  // output data of each row
					  while($row = mysqli_fetch_assoc($result)) {
						
				?>
             <option value="<?php echo $row["event_id"]; ?>" ><?php echo $row["event_title"]; ?></option>
             <?php }}?>
            </select>
        </div>

        <div class="input-box">
          <input type="text" placeholder="your Name" name="participent_name" required />
        </div>


        <div class="input-box">
          <input type="text" placeholder="your Payment refId" name="payment_refrences" required />
        </div>
      
        <div class="button input-box">
                <input type="submit" value="Submit" name="event">
              </div>
                  </form>
    </section>
    </div>


    
  <!--<div class="section light-background" style="background-color: white;">
      <div class="vector-bottom career" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(-360deg) skew(0deg, 0deg); transform-style: preserve-3d;">
      </div>
      <div class="base-container w-container">
        <div data-w-id="614f7888-cf3e-ac83-11f4-d5dafffde3b1" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="section-title-wrapper">
          <div class="all-caps-text mb-20">Events list</div>
          <h2>We offer a variety of events</h2>
          <p class="section-title-description">All strange and terrible events are welcome, but comforts we despise.</p>
        </div>

        <div class="career-collection-list-wrapper w-dyn-list">
          <div role="list" class="w-dyn-items" >

            <div data-w-id="14575070-ad1d-e0ec-9d2a-5a9130234614" style="background-color: #d4f1d4; opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" role="listitem" class="career-list-item-wrapper w-dyn-item">
            <img src="asset/image/2.jpg" alt="" style="height: 130px;
    width: 130px; margin-left:-1%">
              <div class="career-position-wrapper" style="margin-left: 1%;">
                <h5>Marketing Manager</h5>
                <div>As a marketing manager, you will be responsible for promoting our music school to potential students and the community.</div>
              </div>
              <div class="career-type-wrapper">
                <img src="https://assets-global.website-files.com/644280460797b2c0be82d724/644684649e09e631f736a379_5. Calendar.webp" loading="lazy" alt="">
                <div class="career-type">Full time</div>
              </div>
              <div class="career-button-wrapper">
                <a href="job-positions/marketing-manager.html" class="primary-button">Apply now</a>
              </div>
            </div>
            
          
          </div>
        </div>
      </div>
    </div>-->
   
    <div class="section blog-sidebar" style="    margin-top: 5%;
">
      <div class="base-container w-container">
        <div class="blog-sidebar-wrapper">
          <div class="blog-sidebar-left-wrapper">
            <div class="w-dyn-list">
              <div role="list" class="collection-list-2 blog w-dyn-items">

              <?php
$sql = "SELECT * from event";
$limit = " LIMIT ".(($page-1)*$per_page_rec).",".$per_page_rec;

$result_count = mysqli_query($conn, $sql);
$pages = mysqli_num_rows($result_count) / $per_page_rec;

if ($result = mysqli_query($conn, $sql.$limit )) 
{
  if (mysqli_num_rows($result) > 0) 
  {
    while ($row = mysqli_fetch_array($result))
    {  

			?>
                <div data-w-id="bf371428-b97b-2b5a-8233-cc1b89baffe5" role="listitem" class="w-dyn-item" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;     width: 140%;
    margin-left: -37%;">
                  <div class="blog-description">
                    <div class="image-blog height w-inline-block">
                      <img loading="lazy" alt="Blog Image" src="asset/image/events/<?php echo $row["event_image"]; ?>" sizes="(max-width: 479px) 100vw, (max-width: 767px) 96vw, (max-width: 991px) 270px, (max-width: 1279px) 58vw, 710.3984375px" class="image-cover scale">
                    </div>
                    <div class="text-content-blog bordert-first">
                      <div class="none-transition w-inline-block">
                        <h5 class="yellow-hover"><?php echo $row["event_title"]; ?></h5>
                      </div>
                      <p class="paragraph-blog"><?php echo $row["event_description"]; ?></p>
                      <p class="blog-recent-post-date"><?php echo $row["datetime"]; ?></p>
                    </div>
                  </div>
                </div>
                <?php
                 }}}
                ?>
              </div>

              <!-- pagination elements -->
        <div class="pagination_section" style="padding-top: 5%;">
            <a href="event.php?page=<?php echo (intval($page)<=1)?$page:(intval($page)-1) ; ?>">
                 Previous
            </a>
             
                <?php
                  for($i=1;$i<=$pages;$i++)
                  {
                ?>
                  <a href="event.php?page=<?php echo $i; ?>" class="<?php echo (($i==$page)?"wp_active":""); ?>">
                    <?php echo $i; ?>
                  </a>
                <?php
                  }
                ?>
              
            <a href="event.php?page=<?php echo ((intval($page)>=$pages)?$page:(intval($page)+1)) ; ?>">
            Next 
            </a>
        </div>

            </div>
          </div>
          <div class="blog-sidebar-right-wrapper">
            <div class="blog-sidebar-right">      
            </div>
            <div data-w-id="0aa95b00-522d-747a-63cf-b9e95e2ed508" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; margin-right:-170px" class="sidebar-recent-posts">
                <h4>Recent Posts</h4>
                <div class="sidebar-recent-posts-wrapper w-dyn-list">
                  <div role="list" class="w-dyn-items">

                  <?php
				$sql = "SELECT * FROM event ORDER BY event_id DESC LIMIT 3;";
				if ($result = mysqli_query($conn, $sql)) 
				{
					if (mysqli_num_rows($result) > 0) 
					{
						while ($row = mysqli_fetch_array($result))
						{  
			?>
                    <div role="listitem" class="sidebar-recent-post-item w-dyn-item">
                      <article>
                        <div class="sidebar-recent-post w-inline-block" style="display: flex;">
                          <img src="asset/image/events/<?php echo $row["event_image"]; ?>" loading="lazy" alt="" sizes="(max-width: 1279px) 80px, (max-width: 1439px) 6vw, 80px" class="sidebar-recent-post-image">
                          <div class="div-block">
                            <h6 class="blog-recent-post-title"><?php echo $row["event_title"]; ?></h6>
                            <p class="blog-recent-post-date"><?php echo $row["datetime"]; ?></p>
                          </div>
            </div>
                      </article>
                    </div>
                    <?php
                 }}}
                ?>
                  
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>

    <?php
include('footer1.php')
    ?>

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

    <script src="asset/jquery/jquery.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="asset/js/webflow.cb23f1101.js" type="text/javascript"></script>

    <?php

// Check if form is submitted
if(isset($_POST['event'])) {
    // Sanitize and get form data
    $event_id = mysqli_real_escape_string($conn, $_POST['event_id']);
    $participent_name = mysqli_real_escape_string($conn, $_POST['participent_name']);
    $payment_refrences = mysqli_real_escape_string($conn, $_POST['payment_refrences']);


    if(isset($_SESSION['user']['user_id'])) {
      $userId = $_SESSION['user']['user_id'];
    // Insert data into database
    $sql = "INSERT INTO event_participents (event_id,participent_name, payment_refrences,user_id) VALUES ('$event_id','$participent_name','$payment_refrences','$userId')";
    if(mysqli_query($conn, $sql)) {
        echo "Record inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
 else {
  echo "User not logged in.";
}
}
?>

  </body>

</html>