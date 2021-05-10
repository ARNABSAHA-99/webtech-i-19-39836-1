<?php  
require_once 'Controller/prescriptioninfo.php';
$prescriptions = fetchAllprescriptions();
?>

<!DOCTYPE html>
<html>
<head>
<title>Prescription</title>
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
		<h1>Search Individual Prescription Info</h1>
		
		<form action=""> 
<select name="prescription" id="prescription" onchange=" searchPrescription(this.value)">
<option value="">Select Prescription No:</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="">No More Prescription</option>
</select>
</form>
<hr>
<br><br>

	</div>
</div> 


	<div id="txtHint">

<h3 class="container-fluid, textCenter">Full Prescription History</h3>

<table class="table">
     <thead class="table-dark">
		<tr>
			<th>Prescription ID</th>
			<th>Patient Name</th>
			<th>Patient Email</th>
			<th>Patient Mobile Number</th>
			<th>Patient Age</th>
			<th>Patient Weight</th>
			<th>Gender</th>
			<th>Medicine</th>
			<th>Test</th>
			<th>Doctor Name</th>
			<th>Doctor ID</th>
			<th>Appointment Date</th>
		
			
		</tr>
	</thead>
	<tbody>
		<?php foreach ($prescriptions as $i => $prescription): ?>
			<tr>
			
				<td><?php echo $prescription['ID'] ?></td>
				<td><?php echo $prescription['Name'] ?></td>
				<td><?php echo $prescription['Email'] ?></td>
				<td><?php echo $prescription['Mobile Number'] ?></td>
				<td><?php echo $prescription['Age'] ?></td>
				<td><?php echo $prescription['Weight'] ?></td>
				<td><?php echo $prescription['Gender'] ?></td>
				<td><?php echo $prescription['Medicine'] ?></td>
				<td><?php echo $prescription['Test'] ?></td>
				<td><?php echo $prescription['Doctor Name'] ?></td>
				<td><?php echo $prescription['Doctor ID'] ?></td>
				<td><?php echo $prescription['Appointment Date'] ?></td>
		
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>
</div>


<?php require 'Bar/footer.php';?>

</div>

</body>
</html>