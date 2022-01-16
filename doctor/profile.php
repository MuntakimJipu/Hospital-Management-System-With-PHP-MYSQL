<?php 

session_start();

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Doctor Profile</title>
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
 	 					<div class="col-md-12">
 	 						<div class="row">
 	 							<div class="col-md-6">
 	 								<h5 class="col-md-6">Profile</h5>
 	 								<?php
 	 								$doc = $_SESSION['doctor'];
 	 								$query="SELECT * FROM doctors WHERE username='$doc'";
 	 								$res = mysqli_query($connect,$query);
 	 								$row = mysqli_fetch_array($res); 
 	 								$output = "";


 	 								$output .="

										<table class='table table-bordered'>
										<tr>
											<th>ID</th>
											<th>Firstname</th>
											<th>Lastname</th>
											<th>Username</th>
											<th>Email</th>
											<th>Gender</th>
											
											<th>Phone</th>
											<th>Salary</th>
											<th>Date Registered</th>
											
										</tr>
										 




										<tr>
											<td>".$row['id']."</td>
											<td>".$row['firstname']."</td>
											<td>".$row['lastname']."</td>
											<td>".$row['username']."</td>
											<td>".$row['email']."</td>
											<td>".$row['gender']."</td>
											
											<td>".$row['phone']."</td>
											<td>".$row['salary']."</td>
											<td>".$row['data_reg']."</td>
											

									</tr>
									</table>

									";

									echo $output;

 	 								 ?>


 	 				
				 	 			</div>
				 	 			<div class="col-md-6">
				 	 				







									 
				 	 				
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