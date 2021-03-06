<?php
	function display_title(){
		echo "Boarding House & Dormitories Finder";
	}
	function display_content(){
		?>
		<div class="container mb-4 owner-customer-container">
		<h3 class="pt-4">Customer List</h3>
		<?php
			require '../condb.php';
			$user_id = $_SESSION['user_id'];
			$sql = "SELECT * FROM reservations WHERE owner_id = '$user_id' AND reservation_status = '4' GROUP BY room_id";
			$results = mysqli_query($conn, $sql);
			if (mysqli_num_rows($results) > 0) {
				while($row = mysqli_fetch_assoc($results)){
				extract($row);

		?>
			<div class="card border-primary mb-3">
			  <div class="card-header">
				  	<h5>Room Number: 
				  		<?php 
				  			$room_number = "SELECT room_number FROM rooms WHERE room_id = '$room_id'";
				  			$room_number_results = mysqli_query($conn, $room_number);
				  			$room_number_row = mysqli_fetch_assoc($room_number_results);
				  			extract($room_number_row);
				  			echo $room_number;
				  		?>
				  </h5>
				</div>
			  <div class="card-body owner-customer-list">
			    <div class="col-sm-12 mt-2 table-responsive">
			    	<table class="customer-list w-auto table" id="customer-list" class="table table-hover">
			    		<thead>
			    			<tr>
			    				<th>Customer Name</th>
			    				<th>Phone Number</th>
			    				<th>Address</th>
			    				<th>Expiration Date</th>
			    				<th>Action</th>
			    			</tr>
			    		</thead>
			    		<tbody>
			    			<?php
			    				$customer = "SELECT * FROM reservations WHERE room_id = '$room_id' AND reservation_status = '4'";
			    				$customer_results = mysqli_query($conn, $customer);
			    				while($customer_row = mysqli_fetch_assoc($customer_results)){
			    				extract($customer_row);
			    			?>
			    			<tr>
			    				<td><?php
			    				$customer_name = "SELECT * FROM users WHERE id = '$customer_id'";
			    				$customer_name_results = mysqli_query($conn, $customer_name);
			    				$customer_name_row = mysqli_fetch_assoc($customer_name_results);
			    				extract($customer_name_row);
			    				echo $user_fname,str_repeat('&nbsp;', 1),substr($user_mname, 0, 1).".".str_repeat('&nbsp;', 1),ucfirst($user_lname);
			    				?></td>
			    				<td><?php echo $user_phone_number; ?></td>
			    				<td><?php echo $user_address; ?></td>
			    				<td class="date"><?php 
			    				$date = date_create($update_reserve_date);
			    				$plus_three = date_modify($date, '+'.$day.' day');
			    				$day = date_format($plus_three, 'F j, Y g:i a');
			    				echo $day; ?>
			    				</td>
			    				<td>
			    					<button class="btn btn-outline-warning edit_day_left_modal" data-id=<?php echo $reservation_id ?> data-toggle="modal" data-target="#edit_day_left_modal">Edit</button>
			    					<button class="btn btn-outline-danger delete_customer_modal" data-id=<?php echo $customer_id; ?> data-toggle="modal" data-target="#delete_customer_modal">Delete</button></td>
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
			}else{
				?>
				<div class="col-sm-12 customer">
				<h5>No Reservation Found</h5>
				</div>
				<?php
			}
			?>
		</div>
		<?php

	}
	require "../template.php";
	require "delete_customer_at_room_modal.php";
	require 'edit_day_left_modal.php';
?>
<script type="text/javascript">
	$('.delete_customer_modal').click(function() {
		var id = $(this).data('id');
		// console.log(id);
		$.ajax({
			method: 'post',
			url: 'delete_customer_at_room_modal_body.php',
			data: {
				// edit: true,
				id : id
			},
			success: function(data){
				// console.log(data);
				$('#delete_customer_modal_body').html(data);
			}
		})
	})
	$('.edit_day_left_modal').click(function() {
		var id = $(this).data('id');
		console.log(id);
		$.ajax({
			method: 'post',
			url: 'edit_day_left_modal_body.php',
			data: {
				// edit: true,
				id : id
			},
			success: function(data){
				// console.log(data);
				$('#edit_day_left_modal_body').html(data);
			}
		})
	})
</script>
<!-- <script>
	var date = $('.date').text();
	// console.log(date);
// Set the date we're counting down to
var countDownDate = new Date(date).getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="day-left"
    if ($('#day-left') != "") {
    document.getElementById("day-left").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    }
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("day-left").innerHTML = "EXPIRED";
    }
}, 1000);
</script> -->
