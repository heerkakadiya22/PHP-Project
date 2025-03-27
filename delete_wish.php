<?php
require_once('conn.php');

if (isset($_POST['delid'])) 
{
    
    $sql1="DELETE FROM wishlist WHERE `wishlist_id`=".$_POST["delid"];
	if(mysqli_query($conn,$sql1))
		{
			echo 1;
		}
		else
		{
			echo 0;
		}				
}
?>