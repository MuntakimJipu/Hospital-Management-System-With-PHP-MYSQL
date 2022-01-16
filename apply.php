<?php 

include 'include/connection.php';

if(isset($_POST['apply'])){


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
									$error['apply']="Enter Firstname";
								}else if(empty($lastname)){
									$error['apply']="Enter Lastname";
								}else if(empty($username)){
									$error['apply']="Enter Username";
								}else if(empty($email)){
									$error['apply']="Enter Email";
								}else if(empty($gender)){
									$error['apply']="Enter Gender";
								}else if(empty($phone)){
									$error['apply']="Enter Phone";
								}else if(empty($password)){
									$error['apply']="Enter Password";
								}else if($confirm_pass != $password){
									$error['apply']="Password does not mathch!";
								} 

								if(count($error) == 0){
									$q = "INSERT INTO doctors(firstname,lastname,username,email,gender,phone,password,salary,data_reg,status,profile) VALUES('$firstname','$lastname','$username','$email','$gender','$phone','$password','0',NOW(),'Pending','doctor.jpg')";
									$result = mysqli_query($connect,$q);

									if($result){
										echo "<script>alert('Sucessfully Applied')</script>";
										header("Locaation: doctorlogin.php");
									}else{

										echo "<script>alert('Unucessful Application')</script>";

									} 
								}

}



if(isset($error['apply'])){
								$er = $error['apply'];
								$show = "<h5 class='text-center alert alert-danger'>$er</h5>";
							}else {
								$show = "";
							} 


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Apply Now</title>
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
	 				<h5 class="text-center">Apply Now</h5>

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
	 					<input type="submit" name="apply" value="Aplly Now" class="btn btn-success">
	 					<p>Already Have an account <a href="doctorlogin.php">Click Here</a></p>




	 				</form>
	 				
	 			</div>
	 		</div>
	 	</div>
	 </div>

</body>


</html>