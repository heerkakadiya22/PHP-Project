<?php
require_once('conn.php');


// Check if the addcomment form is submitted
if(isset($_POST['addcomment']))
	{
		$anonymous = ($_POST['anonymous']=="on" || $_POST['anonymous']=="On")?1:0;
		
		// Retrieve user ID from the user table based on some criteria
		session_start();
        // Insert comment into the comment table along with the user ID
        $sql = "INSERT INTO comment(user_id,std_id, comments,anonymous) VALUES ('".$_SESSION['user']['loguser_id']."','".$_POST['std_id']."', '".$_POST['comments']."',$anonymous)";
        $result = mysqli_query($conn, $sql);

        if($result) {

            header("location:subtopic.php?stdid=".$_POST['std_id']);
            exit(); // Always exit after redirection
        } else {
            echo "Could not insert record: " . mysqli_error($conn);
        }
    } 
	else 
	{
        echo "User not found.";
    }


?>

<!--delete comment-->
​<?php
require_once('conn.php');

if (isset($_GET['comment_id'])) 
{
    $comment_id = $_GET['comment_id'];
    
    $sql1="DELETE FROM comment WHERE comment_id='$comment_id'";
    $result1=mysqli_query($conn, $sql1);
        if($result1)
        {
            header("location:subtopic.php");
            echo "remove Successfully";
        }
        else
        {
            echo "Can't remove...";
        }
    }
?>


