<?php
	function display_title(){
		echo "Boarding House & Dormitories Finder || Rooms";
	}
	function display_content(){
		require 'condb.php';
		?>
			<div class="container house-list-container">
				<h3 class="house">House</h3>
				<?php 
				$sql = "SELECT * FROM houses WHERE house_status = '4' ";
				$results = mysqli_query($conn, $sql);
				$count = mysqli_num_rows($results);
				if($count > 0) {
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
					            <img class="img-fluid house-picture" src="<?php echo $house_picture ?>" alt="boarding1">
					            <a>
					                <div class="mask rgba-white-slight"></div>
					            </a>
					        </div>
					    </div>
					    <!--Grid column-->

					    <!--Grid column-->
					    <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
					        <h3 class="mb-3 font-weight-bold dark-grey-text">
					            <a href="show_room.php?id=<?php echo $house_id?>"><strong><?php echo $house_name ?></strong></a>
					        </h3>
					        <p class="grey-text text-justify"><?php echo $house_address ?> </p>
					    </div>
					    <!--Grid column-->
					</div>
					<!--Grid row-->
					<?php
				}
				}
			}else{
				?>
				<h6>No registered house found!</h6>
				<?php	
			};
				?>
				
			</div>
		<?php
	}
	require 'template.php';

?>