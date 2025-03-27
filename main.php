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
  </head>

  <body>
    <div class="page-wrapper">
    <?php
    include('sidebar1.php')
    ?>

    
      <div class="newsletter-popup">
        <div class="newsletter">
		<?php
$sql = "SELECT * from usertype where usertype_id ='".$_SESSION['user']['user_identity']."'";
if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            ?>
          <div class="newsletter-title-and-image-wrap">
            <div class="form-wrap">
            <h2 class="title" style="text-align: center;">WELCOME <br> to<span class="e2a57b"> <br> <?php echo $row["usertype"]; ?> Portal</span></h2>
              <p class="align-center">Trusted, comprehensive information and resources for health.</p>
            </div>
          </div>
<?php }}} 
?>
          <div data-w-id="91a3be21-26e6-d3c2-2574-097ab6f090e9" class="close-wrapper">
            <div class="close-line"></div>
            <div class="close-line line-2"></div>
          </div>
        </div>
      </div>

     
    <div class="section home-hero">
        <div class="container">
          <div
            data-delay="4000"
            data-animation="cross"
            class="slider w-slider"
            data-autoplay="true"
            data-easing="ease"
            data-hide-arrows="false"
            data-disable-swipe="false"
            data-autoplay-limit="0"
            data-nav-spacing="5"
            data-duration="800"
            data-infinite="true"
          >
            <div class="w-slider-mask">
			
			<?php
				$sql = "SELECT * from slider";
				if ($result = mysqli_query($conn, $sql)) 
				{
					if (mysqli_num_rows($result) > 0) 
					{
						while ($row = mysqli_fetch_array($result))
						{  
			?>
			
              <div data-w-id="08bff151-c556-3a92-7d24-23e6bb3e4670" class="w-slide">
                <div class="slider-content">
                  <div class="home-slider-collection-list-wrapper w-dyn-list">
                    <div role="list" class="home-slider-collection-list w-dyn-items">
                      <div role="listitem" class="home-slider-collection-item w-dyn-item">
                        <div class="left-side">
                          <h1 class="slider-h1"><?php echo $row["slider_title"]; ?></h1>
                          <p
                            style="-webkit-transform:translate3d(0, 65PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 65PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 65PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 65PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                            class="slider-subtext"
                          >
                          “<?php echo $row["slider_details"]; ?>”
                          </p>
                          <div class="_30px-div"></div>
                          <a style="opacity:0" href="information.php" class="text-link">Read article  &gt;</a>
                          <h1
                            style="-webkit-transform:translate3d(-239PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-239PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-239PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-239PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                            class="hero-slider-number"
                          >
                          <?php echo $row["slider_id"]; ?>
                          </h1>
                        </div>
                        <div class="right-side">
                          <div class="hero-image-wrap">
                            <div class="hero-image-overflow">
                              <div
                                style="background-image:url(asset/image/<?php echo $row["slider_image"]; ?>);-webkit-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                                class="slide-hero-image"
                              ></div>
                            </div>
                            <div class="w-layout-grid dots-grid">
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
                              <div class="dot"></div>
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
                      </div>
                    </div>
                  </div>
                </div>
              </div>
		<?php
				}	} }
		?>
					
			  
			</div>
            <div class="left-arrow w-slider-arrow-left">
              <img
                src="asset/image/down-arrow.png"
                loading="lazy"
                width="28"
                alt=""
                class="bottom-arrow"
              />
            </div>
            <div class="right-arrow w-slider-arrow-right">
              <img
                src="asset/image/up-arrow.png"
                loading="lazy"
                width="28"
                alt=""
                class="top-arrow"
              />
            </div>
            <div class="slide-nav w-slider-nav w-round">
            <div class="w-slider-dot" data-wf-ignore="" aria-label="Show slide 1 of 4" aria-pressed="false" role="button" tabindex="-1" style="margin-left: 5px; margin-right: 5px;"></div>
            <div class="w-slider-dot" data-wf-ignore="" aria-label="Show slide 2 of 4" aria-pressed="false" role="button" tabindex="-1" style="margin-left: 5px; margin-right: 5px;"></div>
            <div class="w-slider-dot w-active" data-wf-ignore="" aria-label="Show slide 3 of 4" aria-pressed="true" role="button" tabindex="0" style="margin-left: 5px; margin-right: 5px;"></div>
            <div class="w-slider-dot w-active" data-wf-ignore="" aria-label="Show slide 4 of 4" aria-pressed="true" role="button" tabindex="0" style="margin-left: 5px; margin-right: 5px;"></div>
            </div>
          </div>
        </div>
        <div class="teal-dot"></div>
        <div class="teal-dot"></div>
        <div class="teal-dot"></div>
        <div class="absolute-side-background"></div>
        <div class="dot"></div>
      </div>


      <div class="section with-categories">
        <div class="hide-scroll-wrap">
          <div class="category_cards_contain">
            <div class="category_cards_wrapper">
              <div class="w-dyn-list">
                <div role="list" class="category-list w-dyn-items">
                  <div role="listitem" class="category-collection-item w-dyn-item">
                    <a href="information.php" class="category-link-block w-inline-block"
                      ><img
                        width="70"
                        loading="lazy"
                        alt=""
                        src="https://assets.website-files.com/5f3f8de60fa595523b6b1323/5f59c7d4f7be0a7c51146258_health 1.svg"
                        class="category-icon"
                      />
                      <h4 class="category-card-heading">Body</h4></a
                    >
                  </div>
                  <div role="listitem" class="category-collection-item w-dyn-item">
                    <a href="" class="category-link-block w-inline-block"
                      ><img
                        width="70"
                        loading="lazy"
                        alt=""
                        src="https://assets.website-files.com/5f3f8de60fa595523b6b1323/5f59c79e1ce05ba9b7f456b4_apple.svg"
                        class="category-icon"
                      />
                      <h4 class="category-card-heading">Health</h4></a>
                  </div>
                  <div role="listitem" class="category-collection-item w-dyn-item">
                    <a href="information.php" class="category-link-block w-inline-block"
                      ><img
                        width="70"
                        loading="lazy"
                        alt=""
                        src="https://assets.website-files.com/5f3f8de60fa595523b6b1323/5f59c7c026981037ec680b30_health chart.svg"
                        class="category-icon"
                      />
                      <h4 class="category-card-heading">Grown-ups</h4></a
                    >
                  </div>
                  <div role="listitem" class="category-collection-item w-dyn-item">
                    <a href="information.php" class="category-link-block w-inline-block"
                      ><img
                        width="70"
                        loading="lazy"
                        alt=""
                        src="https://assets.website-files.com/5f3f8de60fa595523b6b1323/5f59c7cad5c3240e9a51db06_health food.svg"
                        class="category-icon"
                      />
                      <h4 class="category-card-heading">Food & Fitness</h4></a
                    >
                  </div>
                  <div role="listitem" class="category-collection-item w-dyn-item">
                    <a href="" class="category-link-block w-inline-block"
                      ><img
                        width="70"
                        loading="lazy"
                        alt=""
                        src="https://assets.website-files.com/5f3f8de60fa595523b6b1323/5f59c7a9bdc7e162aab89653_wheelchair.svg"
                        class="category-icon"
                      />
                      <h4 class="category-card-heading">Diseases & Conditions</h4></a
                    >
                  </div>
                  <div role="listitem" class="category-collection-item w-dyn-item">
                    <a href="information.php" class="category-link-block w-inline-block"
                      ><img
                        width="70"
                        loading="lazy"
                        alt=""
                        src="https://assets.website-files.com/5f3f8de60fa595523b6b1323/5f59c789d9f06c364db81cbf_support.svg"
                        class="category-icon"
                      />
                      <h4 class="category-card-heading">All Topics</h4></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="hide-scroll"></div>
        </div>
        <div class="light-green-absolute-bg">
          <div class="scroll-to-see-categories">
            <h5 class="scroll-to-see-text">Scroll to see all categories</h5>
            <img
              src="asset/image/right-arrow.png"
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
            <div class="image-wrap">
              <div class="image">
              </div></div>
          </div>
          <div class="join-the-community">
            <div class="title-wrap">
              <h2 class="title" style="margin-right: -100%;">The most beautiful things are not associated with money;<span class="e2a57b"><br> they are memories and moments. ...</span></h2>
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
            <a href='event.php'> 
        <button class="submit-button"> 
            Learn more about Events 
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
            <h2 class="title">Recent <span class="e2a57b">Articles</span><span class="e2a57b"></span></h2>
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

    <?php
