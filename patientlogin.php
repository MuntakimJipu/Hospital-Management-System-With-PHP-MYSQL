<?php
session_start();

include 'include/connection.php';



if(isset($_POST['login'])){


	$uname = $_POST['uname'];
	$password = $_POST['pass'];


	if(empty($uname)){

		echo "<script>alert('Enter Username')";
	}else if(empty($password)){
		echo "<script>alert('Enter Password')";
	}else{
		$q = "SELECT * FROM patient WHERE  username='$uname' AND password ='$password'";
		$result = mysqli_query($connect,$q);
		
		if(mysqli_num_rows($result)==1){
			$_SESSION['patient']=$uname;
			header("Location:patient/index.php");
			$_SESSION['patient']=$uname;

		}else{
			echo "<script>alert('Invalid Account Info')";
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
		Patient Login Page
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
					<h5 class="text-center my-5">Patient Login</h5>

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
								<input type="submit" name="login" class="btn btn-info my-3" value="login">

								<p>I don't have an account <a href="account.php">Click Here</a></p>

							</form>

					
				</div>
			</div>
		</div>
	</div>

</body>
</html>