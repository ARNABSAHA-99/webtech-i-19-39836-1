<!DOCTYPE html>
<html>
<head>
</head>
<body>
	
<header>
<div class="left">
	<img class="logo" src="Uploads/modern_medical.png" alt="Profile Picture"> 
</div>	
<br><br>
<div class="right">
	<?php echo "Logged in as ".$_SESSION['category']."||".$_SESSION['name']."||"; ?>
	<a href="welcome.php">Home</a>
	<a href="patientinfo.php">Patient Info for Doctor</a>	
	<a href="prescription.php">Prescription</a>
	<a href="viewProfile.php">View Profile</a>
	<a href="Controller/logout.php">Logout</a>
</div>
</header> 
<br><br>
<hr>

</body>
</html>