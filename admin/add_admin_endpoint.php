<?php
	require '../condb.php';
	$fname = htmlspecialchars($_POST['fname']);
	$lname = htmlspecialchars($_POST['lname']);
	if (isset($_POST['mname'])) {
		$mname = htmlspecialchars($_POST['mname']);
	}else{
		$mname = 'NA';
	}
	if (isset($_POST['address'])) {
		$address = htmlspecialchars($_POST['address']);
	}else{
		$address = 'NA';
	}
	if (isset($_POST['gender'])) {
		$gender = htmlspecialchars($_POST['gender']);
	}else{
		$gender = 'NA';
	}
	if (isset($_POST['bday'])) {
		$bday = htmlspecialchars($_POST['bday']);
	}else{
		$bday = 'NA';
	}
	if (isset($_POST['picture'])) {
		$picture = htmlspecialchars($_POST['picture']);
	}else{
		$picture = '../assets/img/default.jpg';
	}
	if (isset($_POST['email'])) {
		$email = htmlspecialchars($_POST['email']);
	}else{
		$email = 'NA';
	}
	if (isset($_POST['phone_numer'])) {
		$phone = htmlspecialchars($_POST['phone_numer']);
	}else{
		$phone = 'NA';
	}
	if (isset($_POST['username'])) {
		$username = htmlspecialchars($_POST['username']);
	}else{
		$username = 'NA';
	}
	$password = sha1($_POST['password']);
	date_default_timezone_set('Asia/Manila');
	$create_date = date("F j, Y g:i a");
	$update_date = date("F j, Y g:i a");

	$sql = "INSERT INTO users (role_id, status_id, user_fname, user_lname, user_mname, user_address, user_gender, user_birthdate, user_picture, user_email, user_phone_number, username, password, create_date, update_date) VALUES ('1', '1', '$fname', '$lname', '$mname', '$address', '$gender', '$bday', '$picture', '$email', '$phone', '$username', '$password', '$create_date', '$update_date')";
	if(mysqli_query($conn, $sql)){
	echo "New Admin Added";
	}
	// header('location: add_admin.php')
?>