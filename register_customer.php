<?php
 	function display_title(){
 	echo "Boarding House & Dormitories Finder || Login";
 	}
 	function display_content(){
 		?>
 			<div class="container">
 			    <div class="row justify-content-center pt-5 mt-5">
 			        <div class="col-md-8">
 			            <div class="card card-default mb-5">
 			                <div class="card-header title-reg-cus">Sign up for New Customer Boarding House /Dormitories Finder</div>
 			                <div class="customer-reg-container">

 			                </div>
 			                <div class="card-body cover">
 			                    <form method="POST" action="add_user_customer.php">
 			                    	<!-- First Name -->
 			                    	<div class="form-group row mt-5">
 			                    	    <label for="name" class="col-md-4 col-form-label text-md-right reg-label">First Name</label>
 			                    	    <div class="col-md-6">
 			                    	        <input type="text" class="form-control fname" name="fname" placeholder="First Name" required autofocus oninput="this.value=this.value.replace(/[^A-Za-z\s]/g,'');">
 			                    	    </div>
 			                    	</div>
 			                        <!-- Last Name -->
 			                        <div class="form-group row">
 			                            <label for="name" class="col-md-4 col-form-label text-md-right reg-label">Last Name</label>
 			                            <div class="col-md-6">
 			                                <input id="lname" type="text" class="form-control" name="lname" placeholder="Last Name" required autofocus oninput="this.value=this.value.replace(/[^A-Za-z\s]/g,'');">
 			                            </div>
 			                        </div>
 			                        <!-- Middle Name -->
 			                        <div class="form-group row">
 			                            <label for="name" class="col-md-4 col-form-label text-md-right reg-label">Middle Name</label>
 			                            <div class="col-md-6">
 			                                <input id="mname" type="text" class="form-control" name="mname" placeholder="Middle Name" required autofocus oninput="this.value=this.value.replace(/[^A-Za-z\s]/g,'');">
 			                                    <span class="invalid-feedback">
 			                                    </span>
 			                            </div>
 			                        </div>
 			                        <!-- Email address Reg -->
 			                        <div class="form-group row">
 			                            <label for="email" class="col-md-4 col-form-label text-md-right reg-label">E-Mail Address</label>

 			                            <div class="col-md-6">
 			                                <input id="email" type="email" class="form-control" name="email" required autofocus placeholder="Email Address" oninput="return validate_email()">
 			                                <strong><p id="confirm_email"></p></strong>
 			                            </div>
 			                        </div>
 			                        <!-- Phone Number -->
 			                        <div class="form-group row">
 			                            <label for="phone_numer" class="col-md-4 col-form-label text-md-right reg-label">Phone Number</label>
 			                            <div class="col-md-6">
 			                                <input type="tel" class="form-control phone_numer" name="phone_numer" placeholder="Phone Name" required autofocus ondrop="return false;" onpaste="return false;" onkeypress="return event.charCode>=48 && event.charCode<=57" pattern='{2}[\(]\d{2}[\)]\d{4}[\-]\d{4}' title='Phone Number (Format: +99(99)9999-9999)'>
 			                                    <span class="invalid-feedback">
 			                                    </span>

 			                            </div>
 			                        </div>
 			                        <!-- Username -->
 			                        <div class="form-group row">
 			                            <label for="name" class="col-md-4 col-form-label text-md-right reg-label">Username</label>
 			                            <div class="col-md-6">
 			                                <input id="username" type="text" class="form-control" name="username" required autofocus oninput="return validate_username()" placeholder="Username">
 			                                   <strong><p id="confirm_username"></p></strong>
 			                            </div>
 			                        </div>
 			                        <!-- Password Register -->
 			                        <div class="form-group row">
 			                            <label for="password" class="col-md-4 col-form-label text-md-right reg-label">Password</label>

 			                            <div class="col-md-6">
 			                                <input id="password" type="password" class="form-control" name="password" minlength="6" required  oninput="return validate()" placeholder="Password">
 			                            </div>
 			                        </div>
 			                        <!-- Confirm password -->
 			                        <div class="form-group row">
 			                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right reg-label">Confirm Password</label>

 			                            <div class="col-md-6">
 			                                <input id="password-confirm" type="password" class="form-control" oninput="return validate()" name="password_confirmation" required placeholder="Confirm Password">
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
 			<script type="text/javascript" src="assets/js/validate_email_exist.js"></script>
 			<script type="text/javascript" src="assets/js/validate_email.js"></script>
 		<?php
 	}
 	require 'template.php';
?>
