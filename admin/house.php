<?php
	function display_title(){
		echo "Boarding House & Dormitories Finder";
	}
	function display_content(){
		require '../condb.php';
		?>

		<div class="container mt-3 mb-5">
			  <ul class="nav nav-tabs" role="tablist">
			  <li class="nav-item">
			    <a class="nav-link active" data-toggle="tab" href="#boarding_house" role="tab" aria-controls="boarding_house">Boarding House</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" data-toggle="tab" href="#dormitory" role="tab" aria-controls="dormitory">Dormitory</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" data-toggle="tab" href="#pending" role="tab" aria-controls="pending">Pending</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" data-toggle="tab" href="#house" role="tab" aria-controls="approved">Approved</a>
			  </li>
			</ul>
			<div class="tab-content">
			  <div class="tab-pane active" id="boarding_house" role="tabpanel">
			  	<div class="container">
			  		<div class="col-sm-12">
			  		<h3 class="mt-1">Approved Boarding House List</h3>
			  		</div>
			  		<div class="container">
			  			<div class="row">
			  			<div class="col-sm-12 mt-2">
			  			<table class="boarding-house-list" id="boarding-house-list" class="table table-hover">
			  				<thead>
			  					<tr>
			  						<th>House Name</th>
			  						<th>Owner</th>
			  						<th>BIR Permit</th>
			  						<th>Mayors Permit</th>
			  						<th>Business License Permit</th>
			  						<th>Status</th>
			  					</tr>
			  				</thead>
			  				<tbody>
			  					<tr>
			  						<td>123</td>
			  						<td>123</td>
			  						<td>123</td>
			  						<td>123</td>
			  						<td>123</td>
			  						<td>123</td>
			  					</tr>
			  				</tbody>
			  			</table>
			  			</div>
			  			</div>
			  		</div>
			  	</div>
			  </div>
			  <div class="tab-pane" id="dormitory" role="tabpanel">
			  	<div class="container">
			  		<div class="col-sm-12">
			  		<h3>Approved Dormitory List</h3>
			  		</div>
				<div class="container">
					<div class="row">
					<div class="col-sm-12 mt-2">
					<table class="dormitory-list" id="dormitory-list" class="table table-hover">
						<thead>
							<tr>
								<th>House Name</th>
								<th>Owner</th>
								<th>BIR Permit</th>
								<th>Mayors Permit</th>
								<th>Business License Permit</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>123</td>
								<td>123</td>
								<td>123</td>
								<td>123</td>
								<td>123</td>
								<td>123</td>
							</tr>
						</tbody>
					</table>
					</div>
					</div>
				</div>
			  	</div>
			  </div>
			  <div class="tab-pane" id="pending" role="tabpanel">
			  	<div class="container">
			  		<div class="row">
			  			<h3 class="mt-1">House Pending</h3>
			  			<div class="col-sm-12 mt-2">
			  				<table class="house-pending-list" id="house-pending-list" class="table table-hover">
			  					<thead>
			  						<tr>
			  							<th>House Name</th>
			  							<th>Owner</th>
			  							<th>BIR Permit</th>
			  							<th>Mayors Permit</th>
			  							<th>Business License Permit</th>
			  							<th>Status</th>
			  						</tr>
			  					</thead>
			  					<tbody>
			  							<!-- Boarding House name -->
			  							<?php
			  								$sql = "SELECT * FROM houses WHERE house_status = '3'";
			  								$results = mysqli_query($conn, $sql);
			  								while ($row = mysqli_fetch_assoc($results)) {
			  									extract($row)
			  								?>
			  							<tr>
			  							<td><?php echo"$house_name" ?></td>
			  							<!-- end of boarding house name -->
			  							<!-- Boarding House Owner -->
			  							<td><?php 
			  								$sql1 = "SELECT * FROM users WHERE id = '$user_id'";
			  								$user = mysqli_query($conn, $sql1);
			  								$row1 = mysqli_fetch_assoc($user);
			  								extract($row1);
			  								echo "$user_fname";?></td>
			  							<!-- End of boarding house owner -->
			  							<!-- Boarding House BIR permit -->
			  							<td><button type="button" class="btn btn-info view-bir" data-id=<?php echo $house_id?> data-toggle="modal" data-target="#view-bir-picture">View</button></td>
			  							<!-- End of boarding house permit -->
			  							<!-- Boarding house Mayors Permit -->
			  							<td><button type="button" class="btn btn-success view-mayors-permit" data-id="<?php echo $house_id ?>" data-toggle="modal" data-target="#view-mayors-permit-picture">View</button></td>
			  							<!-- End of boarding house permit -->
			  							<!-- Business Plate -->
			  							<td><button type="button" class="btn btn-warning view-business-plate" data-id="<?php echo $house_id ?>" data-toggle="modal" data-target="#view-business-plate">View</button></td>
			  							<!-- End business Plate -->
			  							<!-- Boarding house status -->
			  							<td>
			  								<button type="button" class="btn btn-primary approve_modal" data-id=<?php echo $house_id?> data-toggle="modal" data-target="#approve">Approve</button>
			  							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deny">Deny</button>
			  							</td>
			  							<!-- End of boarding house status -->
			  							</tr>
			  							<?php
			  								}
			  							?>
			  					</tbody>
			  				</table>
			  			</div>
			  		</div>
			  	</div>
			  </div>
			  <div class="tab-pane" id="house" role="tabpanel">
			  	<div class="container">
			  		<div class="row">
			  		<h3 class="mt-1">House List</h3>
			  		<div class="col-sm-12 mt-2">
			  		<table class="house-list" id="house-list" class="table table-hover">
			  			<thead>
			  				<tr>
			  					<th>House Name</th>
			  					<th class="pl-5">Ban</th>
			  					<th>Notify</th>
			  				</tr>
			  			</thead>
			  			<tbody>
			  				<tr>
			  					<td>Hello</td>
			  					<td class="pl-5">
			  						<button type="button" class="btn btn-danger approve_modal" data-id=<?php  ?> data-toggle="modal" data-target="#qwe">Notify</button>
			  					</td>
			  					<td class="pl-5">
			  						<button type="button" class="btn btn-primary approve_modal" data-id=<?php ?> data-toggle="modal" data-target="#qwe">Notify</button>
			  					</td>
			  				</tr>
			  			</tbody>
			  		</table>
			  		</div>
			  		</div>
			  	</div>
			  </div>
			</div>
		</div>
		<?php

	}
	require "../template.php";
	require 'approve_modal.php';
	require 'view_bir_picture_modal.php';
	// require 'approve_house_modal_body.php';
	require 'view_mayors_permit_modal.php';
	require 'view_business_plate_modal.php';
