<?php
    include "connection.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data and sanitize
        $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
        $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
        $user_email = mysqli_real_escape_string($conn, $_POST['user_email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $user_gender = mysqli_real_escape_string($conn, $_POST['user_gender']);
        $user_identity = mysqli_real_escape_string($conn, $_POST['user_identity']);
        $user_age = mysqli_real_escape_string($conn, $_POST['user_age']);
        $child_name = mysqli_real_escape_string($conn, $_POST['child_name']);
        $child_age = mysqli_real_escape_string($conn, $_POST['child_age']);
        $child_gender = mysqli_real_escape_string($conn, $_POST['child_gender']);
        
        // Check if a new thumbnail image is uploaded
        if ($_FILES['thumb_image']['error'] === UPLOAD_ERR_OK) {
            $file_tmp_name = $_FILES['thumb_image']['tmp_name'];
            $file_name = $_FILES['thumb_image']['name'];
            $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
            $new_file_name = "user_" . $user_id . "." . $file_extension;
            $file_destination = "../asset/image/user_img/" . $new_file_name;

            // Move the uploaded file to the destination folder
            if (move_uploaded_file($file_tmp_name, $file_destination)) {
                // Update the database with the new thumbnail image
                $sql = "UPDATE user SET thumb_image = '$new_file_name' WHERE user_id = '$user_id'";
                mysqli_query($conn, $sql);
            } else {
                echo "Error uploading file.";
                exit();
            }
        }

        // Update user details in the database
        $sql = "UPDATE user SET user_name = '$user_name', user_email = '$user_email', password = '$password', user_gender = '$user_gender', user_identity = '$user_identity', user_age = '$user_age', child_name = '$child_name', child_age = '$child_age', child_gender = '$child_gender' WHERE user_id = '$user_id'";
        
        if (mysqli_query($conn, $sql)) {
            // Redirect to the page showing all users
            header("Location: allusers.php");
            exit();
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    } else {
        echo "Invalid request.";
    }
?>
