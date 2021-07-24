<?php
require '../connection.inc.php';  
require '../functions.inc.php';  

$fleet_id = $_GET['id'];

$delete = "DELETE FROM fleet WHERE fleet_id = '$fleet_id'";
$result =  mysqli_query($con, $delete);

echo reloader('fleet.php',0);
die();
exit();

?>