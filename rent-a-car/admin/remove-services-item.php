<?php
require '../connection.inc.php';  
require '../functions.inc.php';  

$serv_id = $_GET['id'];

$delete = "DELETE FROM services WHERE service_id = '$serv_id'";
$result =  mysqli_query($con, $delete);

echo reloader('services.php',0);
die();
exit();

?>