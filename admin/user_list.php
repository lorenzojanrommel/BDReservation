<?php
	function display_title(){
		echo "Boarding House & Dormitories Finder";
	}
	function display_content(){
		?>
		<div class="container">
			<div class="col-sm-12">
	              <!--begin tabs going in wide content -->
	               <ul class="nav nav-tabs content-tabs" id="maincontent" role="tablist">
	                  <li class="active"><a href="#home" role="tab" data-toggle="tab">Home</a></li>
	                  <li><a href="#profile" role="tab" data-toggle="tab">Profile</a></li>
	                  <li class="dropdown">
	                     <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
	                     <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
	                        <li><a href="#dropdown1" tabindex="-1" role="tab" data-toggle="tab">@fat</a></li>
	                        <li><a href="#dropdown2" tabindex="-1" role="tab" data-toggle="tab">@mdo</a></li>
	                     </ul>
	                  </li>
	               </ul><!--/.nav-tabs.content-tabs -->
	              
	          
	               <div class="tab-content">
	                 
	                  <div class="tab-pane fade in active" id="home">
	                     <p>Home Content : Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
	                  </div><!--/.tab-pane -->
	                 
	                  <div class="tab-pane fade" id="profile">
	                     <p>Profile Content : Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
	                  </div><!--/.tab-pane -->
	                 
	                  <div class="tab-pane fade" id="dropdown1">
	                     <p>Dropdown1 - Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
	                  </div><!--/.tab-pane -->
	                 
	                  <div class="tab-pane fade" id="dropdown2">
	                     <p>Dropdown 2 - Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
	                  </div><!--/.tab-pane -->
	                 
	               </div><!--/.tab-content -->
	              
	            </div><!--/.col-sm-8 -->
	           
	         </div><!--/.row -->
	        
	      </div><!--/.container -->
	    </div>
		</div>
		<?php

	}
	require "../template.php";
?>

<script type="text/javascript">
	$(document).ready(function() {

	    // DEPENDENCY: https://github.com/flatlogic/bootstrap-tabcollapse


	    // if the tabs are in a narrow column in a larger viewport
	    $('.sidebar-tabs').tabCollapse({
	        tabsClass: 'visible-tabs',
	        accordionClass: 'hidden-tabs'
	    });

	    // if the tabs are in wide columns on larger viewports
	    $('.content-tabs').tabCollapse();

	    // initialize tab function
	    $('.nav-tabs a').click(function(e) {
	        e.preventDefault();
	        $(this).tab('show');
	    });

	    // slide to top of panel-group accordion
	    $('.panel-group').on('shown.bs.collapse', function() {
	        var panel = $(this).find('.in');
	        $('html, body').animate({
	            scrollTop: panel.offset().top + (-60)
	        }, 500);
	    });
</script>