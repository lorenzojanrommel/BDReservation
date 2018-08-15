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
					<table class="house-pending-list" id="house-pending-list" class="table table-striped table-bordered">
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
							<tr>
								<!-- Boarding House name -->
								<?php
									$sql = "SELECT * FROM houses WHERE faci_status = '3'";
									$results = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_assoc($results)) {
										extract($row)
									?>
								<td><?php echo"$faci_name" ?></td>
								<!-- end of boarding house name -->
								<!-- Boarding House Owner -->
								<?php
									$sql = "SELECT * FROM users WHERE id = '$user_id'";
									$results = mysqli_query($conn, $sql);
									$row = mysqli_fetch_assoc($results);
									extract($row);
								?>
								<td><?php echo "$user_fname" ?></td>
								<!-- End of boarding house owner -->
								<!-- Boarding House BIR permit -->
								<td><button type="button" class="btn btn-info">View</button></td>
								<!-- End of boarding house permit -->
								<!-- Boarding house Mayors Permit -->
								<td><button type="button" class="btn btn-warning">View</button></td>
								<!-- End of boarding house permit -->
								<!-- Boarding house status -->
								<td><?php if ($faci_status == 3) {
									echo "Pending";
								}?></td>
								<!-- End of boarding house status -->
								<?php
									}
								?>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<?php

	}
	require "template.php";
?>

<script type="text/javascript">
	$(document).ready(function() {
	    $('#house-pending-list').DataTable(
	    	{
	    	        "lengthMenu": [[-1, 5, 10, 25], ["All", 5, 10, 25]]
	    	    });
	} );
</script>

