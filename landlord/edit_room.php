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
			<h2 class="mt-5 font-weight-bold">Edit this Room</h2>
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
		        <label for="number_customer">Number of Customer on this Room</label>
		        <input type="number" id="number_customer" name="number_customer" class="form-control" min="0" max="<?php echo $availability; ?>" oninput="this.value=this.value.replace(/[^0-9]/g,'');" value="<?php echo $room_customer_no; ?>">
		     </div>
		    <!-- end of number of customer in this room -->
		    <!-- upload image -->
		    <div class="form-group col-sm-12">
		        <label for="room-pic-1">Upload Photo of your Room</label>
		        <input type="file" id="room-pic[]" name="room-pic[]" multiple accept=".jpg, .png, .gif" class="form-control-file" aria-describedby="fileHelp" placeholder="Second Picture of Room">
		    </div>
		    <!-- end of upload image -->
		    <!-- Show images -->
	    	<div class="gallery-rooms">
	    		<div class="container">
	  			<div class="row">
	  			<?php 
	  			$sql4 = "SELECT * FROM room_imgs WHERE room_id = '$room_id' ORDER BY img_id ASC";
	  			$results4 = mysqli_query($conn, $sql4);
	  			$count_img = mysqli_num_rows($results4);
	  			if ($count_img > 0) {
	  			while ($row4 = mysqli_fetch_assoc($results4)) {
	  				extract($row4);
	  				?>
	  				<!-- <div class="image-div"> -->
	  					<div class="mb-4 pr-1 col-sm-6 col-md-4 col-lg-3 text-center">
	  					<!-- <button id = "x">X</button> -->
				  			<a href="../<?php echo substr($img_name, 3); ?>" data-lightbox="mygallery"><img  class ="gallery-rooms-img img-fluid" src="../<?php echo substr($img_name, 3); ?>"></a>
				  			<button type="button" name="delete-img" class="btn btn-outline-danger mt-3 delete-image-modal" data-id=<?php echo $img_id?> data-toggle="modal" data-target="#delete_image">Delete</button>
		  				</div>
		  			<!-- </div> -->

	  				<?php
	  			}
	  		}else{
	  			?>
	  			<div class="col-sm-12">
	  				<a href="../assets/img/no_image_uploaded.png" data-lightbox="mygallery"><img  class ="img-fluid" src="../assets/img/no_image_uploaded.png"></a>
	  			</div>
	  			<?php
	  		}
	  			?>
		  			</div>
	  			</div>

	  		</div>
		    <!-- end show images -->
		  </div>
		<div class="modal-footer">
		   <!-- <input type="submit"  value="Save" class=" ml-3"> -->
		   <button type="submit" name="edit_room_button" class="btn btn-success ml-1" data-dismiss="modal">Save</button>
		</form>
		<form action="add_room.php">
		   <button type="submit" class="btn btn-primary ml-1" data-dismiss="modal">Close</button>
		</form>
		</div>
	</div>
		<?php

	}
	require "delete_image_modal.php";
	// require "delete_image_modal_body.php";
	require "../template.php";
?>
<script type="text/javascript">
	$('.delete-image-modal').click(function() {
		var id = $(this).data('id');
		// console.log(id);
		$.ajax({
			method: 'POST',
			url: 'delete_image_modal_body.php',
			data: {
				// delete-img: true,
				id : id
			},
			success: function(data){
				// console.log(data);
				$('#delete_image_body').html(data);
			}
		})
	})
</script>

