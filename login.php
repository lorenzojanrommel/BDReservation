<?php
	function display_title(){
		echo "Boarding House & Dormitories Finder || Rooms";
	}
	function display_content(){
		?>
			<div class="container">
				<div class="row justify-content-center mt-5 pt-5 mb-5 pb-5">
				    <div class="col-md-8">
				        <div class="card card-default">
				            <div class="card-header">Login</div>
				            <div class="card-body">
				                <form method="POST" action="authenticate.php">
				                	<!-- Email Address -->
				                    <div class="form-group row">
				                        <label for="username" class="col-sm-4 col-form-label text-md-right">Username</label>

				                        <div class="col-md-6">
				                            <input id="username" type="text" class="form-control" name="username" placeholder="Username" required autofocus>
				                            <span class="invalid-feedback"></span>
				                        </div>
				                    </div>
				                    <!-- Password -->
				                    <div class="form-group row">
				                        <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

				                        <div class="col-md-6">
				                            <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>
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
				                            <button type="submit" name="login" class="btn btn-primary">
				                                Login
				                            </button>

				                            <a class="btn btn-link" href="">
				                                Forgot Your Password?
				                            </a>
				                        </div>
				                    </div>
				                </form>
				                <!-- Sign up -->
				                <div class="hr_line"></div>
				                	<div class="col s12 center login-flex pl-5 ml-2">
				                		<a href="register.php" class="mr-1"><small class="signup">Sign Up for Owner Boarding House / Dormitories</small></a>
				                		or
				                		<a href="register_customer.php" class="ml-1"><small class="signup">Sign Up for Customer Boarding House / Dormitories</small></a>
				                	</div>
				                <div class="hr_line"></div>
				            </div>
				        </div>
				    </div>
				</div>	
			</div>
		<?php
	}
	require 'template.php';

?>