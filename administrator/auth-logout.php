<?php 
	session_start();

	unset($_SESSION['auth']);
	unset($_SESSION['email']);
	unset($_SESSION['name']);
	unset($_SESSION['accesslevel']);

	header("Location: auth-login.php");
	exit();
?>