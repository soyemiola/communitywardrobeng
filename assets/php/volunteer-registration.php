<?php 
	include 'func.php';

	$f = new Volunteers_Registration();
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($_POST['robot'])) {

		$date = date("F j, Y, g:i a");
		
		$name = sanitizeInput($_POST['name']);
		$number = sanitizeInput($_POST['number']);
		$email = sanitizeInput($_POST['email']);

		if (!empty($email)) {
			if (!isValidEmail($email)) {
				$_SESSION['invalid-email'] = "Invalid Email Address";
				header("Location: ../../volunteers-registration.php");
				exit();
			}

		}

		$gender = sanitizeInput($_POST['gender']);
		$address = sanitizeInput($_POST['address']);
		$dob = sanitizeInput($_POST['dob']);
		$position = sanitizeInput($_POST['position']);
		$eme_contact = sanitizeInput($_POST['eme_contact']);
		$eme_contact_rel = sanitizeInput($_POST['eme_contact_rel']);
		$eme_contact_rel_other = sanitizeInput($_POST['eme_contact_rel_other']);
		$aboutus = sanitizeInput($_POST['aboutus']);
		$previous_recipient = sanitizeInput($_POST['previous_recipient']);
		$publicity = sanitizeInput($_POST['publicity']);
		$term_of_agreement = sanitizeInput($_POST['term_of_agreement']);

		
		$save_record = $f->application_form($date, $name, $number, $email, $gender, $address, $dob, $position, $eme_contact, $eme_contact_rel, $eme_contact_rel_other, $aboutus, $previous_recipient, $publicity, $term_of_agreement);

		
		if($save_record == True){
			$_SESSION['success_form'] = "Application Submitted! <br> We'd get in contact with you using your contact info";
			
		}else{
			$_SESSION['error_submission'] = "Error submitting application, Try Again!";
		}

		header("Location: ../../volunteers-registration.php");
		exit();
	}




	function sanitizeInput($input) {
        return htmlspecialchars(trim($input));
    }

    function isValidEmail($email) {
		return filter_var($email, FILTER_VALIDATE_EMAIL);
	}

?>