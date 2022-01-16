<?php 

include 'include/connection.php';

if(isset($_POST['create'])){


	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$username = $_POST['uname'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$phone = $_POST['phone'];
	$password = $_POST['pass'];
	$confirm_pass = $_POST['con_pass'];


	$error = array();


								if(empty($firstname)){
								$error['ac']="Enter Firstname";
								}else if(empty($lastname)){
								$error['ac']="Enter Lastname";
								}else if(empty($username)){
								$error['ac']="Enter Username";
								}else if(empty($email)){
								$error['ac']="Enter Email";
								}else if(empty($gender)){
								$error['ac']="Enter Gender";
								}else if(empty($phone)){
								$error['ac']="Enter Phone";
								}else if(empty($password)){
								$error['ac']="Enter Password";
								}else if($confirm_pass != $password){
								$error['ac']="Password does not mathch!";
								} 

								if(count($error) == 0){
									$q = "INSERT INTO patient(firstname,lastname,username,email,gender,phone,password,data_reg,profile) VALUES('$firstname','$lastname','$username','$email','$gender','$phone','$password',NOW(),'patient.jpg')";
									$result = mysqli_query($connect,$q);

									if($result){
										echo "<script>alert('Sucessfully Applied')</script>";
										header("Location:patientlogin.php");
									}else{

										echo "<script>alert('Unucessful Application')</script>";

									} 
								}

}



if(isset($error['ac'])){
								$er = $error['ac'];
								$show = "<h5 class='text-center alert alert-danger'>$er</h5>";
							}else {
								$show = "";
							} 


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Create Account</title>
</head>
<body style="background-image: url(img/hospital.jfif);background-repeat: no-repeat;background-size: cover;">

	<?php 

	include 'include/header.php';

	 ?>

	 <div class="container-fluid">
	 	<div class="col-md-12">
	 		<div class="row">
	 			<div class="col-md-3"></div>
	 			<div class="col-md-6 my-3 jimbotron">
	 				<h5 class="text-center text-info my-2">Create Account</h5>

	 				<div>
	 					
	 					<?php echo $show; ?>
	 				</div>

	 				<form method="post">
	 					
	 					<div class="form-group">
	 						<label>Firstname</label>
	 						<input type="text" name="fname" class="form-control" autocomplete="off" placeholder="Enter Firstname">
	 					</div>

	 					<div class="form-group">
	 						<label>Lastname</label>
	 						<input type="text" name="lname" class="form-control" autocomplete="off" placeholder="Enter Lastname">
	 					</div>

	 					<div class="form-group">
	 						<label>Username</label>
	 						<input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username">
	 					</div>

	 					<div class="form-group">
	 						<label>Email</label>
	 						<input type="text" name="email" class="form-control" autocomplete="off" placeholder="Enter Email Address">
	 					</div>

	 					<div class="form-control">
	 						<label>Select Gender</label>
	 						<select name="gender" class="form-control">
	 							<option value="">Select Gender</option>
	 							<option value="Male">Male</option>
	 							<option value="Female">Female</option>
	 						</select>
	 					</div>
	 					<div><p><br></p></div>
	 					<div class="form-group">
	 						<label>Phone</label>
	 						<input type="number" name="phone" class="form-control" autocomplete="off" placeholder="Enter Phone Number">
	 					</div>

	 					<div class="form-group">
	 						<label>Password</label>
	 						<input type="password" name="pass" class="form-control" autocomplete="off" placeholder="Enter Password">
	 					</div>

	 					<div class="form-group">
	 						<label>Confirm Password</label>
	 						<input type="password" name="con_pass" class="form-control" autocomplete="off" placeholder="Confirm Password">
	 					</div>
	 					<input type="submit" name="create" value="Create Account" class="btn btn-info">
 					<p>Already Have an account <a href="patientlogin.php">Click Here</a></a>




	 				</form>
	 				
	 			</div>
	 		</div>
	 	</div>
	 </div>

</body>


</html>