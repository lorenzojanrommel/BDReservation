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
<<<<<<< HEAD
			}else if (data == 'valid'){
				$('#confirm_username').html("Username Available");
				$('#confirm_username').css("color", "green");
=======
				$('#confirm_username').show();
			}else if (data == 'valid'){
				$('#confirm_username').html("Username Available");
				$('#confirm_username').css("color", "green");
				$('#confirm_username').show();
			}else if (data = 'empty'){
				$('#confirm_username').hide();
>>>>>>> 7a6aee47a6e6ec63e7b01a4581c19f3fa9cd978d
			}
		}
	});
}