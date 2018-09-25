<?php
	$id = $_GET['id'];
	require '../condb.php';
	if(isset($_POST['approve_submit'])){
		// $house_status = mysqli_real_escape_string($conn, '4');
		$sql = "UPDATE houses SET 
								house_status = '4' 
								WHERE house_id = '$id'";
		mysqli_query($conn, $sql) or die(mysqli_error($conn));
		header('location: house.php');
	}

?>