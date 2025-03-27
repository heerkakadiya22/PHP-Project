 
 <?php
	include "connection.php";
	if(isset($_POST["delid"]))
		{		
						
		$sql="DELETE from std_sub_points WHERE `point_id`=".$_POST["delid"];
				
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