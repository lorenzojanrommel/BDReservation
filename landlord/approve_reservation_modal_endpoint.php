<?php
	$id = $_GET['id'];
	require '../condb.php';
	$update_availability = "SELECT * FROM rooms JOIN reservations ON (rooms.room_id = reservations.room_id) WHERE reservation_id = '$id'";
	$update_results = mysqli_query($conn, $update_availability);
	$update_row = mysqli_fetch_assoc($update_results);
	extract($update_row);
	$customer_no = $room_customer_no+1;
	date_default_timezone_set('Asia/Manila');
	if(isset($_POST['approve_reservation_submit'])){
		// $house_status = mysqli_real_escape_string($conn, '4');
		$date = date("F j, Y g:i a");
		$sql = "UPDATE reservations SET 
								reservation_status = '4',
								update_reserve_date = '$date'
								WHERE reservation_id = '$id'";
		$sql1 = "UPDATE rooms SET 
								room_customer_no = '$customer_no',
								update_date = '$date'
								WHERE room_id = '$room_id'";
		mysqli_query($conn, $sql) or die(mysqli_error($conn));
		mysqli_query($conn, $sql1) or die(mysqli_error($conn));
		header('location: booking.php');
	}else{
		require('location: booking.php');
	}
?>