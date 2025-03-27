<?php
    include "connection.php";

    // Check if form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect form data
        $admin_id = $_POST['admin_id'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Update admin details in the database
        $sql = "UPDATE admin_login SET log_email = '$email', log_password = '$password' WHERE login_id = $admin_id";

        if(mysqli_query($conn, $sql)) {
           header ('location:alladmin.php'); 
			} else {
            echo "Error updating admin details: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    } else {
        echo "Form submission method not allowed.";
    }
?>
