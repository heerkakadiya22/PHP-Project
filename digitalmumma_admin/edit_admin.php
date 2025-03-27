<?php
    include "header.php";
    include "sidebar.php";
    include "connection.php";

    // Check if ID is provided in the URL
    if(isset($_GET['id'])) {
        $admin_id = $_GET['id'];
        
        // Fetch admin details based on the ID
        $sql = "SELECT * FROM admin_login WHERE login_id = $admin_id";
        $result = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($result) > 0) {
            $admin = mysqli_fetch_assoc($result);
        } else {
            echo "Admin not found.";
        }
    } else {
        echo "Admin ID not provided.";
    }
?>
            <main id="main" class="main">
                <div class="pagetitle">
                    <h1>Edit admin_details</h1>
                    <!-- Breadcrumb navigation -->
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="alladmin.php">Manage admin</a></li>
                            <li class="breadcrumb-item active">Edit admin_details</li>
                        </ol>
                    </nav>
                </div><!-- End Page Title -->

                <section class="section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <!-- Form to edit category details -->
                                    <h2>Edit Admin Details</h2>
    <form action="update_admin.php" method="POST" onsubmit="return validateForm()">
        <input type="hidden" name="admin_id" value="<?php echo $admin['login_id']; ?>">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $admin['log_email']; ?>">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" value="<?php echo $admin['log_password']; ?>">
        </div>
        <!-- Add more fields if needed -->
        <button type="submit" class="btn btn-primary">Update</button>
    </form>                                
                                        <!-- End form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>

<?php
        

    // Include footer file
    include "footer.php";
?>


<script>
    function validateForm() {
        var email = document.getElementById("email").value.trim();
        var password = document.getElementById("password").value.trim();
       
        if (email === '' || password === '') {
            alert("Please fill in all the fields.");
            return false;
        }
        return true;
    }
</script>
