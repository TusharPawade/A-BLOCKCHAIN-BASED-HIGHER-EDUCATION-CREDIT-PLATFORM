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
        <!-- FORM START FROM HERE FOR INSERTING --->  
     <?php  $obj= new Connections();
	 $id=$_SESSION['sid'];

    $studid=$_GET['id'];
     $courseid=$_GET['courseid'];


 $sql3 = $obj->db->prepare("select * from   attendance where course_id='$courseid' GROUP BY  attendance_idd ");
  $sql3->execute();
      

   $sql4 = $obj->db->prepare("select * from   attendance where course_id='$courseid' AND student_id='$studid'");
  $sql4->execute();
 


function calculatePercentage($a, $b) {
    if ($b == 0) {
        return "Cannot divide by zero";
    }
    $percentage = ($a / $b) * 100;
    return $percentage;
}

// Example usage
$a=$sql3->rowCount();      $b=$sql4->rowCount();
$percentage = round(calculatePercentage($b, $a));


 /* while($row3 = $sql3->fetch(PDO::FETCH_ASSOC)){ $Usersid=$row3['ID'];
  
  $Student_contact=$row3['Student_contact'];
  $Student_email=$row3['Student_email'];
  $Student_name=$row3['Student_name'];
  $Student_photo=$row3['Student_photo'];
  $age=$row3['age'];
  $address=$row3['address'];
  $city=$row3['city'];$gender=$row3['gender']; */
	  ?>
        <tbody>
       <td>
       
     <h3>Total Attendance: <? echo $b;  ?></h3>
      <h3>You  Present: <? echo $a;  ?></h3>
        <h3>Your Attendance Percentage is: <? echo $percentage;  ?></h3>
<br><br>
        <div class="progress" style="border:2px solid black;">
  <div class="progress-bar" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:<? echo $percentage;  ?>%">
    <span class="sr-only">90% Complete</span>
  </div>
</div>
</div>             
</div>
<a href="my-attendance.php" class="btn btn-primary">Check My Other Attendance</a>

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

