<?php
    // Include connection file
    include "connection.php";

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if topic ID and other necessary fields are set
        if(isset($_POST['topic_id']) && isset($_POST['topic_title']) && isset($_POST['topic_details']) && isset($_POST['sel_usertype_id'])) {
            // Sanitize input to prevent SQL injection
            $topic_id = mysqli_real_escape_string($conn, $_POST['topic_id']);
            $topic_title = mysqli_real_escape_string($conn, $_POST['topic_title']);
            $topic_details = mysqli_real_escape_string($conn, $_POST['topic_details']);
            $usertype_id = mysqli_real_escape_string($conn, $_POST['sel_usertype_id']);

            // SQL query to update topic details
            $sql = "UPDATE topic SET topic_title='$topic_title', topic_details='$topic_details', usertype_id='$usertype_id' WHERE topic_id='$topic_id'";
            
            // Execute the query
            if (mysqli_query($conn, $sql)) {
                // Redirect to a success page or display a success message
                header("Location: alltopic.php"); // Redirect to topic list page
                exit();
            } else {
                echo "Error updating topic: " . mysqli_error($conn);
            }
        } else {
            echo "Required fields missing";
        }
    } else {
        echo "Invalid request";
    }

    // Close connection
    mysqli_close($conn);
?>
