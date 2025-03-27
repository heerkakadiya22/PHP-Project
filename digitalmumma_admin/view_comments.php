<?php
    include "header.php";
    include "sidebar.php";
    include "connection.php";
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<main id="main" class="main">
    <div class="pagetitle">
        <h1>All the comments</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item">Manage comments</li>
                <li class="breadcrumb-item active">comments</li>
            </ol>
        </nav>
		<a href="javascriptvoid:(0)" style="background-color:#478f7d; border:solid 0px black;"  id="btn_export" onclick="fnExcelReport();" class="btn btn-danger">Export All Logs</a>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Table with stripped rows -->
                        <table class="table datatable"  id="headerTable">
                            <thead>
                                <tr>
                                    <th>#id</th>
                                    <th>user_id</th>
								  <th>std_id</th>                                    
								 <th>comments</th> 
									<th>anonymous</th>   								   																 
								<th data-type="date" data-format="YYYY/DD/MM">lastupdated_date</th>                                 
                                   <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql = "SELECT comment.*,sub_topic_details.std_title,std_thumbimage FROM comment LEFT JOIN sub_topic_details ON comment.std_id = sub_topic_details.std_id;";
                                    $result = mysqli_query($conn, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                        // output data of each row
                                        while($row = mysqli_fetch_assoc($result)) {
                                ?>
                                            <tr>
                                                <td><?php echo $row["comment_id"]; ?></td>
                                                <td><?php echo $row["user_id"]; ?></td>
                                                <td><?php echo $row["std_id"]; ?></td>
												 <td><?php echo $row["comments"]; ?></td>
                                                <td><?php echo $row["anonymous"]; ?></td>
												<td><?php echo $row["lastupdated_date"]; ?></td>                                                
                                                <td> <a href="javascriptvoid:(0)" data-delid="<?php echo $row['comment_id']; ?>"class="delete"><i class="fas fa-trash-alt"></i></a>
                                           </tr>
                                <?php
                                        }
                                    } else {
                                        echo "<tr><td colspan='8'>0 results</td></tr>";
                                    }

                                    mysqli_close($conn);
                                ?>
                            </tbody>
							
                        </table>
                        <!-- End Table with stripped rows -->
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
                    url: 'delete_comment.php',
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
        });
    </script>

<?php
    include "footer.php";
?>
