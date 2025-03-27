<?php 
require_once ('conn.php');
session_start();
if (!isset($_SESSION['user']['user_name'])) {
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
}?>
<!DOCTYPE html>
<html
  data-wf-domain="healthfulbits.webflow.io"
  data-wf-page="5f3f8d55ff908988cc9ee74b"
  data-wf-site="5f3f8d55ff908923739ee74a"
>

  <head>
    <meta charset="utf-8" />
    <title>Digital Mumma</title>
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
    <meta property="og:type" content="website" />
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    
    <link rel="stylesheet" href="asset/css/digitalmumma.css">
    <link rel="stylesheet" href="asset/css/maditation.css" />
    <link rel="shortcut icon" type="image/png" href="asset/image/logo.png"/>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  </head>

  <body>
    <div class="page-wrapper">
    <?php
    include('sidebar1.php')
    ?>


<div class="right-square">
        <div class="large-square support" style="    width: 200px;
    height: 250px;"></div>
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
   
   <section class="section__container why__container">
      <div class="why__image">
        <img src="asset/image/yoga/13.jpg" alt="why yoga" />
      </div>
      <div class="why__content">
        <h1>Effective YOGA</h1>
        <h2 class="section__header">Why You Should Go To Yoga</h2>
        <p>
          Engaging in yoga offers a holistic approach to wellness, encompassing
          both physical and mental benefits. Through a series of poses,
          stretches, and muscle strength. Its meditative aspects encourage
          mindfulness, reducing stress and anxiety while promoting a sense of
          inner peace.
        </p>
        <ul style="display: block;">
          <li>
            <span><i class="ri-checkbox-circle-fill"></i></span>
            Yoga boosts brain power
          </li>
          <li>
            <span><i class="ri-checkbox-circle-fill"></i></span>
            Yoga helps you to breathe better
          </li>
          <li>
            <span><i class="ri-checkbox-circle-fill"></i></span>
            Yoga improves your strength
          </li>
          <li>
            <span><i class="ri-checkbox-circle-fill"></i></span>
            Yoga helps you to focus
          </li>
          <li>
            <span><i class="ri-checkbox-circle-fill"></i></span>
            Yoga helps give meaning to your day
          </li>
        </ul>
      </div>
    </section>

    <section class="hero" id="hero">
      <div class="section__container hero__container">
        <div class="hero__card">
          <span><img src="asset/image/yoga/exercise.png" alt="hero" /></span>
          <h4>Healthy Lifestyle</h4>
          <p>
            Embrace a healthy lifestyle through the transformative power of yoga
            and cultivate physical vitality and inner peace.
          </p>
        </div>
        <div class="hero__card">
          <span><img src="asset/image/yoga/mental-health.png" alt="hero" /></span>
          <h4>Body & Mind Balance</h4>
          <p>
            Through purposeful poses and mindful breathing, yoga cultivates a
            strong, flexible body while nurturing inner calm.
          </p>
        </div>
        <div class="hero__card">
          <span><img src="asset/image/yoga/lotus-position.png" alt="hero" /></span>
          <h4>Meditation Practice</h4>
          <p>
            Discover inner serenity and mindfulness as you cultivate a profound
            connection with the present moment.
          </p>
        </div>
        <div class="hero__card">
          <span><img src="asset/image/yoga/hand.png" alt="hero" /></span>
          <h4>Self-Care</h4>
          <p>
            Discover the transformative power of self-care through yoga and
            embrace moments of tranquility and mindfulness.
          </p>
        </div>
      </div>
    </section>

    <section class="section__container classes__container" id="classes">
      <p class="section__subheader">YOGA CLASSES</p>
      <h2 class="section__header">Choose Your Level & Focus</h2>
      <div class="classes__grid">
        <div class="classes__image">
          <img src="asset/image/yoga/7.jpg" alt="classes" />
          <div class="classes__content">
            <button class="btn classes__btn">View More</button>
          </div>
        </div>
        <div class="classes__image">
          <img src="asset/image/yoga/8.jpg" alt="classes" />
          <div class="classes__content">
            <button class="btn classes__btn">View More</button>
          </div>
        </div>
        <div class="classes__image">
          <img src="asset/image/yoga/9.png" alt="classes" />
          <div class="classes__content">
            <button class="btn classes__btn">View More</button>
          </div>
        </div>
        <div class="classes__image">
          <img src="asset/image/yoga/14.jpg" alt="classes" />
          <div class="classes__content">
            <button class="btn classes__btn">View More</button>
          </div>
        </div>
        <div class="classes__image">
          <img src="asset/image/yoga/16.jpg" alt="classes" />
          <div class="classes__content">
            <button class="btn classes__btn">View More</button>
          </div>
        </div>
        <div class="classes__image">
          <img src="asset/image/yoga/12.jpg" alt="classes" />
          <div class="classes__content">
            <button class="btn classes__btn">View More</button>
          </div>
        </div>
      </div>
    </section>


    <section class="posts" id="posts">
      <div class="section__container posts__container">
        <p class="section__subheader">BLOG</p>
        <h2 class="section__header">Recent Posts</h2>
        <div class="posts__grid">
          <div class="posts__card">
            <img src="asset/image/yoga/4.jpg" alt="post" />
            <div class="posts__content">
              <div class="posts__date">
                <span>31</span>
                <div>
                  <p>2021</p>
                  <p>December</p>
                </div>
              </div>
              <h4>Unlocking Inner Peace</h4>
              <p>
                Dive into the practices that help you cultivate inner peace,
                reduce stress, and enhance your overall well-being.
              </p>
            </div>
          </div>
          <div class="posts__card">
            <img src="asset/image/yoga/4.webp" alt="post" />
            <div class="posts__content">
              <div class="posts__date">
                <span>25</span>
                <div>
                  <p>2022</p>
                  <p>March</p>
                </div>
              </div>
              <h4>From Desk to Mat</h4>
              <p>
                Learn incorporating simple yoga stretches and breathing
                techniques to counter effects of sedentary lifestyle.
              </p>
            </div>
          </div>
          <div class="posts__card">
            <img src="asset/image/yoga/10.jpg" alt="post" />
            <div class="posts__content">
              <div class="posts__date">
                <span>06</span>
                <div>
                  <p>2022</p>
                  <p>August</p>
                </div>
              </div>
              <h4>Yoga Through the Ages</h4>
              <p>
                From prenatal yoga to gentle senior yoga, discover enhance
                flexibility and foster a lifelong love for well-being.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section__container photos__container">
      <p class="section__subheader">GALLERY</p>
      <h2 class="section__header">See The Latest Photos</h2>
      <div class="photos__grid">
        <div class="photos__card">
          <img src="asset/image/yoga/1.avif" alt="photo" />
        </div>
        <div class="photos__card">
          <img src="asset/image/yoga/2.avif" alt="photo" />
        </div>
        <div class="photos__card">
          <img src="asset/image/yoga/3.avif" alt="photo" />
        </div>
        <div class="photos__card">
          <img src="asset/image/yoga/4.avif" alt="photo" />
        </div>
      </div>
    </section>

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
    <script src="asset/js/maditation.js"></script>
  </body>
</html>







    
