<?php
	$id = $_GET['id'];
	require '../condb.php';
	if(isset($_POST['delete_customer'])){
		$sql = "DELETE FROM reservations WHERE reservation_id = '$id'";
		mysqli_query($conn, $sql) or die(mysqli_error($conn));
		header('location: owner_customer_list.php');
	}else{
		require('location: owner_customer_list.php');
	}
?>