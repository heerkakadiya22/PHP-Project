<?php
    include "header.php";
    include "sidebar.php";
    include "connection.php";

    // Check if the subtopic ID is provided in the URL
    if(isset($_GET['id'])) {
        $std_id = $_GET['id'];

        // Query to fetch subtopic details based on the ID
        $sql = "SELECT sub_topic_details.*, topic.topic_title, categories.cat_title, subtopic.sub_title
                FROM sub_topic_details
                LEFT JOIN subtopic ON sub_topic_details.subtopic_id = subtopic.subtopic_id
                LEFT JOIN topic ON sub_topic_details.topic_id = topic.topic_id
                LEFT JOIN categories ON sub_topic_details.cat_id = categories.cat_id
                WHERE std_id = $std_id";
        
        $result = mysqli_query($conn, $sql);

        // Check if the subtopic exists
        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit Subtopic Details</h1>
        <!-- Breadcrumb navigation -->
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="subtopics.php">Manage Subtopics</a></li>
                <li class="breadcrumb-item active">Edit Subtopic Details</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Form to edit subtopic details -->
                        <form method="post" action="update_std_det.php" onsubmit="return validateForm()">
                            <!-- Hidden input field to pass subtopic ID -->
                            <input type="hidden" name="std_id" value="<?php echo $row['std_id']; ?>">
                            
                            <div class="mb-3">
                                <label for="std_title" class="form-label">Subtopic Details Title</label>
                                <input type="text" class="form-control" id="std_title" name="std_title" value="<?php echo $row['std_title']; ?>">
                            </div>
                                                       
                            <div class="mb-3">
                                <label for="topic_title" class="form-label">Topic Title</label>
                                <input type="text" class="form-control" id="topic_title" name="topic_title" value="<?php echo $row['topic_title']; ?>" readonly>
                            </div>
                            
                            <div class="mb-3">
                                <label for="cat_title" class="form-label">Category Title</label>
                                <input type="text" class="form-control" id="cat_title" name="cat_title" value="<?php echo $row['cat_title']; ?>" readonly>
                            </div>
                            
                            <div class="mb-3">
                                <label for="sub_title" class="form-label">Subtopic Title</label>
                                <input type="text" class="form-control" id="sub_title" name="sub_title" value="<?php echo $row['sub_title']; ?>" readonly>
                            </div>
                            
                            <div class="mb-3">
                                <label for="std_details" class="form-label">Subtopic Details</label>
                                <textarea class="form-control" id="std_details" name="std_details"><?php echo $row['std_details']; ?></textarea>
                            </div>
                            
                            <div class="mb-3">
                                <label for="std_thumbimage" class="form-label">Thumbnail Image</label>
                                <input type="file" class="form-control" id="std_thumbimage" name="std_thumbimage">
                                <img src="../asset/image/std_image/<?php echo $row['std_thumbimage']; ?>" alt="Thumbnail" style="max-width: 100px; max-height: 100px;">
                            </div>
                            
                            <!-- Add more fields as needed -->

                            <button type="submit" class="btn btn-primary">Update Subtopic</button>
                        </form>
                        <!-- End form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
        } else {
            echo "Subtopic not found.";
        }
    } else {
        echo "Subtopic ID not provided.";
    }

    // Include footer file
    include "footer.php";
?>
<script>
    function validateForm() {
        // Retrieve values from form fields
        var std_title = document.getElementById("std_title").value.trim();
        var std_details = document.getElementById("std_details").value.trim();
        
        // Check if any field is empty
        if (std_title === '' || std_details === '') {
            // Display popup box
            alert("Please fill in all the fields.");
            return false; // Prevent form submission
        } else {
            // If all fields are filled, allow form submission
            return true;
        }
    }
</script>
