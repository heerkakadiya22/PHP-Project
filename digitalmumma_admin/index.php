<?php
include('header.php');
  include('sidebar.php');
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8" style="display: flex;     margin-left: 5%;">
          <div class="row" style="display: contents;">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">total <span>| users</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person-circle"></i>
                    </div>
					<?php
					include ('connection.php');
			  $tot_user = 0;
			  
                    $sql = "SELECT count(user_id) AS tot_user FROM user";
                    $result = mysqli_query($conn, $sql);
    
                    if ( $result) {
                      // output data of each row
                      $row_user = mysqli_fetch_assoc($result); 
					  $tot_user =  $row_user['tot_user'];
					}
          ?>

                    <div class="ps-3">
                      <h6><?php echo $tot_user;?></</h6>
                       <span class="text-muted small pt-2 ps-1">users</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">total <span>| admin</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person-fill-lock"></i>
                    </div>
					<?php
					include ('connection.php');
			  $tot_admin = 0;
			  
                    $sql = "SELECT count(login_id) AS tot_admin FROM admin_login";
                    $result = mysqli_query($conn, $sql);
    
                    if ( $result) {
                      // output data of each row
                      $row_user = mysqli_fetch_assoc($result); 
					  $tot_admin =  $row_user['tot_admin'];
					}
          ?>

                    <div class="ps-3">
                      <h6><?php echo $tot_admin;?></</h6>
                       <span class="text-muted small pt-2 ps-1">admins</span>

                    </div>
                    
                    

                    </div>
                  </div>
                </div>

              </div>
        <!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="filter">
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">TOTAL<span>|Categories</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-bookmark-check"></i>
                    </div>
					
                   <?php
					include ('connection.php');
			  $tot_cat = 0;
			  
                    $sql = "SELECT count(cat_id) AS tot_cat FROM categories";
                    $result = mysqli_query($conn, $sql);
    
                    if ( $result) {
                      // output data of each row
                      $row_user = mysqli_fetch_assoc($result); 
					  $tot_cat =  $row_user['tot_cat'];
					}
          ?>

                    <div class="ps-3">
                      <h6><?php echo $tot_cat;?></</h6>
                       <span class="text-muted small pt-2 ps-1">Category</span>

                    </div>
                    
                    

                    </div>
                  </div>
                </div>

              </div>

                            <!-- End Revenue Card -->
                    <div class="col-xxl-4 col-md-6">

            <div class="card info-card customers-card">

              <div class="filter">
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">TOTAL<span>|Topics</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                  </div>

                    <?php
                include ('connection.php');
                $tot_top = 0;

                      $sql = "SELECT count(topic_id) AS tot_top FROM topic";
                      $result = mysqli_query($conn, $sql);

                      if ( $result) {
                        // output data of each row
                        $row_user = mysqli_fetch_assoc($result); 
                $tot_top =  $row_user['tot_top'];
                }
                ?>

                      <div class="ps-3">
                        <h6><?php echo $tot_top;?></</h6>
                        <span class="text-muted small pt-2 ps-1">topics</span>

                      </div>            

                      </div>
                    </div>
                  </div>
                  </div>
                </div>
            </div>
            </div>
            <!-- End Revenue Card -->
            <!-- Reports -->
         
            <!-- End Reports -->

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">most Recently <span>|views</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                                    <th>#Id</th>
                                    <th><b>Title</b></th>
                                    <th>Category</th>
                                    <th>Subtopic</th>
                                    <th>std_view</th>
                                    </tr>
                    </thead>
                    <tbody>

                                <?php
                                    $sql = "SELECT sub_topic_details.std_id, topic.topic_title, categories.cat_title, subtopic.sub_title, sub_topic_details.std_details, sub_topic_details.std_view
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
                                            echo "<td>".$row["std_view"]."</td>";

																echo "<td style='display:flex;'>
																
							  <a href='edit_std_det.php?id=".$row["std_id"]."' style='color:#478f7d ;'>
							  <i class='fas fa-edit'></i></a>&nbsp;&nbsp;
							  
							  <a href='javascript:void(0)' data-delid='".$row['std_id']."' style='color:#478f7d;' class='delete' ><i class='fas fa-trash-alt'></i></a>&nbsp;&nbsp;
							  
							 
							  
							  
							 
							  </td>";

                                           
                                            
											echo "</tr>";
											?>
											
														
											<!--video code end-->
											
										
													  
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
            </div><!-- End Recent Sales -->

     
          <!-- Website Traffic -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">Website Traffic <span>| Today</span></h5>

              <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Access From',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                          value: 1048,
                          name: 'Search Engine'
                        },
                        {
                          value: 735,
                          name: 'Direct'
                        },
                        {
                          value: 580,
                          name: 'Email'
                        },
                        {
                          value: 484,
                          name: 'Union Ads'
                        },
                        {
                          value: 300,
                          name: 'Video Ads'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Website Traffic -->

          <!-- News & Updates Traffic -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

              <div class="news">
                <div class="post-item clearfix">
                  <img src="assets/img/news-1.jpg" alt="">
                  <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                  <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-2.jpg" alt="">
                  <h4><a href="#">Quidem autem et impedit</a></h4>
                  <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-3.jpg" alt="">
                  <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-4.jpg" alt="">
                  <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                  <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-5.jpg" alt="">
                  <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                  <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                </div>

              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

 <?php
	include "footer.php";
?>