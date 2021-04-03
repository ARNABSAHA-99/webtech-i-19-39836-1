<!DOCTYPE html>
<html>
<head>
<title>Doctors</title>
<link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<?php 
session_start();
if (isset($_SESSION['name'])){require 'Bar/top1.php';}
else{header("location:login.php");} 
?>
<h1 class="textCenter">Patient Info For Respective Doctor</h1><br><br>
<div class="div">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
 <fieldset class="loginFildset"style="width: 400px">
 <legend>Prescription</legend>

  <label for="prescribe date">Prescribe Date:</label>
  <input type="date" id="prescribe date" name="prescribe date">
   <!-- <span class="error">*<?php echo $prescribedateErr;?></span> -->
  <br><br>

  <label for="doctor name">Doctor Name:</label>
  <input type="text" id="doctor name" name="doctor name" value="<?php echo $_SESSION['name']; ?>">
   <!-- <span class="error">*<?php echo $doctornameErr;?></span> -->
  <br><br>

  <label for="doctor id">Doctor Id:</label>
  <input type="number" id="doctor id" name="doctor id" value="12234">
   <!-- <span class="error">*<?php echo $doctoridErr;?></span> -->
  <br><br>

<label for="patient name">Patient Name:</label>
  <input type="text" id="patient name" name="patient name" value="Anketa Chowdhury">
  <!-- <span class="error">*<?php echo $patientnameErr;?></span> -->
  <br><br>

  <label for="patient id">Patient Id:</label>
  <input type="number" id="patient id" name="patient id" value="578578">
     <!-- <span class="error">*<?php echo $patientidErr;?></span> -->
  <br><br>

<label for="test">Test:</label>
  <textarea id="test" name="test" rows="4" cols="50">Amylase Test, CT Scans, MRI Scans
  </textarea>
    <!-- <span class="error">*<?php echo $testErr;?></span> -->
  <br><br>


<label for="medicine">Medicine:</label>
  <textarea id="medicine" name="test" rows="4" cols="50">Generic Synthroid, Amoxicillin 
  </textarea>
    <!-- <span class="error">*<?php echo $medicineErr;?></span> -->
  <br><br>
  
  <input type="submit" value="Submit">

 </style=>
</form> 
</div>

<?php require 'Bar/footer.php';?>

</body>
</html>