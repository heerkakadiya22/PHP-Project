<?php
    // Include database connection file
    include "connection.php";
    
    // SQL query to delete all logs
    $sql = "DELETE FROM admin_login_logs";
    
    if(mysqli_query($conn, $sql)){
        // If deletion is successful
        echo 1;
    } else {
        // If deletion fails
        echo 0;
    }
    
    // Close database connection
    mysqli_close($conn);
?>
