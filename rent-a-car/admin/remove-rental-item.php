<?php
require '../connection.inc.php';  
require '../functions.inc.php';  

$car_rental_id = $_GET['id'];

$delete = "DELETE FROM car_rental WHERE car_rental_id = '$car_rental_id'";
$result =  mysqli_query($con, $delete);

echo reloader('car-rental-pricing.php',0);
die();
exit();

?>