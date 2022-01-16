<?php 


 

session_start();

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Patient dashboard</title>
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
 	 			<div class="col-md-10">
 	 				<div class="container-fluid">
 	 					<h5>Patient's Dashboard</h5>
 	 					<div class="col-md-12">
 	 						<div class="row">
 	 							<div class="col-md-3 my-2 bg-info" style="height: 150px;">
 	 								<div class="col-md-12">
 	 									<div class="row">
 	 										<div class="col-md-8">
 	 											<h5 class="text-white my-4">My profile</h5>
 	 										</div>
 	 										
 	 									</div>
 	 									<div class="col-md-4">
 	 								<a href="profile.php">
 	 									<i class="fa fa-id-badge fa-3x my-4" style="color: white"></i>
 	 								</a>
 	 							</div>
 	 								</div>
 	 								
 	 							</div>


 	 							<div class="col-md-3 my-2 bg-warning mx-2" style="height: 150px;">
 	 								<div class="col-md-12">
 	 									<div class="row">
 	 										<div class="col-md-8">
 	 											<h5 class="text-white my-2" style="font-size: 30px">Book An Appointment</h5>
 	 											
 	 										</div>
 	 										
 	 									</div>
 	 									<div class="col-md-4">
 	 								<a href="appointment.php">
 	 									<i class="fa fa-id-badge fa-3x my-4" style="color: white"></i>
 	 								</a>
 	 							</div>
 	 								</div>
 	 								
 	 							</div>

 	 							<div class="col-md-3 my-2 bg-success mx-2" style="height: 150px;">
 	 								<div class="col-md-12">
 	 									<div class="row">
 	 										<div class="col-md-8">
 	 											<h5 class="text-white my-2">My Invoice</h5>
 	 											
 	 										</div>
 	 										
 	 									</div>
 	 									<div class="col-md-4">
 	 								<a href="invoice.php">
 	 									<i class="fa fa-id-badge fa-3x my-4" style="color: white"></i>
 	 								</a>
 	 							</div>
 	 								</div>
 	 								
 	 							</div>
 	 							
 	 						</div>




 	 					</div>

 	 					<?php 

 	 					if(isset($_POST['send'])){

 	 						$title = $_POST['send'];
 	 						$message = $_POST['message'];

 	 						if(empty($title)){

 	 						}else if (empty($message)){

 	 						}else{
 	 							$user = $_SESSION['patient'];
 	 							$query="INSERT INTO report(title,message,username,data_send) VALUES('$title','$message','$user',NOW())";
 	 							$res = mysqli_query($connect,$query);

 	 							if($res){
 	 								echo "<script>alert('You have sent your report')</script>";
 	 							}


 	 						}
 	 					}

 	 					 ?>

 	 					<div class="col-md-12">
 	 						<div class="row">
 	 							<div class="col-md-9 my-12 bg-info" style="height: 250px;">
 	 								<div class="col-md-12">
 	 									<div class="row">
 	 										<div class="col-md-8">
 	 											<h5 class="text-white my-8">Send a report</h5>
 	 											<form method="post">
 	 												<label>Title</label>
 	 												<input type="text" name="title" autocomplete="off" class="form-control" placeholder="Enter message title">
 	 												<label>Message</label>
 	 												<input type="text" name="message" autocomplete="off" class="form-control" placeholder="Enter message ">
 	 												<input type="submit" name="send" value="Send Report" class="btn btn-success">

 	 											</form>
 	 										</div>
 	 										
 	 									</div>
 	 									
 	 								</div>
 	 								
 	 							</div>
 	 						</div>
 	 					</div>
 	 				</div>
 	 				
 	 			
 	 		</div>
 	 		</div>
 	 	</div>
 	 </div>
 
 </body>
 </html>

 