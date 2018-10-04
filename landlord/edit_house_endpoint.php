<?php
	if (isset($_POST['edit_house'])) {
	session_start();
	require '../condb.php';
	$house_id = $_GET['house-id'];
	// $check1 = getimagesize($_FILES["poybhd"]["tmp_name"]);
	// $check2 = getimagesize($_FILES["blppoybhd"]["tmp_name"]);
	if(is_uploaded_file($_FILES['poybhd']['tmp_name'])) {
		$target_dir1 = "../assets/img/bhd_images/";
		$target_file1 = $target_dir1.time().basename($_FILES["poybhd"]["name"]);
		move_uploaded_file($_FILES["poybhd"]["tmp_name"], $target_file1);
	}else{
		$house_pic = "SELECT * FROM houses WHERE house_id = '$house_id'";
		$house_pic_results = mysqli_query($conn, $house_pic);
		$house_pic_row = mysqli_fetch_assoc($house_pic_results);
		extract($house_pic_row);
		$no_image_uploaded = $house_picture;
		$target_file1 = $no_image_uploaded;
	}
	if(is_uploaded_file($_FILES['blppoybhd']['tmp_name'])) {
		$target_dir2 = "../assets/img/bhd_business_license_permit/";
		$target_file2 = $target_dir2 .time().basename($_FILES["blppoybhd"]["name"]);
		move_uploaded_file($_FILES["blppoybhd"]["tmp_name"], $target_file2);
	}else{
		$house_blpp = "SELECT * FROM houses WHERE house_id = '$house_id'";
		$house_blpp_results = mysqli_query($conn, $house_blpp);
		$house_blpp_row = mysqli_fetch_assoc($house_blpp_results);
		extract($house_blpp_row);
		$no_image_uploaded = $house_blpp;
		$target_file2 = $no_image_uploaded;
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
	// Bussiness Plate Number 
	$bussiness_plate_no = htmlspecialchars($_POST['bussiness_place_no']);
	// Image of boarding house or dormitory
	$bhd_image = $target_file1;
	// Business License Permit
	$bhd_blp_image = $target_file2;
	// Description of boarding house or dormitory
	$bhd_description = $_POST['bhddescription'];
	// user id of owner
	$user_id = $_SESSION['user_id'];
	date_default_timezone_set('Asia/Manila');
	$updated_date = date("F j, Y g:i a");

	$sql = "UPDATE houses SET 
							house_category_id = '$category', 
							house_name = '$bhd_name', 
							house_address = '$bhd_address', 
							house_phone_number = '$bdh_pnumber', 
							house_number_room = '$bdh_number_room', 
							house_picture = '$bhd_image', 
							house_blpp = '$bhd_blp_image', 
							house_business_no = '$bussiness_plate_no', 
							house_description = '$bhd_description',
							updated_date = '$updated_date'
							WHERE house_id = $house_id";
	mysqli_query($conn, $sql) or die (mysqli_error($conn));
	header('Location: owner_dashboard.php?success=success');
	}else{
		function display_title(){
			echo "Boarding House & Dormitories Finder";
		}
		function display_content(){
			?>
			<div class="container p-5 room_msg_error">
				<div class="row">
					<div class="col-sm-12">
						<h4 class="text-center">Unauthorized Web Page</h4>
						<p class="text-center"><a href="owner_dashboard.php"><button class="btn btn-outline-warning">Go back!</button></a></p>
					</div>
				</div>
			</div>
			<?php

		}
		require "../template.php";
	}
?>