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
		}
		header('location: dashboard.php');
	}

?>