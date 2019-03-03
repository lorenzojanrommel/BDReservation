<?php
	//##########################################################################
	// ITEXMO SEND SMS API - PHP - CURL-LESS METHOD
	// Visit www.itexmo.com/developers.php for more info about this API
	//##########################################################################
	function itexmo($number,$message,$apicode){
	$url = 'https://www.itexmo.com/php_api/api.php';
	$itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
	$param = array(
	    'http' => array(
	        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
	        'method'  => 'POST',
	        'content' => http_build_query($itexmo),
	    ),
	);
	$context  = stream_context_create($param);
	return file_get_contents($url, false, $context);}
	//##########################################################################
	$id = $_GET['id'];
	require '../condb.php';
	if(isset($_POST['approve_submit'])){
		$sql_sms = "SELECT house_phone_number FROM houses WHERE house_id = '$id'";
		$result_sms = mysqli_query($conn, $sql_sms);
		$row = mysqli_fetch_assoc($result_sms);
		extract($row);
		// $house_status = mysqli_real_escape_string($conn, '4');
		// SMS
		$msg = "Your application has been approved!! ";
		$api = "TR-BOARD850790_37BNJ";
		$result = itexmo($house_phone_number ,$msg, $api);
		if ($result == ""){
		echo "iTexMo: No response from server!!!
		Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.	
		Please CONTACT US for help. ";	
		}else if ($result == 0){
		echo "Message Sent!";
		}
		else{	
		echo "Error Num ". $result . " was encountered!";
		}
		// End of SMS
		$sql = "UPDATE houses SET 
								house_status = '4' 
								WHERE house_id = '$id'";
		mysqli_query($conn, $sql) or die(mysqli_error($conn));
		header('location: house.php');
	}
?>