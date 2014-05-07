<?php 
	function test_input($data,$isemail){
		if($isemail){
			if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$data)) {
				$error_msg = 'All fields with valid inputs are required.';
				return [$data,$error_msg];
			 }
		}

		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);

		$error_msg = false;
		if(empty($data)){
			$error_msg = 'All fields with valid inputs are required.';
		}
		return [$data,$error_msg];
	}

	$active = 'members'; 
	$dname = $demail = $dcomment = '';
	$error_msg=false;


	if($_POST){

		//validations ...
			$data = test_input($_POST["dname"]); 
			if($data[1]) $error_msg = $data[1];
			$dname = $data[0];

			$data = test_input($_POST["demail"],true); $demail = $data[0];
			if($data[1]) $error_msg = $data[1];

			$data = test_input($_POST["dcomment"]); $dcomment = $data[0];
			if($data[1]) $error_msg = $data[1];

		$message=false;

		require_once('recaptchalib.php');
		$privatekey = "6LeiH_MSAAAAABUPW55mBTG5QsZCq7PQmF1cOaLW ";
		$resp = recaptcha_check_answer ($privatekey,
		                            $_SERVER["REMOTE_ADDR"],
		                            $_POST["recaptcha_challenge_field"],
		                            $_POST["recaptcha_response_field"]);

		if (!$resp->is_valid) {
			$error_msg .= "<br/> The reCAPTCHA wasn't entered correctly. Go back and try it again.(reCAPTCHA said: ".$resp->error.")";

		}else if(!$error_msg){

			$to .= 'info@apt.org.np';

			// subject
			$subject = 'Comment from apt.org.np';

			// message
			$message = '<html>
							<head>
								<title>Comment from apt.org</title>
							</head>
							<body>
								<table>
									<tr>
										<td>Name </td>
										<td>'.$dname.'</td>
									</tr>
									<tr>
										<td>Email </td>
										<td>'.$demail.'</td>
									</tr>
									<tr>
										<td>Comment </td>
										<td>'.$dcomment.'</td>
									</tr>
								</table>
							</body>
						</html>';
echo $message;
			// To send HTML mail, the Content-type header must be set
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

			// Mail it
			// mail($to, $subject, $message, $headers);
		}
	}
