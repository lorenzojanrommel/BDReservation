<?php
	function display_title(){
		echo "Boarding House & Dormitories Finder";
	}
	function display_content(){
		require "../condb.php";
		?>
		<div class="intro">
			<div class="container">
				<div class="title-intro">
					<h1>Booking</h1>
				</div>
				<div class="table-responsive-sm mt-2">
				<table class="table table-striped">
					<thead>
						<tr>
						<th>Name</th>
						<th>Address</th>
						<th>Room Number</th>
						<th>Payment</th>
						<th>First Payment</th>
						<th>Approve/Decline</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$user = $_SESSION['user_id'];
						$sql1 = "SELECT * FROM reservations JOIN rooms ON (reservations.room_id = rooms.room_id) JOIN houses ON (rooms.house_id = houses.house_id) JOIN users ON (houses.user_id = users.id) WHERE owner_id = '$user' AND reservation_status = '3' ORDER BY update_reserve_date DESC";
						$results = mysqli_query($conn, $sql1);
						$count_row = mysqli_num_rows($results);
						if ($count_row > 0 ) {
						while ($row = mysqli_fetch_assoc($results)){
						extract($row)
						?>
						<tr>
							<td>
							<?php 
							$user = "SELECT * FROM users WHERE id = '$customer_id'";
							$user_results = mysqli_query($conn, $user);
							$user_row = mysqli_fetch_assoc($user_results);
							extract($user_row);
							echo $user_fname,str_repeat('&nbsp;', 1),substr($user_mname, 0, 1).".".str_repeat('&nbsp;', 1),ucfirst($user_lname);
							?>
							</td>
							<td>
								<?php 
								echo $user_address;
								?>
							</td>
							<td class="text-center">
								<?php
								$room = "SELECT room_number FROM rooms WHERE room_id = '$room_id'";
								$room_results = mysqli_query($conn, $room);
								$room_row = mysqli_fetch_assoc($room_results);
								extract($room_row);
								echo $room_number;
								?>
							</td>
							<td><span>&#8369</span>
								<?php 
								echo number_format($room_price);
								?>
							</td>
							<td class="text-center">
								<?php
								echo number_format($payment);
								?>
							</td>
							<td>
								<div class="row">
									<div class="col-sm-6 text-center">
										<button class="btn btn-outline-warning approve_reservation_modal" data-id=<?php echo $reservation_id?> data-toggle="modal" data-target="#approve_reservation">Accept</button>
									</div>

									<div class="col-sm-6 text-center"><button class="btn btn-outline-danger">Decline</button></div>
								</div>
							</td>
						</tr>
						<?php
						}
					}else{
						?>
						<tr>
						<td colspan="6"> No Results Found</td>
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
	require "../template.php";
	require "approve_modal.php";
?>

<script type="text/javascript">
	$('.approve_reservation_modal').click(function() {
		var id = $(this).data('id');
		console.log(id);
		$.ajax({
			method: 'post',
			url: 'approve_reservation_modal_body.php',
			data: {
				// edit: true,
				id : id
			},
			success: function(data){
				// console.log(data);
				$('#approve_reservation_body').html(data);
			}
		})
	})
</script>