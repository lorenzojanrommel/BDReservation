// function validate_email(){
// 	var email = $('#email').val();
// 	// console.log(email);
// 	$.ajax({
// 		method	: 'post',
// 		url		: 'authenticate.php',
// 		data	: {
// 			register : true,
// 			email : email
// 		},
// 		success : function(data) {
// 			if(data == 'invalid'){
// 				$('#confirm_email').html("Email Exists");
// 				$('#confirm_email').css("color", "red");
// 			}else if (data == 'valid'){
// 				$('#confirm_email').html("Email Available");
// 				$('#confirm_email').css("color", "green");
// 			}
// 		}
// 	});
// }