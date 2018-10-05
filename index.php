<?php
	function display_title(){
		echo "Boarding House & Dormitories Finder";
	}
	function display_content(){
		require 'condb.php';
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
		<div class="container">
		<div class="row justify-content-center mt-5">
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="card card-sm">
                        <div class="card-body row no-gutters align-items-center">
                            <div class="col-auto">
                                <i class="fas fa-search h4 text-body"></i>
                            </div>
                            <!--end of col-->
                            <div class="col">
                                <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search Dormitory or Boarding House Location" name="search_bhod_location" id="search_bhod_location">
                            </div>
                            <!--end of col-->
                            <div class="col-auto">
                                <button class="btn btn-lg btn-success" type="submit" name="button_search" id="button_search">Search</button>
                            </div>
                            <!--end of col-->
                        </div>
                    </div>
                </div>
                <!--end of col-->
            </div>
            </div>
                        <div class="container">
				<h3 class="house">House</h3>
			</div>
			<div class="container house-list-container">
				<?php 
				$sql = "SELECT * FROM houses WHERE house_status = '4' ";
				$results = mysqli_query($conn, $sql);
				while ($row = mysqli_fetch_assoc($results)) {
					extract($row);
				$sql1 = "SELECT * FROM rooms WHERE house_id = '$house_id'";
				$results1 = mysqli_query($conn, $sql1);
				$count_room = mysqli_num_rows($results1);
				if ($count_room > 0) {
					?>
					<div class="row mt-3">
					    <!--Grid column-->
					    <div class="col-lg-5 col-xl-4 mb-4">
					        <!--Featured image-->
					        <div class="view overlay rounded z-depth-1">
					            <img class="img-fluid house-picture" src="onwer/<?php echo $house_picture ?>" alt="boarding1">
					            <a>
					                <div class="mask rgba-white-slight"></div>
					            </a>
					        </div>
					    </div>
					    <!--Grid column-->

					    <!--Grid column-->
					    <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
					        <h3 class="mb-3 font-weight-bold dark-grey-text">
					            <a href="view_house.php?id=<?php echo $house_id?>"><strong><?php echo $house_name ?></strong></a>
					        </h3>
					        <p class="grey-text text-justify"><?php echo $house_address ?> </p>
					    </div>
					    <!--Grid column-->
					</div>
					<!--Grid row-->
					<?php
				}
				};
				?>
			</div>
		<?php
	}
	if (isset($_SESSION['user_id'])) {
		require '../template.php';
	}else{
		require 'template.php';
	}
?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#search_bhod_location').keyup(function(){
			var search = $('#search_bhod_location').val();
			// console.log(search);
			if (search != '') {
				$.ajax({
					method: 'POST',
					url: 'search.php',
					data: {
						search : search
					},
					success:function(data){
						$('.house-list-container').html(data);
					}
				})
			}else{
				$.ajax({
					method: 'POST',
					url: 'search.php',
					data: {
						empty : search
					},
					success:function(data){
						$('.house-list-container').html(data);
					}
				})
			}
		})
	})
</script>