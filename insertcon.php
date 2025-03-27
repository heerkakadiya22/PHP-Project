<?php
require_once('conn.php');
if(isset($_POST['submit']))
{
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email_id=$_POST['email_id'];
$phone_no=$_POST['phone_no'];
$message=$_POST['message'];

$sql= "INSERT INTO contactus(first_name,last_name,email_id,phone_no,message)
values('$first_name','$last_name','$email_id','$phone_no','$message')";
$result=mysqli_query($conn, $sql);
if($result){
    header("location:contactus.php");
    echo "Your message send "; 
}
else{ 
echo "Could not insert record: "; 
}
}
?>


