<?php
	function display_title(){
		echo "Boarding House & Dormitories Finder";
	}
	function display_content(){
		require '../condb.php';
		?>
		<div class="container mt-3 mb-5 pd-5">
			  <ul class="nav nav-tabs" role="tablist">
			  <li class="nav-item">
			    <a class="nav-link active" data-toggle="tab" href="#customer-list" role="tab" aria-controls="customer-list">Customer List</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" data-toggle="tab" href="#owner-list" role="tab" aria-controls="owner-list">Owner</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" data-toggle="tab" href="#admin-list" role="tab" aria-controls="admin-list">Admin</a>
			  </li>
			</ul>
			<div class="tab-content">
			  <div class="tab-pane active" id="customer-list" role="tabpanel">
			  	<div class="container">
			  		<div class="col-sm-12">
			  		<h3 class="mt-1">Customer List</h3>
			  		</div>
			  		<div class="container">
			  			<div class="row">
			  			<div class="col-sm-12 mt-2 table-responsive">
			  			<table class="customer-list w-auto table" id="customer-list" class="table table-hover">
			  				<thead>
			  					<tr>
			  						<th>Name</th>
			  						<th>Phone Number</th>
			  						<th>Address</th>
			  						<th>Email</th>
			  						<th>Username</th>
			  						<th>Gender</th>
			  					</tr>
			  				</thead>
			  				<tbody>
			  					<?php
			  					$user_name = "SELECT * FROM users WHERE role_id = '3' ORDER BY user_fname ASC";
			  					$user_results = mysqli_query($conn, $user_name);
			  					while ($user_row = mysqli_fetch_assoc($user_results)) {
			  						extract($user_row);
			  					
			  					?>
			  					<tr>
			  						<td><?php echo ucfirst($user_fname),str_repeat('&nbsp;', 1),substr($user_mname, 0, 1).".".str_repeat('&nbsp;', 1),ucfirst($user_lname); ?></td>
			  						<td><?php echo $user_phone_number; ?></td>
			  						<td><?php echo $user_address; ?></td>
			  						<td><?php echo $user_email; ?></td>
			  						<td><?php echo $username; ?></td>
			  						<td><?php if ($user_gender == 'm') {
			  							echo "Male";
			  						}elseif($user_gender == 'f'){
			  							echo "Female";
			  						}else {
			  							echo "None";
			  						}?></td>
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
			  <div class="tab-pane" id="owner-list" role="tabpanel">
			  	<div class="container">
			  		<div class="col-sm-12">
			  		<h3 class="mt-1">Owner List</h3>
			  		</div>
			  		<div class="container">
			  			<div class="row">
			  			<div class="col-sm-12 mt-2 table-responsive">
			  			<table class="owner-list w-auto table" id="owner-list" class="table table-hover">
			  				<thead>
			  					<tr>
			  						<th>Name</th>
			  						<th>Phone Number</th>
			  						<th>Address</th>
			  						<th>Email</th>
			  						<th>Username</th>
			  						<th>Gender</th>
			  					</tr>
			  				</thead>
			  				<tbody>
			  					<?php
			  					$user_name = "SELECT * FROM users WHERE role_id = '2' ORDER BY user_fname ASC";
			  					$user_results = mysqli_query($conn, $user_name);
			  					while ($user_row = mysqli_fetch_assoc($user_results)) {
			  						extract($user_row);
			  					
			  					?>
			  					<tr>
			  						<td><?php echo ucfirst($user_fname),str_repeat('&nbsp;', 1),substr($user_mname, 0, 1).".".str_repeat('&nbsp;', 1),ucfirst($user_lname); ?></td>
			  						<td><?php echo $user_phone_number; ?></td>
			  						<td><?php echo $user_address; ?></td>
			  						<td><?php echo $user_email; ?></td>
			  						<td><?php echo $username; ?></td>
			  						<td><?php if ($user_gender == 'm') {
			  							echo "Male";
			  						}elseif($user_gender == 'f'){
			  							echo "Female";
			  						}else {
			  							echo "None";
			  						}?></td>
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
			  <div class="tab-pane" id="admin-list" role="tabpanel">
			  	<div class="container">
			  		<div class="col-sm-12">
			  		<h3 class="mt-1">Admin List</h3>
			  		</div>
			  		<div class="container">
			  			<div class="row">
			  			<div class="col-sm-12 mt-2 table-responsive">
			  			<table class="admin-list w-auto table" id="admin-list" class="table table-hover">
			  				<thead>
			  					<tr>
			  						<th>Name</th>
			  						<th>Phone Number</th>
			  						<th>Address</th>
			  						<th>Email</th>
			  						<th>Username</th>
			  						<th>Gender</th>
			  					</tr>
			  				</thead>
			  				<tbody>
			  					<?php
			  					$user_name = "SELECT * FROM users WHERE role_id = '1' ORDER BY user_fname ASC";
			  					$user_results = mysqli_query($conn, $user_name);
			  					while ($user_row = mysqli_fetch_assoc($user_results)) {
			  						extract($user_row);
			  					
			  					?>
			  					<tr>
			  						<td><?php echo $user_fname,str_repeat('&nbsp;', 1),substr($user_mname, 0, 1).".".str_repeat('&nbsp;', 1),ucfirst($user_lname); ?></td>
			  						<td><?php echo $user_phone_number; ?></td>
			  						<td><?php echo $user_address; ?></td>
			  						<td><?php echo $user_email; ?></td>
			  						<td><?php echo $username; ?></td>
			  						<td><?php if ($user_gender == 'm') {
			  							echo "Male";
			  						}elseif($user_gender == 'f'){
			  							echo "Female";
			  						}else {
			  							echo "None";
			  						}?></td>
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
