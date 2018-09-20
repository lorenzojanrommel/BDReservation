<?php
	function display_title(){
		echo "Boarding House & Dormitories Finder || Rooms";
	}
	function display_content(){
		require 'condb.php';
		$id = $_GET['id'];
		?>
		<div class="container">
		<a href="houses.php" class="btn btn-outline-info mt-5 mb-3">Go Back</a>
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
				<?php
				$sql3 = "SELECT * FROM rooms WHERE house_id = '$id' ORDER BY room_id DESC";
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
						  		<a href="<?php echo substr($room_pic_1, 3); ?>" data-lightbox="mygallery"><img  class ="gallery-rooms-img img-fluid" src="<?php echo substr($room_pic_1, 3)?>"></a>
				  			</div>
	  			  			<div class="col-sm-6 mb-3">
	  					  		<a href="<?php echo substr($room_pic_2, 3); ?>" data-lightbox="mygallery"><img  class ="gallery-rooms-img img-fluid" src="<?php echo substr($room_pic_2, 3); ?>"></a>
	  			  			</div>

		  			  			<div class="col-sm-6">
		  					  		<a href="<?php echo substr($room_pic_2, 3) ?>" data-lightbox="mygallery"><img  class ="gallery-rooms-img img-fluid" src="<?php echo substr($room_pic_2, 3) ?>"></a>
		  			  			</div>
		  			  			<div class="col-sm-6">
		  					  		<a href="<?php echo substr($room_pic_2, 3) ?>" data-lightbox="mygallery"><img  class ="gallery-rooms-img img-fluid" src="<?php echo substr($room_pic_2, 3) ?>"></a>
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
				  	<p class="mt-1"><span class="room-price">Price: &#8369</span><?php echo number_format($room_price) ?> </p>
				  	<p class="mt-1"><span class="room-price">Availability: </span><?php echo $availability ?> </p>
				  	<div class="row">
				  		<div class="col-sm-12 text-center">
				  		<a class="btn btn-outline-warning" name="goToreservation" href="login.php">Reserve</a>
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
		<?php
	}
	require 'template.php';

?>