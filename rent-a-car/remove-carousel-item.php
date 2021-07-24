<?php
require '../connection.inc.php';  
require '../functions.inc.php';  

$caro_id = $_GET['id'];

$delete = "DELETE FROM carousel WHERE carousel_id = '$caro_id'";
$result =  mysqli_query($con, $delete);

echo reloader('carousel.php',0);
die();
exit();

?>