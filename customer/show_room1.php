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
				           <img class="img-fluid img-view-room" src="../assets/img/boarding1.png" alt="boarding1">
				           <a href="#!">
				               <div class="mask rgba-white-slight"></div>
				           </a>
				       </div>
				       <!--/Card image-->
				       <hr>
				       <!--Card content-->
				       <div class="card-body text-center">
				           <!--Title-->
				           <h4 class="card-title"><strong>Royal Boarding House</strong></h4>
				           <small><p>Posted by:
				            <a class="font-weight-bold dark-grey-text">Dennis</a>, July 20, 2018</p></small>
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