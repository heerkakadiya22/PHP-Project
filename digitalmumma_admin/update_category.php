<?php
    // Include connection file
    include "connection.php";

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if cat_id and other necessary fields are set
        if(isset($_POST['cat_id']) && isset($_POST['cat_title']) && isset($_POST['cat_details']) && isset($_POST['sel_usertype_id'])) {
            // Sanitize input to prevent SQL injection
            $cat_id = mysqli_real_escape_string($conn, $_POST['cat_id']);
            $cat_title = mysqli_real_escape_string($conn, $_POST['cat_title']);
            $cat_details = mysqli_real_escape_string($conn, $_POST['cat_details']);
            $usertype_id = mysqli_real_escape_string($conn, $_POST['sel_usertype_id']);

            // SQL query to update category details
            $sql = "UPDATE categories SET cat_title='$cat_title', cat_details='$cat_details', usertype_id='$usertype_id' WHERE cat_id='$cat_id'";
            
            // Execute the query
            if (mysqli_query($conn, $sql)) {
                // Redirect to a success page or display a success message
                header("Location: categories.php"); // Redirect to category list page
                exit();
            } else {
                echo "Error updating category: " . mysqli_error($conn);
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
