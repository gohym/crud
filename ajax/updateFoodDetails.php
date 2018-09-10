<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST))
{
    // get values
    $id = $_POST['id'];
    $foodItem = $_POST['foodItem'];
    $weight = $_POST['weight'];
    $expiry = $_POST['expiry'];

    // Updaste User details
    $query = "UPDATE currentfood SET foodItem = '$foodItem', weight = '$weight', expiry = '$expiry' WHERE id = '$id'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
}
?>
