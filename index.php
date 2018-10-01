<?php
	function display_title(){
		echo "Boarding House & Dormitories Finder";
	}
	function display_content(){
		?>
			<div class="par1-index">
				<div class="container">
					<div class="title-header">
						<h1 class="title-header text-uppercase">Boarding House <span class="and">&</span> <span class="dorm">Dormitories <span class="finder">Finder</span></span></h1>
					</div>
				</div>
			</div>
			<div class="container fbm-container">
				<div class="row">
					<div class="col-sm-12 text-center mt-3">
						<h5 class="guide-fbm">Find, Book & Move in with Ease</h5>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2 col-sm-12 col-md-12 text-center">
						<img src="assets/img/guide/mag.PNG" alt="Search" class="img-fluid">
						<div class="guide-title text-center">
							<h4 class="guide-title">SEARCH</h4>
						</div>
						<div class="guide-text text-center">
							<p class="guide-text">Find the best room or unit that matches your needs</p>
						</div>
					</div>
					<div class="arrow-guide text-center">
						<img src="assets/img/guide/arrow.PNG" alt="arrow">
					</div>
					<div class="col-lg-2 col-sm-12 col-md-12 text-center">
						<img src="assets/img/guide/view.PNG" alt="View" class="img-fluid">
						<div class="guide-title text-center">
							<h4 class="guide-title">VIEW</h4>
						</div>
						<div class="guide-text text-center">
							<p class="guide-text">View the room online, ask us anything or arrange to visit</p>
						</div>
					</div>
					<div class="arrow-guide text-center ml-3">
						<img src="assets/img/guide/arrow.PNG" alt="arrow">
					</div>
					<div class="col-lg-2 col-sm-12 col-md-12 text-center">
						<img src="assets/img/guide/book.PNG" alt="Book" class="img-fluid">
						<div class="guide-title text-center">
							<h4 class="guide-title">BOOK</h4>
						</div>
						<div class="guide-text text-center">
							<p class="guide-text">Book online instantly with our BOARDING HOUSE & DORMITORIES FINDER</p>
						</div>
					</div>
					<div class="arrow-guide text-center">
						<img src="assets/img/guide/arrow.PNG" alt="arrow">
					</div>
					<div class="col-lg-2 col-sm-12 col-md-12 text-center">
						<img src="assets/img/guide/kama.PNG" alt="kama" class="img-fluid">
						<div class="guide-title text-center">
							<h4 class="guide-title">MOVE IN</h4>
						</div>
						<div class="guide-text text-center">
							<p class="guide-text">Check-in , make yourself at home & enjoy!</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row place-container">
				<div class="places row clearfix">
					<div class="col-sm-6 col-md-12 col-lg-6 place-img">
						<div class="place-img">
					<img src="assets/img/places/church.png" class="img-fluid" alt="church">
					</div>
					</div>
				<div class="col-sm-12 col-md-12 col-lg-6 places">
					<div class="container">
					<h5 class="mt-5 place-title">Roman Catholic Diocese of Tarlac</h5>
					<p class="text-justify mt-2 place-text">The Roman Catholic Diocese of Tarlac is a diocese of the Roman Catholic Church comprising the whole civil province of Tarlac in the Philippines. The seat of Roman Rite Latin Church diocese is the Saint Sebastian Cathedral in Tarlac City.</p>
					</div>
				</div>
				</div>
				<div class="row places">
				<div class="col-sm-6 col-md-12 col-lg-6">
					<div class="container">
					<h5 class="mt-5 place-title">Corazon Aquino Monument in Tarlac City</h5>
					<p class="text-justify mt-2 place-text"> Aquino Family Ancestral House-Concepcion Tarlac - Aquino family ancestral house in Concepcion, Tarlac. Aquino unveils historical marker at ancestral home in Tarlac September 10th, 2011. The National Historical Commission declared the Aquino house as a historical site in 1987 because of its significance as the home of patriots from the Aquino family based on its Board Resolution No. 1 Series of 1987. Three generations of Aquinos lived in the house since it was built in 1939, according to Malacañang.</p>
					</div>
				</div>
					<div class="col-sm-6 col-md-12 col-lg-6 place-img">
					<img src="assets/img/places/corazon.JPG" class="img-fluid place-images" alt="church">
					</div>
				</div>
			</div>
		<?php
	}
	require 'template.php';

?>