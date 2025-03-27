<?php
    include "header.php";
    include "sidebar.php";
    include "connection.php";

    // Check if user ID is provided in the URL
    if(isset($_GET['id'])) {
        // Sanitize the input to prevent SQL injection
        $user_id = mysqli_real_escape_string($conn, $_GET['id']);
        
        // SQL query to fetch user details by user_id
        $sql = "SELECT * FROM user WHERE user_id = '$user_id'";
        $result = mysqli_query($conn, $sql);
        
        // Check if user exists
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            // Assign user details to variables
            $user_name = $row["user_name"];
            $user_email = $row["user_email"];
            $password = $row["password"];
            $user_gender = $row["user_gender"];
            $thumb_image = $row["thumb_image"];
            $user_identity = $row["user_identity"];
            $user_age = $row["user_age"];
            $child_name = $row["child_name"];
            $child_age = $row["child_age"];
            $child_gender = $row["child_gender"];
            // You can fetch other details similarly
        } else {
            echo "User not found";
            exit(); // Stop execution if user not found
        }
    } else {
        echo "User ID not provided";
        exit(); // Stop execution if user ID not provided
    }
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit User Details</h1>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="update_user.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
                            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                            <!-- You can include other hidden fields for user_id, etc. -->
                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" class="form-control" name="user_name" value="<?php echo $user_name; ?>">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="user_email" value="<?php echo $user_email; ?>">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" value="<?php echo $password; ?>">
                            </div>
                            <!-- Include other form fields for editing other details -->
                            <div class="form-group">
                                <label>User Gender</label>
                                <select class="form-control" name="user_gender">
                                    <option value="Male" <?php if($user_gender == 'Male') echo 'selected'; ?>>Male</option>
                                    <option value="Female" <?php if($user_gender == 'Female') echo 'selected'; ?>>Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Thumbnail Image</label>
                                <input type="file" class="form-control-file" name="thumb_image">
                                <img src="../asset/image/user_img/<?php echo $thumb_image; ?>" alt="Thumbnail" style="max-width: 100px; max-height: 100px;">
                            </div>
                            <div class="form-group">
                                <label>User Identity</label>
                                <input type="text" class="form-control" name="user_identity" value="<?php echo $user_identity; ?>">
                            </div>
                            <div class="form-group">
                                <label>User Age</label>
                                <input type="number" class="form-control" name="user_age" value="<?php echo $user_age; ?>">
                            </div>
                            <div class="form-group">
                                <label>Child Name</label>
                                <input type="text" class="form-control" name="child_name" value="<?php echo $child_name; ?>">
                            </div>
                            <div class="form-group">
                                <label>Child Age</label>
                                <input type="number" class="form-control" name="child_age" value="<?php echo $child_age; ?>">
                            </div>
                            <div class="form-group">
                                <label>Child Gender</label>
                                <select class="form-control" name="child_gender">
                                    <option value="Male" <?php if($child_gender == 'Male') echo 'selected'; ?>>Male</option>
                                    <option value="Female" <?php if($child_gender == 'Female') echo 'selected'; ?>>Female</option>
                                </select>
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
<script>
    function validateForm() {
        var user_name = document.getElementsByName("user_name")[0].value.trim();
        var user_email = document.getElementsByName("user_email")[0].value.trim();
        var password = document.getElementsByName("password")[0].value.trim();
        var user_gender = document.getElementsByName("user_gender")[0].value.trim();
        var thumb_image = document.getElementsByName("thumb_image")[0].value.trim();
        var user_identity = document.getElementsByName("user_identity")[0].value.trim();
        var user_age = document.getElementsByName("user_age")[0].value.trim();
        var child_name = document.getElementsByName("child_name")[0].value.trim();
        var child_age = document.getElementsByName("child_age")[0].value.trim();

        if (user_name === '' || user_email === '' || password === '' || user_gender === '' || thumb_image === '' || user_identity === '' || user_age === '' || child_name === '' || child_age === '') {
            alert("Please fill in all the fields.");
            return false;
        }
        return true;
    }
</script>

