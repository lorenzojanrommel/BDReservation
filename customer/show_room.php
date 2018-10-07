<?php
	function display_title(){
		echo "Boarding House & Dormitories Finder || Rooms";
	}
	function display_content(){
		require '../condb.php';
		$id = $_GET['id'];
		?>
		<div class="container">
		<a href="house.php?id=<?php echo $id?>" class="btn btn-outline-info mt-5 mb-3">Go Back</a>
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
				  	if ($room_type = 1 ) {
				  		?>
				    	<p class="mt-2"><span class="room-type">Room Type:</span> Male Room</p>
				  		<?php
				  	}else{
				  		?>
				    	<p class="mt-2"><span class="room-type">Room Type:</span> Female Room</p>
				  		<?php
				  	}
				  	?>
				  	<p class="mt-1"><span class="room-price">Price: &#8369</span><?php echo $room_price ?> </p>
				  	<p><span class="room-availability">Availability: </span><span><?php echo $room_customer_no;?></span><span>/</span><?php echo $availability; ?> </p>
				  	<div class="row">
				  		<div class="col-sm-12 text-center">
				  			<?php
				  			$customer_id = $_SESSION['user_id'];
				  			if ($availability > $room_customer_no) {
				  				$check_reservation_room_no = "SELECT * FROM reservations WHERE customer_id ='$customer_id' AND room_id = '$room_id' AND reservation_status = '3'";
				  				$results_check = mysqli_query($conn, $check_reservation_room_no);
				  				if (mysqli_num_rows($results_check) >= 1) {
				  					$reserve = "SELECT * FROM reservations WHERE customer_id = '$customer_id' AND reservation_status = '4'";
				  					$reserve_results = mysqli_query($conn, $reserve);
				  					$reserve_row = mysqli_num_rows($reserve_results);
				  					if ($reserve_row >= 1) {
				  							?>
				  							<h6>Reservation Approved</h6>
				  							<?php
				  						}else{
				  						?>
				  						<h6>You Already Reserve a Reservation in this Room</h6>
				  					<?php
				  					}
				  					?>
				  					<?php
				  				}else{
				  			$reserve = "SELECT * FROM reservations WHERE customer_id = '$customer_id' AND reservation_status = '4'";
				  			$reserve_results = mysqli_query($conn, $reserve);
				  			$reserve_row = mysqli_num_rows($reserve_results);
				  			// echo $reserve_row;
				  			if ($reserve_row >= 1) {
				  				?>
				  				<h6>Reservation Approved</h6>
				  				<?php
				  			}else{
				  			?>
				  			<form method="POST" action="reservation.php?room=<?php echo $room_id?>">
				  			<input type="submit" value="Reserve" class="btn btn-outline-warning" name="goToreservation">
				  			</form>
				  		<?php
				  		}
				  		}
				  	}else{
				  		?>
				  		<h6>This Room is full</h6>
				  		<?php
				  	}
				  		?>
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
	require '../template.php';

?>