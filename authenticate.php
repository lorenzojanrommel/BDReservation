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
			header('Location: dashboard.php');
			exit();
		}elseif($_SESSION['user_level'] == 2){
			header('Location: owner_dashboard.php');
			exit();
		}elseif($_SESSION['user_level'] == 3){
			header('Location: customer_dashboard.php');
			exit();
		}
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
		exit();
	}

?>