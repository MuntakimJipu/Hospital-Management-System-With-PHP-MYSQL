<?php 

session_start();

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Appointment</title>
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
 	 				<h5 class="text-center">Total Appointment</h5>
 	 				<?php 

 	 				$query= "SELECT * FROM appointment WHERE status='Pending'";
 	 				$result = mysqli_query($connect,$query);

 	 				$output = "";

$output .="

	<table class='table table-bordered'>
	<tr>
		<th>ID</th>
		<th>Firstname</th>
		<th>Lastname</th>
		<th>Gender</th>
		<th>Phone</th>
		<th>Apointment</th>
		
		<th>Symptoms</th>
		<th>Date Booked</th>
		<th>Action</th>
	</tr>
	 

";

if($row=mysqli_num_rows($result) < 1) {

	$output .="
			<tr>
		  		<td colspan='8'>No Appointment</td>
			</tr>
	";
}



while ($row=mysqli_fetch_array($result)) {
	$output .= "
	<tr>
		<td>".$row['id']."</td>
		<td>".$row['firstname']."</td>
		<td>".$row['lastname']."</td>
		
		<td>".$row['gender']."</td>
		
		<td>".$row['phone']."</td>
		<td>".$row['appointment_date']."</td>
		<td>".$row['symptoms']."</td>
		<td>".$row['date_booked']."</td>
		<td>
			

			<a href='discharge.php?id=".$row['id']."'>
				<button class='btn btn-info'>Check</button>
			</a>



		</td>

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