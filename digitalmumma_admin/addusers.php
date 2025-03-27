<?php
    include "connection.php"; 
    include "header.php";
    include "sidebar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User Details</title>
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Add your user details here...</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item">Manage add_users</li>
                    <li class="breadcrumb-item active">Add users</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">User Details</h5>
                            <!-- Floating Labels Form -->
                            <form class="row g-3" method="post" action="adduserphp.php" enctype="multipart/form-data" onsubmit="return validateForm()" >
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingName" placeholder="Your Name" name="user_name">
                                        <label for="floatingName">ENTER YOUR NAME</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingEmail" placeholder="Your email" name="user_email">
                                        <label for="floatingEmail">ENTER YOUR EMAIL</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="floatingPassword" placeholder="Your password" name="userpassword">
                                        <label for="floatingPassword">ENTER YOUR PASSWORD</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="user_gender" id="male" value="male">
                                        <label class="form-check-label" for="male">Male</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="user_gender" id="female" value="female">
                                        <label class="form-check-label" for="female">Female</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="user_gender" id="other" value="other">
                                        <label class="form-check-label" for="other">Other</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="file" name="uploadcat" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                                <div class="col-md-12">
								who are you???...
                                    <select name="user_identity" class="form-select" aria-label="Default select example">
                                        <?php
                                        $sql = "SELECT * FROM usertype";
                                        $result = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($result) > 0) {
                                            while($row = mysqli_fetch_assoc($result)) {
                                                echo "<option value='" . $row["usertype_id"] . "'>" . $row["usertype"] . "</option>";
                                            }
                                        } else {
                                            echo "<option value=''>No User Types Found</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="floatingAge" placeholder="Your age" name="user_age">
                                        <label for="floatingAge">ENTER YOUR AGE</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingChildName" placeholder="Your child's name" name="child_name">
                                        <label for="floatingChildName">ENTER YOUR CHILD'S NAME</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="floatingChildAge" placeholder="Your child's age" name="child_age">
                                        <label for="floatingChildAge">ENTER YOUR CHILD'S AGE</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="child_gender" id="girl" value="girl">
                                        <label class="form-check-label" for="girl">Girl</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="child_gender" id="boy" value="boy">
                                        <label class="form-check-label" for="boy">Boy</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary" name="btnsubmit">Submit</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                    </div>
                                </div>
                            </form><!-- End floating Labels Form -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
</body>
</html>

<script>
    function validateForm() {
        var name = document.getElementById("floatingName").value;
        var email = document.getElementById("floatingEmail").value;
        var password = document.getElementById("floatingPassword").value;
        var age = document.getElementById("floatingAge").value;
        var childName = document.getElementById("floatingChildName").value;
        var childAge = document.getElementById("floatingChildAge").value;

        if (name.trim() == '' || age.trim() == '' || childName.trim() == '' || childAge.trim() == '') {
            alert("Please fill in all fields.");
            return false;
        }

        // Validate email format
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert("Please enter a valid email address.");
            return false;
        }

        // Validate password length and pattern (at least 8 characters and a mix of letters and numbers)
        var passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
        if (!passwordRegex.test(password)) {
            alert("Password must be at least 8 characters long and contain at least one letter and one number.");
            return false;
        }

        return true;
    }
</script>


<?php
    include "footer.php";
?>
