<?php
require '../connection.inc.php';  
require '../functions.inc.php';  

$driver_id = $_GET['id'];

$delete = "DELETE FROM drivers WHERE driver_id = '$driver_id'";
$result =  mysqli_query($con, $delete);

echo reloader('drivers.php',0);
die();
exit();

?>