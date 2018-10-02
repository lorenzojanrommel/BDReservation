<?php
	require '../condb.php';
	$id = $_POST['id'];
	$sql = "SELECT * FROM reservations WHERE reservation_id = '$id'";
	$results = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($results);
	extract($row)
	?>
	<div class="container">
		<form method="post" action="approve_reservation_modal_endpoint.php?id=<?php echo $reservation_id; ?>">
			<h5 class="p-2">
				<?php 
					$user = "SELECT * FROM users WHERE id = '$customer_id'";
					$user_results = mysqli_query($conn, $user);
					$user_row = mysqli_fetch_assoc($user_results);
					extract($user_row);
					echo $user_fname,str_repeat('&nbsp;', 1),substr($user_mname, 0, 1).".".str_repeat('&nbsp;', 1),ucfirst($user_lname);
			?></h5>
		<div class="modal-footer">
	  		<input type="submit" name="approve_reservation_submit" value="Yes" class="btn btn-success ml-3">
	  		<button type="button" class="btn btn-primary ml-1" data-dismiss="modal">Close</button>
		</div>
		</form>
	</div>
	<?php

?>