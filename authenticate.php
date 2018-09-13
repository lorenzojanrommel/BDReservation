<?php
	session_start();
	require 'condb.php';
	if(isset($_POST['login'])){
		$username = htmlspecialchars($_POST['username']);
		$password = sha1($_POST['password']);
		$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
		$results = mysqli_query($conn, $sql);
		if (mysqli_num_rows($results)> 0) {
			$row = mysqli_fetch_assoc($results);
			// extract($row);
			$_SESSION['username'] = $username;
			$_SESSION['fname'] = $row['user_fname'];
			$_SESSION['user_status'] = $row['status_id'];
			$_SESSION['user_level'] = $row['role_id'];
			$_SESSION['user_id'] = $row['id'];
		}
		if ($_SESSION['user_level'] == 1) {
			header('Location: admin/dashboard.php');
			exit();
		}elseif($_SESSION['user_level'] == 2){
			header('Location: landlord/owner_dashboard.php');
			exit();
		}elseif($_SESSION['user_level'] == 3){
			header('Location: customer/customer_dashboard.php');
			exit();
		}
	}elseif(isset($_POST['register'])){
			$username = htmlspecialchars($_POST['username']);
			if (empty($username)) {
				echo "empty";
			}else{
			$sql = "SELECT * FROM users WHERE username = '$username'";
			$results = mysqli_query($conn, $sql);
			if (mysqli_num_rows($results)>0) {
				echo "invalid";
			}else{
				echo "valid";
			}
			}
	}elseif(isset($_POST['email_ver'])){
			$email = htmlspecialchars($_POST['email']);
			if (empty($email)) {
				echo "is";
			}else{
			$sql = "SELECT * FROM users WHERE user_email = '$email'";
			$results = mysqli_query($conn, $sql);
			if (mysqli_num_rows($results)>0) {
				echo "email_exist";
			}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				echo "invalid_format";
			}else{
				echo "email_available";
			}
			}
	}else{
		header('Location: index.php');
		exit();
	}

?>