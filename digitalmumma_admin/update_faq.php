<?php
    // Include connection file
    include "connection.php";

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if faqs_id and other necessary fields are set
        if(isset($_POST['faqs_id']) && isset($_POST['faqs_title']) && isset($_POST['faqs_details'])) {
            // Sanitize input to prevent SQL injection
            $faqs_id = mysqli_real_escape_string($conn, $_POST['faqs_id']);
            $faqs_title = mysqli_real_escape_string($conn, $_POST['faqs_title']);
            $faqs_details = mysqli_real_escape_string($conn, $_POST['faqs_details']);

            // SQL query to update FAQ details
            $sql = "UPDATE faqs SET faqs_title='$faqs_title', faqs_details='$faqs_details' WHERE faqs_id='$faqs_id'";
            
            // Execute the query
            if (mysqli_query($conn, $sql)) {
                // Redirect to a success page or display a success message
                header("Location: faqs.php"); // Redirect to FAQ list page
                exit();
            } else {
                echo "Error updating FAQ: " . mysqli_error($conn);
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
