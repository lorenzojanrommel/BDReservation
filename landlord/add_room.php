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
						<h2>Room List</h2>
						</div>
						<div class="col-sm-1">
							<?php
							$sql2 = "SELECT room_id FROM rooms WHERE house_id = '$house_id'";
							$results2= mysqli_query($conn, $sql2);
							$count_room = mysqli_num_rows($results2);
							// Number of Room
							$nor = $house_number_room;
							if ($count_room < $nor) {
								?>

								<button class="btn btn-primary add-room-button" data-toggle="modal" data-target="#add_room_modal">Add Room</button>
								<?php
							}else{

							}
							?>
						</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="row">
								<?php
								$sql3 = "SELECT * FROM rooms WHERE house_id = '$house_id' ORDER BY room_id DESC";
								$results3 = mysqli_query($conn, $sql3);
								while ($row3 = mysqli_fetch_assoc($results3)) {
									extract($row3);
								?>
								<div class="col-sm-6">
								<div class="card border-primary mb-3">
								  <div class="card-header text-center">Room No. <?php echo $room_number?></div>
								  <div class="card-body">
								  	<div class="gallery-rooms">
								  		<div class="row">
								  			<div class="col-sm-6">
										  		<a href="<?php echo $room_pic_1 ?>" data-lightbox="mygallery"><img  class ="gallery-rooms-img img-fluid" src="<?php echo $room_pic_1 ?>"></a>
								  			</div>
					  			  			<div class="col-sm-6 mb-3">
					  					  		<a href="<?php echo $room_pic_2 ?>" data-lightbox="mygallery"><img  class ="gallery-rooms-img img-fluid" src="<?php echo $room_pic_2 ?>"></a>
					  			  			</div>

		  			  			  			<div class="col-sm-6">
		  			  					  		<a href="<?php echo $room_pic_3 ?>" data-lightbox="mygallery"><img  class ="gallery-rooms-img img-fluid" src="<?php echo $room_pic_3 ?>"></a>
		  			  			  			</div>
		  			  			  			<div class="col-sm-6">
		  			  					  		<a href="<?php echo $room_pic_4 ?>" data-lightbox="mygallery"><img  class ="gallery-rooms-img img-fluid" src="<?php echo $room_pic_4 ?>"></a>
		  			  			  			</div>
								  		</div>
								  	</div>
								  	<?php 
								  	if ($room_type = 1 ) {
								  		?>
								    	<p class="mt-2"><span class="room-type">Room Type:</span> Single Room</p>
								  		<?php
								  	}else{
								  		?>
								    	<p class="mt-2"><span class="room-type">Room Type:</span> Double Room</p>
								  		<?php
								  	}
								  	?>
								  	<p class="mt-1"><span class="room-price">Price: &#8369</span><?php echo $room_price ?> </p>
								  	<div class="row">
								  		<div class="col-sm-12 text-center">
								  		<button type="button" class="btn btn-outline-warning">Edit</button>
								  		</div>
								  	</div>
								  </div>
								</div>
								</div>
								<?php 
								};
								?>
								</div>
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

<script type="text/javascript">
	
</script>

