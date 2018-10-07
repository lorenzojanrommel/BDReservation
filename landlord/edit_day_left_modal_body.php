<?php
	require '../condb.php';
	$id = $_POST['id'];
	$sql = "SELECT * FROM reservations WHERE reservation_id = '$id'";
	$results = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($results);
	extract($row);
	?>
	<div class="container">
		<form method="post" action="edit_day_left_endpoint.php?id=<?php echo $reservation_id;?>">
			<div class="form-group col-sm-12">
			    <label for="room-number">Day Left</label>
			    <input type="text" id="day" name="day-left" class="form-control" placeholder="Input day Left" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
			 </div>
		<div class="modal-footer">
	  		<input type="submit" name="edit_day_customer" value="Yes" class="btn btn-success ml-3">
	  		<button type="button" class="btn btn-primary ml-1" data-dismiss="modal">Close</button>
		</div>
		</form>
	</div>
	<?php

?>