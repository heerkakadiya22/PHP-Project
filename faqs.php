<?php
require_once('conn.php');
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
    <meta content="Store Support" property="og:title" />
    <meta content="Store Support" property="twitter:title" />
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
        <style>

h1 {
  margin: 50px 0 30px;
  text-align: center;
}

.faq-container {
  margin: 0 auto;
  width: 264%;
}

.faq {
  background-color: transparent;
  border: 1px solid #9fa4a8;
  border-radius: 10px;
  margin: 20px 0;
  overflow: hidden;
  padding: 30px;
  position: relative;
  transition: 0.3s ease;
}

.faq.active {
  background-color: #fff;
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1), 0 3px 6px rgba(0, 0, 0, 0.1);
}

.faq.active::before,
.faq.active::after {
  color: #2ecc71;
  content: "\f075";
  font-family: "Font Awesome 6 Free";
  font-size: 7rem;
  left: 20px;
  opacity: 0.2;
  position: absolute;
  top: 20px;
  z-index: 0;
}

.faq.active::before {
  color: #3498db;
  left: -30px;
  top: -10px;
  transform: rotateY(180deg);
}

.faq-title {
  font-size: 25px;
  margin: 0 35px 0 0;
  color: #14494b;
}

.faq-text {
  color: #14494b;
  font-size: 17px;
  display: none;
  margin: 30px 0 0;
}

.faq.active .faq-text {
  display: block;
}

.faq-toggle {
  align-items: center;
  background-color: transparent;
  border: 0;
  border-radius: 50%;
  cursor: pointer;
  display: flex;
  font-size: 1rem;
  height: 30px;
  justify-content: center;
  padding: 0;
  position: absolute;
  right: 30px;
  top: 30px;
  width: 30px;
}
.faq-toggle .fa-times,
.faq.active .faq-toggle .fa-chevron-down {
  display: none;
}

.faq.active .faq-toggle .fa-times {
  color: #fff;
  display: block;
}

.faq-toggle .fa-chevron-down {
  display: block;
}

.faq.active .faq-toggle {
  background-color: #9fa4a8;
}
    </style>
  </head>

  <body>
  <div class="page-wrapper">

  <?php
  include('sidebar.php')
  ?>

    <div id="top" class="section faqs">
      <div class="container flex-centered-container">
        <img
          src="https://assets.website-files.com/5f3f8d55ff908923739ee74a/5f5af9ebb5074904ebd483a9_health app 1.svg"
          width="73"
          alt=""
          class="faq-hero-icon"
        />
        <h1>Frequently Asked Questions</h1>
        <h3 class="no-top-marigin">We can help.</h3>
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

    <div class="section faq-section">
      <div class="container faqs-contain">
        <div class="more-resources-contain">
            <div class="contact-cta">
              <h2>Still Have Questions?</h2>
              <a href="contactus.php" class="button w-button">Contact Us</a>
            </div>
          </div>
        </div>  
     
        <div class="faq-container">
        <?php
				$sql = "SELECT * from faqs";
				if ($result = mysqli_query($conn, $sql)) 
				{
					if (mysqli_num_rows($result) > 0) 
					{
						while ($row = mysqli_fetch_array($result))
						{  
			?>
          <div class="faq">
            <h3 class="faq-title"><?php echo $row["faqs_title"]; ?></h3>
            <p class="faq-text" id="text">"<?php echo $row["faqs_details"]; ?>"</p>

            <button class="faq-toggle">
              <i class="fas fa-chevron-down"> <img src="asset/image/scrolldown.png" height="10px" alt="" srcset="" id="down"></i>
              <i class="fas fa-times"><img src="asset/image/close.png" height="18px" alt="" id="cross"></i>
            </button>

          </div>
          <?php
                  }	} }
              ?>
        </div>
      </div>
 <?php
 include('footer.php');
 ?>
    </div>

    <script>
    const toggles = document.querySelectorAll(".faq-toggle");

toggles.forEach((toggle) => {
  toggle.addEventListener("click", () => {
    toggle.parentElement.classList.toggle("active");
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
