<?php
	//##########################################################################
	// ITEXMO SEND SMS API - PHP - CURL-LESS METHOD
	// Visit www.itexmo.com/developers.php for more info about this API
	//##########################################################################
	function itexmo($number,$message,$apicode){
	$url = 'https://www.itexmo.com/php_api/api.php';
	$itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
	$param = array(
	    'http' => array(
	        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
	        'method'  => 'POST',
	        'content' => http_build_query($itexmo),
	    ),
	);
	$context  = stream_context_create($param);
	return file_get_contents($url, false, $context);}
	//##########################################################################
	if (isset($_POST['category'])) {
	session_start();
	require '../condb.php';
	// $check1 = getimagesize($_FILES["poybhd"]["tmp_name"]);
	// $check2 = getimagesize($_FILES["blppoybhd"]["tmp_name"]);
	if(is_uploaded_file($_FILES['poybhd']['tmp_name'])) {
		$target_dir1 = "../assets/img/bhd_images/";
		$target_file1 = $target_dir1.time().basename($_FILES["poybhd"]["name"]);
		move_uploaded_file($_FILES["poybhd"]["tmp_name"], $target_file1);
	}else{
		$no_image_uploaded = "assets/img/no_image_uploaded.png";
		$target_file1 = $no_image_uploaded;
	}
	if(is_uploaded_file($_FILES['blppoybhd']['tmp_name'])) {
		$target_dir2 = "../assets/img/bhd_business_license_permit/";
		$target_file2 = $target_dir2 .time().basename($_FILES["blppoybhd"]["name"]);
		move_uploaded_file($_FILES["blppoybhd"]["tmp_name"], $target_file2);
	}else{
		$no_image_uploaded = "assets/img/no_image_uploaded.png";
		$target_file2 = $no_image_uploaded;
	}
	
	// Boarding house category
	$category = mysqli_real_escape_string($conn, $_POST['category']);
	// Boarding house or dormitory name
	$bhd_name = mysqli_real_escape_string($conn, $_POST['noybhd']);
	// Address of boarding hourse or dormitory
	$bhd_address = mysqli_real_escape_string($conn, $_POST['aoybhd']);
	// Phone number of boarding house or dormitory
	$bdh_pnumber = mysqli_real_escape_string($conn, $_POST['pnoybhd']);
	// Number of Rooms
	$bdh_number_room = mysqli_real_escape_string($conn, $_POST['rnumber']);
	// Bussiness Plate Number 
	$bussiness_plate_no = mysqli_real_escape_string($conn, $_POST['bussiness_place_no']);
	// Image of boarding house or dormitory
	$bhd_image = $target_file1;
	// Business License Permit
	$bhd_blp_image = $target_file2;
	// Description of boarding house or dormitory
	$bhd_description = mysqli_real_escape_string($conn, $_POST['bhddescription']);
	// user id of owner
	$user_id = $_SESSION['user_id'];
	date_default_timezone_set('Asia/Manila');
	$created_date = date("F j, Y g:i a");
	$updated_date = date("F j, Y g:i a");
	// SMS
	$msg = "Review the new house rental ".$bhd_name;
	$api = "TR-BOARD850790_37BNJ";
	$result = itexmo("09981850790",$msg, $api);
	if ($result == ""){
	echo "iTexMo: No response from server!!!
	Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.	
	Please CONTACT US for help. ";	
	}else if ($result == 0){
	echo "Message Sent!";
	}
	else{	
	echo "Error Num ". $result . " was encountered!";
	}
	// End of SMS

	$sql = "INSERT INTO houses (user_id, house_category_id, house_name, house_address, house_phone_number, house_number_room, house_picture, house_blpp, house_business_no, house_description, house_status, updated_date, created_date) 
			VALUES ('$user_id' , '$category' , '$bhd_name', '$bhd_address', '$bdh_pnumber', '$bdh_number_room', '$bhd_image', '$bhd_blp_image', '$bussiness_plate_no', '$bhd_description', '3', '$updated_date', '$created_date')";
	// echo $sql;
	mysqli_query($conn, $sql) or die (mysqli_error($conn));
	header('location: owner_dashboard.php?create=success');
}else{
	header('location: owner_dashboard.php?category=empty');
}
?>