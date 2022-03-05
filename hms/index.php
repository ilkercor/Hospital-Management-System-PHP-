


<!DOCTYPE html>
<html>
<head>
	<title> HIS Home page</title>
</head>
<body style="background-image: url(img/homebackground.jpg); background-repeat: no-repeat;">
	<?php
	include("include/header.php");
	?>

	<div class="container">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-3 mx-1 my-5">
					<img src="img/aboutus.png" style="width: 90%;">
					<h6 class="text-center">About Us</h6>
					<a href="#">
						<button class="btn btn-success my-3" style="margin-left: 30%;"> About Us </button>
					</a>
				</div>
				<div class="col-md-4 mx-1 my-5">
					<img src="img/patient.png" style="width: 100%;">
					<h6 class="text-center">Create Account as a Patient</h6>
					<a href="account.php">
						<button class="btn btn-success my-3" style="margin-left: 30%;"> Create Account </button>
					</a>
				</div>
				<div class="col-md-4 mx-1 my-5">
					<img src="img/doc.png" style="width:250px; height:250px; margin-left: 50px;">
					<h6 class="text-center">Apply for job</h6>
					<a href="apply.php">
						<button class="btn btn-success my-2" style="margin-left: 30%;"> Apply Now </button>
					</a>
				</div>
			</div>
		</div>
	</div>
	<br><br><br><br><br><br><br><br><br>
	<footer class="bg-blue text-center">
  	<!-- Copyright -->
  	<div class="text-center p-3 bg-info">
  	  <a class="text-white" href="index.php">Hospital Information System -Ilker Cor</a>
 	 </div>
  	<!-- Copyright -->
	</footer>



</body>
</html>