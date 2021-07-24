<?php
require '../connection.inc.php';
require '../functions.inc.php';

if(!isset($_SESSION['hasib_lgn'])){
	echo reloader('../index.php',0);
	die();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="">
    <meta name="twitter:creator" content="">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Admin - HASIB TRAVELS</title>
	<link rel="icon" href="img/site-icon.png" type="image/gif" sizes="16x16">

    <!-- vendor css -->
    <link href="lib-admin/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="lib-admin/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="lib-admin/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="css/starlight.css">
    <link rel="stylesheet" href="css/custom-admin.css">
  </head>

  <body>
  
<?php
include 'nav.php';
?>