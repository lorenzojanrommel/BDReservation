<?php
	$id = $_GET['id'];
	$room_id = $_GET['room_id'];
	require '../condb.php';
	if(isset($_POST['delete_image'])){
		$sql = "SELECT * FROM room_imgs WHERE img_id = '$id'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		extract($row);
		unlink($img_name);
		$sql = "DELETE FROM room_imgs WHERE img_id = '$id'";
		mysqli_query($conn, $sql) or die(mysqli_error($conn));
		header('location: edit_room.php?id='.$room_id);
	}else{
		require('location: add_room.php.php');
	}
?>
