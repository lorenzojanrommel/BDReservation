<?php
 	function display_title(){
 	echo "Boarding House & Dormitories Finder || Add Admin";
 	}
 	function display_content(){
 		?>
 			<div class="container">
 			    <div class="row justify-content-center pt-5 mt-5 mb-5 pb-5">
 			        <div class="col-md-8">
 			            <div class="card card-default">
 			                <div class="card-header"><h4>Add New Admin</h4></div>

 			                <div class="card-body">
 			                    <form method="POST" action="add_user_owner.php">
 			                    	<!-- First Name -->
 			                        <div class="form-group row">
 			                            <label for="name" class="col-md-4 col-form-label text-md-right">First Name</label>
 			                            <div class="col-md-6">
 			                                <input id="fname" type="text" class="form-control" name="fname" placeholder="First Name" required autofocus pattern="[A-Za-z]">
 			                                    <span class="invalid-feedback">
 			                                    </span>
 			                            </div>
 			                        </div>
 			                        <!-- Last Name -->
 			                        <div class="form-group row">
 			                            <label for="name" class="col-md-4 col-form-label text-md-right">Last Name</label>
 			                            <div class="col-md-6">
 			                                <input id="lname" type="text" class="form-control" name="lname" placeholder="Last Name" required autofocus>
 			                            </div>
 			                        </div>
 			                        <!-- Middle Name -->
 			                        <div class="form-group row">
 			                            <label for="name" class="col-md-4 col-form-label text-md-right">Middle Name</label>
 			                            <div class="col-md-6">
 			                                <input id="mname" type="text" class="form-control" name="mname" placeholder="Middle Name" required autofocus>
 			                                    <span class="invalid-feedback">
 			                                    </span>
 			                            </div>
 			                        </div>
 			                        <!-- Email address Reg -->
 			                        <div class="form-group row">
 			                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

 			                            <div class="col-md-6">
 			                                <input id="email" type="email" class="form-control" name="email" required autofocus oninput="return validate_email()" placeholder="Email Address">
 			                                <strong><p id="confirm_email"></p></strong>
 			                            </div>
 			                        </div>
 			                        <!-- Username -->
 			                        <div class="form-group row">
 			                            <label for="name" class="col-md-4 col-form-label text-md-right">Username</label>
 			                            <div class="col-md-6">
 			                                <input id="username" type="text" class="form-control" name="username" required autofocus oninput="return validate_username()" placeholder="Username">
 			                                   <strong><p id="confirm_username"></p></strong>
 			                            </div>
 			                        </div>
 			                        <!-- Password Register -->
 			                        <div class="form-group row">
 			                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

 			                            <div class="col-md-6">
 			                                <input id="admin_password" type="password" class="form-control" name="password" minlength="6" required  oninput="return validate()" placeholder="Password">
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
 			<script type="text/javascript" src="../assets/js/admin_validate_password.js"></script>
 			<script type="text/javascript" src="../assets/js/validate_username_exist.js"></script>
 			<script type="text/javascript" src="../assets/js/validate_email_exist.js"></script>
 			<script type="text/javascript" src="../assets/js/validate_email.js"></script>
 		<?php
 	}
 	require '../template.php';
?>
