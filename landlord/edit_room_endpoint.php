<?php
if (isset($_POST['edit_room_button'])) {
	$room_id = $_GET['id'];
	require '../condb.php';
	foreach($_FILES["room-pic"]["tmp_name"] as $key=>$tmp_name){
	    $temp = $_FILES["room-pic"]["tmp_name"][$key];
	    $name = $_FILES["room-pic"]["name"][$key];
		if($temp != ""){
	    $target_dir = "../assets/img/rooms/";
		$target_file[$key] = $target_dir.time().basename($name);
		// $file_name = time().basename($name);
	    move_uploaded_file($temp, $target_file[$key]);
	    $room_pic = $target_file[$key];
	    date_default_timezone_set('Asia/Manila');
		$created_date = date("F j, Y g:i a");
		$updated_date = date("F j, Y g:i a");

	    $sql = "INSERT INTO room_imgs (room_id, img_name, created_date, updated_date) VALUES ('$room_id', '$room_pic', '$created_date', '$updated_date')";
	    mysqli_query($conn, $sql) or die (mysqli_error($conn));
		}
	}
	// Room Type
	$room_type = mysqli_real_escape_string($conn, $_POST['room-type']);
	// Room Number
	$room_number = mysqli_real_escape_string($conn, $_POST['room-number']);
	// Room Price
	$room_price = mysqli_real_escape_string($conn, $_POST['price']);
	// Room Customer Number
	$room_customer_no = mysqli_real_escape_string($conn, $_POST['number_customer']);
	// Availability
	$room_avail = mysqli_real_escape_string($conn, $_POST['availability']);
	date_default_timezone_set('Asia/Manila');
	$updated_date = date("F j, Y g:i a");

	$sql = "UPDATE rooms SET 
							room_type = '$room_type',
							room_number = '$room_number',
							room_price = '$room_price',
							room_customer_no = '$room_customer_no',
							availability = '$room_avail',
							updated_date = '$updated_date'
							WHERE room_id = $room_id";
	// echo $sql;
	mysqli_query($conn, $sql) or die (mysqli_error($conn));
	header('Location: add_room.php?success=success');
}
?>