<?php
include "Includes/session.php";
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

                            <div class="pull-left">
                                                          </div>


                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-lg-12">
                       
                                <div class="row">
                                   
                                </div> <!-- End .row -->
 <form action="" method="post">
 <input type="text" name="search" class="form-control" placeholder="Search By Program Name..."><br>
 <input class="btn btn-primary btn-block" value="Search" type="submit">
 
 </form>                               
              <br>  

  <h3>Main Course</h3>          
<br>                  
                            <?php	
  
    include 'Application/DB_Functions.php';
  $obj= new Connections();
  
  if(isset($_POST['search'])){
	  $search=$_POST['search'];
  $sql = $obj->db->prepare("select * from  courses where course_name like '%$search%' AND type_course='main'");
  }else{
 $sql = $obj->db->prepare("select * from  courses  where type_course='main'");	  
	  }
		$sql->execute();
		
			
		    while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
			$course_name=$row['course_name'];
			$course_image=$row['course_image'];
			$course_conent=$row['course_conent'];
			$course_duration=$row['course_duration'];
			$course_fees=$row['course_fees'];
			$dt=$row['dt'];$ID=$row['ID'];
			?> 
                                                                 
                                                     
                                
<a href="course_details.php?id=<?php echo $ID; ?>">
                                
                                 <div class="col-lg-3 col-md-4 col-xs-6 col-sm-4">

                  <div class="tile-progress bg-info" style="height: 391px;">
                                            <div class="content">
           
                                           
                        <img src="../notes/<?php echo $course_image; ?>" style="width:100%;height:200px;"> <br><br><p style="text-align: center;">   <?php echo $course_name; ?> <b> <br> Duration:   <?php echo $course_duration; ?>     <br> Fees:   <?php echo $course_fees; ?>  </b>            </p> 
                                            </div>
                                        </div>

                                    </div>
                                </a> 
                                
                                                       
                                                      
                                          <?php } ?>          
                                  </div>              
                            
      

  <h3>Sub Course</h3>          

       

         <?php  
  
  
  $obj= new Connections();
  
  if(isset($_POST['search'])){
      $search=$_POST['search'];
  $sql = $obj->db->prepare("select * from  courses where course_name like '%$search%' AND type_course='sub'");
  }else{
 $sql = $obj->db->prepare("select * from  courses  where type_course='sub'");    
      }
        $sql->execute();
        
            
            while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
            $course_name=$row['course_name'];
            $course_image=$row['course_image'];
            $course_conent=$row['course_conent'];
            $course_duration=$row['course_duration'];
            $course_fees=$row['course_fees'];
            $dt=$row['dt'];$ID=$row['ID'];
            ?> 
                                                                 
                                                     
                                
<a href="course_details.php?id=<?php echo $ID; ?>">
                                
                                 <div class="col-lg-3 col-md-4 col-xs-6 col-sm-4">

                  <div class="tile-progress bg-info" style="height: 391px;">
                                            <div class="content">
           
                                           
                        <img src="../notes/<?php echo $course_image; ?>" style="width:100%;height:200px;"> <br><br><p style="text-align: center;">   <?php echo $course_name; ?> <b> <br> Duration:   <?php echo $course_duration; ?>     <br> Fees:   <?php echo $course_fees; ?>  </b>            </p> 
                                            </div>
                                        </div>

                                    </div>
                                </a> 
                                
                                                       
                                                      
                                          <?php } ?>          
                                               


      
                                                                            
</div>


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
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE TEMPLATE JS - START --> 
        <script src="assets/js/scripts.js" type="text/javascript"></script> 
        <!-- END CORE TEMPLATE JS - END --> 

        <!-- Sidebar Graph - START --> 
        <script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="assets/js/chart-sparkline.js" type="text/javascript"></script>
        <!-- Sidebar Graph - END --> 


        <!-- General section box modal start -->
        <div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-labelledby="ultraModal-Label" aria-hidden="true">
            <div class="modal-dialog animated bounceInDown">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Section Settings</h4>
                    </div>
                    <div class="modal-body">

                        Body goes here...

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-success" type="button">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal end -->
    </body>

</html>

