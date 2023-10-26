<?php 
	include 'functions.php';

	$a = new Community();

	if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($_POST['robot'])) {
		$email = sanitizeInput($_POST['email']);
		$password = md5(sanitizeInput($_POST['password']));

		$validate = $a->authenticate($email, $password);


		if($validate->num_rows == 1){
			$_SESSION['auth'] = True;

			foreach ($validate as $key => $value) {
				$_SESSION['email'] = $value['email'];
				$_SESSION['name'] = $value['name'];
				$_SESSION['accesslevel'] = $value['accesslevel'];
			}

			header("Location: ../../administrator/index.php");
			exit();
		}else{
			$_SESSION['invalid-details'] = 'Invalid Credentials! Try Again';
			header("Location: ../../administrator/auth-login.php");
			exit();
		}
	}

	function sanitizeInput($input) {
        return htmlspecialchars(trim($input));
    }
?>