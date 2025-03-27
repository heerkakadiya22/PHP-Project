<?php
    include "header.php";
    include "sidebar.php";
    include "connection.php";
?>
<!--coment css-->
		<style>

.text-right{ text-align: right; }

.comments-app{
  margin: 50px 12%;
  max-width: 900px;
  padding: 0 50px;
  width: 100%;
}

.comments-app h1{
  color: #191919;
  margin-bottom: 1.5em;
  text-align: center;
  text-shadow: 0 0 2px rgba(152, 152, 152, 1);
}


.comment-form .form{ margin-left: 100px; }

.comment-form .form .form-row{ margin-bottom: 10px; }
.comment-form .form .form-row:last-child{ margin-bottom: 0; }

.comment-form .form .input{
  background-color: #fcfcfc;
  border: none;
  border-radius: 4px;
  box-shadow: 0 1px 1px rgba(0, 0, 0, .15);
  color: #555f77;
  font-family: inherit;
  font-size: 14px;
  padding: 5px 10px;
  outline: none;
  width: 100%;

  -webkit-transition: 350ms box-shadow;
  -moz-transition: 350ms box-shadow;
  -ms-transition: 350ms box-shadow;
  -o-transition: 350ms box-shadow;
  transition: 350ms box-shadow;
}

.comment-form .form textarea.input{
  height: 100px;
  padding: 15px;
}

.comment-form .form label{
  color: #555f77;
  font-family: inherit;
  font-size: 14px;
}

.comment-form .form input[type=submit]{
  background-color: #14494b;
  border: none;
  border-radius: 4px;
  box-shadow: 0 1px 1px rgba(0, 0, 0, .15);
  color: #fff;
  cursor: pointer;
  display: block;
  margin-left: auto;
  outline: none;
  padding: 6px 15px;

  -webkit-transition: 350ms box-shadow;
  -moz-transition: 350ms box-shadow;
  -ms-transition: 350ms box-shadow;
  -o-transition: 350ms box-shadow;
  transition: 350ms box-shadow;
}

.comment-form .form .input:focus,
.comment-form .form input[type=submit]:focus,
.comment-form .form input[type=submit]:hover{
  box-shadow: 0 2px 6px rgba(121, 137, 148, .55);
}

.comment-form .form.ng-submitted .input.ng-invalid,
.comment-form .form .input.ng-dirty.ng-invalid{
  box-shadow: 0 2px 6px rgba(212, 47, 47, .55) !important;
}

.comment-form .form .input.disabled {
    background-color: #E8E8E8;
}

.comment-form,
.comment{
  margin-bottom: 20px;
  position: relative;
  z-index: 0;
  margin-left: 13%;
}

.comment-form .comment-avatar,
.comment .comment-avatar{
  border: 2px solid #fff;
    border-radius: 50%;
    box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
    height: 46px;
    left: 45px;
    overflow: hidden;
    position: absolute;
    top: 0;
    width: 45px;
}

.comment-form .comment-avatar img,
.comment .comment-avatar img{
  display: block;
  width: 100%;
  height: 100%;
}

.comment .comment-box{
  background-color: #fcfcfc;
  border-radius: 4px;
  box-shadow: 0 1px 1px rgba(0, 0, .15, .15);
  margin-left: 100px;
  min-height: 60px;
  position: relative;
  padding: 15px;
}

.comment .comment-box:before,
.comment .comment-box:after{
  border-width: 10px 10px 10px 0;
  border-style: solid;
  border-color: transparent #FCFCFC;
  content: "";
  left: -10px;
  position: absolute;
  top: 20px;
}

.comment .comment-box:before{
  border-color: transparent rgba(0, 0, 0, .05);
   top: 22px;
}

.comment .comment-text{
  color: #555f77;
  font-size: 15px;
  margin-bottom: 25px;
}

.comment .comment-footer{
  color: #acb4c2;
  font-size: 13px;
}

.comment .comment-footer:after{
  content: "";
  display: table;
  clear: both;
}

.comment .comment-footer a{
  color: #acb4c2;
  text-decoration: none;

  -webkit-transition: 350ms color;
  -moz-transition: 350ms color;
  -ms-transition: 350ms color;
  -o-transition: 350ms color;
  transition: 350ms color;
}

.comment .comment-footer a:hover{
  color: #555f77;
  text-decoration: underline;
}

.comment .comment-info{
  float: left;
  width: 85%;
}

