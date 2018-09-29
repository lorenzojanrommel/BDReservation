<?php
	require '../condb.php';
	$id = $_POST['id'];
	$sql = "SELECT * FROM houses WHERE house_id = '$id'";
	$results = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($results);
	extract($row);
	?>
	<div class="container">
		<h3 class="text-center"><?php if ($house_category_id = 'Boarding House') {
			echo "Boarding House";
		}elseif($house_category_id = 'Dormitory'){
			echo "Dormitory";
		}?></h3>
		<h6 class="text-center">House Type</h6>
		<img class="img-fluid" src="<?php echo $house_blpp ?>" alt="<?php echo $house_name ?>">
	</div>
		<div class="modal-footer">
	  		<button type="button" class="btn btn-primary ml-1" data-dismiss="modal">Close</button>
		</div>