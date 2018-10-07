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
						<div class="col-sm-11 col-md-10">
						<h2>Room List</h2>
						</div>
						<div class="col-sm-1 col-md-2 text-md-left">
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
						<?php
						ob_start();
						$full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
						if (strpos($full_url, "success=success") == true) {
							?>
							<div class="alert alert-dismissible alert-success text-center" id="success_message">
 			        	 	<button type="button" class="close" data-dismiss="alert">&times;</button>
 			        	 	<span>Sucessfully Updated!</span>
 			        		</div>
							<?php
						}
						?>
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
							  			<div class="col-sm-6 room-picture">
									  		<a href="../<?php echo substr($room_pic_1, 3); ?>" data-lightbox="mygallery"><img  class ="gallery-rooms-img img-fluid" src="../<?php echo substr($room_pic_1, 3)?>"></a>
							  			</div>
				  			  			<div class="col-sm-6 mb-3 room-picture">
				  					  		<a href="../<?php echo substr($room_pic_2, 3); ?>" data-lightbox="mygallery"><img  class ="gallery-rooms-img img-fluid" src="../<?php echo substr($room_pic_2, 3); ?>"></a>
				  			  			</div>

					  			  			<div class="col-sm-6 room-picture">
					  					  		<a href="../<?php echo substr($room_pic_3, 3) ?>" data-lightbox="mygallery"><img  class ="gallery-rooms-img img-fluid" src="../<?php echo substr($room_pic_3, 3) ?>"></a>
					  			  			</div>
					  			  			<div class="col-sm-6 room-picture">
					  					  		<a href="../<?php echo substr($room_pic_4, 3) ?>" data-lightbox="mygallery"><img  class ="gallery-rooms-img img-fluid" src="../<?php echo substr($room_pic_4, 3) ?>"></a>
					  			  			</div>
							  			</div>
							  		</div>
								  	<?php 
								  	if ($room_type == '1' ) {
								  		?>
								    	<p class="mt-2"><span class="room-type">Room Type:</span> Male Only</p>
								  		<?php
								  	}elseif($room_type == '2'){
								  		?>
								    	<p class="mt-2"><span class="room-type">Room Type:</span> Female Only </p>
								  		<?php
								  	}
								  	?>
								  	<p><span class="room-price">Price: &#8369</span><?php echo number_format($room_price); ?> </p>
								  	<p><span class="room-availability">Availability: </span><span><?php echo $room_customer_no;?></span><span>/</span><?php echo $availability; ?> </p>
								  	<div class="row">
								  		<div class="col-sm-12 text-center">
								  			<form method="POST" action="edit_room.php?id=<?php echo $room_id; ?>">
								  				<button type="submit" class="btn btn-outline-warning">Edit</button>
								  			</form>
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
	$(document).ready(function()
	{
	$('.modal').on('hidden.bs.modal', function(e)
	{ 
	    $(this).removeData();
	}) ;
	});
</script>

