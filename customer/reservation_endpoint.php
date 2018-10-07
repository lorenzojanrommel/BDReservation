<?php
	// if (isset($_POST['proceed_reservation'])) {
	require '../condb.php';
	session_start();
	date_default_timezone_set('Asia/Manila');
	$room_id = $_GET['id'];
	$owner_id = $_POST['owner'];
	$customer_id = $_SESSION['user_id'];
	$price = htmlspecialchars($_POST['room-price']);
	// $room_number = htmlspecialchars($_POST['room-number']);
	$status = 3;
	$date = date("F j, Y g:i a");
	// echo $room_price;
	$sql = "INSERT INTO reservations (customer_id, owner_id, room_id, reservation_status, room_price, day, update_reserve_date , reserve_date)
			VALUES ('$customer_id', '$owner_id', '$room_id', '$status', '$price', '3', '$date', '$date')";
	mysqli_query($conn, $sql) or die (mysqli_error($conn));
	header('location: reservation_successfully.php');

	// }else{
	// 	header('location: not_authorized.php');
	// }
?>