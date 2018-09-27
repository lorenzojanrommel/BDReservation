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
		if ($new_password == $confirm_password && $new_password != NULL && $confirm_password != NULL) {
			date_default_timezone_set('Asia/Manila');
			$update_date = date("F j, Y g:i a");
			$pass = "UPDATE users SET password = '$new_password',
									  update_date = '$update_date'
									  WHERE id = '$id'";
			mysqli_query($conn, $pass) or die (mysqli_error($conn));
			echo "Successfully Changed Password";
		}else if($new_password == NULL && $confirm_password == NULL){
			echo "New password and Confirm Password is empty";
		}else{
			echo "New password and Confirm Password do not Match!";
		}
	}else{
		echo "Your Current password do not match with your real password.";
	}
	}
	


?>