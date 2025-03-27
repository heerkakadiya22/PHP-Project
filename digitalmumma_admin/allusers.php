<?php
    include "header.php";
    include "sidebar.php";
    include "connection.php";
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">



<main id="main" class="main">
    <div class="pagetitle">
        <h1>All the user details</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item">Manage users</li>
                <li class="breadcrumb-item active">all users</li>
            </ol>
        </nav>
		
		<a href="javascriptvoid:(0)" style="background-color:#478f7d; border:solid 0px black;"  id="btn_export" onclick="fnExcelReport();" class="btn btn-danger">Export All Logs</a>	
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card" style="width : fit-content";>
                    <div class="card-body">
                        <table class="table datatable" id="headerTable">
                            <thead>
                                <tr>
                                    <th>#Id</th>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Gender</th>
                                    <th>Thumbnail Image</th>
                                    <th>User Identity</th>
                                    <th>User Age</th>
                                    <th>Child Name</th>
                                    <th>Child Age</th>
                                    <th>Child Gender</th>
                                    <th data-type="date" data-format="YYYY/DD/MM">Created Date</th>
                                    <th data-type="date" data-format="YYYY/DD/MM">Last Updated</th>
                                    <th>Last Login</th>
                                    <th>Actions</th>
									<th>active/deactive</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql = "SELECT * FROM user";
                                    $result = mysqli_query($conn, $sql);

                                    if ($result === false) {
                                        echo "Error: " . mysqli_error($conn);
                                    } else {
                                        if (mysqli_num_rows($result) > 0) {
                                            while($row = mysqli_fetch_assoc($result)) {
                                                echo "<tr>";
                                                echo "<td>".$row["user_id"]."</td>";
                                                echo "<td>".$row["user_name"]."</td>";
                                                echo "<td>".$row["user_email"]."</td>";
                                                echo "<td>".$row["password"]."</td>";
                                                echo "<td>".$row["user_gender"]."</td>";
                                                echo "<td><img src='../asset/image/user_img/".$row["thumb_image"]."' alt='Thumbnail' style='max-width: 100px; max-height: 100px;'></td>";
                                                echo "<td>".$row["user_identity"]."</td>";
                                                echo "<td>".$row["user_age"]."</td>";
                                                echo "<td>".$row["child_name"]."</td>";
                                                echo "<td>".$row["child_age"]."</td>";
                                                echo "<td>".$row["child_gender"]."</td>";
                                                echo "<td>".$row["user_created_date"]."</td>";
                                                echo "<td>".$row["user_lastupdated"]."</td>";
                                                echo "<td>".$row["user_last_login"]."</td>";
                                                echo "<td>
        <a href='edit_user.php?id=".$row["user_id"]."'><i class='fas fa-edit'></i></a>
        <a href='javascript:void(0)' data-delid='".$row['user_id']."' class='delete'><i class='fas fa-trash-alt'></i></a>
		
    </td>";
							echo "<td><div class='form-check form-switch'>
						  <input class='form-check-input user-switch' type='checkbox' role='switch' data-uid = '".$row["user_id"]."' id='flexSwitchCheckChecked' ".(($row["user_active"]==0)?"checked":"").">
						 </div> </td>";

                                            }
                                        } else {
                                            echo "<tr><td colspan='15'>0 results</td></tr>";
                                        }
                                    }
                                    mysqli_close($conn);
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>







<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    function fnExcelReport() {
    var tab_text = "<table border='2px'><tr bgcolor='#87AFC6'>";
    var j = 0;
    var tab = document.getElementById('headerTable'); // id of table

    for (j = 0; j < tab.rows.length; j++) {
        tab_text = tab_text + tab.rows[j].innerHTML + "</tr>";
        //tab_text=tab_text+"</tr>";
    }

    tab_text = tab_text + "</table>";
    tab_text = tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table
    tab_text = tab_text.replace(/<img[^>]*>/gi, ""); // remove if u want images in your table
    tab_text = tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params

    var msie = window.navigator.userAgent.indexOf("MSIE ");

    // If Internet Explorer
    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
        txtArea1.document.open("txt/html", "replace");
        txtArea1.document.write(tab_text);
        txtArea1.document.close();
        txtArea1.focus();

        sa = txtArea1.document.execCommand("SaveAs", true, "Say Thanks to Sumit.xls");
    } else {
        // other browser not tested on IE 11
        sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));
    }

    return sa;
}</script>
   <script type="text/javascript">
        $(document).ready(function(){

            $('.delete').click(function(){
                var el = this;

                var deleteid = $(this).data('delid');
                var confirmalert = confirm("Are you sure?");
                if (confirmalert == true) {
                  $.ajax({
                    url: 'delete_user.php',
                    type: 'POST',
                    data: { delid:deleteid },
                    success: function(response){
							
                      if(response == 1){
                        $(el).closest('tr').css('background','tomato');
                        $(el).closest('tr').fadeOut(800,function(){
                         $(this).remove();
                     });
                }else{
                        alert('Invalid Input.');
                }
					}
            });
              }
          });
		  
		  $('.user-switch').change(function(){
				var status = 0;
				
				if (!$(this).is(":checked") ) 
				{
					status = 1;
					 var uid = $(this).data('uid');
						
					 var confirmalert = confirm("Are you sure?");
						if (confirmalert == true) {
						  $.ajax({
							url: 'delete_user.php',
							type: 'POST',
							data: { status:status,uid:uid },
							success: function(response){
								
							}
					});
					  }	
				}
				
			});
        });
    </script>


<?php
    include "footer.php";
?>
