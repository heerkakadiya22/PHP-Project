<?php
    // Include connection file
    include "connection.php";

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if subtopic ID and other necessary fields are set
        if(isset($_POST['subtopic_id']) && isset($_POST['topic_title']) && isset($_POST['cat_title']) && isset($_POST['sub_title']) && isset($_POST['sub_details']) && isset($_POST['usertype'])) {
            // Sanitize input to prevent SQL injection
            $subtopic_id = mysqli_real_escape_string($conn, $_POST['subtopic_id']);
            $topic_title = mysqli_real_escape_string($conn, $_POST['topic_title']);
            $cat_title = mysqli_real_escape_string($conn, $_POST['cat_title']);
            $sub_title = mysqli_real_escape_string($conn, $_POST['sub_title']);
            $sub_details = mysqli_real_escape_string($conn, $_POST['sub_details']);
            $usertype = mysqli_real_escape_string($conn, $_POST['usertype']);

            // Update subtopic details in the database
            $sql = "UPDATE subtopic 
                    SET topic_title='$topic_title', cat_title='$cat_title', sub_title='$sub_title', sub_details='$sub_details', usertype='$usertype'
                    WHERE subtopic_id='$subtopic_id'";
            
            // Execute the query
            if (mysqli_query($conn, $sql)) {
                // Redirect to a success page or display a success message
                header("Location: subtopics.php"); // Redirect to subtopic list page
                exit();
            } else {
                echo "Error updating subtopic: " . mysqli_error($conn);
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
