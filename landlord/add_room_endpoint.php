<?php
	session_start();
	require '../condb.php';
	$check1 = getimagesize($_FILES["room-pic-1"]["tmp_name"]);
	$check2 = getimagesize($_FILES["room-pic-2"]["tmp_name"]);
	$check3 = getimagesize($_FILES["room-pic-3"]["tmp_name"]);
	$check4 = getimagesize($_FILES["room-pic-4"]["tmp_name"]);
	if($check1 != false) {
		$target_dir1 = "../assets/img/rooms/";
		$target_file1 = $target_dir1.time().basename($_FILES["room-pic-1"]["name"]);
		move_uploaded_file($_FILES["room-pic-1"]["tmp_name"], $target_file1);
	}else{
		$no_image_uploaded = "../assets/img/noimage.png";
		$target_file1 = $no_image_uploaded;
	}
	if($check2 != false) {
		$target_dir2 = "../assets/img/rooms/";
		$target_file2 = $target_dir2.time().basename($_FILES["room-pic-2"]["name"]);
		move_uploaded_file($_FILES["room-pic-2"]["tmp_name"], $target_file1);
	}else{
		$no_image_uploaded = "../assets/img/noimage.png";
		$target_file2 = $no_image_uploaded;
	}
	if($check3 != false) {
		$target_dir3 = "../assets/img/rooms/";
		$target_file3 = $target_dir3.time().basename($_FILES["room-pic-3"]["name"]);
		move_uploaded_file($_FILES["room-pic-3"]["tmp_name"], $target_file3);
	}else{
		$no_image_uploaded = "../assets/img/noimage.png";
		$target_file3 = $no_image_uploaded;
	}
	if($check4 != false) {
		$target_dir4 = "../assets/img/rooms/";
		$target_file4 = $target_dir4.time().basename($_FILES["room-pic-4"]["name"]);
		move_uploaded_file($_FILES["room-pic-4"]["tmp_name"], $target_file4);
	}else{
		$no_image_uploaded = "../assets/img/noimage.png";
		$target_file4 = $no_image_uploaded;
	}

	// House ID
	$house_id = htmlspecialchars($_POST['house-id']);
	// Room Type
	$room_type = htmlspecialchars($_POST['room-type']);
	// Room Number
	$room_number = htmlspecialchars($_POST['room-number']);
	// Room Price
	$room_price = htmlspecialchars($_POST['price']);
	// Availability
	$room_avail = htmlspecialchars($_POST['availability']);
	// Room Pic 1
	$room_pic1 = $target_file1;
	// Room Pic 2
	$room_pic2 = $target_file2;
	// Room Pic 3
	$room_pic3 = $target_file3;
	// Room Pic 4
	$room_pic4 = $target_file4;

	$sql = "INSERT INTO rooms (house_id, room_type, room_number, room_price, availability, room_pic_1, room_pic_2, room_pic_3, room_pic_4) VALUES ('$house_id', '$room_type', '$room_number', '$room_price', '$room_avail', '$room_pic1', '$room_pic2', '$room_pic3', '$room_pic4')";
	mysqli_query($conn, $sql) or die (mysqli_error($conn));
	header('location: add_room.php');
?>