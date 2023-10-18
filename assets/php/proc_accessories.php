  <?php 
	session_start();

	include 'functions.php';

	$f = new Volunteers();	
	

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['accessories']) {
    	
    	$name = htmlspecialchars(trim($_POST['name']));
        $accessories = htmlspecialchars(trim($_POST['count']));
                   	            
        $update = $f->add_accessories($name, $accessories);


        if ($update == True) {
        	$_SESSION['success_message'] = "Record Created";
        }else{
        	$_SESSION['failed_message'] = "Process failed";
        }

        header("Location: ../../volunteers/add-accessories.php");
		exit();


    }	

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['update']) {
    	$id = htmlspecialchars(trim($_POST['id']));
    	$name = htmlspecialchars(trim($_POST['name']));
        $accessories = htmlspecialchars(trim($_POST['count']));
                   	            
        $update = $f->update_accessories($id, $name, $accessories);


        if ($update == True) {
        	$_SESSION['success_message'] = "Record Updated";
        }else{
        	$_SESSION['failed_message'] = "Process failed";
        }

        header("Location: ../../volunteers/edit-accessories.php");
		exit();


    }	

?>