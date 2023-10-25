  <?php 
	session_start();

	include 'functions.php';

	$f = new Volunteers();	
	

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['item']) {
    	
    	$name = htmlspecialchars(trim($_POST['name']));
        $count = htmlspecialchars(trim($_POST['count']));
                   	            
        $additem = $f->add_item($name, $count);


        if ($additem == True) {
        	$_SESSION['success_message'] = "Record Created";
        }else{
        	$_SESSION['failed_message'] = "Process failed";
        }

        header("Location: ../../administrator/add-item.php");
		exit();


    }	

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['update']) {
    	$id = htmlspecialchars(trim($_POST['id']));
    	$name = htmlspecialchars(trim($_POST['name']));
        $count = htmlspecialchars(trim($_POST['count']));
                   	            
        $update = $f->update_item($id, $name, $count);


        if ($update == True) {
        	$_SESSION['success_message'] = "Record Updated";
        }else{
        	$_SESSION['failed_message'] = "Process failed";
        }

        header("Location: ../../administrator/edit-item.php?id=".base64_encode($id));
		exit();


    }	

?>