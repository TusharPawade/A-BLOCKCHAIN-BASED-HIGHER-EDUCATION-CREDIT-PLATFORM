<?php session_start();
  include 'Application/DB_Functions.php';
   ?>
<!DOCTYPE html>
<html class=" ">
<head>
<title>Admin Dashboard</title>
<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />    <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-57-precomposed.png">	<!-- For iPhone -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-icon-114-precomposed.png">    <!-- For iPhone 4 Retina display -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72-precomposed.png">    <!-- For iPad -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144-precomposed.png">    <!-- For iPad Retina display -->

<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />    <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-57-precomposed.png">	<!-- For iPhone -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-icon-114-precomposed.png">    <!-- For iPhone 4 Retina display -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72-precomposed.png">    <!-- For iPad -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144-precomposed.png">    <!-- For iPad Retina display -->




        <!-- CORE CSS FRAMEWORK - START -->
        <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS FRAMEWORK - END -->

        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE CSS TEMPLATE - START -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->

    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body class=" "><!-- START TOPBAR -->
         <?php include 'Includes/top-bar.php'; ?>
        <!-- END TOPBAR -->
        <!-- START CONTAINER -->
        <div class="page-container row-fluid">

            <!-- SIDEBAR - START -->
            <?php include 'Includes/nav-sidebar.php'; ?>
            <!--  SIDEBAR - END -->
            <!-- START CONTENT -->


            </div>
            <!--  SIDEBAR - END -->
            <!-- START CONTENT -->
            <section id="main-content" class=" ">
                <section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>

                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class="page-title">
    

</div><h3>Check Attendance of this Courses</h3><hr>
  <?php	
  
    
  $obj= new Connections();
   $id=$_SESSION['sid'];
 $sql1 = $obj->db->prepare("select * from  applied_courses where stud_id='$id'");	  
	
		$sql1->execute();
		
			
		    while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)) {
				
			$stud_id=$row1['stud_id'];
			$course_id=$row1['course_id'];
			$course_complete_university_status=$row1['course_complete_university_status'];
      $university_approve_status=$row1['university_approve_status'];

 $sql = $obj->db->prepare("select * from  courses where ID='$course_id'");	  
	
		$sql->execute();
		
			
		    while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
			$course_name=$row['course_name'];
			$course_image=$row['course_image'];
			$course_conent=$row['course_conent'];
			$course_duration=$row['course_duration'];
			$course_fees=$row['course_fees'];
			$dt=$row['dt'];$ID=$row['ID'];

$sql11 = $obj->db->prepare("select * from proof_of_work where stud_id='$stud_id' AND course_id='$course_id'  AND status='1'");   
$sql11->execute();

	$count=$sql11->rowCount();


$sql11 = $obj->db->prepare("select * from proof_of_work where stud_id='$stud_id' AND course_id='$course_id'  AND status='0'");   
$sql11->execute();

  $count11=$sql11->rowCount();

  		?> 
                                                                 
                                                     
                                

                                
                                 <div class="col-lg-3 col-md-4 col-xs-6 col-sm-4">

                                        <div class="tile-progress bg-info">
                                            <div class="content">
           
                                           
                        <img src="../notes/<?php echo $course_image; ?>" style="width:100%;height:200px;"> <br><br>
<a href="view-my-attendance_details.php?id=<?php echo $stud_id; ?>&courseid=<?php echo $course_id; ?>" style="color: white;">
                        <p style="text-align: center; ">   <?php echo $course_name; ?> <b> <br> Duration:   <?php echo $course_duration; ?>     <br> Fees:   <?php echo $course_fees; ?> </a><br> 


<a class="btn btn-success" href="view-my-attendance_details.php?id=<?php echo $stud_id; ?>&courseid=<?php echo $course_id; ?>" target="_blank">
View Attendance of This Course
  </a>
    

</b>            </p> 
                                            </div>
                                        </div>

                                    </div>
                                </a> 
                                
                                                       
                                                      
                                          <?php }} ?>          
                                               
                            
      
                                    
</div>


                </section>
            </section>
            <!-- END CONTENT -->
         

          </div>
      </div>
  </div>
                        </section></div>


                </section>
            </section>
            <!-- END CONTENT -->
           


            <div class="chatapi-windows ">


            </div>    </div>
        <!-- END CONTAINER -->
        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


        <!-- CORE JS FRAMEWORK - START --> 
        <script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script> 
        <script src="assets/js/jquery.easing.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
        <script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>  
        <!-- CORE JS FRAMEWORK - END --> 


        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <script src="assets/plugins/autosize/autosize.min.js" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE TEMPLATE JS - START --> 
        <script src="assets/js/scripts.js" type="text/javascript"></script> 
        <!-- END CORE TEMPLATE JS - END --> 

        <!-- Sidebar Graph - START --> 
        <script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="assets/js/chart-sparkline.js" type="text/javascript"></script>
        <!-- Sidebar Graph - END --> 











<div class="modal fade" id="ultraModal-4" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="ultraModal-Label" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Confirmation Box!!</h4>
              </div>
              <div class="modal-body">

                 <h3>Profile Updated Succesfully!! </h3>

              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
  </div>
        <!-- modal end -->
    </body>
</html>


