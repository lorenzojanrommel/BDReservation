<?php
	require '../condb.php';
	$id = $_POST['id'];
	$sql = "SELECT * FROM houses WHERE house_id = '$id'";
	$results = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($results);
	extract($row);
	?>
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
		<h3 class="text-center"><?php if ($house_category_id == 1) {
			echo "Boarding House";
		}elseif($house_category_id == 2){
			echo "Dormitory";
		}?></h3>
				<h6 class="text-center">House Type</h6>
				<span class="text-center"></span>
			</div>
			<div class="col-sm-6">
				<h3 class="text-center"><?php echo $house_business_no; ?></h3>
				<h6 class="text-center">Business Plate Number</h6>
			</div>
		</div>
		

		<img class="img-fluid" src="<?php echo $house_blpp ?>" alt="<?php echo $house_name ?>">
	</div>
		<div class="modal-footer">
	  		<button type="button" class="btn btn-primary ml-1" data-dismiss="modal">Close</button>
		</div>