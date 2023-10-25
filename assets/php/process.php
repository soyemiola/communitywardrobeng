<?php 
	session_start();

	include 'func.php';

	$f = new ApplicationForm();
	$key = random_bytes(32); // 256-bit key (32 bytes)
	$iv = random_bytes(16); // 128-bit IV (16 bytes)

	

	if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($_POST['robot'])) {

		$date = date("F j, Y, g:i a");
		$name = Null;
		$number = format_number(sanitizeInput($_POST['number']));

		$num_chk = $f->check_number_exist($number);
		
		// check if number already exist!
		if($num_chk->num_rows == 1){
			$targetUrl = "../../form.php";			
			$_SESSION['number-exit'] = "Phone number already exist!";
			header("Location: {$targetUrl}");
			exit();

		}

		$user_email = $_POST['email'];

		if (!empty($user_email)) {
			$email_validate = isValidEmail($user_email);
			$chk_email = $f->check_email_exist($email_validate);

			if ($chk_email->num_rows == 1){
				$targetUrl = "../../form.php";

				$_SESSION['email-exit'] = "Email already exist!";
				header("Location: {$targetUrl}");
				exit();
			}

		}else{
			$email_validate = null;
		}

		$gender = sanitizeInput($_POST['gender']);
		$address = sanitizeInput($_POST['address']);
		$address_other = sanitizeInput($_POST['address_others']);

		$purpose_of_application = sanitizeInput($_POST['purpose_of_application']);
		$purpose_of_application_others = sanitizeInput($_POST['purpose_of_application_others']);

		$item_needed = json_encode($_POST['item_needed']);
		$item_needed_others = sanitizeInput($_POST['item_needed_others']);

		$shoe_size = sanitizeInput($_POST['shoe_size']);
		$shoe_size_other = sanitizeInput($_POST['shoe_size_other']);

		$cloth_size = sanitizeInput($_POST['cloth_size']);
		$cloth_size_other = sanitizeInput($_POST['cloth_size_other']);

		$accessories = json_encode($_POST['accessories']);
		$accessories_others = sanitizeInput($_POST['accessories_others']);

		$time_slot = sanitizeInput($_POST['time_slot']);

		$access_code = $f->accesscode();

		$application_stream = $f->application_stream($time_slot);

		$stream_name = $application_stream[0];
		$shopping_date = $application_stream[1];
		$shopping_address = $application_stream[2];
		$time_allocated = $application_stream[3];

		
		$save_record = $f->new_recipient($number, $email_validate, $name, $gender, $address, $purpose_of_application, $purpose_of_application_others, $item_needed, $item_needed_others, $shoe_size, $shoe_size_other, $cloth_size, $cloth_size_other, $accessories, $accessories_others, $date, $access_code, $stream_name , $shopping_date, $shopping_address, $address_other, $time_allocated);

		if($save_record != False){
			$data = $save_record;
			$cipherText = openssl_encrypt($data, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);

			$targetUrl = "../../appointmentslip.php";
			$ekey = base64_encode($key);
			$eiv = base64_encode($iv);
			$encryptedId = base64_encode($cipherText);
			$redirectUrl = "{$targetUrl}?id={$encryptedId}&&ky={$ekey}&&iv={$eiv}&&id={$data}";

			// send email
			// if (!empty($email_validate)) {
			// 	$sendMail = $f->sendMail($email_validate, $access_code, $stream_name, $shopping_date, $shopping_address, $time_allocated);
			// }			

			// send SMS
			if (!empty($number)) {
				
				$msg = '
						Community WardrobeNG \n
						Access code: '.$access_code.'\n
						Stream: '. $stream_name .' \n
						Shopping date/time: '. $shopping_date.' Time:'. $time_allocated .'\n
						Address: '. $shopping_address.' 
						';

				$sendSMS = $f->sendSMS($number, $msg);
			}

			header("Location: {$redirectUrl}");
			exit();
		}
	}



	function format_number($number){

		// check if number has +234
		if (strpos($number, '+234') !== false || strpos($number, '234') !== false) {
			
			if(strpos($number, '+') !== true){
				
				$number = '+'.$number;

				return str_replace(' ', '', $number);
			}

			return str_replace(' ', '', $number);

		}else{
			return '+234'.$number ;
		}
	}

	function sanitizeInput($input) {
        return htmlspecialchars(trim($input));
    }

    function isValidEmail($email) {
		return filter_var($email, FILTER_VALIDATE_EMAIL);
	}

?>