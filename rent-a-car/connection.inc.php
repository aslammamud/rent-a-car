<?php
session_start();
$servername = "localhost";
$username = "hasibtravels_admin";
$password = "1u+5Nxg]k;pi";
$dbname = "hasibtravels_info"; 

/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hasib_travels";
*/

$con = mysqli_connect($servername, $username, $password, $dbname);


if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_SESSION['hasib_lgn']) AND $_SESSION['hasib_lgn'] == true){
		$hasib_user_id =  $_SESSION['hasib_usr_id'];
		
		$sql = "SELECT * FROM user WHERE user_id = '$hasib_user_id'";

		$result = mysqli_query($con,$sql);
		$data = mysqli_fetch_assoc($result);
		$count = mysqli_num_rows($result);

		if($count>0){
			$hasib_user_name = $data['user_name'];
			$hasib_user_image = $data['user_image'];
			$hasib_user_email = $data['user_email'];
			$hasib_user_phone = $data['user_phone'];
			$hasib_user_pass = $data['user_pass'];
			$hasib_user_city = $data['user_city'];
			$hasib_user_region = $data['user_region'];
			$hasib_user_location = $data['user_location'];
			$hasib_user_level = $data['user_level'];
			$hasib_user_type = $data['user_type'];
		}
	}
?>