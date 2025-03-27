<?php
include "header.php";
include "sidebar.php";
include "connection.php";

// Check if event ID is provided in the URL
if(isset($_GET['id'])) {
    // Sanitize the input to prevent SQL injection
    $event_id = mysqli_real_escape_string($conn, $_GET['id']);
    
    // SQL query to fetch event details by event_id
    $sql = "SELECT * FROM event WHERE event_id = '$event_id'";
    $result = mysqli_query($conn, $sql);
    
    // Check if event exists
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // Assign event details to variables
        $event_title = $row["event_title"];
        $event_description = $row["event_description"];
        $event_image = $row["event_image"];
    } else {
        echo "Event not found";
        exit(); 
    }
} else {
    echo "Event ID not provided";
    exit(); // Stop execution if event ID not provided
}
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit Event Details</h1>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="update_event.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
                            <input type="hidden" name="event_id" value="<?php echo $event_id; ?>">
                            <div class="form-group">
                                <label>Event Title</label>
                                <input type="text" class="form-control" name="event_title" value="<?php echo $event_title; ?>">
                            </div><br>
                            <div class="form-group">
                                <label>Event Description</label>
                                <textarea class="form-control" name="event_description"><?php echo $event_description; ?></textarea>
                            </div><br>
                            <div class="form-group">
                                <label>Event Image</label>
                                <input type="file" class="form-control-file" name="event_image">
                                <img src="../asset/image/events/<?php echo $event_image; ?>" alt="Thumbnail" style="max-width: 100px; max-height: 100px;">
                            </div><br><br>
                            <div class="form-group">
                                <label>Event Date</label>
                                <input type="date" class="form-control" name="datetime" value="<?php echo $row['datetime']; ?>">
                            </div>
							<br>
							<br>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
include "footer.php";
?>

<script>
    function validateForm() {
        var event_title = document.getElementsByName("event_title")[0].value.trim();
        var event_description = document.getElementsByName("event_description")[0].value.trim();

        if (event_title === '' || event_description === '') {
            alert("Please fill in all the fields.");
            return false;
        }
        return true;
    }
</script>
