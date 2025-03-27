<?php
	include "connection.php"; 
	include "header.php";
	include "sidebar.php";
?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add your Subtopic here...</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Manage Subtopic</li>
          <li class="breadcrumb-item active">Add SubTopic</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">SUBTOPIC </h5>

              <!-- Floating Labels Form -->
              <form class="row g-3" method="post" onsubmit="return validateForm()">

                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" placeholder="Your Name" name="subtopname">
                    <label for="floatingName">SUBTOPIC NAME</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;" name="subtopdet"></textarea>
                    <label for="floatingTextarea">SUBTOPIC DETAILS</label>
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

					if (mysqli_num_rows($result) > 0) 
					{
					  // output data of each row
					  while($row = mysqli_fetch_assoc($result)) {
						
				?>
                  <option value="<?php echo $row["usertype_id"]; ?>" ><?php echo $row["usertype"]; ?></option>
				  <?php
					
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
                <select name="sel_topic"
                  class="full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                >
				<?php
					$sql = "SELECT * FROM topic";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) 
					{
					  // output data of each row
					  while($row = mysqli_fetch_assoc($result)) {
						
				?>
                  <option value="<?php echo $row["topic_id"]; ?>" ><?php echo $row["topic_title"]; ?></option>
				  <?php
					
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
                <select name="sel_cat"
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                >
				<?php
					$sql = "SELECT * FROM categories";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) 
					{
					  // output data of each row
					  while($row = mysqli_fetch_assoc($result)) {
						
				?>
                  <option value="<?php echo $row["cat_id"]; ?>" ><?php echo $row["cat_title"]; ?></option>
				  <?php
					
					  }
					} else {
					  echo "0 results";
					}
				?>
                 
                </select>
              
              </label>
			  <br><br>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary" name="btnsubmit" onsubmit="return validateForm()">Submit</button>
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

    // Sanitize user inputs
    $topic_id = mysqli_real_escape_string($conn, $_POST['sel_topic']);
    $cat_id = mysqli_real_escape_string($conn, $_POST['sel_cat']);
    $sub_title = mysqli_real_escape_string($conn, $_POST['subtopname']);
    $sub_details = mysqli_real_escape_string($conn, $_POST['subtopdet']);
    $usertype_id = mysqli_real_escape_string($conn, $_POST['sel_usertype_id']);
    $currentdate = date('Y-m-d H:i:s');

    // SQL query to insert data into the 'subtopic' table
    $sqlquery = "INSERT INTO `subtopic` (`subtopic_id`, `topic_id`, `cat_id`, `sub_title`, `sub_details`, `created_date`, `usertype_id`) 
                 VALUES (NULL, '$topic_id', '$cat_id', '$sub_title', '$sub_details', '$currentdate', '$usertype_id')";

    if(mysqli_query($conn, $sqlquery)) {
        echo "Your record was successfully inserted.";			
    } else {
        echo "Oops! Something went wrong: " . mysqli_error($conn);
    }
}
?>


<script>
  function validateForm() {
    var subtopname = document.getElementById("floatingName").value;
    var subtopdet = document.getElementById("floatingTextarea").value;

    if (subtopname.trim() == '') {
      alert("Please enter a question.");
      return false;
    }

    if (subtopdet.trim() == '') {
      alert("Please enter an answer.");
      return false;
    }

    return true;
  }
</script>

 <?php
	include "footer.php";
?>