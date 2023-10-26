  <?php 
	include 'functions.php';

	$f = new Community();


	if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($_POST['robot'])) {

		$name = sanitizeInput($_POST['name']);		
		$email = sanitizeInput($_POST['email']);
		$password = md5(sanitizeInput($_POST['password']));
		$accesslevel = sanitizeInput($_POST['accesslevel']);
		

		$save_record = $f->add_volunteer_user($name, $email, $password, $accesslevel);

		if($save_record == True){
			$_SESSION['add_success'] = "New record created";
			
		}else{
			$_SESSION['add_error'] = "Process failed";
		}

		header("Location: ../../administrator/users.php");
		exit();
	}



	function sanitizeInput($input) {
        return htmlspecialchars(trim($input));
    }

    

?>