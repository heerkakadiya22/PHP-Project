
 <?php
	include "connection.php";
	if(isset($_POST["delid"]))
		{		
						
		$sql="DELETE from user WHERE `user_id`=".$_POST["delid"];
				
		if(mysqli_query($conn,$sql))
		{
			echo 1;
		}
		else
		{
				echo 0;
		}
					
						
		}
		if(isset($_POST["status"]))
		{		
						
		$sql="UPDATE `user` SET `user_active` = '".$_POST["status"]."' WHERE `user`.`user_id` = ".$_POST["uid"].";";
				
		if(mysqli_query($conn,$sql))
		{
			echo 1;
		}
		else
		{
				echo 0;
		}
					
						
		}
?>