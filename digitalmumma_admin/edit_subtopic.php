<?php
    include "header.php";
    include "sidebar.php";
    include "connection.php";

    // Check if the subtopic ID is provided in the URL
    if(isset($_GET['id'])) {
        $subtopic_id = $_GET['id'];

        // Query to fetch subtopic details based on the ID
        $sql = "SELECT subtopic.*,usertype.usertype,topic_title,cat_title FROM subtopic LEFT JOIN usertype ON subtopic.usertype_id = usertype.usertype_id
                LEFT JOIN topic ON subtopic.topic_id = topic.topic_id 
                LEFT JOIN categories ON subtopic.cat_id = categories.cat_id
                WHERE subtopic_id = $subtopic_id";
        $result = mysqli_query($conn, $sql);

        // Check if the subtopic exists
        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit Subtopic</h1>
        <!-- Breadcrumb navigation -->
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="subtopics.php">Manage Subtopics</a></li>
                <li class="breadcrumb-item active">Edit Subtopic</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Form to edit subtopic details -->
                        <form method="post" action="update_subtopic.php" onsubmit="return validateForm()">
                            <!-- Hidden input field to pass subtopic ID -->
                            <input type="hidden" name="subtopic_id" value="<?php echo $row['subtopic_id']; ?>">
                            
                            <div class="mb-3">
                                <label for="topic_title" class="form-label">Topic Title</label>
                                <input type="text" class="form-control" id="topic_title" name="topic_title" value="<?php echo $row['topic_title']; ?>">
                            </div>
                            
                            <div class="mb-3">
                                <label for="cat_title" class="form-label">Category Title</label>
                                <input type="text" class="form-control" id="cat_title" name="cat_title" value="<?php echo $row['cat_title']; ?>">
                            </div>
                            
                            <div class="mb-3">
                                <label for="sub_title" class="form-label">Subtopic Title</label>
                                <input type="text" class="form-control" id="sub_title" name="sub_title" value="<?php echo $row['sub_title']; ?>">
                            </div>
                            
                            <div class="mb-3">
                                <label for="sub_details" class="form-label">Subtopic Details</label>
                                <textarea class="form-control" id="sub_details" name="sub_details"><?php echo $row['sub_details']; ?></textarea>
                            </div>
                            
                            <div class="mb-3">
                                <label for="usertype" class="form-label">Usertype</label>
                                <input type="text" class="form-control" id="usertype" name="usertype" value="<?php echo $row['usertype']; ?>">
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
        var topic_title = document.getElementById("topic_title").value.trim();
        var cat_title = document.getElementById("cat_title").value.trim();
	    var sub_title = document.getElementById("sub_title").value.trim();
		 var sub_details = document.getElementById("sub_details").value.trim();
        var usertype = document.getElementById("usertype").value;

        if (topic_title === '' || cat_title === '' || sub_title === ''|| sub_details === ''|| userType === '') {
            alert("Please fill in all the fields.");
            return false;
        }
        return true;
    }
</script>