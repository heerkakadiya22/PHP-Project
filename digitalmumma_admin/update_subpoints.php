<?php
    include "connection.php"; // Include database connection

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $point_id = $_POST['point_id'];
        $point_title = $_POST['point_title'];
        $points = $_POST['points'];
        $std_title = $_POST['std_title']; // This might not be necessary for the update, but I'll include it for consistency
        
        // Update query with prepared statement
        $sql = "UPDATE std_sub_points
                SET point_title = ?, points = ?
                WHERE point_id = ?";

        // Prepare the statement
        $stmt = mysqli_prepare($conn, $sql);

        // Bind parameters
        mysqli_stmt_bind_param($stmt, "ssi", $point_title, $points, $point_id);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            // If update successful, redirect back to the subtopic list page
            header("Location: all_std_sub_points.php");
            exit();
        } else {
            // If there's an error, display an error message
            echo "Error updating subtopic: " . mysqli_error($conn);
        }
    } else {
        // If accessed without form submission, redirect back to the edit page
        header("Location: edit_subpoints.php?id=" . $_POST['point_id']);
        exit();
    }
?>
