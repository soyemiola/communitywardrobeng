<?php 
	include 'func.php';

	$f = new Contact();
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($_POST['robot'])) {

		$date = date("F j, Y, g:i a");

		$name = sanitizeInput($_POST['name']);
		$email = sanitizeInput($_POST['email']);
		$message = sanitizeInput($_POST['message']);

		$save_record = $f->save_contact_info($date, $name, $email, $message);

		if($save_record){
			// send email
			if (!empty($email)) {
				$sendMail = $f->sendMail($date, $name, $email, $message);
			}			

			$_SESSION['success_message'] = "Contact Message sent successfully";
			
		}else{
			$_SESSION['error_message'] = "Error sending request";
		}

		header("Location: ../../contact.php");
		exit();
	}




	function sanitizeInput($input) {
        return htmlspecialchars(trim($input));
    }

    function isValidEmail($email) {
		return filter_var($email, FILTER_VALIDATE_EMAIL);
	}

?>