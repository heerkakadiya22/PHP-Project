<?php
require_once('conn.php');
session_start();

if(isset($_POST['stdid'])) {
    $stdId = $_POST['stdid'];

    // Retrieve user ID from the session
    if(isset($_SESSION['user']['user_id'])) {
        $userId = $_SESSION['user']['user_id'];

        // Insert into wishlist table
        $sql = "INSERT INTO wishlist (std_id, user_id) VALUES ('$stdId', '$userId')";
        if(mysqli_query($conn, $sql)) {
            echo 1;
        } else {
            echo 0;
        }
    } else {
        echo "User not logged in.";
    }
} else {
    echo "Invalid request.";
}
?>
