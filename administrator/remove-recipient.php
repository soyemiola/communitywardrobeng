  <?php 
	
	session_start();

	include '../assets/php/functions.php';

	$v = new Volunteers();

		
	if (isset($_GET['id'])) {
	    $id = base64_decode($_GET['id']);
	    
	    $remove = $v->remove_recipient($id);

	    if ($remove) {
	    	$_SESSION['del_success'] = "Record deleted";
	    	
	    }else{
	    	$_SESSION['del_error'] = "Process failed";
	    }

	    header("Location: recipients.php");
	    exit();
	}
?> 