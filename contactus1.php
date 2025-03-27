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
  data-wf-page="5f5b048b156f4ac4e5af7722"
  data-wf-site="5f3f8d55ff908923739ee74a">
  <head>
    <meta charset="utf-8" />
    <title>Digital Mumma</title>
        <meta content="Contact Us" property="og:title" />
    <meta content="Contact Us" property="twitter:title" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />

 <link rel="stylesheet" href="asset/css/digitalmumma.css">
 <link rel="shortcut icon" type="image/png" href="asset/image/logo.png"/>

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
    <div class="section">
      <div class="container contact_container">
        <div class="contact-left">
          <h6>Have questions?</h6>
          <h2>Get in touch.</h2>
          <p>
          we'd love to discuss how we can apply our approsh to improve 
            the health of your community.
          </p>
        </div>
        <div class="contact-form-block w-form">
          <form
            id="contact-form"
            name="contact"
            data-name="Contact Form"
            class="contact-form"
            data-wf-page-id="5f5b048b156f4ac4e5af7722"
            data-wf-element-id="5daf853b-9809-1269-849e-de3ed9dc0c8f"
            action="insertcon.php" method="post">

            <div class="_50-percent-field-contain">
              <input
                type="text"
                class="text-field _50-percent w-input"
                maxlength="256"
                name="first_name"
                data-name="First Name 2"
                placeholder="First Name*"
                id="First-Name-2"
                required=""
              />

              <input
                type="text"
                class="text-field _50-percent w-input"
                maxlength="256"
                name="last_name"
                data-name="Last Name 2"
                placeholder="Last Name*"
                id="Last-Name-2"
                required=""
              />
            </div>

            <div class="_50-percent-field-contain">
              <input
                type="email"
                class="text-field _50-percent w-input"
                maxlength="256"
                name="email_id"
                data-name="Email Address 2"
                placeholder="Email Address*"
                id="Email-Address-2"
                required=""
              /><input
                type="tel"
                class="text-field _50-percent w-input"
                maxlength="256"
                name="phone_no"
                data-name="Phone Number 2"
                placeholder="Phone Number"
                id="Phone-Number-2"
                required=""
              />
            </div>
            <div class="message-wrap">
              <textarea
                placeholder="Your message..."
                maxlength="5000"
                id="Your-message-2"
                name="message"
                data-name="Your Message 2"
                class="textarea w-input"
              ></textarea>
            </div>
            <input type="submit" value="Submit" name="submit" data-wait="Please wait..." class="submit-button w-button" />
          </form>
        </div>
      </div>

      <?php
     include ('sidebar1.php');
     ?>
     
      <div class="right-square">
        <div class="large-square contact"></div>
        <div class="w-layout-grid dots-grid contact">
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
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
      <div class="light-green-absolute-bg bottom-left"></div>
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
