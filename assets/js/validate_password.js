function validate(){
	var password = $('#password').val();
	var confirm_password = $('#password-confirm').val();
	if(password != confirm_password){
		$('#msgconfirmpass').show();
		$('#msgconfirmpass').html('Password do not Match.');
		$('#msgconfirmpass').css("color", "red");
		$('#register_submit').attr('disabled','disabled');
		return false;
	}else if(password = confirm_password){
		$('#msgconfirmpass').html("Password Matched.");
		$('#msgconfirmpass').css("color", "green");
		$('#register_submit').removeAttr('disabled');
		return true;
	}else if ($('#password').val().length === 0 && $('#password-confirm').val().length === 0){
		$('#msgconfirmpass').hide();
	}
	// else if ($('.fname').val().length === 0 || $('.lname').val().length === 0 || $('.mname').val().length === 0 || $('#email').val().length === 0 || $('.phone_number').val().length === 0 || $('#username').val().length === 0 || $('#password').val().length === 0 || $('#password-confirm').val().length === 0){
	// 	$('#register_submit').attr('disabled','disabled');
	// }
}