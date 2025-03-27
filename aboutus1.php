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
?>

<!DOCTYPE html>
<html
  data-wf-domain="healthfulbits.webflow.io"
  data-wf-page="5f582fcf7669f5cafb547e77"
  data-wf-site="5f3f8d55ff908923739ee74a">
  <head>
    <meta charset="utf-8" />
    <title>Digital Mumma</title>
    <meta content="About Us" property="og:title" />
    <meta content="About Us" property="twitter:title" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <link rel="shortcut icon" type="image/png" href="asset/image/logo.png"/>
   
    <link rel="stylesheet" href="asset/css/digitalmumma.css">
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
  </head>
  <body>
  <?php
     include ('sidebar1.php');
     ?>

    <div class="section about">
      <div class="container side-by-side">
        <div class="_45-percent-width-wrap">
          <div class="image-wrap">
          <?php	
        $sql3 ="SELECT * from std_video where std_video_id = '9'";
				if ($result3 = mysqli_query($conn, $sql3)) 
				{
					if (mysqli_num_rows($result3) > 0) 
					{
						($row3 = mysqli_fetch_array($result3))			
			   ?> 
            <div class="image about-hero">
              
       
                
                <iframe width="100%" height="100%" src="<?php echo $row3["std_video"];?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      
              
            </div>
            <?php }}?>
          </div>
        </div>
        <div class="about-us">
          <h1>We&#x27;re on a mission...</h1>
          <h4>to aware others and to be aware..</h4>
          <p>
          In todays world parents and children may feel confused, lonely, or left with mixed signals due to lack of communication and miss guided information.
           Digital Mumma uses web platform to make steamline the accurate problem solving
           infomation which allows your clients to place an question or by using media to get health, mental, parenting and growing age related solutions.
          </p>
          <a href="" class="button w-button">Join Us</a>
        </div>
      </div>
      <div class="absolute-side-background large-left about"></div>
      <div class="right-square">
        <div class="large-square about"></div>
        <div class="w-layout-grid dots-grid about">
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
    <div class="section">
      <div class="container flex-centered-container">
        <h2 class="align-center"> Your complete and trusted online resource</h2>
        <p class="align-center max-600px"><br>
At Digital Mumma, we provide free, reliable, up-to-date and independent information to help your family grow and thrive together.<br> We’re funded by the Indian Government, reviewed by experts and non-commercial, so you know you can trust us.<br>

Designed for busy families and full of tips and tricks for you to try, our content is easy to find and easy to digest. We have the answers to hundreds of parenting questions,teen questions,adult questions,old questions, where and when you need them.<br>

Our articles, videos and interactive resources are tailored to different ages and stages, taking you from nurturing a newborn to raising a confident, resilient teen – and helping you to look after yourself as a parent too.
<br><br>  
Digital Mumma is here for you, every step of your parenting journey, aging journey.
        </p>
      </div>
      <div class="right-square about-2">
        <div class="large-square about _2">
          <div class="w-layout-grid dots-grid about">
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
      </div>
    </div>
    

    <div class="section full-width-image-section">
      <div data-w-id="d73633f7-4b45-afdc-b222-06f87ed38239" class="full-width-image"></div>
      <div class="shop-cta">
        <h2 class="white-text align-center">The Power of Meditation</h2>
        <p class="white-text align-center">
        Meditation is not a means to an end. It is both the means and the end.
        Meditation brings wisdom; lack of mediation leaves ignorance.
         Know well what leads you forward and what holds you back, 
        and choose the path that leads to wisdom.
        </p>
        <a href="yoga.php" class="button on-dark w-button">see More</a>
      </div>
    </div>
    <div class="section full-white-bg">
      <div class="container">
        <div class="title-wrap align-with-content">
          <h2 class="title">Our <span class="e2a57b">Partners</span><span class="e2a57b"></span></h2>
          <div class="w-layout-grid dots-grid in-title-wrap partners">
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
        <div class="partner-logos-contain">
          <a href="#" class="partner-logo w-inline-block"
            ><img
              src="https://assets.website-files.com/5f3f8d55ff908923739ee74a/5f5c8eb58bedd9b6c8fa515a_liva.svg"
              width="146"
              alt="" /></a
          ><a href="#" class="partner-logo w-inline-block"
            ><img
              src="https://assets.website-files.com/5f3f8d55ff908923739ee74a/5f5c8eb5bc45c13912ebd15b_solaytic.svg"
              width="209"
              alt="" /></a
          ><a href="#" class="partner-logo w-inline-block"
            ><img
              src="https://assets.website-files.com/5f3f8d55ff908923739ee74a/5f5c8eb5ee9cf300d84125e2_kanba.svg"
              width="196"
              alt="" /></a
          ><a href="#" class="partner-logo w-inline-block"
            ><img
              src="https://assets.website-files.com/5f3f8d55ff908923739ee74a/5f5c8eb59430f2d8b2e52913_aven.svg"
              width="185"
              alt=""
          /></a>
        </div>
      </div>
    </div>  
       
    <?php
include('footer1.php');
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
  </body>
</html>
