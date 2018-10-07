<?php
	$id = $_GET['id'];
	require '../condb.php';
	date_default_timezone_set('Asia/Manila');
	if(isset($_POST['edit_day_customer'])){
		$day_left = htmlspecialchars($_POST['day-left']);
		// $house_status = mysqli_real_escape_string($conn, '4');
		$date = date("F j, Y g:i a");
		$sql = "UPDATE reservations SET 
								day = '$day_left',
								update_reserve_date = '$date'
								WHERE reservation_id = '$id'";
		mysqli_query($conn, $sql) or die(mysqli_error($conn));
		header('location: owner_customer_list.php');
	}else{
		require('location: owner_customer_list.php');
	}
?>