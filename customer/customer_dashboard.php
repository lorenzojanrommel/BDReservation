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
						<img src="../assets/img/guide/mag.PNG" alt="Search" class="img-fluid guide-img">
						<div class="guide-title text-center">
							<h4 class="guide-title">SEARCH</h4>
						</div>
						<div class="guide-text text-center">
							<p class="guide-text">Find the best room or unit that matches your needs</p>
						</div>
					</div>
					<div class="arrow-guide text-center">
						<img src="../assets/img/guide/arrow.PNG" alt="arrow">
					</div>
					<div class="col-lg-2 col-sm-12 col-md-12 text-center">
						<img src="../assets/img/guide/view.PNG" alt="View" class="img-fluid guide-img">
						<div class="guide-title text-center">
							<h4 class="guide-title">VIEW</h4>
						</div>
						<div class="guide-text text-center">
							<p class="guide-text">View the room online, ask us anything or arrange to visit</p>
						</div>
					</div>
					<div class="arrow-guide text-center ml-3">
						<img src="../assets/img/guide/arrow.PNG" alt="arrow">
					</div>
					<div class="col-lg-2 col-sm-12 col-md-12 text-center">
						<img src="../assets/img/guide/book.PNG" alt="Book" class="img-fluid guide-img">
						<div class="guide-title text-center">
							<h4 class="guide-title">BOOK</h4>
						</div>
						<div class="guide-text text-center">
							<p class="guide-text">Book online instantly with our BOARDING HOUSE & DORMITORIES FINDER</p>
						</div>
					</div>
					<div class="arrow-guide text-center">
						<img src="../assets/img/guide/arrow.PNG" alt="arrow">
					</div>
					<div class="col-lg-2 col-sm-12 col-md-12 text-center">
						<img src="../assets/img/guide/kama.PNG" alt="kama" class="img-fluid guide-img">
						<div class="guide-title text-center">
							<h4 class="guide-title">MOVE IN</h4>
						</div>
						<div class="guide-text text-center">
							<p class="guide-text">Check-in , make yourself at home & enjoy!</p>
						</div>
					</div>
				</div>
			</div>
		<?php
	}
	require '../template.php';

?>