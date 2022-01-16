<?php 

session_start();

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Patient Reports</title>
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

 	 				$query= "SELECT * FROM report ORDER BY data_send ASC";
 	 				$result = mysqli_query($connect,$query);

 	 				$output = "";

$output .="

	<table class='table table-bordered'>
	<tr>
		<th>ID</th>
		<th>Title</th>
		<th>Message</th>
		<th>Username</th>
		<th>Data Sent Date</th>
		
	</tr>
	 

";





while ($row = mysqli_fetch_array($result)) {
	$output .= "
	<tr>
		<td>".$row['id']."</td>
		<td>".$row['title']."</td>
		<td>".$row['message']."</td>
		<td>".$row['username']."</td>
		<td>".$row['data_send']."</td>
		

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