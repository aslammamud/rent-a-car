<?php
include '../functions.inc.php';
session_start();
session_destroy();
$_SESSION['hasib_lgn'] == false;
$hasib_user_name = '';
$hasib_user_email = '';
$hasib_user_pass = '';
$hasib_user_location = '';
$hasib_user_level = '';
echo reloader('../index.php',0);
die();
exit();
?>