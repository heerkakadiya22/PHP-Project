<?php
include "connection.php";

// Check if form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all necessary data is received
    if (isset($_POST['event_id']) && isset($_POST['event_title']) && isset($_POST['event_description'])) {
        // Sanitize the inputs
        $event_id = mysqli_real_escape_string($conn, $_POST['event_id']);
        $event_title = mysqli_real_escape_string($conn, $_POST['event_title']);
        $event_description = mysqli_real_escape_string($conn, $_POST['event_description']);

        // Check if a new image is uploaded
        if ($_FILES['event_image']['name'] != '') {
            $file_name = $_FILES['event_image']['name'];
            $file_size = $_FILES['event_image']['size'];
            $file_tmp = $_FILES['event_image']['tmp_name'];
            $file_type = $_FILES['event_image']['type'];
            $file_ext = strtolower(end(explode('.', $file_name)));
            
            $extensions = array("jpeg", "jpg", "png");
            
            if (in_array($file_ext, $extensions) === false) {
                echo "Extension not allowed, please choose a JPEG or PNG file.";
                exit;
            }
            
            if ($file_size > 2097152) {
                echo 'File size must be less than 2 MB';
                exit;
            }
            
            $new_file_name = "event_" . $event_id . "." . $file_ext;
            move_uploaded_file($file_tmp, "../asset/image/events/" . $new_file_name);
            
            // Update event image in the database
            $sql_image = "UPDATE event SET event_image='$new_file_name' WHERE event_id=$event_id";
            if (!mysqli_query($conn, $sql_image)) {
                echo "Error updating event image: " . mysqli_error($conn);
                exit;
            }
        }

        // Update event data in the database
        $sql = "UPDATE event SET event_title='$event_title', event_description='$event_description' WHERE event_id=$event_id";
        if (mysqli_query($conn, $sql)) {
            // Event updated successfully
            header("Location: allevents.php"); // Redirect to the page where you display all events
            exit;
        } else {
            echo "Error updating event: " . mysqli_error($conn);
            exit;
        }
    } else {
        echo "Incomplete data received.";
        exit;
    }
} else {
    echo "Invalid request method.";
    exit;
}

mysqli_close($conn);
?>
