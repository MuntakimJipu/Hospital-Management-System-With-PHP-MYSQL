<?php 

session_start();

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Admin Profile</title>
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

 	 				$admin = $_SESSION['admin'];
 	 								$query="SELECT * FROM admin WHERE username='$admin'";
 	 								$res = mysqli_query($connect,$query);
 	 								$row = mysqli_fetch_array($res);

 	 				 ?>
 	 				
 	 			</div>
 	 			<div class="col-md-10">
 	 				<div class="col-md-12">
 	 					<div class="row">
 	 						<div class="col-md-6">

 	 							<!--

 	 							<?php 
								/*
 	 								if(isset($_POST['upload'])){
 	 									$img = $_FILES['img']['name'];

 	 									if(empty($img)){

 	 									}else{
 	 										$query = "UPDATE patient SET profile='$img'WHERE username='$patient' ";
 	 										$res = mysqli_query($connect,$query);

 	 										if($res){
 	 											move_uploaded_file($_FILES['img']['tmp_name'], "img/$img");

 	 										}
 	 									}
 	 								}*/

 	 							 ?>

 	 							-->


 	 							<h5>Admin Profile</h5>
 	 							<form method="post" enctype="multipart/form-data">
 	 								<?php 

 	 								echo "<img src='img/".$row['profile']."' class ='col-md-12' style='height:250px;'>";

 	 								 ?>
 	 								 <!--<input type="file" name="img" class="form-control my-2">
 	 								 <input type="submit" name="upload" class="btn btn-info" value="Update Profile">-->
 	 							</form>
 	 							<div>
 	 								



 	 				 <div class="container-fluid">
 	 					<div class="col-md-12">
 	 						<div class="row">
 	 							<div class="col-md-6">
 	 								<h5 class="col-md-6">Profile</h5>
 	 								<?php
 	 								 
 	 								$output = "";


 	 								$output .="

										<table class='table table-bordered'>
										<tr>
											<th>ID</th>
											
											<th>Username</th>
											<th>Password</th>
											
											
										</tr>
										 




										<tr>
											<td>".$row['id']."</td>
											
											<td>".$row['username']."</td>
											<td>".$row['password']."</td>
											
											

									</tr>
									</table>

									";

									echo $output;

 	 								 ?>




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

 