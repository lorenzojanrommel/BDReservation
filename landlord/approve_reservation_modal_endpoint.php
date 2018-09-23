<?php
	$id = $_GET['id'];
	require '../condb.php';

	$update_availability = "SELECT * FROM rooms WHERE room_id = '$id'";
	$results = mysqli_query($conn, $update_availability);
	
	date_default_timezone_set('Asia/Manila');
	if(isset($_POST['approve_reservation_submit'])){
		// $house_status = mysqli_real_escape_string($conn, '4');
		$date = date("F j, Y g:i a");
		$sql = "UPDATE reservations SET 
								reservation_status = '4',
								update_reserve_date = '$date'
								WHERE reservation_id = '$id'";
		mysqli_query($conn, $sql) or die(mysqli_error($conn));
		// header('location: booking.php');
	}else{
		require('location: booking.php');
	}
?>