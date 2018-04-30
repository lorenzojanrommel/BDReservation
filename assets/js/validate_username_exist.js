function validate_username(){
	var username = $('#username').val();
	$.ajax({
		method	: 'post',
		url		: 'authenticate.php',
		data	: {
			register : true,
			username : username
		},
		success : function(data) {
			if(data == 'invalid'){
				$('#confirm_username').html("Username Exists");
				$('#confirm_username').css("color", "red");
			}else if (data == 'valid'){
				$('#confirm_username').html("Username Available");
				$('#confirm_username').css("color", "green");
			}
		}
	});
}