<?php
include "connection.php"; 
include "header.php";
include "sidebar.php"; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add your topic here...</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Manage topic</li>
          <li class="breadcrumb-item active">Add Topic</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">TOPIC </h5>

              <!-- Floating Labels Form -->
              <form class="row g-3" method="post" onsubmit="return validateForm()">
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" placeholder="Your Name" name="topname">
                    <label for="floatingName">TOPIC NAME</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;" name="topdet"></textarea>
                    <label for="floatingTextarea">TOPIC DETAILS</label>
                  </div>
                </div>
				<label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                 
				 Who are you??..
                </span>
                <select name="sel_usertype_id"
        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
    >
    <?php
                                    $sql = "SELECT * FROM usertype";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        while($row = mysqli_fetch_assoc($result)) {
                                            echo "<option value='" . $row["usertype_id"] . "'>" . $row["usertype"] . "</option>";
                                        }
                                    } else {
                                        echo "<option value=''>No user types found</option>";
                                    }
                                    ?>
    </select>
              
              </label>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary" name="btnsubmit">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End floating Labels Form -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
<?php
  if(isset($_POST['btnsubmit'])) {
    require_once('connection.php');
    // Escape user inputs to prevent SQL injection
    $topic_title = mysqli_real_escape_string($conn, $_POST['topname']);
    $topic_details = mysqli_real_escape_string($conn, $_POST['topdet']);
    $usertype_id = mysqli_real_escape_string($conn, $_POST['sel_usertype_id']);

    // SQL query to insert data into the 'topic' table
    $sqlquery = "INSERT INTO `topic` (`topic_title`, `topic_details`, `usertype_id`) VALUES ('$topic_title', '$topic_details', '$usertype_id')";

    if(mysqli_query($conn, $sqlquery)) {
        echo "Your record was successfully inserted.";			
    } else {
        echo "Oops! Something went wrong.";
    }
}
?>


	<script>
  function validateForm() {
    var topname = document.getElementById("floatingName").value;
    var topdet = document.getElementById("floatingTextarea").value;

    if (topname.trim() == '') {
      alert("Please enter a topic name.");
      return false;
    }

    if (topdet.trim() == '') {
      alert("Please enter an topic details.");
      return false;
    }

    return true;
  }
</script>

 <?php
	include "footer.php";
?>