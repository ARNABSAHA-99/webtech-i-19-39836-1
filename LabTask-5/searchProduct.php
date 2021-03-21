<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Product</title>
 <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
}
</style>
</head>
<body>

<div style="margin-left: 40%; margin-top: 10%;">
<form action="">
<fieldset style="width:300px">
<legend>SEARCH</legend>

  <input type="text" name="product name" required/>
      <input type="submit" name="search product" value="Search By Name"/> <hr>
  <table style="width:100%">
   <tr>
    <th>NAME</th>
    <th>PROFIT</th> 
 
  </tr>
   <tr>
   <td>Samsung</td>
   <td>5000</td>
   <td><input type="submit" name="Submit" value="Edit"> </td>
    <td><input type="submit" name="Submit" value="Delete"> </td>
  </tr>
   <tr>
   <td>Nokia</td>
   <td>1500</td>
    <td><input type="submit" name="Submit" value="Edit"> </td>
    <td><input type="submit" name="Submit" value="Delete"> </td>
  </tr>
   <tr>
   <td>Xiaomi</td>
   <td>3300</td>
     <td><input type="submit" name="Submit" value="Edit"> </td>
    <td><input type="submit" name="Submit" value="Delete"> </td>
  </tr>
  </fieldset>
</form>
 </div>
</body>
</html>