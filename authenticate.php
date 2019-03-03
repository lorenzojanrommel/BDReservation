<?php
	session_start();
	require 'condb.php';
	if (isset($_SESSION['redirect'])) {
	$url = $_SESSION['redirect'];
	}
	// echo $url;
	if(isset($_POST['login'])){
		$username = htmlspecialchars($_POST['username']);
		$password = sha1($_POST['password']);
		// $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
		$sql = "SELECT * FROM users WHERE username = '$username'";
		$results = mysqli_query($conn, $sql);
		if (mysqli_num_rows($results)> 0) {
			$user = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
			$user_results = mysqli_query($conn, $user);
			if (mysqli_num_rows($user_results)>0) {
				$row = mysqli_fetch_assoc($user_results);
				// extract($row);
				$_SESSION['username'] = $username;
				$_SESSION['fname'] = $row['user_fname'];
				$_SESSION['user_status'] = $row['status_id'];
				$_SESSION['user_level'] = $row['role_id'];
				$_SESSION['user_id'] = $row['id'];
				$_SESSION['login'] = TRUE;
			
			if ($_SESSION['user_level'] == 1) {
				header('Location: admin/dashboard.php');
				exit();
			}elseif($_SESSION['user_level'] == 2){
				header('Location: landlord/owner_dashboard.php');
				exit();
			}elseif($_SESSION['user_level'] == 3){
				if (isset($url)) {
					if (isset($_SESSION['login'])) {
					// echo $url;
					header('Location: '.$url.'');
					}
				}else{
					// echo "Hello";
				header('Location: customer/customer_dashboard.php');
				exit();
				}
			}
			}else{
				header('Location: login.php?password=not_match');
			}
		}else{
			header('Location: login.php?user=not_found');
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
	}elseif(isset($_POST['phone_ver'])){
			$phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
			if (empty($phone_number)) {
				echo "empty";
			}else{
				$sql = "SELECT * FROM users WHERE user_phone_number = '$phone_number'";
				$results = mysqli_query($conn, $sql);
				if (mysqli_num_rows($results)>0) {
					echo "phone_number_exist";
				}elseif(!preg_match("/^(09|\+639)\d{9}$/", $phone_number)){
					echo "invalid_format";
				}else{
					echo "phone_available";
				}
			}

	}else{
		header('Location: index.php');
		exit();
	}

?>