  <?php 
	include 'functions.php';

	$f = new Volunteers();
	$d = new Donation();

	$key = random_bytes(32); // 256-bit key (32 bytes)
	$iv = random_bytes(16); // 128-bit IV (16 bytes)


	if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($_POST['robot'])) {

		$date = date("F j, Y, g:i a");

		if ($_POST['fullname']) {
			$name = sanitizeInput($_POST['fullname']);
			$email_validate = null;
			$number = Null;
		}else{
			$name = Null;
			
			$number = format_number(sanitizeInput($_POST['number']));
			$num_chk = $f->check_number_exist($number);
			
			// check if number already exist!
			if($num_chk->num_rows == 1){
				$_SESSION['number_exit'] = "Number already exist";
				header("Location: ../../administrator/newrecord.php");
				exit();

			} 

			$user_email = $_POST['email'];

			if (!empty($user_email)) {
				$email_validate = isValidEmail($user_email);
				$chk_email = $f->check_email_exist($email_validate);

				if ($chk_email->num_rows == 1){
					$_SESSION['email_exit'] = "Email already exist";
					header("Location: ../../administrator/newrecord.php");
					exit();
				}

			}else{
				$email_validate = null;
			}
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

		$save_record = $f->new_recipient($number, $email_validate, $name, $gender, $address, $purpose_of_application, $purpose_of_application_others, $item_needed, $item_needed_others, $shoe_size, $shoe_size_other, $cloth_size, $cloth_size_other, $accessories, $accessories_others, $date, $access_code, $stream_name, $shopping_date, $shopping_address, $address_other, $time_allocated);

		if($save_record != False){
			// $_SESSION['success_message'] = "New record created";

			// send email
			if (!empty($email_validate)) {
				$sendMail = $f->sendMail($email_validate, $access_code, $stream_name, $shopping_date, $shopping_address, $time_allocated);
			}

			// send SMS
			if (!empty($number)) {
				
				$msg = '
						Community WardrobeNG <br>
						Access code: '.$access_code.' <br>
						Stream: '. $stream_name .' <br>
						Shopping date/time: '. $shopping_date.' Time:'. $time_allocated .'<br>
						Address: '. $shopping_address.' 
						';

				$sendSMS = $f->sendSMS($number, $msg);
			}

			$userid = json_encode($save_record);

			header("Location: ../../administrator/slip.php?recipient_ref_id=".$userid."");
			exit();
			
		}else{
			$_SESSION['failed_message'] = "Process failed";
			header("Location: ../../administrator/newrecord.php");
			exit();
		}

		
	}



	function sanitizeInput($input) {
        return htmlspecialchars(trim($input));
    }

    function isValidEmail($email) {
		return filter_var($email, FILTER_VALIDATE_EMAIL);
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
	

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['accessories']) {
        $id = htmlspecialchars(trim($_POST['name']));
        $accessories = htmlspecialchars(trim($_POST['count']));
                                  
        $update = $f->save_checkout($id, $accessories);

        if ($update == True) {
        	$_SESSION['success_message'] = "Record Created";
        }else{
        	$_SESSION['failed_message'] = "Process failed";
        }

        header("Location: ../../administrator/add-accessories.php");
		exit();

    }

    

?>