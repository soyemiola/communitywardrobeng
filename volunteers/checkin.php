<?php 
session_start();

include '../assets/php/functions.php';

$v = new Volunteers();

	
if (isset($_GET['recipient_ref_id'])) {
    $id = base64_decode($_GET['recipient_ref_id']);
    
    $checkin = $v->check_in_recipient($id);

    if ($checkin) {
    	$_SESSION['recipient_checkin'] = "User checked in";
    	header("Location: record-details.php?id=".base64_encode($id));
    	exit();
    }
}


?>