<?php
	include "connection.php";
	include "form.js";
	include "header.php";
	include "sidebar.php";
	
?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>FAQS</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Manage Faqs</li>
          <li class="breadcrumb-item active">Add Faq</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Floating labels Form</h5>

              <!-- Floating Labels Form -->
              <form class="row g-3" method="post" onsubmit="return validateForm()">
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" placeholder="Your Name" name="faqname">
                    <label for="floatingName">Question?</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;" name="faqdet"></textarea>
                    <label for="floatingTextarea">Answer</label>
                  </div>
                </div>

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
	if(isset($_POST['btnsubmit']))
	{
    $faqs_title = $_POST['faqname'];
        $faqs_details = $_POST['faqdet'];

		$sqlquery = "INSERT INTO `faqs` (`faqs_id`, `faqs_title`, `faqs_details`) VALUES (NULL, '$faqs_title', 'faqs_details')";
		 
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
    var faqName = document.getElementById("floatingName").value;
    var faqDet = document.getElementById("floatingTextarea").value;

    if (faqName.trim() == '') {
      alert("Please enter a question.");
      return false;
    }

    if (faqDet.trim() == '') {
      alert("Please enter an answer.");
      return false;
    }

    return true;
  }
</script>


 <?php
	include "footer.php";
?>
