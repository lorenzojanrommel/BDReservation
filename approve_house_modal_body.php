<?php
	$id = $_POST['id'];
	require 'condb.php';
	$sql = "SELECT * FROM houses WHERE house_id = '$id'";
	$results = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($results);
	extract($row);
	?>
	<div class="container">
		<form method="post" action="approved_modal.php?id=<?php echo $house_id?>">
			<h5 class="p-2"><?php echo $house_name ?></h5>
		<div class="modal-footer">
	  		<input type="submit" name="approve_submit" value="Yes" class="btn btn-success ml-3">
	  		<button type="button" class="btn btn-primary ml-1" data-dismiss="modal">Close</button>
		</div>
		</form>
	</div>
	<?php
?>