<?php
require '../connection.inc.php';  
require '../functions.inc.php';  

$review_id = $_GET['id'];

$delete = "DELETE FROM reviews WHERE review_id = '$review_id'";
$result =  mysqli_query($con, $delete);

echo reloader('reviews.php',0);
die();
exit();

?>