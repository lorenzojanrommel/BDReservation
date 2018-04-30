function validate(){
	var password = $('#password').val();
	var confirm_password = $('#password-confirm').val();
	// console.log(password);
	// console.log(confirm_password);
	if(password != confirm_password){
		$('#msgconfirmpass').html('Password do not Match.');
		$('#msgconfirmpass').css("color", "red");
		$('#register_submit').attr('disabled','disabled');
		return false;
	}else if(password = confirm_password){
		$('#msgconfirmpass').html("Password Matched.");
		$('#msgconfirmpass').css("color", "green");
		$('#register_submit').removeAttr('disabled');
		return true;
	}

}