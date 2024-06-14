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
 // include 'Application/DB_Functions.php';
  	$obj= new Connections();
	
		echo $id=$_SESSION['id'];
	$sql = $obj->db->prepare("select * from student where ID='$id'");
	$sql->execute();
	while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
		 $branch=$row['branch'];
	}       
    ?>    
			<div class="col-md-3 images_1_of_4 text-center">
            
				
            
				<h4><span class="bg"><i class="fa fa-globe" 
                style="font-size:50px;">1</i></span>
<a href="assignment-select-sub.php?sem=1&branch=<?php echo $branch; ?>">First Semister</a></h4>
		<a href="assignment-select-sub.php?sem=1&branch=<?php echo $branch; ?>" class="fa-btn btn-1 btn-1e">Enter</a>
			</div>
			<div class="col-md-3 images_1_of_4 bg1 text-center">
				
				<h4><span class="bg"><i class="fa fa-globe" 
                style="font-size:50px;">2</i></span><a href="assignment-select-sub.php?sem=2&branch=<?php echo $branch; ?>">Second Semister</a></h4>
	<a href="assignment-select-sub.php?sem=2&branch=<?php echo $branch; ?>" class="fa-btn btn-1 btn-1e">Enter</a>
			</div>
			<div class="col-md-3 images_1_of_4 bg1 text-center">
				
				<h4><span class="bg"><i class="fa fa-globe" 
                style="font-size:50px;">3</i></span><a href="assignment-select-sub.php?sem=3&branch=<?php echo $branch; ?>">Third Semister</a></h4>
				
	<a href="assignment-select-sub.php?sem=3&branch=<?php echo $branch; ?>" class="fa-btn btn-1 btn-1e">Enter</a>
			</div>
            
            		
			<div class="col-md-3 images_1_of_4 bg1 text-center">
				
				<h4><span class="bg"><i class="fa fa-globe" 
                style="font-size:50px;">4</i></span><a href="assignment-select-sub.php?sem=4&branch=<?php echo $branch; ?>">Fourth Semister</a></h4>
<a href="assignment-select-sub.php?sem=4&branch=<?php echo $branch; ?>" class="fa-btn btn-1 btn-1e">Enter</a>
			</div>	
            
            
          <div class="col-md-3 images_1_of_4 bg1 text-center">
				
				<h4><span class="bg"><i class="fa fa-globe" 
                style="font-size:50px;">5</i></span><a href="assignment-select-sub.php?sem=5&branch=<?php echo $branch; ?>">Fifth Semister</a></h4>
<a href="assignment-select-sub.php?sem=5&branch=<?php echo $branch; ?>" class="fa-btn btn-1 btn-1e">Enter</a>
			</div>
            <div class="col-md-3 images_1_of_4 bg1 text-center">
				
				<h4><span class="bg"><i class="fa fa-globe" 
                style="font-size:50px;">6</i></span><a href="assignment-select-sub.php?sem=6&branch=<?php echo $branch; ?>">Sixth Semister</a></h4>
<a href="assignment-select-sub.php?sem=6&branch=<?php echo $branch; ?>" class="fa-btn btn-1 btn-1e">Enter</a>
			</div>
            <div class="col-md-3 images_1_of_4 bg1 text-center">
				
				<h4><span class="bg"><i class="fa fa-globe" 
                style="font-size:50px;">7</i></span><a href="assignment-select-sub.php?sem=7&branch=<?php echo $branch; ?>">Seventh Semister</a></h4>
<a href="assignment-select-sub.php?sem=7&branch=<?php echo $branch; ?>" class="fa-btn btn-1 btn-1e">Enter</a>
			</div>
            <div class="col-md-3 images_1_of_4 bg1 text-center">
				
				<h4><span class="bg"><i class="fa fa-globe" 
                style="font-size:50px;">8</i></span><a href="assignment-select-sub.php?sem=8&branch=<?php echo $branch; ?>">Eighth Semister</a></h4>
<a href="assignment-select-sub.php?sem=8&branch=<?php echo $branch; ?>" class="fa-btn btn-1 btn-1e">Enter</a>
			</div>
            
            
		</div>
	</div>
</div><!-- end main -->

					<!----//End-img-cursual---->
	</div>
</div>
<?php include "includes/footer.php"; ?>
</body>
</html>