<?php
    include "connection.php"; 
    include "header.php";
    include "sidebar.php";
?>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Add your event details here...</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item">Manage events</li>
                <li class="breadcrumb-item active">Add events</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">EVENT_details</h5>
                        <!-- Floating Labels Form -->
                        <form class="row g-3" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingName" placeholder="Your Name" name="eventname">
                                    <label for="floatingName">EVENT TITLE</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;" name="eventtitle"></textarea>
                                    <label for="floatingTextarea">EVENT DESCRIPTION </label>
                                </div>
                            </div>
						
                            <input type="file" name="uploadcat" value=""  enctype="multipart/form-data">
                            <div></div>
                            <br>
                            
							<label for="floatingTextarea">EVENT DATE</label>
                                
                                <input type="date" name="datetime" value="" >
                            
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
	include "connection.php";
	if (isset($_POST['btnsubmit'])) 
	{
		$catfilename = $_FILES["uploadcat"]["name"];
		$catfilename = $_FILES["uploadcat"]["tmp_name"];  
        $catfolder = "../asset/image/events/".$catfilename; 
   
		date_default_timezone_set("Asia/Kolkata");
		$currentdatetime = date("Y-m-d H:i:s");
		
		 $sqlquery = "INSERT INTO `event`(`event_id`,`event_title`,`event_description`,`event_image`,`datetime`,`event_lastupdated`)VALUES (NULL,'".$_POST['eventname']."', '".$_POST['eventtitle']."','".$catfilename."', '".$_POST['datetime']."','".$currentdatetime."')";
		
		mysqli_query($conn, $sqlquery); 
		
		  move_uploaded_file($cattempname, $catfolder);
	}

?>
  

<script>
    function validateForm() {
        var eventname = document.getElementById("floatingName").value;
        var eventtitle = document.getElementById("floatingTextarea").value;

        if (eventname.trim() == '' || eventtitle.trim() == '') {
            alert("Please fill in all fields.");
            return false;
        }

        return true;
    }
</script>


<?php
    include "footer.php";
?>
