<?php  
require_once 'Controller/patientinfo.php';

$patients = fetchAllPatients();

?>

<!DOCTYPE html>
<html>
<head>
<title>Search Patient</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/bootstrap.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


<script src="JS/style.js"></script>

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>

<div class="container-fluid">
<?php 
session_start();
if (isset($_SESSION['name'])){require 'Bar/top1.php';}
else{header("location:Login.php");}
?>
<div class="container">
	<div class="container-fluid, textCenter">
		<h1>Search Individual Patient Info</h1>
		<h4>Enter Serial: 
			<input type="number" name="searchByID" id="searchByID" onkeyup="search(this.value)" onblur="search(this.value)">
			<span id="searchByIDErr"></span>
		</h4>
	
	</div>
</div>


	<div id="txtHint">

<h3 class="container-fluid, textCenter">Full Appointment List For Today</h3>

<table class="table">
     <thead class="table-dark">
		<tr>
			<th>Appointment Serial</th>
			<th>Patient Name</th>
			<th>Patient Email</th>
			<th>Patient Mobile Number</th>
			<th>Patient Address</th>
		    <th>Patient Gender</th>
			<th>Patient Date of Birth</th>
			<th>Doctor Name</th>
			<th>Doctor ID</th>
			<th>Appointment Date</th>
		
		
			
		</tr>
	</thead>
	<tbody>
		<?php foreach ($patients as $i => $patient): ?>
			<tr>
			
				<td><?php echo $patient['ID'] ?></td>
				<td><?php echo $patient['Name'] ?></td>
				<td><?php echo $patient['Email'] ?></td>
				<td><?php echo $patient['Mobile Number'] ?></td>
				<td><?php echo $patient['Address'] ?></td>
				<td><?php echo $patient['Gender'] ?></td>
				<td><?php echo $patient['Date of Birth'] ?></td>
				<td><?php echo $patient['Doctor Name'] ?></td>
				<td><?php echo $patient['Doctor ID'] ?></td>
				<td><?php echo $patient['Appointment Date'] ?></td>
			
			
		
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>
</div>


<?php require 'Bar/footer.php';?>

</div>

</body>
</html>