.comment .comment-date:before{
  content: "|";
  margin: 0 10px;
}

.comment-actions{
  float: left;
  text-align: right;
  width: 15%;
}


<!--delete-->
.deleteButton {
  margin-left: -24%;
  margin-top: -20%;
  width: 40px;
  height: 40px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 3px;
  background-color: transparent;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  transition: all 0.2s;
  position: relative;
  overflow: hidden;
}
.deleteButton svg {
  width: 44%;
}
.deleteButton:hover {
  background-color: rgb(237, 56, 56);
  overflow: visible;
}
.bin path {
  transition: all 0.2s;
}
.deleteButton:hover .bin path {
  fill: #fff;
}
.deleteButton:active {
  transform: scale(0.98);
}
.tooltip {
  --tooltip-color: rgb(41, 41, 41);
  position: absolute;
  top: -40px;
  background-color: var(--tooltip-color);
  color: white;
  border-radius: 5px;
  font-size: 12px;
  padding: 8px 12px;
  font-weight: 600;
  box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.105);
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
  transition: all 0.5s;
}
.tooltip::before {
  position: absolute;
  width: 10px;
  height: 10px;
  transform: rotate(45deg);
  content: "";
  background-color: var(--tooltip-color);
  bottom: -10%;
}
.deleteButton:hover .tooltip {
  opacity: 1;
}

.comment textarea :hover{
  border: none;
  box-shadow: 1px 2px gray;
}
</style>

<!--comment code end-->
<!--video code start--->
<style>
.video .container{
   width: 40%;
   margin-top:10%;
   display: block;
   flex-wrap: wrap;
   align-items: flex-start;
   margin-left:inherit;
   gap:20px;
}

.video .container .main-video-container{
   flex:1 1 700px;
   border-radius: 5px;
   box-shadow: 0 5px 15px rgba(0,0,0,.1);
   background-color: #fff;
   padding:15px;
   padding-bottom:inherit;
   width:284%;
}

.video .container .main-video-container .main-video{
   margin-bottom: 7px;
   border-radius: 5px;
   width: 100%;
}

.video .container .main-video-container .main-vid-title{
   font-size: 20px;
   color:#444;
}

.video .container .video-list-container{
   flex:1 1 350px;
   height: 219px;
   overflow-y: scroll;
   border-radius: 5px;
   width :282%;
   box-shadow: 0 5px 15px rgba(0,0,0,.1);
   background-color: #fff;
   padding:15px;
}

.video .container .video-list-container::-webkit-scrollbar{
   width: 10px;
}

.video .container .video-list-container::-webkit-scrollbar-track{
   background-color: #fff;
   border-radius: 5px;
}

.video .container .video-list-container::-webkit-scrollbar-thumb{
   background-color: #444;
   border-radius: 5px;
}

.video .container .video-list-container .list{
   display: flex;
   align-items: center;
   gap:15px;
   padding:10px;
   background-color: #c9e6c9;
   cursor: pointer;
   border-radius: 5px;
   margin-bottom: 10px;
}

.video .container .video-list-container .list:last-child{
   margin-bottom: 0;
}

.video .container .video-list-container .list.active{
   background-color: #14494b;
}

.video .container .video-list-container .list.active .list-title{
   color:#fff;
}

.video .container .video-list-container .list .list-video{
   width: 100px;
   border-radius: 5px;
}

.video .container .video-list-container .list .list-title{
   font-size: 17px;
   color:#444;
}

@media (max-width:1200px){

   .container{
      margin:0;
   }

}

@media (max-width:450px){

   .container .main-video-container .main-vid-title{
      font-size: 15px;
      text-align: center;
   }

   .container .video-list-container .list{
      flex-flow: column;
      gap:10px;
   }

   .container .video-list-container .list .list-video{
      width: 100%;
   }

   .container .video-list-container .list .list-title{
      font-size: 15px;
      text-align: center;
   }

}</style>

}<!--video code end--->
<style>
/* Image slider */
.wrapper{
  display: flex;
  max-width: 1200px;
  position: relative;
}
.wrapper i{
  top: 50%;
  height: 44px;
  width: 44px;
  color: #343F4F;
  cursor: pointer;
  font-size: 1.15rem;
  position: absolute;
  text-align: center;
  line-height: 44px;
  background: #fff;
  border-radius: 50%;
  transform: translateY(-50%);
  transition: transform 0.1s linear;
}
.wrapper i:active{
  transform: translateY(-50%) scale(0.9);
}
.wrapper i:hover{
  background: #f2f2f2;
}
.wrapper i:first-child{
  left: -22px;
  display: none;
}
.wrapper i:last-child{
  right: -22px;
}
.wrapper .carousel{
  font-size: 0px;
  cursor: pointer;
  overflow: hidden;
  white-space: nowrap;
  scroll-behavior: smooth;
}
.carousel.dragging{
  cursor: grab;
  scroll-behavior: auto;
}
.carousel.dragging img{
  pointer-events: none;
}
.carousel img{
  height: 340px;
  object-fit: cover;
  user-select: none;
  margin-left: 14px;
  width: calc(100% / 3);
}
.carousel img:first-child{
  margin-left: 0px;
}

