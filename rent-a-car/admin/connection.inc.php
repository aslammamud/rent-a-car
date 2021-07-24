<?php

session_start();
$servername = "localhost";
$username = "pixelitlimited_abc_usr";
$password = "=*QD@v8!+,Ln";
$dbname = "pixelitlimited_abc";
$con = mysqli_connect($servername, $username, $password, $dbname);


if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_SESSION['abc_lgn']) AND $_SESSION['abc_lgn'] == true){
		$abc_user_id =  $_SESSION['abc_usr_id'];
		
		$sql = "SELECT * FROM user WHERE user_id = '$abc_user_id'";

		$result = mysqli_query($con,$sql);
		$data = mysqli_fetch_assoc($result);
		$count = mysqli_num_rows($result);

		if($count>0){
			$abc_user_name = $data['user_name'];
			$abc_user_email = $data['user_email'];
			$abc_user_phone = $data['user_phone'];
			$abc_user_pass = $data['user_pass'];
			$abc_user_city = $data['user_city'];
			$abc_user_region = $data['user_region'];
			$abc_user_location = $data['user_location'];
			$abc_user_level = $data['user_level'];
			$abc_user_type = $data['user_type'];
		}
	}
?>