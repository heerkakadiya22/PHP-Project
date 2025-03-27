<?php
session_start();
require_once('conn.php');
if(isset($_POST['submit']))
{
$user_name=$_POST['user_name'];
$user_email=$_POST['user_email'];
$user_gender=$_POST['user_gender'];
$user_identity=$_POST['user_identity'];
$user_age=$_POST['user_age'];
$password=$_POST['password'];
$child_name=$_POST['child_name'];
$child_age=$_POST['child_age'];
$child_gender=$_POST['child_gender'];

        $filename=$_FILES["thumb_image"]["name"];
        $tempname=$_FILES["thumb_image"]["tmp_name"];
        $folder="asset/image/user_img/".$filename;

$sql= "INSERT INTO user(thumb_image,user_name,user_email,user_gender,user_identity,user_age,password,child_name,child_age,child_gender)
values('$filename','$user_name','$user_email','$user_gender','$user_identity','$user_age','$password','$child_name','$child_age','$child_gender')";
$result=mysqli_query($conn, $sql);
move_uploaded_file($tempname, $folder);

if($result){
$_SESSION['user']['user_id'] = mysqli_insert_id($conn);
 $_SESSION['user']['user_name']=$user_name;
$_SESSION['user']['user_email']=$user_email; 
$_SESSION['user']['user_identity']=$user_identity; 
$_SESSION['child_age']=$child_age;
$_SESSION['child_gender']=$child_gender; 
header("location:main.php");
}
else{ 
echo "Could not insert record: "; 
}
}

?>



