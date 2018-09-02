<?php
	function display_title(){
		echo "Boarding House & Dormitories Finder || Rooms";
	}
	function display_content(){
		?>
			<!-- <div class="container-fluid"> -->
				<!-- <h3>Contact Us</h3> -->
			<section id="contact">
				<div class="section-content">
							<h1 class="section-header"><span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Contact Us</span></h1>
							<h3>Boarding House & Dormitories Finder</h3>
				</div>
				<div class="contact-section">
					<div class="container">
					<form>
						<div class="row">
						<div class="col-md-6 form-line">
				  			<div class="form-group">
				  				<label for="exampleInputUsername">Your name</label>
						    	<input type="text" class="form-control" id="" placeholder=" Enter Name">
					  		</div>
					  		<div class="form-group">
						    	<label for="exampleInputEmail">Email Address</label>
						    	<input type="email" class="form-control" id="exampleInputEmail" placeholder=" Enter Email id">
						  	</div>	
						  	<div class="form-group">
						    	<label for="telephone">Mobile No.</label>
						    	<input type="tel" class="form-control" id="telephone" placeholder=" Enter 10-digit mobile no.">
				  			</div>
				  		</div>
				  		<div class="col-md-6">
				  			<div class="form-group">
				  				<label for ="description"> Message</label>
				  			 	<textarea  class="form-control" id="description" placeholder="Enter Your Message"></textarea>
				  			</div>
				  			<div>
				  				<button type="button" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
				  			</div>	
						</div>
						</div>
					</form>
				</div>
				</div>
			</section>
			<!-- </div> -->
		<?php
	}
	require '../template.php';

?>