$sql = "SELECT * FROM sub_topic_details ORDER BY std_id DESC LIMIT 6 ;";
if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <div role="listitem" class="article-item w-dyn-item" style="width: 33%;">
                <div data-w-id="4cfdd7f7-fe71-a38c-73ca-3f0c8b94435f" class="article-card-link w-inline-block">

                    <div class="flex" style="display: flex;">
                        

                        <h5 style="font-weight: 600; margin-top: 4px; margin-left: 3%;">
                            <?php echo $row["std_view"]." Views"; ?></h5>
                    </div>

                    <a href='information.php'>
                        <h3><?php echo $row["std_title"]; ?></h3>
                        <p><?php echo $row["std_details"]; ?></p>
                        <div style="background-image:url(asset/image/std_image/<?php echo $row["std_thumbimage"]; ?>)"
                             class="article-card-image"></div>
                        <div class="article-card-read-more-link"><h5 class="read-more">Read more</h5></div>
                    </a>
                </div>
            </div>

            <?php
        }
    }
}
?>

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
			<?php
$sql = "SELECT * FROM sub_topic_details ORDER BY std_view DESC LIMIT 3";
if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <div role="listitem" class="article-item w-dyn-item" style="width: 33%;">
                <div data-w-id="4cfdd7f7-fe71-a38c-73ca-3f0c8b94435f" class="article-card-link w-inline-block">

                    <div class="flex" style="display: flex;">

                        <h5 style="font-weight: 600; margin-top: 4px; margin-left: 3%;">
                            <?php echo $row["std_view"]." Views"; ?></h5>
                    </div>

                    <a href='information.php'>
                        <h3><?php echo $row["std_title"]; ?></h3>
                        <p><?php echo $row["std_details"]; ?></p>
                        <div style="background-image:url(asset/image/std_image/<?php echo $row["std_thumbimage"]; ?>)"
                             class="article-card-image"></div>
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

      <?php
include('footer1.php')
?>
    </div>
   
<!--wishlist add-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
$(document).ready(function(){
    $('.wishlist-button').click(function(){
        var stdId = $(this).data('stdid');
        $.ajax({
            url: 'ins_wish.php',
            type: 'POST',
            data: { stdid: stdId },
            success: function(response){
               if(response>0)
			   {
				$("#wl_heart").text(parseInt($("#wl_heart").text())+1);
			   }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
});
</script>
    
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







    
