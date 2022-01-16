<?php 

session_start();

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Total Patient</title>
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
 	 				<h5 class="text-center">Total Patient</h5>
 	 				<?php 

 	 				$query= "SELECT * FROM patient  ORDER BY data_reg ASC";
 	 				$result = mysqli_query($connect,$query);

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
	
		<th>Date Registered</th>
		
	</tr>
	 

";





while ($row = mysqli_fetch_array($result)) {
	$output .= "
	<tr>
		<td>".$row['id']."</td>
		<td>".$row['firstname']."</td>
		<td>".$row['lastname']."</td>
		<td>".$row['username']."</td>
		<td>".$row['email']."</td>
		<td>".$row['gender']."</td>
		
		<td>".$row['phone']."</td>
		
		<td>".$row['data_reg']."</td>
		

	";
}


$output .="

</tr>
</table>

";

echo $output;

 	 				 ?>
 	 			</div>
 	 		</div>
 	 	</div>
 	 </div>
 
 </body>
 </html>