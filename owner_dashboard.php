<?php
	function display_title(){
		echo "Boarding House & Dormitories Finder";
	}
	function display_content(){
		require 'condb.php';
		$username = $_SESSION['username'];
		$sql = "SELECT * FROM users WHERE username = '$username'";
		$results = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($results);
		extract($row);
		$user_id = $id;
		$sql1 = "SELECT * FROM facilities WHERE user_id = '$user_id'";
		$results = mysqli_query($conn, $sql1);
		if (mysqli_num_rows($results) > 0 ) {
			?>
				<div class="container">
					<p>Welcome to your boarding house</p>
				</div>
			<?php
		}else{
			?>
			<div class="container">
				<p>Create your boarding House Here</p>
			</div>
			<?php
		}
	}
	require 'template.php';

?>