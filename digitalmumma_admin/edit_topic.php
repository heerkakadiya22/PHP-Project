<?php
    include "header.php";
    include "sidebar.php";
    include "connection.php";

    // Check if the topic ID is provided in the URL
    if(isset($_GET['id'])) {
        $topic_id = $_GET['id'];

        // Query to fetch topic details based on the ID
        $sql = "SELECT topic.*, usertype.usertype FROM topic LEFT JOIN usertype ON topic.usertype_id = usertype.usertype_id WHERE topic_id = $topic_id";
        $result = mysqli_query($conn, $sql);

        // Check if the topic exists
        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit Topic</h1>
        <!-- Breadcrumb navigation -->
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="topics.php">Manage topics</a></li>
                <li class="breadcrumb-item active">Edit topic</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Form to edit topic details -->
                        <form method="post" action="update_topic.php" onsubmit="return validateForm()">
                            <!-- Hidden input field to pass topic ID -->
                            <input type="hidden" name="topic_id" value="<?php echo $row['topic_id']; ?>">
                            
                            <div class="mb-3">
                                <label for="topic_title" class="form-label">Topic Title</label>
                                <input type="text" class="form-control" id="topic_title" name="topic_title" value="<?php echo $row['topic_title']; ?>">
                            </div>
                            
                            <div class="mb-3">
                                <label for="topic_details" class="form-label">Topic Details</label>
                                <textarea class="form-control" id="topic_details" name="topic_details"><?php echo $row['topic_details']; ?></textarea>
                            </div>
                            
                            <div class="mb-3">
                                <label for="sel_usertype_id" class="form-label">Usertype</label>
                                <select name="sel_usertype_id" id="sel_usertype_id" class="form-select">
                                    <?php
                                        // Query to fetch usertypes
                                        $usertype_sql = "SELECT * FROM usertype";
                                        $usertype_result = mysqli_query($conn, $usertype_sql);

                                        if(mysqli_num_rows($usertype_result) > 0) {
                                            while($usertype_row = mysqli_fetch_assoc($usertype_result)) {
                                                $selected = ($usertype_row['usertype_id'] == $row['usertype_id']) ? "selected" : "";
                                    ?>
                                                <option value="<?php echo $usertype_row['usertype_id']; ?>" <?php echo $selected; ?>><?php echo $usertype_row['usertype']; ?></option>
                                    <?php
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Update Topic</button>
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
            echo "Topic not found.";
        }
    } else {
        echo "Topic ID not provided.";
    }

    // Include footer file
    include "footer.php";
?>
<script>
    function validateForm() {
        var topic_title = document.getElementById("topic_title").value.trim();
        var topic_details = document.getElementById("topic_details").value.trim();
        var userType = document.getElementById("sel_usertype_id").value;

        if (topic_title === '' || topic_details === '' || userType === '') {
            alert("Please fill in all the fields.");
            return false;
        }
        return true;
    }
</script>
