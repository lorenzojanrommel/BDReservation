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
		}
		header('Location: dashboard.php');
	}elseif(isset($_POST['register'])){
			$username = htmlspecialchars($_POST['username']);
			$sql = "SELECT * FROM users WHERE username = '$username'";
			$results = mysqli_query($conn, $sql);
			if (mysqli_num_rows($results)>0) {
				echo "invalid";
			}else{
				echo "valid";
			}
	}else{
		header('Location: index.php');
		if (isset($_POST['username'])) {
			$username = htmlspecialchars($_POST['username']);
			if (strlen($username) > 0) {
				$sql = "SELECT * FROM users WHERE username = '$username'";
				$results = mysqli_query($conn, $sql);
				if (mysqli_num_rows($results)>0) {
					echo "invalid";
					exit();
				}elseif(mysqli_num_rows($results) == 0){
					echo "valid";
					exit();
				}
				exit();
			}elseif (strlen($username) == 0){
				echo "empty";
				exit();
			}
			exit();
		}elseif(isset($_POST['email'])){
			$email = htmlspecialchars($_POST['email']);
			if (strlen($email) > 0 ) {
				// Check if email is valid
				if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$sql = "SELECT * FROM users WHERE user_email = '$email'";
					$results = mysqli_query($conn, $sql);
					if (mysqli_num_rows($results) > 0) {
						echo "validate_email_not_available";
						exit();
					}elseif(mysqli_num_rows($results) == 0){
						echo "validate_email_available";
					}
					exit();
				}else{
					echo "validate_invalid";
				}
				exit();
			}elseif(strlen($email) == 0){
				echo "is";
				exit();
			}
			exit();
		}
	}else{
		header('Location: index.php');
		exit();
	}

?>