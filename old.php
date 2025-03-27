<?php
require_once ('conn.php');
?>

<!DOCTYPE html>
<!-- This site was created in Webflow. https://www.webflow.com --><!-- Last Published: Fri Apr 08 2022 02:32:33 GMT+0000 (Coordinated Universal Time) -->
<html
  data-wf-domain="healthfulbits.webflow.io"
  data-wf-page="5f3f8de7a2d809fc914588f7"
  data-wf-site="5f3f8d55ff908923739ee74a"
>
  <!-- Mirrored from healthfulbits.webflow.io/articles/best-workouts-to-add-to-your-schedule by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Jan 2024 08:52:06 GMT -->
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
    <link rel="shortcut icon" type="image/png" href="asset/image/logo.png"/>
    
    <link rel="stylesheet" href="asset/css/digitalmumma.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/" rel="preconnect" />
    <link href="https://fonts.gstatic.com/" rel="preconnect" crossorigin="anonymous" />
    <script src="asset/js/webflow.6522dc490.js" type="text/javascript"></script>
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

    <div class="page-wrapper">
    <?php
     include ('sidebar.php');
     ?>

      <div class="section article-post">
        <div data-w-id="31cab7c7-7bd5-8fb6-39e8-d28388941d53" class="scroll-indicator scroll-indicator-2"></div>
        <div class="blog-post-hero-image-wrap">
          <div
            style="background-image:url(asset/image/oldage.jfif)"
            class="blog-post-image"
          ></div>
        </div>

        
        <?php	
$sql = "SELECT * from usertype where usertype_id= 4";
				if ($result = mysqli_query($conn, $sql)) 
				{
					if (mysqli_num_rows($result) > 0) 
					{
						($row = mysqli_fetch_array($result))
						
			?>
        <div class="blog-content-contain">
          <div class="title-and-author">
            <h1 class="artcile-heading"><?php echo $row["usertype"]; ?></h1>
          </div>
         <!--<div class="article-date">July 19, 2019</div>-->
          <div class="rich-text-block w-richtext">
            
          
            <p style="text-align: justify;"><?php echo $row["user_description"]; ?> </p>
      
            <figure style="max-width:1600px" class="w-richtext-align-fullwidth w-richtext-figure-type-image">
              <div>
                <img
                  src="asset/image/old.jfif"
                  loading="lazy"
                  alt=""
                />
              </div>
            </figure>
          </div>
        </div>
        <?php }} ?>


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

   
        <div class="newsletter-popup">
        <div class="newsletter">
          <div class="newsletter-title-and-image-wrap">
            <div class="form-wrap">
            <h2 class="title" style="text-align: center;">FOR<span class="e2a57b"> <br> OLDS</span></h2>
              <p class="align-center">We don't stop playing because we grow old; we grow old because we stop playing. ...</p>
              <a href="signup.php" class="submit-button w-button" style="text-align: center;"> Olds Site</a>
            </div>
          </div>
          <div data-w-id="91a3be21-26e6-d3c2-2574-097ab6f090e9" class="close-wrapper">
            <div class="close-line">
            </div>
            <div class="close-line line-2">
            </div>
          </div>
        </div>
      </div>

      </div>

