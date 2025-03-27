<?php
session_start();
require_once('connection.php');
if(isset($_POST['btnsubmit']))
{
$user_name=$_POST['user_name'];
$user_email=$_POST['user_email'];
$user_gender=$_POST['user_gender'];
$user_identity=$_POST['user_identity'];
$user_age=$_POST['user_age'];
$password=$_POST['userpassword'];
$child_name=$_POST['child_name'];
$child_age=$_POST['child_age'];
$child_gender=$_POST['child_gender'];
$catfilename = $_FILES["uploadcat"]["name"];


        $cattempname = $_FILES["uploadcat"]["tmp_name"];
        $catfolder = "../asset/image/user_img/" . $catfilename;
        move_uploaded_file($cattempname, $catfolder);
$sql= "INSERT INTO user(user_name,user_email,user_gender,user_identity,user_age,password,child_name,child_age,child_gender,`thumb_image`)
values('$user_name','$user_email','$user_gender','$user_identity','$user_age','$userpassword','$child_name','$child_age','$child_gender','$catfilename')";
$result=mysqli_query($conn, $sql);
if($result){

header("location:addusers.php");
}
else{ 
echo "Could not insert record: "; 
}
}
?>