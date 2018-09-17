<?php
	function display_title(){
		echo "Boarding House & Dormitories Finder";
	}
	function display_content(){
		?>
		<div class="container p-5 room_msg_error">
			<div class="row">
				<div class="col-sm-12">
					<h4 class="text-center">INSERT ROOM TYPE</h4>
					<p class="text-center"><a href="add_room.php"><button class="btn btn-outline-warning">Go back!</button></a></p>
				</div>
			</div>
		</div>
		<?php

	}
	require "../template.php";
?>

