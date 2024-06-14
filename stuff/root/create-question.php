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
            
            <hr><span style="font-size:16px;">
         <form action="create-question.php" method="POST">
<span style="color:black;">QUESTION:</span>
<input type="text" name="question" class="form-control">
<br>
<span style="color:black;">Description:</span><textarea name="code" rows="5" cols="40" value="." class="form-control"></textarea><br><br>
<span style="color:black;">CATEGORY:</span>
<select name="category" class="form-control">
<option value="">SELECT PLEASE</option>
<option value="java">JAVA</option>
<option value="php">PHP</option>
<option value="dotnet">DOT NET</option>
<option value="android">ANDROID</option>
<option value="html">HTML</option>
<option value="Other">Other</option>
</select><br><br>
<input type="submit" name="submit" class="btn btn-primary" >

</form>
                   
            
 

<?php
//include 'Application/DB_Functions.php';
$obj= new Connections(); 
if(isset($_POST['question'])){
 $question = mysql_real_escape_string($_POST['question']);           
 $code=mysql_real_escape_string($_POST['code']);
 $name= $_SESSION['name'];
 $category = $_POST['category'];   
 

if($obj->create_question($question,$code,$name,$category)==1)
{	

echo "<script type='text/javascript'>
alert('Result Added to Database!!');
</script>";

}
else{
echo "<script type='text/javascript'>
alert('Username already Exist!!');
</script>";
}
}
?>			
		</div>
	</div>
</div><!-- end main -->
<?php include "includes/footer.php"; ?>
</body>
</html>