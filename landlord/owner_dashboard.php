<?php
	function display_title(){
		echo "Boarding House & Dormitories Finder";
	}
	function display_content(){
		require '../condb.php';
		$username = $_SESSION['username'];
		$sql = "SELECT * FROM users WHERE username = '$username'";
		$results = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($results);
		extract($row);
		$user_id = $id;
		$sql1 = "SELECT * FROM houses WHERE user_id = '$user_id'";
		$results = mysqli_query($conn, $sql1);
		if (mysqli_num_rows($results) > 0 ) {
			$house = mysqli_fetch_assoc($results);
			extract($house);
			?>
			<div class="container">
				<div class="container-cybod-house">
				  <div class="row">
				    <div class="col-sm-9">
				     <p class="bhod-title-display"><?php echo $house_name ?></p>
				    </div>
				    <div class="col-sm-3">
				    	<?php
				    		if ($house_status == 3) {
				    			?>
				      			<p class="bhod-status-display"><b>Status:</b><span class="pending">Pending</span></p>
				      			<?php
				    		}elseif($house_status == 4){
				    	?>
				      <p class="bhod-status-display"><b>Status:</b><span class="approved">Approved</span></p>
				  	<?php }?>
				    </div>
				  </div>
				  <div class="hr-line"></div>
				  <div class="row">
				  	<div class="col-sm-12">
				  		 <img class="bhod-image-display" src="../<?php echo $house_picture ?>" alt="dorm1">
				  	</div>
				  	<div class="col-sm-12">
				  		<p><b>Location:</b> <?php echo $house_address ?></p>
				  		<p><b>Phone Number:</b> <?php echo $house_phone_number ?></p>
				  		<p><b>Description:</b> <?php echo $house_description ?></p>
				  	</div>
				  </div>
			  </div>
			</div>
			<?php
		}else{
			?>
			<div class="container">
				<div class="container-cybod m-5 p-5">
					<h3 class="cybod pt-5 pl-5 pr-5 text-center">Create Your Boarding House/Dormitory</h3>
					<div class="button-click text-center">
						<button type="button" class="btn btn-outline-warning c-button" data-toggle="modal" data-target="#create_bhod">Click Here</button>
					</div>
				</div>
			</div>
			<?php
		}
	}
	require '../template.php';
	require 'create_bhod_modal.php';

?>