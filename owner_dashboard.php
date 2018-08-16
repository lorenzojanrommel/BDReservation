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
		$sql1 = "SELECT * FROM houses WHERE user_id = '$user_id'";
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
				<div class="container-cybod m-5 p-5">
					<h3 class="cybod pt-5 pl-5 pr-5 text-center">Create Your Boarding House/Dormitory</h3>
					<div class="button-click text-center">
						<button type="button" class="btn btn-outline-warning c-button" data-toggle="modal" data-target="#create_bhod">Click Here</button>
					</div>
				</div>
			</div>
			<?php
		}
	}
	require 'template.php';
	require 'create_bhod_modal.php';

?>