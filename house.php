<?php
	function display_title(){
		echo "Boarding House & Dormitories Finder";
	}
	function display_content(){
		?>

		<div class="container mt-3 mb-5">
			  <ul class="nav nav-tabs" role="tablist">
			  <li class="nav-item">
			    <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-controls="home">Home</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Profile</a>
			  </li>
			</ul>
			<div class="tab-content">
			  <div class="tab-pane active" id="home" role="tabpanel">1</div>
			  <div class="tab-pane" id="profile" role="tabpanel">..2.</div>
			</div>
		</div>
		<?php

	}
	require "template.php";
?>

