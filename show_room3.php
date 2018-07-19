<?php
	function display_title(){
		echo "Boarding House & Dormitories Finder || Rooms";
	}
	function display_content(){
		?>
			<div class="container">
				<div class="refresh mb-5">
				<a href="room.php" class="btn btn-outline-info mt-5">Go Back</a>
				<!--Card-->
				   <div class="card card-cascade wider reverse my-4">

				       <!--Card image-->
				       <div class="view overlay">
				           <img class="img-fluid img-view-room" src="assets/img/dorm1.jpg" alt="dorm1">
				           <a href="#!">
				               <div class="mask rgba-white-slight"></div>
				           </a>
				       </div>
				       <!--/Card image-->
				       <hr>
				       <!--Card content-->
				       <div class="card-body text-center">
				           <!--Title-->
				           <h4 class="card-title"><strong>Agustin Boarding House</strong></h4>
				           <small><p>Posted by:
				            <a class="font-weight-bold dark-grey-text">Kobe</a>, July 17, 2018</p></small>
				       </div>
				       	</div>
				       	</form>
				       	</div>
				       </div>
				       </div>
				   </div>
				   <!--/.Card-->
			</div>
		<?php
	}
	require 'template.php';

?>