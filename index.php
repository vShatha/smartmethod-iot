<?php
require  'connect.php';


if(isset($_GET['submit'])){
    $name = $_GET["sensor1"];
    $name = $_GET["sensor2"];
    $name = $_GET["sensor3"];
    $name = $_GET["sensor4"];

$query ="INSERT INTO sensordata VALUES('sensor1','sensor2','sensor3','sensor4')";
 
mysqli_query($connection,$query);
echo
"
<script> alert('Data inserted Successfully'); </script>
";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>sensor database</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
<form method = "GET">
  </div class="row">
  <div class="col-sm-6">
  <div class="form-group">
  <label for="usr">sensor1:</label>
  <input type="number" class="form-control" id="sensor1" name="sensor1" >
</div> 
<div class="form-group">
  <label for="usr">sensor2:</label>
  <input type="number" class="form-control" id="sensor2" name="sensor2">
</div>
<div class="form-group">
  <label for="usr">sensor3:</label>
  <input type="number" class="form-control" id="sensor3" name="sensor3">
</div>
<div class="form-group">
  <label for="usr">sensor4:</label>
  <input type="number" class="form-control" id="sensor4" name="sensor4">
</div>
<div class="btn-group"> 
  <button type="submit" class="btn btn-primary" name="submit">submit</button>
</div>
</from>
 </div>
  </div>
</div>


</body>
</html>
