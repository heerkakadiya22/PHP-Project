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
    <link rel="stylesheet" href="asset/css/subtopic.css">
    <link rel="shortcut icon" type="image/png" href="asset/image/logo.png"/>
    

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Lora&family=Open+Sans:wght@500&display=swap" rel="stylesheet">


<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
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

<!--sidebar-->
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
  class="w-commerce-commercecartopenlinkcount cart-quantity" style="margin-top: 1%;
    margin-right: 5.3%;"><?php echo $tot_wish;?></div>
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


    <div class="right-square">
        <div class="large-square contact" style="width: 244px;"></div>
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
      
      <div class="base-container w-container">
        <div class="banner-title-wrapper">
          <img src="asset/image/heart.png" alt="" srcset="" style="    height: 69px;
    margin: auto;
    margin-top: 100px;
 ">
 <h1 style="margin: auto; padding-top:5%">WATCH LATER</h1>
        </div>
      </div>
    

    <div class="py-3 py-md-5 bg-light">
        <div class="container">
    
            <div class="row">
                <div class="col-md-12">
                    <div class="shopping-cart">

                        <div class="cart-header d-none d-sm-none d-mb-block d-lg-block" style="    width: 77%;
    margin-left: 17%;">
                            <div class="row">
                                <div class="col-md-6" style="    width: 35%;">
                                    <h4>Subtopic</h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>Title</h4>
                                </div>
                                <div class="col-md-2">
                                    <h4 style="margin-left: 110%;">Remove</h4>
                                </div>
                            </div>
                        </div>


<?php	
            $sql = "SELECT wishlist.*, sub_topic_details.std_title, sub_topic_details.std_thumbimage 
            FROM wishlist 
            LEFT JOIN sub_topic_details ON wishlist.std_id = sub_topic_details.std_id
            where user_id = '".$_SESSION['user']['user_id']."'";
                     if ($result = mysqli_query($conn, $sql)) 
                     {
                       if (mysqli_num_rows($result) > 0) 
                       {
                      while($row = mysqli_fetch_array($result)){     
                   ?>
                   
                        <div class="cart-item" id="cart-<?php echo $row["wishlist_id"] ?>">
                            <div class="row">
                                <div class="col-md-6 my-auto" style="width: 40%;">
                                    <a href="">
                                        <label class="product-name">
                                            <img src="asset/image/std_image/<?php echo $row["std_thumbimage"]; ?>" style="width: 150px; height: 150px" alt="">
                                        </label>
                                    </a>
                                </div>
            
                                <div class="col-md-2 my-auto" style="width: 35.666667%;">
                                    <label class="price"><a href='subtopic.php?stdid=<?php echo $row["std_id"]; ?>'><?php echo $row["std_title"]; ?></a> </label>
                                </div>

                                <div class="col-md-2 col-5 my-auto">
                                   <div class="removedata">
                                      <a href="javascript:void(0);" data-delid="<?php echo $row["wishlist_id"] ?>" class="btn btn-danger btn-sm remove">
                                            <i class="fa fa-trash"></i> Remove
                                        </a>
                                    </div>
                                </div>
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


    <?php
include('footer1.php')
?>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script type="text/javascript">
        $(document).ready(function(){

            $('.remove').click(function(){
                var el = this;

                var removeid = $(this).data('delid');

                var confirmalert = confirm("Are you sure?");
                if (confirmalert == true) {
                  $.ajax({
                    url: 'delete_wish.php',
                    type: 'POST',
                    data: { delid:removeid },
                    success: function(response){
							//alert(response);
                      if(response == 1){
                        $("#cart-"+removeid).css('background','lightgreen');
                        $("#cart-"+removeid).fadeOut(800,function(){
                         $("#cart-"+removeid).remove();
                     });
                }
                else
                {
                        alert('Invalid Input.');
                }
					}
            });
              }
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