?>
<script type="text/javascript">
	$(document).ready(function() {
	    $('#house-list').DataTable(
	    	{
	    	        "lengthMenu": [[-1, 5, 10, 25], ["All", 5, 10, 25]]
	    	    });
	} );
	$(document).ready(function() {
	    $('#house-pending-list').DataTable(
	    	{
	    	        "lengthMenu": [[-1, 5, 10, 25], ["All", 5, 10, 25]]
	    	    });
	} );
	$(document).ready(function() {
	    $('#boarding-house-list').DataTable(
	    	{
	    	        "lengthMenu": [[-1, 5, 10, 25], ["All", 5, 10, 25]]
	    	    });
	} );
	$(document).ready(function() {
	    $('#dormitory-list').DataTable(
	    	{
	    	        "lengthMenu": [[-1, 5, 10, 25], ["All", 5, 10, 25]]
	    	    });
	} );
	$('.approve_modal').click(function() {
		var id = $(this).data('id');
		// console.log(id);
		$.ajax({
			method: 'post',
			url: 'approve_house_modal_body.php',
			data: {
				// edit: true,
				id : id
			},
			success: function(data){
				// console.log(data);
				$('#approve_house_body').html(data);
			}
		})
	})
	$('.view-bir').click(function() {
		var id = $(this).data('id');
		$.ajax({
			method: 'POST',
			url: 'view_bir_picture_modal_body.php',
			data: {
				id : id
			},
			success:function(data){
				// console.log(data);
				$('#bir_house_body').html(data);
			}
		})
	})
	$('.view-mayors-permit').click(function(){
		var id = $(this).data('id');
		// console.log(id);
		$.ajax({
			method: 'POST',
			url: 'view_mayors_permit_modal_body.php',
			data: {
				id : id
			},
			success:function(data){
				console.log(data);
				$('#mayors_permit_house_body').html(data);
			}
		})
	})
	$('.view-business-plate').click(function(){
		var id = $(this).data('id');
		// console.log(id);
		$.ajax({
			method: 'POST',
			url: 'view_business_plate_modal_body.php',
			data: {
				id : id
			},
			success:function(data){
				console.log(data);
				$('#bplate_house_body').html(data);
			}
		})
	})
</script>

