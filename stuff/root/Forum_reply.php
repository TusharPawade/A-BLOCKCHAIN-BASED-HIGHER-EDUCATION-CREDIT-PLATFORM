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
			<h2>Forum Query Replies</h2>
            
            <hr><span style="font-size:16px;">
         <?php	
 
  //  include 'Application/DB_Functions.php';
  $obj= new Connections();
  $id=$_GET['id'];
  $sql = $obj->db->prepare("select * from forum where id='$id'");
  $sql->execute();
  while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
	echo $row['question'];	echo "</h2>";
		echo "&nbsp; &nbsp; &nbsp; <span style='width:80%; margin:20px;'>";	echo htmlspecialchars($row['code']);
			echo "</span>";
			}
			?> <br><br>
                 <center>
                 
                                   
          <table cellspacing="0" id="tech-companies-1" class="table table-small-font table-bordered table-striped" style="width:90%;">
                                                <thead>
                                                    <tr>
                                                      
                                                         <th data-priority="1">Reply</th>
                                                                                                          
                                                       
                                                       
                                                        
                                                     
                                                     
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
  <?php	
 
   // include 'Application/DB_Functions.php';
  $obj= new Connections();// Now we create the object of AdminConnection class and through that object we are going to call connection
			$id=$_GET['id'];
  $sql = $obj->db->prepare("select * from  replies where question_id='$id'");
		
		$sql->execute();
		
			
		    while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
			
			?> 
                                                    <tr>
                        <th><?php echo $row['reply']; ?><br><br>
                       <span style="font-size:10px;"><strong>Time:</strong>  <?php echo $row['time']; ?><br>
						<strong>Reply By:</strong> <?php echo $row['reply_by']; ?></span>
                        </th>
                        <td></td>
                        <td></td>
                        
                                                         
                                                    </tr>      
                                          <?php } ?>          
                                                </tbody>
                                            </table>
                  <form action="" method="post">
                  <textarea name="desc" required placeholder="Describe Your Answer here!!" class="form-control" style="width:60%; height:150px;"></textarea><br><input type="submit" value="POST" class="btn btn-primary">
                                           
                                            
                  </form>  
            
           
<?php    

if(isset($_POST['desc']))
{
$obj= new Connections(); // Create object of class connection for calling the Personal_Details function

$id=$_GET['id'];
$table=$_POST['desc'];
if($obj->ans($id,$table)==1)
{
	echo "<script>alert('Answer Uploaded!!');window.location='Forum_reply.php?id=$id';</script>";
}

}


?> 
					
			
		</div>
	</div>
</div><!-- end main -->
<?php include "includes/footer.php"; ?>
</body>
</html>