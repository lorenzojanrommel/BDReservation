<?php
	session_start();
	require 'condb.php';
	if (file_exists($_FILES['poybhd']['tmp_name']) || is_uploaded_file($_FILES['poybhd']['tmp_name'])) {
		$target_dir1 = "assets/img/bhd_images/";

		if(move_uploaded_file($_FILES["poybhd"]["tmp_name"], $target_file1)){
		$target_file1 = $target_dir1.time().basename($_FILES["poybhd"]["name"]);
		}else{
			$target_file1 = print_r($_FILES['poybhd']);
		}
	}else{
		$no_image_uploaded = "assets/img/no_image_uploaded.png";
	}
	if(file_exists($_FILES['mpofbhd']['tmp_name']) || is_uploaded_file($_FILES['mpofbhd']['tmp_name'])){
		$target_dir2 = "assets/img/bhd_mayors_permit/";
		$target_file2 = $target_dir2 . basename($_FILES["mpofbhd"]["name"]);
		// move_uploaded_file($_FILES["mpofbhd"]["tmp_name"], $target_file2);
	}else{
		$no_image_uploaded = "assets/img/no_image_uploaded.png";
	}
	if (file_exists($_FILES['biroybhd']['tmp_name']) || is_uploaded_file($_FILES['biroybhd']['tmp_name'])) {
		$target_dir3 = "assets/img/bhd_bir_permit/";
		$target_file3 = $target_dir3 . basename($_FILES["biroybhd"]["name"]);
		// move_uploaded_file($_FILES["biroybhd"]["tmp_name"], $target_file3);
	}else{
		$no_image_uploaded = "assets/img/no_image_uploaded.png";
	}
	

	// Boarding house or dormitory name
	$bhd_name = htmlspecialchars($_POST['noybhd']);
	// Address of boarding hourse or dormitory
	$bhd_address = htmlspecialchars($_POST['aoybhd']);
	// PostCode of boarding house or dormitory
	$bhd_postcode = htmlspecialchars($_POST['pcoybhd']);
	// Phone number of boarding house or dormitory
	$bdh_pnumber = htmlspecialchars($_POST['pnoybhd']);
	// Image of boarding house or dormitory
	if(file_exists($_FILES['poybhd']['tmp_name']) || is_uploaded_file($_FILES['poybhd']['tmp_name'])){
		$bhd_image = $target_file1;
	}else{
		$bhd_image = $no_image_uploaded;
	}
	// Mayor's permit of boarding house or dormitory
	if (file_exists($_FILES['mpofbhd']['tmp_name']) || is_uploaded_file($_FILES['mpofbhd']['tmp_name'])) {
		$bhd_mp_image = $target_file2;
	}else{
		$bhd_mp_image = $no_image_uploaded;
	}
	// BIR permit of boarding house or dormitory
	if (file_exists($_FILES['biroybhd']['tmp_name']) || is_uploaded_file($_FILES['biroybhd']['tmp_name'])) {
		$bhd_bir_image = $target_file3;
	}else{
		$bhd_bir_image = $no_image_uploaded;
	}
	// Description of boarding house or dormitory
	$bhd_description = $_POST['bhddescription'];
	// user id of owner
	$user_id = $_SESSION['user_id'];


	$sql = "INSERT INTO facilities (user_id, faci_name, faci_address, faci_postcode, faci_phone_number, faci_picture, faci_mp, faci_birp, faci_description, faci_status) 
			VALUES ('$user_id' , '$bhd_name', '$bhd_address', '$bhd_postcode', '$bdh_pnumber', '$bhd_image', '$bhd_mp_image', '$bhd_bir_image', '$bhd_description', '3')";
	mysqli_query($conn, $sql) or die (mysqli_error($conn));
	header('location: owner_dashboard.php');
?>