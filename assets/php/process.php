<?php 
	// session_start();

	include 'func.php';

	$f = new ApplicationForm();
	$key = random_bytes(32); // 256-bit key (32 bytes)
	$iv = random_bytes(16); // 128-bit IV (16 bytes)


	if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($_POST['robot'])) {

		$date = date("F j, Y, g:i a");

		$number = '+234'.sanitizeInput($_POST['number']);

		$num_chk = $f->check_number_exist($number);
		
		// check if number already exist!
		if($num_chk->num_rows == 1){
			$targetUrl = "../../form.php";
			$redirectUrl = "{$targetUrl}?stat='Inc'&&stat='Invalid'";
			header("Location: {$redirectUrl}");
			exit();

		}

		$user_email = $_POST['email'];

		if (!empty($user_email)) {
			$email_validate = isValidEmail($user_email);
			$chk_email = $f->check_email_exist($email_validate);

			if ($chk_email->num_rows == 1){
				$targetUrl = "../../form.php";
				$redirectUrl = "{$targetUrl}?status=IncEm";
				header("Location: {$redirectUrl}");
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

		$application_stream = $f->application_stream();

		$save_record = $f->new_recipient($number, $email_validate, $gender, $address, $purpose_of_application, $purpose_of_application_others, $item_needed, $item_needed_others, $shoe_size, $shoe_size_other, $cloth_size, $cloth_size_other, $accessories, $accessories_others, $date, $access_code, $application_stream[0], $application_stream[1], $application_stream[2], $address_other, $time_slot);

		if($save_record != False){
			$data = $save_record;
			$cipherText = openssl_encrypt($data, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);

			$targetUrl = "../../appointmentslip.php";
			$ekey = base64_encode($key);
			$eiv = base64_encode($iv);
			$encryptedId = base64_encode($cipherText);
			$redirectUrl = "{$targetUrl}?id={$encryptedId}&&ky={$ekey}&&iv={$eiv}&&id={$data}";

			// send email
			if (!empty($user_email)) {
				$sendMail = $f->sendMail($user_email, $access_code, $application_stream[0], $application_stream[1], $application_stream[2]);
			}			

			// send SMS
			if (!empty($number)) {
				// code...
			}

			header("Location: {$redirectUrl}");
			exit();
		}
	}




	function sanitizeInput($input) {
        return htmlspecialchars(trim($input));
    }

    function isValidEmail($email) {
		return filter_var($email, FILTER_VALIDATE_EMAIL);
	}

?>