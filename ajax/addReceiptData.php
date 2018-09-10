
<?php
  if(isset($_POST['foodItem']) && isset($_POST['weight']) && isset($_POST['date']))
  {
     // include Database connection file
     include("db_connection.php");

     // get values
     $foodItem = $_POST['foodItem'];
     $weight = $_POST['weight'];
     $date = $_POST['date'];

     $query = "INSERT INTO receipt(foodItem, weight, date) VALUES('$foodItem', '$weight', '$date')";
     if (!$result = mysqli_query($con, $query)) {
         exit(mysqli_error($con));
     }
     echo "1 Record Added!";
 }
?>
