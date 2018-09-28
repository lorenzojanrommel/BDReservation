<?php
	session_start();
	require '../condb.php';
	if (isset($_POST['category'])) {
	
	$check1 = getimagesize($_FILES["poybhd"]["tmp_name"]);
	$check4 = getimagesize($_FILES["blppoybhd"]["tmp_name"]);
	if ($check1 != false) {
		$target_dir1 = "assets/img/bhd_images/";
		$target_file1 = $target_dir1.time().basename($_FILES["poybhd"]["name"]);
		move_uploaded_file($_FILES["poybhd"]["tmp_name"], $target_file1);
	}else{
		$no_image_uploaded = "assets/img/no_image_uploaded.png";
		$target_file1 = $no_image_uploaded;
	}
	if ($check4 != false) {
		$target_dir4 = "assets/img/bhd_business_license_permit/";
		$target_file4 = $target_dir4 .time().basename($_FILES["blppoybhd"]["name"]);
		move_uploaded_file($_FILES["blppoybhd"]["tmp_name"], $target_file4);
	}else{
		$no_image_uploaded = "assets/img/no_image_uploaded.png";
		$target_file4 = $no_image_uploaded;
	}
	
	// Boarding house category
	$category = htmlspecialchars($_POST['category']);
	// Boarding house or dormitory name
	$bhd_name = htmlspecialchars($_POST['noybhd']);
	// Address of boarding hourse or dormitory
	$bhd_address = htmlspecialchars($_POST['aoybhd']);
	// Phone number of boarding house or dormitory
	$bdh_pnumber = htmlspecialchars($_POST['pnoybhd']);
	// Number of Rooms
	$bdh_number_room = htmlspecialchars($_POST['rnumber']);
	// Image of boarding house or dormitory
	$bhd_image = $target_file1;
	// Business License Permit
	$bhd_blp_image = $target_file4;
	// Description of boarding house or dormitory
	$bhd_description = $_POST['bhddescription'];
	// user id of owner
	$user_id = $_SESSION['user_id'];


	$sql = "INSERT INTO houses (user_id, house_category_id, house_name, house_address, house_phone_number, house_number_room, house_picture, house_blpp, house_description, house_status) 
			VALUES ('$user_id' , '$category' , '$bhd_name', '$bhd_address', '$bdh_pnumber', '$bdh_number_room', '$bhd_image', '$bhd_blp_image', '$bhd_description', '3')";
	mysqli_query($conn, $sql) or die (mysqli_error($conn));
	header('location: owner_dashboard.php?create=success');
}else{
	header('location: owner_dashboard.php?category=empty');
}
?>