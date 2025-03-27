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
}?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Digital Mumma</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="asset/css/style.css" >
  <link rel="shortcut icon" type="image/png" href="asset/image/logo.png"/>
	<style>
	.btn:hover{
       background-color: #6b878d;
	   cursor: pointer;
	}
	</style>
</head>

<body style="background-color: #264d53;">
<div class="forms" style=" border: 4px solid #14494b">

  <div class="form-content" style="background-color:whitesmoke; padding:30px 40px 30px 40px;"> 
  <div class="arrow" style="display: flex;">	
  <a href="goodthought.php"><img src="asset/image/sidescrolldown.png" alt="" srcset="" height="22px" ></a>
  <h2 style="color: #14494b; margin-left:20%;    margin-top: -2%;
">Upload Image</h2>
  </div>
<form method="POST" action="" enctype="multipart/form-data">
<div class="input-boxes">
<div class="input-box">
<input type="text" name="goodthought_title" id="" placeholder="Your Note" required>
</div>

<input type="file" name="goodthought_image" id="" placeholder="Upload Image" style=" background-color: #6b878d;
    padding: 10px;
    border: 1px solid #2d6a69;
    border-radius: 5px;
    font-size: 16px;
    width: 300px;
    outline: none;" required>

<div class="button input-box" >
<button type="submit" name="upload" class="btn" style="width: 100%;
    height: 60px;
    border-radius: 2px;
    background-color: #19494b;
	color: white;
	font-size:larger;
    -webkit-transition: all 350ms ease;
    transition: all 350ms ease;">Submit</button>
</div>
</div>
</form>
  </div>
  </div>
 

<?php
			  if(isset($_POST['upload']))
			  {
				  $filename=$_FILES["goodthought_image"]["name"];
				  $tempname=$_FILES["goodthought_image"]["tmp_name"];
				  $folder="asset/image/goodthoughts/".$filename;

					include ('conn.php');
                    $goodthought_title=$_POST['goodthought_title'];
					$sql="INSERT INTO goodthought(goodthought_title,goodthought_image) VALUES('".$goodthought_title."','".$filename."')";
					$result=mysqli_query($conn,$sql);
					move_uploaded_file($tempname,$folder);
                    if($result){
                        header("location:goodthought.php");
                        }
                        else{
                            echo "Could not insert record: ";
                        }
			  }
			?>
</body>
</html>