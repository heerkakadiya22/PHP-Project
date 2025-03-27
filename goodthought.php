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
}
?>

<!DOCTYPE html>
<html>
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
<style>
.row > .column {
  padding: 0 8px;
  height: 300px;
  width: 300px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  padding-left: 20px;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: white;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  width: 30%;
  max-width: 40%;
}

/* The Close Button */
.close {
  color: black;
  position: absolute;
  top: 12%;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: grey;
  text-decoration: none;
  cursor: pointer;
}

.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */


img {
  margin-bottom: -4px;
  border-radius: 20px;
}

.caption-container {
  text-align: left;
  background-color: white;
  padding: 2px 16;
  color: black;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>
</head>

<body>

<div class="page-wrapper">
      <?php
      include('sidebar1.php')
      ?>

      

<div class="right-square">
        <div class="large-square contact" style=" width: 260px;
    height: 88px;"></div>
        <div class="w-layout-grid dots-grid contact">
        </div>
      </div>


   
<div class="head2" style="display: flex; padding-top: 7%;">


      <div class="upload" style="margin-top: -17px;
    margin-left: 81%;">
<button class="button type1">
  <span class="btn-txt"><a href="uploadimage.php">UPLOAD</a></span>
</button>
</div>
</div>



<?php
      $sql = "SELECT * from goodthought";			
				if ($result = mysqli_query($conn, $sql)) 
				{
					if (mysqli_num_rows($result) > 0) 
					{
						while ($row = mysqli_fetch_array($result))
						{ 
      ?>
<div class="thought" >
<h2 style="text-align:center; padding-bottom:5%;" >GOOD THOUGHT</h2>
<?php	
$sql = "SELECT * from goodthought";
				if ($result = mysqli_query($conn, $sql)) 
				{
					if (mysqli_num_rows($result) > 0) 
					{
						while ($row = mysqli_fetch_array($result))
						{  
			?>		
<div class="row">
	
  <div class="column">
    <img src="asset/image/goodthoughts/<?php echo $row["goodthought_image"]; ?>" style="height:276px; width:270px;" onclick="openModal();currentSlide(1)" class="hover-shadow cursor"
    >
    
  </div>
  <?php
				}	} }
		?>
</div>


					

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

  <?php
				$sql = "SELECT * from goodthought";
				if ($result = mysqli_query($conn, $sql)) 
				{
					if (mysqli_num_rows($result) > 0) 
					{
						while ($row = mysqli_fetch_array($result))
						{  
			?>
    <div class="mySlides" >
      <img src="asset/image/goodthoughts/<?php echo $row["goodthought_image"]; ?>" style="width:100%;">
    </div>

    <?php
				}	} }
		?>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption" style="    font-weight: 800;
    font-size: 20px; padding-top: 4%;"></p>
    </div>
  </div>


    <div class="container">
    <?php
				$sql = "SELECT * from goodthought";
				if ($result = mysqli_query($conn, $sql)) 
				{
					if (mysqli_num_rows($result) > 0) 
					{
						while ($row = mysqli_fetch_array($result))
						{  
			?>
    <div class="column">
      <img class="demo cursor" src="asset/image/goodthoughts/<?php echo $row["goodthought_image"]; ?>" style="width: 268px;
    height: 276px;"
 onclick="currentSlide(1)" alt="<?php echo $row["goodthought_title"]; ?>">
    </div>
    <?php
				}	} }
		?>
    </div>
</div>

</div>
          <?php
             }}}
          ?>

<?php
include('footer1.php')
?>
</div>

<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
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
