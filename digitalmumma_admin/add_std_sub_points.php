v<?php
    include "connection.php"; 
    include "header.php";
    include "sidebar.php";
?>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Add your Std_subpoints details here...</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item">Manage Std_subpoints</li>
                <li class="breadcrumb-item active">Add Std_subpoints</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">SubTopic_details</h5>
                        <!-- Floating Labels Form -->
                        <form class="row g-3" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingName" placeholder="Your Name" name="pointname">
                                    <label for="floatingName">POINTS TITLE</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;" name="pointdetails"></textarea>
                                    <label for="floatingTextarea">POINTS DETAILS</label>
                                </div>
                            </div>
                           
                            <label class="block mt-4 text-sm">
                                <span class="text-gray-700 dark:text-gray-400">
                                    subtopic Details
                                </span>
                                <select name="sel_subpoint_id" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <?php
                                        $sql = "SELECT * FROM sub_topic_details";
                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            while($row = mysqli_fetch_assoc($result)) {
                                                echo "<option value='".$row["std_id"]."'>".$row["std_title"]."</option>";
                                            }
                                        } else {
                                            echo "0 results";
                                        }
                                    ?>
                                </select>

                               
                                    <br><br>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary" name="btnsubmit">Submit</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                    </div>
                                </label>
                            </form><!-- End floating Labels Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->


<?php
    if (isset($_POST['btnsubmit'])) {
        require_once('connection.php');

        // Escape user input to prevent SQL injection
        $pointname = mysqli_real_escape_string($conn, $_POST['pointname']); 
        $pointdetails = mysqli_real_escape_string($conn, $_POST['pointdetails']); 
        $std_id = mysqli_real_escape_string($conn, $_POST['sel_subpoint_id']);
    
        // Inserting data into std_sub_points table
        $sqlquery = "INSERT INTO `std_sub_points`(`point_id`, `std_id`, `point_title`, `points`) 
                     VALUES (NULL, '$std_id', '$pointname', '$pointdetails')";
        if (mysqli_query($conn, $sqlquery)) {
            echo "Your record was successfully inserted.";
        } else {
            echo "Oops! Something went wrong: " . mysqli_error($conn);
        }
    }
?>


<script>
    function validateForm() {
        var pointname = document.getElementById("floatingName").value;
        var pointdetails = document.getElementById("floatingTextarea").value;

        if (pointname.trim() == '' || pointdetails.trim() == '') {
            alert("Please fill in all fields.");
            return false;
        }

        return true;
    }
</script>


<?php
    include "footer.php";
?>
