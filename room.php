<?php
	function display_title(){
		echo "Boarding House & Dormitories Finder || Rooms";
	}
	function display_content(){
		?>
			<div class="container">
				<h3 class="rooms">Rooms</h3>
				<div class="row mt-3">
				    <!--Grid column-->
				    <div class="col-lg-5 col-xl-4 mb-4">
				        <!--Featured image-->
				        <div class="view overlay rounded z-depth-1">
				            <img class="img-fluid" src="assets/img/boarding1.png" alt="boarding1">
				            <a>
				                <div class="mask rgba-white-slight"></div>
				            </a>
				        </div>
				    </div>
				    <!--Grid column-->

				    <!--Grid column-->
				    <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
				        <h3 class="mb-3 font-weight-bold dark-grey-text">
				            <a href="show_room1.php"><strong>Royal Boarding House</strong></a>
				        </h3>
				        <p class="grey-text text-justify">Tarlac City</p>
				        <p>Posted by:
				            <a class="font-weight-bold dark-grey-text">Dennis</a>, July 20, 2018</p>
				    </div>
				    <!--Grid column-->
				</div>
				<!--Grid row-->

				<div class="row mt-3">
				    <!--Grid column-->
				    <div class="col-lg-5 col-xl-4 mb-4">
				        <!--Featured image-->
				        <div class="view overlay rounded z-depth-1">
				            <img class="img-fluid" src="assets/img/boarding2.jpg" alt="boarding2">
				            <a>
				                <div class="mask rgba-white-slight"></div>
				            </a>
				        </div>
				    </div>
				    <!--Grid column-->

				    <!--Grid column-->
				    <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
				        <h3 class="mb-3 font-weight-bold dark-grey-text">
				            <a href="show_room2.php"><strong>Agustin Boarding House</strong></a>
				        </h3>
				        <p class="grey-text text-justify">Tarlac City</p>
				        <p>Posted by:
				            <a class="font-weight-bold dark-grey-text">Wilford</a>, July 18, 2018</p>
				    </div>
				    <!--Grid column-->
				</div>
				<!--Grid row-->
				<div class="row mt-3">
				    <!--Grid column-->
				    <div class="col-lg-5 col-xl-4 mb-4">
				        <!--Featured image-->
				        <div class="view overlay rounded z-depth-1">
				            <img class="img-fluid" src="assets/img/dorm1.jpg" alt="dorm1">
				            <a>
				                <div class="mask rgba-white-slight"></div>
				            </a>
				        </div>
				    </div>
				    <!--Grid column-->

				    <!--Grid column-->
				    <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
				        <h3 class="mb-3 font-weight-bold dark-grey-text">
				            <a href="show_room3.php"><strong>Sy Dorm</strong></a>
				        </h3>
				        <p class="grey-text text-justify">Tarlac City</p>
				        <p>Posted by:
				            <a class="font-weight-bold dark-grey-text">Kobe</a>, July 17, 2018</p>
				    </div>
				    <!--Grid column-->
				</div>
				<!--Grid row-->
			</div>
		<?php
	}
	require 'template.php';

?>