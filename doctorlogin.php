<?php
session_start();

include 'include/connection.php';



if(isset($_POST['login'])){


	$uname = $_POST['uname'];
	$password = $_POST['pass'];


	$error = array();

	$q = "SELECT * FROM doctors WHERE  username= '$uname' AND password = '$password'";
	$result = mysqli_query($connect,$q);
	$row = mysqli_fetch_array($result);


	if(empty($uname)){
		$error['login'] = "Enter Username";

	}else if(empty($password)){
		$error['login'] = "Enter Password";
	}else if($row['status'] == "Pending"){
		$error['login'] = "Wait for the admin to confirm";
	}else if($row['status'] == "Rejected"){
		$error['login'] = "Try again Later";
	}



	if(count($error)==0){
		$query = "SELECT * FROM doctors WHERE username='$uname' AND password='$password'";

			$result = mysqli_query($connect,$query);

			if(mysqli_num_rows($result)){
				echo "<script>alert('Successful')</script>";
				$_SESSION['doctor']=$uname;
				header("Location:doctor/index.php");
			}else{

				echo "<script>alert('Invalid account information')</script>";

			}
	}
}

if(isset($error['login'])){
				    $err = $error['login'];
					$show = "<h5 class='text-center alert alert-danger'>$err</h5>";
}else {
		$show = "";
} 



 ?>


<!DOCTYPE html>
<html>
<head>
	<title>
		Doctor Login Page
	</title>
</head>
<body style="background-image: url(img/hospital.jfif);background-repeat: no-repeat;background-size: cover;">

	<?php

	include 'include/header.php'; 

	 ?>

	 <div class="container-fluid">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-3" ></div>
				<div class="col-md-6 jumbotron">
					<h5 class="text-center my-5">Doctor Login</h5>

					<div>
						<?php echo $show; ?>
					</div>
					<form method="post">
								
								<div class="form-group">
									<label>Username</label>
									<input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" name="pass" class="form-control" autocomplete="off">
								</div>
								<input type="submit" name="login" class="btn btn-success" value="login">

								<p>I don't have an account <a href="apply.php">Apply Now</a></p>

							</form>

					
				</div>
			</div>
		</div>
	</div>

</body>
</html>