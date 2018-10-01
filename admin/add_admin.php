<?php
// 	session_start();
// 	if (isset($_SESSION['user_id']) && $_SESSION['user_level'] == '1') {
 	function display_title(){
 	echo "Boarding House & Dormitories Finder || Add Admin";
 	}
 	function display_content(){
 		?>
 			<div class="container">
 			    <div class="row justify-content-center pt-5 mt-5 mb-5 pb-5">
 			        <div class="col-md-8">
 			        	<div class="alert alert-dismissible alert-success text-center" id="success_message" hidden>
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
 			                            <label for="name" class="col-md-4 col-form-label text-md-right">First Name</label>
 			                            <div class="col-md-6">
 			                                <input type="text" class="form-control fname" name="fname" placeholder="First Name" required autofocus onkeyup="this.value=this.value.replace(/[^A-Za-z\s]/g,'');">
 			                            </div>
 			                        </div>
 			                        <!-- Last Name -->
 			                        <div class="form-group row">
 			                            <label for="name" class="col-md-4 col-form-label text-md-right">Last Name</label>
 			                            <div class="col-md-6">
 			                                <input type="text" class="form-control lname" name="lname" placeholder="Last Name" required autofocus onkeyup="this.value=this.value.replace(/[^A-Za-z\s]/g,'');">
 			                            </div>
 			                        </div>
 			                        <!-- Middle Name -->
 			                        <div class="form-group row">
 			                            <label for="name" class="col-md-4 col-form-label text-md-right">Middle Name</label>
 			                            <div class="col-md-6">
 			                                <input type="text" class="form-control mname" name="mname" placeholder="Middle Name" required autofocus onkeyup="this.value=this.value.replace(/[^A-Za-z\s]/g,'');">
 			                                    <span class="invalid-feedback">
 			                                    </span>
 			                            </div>
 			                        </div>
 			                        <!-- Email address Reg -->
 			                        <div class="form-group row">
 			                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

 			                            <div class="col-md-6">
 			                                <input id="email" type="email" class="form-control email" name="email" required autofocus oninput="return validate_email()" placeholder="Email Address">
 			                                <strong><p id="confirm_email"></p></strong>
 			                            </div>
 			                        </div>
 			                        <!-- Phone Number -->
 			                        <div class="form-group row">
 			                            <label for="phone_numer" class="col-md-4 col-form-label text-md-right">Phone Number</label>
 			                            <div class="col-md-6">
 			                                <input type="tel" class="form-control phone_numer" name="phone_numer" placeholder="Phone Name" required autofocus ondrop="return false;" onpaste="return false;" onkeypress="return event.charCode>=48 && event.charCode<=57" pattern='{2}[\(]\d{2}[\)]\d{4}[\-]\d{4}' title='Phone Number (Format: +99(99)9999-9999)'>
 			                                    <span class="invalid-feedback">
 			                                    </span>

 			                            </div>
 			                        </div>
 			                        <!-- Username -->
 			                        <div class="form-group row">
 			                            <label for="name" class="col-md-4 col-form-label text-md-right">Username</label>
 			                            <div class="col-md-6">
 			                                <input id="username" type="text" class="form-control username" name="username" required autofocus oninput="return validate_username()" placeholder="Username">
 			                                   <strong><p id="confirm_username"></p></strong>
 			                            </div>
 			                        </div>
 			                        <!-- Password Register -->
 			                        <div class="form-group row">
 			                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

 			                            <div class="col-md-6">
 			                                <input id="password" type="password" class="form-control password" name="password" minlength="6" required placeholder="Password" onblur="return validate()">
 			                            </div>
 			                        </div>
 			                        <!-- Confirm password -->
 			                        <div class="form-group row">
 			                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

 			                            <div class="col-md-6">
 			                                <input id="password-confirm" type="password" class="form-control" oninput="return validate()" name="password_confirmation" required placeholder="Confirm Password">
 			                                    <strong><p id="msgconfirmpass"></p></strong>
 			                            </div>
 			                        </div>

 			                        <div class="form-group row mb-0">
 			                            <div class="col-md-6 offset-md-4">
 			                                <button type="button" id="register_submit" disabled class="btn btn-primary">
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
 							console.log(data);
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
 						}
 					})
 				})
 				})
 			</script>
 			<script type="text/javascript" src="../assets/js/validate_password.js"></script>
 			<script type="text/javascript" src="../assets/js/admin_validate_username_exist.js"></script>
 			<script type="text/javascript" src="../assets/js/validate_email_exist.js"></script>
 		<?php
 	}
 	require '../template.php';
 	// }else{
 	// 	header('Location: ../login.php');
 	// }
?>
