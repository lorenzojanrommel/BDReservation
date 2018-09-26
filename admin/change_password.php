<?php
	function display_title(){
		echo "Boarding House & Dormitories Finder";
	}
	function display_content(){
		if (isset($_GET['change'])) {
			require '../condb.php';
			$id = $_SESSION['user_id'];
			$sql = "SELECT * FROM users WHERE id = $id";
			$results = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($results);
			extract($row);
			?>
			<div class="container">
				<div class="row justify-content-center mt-5 pt-5 mb-5 pb-5">
				    <div class="col-sm-8">
				        <div class="card card-default">
				            <div class="card-header change-password">Change Password</div>
				            <div class="card-body">
				                	<!-- Current Password -->
				                	<div class="alert alert-dismissible alert-success text-center" id="success_message" hidden>
 			        	  				<button type="button" class="close" data-dismiss="alert">&times;</button>
 			        	  				<p></p>
 			        				</div>
 			        				<div class="alert alert-dismissible alert-danger text-center" id="error_message" hidden>
 			        	  				<button type="button" class="close" data-dismiss="alert">&times;</button>
 			        	  				<p></p>
 			        				</div>
				                	<form>
				                	<div class="form-group row">
				                	    <label for="password" class="col-sm-4 col-form-label text-sm-right">Current Password</label>

				                	    <div class="col-sm-6">
				                	        <input type="password" class="form-control current_password" placeholder="Current Password" name="current_password" required>
				                	    </div>
				                	</div>
				                	<!-- New Password -->
				                	<div class="form-group row">
				                	    <label for="password" class="col-sm-4 col-form-label text-sm-right">New Password</label>

				                	    <div class="col-sm-6">
				                	        <input type="password" class="form-control new_password" placeholder="New Password" name="new_password" required>
				                	    </div>
				                	</div>
				                    <!-- Password -->
				                    <div class="form-group row">
				                        <label for="password" class="col-sm-4 col-form-label text-sm-right">Confirm Password</label>

				                        <div class="col-sm-6">
				                            <input type="password" class="form-control confirm_password" placeholder="Password" name="confirm_password" required>
				                        </div>
				                    </div>
				                    <!-- Login Button -->
				                    <div class="form-group row mb-0">
				                        <div class="col-sm-6 text-right">
				                            <button type="button" name="change_password" class="btn btn-primary change_password_button">
				                                Change Password
				                            </button>
				                        </div>
				                        <div class="col-sm-6">
				                        	<form action="view_profile.php">
				                        		<button type="submit" class="btn btn-default">Cancel</button>
				                            </form>
				                        </div>
				                    </div>
				                    </form>
				            </div>
				        </div>
				    </div>
				</div>	
			</div>
			<?php
	}else{
		?>
		<div class="container p-5 room_msg_error">
			<div class="row">
				<div class="col-sm-12">
					<h4 class="text-center text-danger">Unauthorized Web Page</h4>
					<p class="text-center"><a href="view_profile.php"><button class="btn btn-outline-warning">Go back!</button></a></p>
				</div>
			</div>
		</div>
		<?php
	}
		}
	require "../template.php";
?>
<script type="text/javascript">
	$('.change_password_button').click(function(){
		var current_password = $('.current_password').val();
		var new_password = $('.new_password').val();
		var confirm_password = $('.confirm_password').val();
		$.ajax({
			method : 'POST',
			url : 'change_password_endpoint.php',
			data: {
				change_pass : true,
				current_password : current_password,
				new_password : new_password,
				confirm_password : confirm_password
			},
			success:function(data){
				console.log(data);
				if (data == 'success') {
					$('#success_message').fadeIn().html(data);
					setTimeout(function(){  
					$('#success_message').fadeOut("Slow");  
					}, 3000);

				}
			}
		})
	})
</script>