<?php
	function display_title(){
		echo "Boarding House & Dormitories Finder";
	}
	function display_content(){
		require '../condb.php';
		// session_start();
		$room_id = $_GET['id'];
		$sql = "SELECT * FROM `rooms` WHERE room_id = '$room_id'";
		$results = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($results);
		extract($row);
		?>
		<div class="container">
			<h2 class="mt-5">Edit this Room</h2>
		<form method='POST' action='edit_room_endpoint.php?id=<?php echo $room_id; ?>' enctype='multipart/form-data'>
		  <div class="row">
		    <div class="col-sm-6">
		      <div class="form-group">
		        <!-- Select for category -->
		        <label for="room_type">Room Type</label>
		        <select class="form-control" id="room-type" name="room-type" required>
		          <?php
		          if ($room_type == '1') {
		          	?>
		          	<option disabled>Room Type</option>
		          	<option selected value="1">Male</option>
		          	<option value="2">Female</option>
		          	<?php
		          }else{
		          	?>
		          	<option disabled>Room Type</option>
		          	<option value="1">Male</option>
		          	<option selected value="2">Female</option>
		          	<?php
		          }
		          ?>
		        </select>
		        <!-- end of Select for category -->
		      </div>
		    </div>
		    <div class="col-sm-6">
		      <!-- Room Number-->
		      <div class="form-group col-sm-12">
		          <label for="room-number">Room Number</label>
		          <input type="text" id="room-number" name="room-number" class="form-control" placeholder="Input Room Number" oninput="this.value=this.value.replace(/[^0-9]/g,'');" value="<?php echo $room_number; ?>">
		       </div>
		      <!-- End of Room Number-->
		    </div>
		  </div>
		  <input type="hidden" name="house-id" value="<?php echo $house_id ?>">
		  <div class="form-row">
		    <!-- Price Room -->
		    <div class="form-group col-sm-12">
		        <label for="price">Price</label>
		        <input type="text" id="price" name="price" class="form-control" placeholder="Input your Room Price" oninput="this.value=this.value.replace(/[^0-9]/g,'');" value="<?php echo $room_price; ?>">
		     </div>
		    <!-- End of Price Room-->
		    <!-- Room Availavility -->
		    <div class="form-group col-sm-6">
		        <label for="availability">Room Availability</label>
		        <input type="number" id="availability" name="availability" class="form-control" min="1" max="8" oninput="this.value=this.value.replace(/[^0-9]/g,'');" value="<?php echo $availability; ?>">
		     </div>
		    <!-- End of Room Availavility-->
		    <!-- Number of customer in this room -->
		    <div class="form-group col-sm-6">
		        <label for="number_customer">Number of Customer in this Room</label>
		        <input type="number" id="number_customer" name="number_customer" class="form-control" min="0" max="<?php echo $availability; ?>" oninput="this.value=this.value.replace(/[^0-9]/g,'');" value="<?php echo $room_customer_no; ?>">
		     </div>
		    <!-- end of number of customer in this room -->
		    <!-- First Picture-->
		    <div class="form-group col-sm-12">
		         <label for="room-pic-1">First Picture of Room</label>
		         <input type="file" id="room-pic-1" name="room-pic-1" class="form-control-file" aria-describedby="fileHelp" placeholder="Second Picture of Room">
		     </div>
		    <!-- End of first Picture -->
		    <!-- Second Picture-->
		    <div class="form-group col-sm-12">
		         <label for="room-pic-2">Second Picture of Room</label>
		         <input type="file" id="room-pic-2" name="room-pic-2" class="form-control-file" aria-describedby="fileHelp" placeholder="Second Picture of Room">
		     </div>
		    <!-- End of Second Picture -->
		    <!-- Third Picture-->
		     <div class="form-group col-sm-12">
		          <label for="room-pic-3">Third Picture of Room</label>
		          <input type="file" id="room-pic-3" name="room-pic-3" class="form-control-file" aria-describedby="fileHelp" placeholder="Third Picture of Room">
		      </div>
		    <!-- End of Third Picture -->
		    <!-- Fourth Picture-->
		    <div class="form-group col-sm-12">
		         <label for="room-pic-4">Fourth Picture of Room</label>
		         <input type="file" id="room-pic-4" name="room-pic-4" class="form-control-file" aria-describedby="fileHelp" placeholder="Fourth Picture of Room">
		     </div>
		     <!-- End of Fourth Picture -->
		  </div>
		<div class="modal-footer">
		   <input type="submit" name="edit_room_button" value="Save" class="btn btn-success ml-3">
		</form>
		<form action="add_room.php">
		   <button type="submit" class="btn btn-primary ml-1" data-dismiss="modal">Close</button>
		</form>
		</div>
	</div>
		<?php

	}
	require "../template.php";
?>


