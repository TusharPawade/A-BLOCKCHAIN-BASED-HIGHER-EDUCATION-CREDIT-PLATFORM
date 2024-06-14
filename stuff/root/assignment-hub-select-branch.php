<?php
session_start();
?><!DOCTYPE HTML>
<html>
<head>
<title>Intra College Notes Sharing</title>
<!-- Bootstrap -->
<link href="web/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="web/css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  
  
<link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="web/js/jquery.min.js"></script>
<script type="text/javascript" src="web/js/bootstrap.js"></script>
<script type="text/javascript" src="web/js/bootstrap.min.js"></script>
<!-- start slider -->
<link href="web/css/slider.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="web/js/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="web/js/jquery.cslider.js"></script>
	<script type="text/javascript">
			$(function() {

				$('#da-slider').cslider({
					autoplay : true,
					bgincrement : 450
				});

			});
		</script>
<!-- Owl Carousel Assets -->
<link href="web/css/owl.carousel.css" rel="stylesheet">
<script src="web/js/owl.carousel.js"></script>
		<script>
			$(document).ready(function() {

				$("#owl-demo").owlCarousel({
					items : 4,
					lazyLoad : true,
					autoPlay : true,
					navigation : true,
					navigationText : ["", ""],
					rewindNav : false,
					scrollPerPage : false,
					pagination : false,
					paginationNumbers : false,
				});

			});
		</script>
		<!-- //Owl Carousel Assets -->
<!----font-Awesome----->
   	<link rel="stylesheet" href="">
<!----font-Awesome----->
</head>
<body>
<?php include "includes/header.php"; ?>
<div class="main_bg"><!-- start main -->
	<div class="container">
		<div class="main row">
        
        
 <?php	
  //include 'Application/DB_Functions.php';
  $obj= new Connections();
  $sql = $obj->db->prepare("select * from  branch");
  $sql->execute();
  while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
?>
			<div class="col-md-3 images_1_of_4 text-center">
            <h4>
 <img src="web/images/icon-subject-fd.jpg" style="height:150px; width:150px;">               
<a href="assignment-students.php?sem=<?php echo $_GET['id']; ?>&branch=<?php echo $row['ID']; ?>"><?php echo $row['branchs']; ?></a></h4>
		<a href="single-page.html" class="fa-btn btn-1 btn-1e">Enter</a>
			</div>
       <?php } ?>     
            
          
            
            
           
            
            
		</div>
	</div>
</div><!-- end main -->

					<!----//End-img-cursual---->
	</div>
</div>
<?php include "includes/footer.php"; ?>
</body>
</html>