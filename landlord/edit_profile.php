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
			      <div class="col-md-3">
			        <div class="text-center">
			          <img src="../<?php echo $user_picture; ?>" class="avatar img-circle" alt="avatar">
			          <h6><?php echo $user_fname,str_repeat('&nbsp;', 1),substr($user_mname, 0, 1).".".str_repeat('&nbsp;', 1),ucfirst($user_lname); ?></h6>
			        </div>
			      </div>
					      
			      <!-- edit form column -->
			      <div class="col-md-9 personal-info">
			        <h3>Personal info</h3>
			        <form class="form-horizontal" role="form" method="POST"  action="edit_profile_endpoint.php?id=<?php echo $id?>" enctype='multipart/form-data'>
			        	<div class="form-group">
			        	<div class="col-lg-8">
			        	<div class="input-group">
			        	  <div class="input-group-prepend">
			        	    <span class="input-group-text" id="label-upload">Upload Profile</span>
			        	  </div>
			        	  <div class="custom-file">
			        	    <input type="file" class="custom-file-input" aria-describedby="file-input" name="user_profile">
			        	    <label class="custom-file-label" for="choose-file-upload">Choose file</label>
			        	  </div>
			        	</div>
			        	</div>
			        	</div>
			          <div class="form-group">
			            <label class="col-lg-3 control-label">First name:</label>
			            <div class="col-lg-8">
			              <input class="form-control" type="text" name="fname" value="<?php echo $user_fname; ?>" oninput="this.value=this.value.replace(/[^A-Za-z]/g,'');">
			            </div>
			          </div>
			          <div class="form-group">
			            <label class="col-lg-3 control-label">Last name:</label>
			            <div class="col-lg-8">
			              <input class="form-control" type="text" name="lname" value="<?php echo $user_lname; ?>" oninput="this.value=this.value.replace(/[^A-Za-z]/g,'');">
			            </div>
			          </div>
			          <div class="form-group">
			            <label class="col-lg-3 control-label">Middle name:</label>
			            <div class="col-lg-8">
			              <input class="form-control" type="text" name="mname" value="<?php echo $user_mname; ?>" oninput="this.value=this.value.replace(/[^A-Za-z]/g,'');">
			            </div>
			          </div>
			          <div class="form-group">
			            <label class="col-lg-3 control-label">Address:</label>
			            <div class="col-lg-8">
			              <input class="form-control" type="text" name="address" value="<?php echo $user_address; ?>" oninput="this.value=this.value.replace(/[^A-Za-z]/g,'');">
			            </div>
			          </div>
			          <div class="form-group">
			            <label class="col-lg-3 control-label">Gender:</label>
			            <div class="col-lg-8">
			            	<div class="row">
			            		<div class="col-sm-6 text-center">
			            			<!-- Group of default radios - option 1 -->
			            			<div class="custom-control custom-radio">
			            			  <input type="radio" class="custom-control-input" id="male" name="gender" required>
			            			  <label class="custom-control-label" for="male">Male</label>
			            			</div>
			            		</div>
			            		<div class="col-sm-6 text-center">
			            			<!-- Group of default radios - option 2 -->
			            			<div class="custom-control custom-radio">
			            			  <input type="radio" class="custom-control-input" id="female" name="gender" required>
			            			  <label class="custom-control-label" for="female">Female</label>
			            			</div>
			            		</div>
			            	</div>
			            </div>
			          </div>
			          <div class="form-group">
			            <label class="col-lg-3 control-label">Birthdate:</label>
			            <div class="col-lg-8">
			              <input class="form-control" type="date" name="bday" max="3000-12-31" 
        min="1000-01-01" required>
			            </div>
			          </div>
			          <div class="form-group">
			            <label class="col-lg-3 control-label">Email:</label>
			            <div class="col-lg-8">
			              <input class="form-control" type="text" name="email" value="<?php echo $user_email; ?>">
			            </div>
			          </div>
			          <div class="form-group">
			            <label class="col-md-3 control-label">Username:</label>
			            <div class="col-md-8">
			              <input class="form-control" type="text" name="username" value="<?php echo $username; ?>">
			            </div>
			          </div>
			          <div class="form-group">
			            <label class="col-md-3 control-label"></label>
			            <div class="col-md-8">
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
		<?php

	}
	require "../template.php";
?>

