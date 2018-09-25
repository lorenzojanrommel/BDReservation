<?php
	function display_title(){
		echo "Boarding House & Dormitories Finder";
	}
	function display_content(){
		?>
		<?php
		require '../condb.php';
		$id = $_SESSION['user_id'];
		$sql = "SELECT * FROM users WHERE id = $id";
		$results = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($results);
		extract($row);
		?>
		<div class="container mb-5">
			<div class="edit-profile p-2">
				<h1>Edit Profile</h1>
					<hr>
				<div class="row">
			      <!-- left column -->
			      <div class="col-sm-3">
			        <div class="text-center">
			          <img src="<?php echo $user_picture; ?>" class="avatar img-circle" alt="avatar">
			          <h6><?php echo $user_fname,str_repeat('&nbsp;', 1),substr($user_mname, 0, 1).".".str_repeat('&nbsp;', 1),ucfirst($user_lname); ?></h6>
			        </div>
			      </div>
					      
			      <!-- edit form column -->
			      <div class="col-sm-9 personal-info">
			        <h3>Personal info</h3>
			        <form class="form-horizontal" role="form" method="POST"  action="edit_profile_endpoint.php?id=<?php echo $id?>" enctype='multipart/form-data'>
			        	<div class="form-group">
			        		<div class="form-group col-sm-8">
			        		     <label for="uProfile">Profile Picture:</label>
			        		     <input type="file" name="user_picture" class="form-control-file" aria-describedby="fileHelp" placeholder="Profile Picture">
			        		 </div>
			        	</div>
			          <div class="form-group">
			            <label class="col-sm-3 control-label">First name:</label>
			            <div class="col-sm-8">
			              <input class="form-control" type="text" name="fname" value="<?php echo $user_fname; ?>" oninput="this.value=this.value.replace(/[^A-Za-z]/g,'');">
			            </div>
			          </div>
			          <div class="form-group">
			            <label class="col-sm-3 control-label">Last name:</label>
			            <div class="col-sm-8">
			              <input class="form-control" type="text" name="lname" value="<?php echo $user_lname; ?>" oninput="this.value=this.value.replace(/[^A-Za-z]/g,'');">
			            </div>
			          </div>
			          <div class="form-group">
			            <label class="col-sm-3 control-label">Middle name:</label>
			            <div class="col-sm-8">
			              <input class="form-control" type="text" name="mname" value="<?php echo $user_mname; ?>" oninput="this.value=this.value.replace(/[^A-Za-z]/g,'');">
			            </div>
			          </div>
			          <div class="form-group">
			            <label class="col-sm-3 control-label">Address:</label>
			            <div class="col-sm-8">
			              <input class="form-control" type="text" name="address" value="<?php echo $user_address; ?>" oninput="this.value=this.value.replace(/[^A-Za-z]/g,'');">
			            </div>
			          </div>
			          <div class="form-group">
			            <label class="col-sm-3 control-label">Gender:</label>
			            <div class="col-sm-8">
			            	<div class="row">
			            		<div class="col-sm-6 text-center">
			            			<!-- Group of default radios - option 1 -->
			            			<div class="custom-control custom-radio">
			            			  <input type="radio" class="custom-control-input" id="male" name="gender" required value="m">
			            			  <label class="custom-control-label" for="male">Male</label>
			            			</div>
			            		</div>
			            		<div class="col-sm-6 text-center">
			            			<!-- Group of default radios - option 2 -->
			            			<div class="custom-control custom-radio">
			            			  <input type="radio" class="custom-control-input" id="female" name="gender" required value="f">
			            			  <label class="custom-control-label" for="female">Female</label>
			            			</div>
			            		</div>
			            	</div>
			            </div>
			          </div>
			          <div class="form-group">
			            <label class="col-sm-3 control-label">Birthdate:</label>
			            <div class="col-sm-8">
			              <input class="form-control" type="date" name="bday" max="3000-12-31" 
        min="1000-01-01" required>
			            </div>
			          </div>
			          <div class="form-group">
			            <label class="col-sm-3 control-label">Email:</label>
			            <div class="col-sm-8">
			              <input class="form-control" type="text" name="email" value="<?php echo $user_email; ?>">
			            </div>
			          </div>
			          <div class="form-group">
			            <label class="col-sm-3 control-label">Phone Number:</label>
			            <div class="col-sm-8">
			              <input type="tel" class="form-control phone_numer" name="phone_numer" placeholder="Phone Name" required autofocus ondrop="return false;" onpaste="return false;" onkeypress="return event.charCode>=48 && event.charCode<=57" pattern='{4}[\-]\d{3}[\-]\d{4}' title='Phone Number (Format: 0999-123-4321)' value="<?php echo $user_phone_number; ?>">
			            </div>
			          </div>
			          <div class="form-group">
			            <label class="col-sm-3 control-label">Username:</label>
			            <div class="col-sm-8">
			              <input class="form-control" type="text" name="username" value="<?php echo $username; ?>">
			            </div>
			          </div>
			          <div class="form-group">
			            <label class="col-sm-3 control-label"></label>
			            <div class="col-sm-8">
			            	<div class="row">
			            		<div class="col-sm-6 text-center">
			              			<input type="submit" class="btn btn-primary" value="Save Changes">
			            		</div>
			            		<div class="col-sm-6 text-center">
			              			<input type="reset" class="btn btn-default" value="Cancel">
			            		</div>
			            	</div>
			            </div>
			          </div>
			        </form>
			      </div>
			  </div>
		</div>
	</div>
	<script
	  src="https://code.jquery.com/jquery-3.3.1.min.js"
	  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	  crossorigin="anonymous"></script>
	<script type="text/javascript">
		$('.custom-file-input').on('change',function(){
		  $(this).next('.form-control-file').addClass("selected").html($(this).val());
		})
	</script>
		<?php

	}
	require "../template.php";
?>

