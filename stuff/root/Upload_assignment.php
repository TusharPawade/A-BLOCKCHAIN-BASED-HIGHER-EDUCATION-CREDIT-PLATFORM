<?php
session_start();

?><!DOCTYPE HTML>
<html>
<head>
<title>Learner a education bootstrap Website Template | Contact :: w3layouts</title>
<!-- Bootstrap -->
<link href="web/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="web/css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 
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
		<div class="main row">
			
		</div>
	</div>
</div><!-- end main -->

<?php

// include 'Application/DB_Functions.php'; 
$obj= new Connections(); 
if(isset($_POST['desc']))
{

$desc = $_POST['desc'];
$stud_id=$_SESSION['id'];
$tid=$_GET['tid'];
$assign_id=$_GET['id'];
$file=$_FILES['file']['name'];

if($obj->Add_assignment($assign_id,$stud_id,$desc,$tid,$file)==1)
{	

echo "<script type='text/javascript'>
alert('Your Assignment Submitted to Database!!');
</script>";echo "<script>window.location='index.php';</script>";

}
else{
echo "<script type='text/javascript'>
alert('Username already Exist!!');
</script>";
}
}

?>
<div class="main_btm"><!-- start main_btm -->
	<div class="container">
		<div class="main row">
			    <div class="col-md-4 company_ad">
				    <h2>Our Features :</h2>
      				<address>
						 <p>EASY TO USE</p><hr>
						 <p>FORUM</p><hr>
						 <p>SECURED LOGIN</p><hr>
				   		<p>EASY TO USE</p><hr>
				   		
				   	</address>
				</div>
				<div class="col-md-8">
				  <div class="contact-form">
				  	<h2>Upload Your Assignment</h2>
					    <form method="post" action="" enctype="multipart/form-data">
					    	<div>
<span>Description</span>
<span><textarea type="text" name="desc" required class="form-control" id="userName"></textarea></span>
						    </div>
						    <div>
						    	<span>Assignment File</span>
<span><input type="file" name="file" required class="form-control" id="inputEmail3"></span>
						    </div>
						   
						   <div>
						   		<label class="fa-btn btn-1 btn-1e"><input type="submit" value="submit us"></label>
						  </div>
					    </form>
				    </div>
  			</div>		
  			<div class="clearfix"></div>		
	</div> 
</div>
</div>
<?php include "includes/footer.php"; ?>
</body>
</html>