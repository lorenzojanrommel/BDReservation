<?php
 	function display_title(){
 	echo "Boarding House & Dormitories Finder || Add Admin";
 	}
 	function display_content(){
	// session_start();
	if (isset($_SESSION['user_level']) && $_SESSION['user_level'] == '1') {
 		?>
 			<div class="container">
 			    <div class="row justify-content-center pt-5 mt-5 mb-5 pb-5">
 			        <div class="col-md-8">
 			        	<div class="alert alert-dismissible alert-success text-center" id="success_message" hidden>
 			        	  <button type="button" class="close" data-dismiss="alert">&times;</button>
 			        	  <p></p>
 			        	</div>
 			        	<div class="alert alert-dismissible alert-danger text-center" id="danger_message" hidden>
 			        	  <button type="button" class="close" data-dismiss="alert">&times;</button>
 			        	  <p></p>
 			        	</div>
 			        	
 			            <div class="card card-default">
 			                <div class="card-header"><h4>Add New Admin</h4></div>

 			                <div class="card-body">
 			                    <!-- <form method="POST" action="add_admin_endpoint.php"> -->
 			                    	<form>
 			                    	<!-- First Name -->
 			                        <div class="form-group row">
 			                            <label for="name" class="col-md-4 col-form-label text-md-right">First Name<span class="important">*</span></label>
 			                            <div class="col-md-6">
 			                                <input type="text" class="form-control fname" name="fname" placeholder="First Name" required autofocus oninput="this.value=this.value.replace(/[^A-Za-z\s]/g,'');">
 			                            </div>
 			                        </div>
 			                        <!-- Last Name -->
 			                        <div class="form-group row">
 			                            <label for="name" class="col-md-4 col-form-label text-md-right">Last Name<span class="important">*</span></label>
 			                            <div class="col-md-6">
 			                                <input type="text" class="form-control lname" name="lname" placeholder="Last Name" required autofocus oninput="this.value=this.value.replace(/[^A-Za-z0-9\s]/g,'');">
 			                            </div>
 			                        </div>
 			                        <!-- Middle Name -->
 			                        <!-- <div class="form-group row">
 			                            <label for="name" class="col-md-4 col-form-label text-md-right">Middle Name</label>
 			                            <div class="col-md-6">
 			                                <input type="text" class="form-control mname" name="mname" placeholder="Middle Name" required autofocus oninput="this.value=this.value.replace(/[^A-Za-z\s]/g,'');">
 			                                    <span class="invalid-feedback">
 			                                    </span>
 			                            </div>
 			                        </div> -->
 			                        <!-- Email address Reg -->
 			                        <div class="form-group row">
 			                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address<span class="important">*</span></label>

 			                            <div class="col-md-6">
 			                                <input id="email" type="email" class="form-control email" name="email" required autofocus onblur="return validate_email()" placeholder="Email Address">
 			                                <strong><p id="confirm_email"></p></strong>
 			                            </div>
 			                        </div>
 			                        <!-- Phone Number -->
 			                        <div class="form-group row">
 			                            <label for="phone_numer" class="col-md-4 col-form-label text-md-right">Phone Number<span class="important">*</span></label>
 			                            <div class="col-md-6">
 			                                <input type="tel" class="form-control phone_number" name="phone_numer" id="phone_number" placeholder="Phone Name" required autofocus ondrop="return false;" onpaste="return false;" onkeypress="return event.charCode>=48 && event.charCode<=57" pattern='^(09|\+639)\d{9}$' title='Format: 0999-999-9999 or +(639)999-999-9999' onblur="return validate_phone()">
 			                                <strong><p id="confirm_phone_number"></p></strong>

 			                            </div>
 			                        </div>
 			                        <!-- Username -->
 			                        <div class="form-group row">
 			                            <label for="name" class="col-md-4 col-form-label text-md-right">Username<span class="important">*</span></label>
 			                            <div class="col-md-6">
 			                                <input id="username" type="text" class="form-control username" name="username" required autofocus onblur="return validate_username()" placeholder="Username">
 			                                   <strong><p id="confirm_username"></p></strong>
 			                            </div>
 			                        </div>
 			                        <!-- Password Register -->
 			                        <div class="form-group row">
 			                            <label for="password" class="col-md-4 col-form-label text-md-right">Password<span class="important">*</span></label>

 			                            <div class="col-md-6">
 			                                <input id="password" type="password" class="form-control password" name="password" minlength="6" required placeholder="Password" onblur="return validate()">
 			                            </div>
 			                        </div>
 			                        <!-- Confirm password -->
 			                        <div class="form-group row">
 			                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password<span class="important">*</span></label>

 			                            <div class="col-md-6">
 			                                <input id="password-confirm" type="password" class="form-control" oninput="return validate()" name="password_confirmation" required placeholder="Confirm Password">
 			                                    <strong><p id="msgconfirmpass"></p></strong>
 			                            </div>
 			                        </div>

 			                        <div class="form-group row mb-0">
 			                            <div class="col-md-6 offset-md-4">
 			                                <button type="button" name="reg_admin_btn" id="register_submit" disabled class="btn btn-primary">
 			                                    Register
 			                                </button>
 			                            </div>
 			                        </div>
 			                    </form>
 			                </div>
 			            </div>
 			        </div>
 			    </div>
 			</div>
 			<script type="text/javascript" src="../assets/js/admin_validate_email.js"></script>
 			<script
 			  src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 			<script type="text/javascript">
 				$('input').keyup(function() {
 				    	// console.log(this);
 				        var empty = false;
 				        var password = $('#password').val();
 				        var confirm_password = $('#password-confirm').val();
 				        $('form > div > div > input').each(function() {
 				            if ($(this).val() == '') {
 				                empty = true;
 				            }
 				        });
 				        if (empty) {
 				            $('#register_submit').attr('disabled', 'disabled');
 				        } else if (empty){
 				            $('#register_submit').removeAttr('disabled');
 				        }else if ($('#confirm_email').text() === "Invalid"){
 				            $('#register_submit').attr('disabled', 'disabled');
 				        }
 				    });
 				$(document).ready(function(){
 				$('#register_submit').click(function(){
 					var fname = $('.fname').val();
 					var lname = $('.lname').val();
 					var mname = $('.mname').val();
 					var email = $('.email').val();
 					var phone_numer = $('.phone_numer').val();
 					var username = $('.username').val();
 					var password = $('.password').val();
 					$.ajax({
 						method : 'POST',
 						url : 'add_admin_endpoint.php',
 						data: {
 							fname : fname,
 							lname : lname,
 							mname : mname,
 							email : email,
 							phone_numer : phone_numer,
 							username : username,
 							password : password
 						},
 						success: function(data){
 							// console.log(data);
 							if (data == "New Admin Added") {
 							$('form').trigger("reset");
 							$('#success_message').removeAttr('hidden');
 							$('#register_submit').attr('disabled', 'disabled');
 							$('#confirm_email').hide();
 							$('#confirm_username').hide();
 							$('#msgconfirmpass').hide();
 							$('#success_message').fadeIn().html(data);
 							setTimeout(function(){  
 							$('#success_message').fadeOut("Slow");  
 							}, 3000);
 						}else if (data == "Phone Number Format: 0999 999 9999"){
 							$('form').trigger("reset");
 							$('#confirm_email').hide();
 							$('#confirm_username').hide();
 							$('#msgconfirmpass').hide();
 							$('#danger_message').removeAttr('hidden');
 							$('#register_submit').attr('disabled', 'disabled');
 							$('.phone_numer').trigger("reset");
 							$('#danger_message').fadeIn().html(data);
 						}
 						}
 					})
 				})
 				})
 			</script>
 			<script type="text/javascript" src="../assets/js/validate_password.js"></script>
 			<script type="text/javascript" src="../assets/js/admin_validate_username_exist.js"></script>
 			<script type="text/javascript" src="../assets/js/validate_email_exist.js"></script>
 			<script type="text/javascript" src="../assets/js/admin_phone_validation.js"></script>
 		<?php
 	}else{
 		// session_start();
 		session_destroy();
 		header('Location: ../login.php');
 		// echo "Hey";
 	}
 	}
 	require '../template.php';
?>
