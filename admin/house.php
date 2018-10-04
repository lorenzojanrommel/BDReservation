<?php
	function display_title(){
		echo "Boarding House & Dormitories Finder";
	}
	function display_content(){
		require '../condb.php';
		?>

		<div class="container mt-3 mb-5 pd-5">
			  <ul class="nav nav-tabs" role="tablist">
			  <li class="nav-item house-tab-list">
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
			  <div class="tab-pane active approve-list-container" id="boarding_house" role="tabpanel">
			  	<div class="container approve-list-container">
			  		<div class="col-sm-12">
			  		<h3 class="mt-1 approve-list">Approved Boarding House List</h3>
			  		</div>
			  		<div class="container">
			  			<div class="row">
			  			<div class="col-sm-12 mt-2 approve-list-tab">
			  			<table class="boarding-house-list w-auto table-responsive" id="boarding-house-list" class="table table-hover">
			  				<thead>
			  					<tr>
			  						<th>House Name</th>
			  						<th>Owner</th>
			  						<th>Business License Permit</th>
			  						<th>Status</th>
			  					</tr>
			  				</thead>
			  				<tbody>
			  					<?php
			  					$bh_approved = "SELECT * FROM houses WHERE house_status = '4' AND house_category_id = '1'";
			  					$bh_results = mysqli_query($conn, $bh_approved);
			  					while ($bh_row = mysqli_fetch_assoc($bh_results)) {
			  						extract($bh_row);
			  					
			  					?>
			  					<tr>
			  						<td><?php echo $house_name ?></td>
			  						<td class="p-1">
			  							<?php
			  							$bh_owner = "SELECT `user_fname`, `user_lname`, `user_mname` FROM users WHERE id = '$user_id'";
			  							$bh_owner_results = mysqli_query($conn, $bh_owner);
			  							$bh_owner_row = mysqli_fetch_assoc($bh_owner_results);
			  							extract($bh_owner_row);
			  							echo $user_fname,str_repeat('&nbsp;', 1),substr($user_mname, 0, 1).".".str_repeat('&nbsp;', 1),ucfirst($user_lname);
			  							?>
			  						</td>
			  						<!-- View business plate -->
			  						<td class="text-center"><button type="button" class="btn btn-warning view-business-plate view-button-bh-list" data-id="<?php echo $house_id ?>" data-toggle="modal" data-target="#view-business-plate">View</button></td>
			  						<!-- End view Business plate -->
			  						<td>Approved</td>
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
			  </div>
			  <div class="tab-pane  approve-list-container" id="dormitory" role="tabpanel">
			  	<div class="container  approve-list-container">
			  		<div class="col-sm-12">
			  		<h3 class="approve-list">Approved Dormitory List</h3>
			  		</div>
				<div class="container">
					<div class="row">
					<div class="col-sm-12 mt-2 approve-list-tab">
						<table class="dormitory-list w-auto table-responsive" id="dormitory-list" class="table table-hover">
						<thead>
							<tr>
								<th>House Name</th>
								<th>Owner</th>
								<th>Business License Permit</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody class="dormitory-body">
							<?php
							$d_approved = "SELECT * FROM houses WHERE house_status = '4' AND house_category_id = '2'";
							$d_results = mysqli_query($conn, $d_approved);
							while ($d_row = mysqli_fetch_assoc($d_results)) {
								extract($d_row);
							?>
							<tr>
								<td><?php echo $house_name ?></td>
								<td>
									<?php
									$d_owner = "SELECT `user_fname`, `user_lname`, `user_mname` FROM users WHERE id = '$user_id'";
									$d_owner_results = mysqli_query($conn, $d_owner);
									$d_owner_row = mysqli_fetch_assoc($d_owner_results);
									extract($d_owner_row);
									echo $user_fname,str_repeat('&nbsp;', 1),substr($user_mname, 0, 1).".".str_repeat('&nbsp;', 1),ucfirst($user_lname);
									?>
								</td>
								<!-- View business plate -->
								<td class="text-center"><button type="button" class="btn btn-warning view-business-plate view-button-d-list" data-id="<?php echo $house_id ?>" data-toggle="modal" data-target="#view-business-plate">View</button></td>
								<!-- End view Business plate -->
								<td>Approved</td>
							</tr>
							<?php
							};
							?>
						</tbody>
					</table>
					</div>
					</div>
				</div>
			  	</div>
			  </div>
			  <div class="tab-pane pending-container" id="pending" role="tabpanel">
			  	<div class="container pending-container">
			  			<h3 class="mt-1 ml-3 pending-list">House Pending</h3>
			  			<div class="col-sm-12 mt-2">
			  				<table class="house-pending-list w-auto table-responsive" id="house-pending-list" class="table table-hover">
			  					<thead>
			  						<tr>
			  							<th>House Name</th>
			  							<th>Owner</th>
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
			  								echo $user_fname,str_repeat('&nbsp;', 1),substr($user_mname, 0, 1).".".str_repeat('&nbsp;', 1),ucfirst($user_lname);?></td>
			  							<!-- End of boarding house owner -->
			  							<!-- Business Plate -->
			  							<td class="text-center"><button type="button" class="btn btn-warning view-business-plate pending-button" data-id="<?php echo $house_id ?>" data-toggle="modal" data-target="#view-business-plate">View</button></td>
			  							<!-- End business Plate -->
			  							<!-- Boarding house status -->
			  							<td>
			  								<button type="button" class="btn btn-primary approve_modal pending-button" data-id=<?php echo $house_id?> data-toggle="modal" data-target="#approve">Approve</button>
			  								<button type="button" class="btn btn-danger deny_modal pending-button" data-id=<?php echo $house_id?> data-toggle="modal" data-target="#deny">Deny</button>
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
			  <div class="tab-pane all-all-approved" id="house" role="tabpanel">
			  	<div class="container all-all-approved">
			  		<h3 class="mt-1 ml-3 all-house-approved">House List</h3>
			  		<div class="col-sm-12 mt-2">
			  			<table class="house-list w-auto table-responsive" id="house-list" class="table table-hover">
			  			<thead>
			  				<tr>
			  					<th>House Name</th>
			  					<th>Owner</th>
			  					<!-- <th>Business License Permit</th>
			  					<th>Status</th> -->
			  					<th>House Category</th>
			  				</tr>
			  			</thead>
			  			<tbody>
			  				<?php
			  					$all_house = "SELECT * FROM houses WHERE house_status = '4'";
			  					$all_house_results = mysqli_query($conn, $all_house);
			  					while ($row = mysqli_fetch_assoc($all_house_results)) {
			  						extract($row)
			  					?>
			  				<tr class="mb-5">
			  				<td><?php echo"$house_name" ?></td>
			  				<!-- end of  house name -->
			  				<!--  House Owner -->
			  				<td><?php 
			  					$all_house_owner = "SELECT * FROM users WHERE id = '$user_id'";
			  					$user = mysqli_query($conn, $all_house_owner);
			  					$all_house_row = mysqli_fetch_assoc($user);
			  					extract($all_house_row);
			  					echo $user_fname,str_repeat('&nbsp;', 1),substr($user_mname, 0, 1).".".str_repeat('&nbsp;', 1),ucfirst($user_lname);?></td>
			  				<!-- Business Plate -->
			  				<!-- <td class="text-center"><button type="button" class="btn btn-warning view-business-plate" data-id="<?php echo $house_id ?>" data-toggle="modal" data-target="#view-business-plate">View</button></td> -->
			  				<!-- End business Plate -->
			  				<!--  house status -->
			  				<!-- <td> Approved</td> -->
			  				<!-- End of  house status -->
			  				<?php 
			  					if ($house_category_id == 1) {
			  						?>
			  						<td>Boarding House</td>
			  						<?php
			  					}else{
			  						?>
			  						<td>Dormitory</td>
			  						<?php
			  					}
			  				?></td>
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
		</div>
		<?php

	}
	require "../template.php";
	require 'approve_modal.php';
	require 'view_bir_picture_modal.php';
	// require 'approve_house_modal_body.php';
	require 'deny_modal.php';
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
	$('.deny_modal').click(function() {
		var id = $(this).data('id');
		// console.log(id);
		$.ajax({
			method: 'post',
			url: 'deny_house_modal_body.php',
			data: {
				// edit: true,
				id : id
			},
			success: function(data){
				// console.log(danger);
				$('#deny_house_body').html(data);
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
				// console.log(data);
				$('#bplate_house_body').html(data);
			}
		})
	})
</script>

