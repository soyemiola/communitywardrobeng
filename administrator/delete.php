  <?php 
	
	session_start();

	include '../assets/php/functions.php';

	$v = new Community();

		
	if (isset($_GET['user_ref_id'])) {
	    $id = base64_decode($_GET['user_ref_id']);
	    
	    $checkin = $v->delete_user_volunteer($id);

	    if ($checkin) {
	    	$_SESSION['del_success'] = "Record deleted";
	    	
	    }else{
	    	$_SESSION['del_error'] = "Process failed";
	    }

	    header("Location: users.php");
	    exit();
	}
?> 