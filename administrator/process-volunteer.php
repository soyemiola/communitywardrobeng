<?php 
session_start();

include '../assets/php/functions.php';

$v = new Community();


	
if (isset($_GET['volunteer_ref_id']) && $_GET['ACCEPT'] == 'YES') {
    $id = base64_decode($_GET['volunteer_ref_id']);
    $status = 1;

    $accept = $v->set_volunteer_status($status, $id);

    if ($accept) {
    	$_SESSION['volunteer_activated'] = "Volunteer Activated";
    	header("Location: volunteers-details.php?idref=".base64_encode($id));
    	exit();
    }
}

if (isset($_GET['volunteer_ref_id']) && $_GET['ACCEPT'] == 'NO') {
    $id = base64_decode($_GET['volunteer_ref_id']);
    $status = 2;

    $accept = $v->set_volunteer_status($status, $id);

    if ($accept) {
    	$_SESSION['volunteer_deactivated'] = "Volunteer deactivated";
    	header("Location: volunteers-details.php?idref=".base64_encode($id));
    	exit();
    }
}

?>