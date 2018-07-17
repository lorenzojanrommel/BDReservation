<?php
 	function display_title(){
 	echo "Boarding House & Dormitories Finder || Login";
 	}
 	function display_content(){
 		?>
 			<div class="container">
 			    <div class="row justify-content-center pt-5 mt-5">
 			        <div class="col-md-8">
 			            <div class="card card-default">
 			                <div class="card-header">Register</div>

 			                <div class="card-body">
<<<<<<< HEAD
 			                    <form method="POST" action="add_user_owner.php">
=======
 			                    <form method="POST" action="authenticate.php">
>>>>>>> 7a6aee47a6e6ec63e7b01a4581c19f3fa9cd978d
 			                    	<!-- First Name -->
 			                        <div class="form-group row">
 			                            <label for="name" class="col-md-4 col-form-label text-md-right">First Name</label>
 			                            <div class="col-md-6">
<<<<<<< HEAD
 			                                <input id="fname" type="text" class="form-control" name="fname" placeholder="First Name" required autofocus>
=======
 			                                <input id="fname" type="text" class="form-control" name="fname" required autofocus>
 			                                    <span class="invalid-feedback">
 			                                        <strong>{{ $errors->first('name') }}</strong>
 			                                    </span>
>>>>>>> 7a6aee47a6e6ec63e7b01a4581c19f3fa9cd978d
 			                            </div>
 			                        </div>
 			                        <!-- Last Name -->
 			                        <div class="form-group row">
 			                            <label for="name" class="col-md-4 col-form-label text-md-right">Last Name</label>
 			                            <div class="col-md-6">
<<<<<<< HEAD
 			                                <input id="lname" type="text" class="form-control" name="lname" placeholder="Last Name" required autofocus>
 			                            </div>
 			                        </div>
 			                        <!-- Middle Name -->
 			                        <div class="form-group row">
 			                            <label for="name" class="col-md-4 col-form-label text-md-right">Middle Name</label>
 			                            <div class="col-md-6">
 			                                <input id="mname" type="text" class="form-control" name="mname" placeholder="Middle Name" required autofocus>
=======
 			                                <input id="lname" type="text" class="form-control" name="lname" required autofocus>
 			                                    <span class="invalid-feedback">
 			                                        <strong>{{ $errors->first('name') }}</strong>
 			                                    </span>
>>>>>>> 7a6aee47a6e6ec63e7b01a4581c19f3fa9cd978d
 			                            </div>
 			                        </div>
 			                        <!-- Email address Reg -->
 			                        <div class="form-group row">
 			                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

 			                            <div class="col-md-6">
<<<<<<< HEAD
 			                                <input id="email" type="email" class="form-control" name="email" required autofocus oninput="return validate_email()" placeholder="Email Address">
=======
 			                                <input id="email" type="email" class="form-control" name="email" oninput="validate_email()">
>>>>>>> 7a6aee47a6e6ec63e7b01a4581c19f3fa9cd978d
 			                                <strong><p id="confirm_email"></p></strong>
 			                            </div>
 			                        </div>
 			                        <!-- Username -->
 			                        <div class="form-group row">
 			                            <label for="name" class="col-md-4 col-form-label text-md-right">Username</label>
 			                            <div class="col-md-6">
<<<<<<< HEAD
 			                                <input id="username" type="text" class="form-control" name="username" required autofocus oninput="return validate_username()" placeholder="Username">
=======
 			                                <input id="username" type="text" class="form-control" name="username" required autofocus oninput="return validate_username()">
>>>>>>> 7a6aee47a6e6ec63e7b01a4581c19f3fa9cd978d
 			                                   <strong><p id="confirm_username"></p></strong>
 			                            </div>
 			                        </div>
 			                        <!-- Password Register -->
 			                        <div class="form-group row">
 			                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

 			                            <div class="col-md-6">
<<<<<<< HEAD
 			                                <input id="password" type="password" class="form-control" name="password" minlength="6" required  oninput="return validate()" placeholder="Password">
=======
 			                                <input id="password" type="password" class="form-control" name="password" minlength="6" required  oninput="return validate()">
>>>>>>> 7a6aee47a6e6ec63e7b01a4581c19f3fa9cd978d
 			                            </div>
 			                        </div>
 			                        <!-- Confirm password -->
 			                        <div class="form-group row">
 			                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

 			                            <div class="col-md-6">
<<<<<<< HEAD
 			                                <input id="password-confirm" type="password" class="form-control" oninput="return validate()" name="password_confirmation" required placeholder="Confirm Password">
=======
 			                                <input id="password-confirm" type="password" class="form-control" oninput="return validate()" name="password_confirmation" required>
>>>>>>> 7a6aee47a6e6ec63e7b01a4581c19f3fa9cd978d
 			                                    <strong><p id="msgconfirmpass"></p></strong>
 			                            </div>
 			                        </div>

 			                        <div class="form-group row mb-0">
 			                            <div class="col-md-6 offset-md-4">
 			                                <button type="submit" id="register_submit" disabled class="btn btn-primary">
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
 			<script type="text/javascript" src="assets/js/validate_password.js"></script>
 			<script type="text/javascript" src="assets/js/validate_username_exist.js"></script>
<<<<<<< HEAD
 			<script type="text/javascript" src="assets/js/validate_email_exist.js"></script>
=======
 			<script type="text/javascript" src="assets/js/validate_email.js"></script>
>>>>>>> 7a6aee47a6e6ec63e7b01a4581c19f3fa9cd978d
 		<?php
 	}
 	require 'template.php';
?>
