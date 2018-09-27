<?php
	if (isset($_POST['save'])) {
	session_start();
	require '../condb.php';
	$id = $_GET['id'];
	$check1 = getimagesize($_FILES["user_picture"]["tmp_name"]);
	if ($check1 != false) {
		$target_dir1 = "../assets/img/owner_pictures/";
		$target_file1 = $target_dir1.time().basename($_FILES["user_picture"]["name"]);
		move_uploaded_file($_FILES["user_picture"]["tmp_name"], $target_file1);
	}else{
		$sql = "SELECT * FROM users WHERE id ='$id'";
		$results = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($results);
		extract($row);
		$no_image_uploaded = $user_picture;
		$target_file1 = $no_image_uploaded;
	}
	$fname = htmlspecialchars($_POST['fname']);
	$lname = htmlspecialchars($_POST['lname']);
	$mname = htmlspecialchars($_POST['mname']);
	$address = htmlspecialchars($_POST['address']);
	$gender = htmlspecialchars($_POST['gender']);
	$bday = htmlspecialchars($_POST['bday']);
	$email = htmlspecialchars($_POST['email']);
	$phone = htmlspecialchars($_POST['phone_numer']);
	$username = htmlspecialchars($_POST['username']);
	$picture = $target_file1;
	date_default_timezone_set('Asia/Manila');
	$update_date = date("F j, Y g:i a");

	$sql = "UPDATE users SET 
						user_fname = '$fname',
						user_lname = '$lname',
						user_mname = '$mname',
						user_address = '$address',
						user_gender = '$gender',
						user_birthdate = '$bday',
						user_picture = '$picture',
						user_email = '$email',
						user_phone_number = '$phone',
						username = '$username',
						update_date = '$update_date'
						WHERE id = '$id'";
	mysqli_query($conn, $sql) or die (mysqli_error($conn));
	header('Location: view_profile.php');
	}else{
		function display_title(){
			echo "Boarding House & Dormitories Finder";
		}
		function display_content(){
		?>qweqwe
		<div class="container p-5 room_msg_error">
			<div class="row">
				<div class="col-sm-12">
					<h4 class="text-center text-danger">Unauthorized Web Page</h4>
					<p class="text-center"><a href="edit_profile.php"><button class="btn btn-outline-warning">Go back!</button></a></p>
				</div>
			</div>
		</div>
		<?php
		require '../template.php';
	}
	}

?>