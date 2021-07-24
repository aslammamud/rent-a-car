<?php
require '../connection.inc.php';  
require '../functions.inc.php';  

$partner_id = $_GET['id'];

$delete = "DELETE FROM partners WHERE partner_id = '$partner_id'";
$result =  mysqli_query($con, $delete);

echo reloader('partner-companies.php',0);
die();
exit();

?>