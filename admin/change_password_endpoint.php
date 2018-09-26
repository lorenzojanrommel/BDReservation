<?php
	if (isset($_POST['change_pass'])) {
	session_start();
	$id = $_SESSION['user_id'];
	require '../condb.php';
	$current_password = sha1($_POST['current_password']);
	$new_password = $_POST['new_password'];
	$confirm_password = $_POST['confirm_password'];
	$sql = "SELECT * FROM users WHERE id = '$id'";
	$results = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($results);
	extract($row);
	if ($current_password == $password) {
		if ($new_password == $confirm_password) {
			echo "Successfully Changed Password";
		}else{
			echo "New password and Confirm Password do not Match!";
		}
	}else{
		echo "Your Current password do not match with your real password.";
	}
	}
	


?>