<?php
	function display_title(){
		echo "Boarding House & Dormitories Finder";
	}
	function display_content(){
		require '../condb.php';
		// session_start();
		$user_id = $_SESSION['user_id'];
		$sql = "SELECT * FROM `houses` JOIN users ON (users.id = houses.user_id) WHERE id = '$user_id'";
		$results = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($results);
		extract($row);
		?>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="add-room-container mt-2">
						<div class="row">
						<div class="col-sm-11">
						<h3> Rooms</h3>
						</div>
						<div class="col-sm-1">
							<?php
							// Number of Room
							$nor = $house_number_room;
							$x = 1;
							if ($x <= $nor) {
								?>
								<button class="btn btn-primary add-room-button" data-toggle="modal" data-target="#add_room_modal">Add Room</button>
								<?php
							}
							?>
						</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<h2>Room List</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php

	}
	require "../template.php";
	require "add_room_modal.php";
?>

