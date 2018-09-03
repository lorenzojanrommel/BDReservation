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
				  	<div class="hr-line"></div>
				  	</div>
				  	<div class="col-sm-12">
				  		<p><b>Location:</b> <span id="location"><?php echo $house_address ?></span></p>
				  		<p><b>Phone Number:</b> <?php echo $house_phone_number ?></p>
				  		<p><b>Description:</b> <?php echo $house_description ?></p>
				  	</div>
				  </div>
				  <div class="map" onload="initMap">
				  	<h5>Map</h5>
				  	<div id="map-display">
				  		<!-- <p id="lat">15.69</p>
				  		<p id="lng">120.41</p> -->
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
	<script type="text/javascript">
//	$(document).ready(function() {
//		var location = $('span#location').text();
//		console.log(location);
//		$.ajax({
//			method : 'GET',
//			url : 'https://maps.googleapis.com/maps/api/geocode/json',
//			data : {
//				address : location,
//				key : 'AIzaSyC13PAMU-yO3K-JW2VmMmuZZ2YalWmc7GQ'
//			},
//			success : function(data){
//				// log full response
//				console.log(data);
//				// Formatted Address
//				var formattedAddress = data.results[0].formatted_address;
//				var lat = data.results[0].geometry.location.lat;
//				var lng = data.results[0].geometry.location.lng;
//				console.log(lat);
//				console.log(lng);
//			},
//			error : function(data){
//				console.log(data);
//			}
//		})
//	}) 
	function initMap() {
		// var getLat = $('#lat').text();
		// var getLng = $('#lng').text();
		// console.log(getLng);
		// console.log(getLat);
		// Map Option
		var options = {
			zoom : 11,
			center : {
					lat: 15.4755,
					lng: 120.5963}
		}
		// New Map
		var map = new google.maps.Map(document.getElementById('map-display'), options);
		// Add Market
		// var logo = '../assets/img/bhod_logo.png';
		var marker = new google.maps.Marker({
			position: {lat:15.4755, lng:120.5963},
			map : map,
		})
	}
	</script>
	<script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC13PAMU-yO3K-JW2VmMmuZZ2YalWmc7GQ&callback=initMap">
    </script>
