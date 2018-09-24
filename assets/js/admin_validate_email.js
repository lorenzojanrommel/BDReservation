function validate_email(){
	var email = $('#email').val();
	// console.log(email);
	$.ajax({
		method	: 'post',
		url 	:  '../authenticate.php',
		data 	: {
			email_ver	: true,
			email 		: email
		},
		success : function(data){
			// console.log(data);
			if (data == 'email_available') {
				$('#confirm_email').html('Email available');
				$('#confirm_email').css('color', 'green');
				$('#confirm_email').show();
				$('#register_submit').removeAttr('disabled');
			}else if (data == 'email_exist'){
				$('#confirm_email').html('Email already used');
				$('#confirm_email').css('color', 'red');
				$('#confirm_email').show();
				$('#register_submit').attr('disabled', 'disabled');
			}else if (data == 'invalid_format'){
				$('#confirm_email').html('Invalid');
				$('#confirm_email').css('color', 'red');
				$('#confirm_email').show();
				$('#register_submit').attr('disabled', 'disabled');
			}else if (data == 'is'){
				$('#confirm_email').hide();
			}
		}
	})
}