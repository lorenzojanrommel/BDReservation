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
				<?php
						ob_start();
						$full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
						if (strpos($full_url, "success=success") == true) {
							?>
							<div class="alert alert-dismissible alert-success text-center mt-3" id="success_message">
 			        	 	<button type="button" class="close" data-dismiss="alert">&times;</button>
 			        	 	<span>Sucessfully Updated!</span>
 			        		</div>
							<?php
						}
						?>
				<div class="container-cybod-house">
				  <div class="row">
				  	<div class="col-sm-1 edit-house-button text-right">
				    	<a href="edit_house.php?id-house=<?php echo $house_id;?>"><i class="fas fa-cog"></i></i></a>
				  	</div>
				    <div class="col-sm-8">
				     <p class="bhod-title-display"><?php echo $house_name ?></p>
				    </div>
				    <div class="col-sm-2">
				    	<?php
				    		if ($house_status == 3) {
				    			?>
				      			<p class="bhod-status-display"><b>Status:</b><span class="pending">Pending</span></p>
				      			<?php
				    		}elseif($house_status == 4){
				    	?>
				      <p class="bhod-status-display"><b>Status:</b><span class="approved">Approved</span></p>
				  	<?php }elseif($house_status == 5){
				  		?>
				      <p class="bhod-status-display"><b>Status:</b><span class="denied">Denied</span></p>
				      <?php
				  	}?>
				    </div>
				  </div>
				  <div class="hr-line"></div>
				  <div class="row">
				  	<div class="col-sm-12">
				  		 <img class="bhod-image-display" src="<?php echo $house_picture ?>" alt="dorm1">
				  	<div class="hr-line"></div>
				  	</div>
				  	<div class="col-sm-12">
				  		<p><b>House Category:</b><?php 
				  			if ($house_category_id == 1) {
				  				?>
				  				<span>Boarding House</span>
				  				<?php
				  			}else{
				  				?>
				  				<span>Dormitory</span>
				  				<?php
				  			}
				  		?></p>
				  		<p><b>Location:</b> <span id="loc"><?php echo $house_address ?></span></p>
				  		<p><b>Phone Number:</b> <?php echo $house_phone_number ?></p>
				  		<p><b>Description:</b> <?php echo $house_description ?></p>
				  	</div>
				  </div>
				  <div class="map" onload="initMap">
				  	<h5>Map</h5>
				  	<div id="map-display">
				  	</div>
				  </div>
			  </div>
			</div>
			<?php
		}else{
			?>
			<div class="container">
				<div class="container-cybod m-5 p-1">
					<?php
					ob_start();
					$full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
					if (strpos($full_url, "category=empty") == true) {
						?>
					<div class="alert alert-dismissible alert-danger text-center mt-2 pl-2 pr-2" id="error_message">
 			        <button type="button" class="close" data-dismiss="alert">&times;</button>
 			        <span> Please select your house category Dormitory/Boarding House</span>
 			        </div>
 			        <h3 class="cybod pt-2 pl-5 pr-5 text-center">Create Your Boarding House/Dormitory</h3>
 			        <div class="button-click text-center">
 			        	<button type="button" class="btn btn-outline-warning c-button mb-5" data-toggle="modal" data-target="#create_bhod">Click Here</button>
 			        </div>
 			        <?php
 			    	}else{
 			        ?>
					<h3 class="cybod pt-5 pl-5 pr-5 text-center">Create Your Boarding House/Dormitory</h3>
					<div class="button-click text-center">
						<button type="button" class="btn btn-outline-warning c-button" data-toggle="modal" data-target="#create_bhod">Click Here</button>
					</div>
					<?php
					}
					?>
				</div>
			</div>
			<?php
		}
	}
	require '../template.php';
	require 'create_bhod_modal.php';
?>
	<script type="text/javascript">
	function initMap() {
		var location = $('span#loc').text();
		// console.log(location);
		$.ajax({
			method : 'GET',
			url : 'https://maps.googleapis.com/maps/api/geocode/json',
			data : {
				address : location,
				key : 'AIzaSyBfbli7Zq07Uw96NZlB0DxA5uzQVaBTFa0'
			},
			success : function(data){
				// log full response
				// console.log(data);
				// Formatted Address
				var formattedAddress = data.results[0].formatted_address;
				var lat = data.results[0].geometry.location.lat;
				var lng = data.results[0].geometry.location.lng;
				// Map Option
				var options = {
					zoom : 13,
					center : {
							lat: parseFloat(lat),
							lng: parseFloat(lng) }
				}
				// console.log(options);
				// // New Map
				var map = new google.maps.Map(document.getElementById('map-display'), options);
				// console.log(map);
				// Add Market
				var marker = new google.maps.Marker({
					position: {lat: parseFloat(lat), lng: parseFloat(lng) },
					map : map,
				})
			},
			error : function(data){
				console.log(data);
			}
		})
	}
	</script>
	<script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBfbli7Zq07Uw96NZlB0DxA5uzQVaBTFa0&callback=initMap">
    </script>