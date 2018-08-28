<?php
	require 'condb.php';
	$id = $_POST['id'];
	$sql = "SELECT * FROM houses WHERE house_id = '$id'";
	$results = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($results);
	extract($row);
	?>
	<div class="container">
		<img class="img-fluid" src="<?php echo $house_mp ?>" alt="<?php echo $house_name ?>">
	</div>
		<div class="modal-footer">
	  		<button type="button" class="btn btn-primary ml-1" data-dismiss="modal">Close</button>
		</div>