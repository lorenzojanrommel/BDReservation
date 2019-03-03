<?php
	
	session_start();
	require '../condb.php';
	// House ID
	$house_id = htmlspecialchars($_POST['house-id']);
	// Room Type
	if (isset($_POST['room-type'])) {
	$room_type = htmlspecialchars($_POST['room-type']);
	}else{
		// header('location: add_room.php');
		header('location: room_type_error_msg.php');
		exit();
	}
	// Room Number
	$room_number = htmlspecialchars($_POST['room-number']);
	// Room Price
	$room_price = htmlspecialchars($_POST['price']);
	// Availability
	$room_avail = htmlspecialchars($_POST['availability']);
	
	date_default_timezone_set('Asia/Manila');
	$created_date = date("F j, Y g:i a");
	$updated_date = date("F j, Y g:i a");

	$sql = "INSERT INTO rooms (house_id, room_type, room_number, room_price, room_customer_no, availability, updated_date, created_date) VALUES ('$house_id', '$room_type', '$room_number', '$room_price', '0', '$room_avail', '$updated_date', '$created_date')";
	mysqli_query($conn, $sql) or die (mysqli_error($conn));
	// var_dump(mysqli_error);
	header('location: add_room.php');
	

?>