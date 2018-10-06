<?php
	function display_title(){
		echo "Boarding House & Dormitories Finder";
	}
	function display_content(){
		?>
		<div class="container p-5 room_msg_error">
			<div class="row">
				<div class="col-sm-12">
					<h4 class="text-center text-success">Your Reservation Has Been Sent!</h4>
					<p class="text-center">Wait for the owner Confirmation</p>
					<p class="text-center"></p>
				</div>
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-6 go-back">
							<a href="customer_house_list.php"><button class="btn btn-outline-warning mt-4">Go back!</button></a>
						</div>
						<div class="col-sm-6">
							<h6 class="font-weight-bold">Payment Method:</h6>
							<a href="https://app.coins.ph/welcome/login" target="_blank"><img src="../assets/img/coinsph.jpg" class="coin-ph"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php

	}
	require "../template.php";
?>

