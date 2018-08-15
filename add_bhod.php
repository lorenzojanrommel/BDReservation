<?php
	session_start();
	require 'condb.php';
	$check1 = getimagesize($_FILES["poybhd"]["tmp_name"]);
	$check2 = getimagesize($_FILES["mpofbhd"]["tmp_name"]);
	$check3 = getimagesize($_FILES["biroybhd"]["tmp_name"]);
	if ($check1 != false) {
		$target_dir1 = "assets/img/bhd_images/";
		$target_file1 = $target_dir1.time().basename($_FILES["poybhd"]["name"]);
		move_uploaded_file($_FILES["poybhd"]["tmp_name"], $target_file1);
		// if(move_uploaded_file($_FILES["poybhd"]["tmp_name"], $target_file1)){
		// $target_file1 = $target_dir1.time().basename($_FILES["poybhd"]["name"]);
		// }else{
		// 	$target_file1 = print_r($_FILES['poybhd']);
		// }
	}else{
		$no_image_uploaded = "assets/img/no_image_uploaded.png";
		$target_file1 = $no_image_uploaded;
	}
	if($check2 != false){
		$target_dir2 = "assets/img/bhd_mayors_permit/";
		$target_file2 = $target_dir2 . basename($_FILES["mpofbhd"]["name"]);
		move_uploaded_file($_FILES["mpofbhd"]["tmp_name"], $target_file2);
	}else{
		$no_image_uploaded = "assets/img/no_image_uploaded.png";
		$target_file2 = $no_image_uploaded;
	}
	if ($check3 != false) {
		$target_dir3 = "assets/img/bhd_bir_permit/";
		$target_file3 = $target_dir3 . basename($_FILES["biroybhd"]["name"]);
		move_uploaded_file($_FILES["biroybhd"]["tmp_name"], $target_file3);
	}else{
		$no_image_uploaded = "assets/img/no_image_uploaded.png";
		$target_file3 = $no_image_uploaded;
	}
	
	// Boarding house category
	$category = htmlspecialchars($_POST['category']);
	// Boarding house or dormitory name
	$bhd_name = htmlspecialchars($_POST['noybhd']);
	// Address of boarding hourse or dormitory
	$bhd_address = htmlspecialchars($_POST['aoybhd']);
	// PostCode of boarding house or dormitory
	$bhd_postcode = htmlspecialchars($_POST['pcoybhd']);
	// Phone number of boarding house or dormitory
	$bdh_pnumber = htmlspecialchars($_POST['pnoybhd']);
	// Image of boarding house or dormitory
	$bhd_image = $target_file1;
	// Mayor's permit of boarding house or dormitory
	$bhd_mp_image = $target_file2;
	// BIR permit of boarding house or dormitory
	$bhd_bir_image = $target_file3;
	// Description of boarding house or dormitory
	$bhd_description = $_POST['bhddescription'];
	// user id of owner
	$user_id = $_SESSION['user_id'];


	$sql = "INSERT INTO houses (user_id, house_category_id, faci_name, faci_address, faci_postcode, faci_phone_number, faci_picture, faci_mp, faci_birp, faci_description, faci_status) 
			VALUES ('$user_id' , '$category' , '$bhd_name', '$bhd_address', '$bhd_postcode', '$bdh_pnumber', '$bhd_image', '$bhd_mp_image', '$bhd_bir_image', '$bhd_description', '3')";
	mysqli_query($conn, $sql) or die (mysqli_error($conn));
	header('location: owner_dashboard.php');
?>