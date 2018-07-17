function validate_email(){
	var email = $('#email').val();
	$.ajax({
		method	: 'post',
		url 	:  'authenticate.php',
		data 	: {
			register	: true,
			email 		: email
		},
		success : function(data){
			if (data == 'validate_email_available') {
				$('#confirm_email').html('Email available');
				$('#confirm_email').css('color', 'green');
				$('#confirm_email').show();
			}else if (data == 'validate_email_not_available'){
				$('#confirm_email').html('Email already used');
				$('#confirm_email').css('color', 'red');
				$('#confirm_email').show();
			}else if (data == 'validate_invalid'){
				$('#confirm_email').html('Invalid');
				$('#confirm_email').css('color', 'red');
				$('#confirm_email').show();
			}else if (data == 'is'){
				$('#confirm_email').hide();
			}
		}
	})
}