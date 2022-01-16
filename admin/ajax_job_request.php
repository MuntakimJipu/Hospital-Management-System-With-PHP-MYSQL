<?php 

include '../include/connection.php';


$query = "SELECT * FROM doctors WHERE status='Pending' ORDER BY data_reg ASC ";
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
		<th>Action</th>
	</tr>
	 

";

if(mysqli_num_rows($result) < 1) {

	$output .="
			<tr>
		  		<td colspan='7'>No job request</td>
			</tr>
	";
}



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
		<td>
			<div class='col-md-12'>
				<div class='row'>
					<div class='col-md-6'>
						<button id='".$row['id']."' class='btn btn-success approve'>Approve</button>
			
					</div>
					<div class='col-md-6'>
						<button id='".$row['id']."' class='btn btn-danger reject'>reject</button>
			
					</div>

			


				</div>


			</div>

		</td>

	";
}


$output .="

</tr>
</table>

";

echo $output;


?>
