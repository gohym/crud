<?php
  if(isset($_POST['foodItem']) && isset($_POST['weight']) && isset($_POST['expiry']))
  {
     // include Database connection file
     include("db_connection.php");

     // get values
     $foodItem = $_POST['foodItem'];
     $weight = $_POST['weight'];
     $expiry = $_POST['expiry'];

     $query = "INSERT INTO currentfood(foodItem, weight, expiry) VALUES('$foodItem', '$weight', '$expiry')";
     if (!$result = mysqli_query($con, $query)) {
         exit(mysqli_error($con));
     }
     echo "1 Record Added!";
 }
?>
