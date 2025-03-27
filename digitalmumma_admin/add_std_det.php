<?php
    include "connection.php"; 
    include "header.php";
    include "sidebar.php";
?>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Add your Sub_topic_details here...</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item">Manage SubTopic_details</li>
                <li class="breadcrumb-item active">Add SubTopic_details</li>
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
                                    <input type="text" class="form-control" id="floatingName" placeholder="Your Name" name="subtopdetname">
                                    <label for="floatingName">SUBTOPIC DETAILS TITLE</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;" name="subtopdetitle"></textarea>
                                    <label for="floatingTextarea">SUBTOPIC DETAILS</label>
                                </div>
                            </div>
                            <input type="file" name="uploadcat" value=""  enctype="multipart/form-data">
                            <div></div>
                            <br>
                            <br>
                            <label class="block mt-4 text-sm">
                                <span class="text-gray-700 dark:text-gray-400">
                                    subtopic
                                </span>
                                <select name="sel_subtop_id" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                    <?php
                                        $sql = "SELECT * FROM subtopic";
                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            while($row = mysqli_fetch_assoc($result)) {
                                                echo "<option value='".$row["subtopic_id"]."'>".$row["sub_title"]."</option>";
                                            }
                                        } else {
                                            echo "0 results";
                                        }
                                    ?>
                                </select>
                                <label class="block mt-4 text-sm">
                                    <span class="text-gray-700 dark:text-gray-400">
                                        topic
                                    </span>
                                    <select name="sel_topic" class="full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                        <?php
                                            $sql = "SELECT * FROM topic";
                                            $result = mysqli_query($conn, $sql);
                                            if (mysqli_num_rows($result) > 0) {
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    echo "<option value='".$row["topic_id"]."'>".$row["topic_title"]."</option>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        ?>
                                    </select>
                                    <label class="block mt-4 text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">
                                            categories
                                        </span>
                                        <select name="sel_cat" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            <?php
                                                $sql = "SELECT * FROM categories";
                                                $result = mysqli_query($conn, $sql);
                                                if (mysqli_num_rows($result) > 0) {
                                                    while($row = mysqli_fetch_assoc($result)) {
                                                        echo "<option value='".$row["cat_id"]."'>".$row["cat_title"]."</option>";
                                                    }
                                                } else {
                                                    echo "0 results";
                                                }
                                            ?>
                                        </select>
                                    </label>
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

    // Sanitize user inputs
    $subtopdetname = mysqli_real_escape_string($conn, $_POST['subtopdetname']);
    $subtopdetitle = mysqli_real_escape_string($conn, $_POST['subtopdetitle']);
    $sel_subtop_id = mysqli_real_escape_string($conn, $_POST['sel_subtop_id']);
    $sel_topic = mysqli_real_escape_string($conn, $_POST['sel_topic']);
    $sel_cat = mysqli_real_escape_string($conn, $_POST['sel_cat']);

    // File upload handling
    $catfilename = $_FILES["uploadcat"]["name"];
    $cattempname = $_FILES["uploadcat"]["tmp_name"];
    $catfolder = "../asset/image/std_image/" . $catfilename;

    // Move uploaded file to destination folder
    if (move_uploaded_file($cattempname, $catfolder)) {
        // SQL query to insert data into the 'sub_topic_details' table
        $sqlquery = "INSERT INTO `sub_topic_details` (`std_id`, `subtopic_id`, `topic_id`, `cat_id`, `std_details`, `std_title`, `std_thumbimage`) 
                     VALUES (NULL, '$sel_subtop_id', '$sel_topic', '$sel_cat', '$subtopdetname', '$subtopdetitle', '$catfilename')";

        // Execute SQL query
        if (mysqli_query($conn, $sqlquery)) {
            echo "Your record was successfully inserted";
        } else {
            echo "Oops! Something went wrong: " . mysqli_error($conn);
        }
    } else {
        echo "Failed to upload file.";
    }
}
?>

<script>
    function validateForm() {
        var subtopname = document.getElementById("floatingName").value;
        var subtopdet = document.getElementById("floatingTextarea").value;

        if (subtopname.trim() == '' || subtopdet.trim() == '') {
            alert("Please fill in all fields.");
            return false;
        }

        return true;
    }
</script>


<?php
    include "footer.php";
?>
