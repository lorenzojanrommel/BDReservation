<?php
	function display_title(){
		echo "Boarding House & Dormitories Finder || Rooms";
	}
	function display_content(){
		?>
			<div class="container">
				<div class="row justify-content-center mt-5 pt-5">
				    <div class="col-md-8">
				        <div class="card card-default">
				            <div class="card-header">Login</div>
				            <div class="card-body">
				                <form method="POST" action="">
				                	<!-- Email Address -->
				                    <div class="form-group row">
				                        <label for="email" class="col-sm-4 col-form-label text-md-right">E-Mail Address</label>

				                        <div class="col-md-6">
				                            <input id="email" type="email" class="form-control" name="email" required autofocus>
				                            <span class="invalid-feedback"></span>
				                        </div>
				                    </div>
				                    <!-- Password -->
				                    <div class="form-group row">
				                        <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

				                        <div class="col-md-6">
				                            <input id="password" type="password" class="form-control" name="password" required>
				                                <span class="invalid-feedback">
				                                </span>
				                        </div>
				                    </div>
				                    <!-- Remind me  -->
				                    <div class="form-group row">
				                        <div class="col-md-6 offset-md-4">
				                            <div class="checkbox">
				                                <label>
				                                    <input type="checkbox" name="remember"> Remember Me
				                                </label>
				                            </div>
				                        </div>
				                    </div>
				                    <!-- Login Button -->
				                    <div class="form-group row mb-0">
				                        <div class="col-md-8 offset-md-4">
				                            <button type="submit" class="btn btn-primary">
				                                Login
				                            </button>

				                            <a class="btn btn-link" href="">
				                                Forgot Your Password?
				                            </a>
				                        </div>
				                    </div>
				                </form>
				                <!-- Sign up -->
				                <hr>
				                	<div class="col s12 center login-flex pl-5 ml-5">
				                	<a href="register.php"><small class="signup">Sign Up for Boarding House & Dormitories Finder</small></a>
				                	</div>
				                <hr>
				            </div>
				        </div>
				    </div>
				</div>	
			</div>
		<?php
	}
	require 'template.php';

?>