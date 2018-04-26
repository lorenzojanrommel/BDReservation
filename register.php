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
 			                    <form method="POST" action="">
 			                        <div class="form-group row">
 			                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
 			                            <div class="col-md-6">
 			                                <input id="name" type="text" class="form-control" name="name" required autofocus>
 			                                    <span class="invalid-feedback">
 			                                        <strong>{{ $errors->first('name') }}</strong>
 			                                    </span>
 			                            </div>
 			                        </div>
 			                        <!-- Email address Reg -->
 			                        <div class="form-group row">
 			                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

 			                            <div class="col-md-6">
 			                                <input id="email" type="email" class="form-control" name="email" required>
 			                                    <span class="invalid-feedback">
 			                                        <strong>{{ $errors->first('email') }}</strong>
 			                                    </span>
 			                            </div>
 			                        </div>
 			                        <!-- Password Register -->
 			                        <div class="form-group row">
 			                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

 			                            <div class="col-md-6">
 			                                <input id="password" type="password" class="form-control" name="password" required>
 			                                    <span class="invalid-feedback">
 			                                        <strong>{{ $errors->first('password') }}</strong>
 			                                    </span>
 			                            </div>
 			                        </div>

 			                        <div class="form-group row">
 			                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

 			                            <div class="col-md-6">
 			                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
 			                            </div>
 			                        </div>

 			                        <div class="form-group row mb-0">
 			                            <div class="col-md-6 offset-md-4">
 			                                <button type="submit" class="btn btn-primary">
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
 		<?php
 	}
 	require 'template.php';

?>