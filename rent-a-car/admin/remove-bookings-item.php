<?php
require '../connection.inc.php';  
require '../functions.inc.php';  

$booking_id = $_GET['id'];

$delete = "DELETE FROM bookings WHERE booking_id = '$booking_id'";
$result =  mysqli_query($con, $delete);

echo reloader('bookings.php',0);
die();
exit();

?>