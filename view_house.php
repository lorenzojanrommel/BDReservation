<?php
	function display_title(){
		echo "Boarding House & Dormitories Finder";
	}
	function display_content(){
		require 'condb.php';
		$house_id = $_GET['id'];
		$house = "SELECT * FROM houses WHERE house_id = '$house_id'";
		$house_results = mysqli_query($conn, $house);
		$house_row = mysqli_fetch_assoc($house_results);
		extract($house_row);
		?>
		<div class="house-view-container mb-5 pb-1">
			<div class="container mt-3">
				<div class="row border-house-view">
					<div class="col-sm-12">
					<h3 class="text-center house-name"><?php echo $house_name?></h3>
					</div>
					<div class="col-sm-12">
						<div class="img-container house_picture">
						<img src="owner/<?php echo $house_picture; ?>" class="house_picture" alt="<?php echo $house_name;?>">
						</div>
					</div>
					<div class="col-sm-12 mt-3">
						<!-- tab -->
						<ul class="nav nav-tabs" id="myTab" role="tablist">
						  <li class="nav-item">
						    <a class="nav-link active" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="true">Home</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" id="location-tab" data-toggle="tab" href="#location" role="tab" aria-controls="location" aria-selected="false">Location</a>
						  </li>
						</ul>
						<div class="tab-content" id="myTabContent">
						  <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">
						  <div class="row p-3">
						  	<div class="col-sm-12">
						  		<h6><span class="about-house-view">Address:</span> <span id="loc"><?php
						  		echo $house_address;
						  		?></span></h6>
						  		<h6><span class="about-house-view">Phone Number:</span> <?php echo $house_phone_number; ?></h6>
						  		<h6><span class="about-house-view">House Description: </span><div class="house-description"><?php
						  		echo $house_description; 
						  		?>
						  		</div></h6>
						  	</div>
						  </div>
						  </div>
						  <div class="tab-pane fade" id="location" role="tabpanel" aria-labelledby="location-tab">
						  	
					  		<div class="map" onload="initMap">
					  			<h5>Map</h5>
					  			<div id="map-display">
					  				<!-- <p id="lat">15.69</p>
					  				<p id="lng">120.41</p> -->
					  			</div>
						  	</div>
						  </div>
						</div>
						<!-- end tab -->
					</div>
					<div class="col-sm-12 text-center mb-3 mt-4">
						<form method="POST" action="show_room.php?id=<?php echo $house_id?>">
							<button class="btn btn-warning" type="submit">View Rooms</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
		</div>
		<?php

	}
	require "template.php";
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