<?php
// if (!isset($_SESSION['user_id'])) {
// 		$_SESSION['redirect'] = $_SERVER['REQUEST_URI'];
// 		// echo $_SESSION['redirect'];
// 		header('location: ../login.php');
// 	}else{
	// if (isset($_POST['goToreservation'])) {
	function display_title(){
		echo "Boarding House & Dormitories Finder || Reservation Invoice";
	}
	function display_content(){
		require '../condb.php';
		?>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="card border-primary mb-3 mt-3">
						<div class="card-header">
						<!-- Header row -->
						<div class="row">
							<div class="col-sm-4">
							  <p><span class="font-weight-bold">Date: </span><span class="card-text"><?php 
							  date_default_timezone_set('Asia/Manila');
							  echo(date("F j, Y"))?></span></p>
							 </div>
							 <div class="col-sm-4">
							 	<p><span class="font-weight-bold">Time: </span><span class="card-text"><?php echo (date("g:i a"))?></span></p>
							 </div>
							 <div class="col-sm-4"><span class="font-weight-bold">Status: </span><span class="card-text">Pending</span></div>
						 </div>
						 <!-- End of header row -->
					  	</div>
					  <div class="card-body">
					    <div class="row">
					    	<div class="col-sm-6">
					    		<h6 class="font-weight-bold">From:</h6>
					    		<?php
					    		$customer = $_SESSION['user_id'];
					    		$sql = "SELECT * FROM users WHERE id = '$customer'";
					    		$results = mysqli_query($conn, $sql);
					    		$row = mysqli_fetch_assoc($results);
					    		extract($row);
					    		?>
					    		<h6><span class="font-weight-bold">Name: </span><?php echo $user_fname,str_repeat('&nbsp;', 1),substr($user_mname, 0, 1).".".str_repeat('&nbsp;', 1),ucfirst($user_lname);?></h6>
					    		<h6><span class="font-weight-bold">Address: </span><?php echo $user_address;?></h6>
					    		<h6><span class="font-weight-bold">Email: </span><?php echo $user_email;?></h6>
					    		<h6><span class="font-weight-bold">Phone: </span><?php echo $user_phone_number; ?></h6>

					    	</div>
					    	<div class="col-sm-6">
					    		<h6 class="font-weight-bold">To:</h6>
					    		<?php
					    		$id = $_GET['room'];
					    		$sql2 = "SELECT * FROM `users` JOIN houses ON (users.id = houses.user_id) JOIN rooms ON (rooms.house_id = houses.house_id) WHERE room_id = '$id' ";
					    		$results2 = mysqli_query($conn, $sql2);
					    		$row2 = mysqli_fetch_assoc($results2);
					    		extract($row2);
					    		?>
					    		<h6><span class="font-weight-bold">Name:</span><?php echo $user_fname,str_repeat('&nbsp;', 1),substr($user_mname, 0, 1).".".str_repeat('&nbsp;', 1),ucfirst($user_lname);?></h6>
					    		<h6><span class="font-weight-bold">Address: </span><?php echo $user_address;?></h6>
					    		<h6><span class="font-weight-bold">Email: </span><?php echo $user_email;?></h6>
					    		<h6><span class="font-weight-bold">Phone: </span><?php echo $user_phone_number; ?></h6>
					    	</div>
					    </div>
					    <div class="row">
					    	<div class="col-sm-12">
					    		<!-- Form -->
					    		<form method="POST" action="reservation_endpoint.php?id=<?php echo $room_id ?>">
					    		<!-- Table -->
					    		<input type="text" name="owner" value="<?php echo $id ?>" hidden>
					    		<div class="table-responsive-sm mt-2">
					    		<table class="table table-striped">
					    			<thead>
					    				<tr>
					    				<th>House</th>
					    				<th>Room Type</th>
					    				<th>Room Number</th>
					    				<th>Price</th>
					    				</tr>
					    			</thead>
					    			<tbody>
					    				<tr>
					    					<td><?php echo $house_name ?> </td>
					    					<td><?php if ($room_type = 1) {
					    						echo "Single Room";
					    					}elseif($room_type = 2){
					    						echo "Double Room";
					    					}?></td>
					    					<td class="text-center">
					    						<input type="text" name="room-number" value="<?php echo $room_number?>" readonly class="remove-border">
					    					</td>
					    					<td>
					    						<span>&#8369</span>
					    						<input type="text" name="room-price" value="<?php echo number_format($room_price) ?>" readonly class="remove-border">
					    					</td>
					    				</tr>
					    			</tbody>

					    		</table>
					    		</div>
					    		<!-- End Table -->
					    	</div>
					    </div>
					    <div class="row">
					    <!-- 	<div class="col-sm-12">
					    		<h6><span class="font-weight-bold">Rules: </span>No Payment: You will be given 3 days to pay or go in the Boarding/Dormitory or else your reservation will be void</h6>
					    	</div> -->
					    	<div class="col-sm-12">
					    		<h6><span class="font-weight-bold">Reminder: </span> For payment, Please remember all the details about the owner.</h6>
					    	</div>
					    	<div class="col-sm-12"></div>
					    </div>
					    <div class="row mt-5">
					    	<div class="col-sm-6 text-right"></div>
					    	<div class="col-sm-6 text-left"><button type="submit" name="proceed_reservation" class="btn btn-outline-primary">Proceed for Reservation</button></div>
					    </div>
					</form>
					    <!-- end form -->
					  </div>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
	require '../template.php';
// 	}else{
// 		header('location: not_authorized.php');
// }
// }
?>