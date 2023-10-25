<?php 
  session_start();
  
  include 'functions.php';

  $f = new Volunteers();

  if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['check_way_yes'] && empty($_POST['robot'])) {
    $id = htmlspecialchars(trim($_POST['checkout_id']));
    $accessories = $_POST['accessories'];
    $items = $_POST['items'];   

    $filtereda_counts = array_filter($_POST['a_count'], function($value) {
        return $value !== '';
    });

    $filteredi_counts = array_filter($_POST['i_count'], function($value) {
        return $value !== '';
    });

    $a_counts = array_values($filtereda_counts);
    $i_counts = array_values($filteredi_counts);

    $selected_item = json_encode(map_check_list($items, $i_counts));
    $selected_accessories = json_encode(map_check_list($accessories, $a_counts));

    $update = $f->save_checkout($id, $selected_item, $selected_accessories);

    if ($update == True) {
      $_SESSION['success_message'] = "Checkout Completed!";
    }else{
      $_SESSION['failed_message'] = "Process failed";
    }

    header("Location: ../../administrator/checkout-details.php?checkoutID=".base64_encode($id));
    exit();

  }


  function map_check_list($item, $counts){
    $a = array_map(function($item, $counts) {
      return [$item, $counts];
    }, $item, $counts);

    return $a;
  }

?>