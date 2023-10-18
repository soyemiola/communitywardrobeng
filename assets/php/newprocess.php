  <?php 
	session_start();

	include 'functions.php';

	$f = new Volunteers();
	$d = new Donation();

	$key = random_bytes(32); // 256-bit key (32 bytes)
	$iv = random_bytes(16); // 128-bit IV (16 bytes)


	if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($_POST['robot'])) {

		$date = date("F j, Y, g:i a");

		$number = '+234'.sanitizeInput($_POST['number']);

		$num_chk = $f->check_number_exist($number);
		
		// check if number already exist!
		if($num_chk->num_rows == 1){
			$_SESSION['number_exit'] = "Number already exist";
			header("Location: ../../volunteers/newrecord.php");
			exit();

		}

		$user_email = $_POST['email'];

		if (!empty($user_email)) {
			$email_validate = isValidEmail($user_email);
			$chk_email = $f->check_email_exist($email_validate);

			if ($chk_email->num_rows == 1){
				$_SESSION['email_exit'] = "Email already exist";
				header("Location: ../../volunteers/newrecord.php");
				exit();
			}

		}else{
			$email_validate = null;
		}

		$gender = sanitizeInput($_POST['gender']);
		$address = sanitizeInput($_POST['address']);

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

		$access_code = $f->accesscode();

		$application_stream = $f->application_stream();

		$save_record = $f->new_recipient($number, $email_validate, $gender, $address, $purpose_of_application, $purpose_of_application_others, $item_needed, $item_needed_others, $shoe_size, $shoe_size_other, $cloth_size, $cloth_size_other, $accessories, $accessories_others, $date, $access_code, $application_stream[0], $application_stream[1], $application_stream[2]);

		if($save_record != False){
			$_SESSION['success_message'] = "New record created";
			
		}else{
			$_SESSION['failed_message'] = "Process failed";
		}

		header("Location: ../../volunteers/newrecord.php");
		exit();
	}



	function sanitizeInput($input) {
        return htmlspecialchars(trim($input));
    }

    function isValidEmail($email) {
		return filter_var($email, FILTER_VALIDATE_EMAIL);
	}


	if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['check_way_yes'] && empty($_POST['robot'])) {
        $id = htmlspecialchars(trim($_POST['checkout_id']));
        $accessories = json_encode($_POST['accessories']);
                                  
        // $update = $f->save_checkout($id, $accessories);

        // if ($update == True) {
        // 	$_SESSION['success_message'] = "Checkout Completed!";
        // }else{
        // 	$_SESSION['failed_message'] = "Process failed";
        // }
        echo 'here.....';

        // header("Location: ../../volunteers/checkout-details.php");
		// exit();

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

        header("Location: ../../volunteers/add-accessories.php");
		exit();

    }

    

?>