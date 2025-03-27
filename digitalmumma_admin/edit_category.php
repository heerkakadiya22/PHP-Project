<?php
    // Include header, sidebar, and connection file
    include "header.php";
    include "sidebar.php";
    include "connection.php";

    // Check if the category ID is provided in the URL
    if(isset($_GET['id'])) {
        $cat_id = $_GET['id'];

        // Query to fetch category details based on the ID
        $sql = "SELECT categories.*, usertype.usertype FROM categories LEFT JOIN usertype ON categories.usertype_id = usertype.usertype_id WHERE cat_id = $cat_id";
        $result = mysqli_query($conn, $sql);

        // Check if the category exists
        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
?>

            <main id="main" class="main">
                <div class="pagetitle">
                    <h1>Edit Category</h1>
                    <!-- Breadcrumb navigation -->
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="categories.php">Manage categories</a></li>
                            <li class="breadcrumb-item active">Edit category</li>
                        </ol>
                    </nav>
                </div><!-- End Page Title -->

                <section class="section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <!-- Form to edit category details -->
                                    <form method="post" action="update_category.php" onsubmit="return validateForm()">
                                        <!-- Hidden input field to pass category ID -->
                                        <input type="hidden" name="cat_id" value="<?php echo $row['cat_id']; ?>">
                                        
                                        <div class="mb-3">
                                            <label for="cat_title" class="form-label">Category Title</label>
                                            <input type="text" class="form-control" id="cat_title" name="cat_title" value="<?php echo $row['cat_title']; ?>">
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="cat_details" class="form-label">Category Details</label>
                                            <textarea class="form-control" id="cat_details" name="cat_details"><?php echo $row['cat_details']; ?></textarea>
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
                                        
                                        <button type="submit" class="btn btn-primary">Update Category</button>
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
            echo "Category not found.";
        }
    } else {
        echo "Category ID not provided.";
    }

    // Include footer file
    include "footer.php";
?>



<script>
    function validateForm() {
        var catTitle = document.getElementById("cat_title").value.trim();
        var catDetails = document.getElementById("cat_details").value.trim();
        var userType = document.getElementById("sel_usertype_id").value;

        if (catTitle === '' || catDetails === '' || userType === '') {
            alert("Please fill in all the fields.");
            return false;
        }
        return true;
    }
</script>
