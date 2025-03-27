<?php
require_once('conn.php');
  session_start(); 

function getIPAddress() 
{  
   $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
      $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
      $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
      $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
      $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
      $ipaddress = getenv('REMOTE_ADDR');
    else
      $ipaddress = 'UNKNOWN';
    return $ipaddress;  
}  
if(isset($_POST['btn-login']))
{
    $user_email=$_POST['user_email'];
    $user_identity=$_POST['user_identity'];
    $password=$_POST['password'];

$sql= "SELECT  user.*,usertype.usertype FROM user  LEFT JOIN usertype ON usertype.usertype_id = user.user_identity where user_email='$user_email' AND user_identity='$user_identity' AND password='$password' AND user_active=0";

  $result = mysqli_query($conn, $sql);

  if ($result === false) 
  {
    echo "Error: " . mysqli_error($conn);
  } 
  else 
  {
    if (mysqli_num_rows($result) > 0) 
    {
      $row = mysqli_fetch_assoc($result);
      $_SESSION['user']['loguser_id'] = $row['user_id'];
      $_SESSION['user']['loguser_email'] = $row['user_email'];
      
      date_default_timezone_set("Asia/Calcutta"); 
      $current_date = date('Y-m-d H:i:s');
      
       $uip= getIPAddress();  
       $token = getToken(6);
       // get the user ip
      // query for inser user log in to data base
      mysqli_query($conn,"INSERT INTO user_logs (log_id, loguser_id, loguser_email, user_ip, login_datetime) VALUES (NULL, '".$_SESSION['user']['loguser_id']."', '".$_SESSION['user']['loguser_email']."', '".$uip."', '".$current_date ."');");
      
      mysqli_query($conn,"UPDATE user SET user_last_login = '".$current_date."' WHERE user.user_id = ".$_SESSION['user']['loguser_id'].";");
      mysqli_query($conn,"UPDATE user SET `token`='".$token."' WHERE `user`.`user_id`=".$_SESSION['user']['loguser_id'].";");
      //echo "UPDATE user SET `token`='".$token."' WHERE `user`.`id`=".$_SESSION['admin']['admin_id'].";";
      $_SESSION['user']['token'] = $token;
      $user_name=$row['user_name'];
    
      $_SESSION['user']['user_id'] = $row['user_id'];
      $_SESSION['user']['user_name']=$row['user_name'];  
      $_SESSION['user']['user_email']=$row['user_email']; 
      $_SESSION['user']['user_identity']=$row['user_identity']; 
	header("Location:main.php");
     
    }
    else
    {
      $_SESSION['error_msg'] = "Oops!! You are not Registered with us or not activated for now.Please Contact to Admin.";
      header("Location:signup.php");

    }
  }
}

// Generate token
function getToken($length){
  $token = "";
  $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
  $codeAlphabet.= "0123456789";
  $max = strlen($codeAlphabet); // edited

  for ($i=0; $i < $length; $i++) {
    $token .= $codeAlphabet[random_int(0, $max-1)];
  }

  return $token;
}
?>