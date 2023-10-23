<?php 

  include 'functions.php';

  $f = new Volunteers();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['check_way_yes'] && empty($_POST['robot'])) {
                                $id = htmlspecialchars(trim($_POST['checkout_id']));
                                $accessories = json_encode($_POST['accessories']);
                                
                                                          
                                $update = $f->save_checkout($id, $accessories);

                                if ($update == True) {
                                 $_SESSION['success_message'] = "Checkout Completed!";
                                }else{
                                 $_SESSION['failed_message'] = "Process failed";
                                }
                                

                                header("Location: ../../administrator/checkout-details.php?checkoutID=".base64_encode($id));
                            exit();

                            }
?>