<?php
    include "connection.php";
	include "header.php";
	include "sidebar.php";
?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Your Categories Here...</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Manage Categories</li>
          <li class="breadcrumb-item active">Add Categories</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">CATEGORIES </h5>
			 

              <!-- Floating Labels Form -->
              <form class="row g-3" method="post" onsubmit="return validateForm()">
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" placeholder="Your Name" name="catname">
                    <label for="floatingName" >CATEGORY NAME</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;" name="catdet"></textarea>
                    <label for="floatingTextarea" >CATEGORY DETAILS</label>
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
	</form>
  


<?php
	if(isset($_POST['btnsubmit']))
	{
    require_once('connection.php');
			$currentdate = date('Y-m-d H:i:s');
		$sqlquery = "INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_details`,`created_date`,`usertype_id`) VALUES (NULL, '".$_POST['catname']."', '".$_POST['catdet']."','".$currentdate."','".$_POST['sel_usertype_id']."')";
		
		if(mysqli_query($conn, $sqlquery))
		{
            echo "Your record successfully inserted";			
			} 
		else 
		{
			echo "oops somehing went wrong....";
			}
	}
	?>
	<script>
  function validateForm() {
    var catname = document.getElementById("floatingName").value;
    var catdet = document.getElementById("floatingTextarea").value;

    if (catname.trim() == '') {
      alert("Please enter a category name.");
      return false;
    }

    if (catdet.trim() == '') {
      alert("Please enter an category details.");
      return false;
    }

    return true;
  }
</script>

 <?php
	include "footer.php";
?>
