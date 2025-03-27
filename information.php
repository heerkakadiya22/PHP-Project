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

/*$stdid = ()?$_SESSION['search']['std_id']:;
$sql2="UPDATE sub_topic_details SET std_view = std_view + 1 where std_id =".$stdid;
$rs=mysqli_query($conn,$sql2);*/

if(isset($_GET['catid']))
{
	$_SESSION['search']['category_id'] = $_GET['catid'];
}
if(isset($_GET['topicid']))
{
	$_SESSION['search']['topicid'] = $_GET['topicid'];
}
if(isset($_GET['topicid']))
{
	$_SESSION['search']['topicid'] = $_GET['topicid'];
}
if(isset($_POST['btnsearch']))
{
	$_SESSION['search']['txtsearch'] = $_POST['txtsearch'];
	if(isset($_POST['sel_sort']))
	{
		$_SESSION['search']['txtsort'] = $_POST['sel_sort'];
		header("Location:information.php");
	}
	header("Location:information.php");
}
if(isset($_GET['all']))
{
	unset($_SESSION['search']);
}

$pages = 0;
$per_page_rec = 5;
$page = 1;
if(isset($_GET['page']))
{
	$page = $_GET['page'];
}
?>
<!DOCTYPE html>
<html
  data-wf-domain="healthfulbits.webflow.io"
  data-wf-page="5f581c26c00b167e9f3aaef1"
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
<style>
select{
   background-color: #c2ebc2;
    border: none;
    padding: 19px 25px;
    border-radius: 45px;
    font-weight: 600;
}

  select option {
    background: white;
    padding:0 30px 0 10px;
    align-items:center;
    min-height:40px;
  }
  select option:hover {
  background:#666;
}
select:focus{
  outline:none;
  font-weight: 500;
}
</style>
  </head>
  <body>

    <div class="section article-categories">
      <div class="container">
        <div class="categories">
          <div class="catergories-contain">
			   <div class="flex" style="display: flex;">       
					<form method="post" action="information.php" class="search">
						<div class="search__icon">
						  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="20"style="margin-left:10px" height="20" viewBox="0 0 20 20">
							<title>magnifying-glass</title>
							<path d="M17.545 15.467l-3.779-3.779c0.57-0.935 0.898-2.035 0.898-3.21 0-3.417-2.961-6.377-6.378-6.377s-6.186 2.769-6.186 6.186c0 3.416 2.961 6.377 6.377 6.377 1.137 0 2.2-0.309 3.115-0.844l3.799 3.801c0.372 0.371 0.975 0.371 1.346 0l0.943-0.943c0.371-0.371 0.236-0.84-0.135-1.211zM4.004 8.287c0-2.366 1.917-4.283 4.282-4.283s4.474 2.107 4.474 4.474c0 2.365-1.918 4.283-4.283 4.283s-4.473-2.109-4.473-4.474z"></path>
						  </svg>
						</div>
						  <input type="text" class="search__input" name="txtsearch" placeholder="Search..." style="width: 60%;" value="<?php echo (isset($_SESSION['search']['txtsearch'])?$_SESSION['search']['txtsearch']:""); ?>" />
                          
            <select name="sel_sort" id="language" style="margin-left: 10%;">
              <option value="sort">Sorting</option>
              <option value="asc" <?php echo ((isset($_SESSION['search']['txtsort']) && $_SESSION['search']['txtsort']== "asc") ?"Selected":""); ?>>Asc</option>
              <option value="desc" <?php echo ((isset($_SESSION['search']['txtsort']) && $_SESSION['search']['txtsort']== "desc") ?"Selected":""); ?>>Desc</option>
            </select>

						<input type="submit" style="border-radius: 30px;
							padding: 16px;
							padding-left: 30px;
							padding-right: 30px;
							margin-left: 1%;
							font-weight:500;" name="btnsearch" value="search" />
					</form> 
				</div> 

		<?php
			$cat_name = "";
			$cat_details = "";
		if(isset($_SESSION['search']['category_id']))
		{
			$sql = "SELECT cat_title,cat_details from categories where cat_id =".$_SESSION['search']['category_id'];
				if ($result = mysqli_query($conn, $sql)) 
				{
					if (mysqli_num_rows($result) > 0) 
					{
						while ($row = mysqli_fetch_array($result))
						{ 
							$cat_name = $row['cat_title']."->";
							$cat_details =  $row['cat_details'];
						}
					}
				}
		}
   
			$topic_name = "";
			$topic_details = "";
		if(isset($_SESSION['search']['topicid']))
		{
			$sql = "SELECT topic_details,topic_title from topic where topic_id =".$_SESSION['search']['topicid'];
				if ($result = mysqli_query($conn, $sql)) 
				{
					if (mysqli_num_rows($result) > 0) 
					{
						while ($row = mysqli_fetch_array($result))
						{ 
							
							$topic_name = $row['topic_title'];
							$topic_details =  $row['topic_details'];
						}
					}
				}
		}
		?>

            <h1 style="font-size:40px;"><?php echo (($cat_name=="")?"All Categories->":$cat_name).(($topic_name=="")?"All Topics":$topic_name); ?></h1>
              <a href="information.php?all=all">All Topic</a>
            <p class="max-700w">
				<?php echo $cat_details; ?>
            </p>
			<p class="max-700w">
				<?php echo $topic_details; ?>
            </p>
            <div class="base-container w-container">
        <div data-w-id="614f7888-cf3e-ac83-11f4-d5dafffde3b1" style="opacity:0; padding-top:5%" class="section-title-wrapper">

        </div>

        <div class="career-collection-list-wrapper w-dyn-list" style="border-radius: 10px; ">
          <div role="list" class="w-dyn-items">
 <?php
		$where = " where usertype_id=".$_SESSION['user']['user_identity'];
			if(isset($_SESSION['search']['category_id']))
			{
				if($where == "")
				{
					$where .= " where cat_id=".$_SESSION['search']['category_id'];
				}
				else
				{
					$where .= " AND cat_id=".$_SESSION['search']['category_id'];
				}
			}
			if(isset($_SESSION['search']['topicid']))
			{
				if($where == "")
				{
					$where .= " where topic_id=".$_SESSION['search']['topicid'];
				}
				else
				{
					$where .= " AND topic_id=".$_SESSION['search']['topicid'];
				}
			}
			
			if(isset($_SESSION['search']['txtsearch']) && $_SESSION['search']['txtsearch']!="")
			{
				if($where == "")
				{
					$where .= " where sub_title LIKE '%".$_SESSION['search']['txtsearch']."%'";
				}
				else
				{
					$where .= " AND sub_title LIKE '%".$_SESSION['search']['txtsearch']."%'";
				}
			}
			$order_by = " ORDER BY sub_title ASC";
			if(isset($_SESSION['search']['txtsort']) && $_SESSION['search']['txtsort']!="sort")
			{
				$order_by = " ORDER BY sub_title ".$_SESSION['search']['txtsort'];
			}
				$sql = "SELECT * from subtopic";
				$limit = " LIMIT ".(($page-1)*$per_page_rec).",".$per_page_rec;
				
				$result_count = mysqli_query($conn, $sql.$where);
				$pages = mysqli_num_rows($result_count) / $per_page_rec;
			
				if ($result = mysqli_query($conn, $sql.$where.$order_by.$limit )) 
				{
					if (mysqli_num_rows($result) > 0) 
					{
						while ($row = mysqli_fetch_array($result))
						{  
			?>
          <button type="button" class="collapsible"><?php echo $row["sub_title"]; ?></button>
			
           <div class="content">
		   <div class="articles-wrapper w-dyn-list">
            <div role="list" class="article-collection-list w-dyn-items">

            <?php
              $sql1 = "SELECT * from sub_topic_details where subtopic_id = ".$row["subtopic_id"];
              if ($result1 = mysqli_query($conn, $sql1)) 
              {
                if (mysqli_num_rows($result1) > 0) 
                {
                  while ($row1 = mysqli_fetch_array($result1))
                  { 
            ?>
				   <div role="listitem" class="article-item _50-percent w-dyn-item">
            <div class="article-card-link _50-percent w-inline-block"
            data-w-id="73715b1d-1bfb-c12f-0a03-fee8490494ed">

            <div class="flex" style="display: flex;">
              <form class="wishlist-form">
                  <button type="button" class="button2 wishlist-button" data-stdid="<?php echo $row1["std_id"]; ?>">
                      <img src="asset/image/heart.png" alt="" height="22px">
                  </button>
              </form>
            
              
             <h5 style="font-weight: 600;
                 margin-top: 4px; margin-left: 3%;"><?php echo $row1["std_view"]." Views"; ?></h5>

              </div>

            <a href='subtopic.php?stdid=<?php echo $row1["std_id"]; ?>'> 
                    <h3><?php echo $row1["std_title"]; ?></h3>
                    <p><?php echo $row1["std_details"]; ?></p>
                    <div
                      style="background-image:url(asset/image/std_image/<?php echo $row1["std_thumbimage"]; ?>)"
                      class="article-card-image"
                    ></div>
                    <div data-w-id="73715b1d-1bfb-c12f-0a03-fee8490494f2" class="article-card-read-more-link">
                      <h5 class="read-more">Read more</h5>
                    </div>
                  </a>
                  </div>
                </div>
            <?php
                  }}}
            ?>
				</div>
				</div>
			</div>
      <?php
				}	} }
		?>
            </div>

          </div>
        
        <!-- pagination elements -->
        <div class="pagination_section" style="padding-top: 5%;">
            <a href="information.php?page=<?php echo (intval($page)<=1)?$page:(intval($page)-1) ; ?>">
                 Previous
            </a>
             
                <?php
                  for($i=1;$i<=$pages;$i++)
                  {
                ?>
                  <a href="information.php?page=<?php echo $i; ?>" class="<?php echo (($i==$page)?"wp_active":""); ?>">
                    <?php echo $i; ?>
                  </a>
                <?php
                  }
                ?>
              
            <a href="information.php?page=<?php echo ((intval($page)>=$pages)?$page:(intval($page)+1)) ; ?>">
            Next 
            </a>
        </div>
        </div>

          </div>

          <div class="categories-nav">
            <div class="sticky">
              <h4>Categories</h4>
              <div class="w-dyn-list">
                <div role="list" class="w-dyn-items">

                  <?php  
                   $sql = "SELECT * from categories where usertype_id ='".$_SESSION['user']['user_identity']."'";
				
                   if ($result = mysqli_query($conn, $sql)) {
                   if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {  
                            echo "<a class='button categories article-categories w-button".((isset($_SESSION['search']['category_id']) && $_SESSION['search']['category_id']==$row["cat_id"]) ? "w--current" : "")."' href='information.php?catid=".$row["cat_id"]."'>".$row["cat_title"]. "</a>";
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

              <h4>Topic</h4>
              <div class="w-dyn-list">
                <div role="list" class="w-dyn-items">
                    
                <?php  
               $sql = "SELECT * from topic where usertype_id ='".$_SESSION['user']['user_identity']."'";
                if ($result = mysqli_query($conn, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {  
                            echo "<a class='button categories article-categories w-button ".((isset($_SESSION['search']['topic_id']) && $_SESSION['search']['topic_id']==$row["topic_id"]) ? "w--current" : "")."' href='information.php?topicid=".$row["topic_id"]."' >".$row["topic_title"]. "</a>";
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
          </div>
        </div>
      </div>
      

      <div class="right-square">
        <div class="large-square categories"></div>
        <div class="w-layout-grid dots-grid shop">
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
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
    

    <?php
include('sidebar1.php')
   ?>

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
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>

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

  </body>
</html>
