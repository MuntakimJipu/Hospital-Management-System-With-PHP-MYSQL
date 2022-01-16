<?php 

session_start();

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Approve Doctor Application</title>
 </head>
 <body>


 	<?php 

 	include '../include/header.php';
 	include '../include/connection.php';
 	

 	 ?>

 	 <div class="container-fluid">
 	 	<div class="col-md-12">
 	 		<div class="row">
 	 			<div class="col-md-2" style="margin-left: -30px ">
 	 				<?php 

 	 				include 'sidenav.php';

 	 				 ?>
 	 				
 	 			</div>

 	 			
				<?php 
 	 				 	if(isset($_POST['approve'])){

 	 				 		$id = $_GET['id'];

 	 				 		
 	 				 		
 	 				 		$q = "UPDATE doctors SET status='Approved' WHERE id='$id'";
 	 				 		mysqli_query($connect,$q);
 	 				 		header("Location:job_request.php");
 	 				 	}



 	 		    ?>


 	 				 	<div class="col-md-10">
 	 				 		<h3 class="text-center">Are you sure want to Approve?</h3>
 	 				 		<form method="post">
 	 				 		<input type="submit" name="approve" class="btn btn-info my-3" value="YES">
 	 				 	</form>

 	 				 		
 	 				 	</div>
 	 				 		
 	 				 		
 	 				 
 	 				


 	 			</div>
 	 			
 	 		</div>
 	 	</div>
 	 </div>
 
 </body>
 </html>