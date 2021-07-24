<?php
require 'connection.inc.php';
require 'functions.inc.php';

// Add products into the cart table
if (isset($_POST['car'])) {
	
	$car = get_safe_value($con,htmlspecialchars($_POST['car']));
	$plocation = get_safe_value($con,htmlspecialchars($_POST['plocation']));
	$dlocation = get_safe_value($con,htmlspecialchars($_POST['dlocation']));
	$pdate = get_safe_value($con,htmlspecialchars($_POST['pdate']));
	$ddate = get_safe_value($con,htmlspecialchars($_POST['ddate']));
	$ptime = get_safe_value($con,htmlspecialchars($_POST['ptime']));
	$dtime = get_safe_value($con,htmlspecialchars($_POST['dtime']));
	$name = get_safe_value($con,htmlspecialchars($_POST['name']));
	$phone = get_safe_value($con,htmlspecialchars($_POST['phone']));

	if(!empty($plocation) && !empty($name) && !empty($phone)){
	$booking_insert_query = "INSERT INTO bookings (booking_car_name,booking_bookie_name,booking_bookie_phone,booking_pickup_location,booking_drop_location,booking_pickup_date,booking_drop_date,booking_pickup_time,booking_drop_time) VALUES ('$car','$name','$phone','$plocation','$dlocation','$pdate','$ddate','$ptime','$dtime')";
	$booking_form_db = mysqli_query($con, $booking_insert_query);
	echo '<div class="alert alert-success alert-dismissible">
							  <button type="button" class="close" data-dismiss="alert">×</button>
							  <strong>Successfully Booked Your Car!</strong>
							</div>';
	}else{
		echo '<div class="alert alert-danger alert-dismissible">
							  <button type="button" class="close" data-dismiss="alert">×</button>
							  <strong>All Fields Are Required!</strong>
							</div>';
	}
}
?>