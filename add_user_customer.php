<?php
session_start();
	require 'condb.php';
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
		$picture = 'NA';
	}
	$email = htmlspecialchars($_POST['email']);
	$username = htmlspecialchars($_POST['username']);
	$password = sha1($_POST['password']);

	$sql = "INSERT INTO users (role_id, status_id, user_fname, user_lname, user_mname, user_address, user_gender, user_birthdate, user_picture, user_email, username, password) VALUES ('3', '1', '$fname', '$lname', '$mname', '$address', '$gender', '$bday', '$picture', '$email', '$username', '$password')";
	mysqli_query($conn, $sql) or die (mysqli_error($conn));
	$sql = "SELECT * FROM users WHERE username = '$username'";
	$results = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($results);
	$_SESSION['username'] = $username;
	$_SESSION['fname'] = $fname;
	$_SESSION['user_level'] = $user_level;
	$_SESSION['user_status'] = $row['user_status'];
	header('location: customer_dashboard.php');
?>