<?php
    include "header.php";
    include "sidebar.php";
    include "connection.php";

    // Check if faqs_id parameter exists in the URL
    if(isset($_GET['id'])) {
        // Sanitize the input to prevent SQL injection
        $faqs_id = mysqli_real_escape_string($conn, $_GET['id']);
        
        // SQL query to fetch FAQ details by faqs_id
        $sql = "SELECT * FROM faqs WHERE faqs_id = '$faqs_id'";
        $result = mysqli_query($conn, $sql);
        
        // Check if FAQ exists
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            // Assign FAQ details to variables
            $faqs_title = $row["faqs_title"];
            $faqs_details = $row["faqs_details"];
        } else {
            echo "FAQ not found";
            exit(); // Stop execution if FAQ not found
        }
    } else {
        echo "FAQ ID not provided";
        exit(); // Stop execution if FAQ ID not provided
    }
?>

<!-- HTML form to edit FAQ details -->
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit FAQ</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="update_faq.php" method="POST">
                            <input type="hidden" name="faqs_id" value="<?php echo $faqs_id; ?>">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="faqs_title" value="<?php echo $faqs_title; ?>">
                            </div>
                            <div class="form-group">
                                <label>Details</label>
                                <textarea class="form-control" name="faqs_details"><?php echo $faqs_details; ?></textarea>
                            </div>
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
