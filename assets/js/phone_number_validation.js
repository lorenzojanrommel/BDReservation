	function validate_phone(){
	var phone_number = $('#phone_number').val();
	// console.log(phone_number);
	$.ajax({
		method	: 'post',
		url 	:  'authenticate.php',
		data 	: {
			phone_ver	 : true,
			phone_number : phone_number
		},
		success : function(data){
			// console.log(data);
			if (data == 'phone_available') {
				$('#confirm_phone_number').html('Phone Number Available');
				$('#confirm_phone_number').css('color', 'green');
				$('#confirm_phone_number').show();
			}else if (data == 'phone_number_exist'){
				$('#confirm_phone_number').html('Phone Number is Already used');
				$('#confirm_phone_number').css('color', 'red');
				$('#confirm_phone_number').show();
			}else if (data == 'invalid_format'){
				$('#confirm_phone_number').html('Invalid Number');
				$('#confirm_phone_number').css('color', 'red');
				$('#confirm_phone_number').show();
			}else if (data == 'is'){
				$('#confirm_phone_number').hide();
			}
		}
	})
}