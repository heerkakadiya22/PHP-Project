
 <?php
	include "connection.php";
	if(isset($_POST["delid"]))
		{		
						
		$sql="DELETE from event_participents WHERE `event_participents_id`=".$_POST["delid"];
				
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