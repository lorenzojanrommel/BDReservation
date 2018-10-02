<?php
	function display_title(){
		echo "Boarding House & Dormitories Finder";
	}
	function display_content(){
		?>
		<div class="container mb-4">
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
			    				<th>Days Left</th>
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
			    				<td>3</td>
			    				<td>Delete</td>
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
				echo "No Reservation Found";
			}
			?>
		</div>
		<?php

	}
	require "../template.php";
?>

