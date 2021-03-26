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
<table>
  <tr>
    <th>Patient Id</th>
    <th>Patient Name</th>
    <th>Patient Email</th>
    <th>Patient Mobile No</th>
    <th>Gender</th>
    <th>Date of Birth</th>
    <th>Address</th>
    <th>Doctor name</th>
    <th>Doctor Id</th>
  </tr>
  <tr>
    <td>01</td>
    <td>Mr.Karim</td>
    <td>karim@gmail.com</td>
    <td>01736464647</td>
    <td>Male</td>
    <td>20-11-1999</td>
    <td>Uttara,Dhaka,1200.</td>
    <td>Arnab Saha</td>
    <td>112525</td>
  </tr>
  <tr>
      <td>01</td>
    <td>Mr.Karim</td>
    <td>karim@gmail.com</td>
    <td>01736464647</td>
    <td>Male</td>
    <td>20-11-1999</td>
    <td>Uttara,Dhaka,1200.</td>
    <td>Arnab Saha</td>
    <td>112525</td>
  </tr>
  <tr>
     <td>01</td>
    <td>Mr.Karim</td>
    <td>karim@gmail.com</td>
    <td>01736464647</td>
    <td>Male</td>
    <td>20-11-1999</td>
    <td>Uttara,Dhaka,1200.</td>
    <td>Arnab Saha</td>
    <td>112525</td>
  </tr>
  <tr>
     <td>01</td>
    <td>Mr.Karim</td>
    <td>karim@gmail.com</td>
    <td>01736464647</td>
    <td>Male</td>
    <td>20-11-1999</td>
    <td>Uttara,Dhaka,1200.</td>
    <td>Arnab Saha</td>
    <td>112525</td>
  </tr>
</table>
</div>
<?php require 'Bar/footer.php';?>
</body>
</html>