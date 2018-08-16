<?php
	function display_title(){
		echo "Boarding House & Dormitories Finder";
	}
	function display_content(){
		require 'condb.php';
		?>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 p-5 mb-5">
					<table class="house-pending-list" id="house-pending-list" class="table table-hover">
						<thead>
							<tr>
								<th>House Name</th>
								<th>Owner</th>
								<th>BIR Permit</th>
								<th>Mayors Permit</th>
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
								<?php
									$sql = "SELECT * FROM users WHERE id = '$user_id'";
									$results = mysqli_query($conn, $sql);
									$row = mysqli_fetch_assoc($results);
									extract($row);
								?>
								<td><?php echo "$user_fname";?></td>
								<!-- End of boarding house owner -->
								<!-- Boarding House BIR permit -->
								<td><button type="button" class="btn btn-info">View</button></td>
								<!-- End of boarding house permit -->
								<!-- Boarding house Mayors Permit -->
								<td><button type="button" class="btn btn-warning">View</button></td>
								<!-- End of boarding house permit -->
								<!-- Boarding house status -->
								<td><?php if ($house_status == 3) {
								?><button type="button" class="btn btn-primary" data-id="<?php echo "$house_id"?>" data-toggle="modal" data-target="#approve" id="approve_modal">Approve</button>
								<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deny">Deny</button><?php
								}?></td>
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
		<?php

	}
	require "template.php";
	require 'approve_modal.php';
	// require 'approve_house_modal_body.php';
?>

<script type="text/javascript">
	$(document).ready(function() {
	    $('#house-pending-list').DataTable(
	    	{
	    	        "lengthMenu": [[-1, 5, 10, 25], ["All", 5, 10, 25]]
	    	    });
	} );
	$('#approve_modal').click(function() {
		var id = $(this).data('id');
		console.log(id);
		$.ajax({
			method: 'post',
			url: 'approve_house_modal_body.php',
			data: {
				// edit: true,
				id : id
			},
			success: function(data){
				console.log(data);
				$('.approve_house_body').html(data);
			}
		})
	})
</script>
