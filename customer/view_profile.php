<?php
	function display_title(){
		echo "Boarding House & Dormitories Finder";
	}
	function display_content(){
		require '../condb.php';
		$id = $_SESSION['user_id'];
		$sql = "SELECT * FROM users WHERE id = $id";
		$results = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($results);
		extract($row);
		?>
		<div class="container-fluid emp-profile">
		                <div class="row">
		                    <div class="col-md-4">
		                        <div class="profile-img">
		                            <img class="avatar-admin" src="<?php echo $user_picture?>" alt=""/>
		                            <!-- <div class="file btn btn-lg btn-primary">
		                                Change Photo
		                                <input type="file" name="file"/>
		                            </div> -->
		                        </div>
		                    </div>
		                    <div class="col-md-6">
		                        <div class="profile-head">
		                                    <h5>
		                                       <?php
		                                       	echo $user_fname,str_repeat('&nbsp;', 1),substr($user_mname, 0, 1).".".str_repeat('&nbsp;', 1),ucfirst($user_lname);
		                                       ?>
		                                    </h5>
		                                    <h6>
		                                        <?php
		                                        if ($role_id == '3') {
		                                        	echo 'Customer';
		                                        }
		                                        ?>
		                                    </h6>
		                            <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
		                                <li class="nav-item">
		                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
		                                </li>
		                            </ul>
		                        </div>
		                    </div>
		                    <div class="col-md-2">
		                        	<form action="edit_profile.php?edit=edit" method="POST">
		                        		<button type="submit" name="edit_profile" class="profile-edit-btn">Edit Profile</button>
		                            </form>
		                        	<form action="change_password.php?change=change" method="POST" class="mt-2">
		                        		<button type="submit" name="edit_profile" class="profile-edit-btn">Change Password</button>
		                            </form>
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="col-md-4">
		                    </div>
		                    <div class="col-md-8">
		                        <div class="tab-content profile-tab" id="myTabContent">
		                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
		                                        <div class="row">
		                                            <div class="col-md-6">
		                                                <label>Username</label>
		                                            </div>
		                                            <div class="col-md-6">
		                                                <p><?php echo $username; ?></p>
		                                            </div>
		                                        </div>
		                                        <div class="row">
		                                            <div class="col-md-6">
		                                                <label>Name</label>
		                                            </div>
		                                            <div class="col-md-6">
		                                                <p><?php echo $user_fname,str_repeat('&nbsp;', 1),substr($user_mname, 0, 1).".".str_repeat('&nbsp;', 1),ucfirst($user_lname);?></p>
		                                            </div>
		                                        </div>
		                                        <div class="row">
		                                            <div class="col-md-6">
		                                                <label>Gender</label>
		                                            </div>
		                                            <div class="col-md-6">
		                                                <p><?php 
		                                                if ($user_gender == 'm') {
		                                                	echo "Male";
		                                                }elseif($user_gender == 'f'){
		                                                	echo "Female";
		                                                }else{
		                                                	echo "NA";
		                                                }?></p>
		                                            </div>
		                                        </div>
		                                        <div class="row">
		                                            <div class="col-md-6">
		                                                <label>Email</label>
		                                            </div>
		                                            <div class="col-md-6">
		                                                <p><?php echo $user_email; ?></p>
		                                            </div>
		                                        </div>
		                                        <div class="row">
		                                            <div class="col-md-6">
		                                                <label>Phone</label>
		                                            </div>
		                                            <div class="col-md-6">
		                                                <p><?php echo $user_phone_number; ?></p>
		                                            </div>
		                                        </div>
		                                        <div class="row">
		                                            <div class="col-md-6">
		                                                <label>Birthdate</label>
		                                            </div>
		                                            <div class="col-md-6">
		                                                <p><?php echo $user_birthdate; ?></p>
		                                            </div>
		                                        </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>           
		        </div>
		<?php

	}
	require "../template.php";
?>

