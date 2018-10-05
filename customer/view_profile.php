<?php
	function display_title(){
		echo "Boarding House & Dormitories Finder";
	}
	function display_content(){
		require '../condb.php';
		$id = $_SESSION['user_id'];
		$sql = "SELECT * FROM users WHERE id = $id";
		$results = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($results);
		extract($row);
		?>
		<div class="container-fluid emp-profile">
		                <div class="row">
		                    <div class="col-md-4">
		                        <div class="profile-img">
		                            <img class="avatar-admin" src="../<?php echo $user_picture?>" alt=""/>
		                            <!-- <div class="file btn btn-lg btn-primary">
		                                Change Photo
		                                <input type="file" name="file"/>
		                            </div> -->
		                        </div>
		                    </div>
		                    <div class="col-md-6">
		                        <div class="profile-head">
		                                    <h5>
		                                       <?php
		                                       	echo $user_fname,str_repeat('&nbsp;', 1),substr($user_mname, 0, 1).".".str_repeat('&nbsp;', 1),ucfirst($user_lname);
		                                       ?>
		                                    </h5>
		                                    <h6>
		                                        <?php
		                                        if ($role_id == '3') {
		                                        	echo 'Customer';
		                                        }
		                                        ?>
		                                    </h6>
		                            <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
		                                <li class="nav-item">
		                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
		                                </li>
		                                <li class="nav-item">
		                                  <a class="nav-link" data-toggle="tab" href="#reservation" role="tab" aria-controls="reservation">Reservation</a>
		                                </li>
		                            </ul>
		                        </div>
		                    </div>
		                    <div class="col-md-2">
		                        	<form action="edit_profile.php?edit=edit" method="POST">
		                        		<button type="submit" name="edit_profile" class="profile-edit-btn">Edit Profile</button>
		                            </form>
		                        	<form action="change_password.php?change=change" method="POST" class="mt-2">
		                        		<button type="submit" name="edit_profile" class="profile-edit-btn">Change Password</button>
		                            </form>
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="col-md-4">
		                    </div>
		                    <div class="col-md-8">
		                        <div class="tab-content profile-tab" id="myTabContent">
		                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
		                                        <div class="row">
		                                            <div class="col-md-6">
		                                                <label>Username</label>
		                                            </div>
		                                            <div class="col-md-6">
		                                                <p><?php echo $username; ?></p>
		                                            </div>
		                                        </div>
		                                        <div class="row">
		                                            <div class="col-md-6">
		                                                <label>Name</label>
		                                            </div>
		                                            <div class="col-md-6">
		                                                <p><?php echo $user_fname,str_repeat('&nbsp;', 1),substr($user_mname, 0, 1).".".str_repeat('&nbsp;', 1),ucfirst($user_lname);?></p>
		                                            </div>
		                                        </div>
		                                        <div class="row">
		                                            <div class="col-md-6">
		                                                <label>Gender</label>
		                                            </div>
		                                            <div class="col-md-6">
		                                                <p><?php 
		                                                if ($user_gender == 'm') {
		                                                	echo "Male";
		                                                }elseif($user_gender == 'f'){
		                                                	echo "Female";
		                                                }else{
		                                                	echo "NA";
		                                                }?></p>
		                                            </div>
		                                        </div>
		                                        <div class="row">
		                                            <div class="col-md-6">
		                                                <label>Email</label>
		                                            </div>
		                                            <div class="col-md-6">
		                                                <p><?php echo $user_email; ?></p>
		                                            </div>
		                                        </div>
		                                        <div class="row">
		                                            <div class="col-md-6">
		                                                <label>Phone</label>
		                                            </div>
		                                            <div class="col-md-6">
		                                                <p><?php echo $user_phone_number; ?></p>
		                                            </div>
		                                        </div>
		                                        <div class="row">
		                                            <div class="col-md-6">
		                                                <label>Birthdate</label>
		                                            </div>
		                                            <div class="col-md-6">
		                                                <p><?php echo $user_birthdate; ?></p>
		                                            </div>
		                                        </div>
		                            </div>
		                            <div class="tab-pane fade" id="reservation" role="tabpanel" aria-labelledby="home-tab">
		                             <div class="row">
			  							<div class="col-sm-12 mt-2 table-responsive">
			  							<table class="customer-list w-auto table" id="customer-list" class="table table-hover">
			  								<thead>
			  									<tr>
			  										<th>House Name</th>
			  										<th>Room Number</th>
			  										<th>House Owner</th>
			  										<th>Room Price</th>
			  										<th>Status</th>
			  										<th>Action</td>
			  									</tr>
			  								</thead>
			  								<tbody>
			  									<?php
			  									$reservation = "SELECT * FROM reservations WHERE customer_id = '$id'";
			  									$reservation_results = mysqli_query($conn, $reservation);

			  									if (mysqli_num_rows($reservation_results) >0) {
			  									while($reservation_row = mysqli_fetch_assoc($reservation_results)){
			  									extract($reservation_row);
			  									?>
			  									<tr>
			  										<td class="text-center"><?php 
			  										$house = "SELECT * FROM `houses` JOIN rooms ON (houses.house_id = rooms.house_id) JOIN reservations ON (rooms.room_id = reservations.room_id) WHERE owner_id = '$owner_id'";
			  										$house_results = mysqli_query($conn, $house);
			  										$house_row = mysqli_fetch_assoc($house_results);
			  										extract($house_row);
			  										echo $house_name;
			  										?></td>
			  										<td class="text-center">
			  											<?php
			  											$room_number = "SELECT * FROM rooms WHERE room_id = '$room_id'";
			  											$room_results = mysqli_query($conn, $room_number);
			  											$room_row = mysqli_fetch_assoc($room_results);
			  											extract($room_row);
			  											echo $room_number;
			  											?>
			  										</td>
			  										<td>
			  											<?php
			  											$owner = "SELECT * FROM users WHERE id = '$owner_id'";
			  											$owner_results = mysqli_query($conn, $owner);
			  											$owner_row = mysqli_fetch_assoc($owner_results);
			  											extract($owner_row);
			  											echo $user_fname,str_repeat('&nbsp;', 1),substr($user_mname, 0, 1).".".str_repeat('&nbsp;', 1),ucfirst($user_lname);
			  											?>
			  										</td>
			  										<td class="text-center"><?php
			  											echo $room_price;
			  										?></td>
			  										<?php
			  										if ($reservation_status == '4') {
			  											?>
			  											<td class="text-center">Approved</td>
			  											<?php
			  										}elseif($reservation_status == '3'){
			  											?>
			  											<td class="text-center">Pending</td>
			  											<?php
			  										}elseif ($reservation_status == '5') {
			  											?>
			  											<td class="text-center">Denied</td>
			  											<?php
			  										}
			  										?>
			  										<td>
			  											<?php
			  											if ($reservation_status == '5') {
			  												?>
			  												<button type="button" class="btn btn-outline-danger">Delete</button>
			  												<?php
			  											}elseif($reservation_status == '3'){
			  												?>
			  												<button type="button" class="btn btn-outline-warning">Cancel</button>
			  												<?php
			  											}else{
			  												?>
			  												<button type="button" class="btn btn-success">Approved</button>
			  												<?php
			  											}
			  											?>
			  										</td>
			  									</tr>
			  									<?php
			  									}
			  								}else{
			  									?>
			  									<tr>
			  										<td colspan="6">No Reservation found!</td>
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
		                </div>           
		        </div>
		<?php

	}
	require "../template.php";
?>

