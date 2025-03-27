<?php
    include "header.php";
    include "sidebar.php";
    include "connection.php";

    // Check if the point_id is set and not empty
    if(isset($_GET['id']) && !empty($_GET['id'])) {
        // Sanitize the input to prevent SQL injection
        $point_id = mysqli_real_escape_string($conn, $_GET['id']);

        // Fetch the details of the subtopic using the point_id
        $sql = "SELECT std_sub_points.*, sub_topic_details.std_title
                FROM std_sub_points
                LEFT JOIN sub_topic_details ON std_sub_points.std_id = sub_topic_details.std_id
                WHERE point_id = '$point_id'";
        
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $point_title = $row['point_title'];
            $points = $row['points'];
        } else {
            echo "Subtopic not found.";
            exit(); // Stop further execution
        }
    } else {
        echo "Invalid request.";
        exit(); // Stop further execution
    }
?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Edit Subtopic</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Manage Std_sub_points</li>
                <li class="breadcrumb-item"><a href="std_subpoints.php">Std_subpoints</a></li>
                <li class="breadcrumb-item active">Edit Subtopic</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <form action="update_subpoints.php" method="POST">
                            <input type="hidden" name="point_id" value="<?php echo $point_id; ?>">
                            <div class="form-group">
                                <label for="point_title">Title:</label>
                                <input type="text" class="form-control" id="point_title" name="point_title" value="<?php echo $point_title; ?>">
                            </div>
                            <div class="form-group">
                                <label for="points">Points:</label>
                                <input type="text" class="form-control" id="points" name="points" value="<?php echo $points; ?>">
                            </div>
                            <div class="form-group">
                                <label for="std_title" class="form-label">Subtopic Details Title</label>
                                <input type="text" class="form-control" id="std_title" name="std_title" value="<?php echo $row['std_title']; ?>">
                            </div>
                           
                           <br><br>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->

<?php
    include "footer.php";
?>
