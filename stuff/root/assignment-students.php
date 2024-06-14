<?php
session_start();
?><!DOCTYPE HTML>
<html>
<head>
<title>Learner a education bootstrap Website Template | Technology :: w3layouts</title>
<!-- Bootstrap -->
<link href="web/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="web/css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.web/js/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="web/js/jquery.min.js"></script>
<script type="text/javascript" src="web/js/bootstrap.js"></script>
<script type="text/javascript" src="web/js/bootstrap.min.js"></script>
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/web/css/font-awesome.min.css">
<!----font-Awesome----->
</head>
<body>
<?php include "includes/header.php"; ?>
<div class="main_bg"><!-- start main -->
	<div class="container">
		<div class="technology row">
			<h2>Assignments</h2>
            
            <hr>
            
            <?php	
  //include 'Application/DB_Functions.php';
  $obj= new Connections();
  $branch=$_SESSION['branch'];
  $sem=$_SESSION['sem'];
  $sub=$_GET['sub'];
  
    $sql = $obj->db->prepare("select * from assignment where branch_id='$branch' and semister='$sem' and subject_id='$sub'");
  $sql->execute();
  while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
?>
			<div class="technology_list">
				<h4><?php echo $row['assignment_title']; ?>
               </h4>
               <p><?php echo $row['descrption']; ?>
               </p>
				<div class="col-md-10 tech_para">
					<p class="para">
        <a href="notes/<?php echo $row['assignment']; ?>" download class="fa-btn btn-1 btn-1e">Download Assignment</a>  
         <a href="notes/<?php echo $row['assignment']; ?>" target="_blank" class="fa-btn btn-1 btn-1e">Read Assignment</a>            
                    </p>
                    <small><?php echo $row['tim']; ?>
                    </small>
				</div>
				<div class="col-md-2 images_1_of_4 bg1 pull-right">
				
				</div>
				<div class="clearfix"></div>
				<div class="read_more">
   <?php 
  $obj= new Connections();
  $ass_id=$row['ID'];
   $user_id=$_SESSION['id'];
  $sql1 = $obj->db->prepare("select * from assignment_upload where assignment_id='$ass_id' and stud_id='$user_id'");
  $sql1->execute();
  if($sql1->rowCount()=='0'){ ?> 
<a href="Upload_assignment.php?id=<?php echo $row['ID']; ?>&tid=<?php echo $row['uploader_id']; ?>" class="fa-btn btn-1 btn-1e">
                  Upload</a><?php }else{ ?>
                 <button disabled class="fa-btn btn-1 btn-1e"> Already Uploaded</button>
       <?php  while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)) {        
                 if(!empty($row1['marks'])){?>  
                 <h3>Assignment Marks <?php echo $row1['marks'];   ?></h3>
                  <?php }}} ?>
                  
				</div>	
			</div>
            <hr>
      <?php } ?>      
            
            
            
					
			
		</div>
	</div>
</div><!-- end main -->
<?php include "includes/footer.php"; ?>
</body>
</html>