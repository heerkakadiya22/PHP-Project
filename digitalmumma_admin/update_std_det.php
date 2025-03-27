<?php
    include "connection.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if all required fields are set and not empty
        if(isset($_POST['std_id']) && isset($_POST['std_title']) && isset($_POST['std_details'])) {
            // Sanitize inputs
            $std_id = mysqli_real_escape_string($conn, $_POST['std_id']);
            $std_title = mysqli_real_escape_string($conn, $_POST['std_title']);
            $std_details = mysqli_real_escape_string($conn, $_POST['std_details']);
            // You may need to handle other fields similarly if they are being updated
            
            // Update query
            $sql = "UPDATE sub_topic_details SET std_title='$std_title', std_details='$std_details' WHERE std_id=$std_id";

            if (mysqli_query($conn, $sql)) {
                // Redirect back to the page where you display subtopics or any other appropriate page
                header("Location: allstd_det.php");
                exit();
            } else {
                echo "Error updating subtopic details: " . mysqli_error($conn);
            }
        } else {
            echo "All fields are required";
        }
    } else {
        echo "Invalid request method";
    }

    // Close connection
    mysqli_close($conn);
?>