<div class="section with-categories">
        <div class="hide-scroll-wrap">
          <div class="category_cards_contain">
            <div class="category_cards_wrapper">
              <div class="w-dyn-list">
                <div role="list" class="category-list w-dyn-items">

                  <div role="listitem" class="category-collection-item w-dyn-item">
                    <a href="parent.php" class="category-link-block w-inline-block">
                      <img
                        width="70"
                        loading="lazy"
                        alt=""
                        src="asset/image/family.png"
                        class="category-icon"
                      />
                      <h4 class="category-card-heading">Parents</h4></a>
                  </div>

                  <div role="listitem" class="category-collection-item w-dyn-item">
                    <a href="teen.php" class="category-link-block w-inline-block"
                      ><img
                        width="70"
                        loading="lazy"
                        alt=""
                        src="asset/image/teenager.png"
                        class="category-icon"
                      />
                      <h4 class="category-card-heading">Teen</h4></a>
                  </div>

                  <div role="listitem" class="category-collection-item w-dyn-item">
                    <a href="adult.php" class="category-link-block w-inline-block"
                      ><img
                        width="70"
                        loading="lazy"
                        alt=""
                        src="asset/image/boy.png"
                        class="category-icon"
                      />
                      <h4 class="category-card-heading">Adult</h4></a>
                  </div>

                  <div role="listitem" class="category-collection-item w-dyn-item">
                    <a href="old.php" class="category-link-block w-inline-block"
                      ><img
                        width="70"
                        loading="lazy"
                        alt=""
                        src="asset/image/love.png"
                        class="category-icon"
                      />
                      <h4 class="category-card-heading">Old </h4></a>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="hide-scroll"></div>
        </div>

        <div class="light-green-absolute-bg">
          <div class="scroll-to-see-categories">
            <h5 class="scroll-to-see-text">Scroll to see all Selection</h5>
            <img
              src="https://assets.website-files.com/5f3f8d55ff908923739ee74a/5f5ae8e599768664d61312ac_Right Arrow.svg"
              loading="lazy"
              width="21"
              alt=""
              class="small-text-arrrow"
            />
          </div>
        </div>
      </div>


      <div id="Join-Community" class="section">
        <div class="container side-by-side">
          <div class="_45-percent-width-wrap">
            <div class="image-wrap"><div class="image"><img src="asset/image/Yoga in Old Age.jfif" alt="" style="height: 100%;"></div></div>
          </div>
          <div class="join-the-community">
            <div class="title-wrap">
            <h2 class="title">FOR<span class="e2a57b"> OLDS. . . </span></h2>
              <div class="w-layout-grid dots-grid in-title-wrap">
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
            <div class="form-block w-form">
              <p class="align-center">We don't stop playing because we grow old; we grow old because we stop playing. ... </p>
              <a href='signup.php'> 
        <button class="submit-button"> 
            OLD SITE
        </button> 
    </a>
            </div>
          </div>
        </div>
        <div class="absolute-side-background large-left"></div>
      </div>

      <div class="section">
        <div class="container">
          <div class="title-wrap align-with-content">
            <h2 class="title">Popular <span class="e2a57b">Articles</span><span class="e2a57b"></span></h2>
            <div class="w-layout-grid dots-grid in-title-wrap">
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
          <div class="articles-wrapper w-dyn-list">
            <div role="list" class="article-collection-list w-dyn-items">
            <div class="articles-wrapper w-dyn-list">
            <div role="list" class="article-collection-list w-dyn-items">
          <?php
          require ('conn.php');
				$sql = "SELECT * FROM sub_topic_details ORDER BY std_id ASC LIMIT 3;";
				if ($result = mysqli_query($conn, $sql)) 
				{
					if (mysqli_num_rows($result) > 0) 
					{
						while ($row = mysqli_fetch_array($result))
						{  
			?>

                <div role="listitem" class="article-item w-dyn-item" style="width: 33%;">
                <div
                  data-w-id="4cfdd7f7-fe71-a38c-73ca-3f0c8b94435f"
                  class="article-card-link w-inline-block">
                  <a href='signup.php'> 
                  <h3><?php echo $row["std_title"]; ?></h3>
                    <p><?php echo $row["std_details"]; ?></p>
                    <div
                      style="background-image:url(asset/image/std_image/<?php echo $row["std_thumbimage"]; ?>)"
                      class="article-card-image">
                  </div>
                  <div class="article-card-read-more-link"><h5 class="read-more">Read more</h5></div>
                  </a>
                </div>
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

      <?php
include('footer.php');
?>
    </div>
    <script
      src="asset/jquery/jquery-3.5.1.min.dc5e7f18c8029d.js?site=5f3f8d55ff908923739ee74a"
      type="text/javascript"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous">
  </script>
    <script
      src="asset/js/webflow.6522dc490.js"
      type="text/javascript">
  </script>
  </body>
</html>
