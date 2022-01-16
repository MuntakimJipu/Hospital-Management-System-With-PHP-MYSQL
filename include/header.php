<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

	<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<script src="js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">


	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
	



</head>

<body>

		<nav class="navbar navbar-expand-lg navbar-info bg-info">
			<h2 class="text-white">Hospital management system</h2>
			<div class="mr-auto"></div>
			<ul class="navbar-nav">
				<?php
				if (isset($_SESSION['admin'])){
					$user = $_SESSION['admin'];
					echo '
						
						<li class="nav-item"><a href="profile.php"class="nav-link text-white">'.$user.'</a></li>
						<li class="nav-item"><a href="logout.php" class="nav-link text-white">logout</a></li>';

				}else if(isset($_SESSION['doctor'])){

					$user = $_SESSION['doctor'];
					echo '
						
						<li class="nav-item"><a href="profile.php"class="nav-link text-white">'.$user.'</a></li>
						<li class="nav-item"><a href="logout.php" class="nav-link text-white">logout</a></li>';


				}else if(isset($_SESSION['patient'])){

					$user = $_SESSION['patient'];
					echo '
						
						<li class="nav-item"><a href="profile.php"class="nav-link text-white">'.$user.'</a></li>
						<li class="nav-item"><a href="logout.php" class="nav-link text-white">logout</a></li>';


				}


				else {


					echo '
						
						<li class="nav-item"><a href="index.php" class="nav-link text-white">Home</a></li>
						<li class="nav-item"><a href="adminlogin.php" class="nav-link text-white">Admin</a></li>
						<li class="nav-item"><a href="doctorlogin.php"class="nav-link text-white">Doctor</a></li>
						<li class="nav-item"><a href="patientlogin.php" class="nav-link text-white">Patient</a></li>';
				} 


				 ?>
			</ul>


		</nav>

	
	

</body>
</html>