@media screen and (max-width: 900px) {
  .carousel img{
    width: calc(100% / 2);
  }
}

@media screen and (max-width: 550px) {
  .carousel img{
    width: 100%;
  }
}
</style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<main id="main" class="main">
    <div class="pagetitle">
        <h1>All the Subtopics_details</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.phpl">Home</a></li>
                <li class="breadcrumb-item">Manage Subtopic_details</li>
                <li class="breadcrumb-item active">Subtopic_details</li>
            </ol>
        </nav>
        <a href="javascriptvoid:(0)" style="background-color:#478f7d; border:solid 0px black;"  id="btn_export" onclick="fnExcelReport();" class="btn btn-danger">Export All Logs</a>
    
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body" style="font-size:100%;">
                        <table class="table datatable" id="headerTable">
                            <thead>
                                <tr>
                                    <th>#Id</th>
                                    <th><b>Title</b></th>
                                    <th>Category</th>
                                    <th>Subtopic</th>
                                    <th>Std Details</th>
									<th>Std_title</th>
                                    <th>Thumbnail Image</th>
									<th>std_view</th>                                  
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql = "SELECT sub_topic_details.std_id, topic.topic_title, categories.cat_title, subtopic.sub_title, sub_topic_details.std_details,sub_topic_details.std_title, sub_topic_details.std_thumbimage,std_view
                                            FROM sub_topic_details
                                            LEFT JOIN subtopic ON sub_topic_details.subtopic_id = subtopic.subtopic_id
                                            LEFT JOIN topic ON sub_topic_details.topic_id = topic.topic_id
                                            LEFT JOIN categories ON sub_topic_details.cat_id = categories.cat_id";

                                    $result = mysqli_query($conn, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                        while($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo "<td>".$row["std_id"]."</td>";
											
                                            echo "<td>".$row["topic_title"]."</td>";
                                            echo "<td>".$row["cat_title"]."</td>";
                                            echo "<td>".$row["sub_title"]."</td>";
                                            echo "<td>".$row["std_details"]."</td>";
											echo "<td>".$row["std_title"]."</td>";
											 echo "<td><img src='../asset/image/std_image/".$row["std_thumbimage"]."' alt='Thumbnail' style='max-width: 100px; max-height: 100px;'></td>";
                                          echo "<td>".$row["std_view"]."</td>";										
											
																echo "<td style='display:flex;'>
																
							  <a href='edit_std_det.php?id=".$row["std_id"]."' style='color:#478f7d ;'>
							  <i class='fas fa-edit'></i></a>&nbsp;&nbsp;
							  
							  <a href='javascript:void(0)' data-delid='".$row['std_id']."' style='color:#478f7d;' class='delete' ><i class='fas fa-trash-alt'></i></a>&nbsp;&nbsp;
							  
							 
							  <i class='bi bi-chat-dots-fill'  data-toggle='modal' data-target='#commentmodal".$row["std_id"]."' style='color:#478f7d;'></i>&nbsp;&nbsp;
							  
							  
							  <i class='bi bi-camera-video-fill' data-toggle='modal' data-target='#videomodal".$row["std_id"]."' style='color:#478f7d;'></i></a>&nbsp;&nbsp;
							  
							
							 <i class='bi bi-image-fill'data-toggle='modal' data-target='#imgmodal'".$row["std_id"]."' style='color:#478f7d;'></i></a>&nbsp;&nbsp;
							 
							  </td>";

                                           
                                            
											echo "</tr>";
											?>
											<!-- video Modal -->
											  <div class="modal fade" id="videomodal<?php echo $row['std_id']; ?>" role="dialog">
												<div class="modal-dialog">
											<!-- Modal content-->
												  <div class="modal-content">
												   
													<div class="modal-body">
													<?php echo $row['std_id']; ?>
													<div class="video"> 
													<?php	
														$sql3 ="SELECT * from std_video where std_id = ".$row["std_id"];
																if ($result3 = mysqli_query($conn, $sql3)) 
																{
																	if (mysqli_num_rows($result3) > 0) 
																	{
																		($row3 = mysqli_fetch_array($result3))			
															   ?> 
											 
													  <div class="container">
											 
													  <div class="main-video-container">
														<iframe loop controls class="main-video" width="100%" height="82%" src="<?php echo $row3["std_video"];?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
													  </div>

													  
													  <div class="video-list-container">
													  <?php	
														$sqls ="SELECT * from std_video where std_id = ".$row["std_id"];
																if ($results = mysqli_query($conn, $sqls)) 
																{
																	if (mysqli_num_rows($results) > 0) 
																	{
																		while($rows = mysqli_fetch_array($results)){		
															   ?> 

														<div class="list active">
															<iframe src="<?php echo $rows["std_video"];?>" class="list-video" style="width: 30%;
														height: 70px;">
															</iframe>
															<h3 class="list-title"><?php echo $rows["std_video_title"];?></h3>
														</div>
														 <?php }}}?>
													  </div>
													  
													  </div>
												  <?php
														}
													else {
														 echo "<div style='text-align: center; margin-top: 8%;
														 margin-bottom: 8%;'>There are no videos available.</div>";
													}
												} ?>
													</div>


													</div>
													<div class="modal-footer">
													  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
													</div>
												  </div>
												  </div>
												  </div>
											<!--video code end-->
											

  <!-- Modal -->
  <div class="modal fade" id="imgmodal" role="dialog">
    <div class="modal-dialog">
<!-- Modal content-->
      <div class="modal-content" style="width: 151%;     margin-left: -23%;">
       
        <div class="modal-body" style=" margin-left: -35px;">

<!--image gallery-->   
   <!--image gallery-->
<h2 style="text-align: center; padding-top:5%; margin-bottom:-5%;">Image Gallery</h2>
    <div class="wrapper" style=" margin-top: 8%;
    margin-bottom: 8%;
    margin-left: 10%;">
	
	<i id="left" class="bi bi-arrow-left-circle-fill" style="background-color: rgb(112, 160, 162);display: block;margin-left: -26px;">     
      <img src="asset/image/sidescrolldown.png" alt="" height="22px"></i> 
	
      <div class="carousel">
      <?php echo $row['std_id']; ?>
      <?php	
														$sqls1 ="SELECT * from std_image where std_id = ".$row["std_id"];
																if ($results1 = mysqli_query($conn, $sqls1)) 
																{
																	if (mysqli_num_rows($results1) > 0) 
																	{
																		while($rows1 = mysqli_fetch_array($results1)){		
															   ?> 
        <img src="../asset/image/std_image/<?php echo $rows1["std_image"]; ?>" alt="img" draggable="false">
			<?php }}} ?>
      </div>
	  
      <i id="right" class="bi bi-arrow-right-circle-fill"style="background-color: rgb(112, 160, 162);display: block;">
      <img src="asset/image/rightsidescrolldown.png" alt="" height="22px"></i>
    </div>
	<!--image code end-->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
	  </div>
	  </div>


											<!-- Comment Modal -->
										  <div class="modal fade" id="commentmodal<?php echo $row['std_id']; ?>" role="dialog">
											<div class="modal-dialog">
										<!-- Modal content-->
											  <div class="modal-content">
											   
												<div class="modal-body">
													 <?php	
															$sql1 = "SELECT comment.*, user.user_name, user.thumb_image 
															FROM comment 
															LEFT JOIN user ON comment.user_id = user.user_id
															where std_id = '".$row['std_id']."'";
														 if ($result1 = mysqli_query($conn, $sql1)) 
														 {
														   if (mysqli_num_rows($result1) > 0) 
														   {
														  while($row1 = mysqli_fetch_array($result1)){     
													   ?>
																<!-- Comment - Dummy -->
													<div class="comment">
												  

													  <!-- Comment Avatar -->
													  <div class="comment-avatar">
														<img src="../asset/image/user_img/<?php echo ($row1['anonymous']==1)?"boy.png":$row1['thumb_image']; ?>">
													  </div>

													  <!-- Comment Box -->
													  <div class="comment-box">
														<div class="comment-text"><?php echo $row1['comments']; ?></div>
														<div class="comment-footer">
														  <div class="comment-info" style="display: flex;">
															<span class="comment-author">
															  <h6 style="margin-top: 7px;"><?php echo ($row1['anonymous']==1)?"Anonymous User":$row1['user_name']; ?></h6>
															</span>
															<span class="comment-date"><?php echo $row1['lastupdated_date']; ?></span>
														  </div>

														</div>
													  </div>
												<!-- <textarea name="reply" id="reply" cols="70" rows="1" placeholder="Add to Reply..." style=" margin-left: 15%;
													border: none;
													border-bottom: 2px solid;
													font-size: 14px;" class="reply"></textarea>-->
													</div>
													   <?php
														  }}}
														?>
												</div>
												<div class="modal-footer">
												  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												</div>
											  </div>
											</div>
										</div>
									<?php
                                        }
                                    } else {
                                        echo "<tr><td colspan='8'>0 results</td></tr>";
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script type="text/javascript">
        $(document).ready(function(){

            $('.delete').click(function(){
                var el = this;

                var deleteid = $(this).data('delid');
                var confirmalert = confirm("Are you sure?");
                if (confirmalert == true) {
                  $.ajax({
                    url: 'delete_std_details.php',
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

<!--video code start-->
<!--video box js-->
<script>
  let videoList = document.querySelectorAll('.video-list-container .list');

videoList.forEach(vid =>{
   vid.onclick = () =>{
      videoList.forEach(remove =>{remove.classList.remove('active')});
      vid.classList.add('active');
      let src = vid.querySelector('.list-video').src;
      let title = vid.querySelector('.list-title').innerHTML;
      document.querySelector('.main-video-container .main-video').src = src;
      document.querySelector('.main-video-container .main-video').play();
      document.querySelector('.main-video-container .main-vid-title').innerHTML = title;
   };
});
</script>
<!--image slider-->
<script>
const carousel = document.querySelector(".carousel"),
firstImg = carousel.querySelectorAll("img")[0],
arrowIcons = document.querySelectorAll(".wrapper i");

let isDragStart = false, isDragging = false, prevPageX, prevScrollLeft, positionDiff;

const showHideIcons = () => {
    // showing and hiding prev/next icon according to carousel scroll left value
    let scrollWidth = carousel.scrollWidth - carousel.clientWidth; // getting max scrollable width
    arrowIcons[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
    arrowIcons[1].style.display = carousel.scrollLeft == scrollWidth ? "none" : "block";
}

arrowIcons.forEach(icon => {
    icon.addEventListener("click", () => {
        let firstImgWidth = firstImg.clientWidth + 14; // getting first img width & adding 14 margin value
        // if clicked icon is left, reduce width value from the carousel scroll left else add to it
        carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
        setTimeout(() => showHideIcons(), 60); // calling showHideIcons after 60ms
    });
});

const autoSlide = () => {
    // if there is no image left to scroll then return from here
    if(carousel.scrollLeft - (carousel.scrollWidth - carousel.clientWidth) > -1 || carousel.scrollLeft <= 0) return;

    positionDiff = Math.abs(positionDiff); // making positionDiff value to positive
    let firstImgWidth = firstImg.clientWidth + 14;
    // getting difference value that needs to add or reduce from carousel left to take middle img center
    let valDifference = firstImgWidth - positionDiff;

    if(carousel.scrollLeft > prevScrollLeft) { // if user is scrolling to the right
        return carousel.scrollLeft += positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
    }
    // if user is scrolling to the left
    carousel.scrollLeft -= positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
}

const dragStart = (e) => {
    // updatating global variables value on mouse down event
    isDragStart = true;
    prevPageX = e.pageX || e.touches[0].pageX;
    prevScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
    // scrolling images/carousel to left according to mouse pointer
    if(!isDragStart) return;
    e.preventDefault();
    isDragging = true;
    carousel.classList.add("dragging");
    positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
    carousel.scrollLeft = prevScrollLeft - positionDiff;
    showHideIcons();
}

const dragStop = () => {
    isDragStart = false;
    carousel.classList.remove("dragging");

    if(!isDragging) return;
    isDragging = false;
    autoSlide();
}

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("touchstart", dragStart);

document.addEventListener("mousemove", dragging);
carousel.addEventListener("touchmove", dragging);

document.addEventListener("mouseup", dragStop);
carousel.addEventListener("touchend", dragStop);</script>

<?php
    include "footer.php";
?>
