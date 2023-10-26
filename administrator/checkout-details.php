<?php 
  
  include '../assets/php/functions.php';
  include 'header.php'; 

  $f = new Volunteers();
  // $u = new Volunteers();


  if (isset($_GET['checkoutID'])) {

    $id = base64_decode($_GET['checkoutID']);
    $details = $f->appointment_slip($id);

    $a = $f->accessories();
    $i = $f->items_needed();

  }else{

    header("Location: recipients.php");
    exit();

  }

  

?>

  <style type="text/css">
    .boxx{
      box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
      padding: 15px;
      margin-bottom: 10px;
    }
    .dtx{
      border-bottom: 1px solid grey;
    }
    .rep{
      float: right;
    }
  </style>
  <body>
    <div class="theme-loader">
      <div class="ball-scale">
        <div class="contain">
          <div class="ring">
            <div class="frame"></div>
          </div>
        </div>
      </div>
    </div>
    <div id="pcoded" class="pcoded">
      <div class="pcoded-overlay-box"></div>
      <div class="pcoded-container navbar-wrapper">
        <!-- Top navbar -->
        <?php include 'top.php'; ?>
        <!-- // end Top navbar -->
        <div class="pcoded-main-container">
          <div class="pcoded-wrapper">
            <!-- Menubar -->
            <?php include 'menubar.php'; ?>
            <!-- // end Menubar -->
            <div class="pcoded-content">
              <div class="pcoded-inner-content">
                <!-- Main Content -->
                <div class="main-body">
                  <div class="page-wrapper">
                    <div class="page-body">
                      <div class="card">
                        <div class="card-header">
                          <h5>Recipients Record</h5>
                          <div class="card-header-right">
                              <ul class="list-unstyled card-option">
                                    <li><a href="checkout.php"><i class="feather icon-list" title="recipients record"></i>Checkout List </a></li>
                              </ul>
                            </div>
                        </div>
                        <div class="card-block">
                          <div class="row">
                            <div class="col-12">
                              <?php

                                if(isset($_SESSION['success_message'])) {
                                  echo '<div class="alert alert-success" id="alert_msg_id">
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <i class="icofont icofont-close-line-circled"></i>
                                          </button>
                                          <strong>Alert!</strong> '.$_SESSION['success_message'].'
                                        </div>';

                                  unset($_SESSION['success_message']);
                              }
                              if(isset($_SESSION['failed_message'])) {
                                  echo '<div class="alert alert-danger" id="alert_msg_id">
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <i class="icofont icofont-close-line-circled"></i>
                                          </button>
                                          <strong>Alert!</strong> '.$_SESSION['failed_message'].'
                                        </div>';
                                        
                                  unset($_SESSION['failed_message']); 
                              }
                              ?>
                            </div>
                            <?php 

                              if ($details->num_rows == 1) {
                                foreach ($details as $key => $value) {
                                  ?>
                                <div class="col-xs-12 col-md-5 boxx">
                                  <h5 class="p-2 m-2">Checkout details</h5>
                                  <div class="dtx p-2 mb-2">
                                    <h6>Access Code: <b class="rep"><?php echo $value['access_code'] ?></b></h6>
                                  </div>
                                  <?php 
                                    if (!empty($value['number'])) {
                                      ?>
                                      <div class="dtx p-2 mb-2">
                                        <h6>Phone Number: <b class="rep"><?php echo $value['number'] ?></b></h6>
                                      </div>
                                      <?php
                                    }
                                  ?>
                                  <div class="dtx p-2 mb-2">
                                    <h6>Gender: <b class="rep"><?php echo $value['gender'] ?></b></h6>
                                  </div>
                                  <?php 
                                    if (!empty($value['email'])) {
                                      ?>
                                      <div class="dtx p-2 mb-2">
                                        <h6>Email: <b class="rep"><?php echo $value['email'] ?></b></h6>
                                      </div>
                                      <?php
                                    }
                                  ?>
                                  <?php 
                                    if (!empty($value['name'])) {
                                      ?>
                                      <div class="dtx p-2 mb-2">
                                        <h6>Name: <b class="rep"><?php echo $value['name'] ?></b></h6>
                                      </div>
                                      <?php
                                    }
                                  ?>
                                  <div class="dtx p-2 mb-2">
                                    <h6>Items Needed:</h6>
                                    <?php 
                                      $items = json_decode($value['item_needed'] , true);
                                      foreach ($items as $key => $item) {
                                        echo '<span class="badge badge-primary mr-1" style="font-weight: normal">'. $item .'</span>';
                                      }

                                      if (!empty($value['item_needed_others'])) {
                                       echo '<p>
                                              Other Items: '. $value['item_needed_others'] .'
                                            </p>';
                                      }
                                    ?>
                                  </div>
                                  <div class="dtx p-2 mb-2">
                                    <h6>Accessories:</h6>
                                    <?php 
                                      $accessories = json_decode($value['accessories'] , true);
                                      foreach ($accessories as $key => $item) {
                                        echo '<span class="badge badge-primary mr-1" style="font-weight: normal">'. $item .'</span>';
                                      }

                                      if (!empty($value['accessories_others'])) {
                                       echo '<p>
                                              Other Items: '. $value['accessories_others'] .'
                                            </p>';
                                      }
                                    ?>
                                  </div>
                                  
                                  <div class="dtx p-2 mb-2">
                                    <h6>Appointment batch: <b class="rep"><?php echo $value['stream'] ?></b></h6>
                                  </div>
                                  <div class="dtx p-2 mb-2">
                                    <h6>Shopping address:</h6>
                                    <b class="mt-2"><?php echo $value['appointment_address'] ?></b>
                                  </div>
                                  <div class="dtx p-2 mb-2">
                                    <h6>Status: 
                                      <?php 
                                        if (empty($value['checkout'])) {
                                          echo '<span class="badge badge-primary rep">Registered</span>';
                                        }else{
                                          echo '<span class="badge badge-success rep">Checkout</span>';
                                        }
                                      ?>
                                    </h6>
                                    
                                  </div>

                                  <?php 
                                    if (!empty($value['checkout_item'])) {
                                      ?>
                                      <hr>
                                    <div class="p-2 mb-2">
                                      <h6>Shopping materials:</h6>
                                      <header>Items</header>
                                      <?php 
                                        $items = json_decode($value['checkout_item'] , true);
                                        foreach ($items as $key => $item) {
                                          print_r('<span class="badge badge-primary mr-1" style="font-weight: normal">'. $item[0] .' ('. $item[1] .') </span>');
                                        }
                                      ?>
                                      <br><br>
                                      <header>Accessories</header>
                                      <?php 
                                        $items = json_decode($value['checkout_accessories'] , true);
                                        foreach ($items as $key => $acc) {
                                          print_r('<span class="badge badge-primary mr-1" style="font-weight: normal">'. $acc[0] .' ('. $acc[1] .') </span>');
                                        }
                                      ?>
                                    </div>
                                      <?php
                                    }
                                  ?>
                                  
                                </div>
                                <div class="col-xs-12 col-md-7 boxx">
                                  <h5 class="p-2 m-2">Items recieved</h5>
                                  <?php  
                                  ?>
                                  <div class="dtx p-2 mb-2">
                                    <ul class="nav nav-tabs">
                                      <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#items">Items</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#accessories">Accessories</a>
                                      </li>
                                    </ul>
                                    <div class="tab-content">
                                      <div class="tab-pane container p-3 active" id="items">
                                        <table id="" class="item table nowrap">
                                          <thead>
                                            <tr>
                                              <th>Name</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            
                                            <?php 
                                            if ($i->num_rows > 0) {
                                              foreach ($i as $key => $a_value) {
                                                
                                                ?>
                                                <tr>
                                                  <td style="width: 100%;">
                                                    
                                                    <label for="myCheckbox_items<?php echo $a_value['id'] ?>" class="checkbox" name="items">
                                                    <input class="checkbox__input" type="checkbox" id="myCheckbox_items<?php echo $a_value['id'] ?>" name="items[]" value="<?php echo $a_value['name'] ?>" form="checkout-list" 
                                                     onchange="checkbox_selected('myCheckbox_items<?php echo $a_value["id"] ?>', 'myCheckbox_item_count_<?php echo $a_value["id"] ?>')">

                                                    <span class="checkbox__label"><?php echo $a_value['name'] ?></span>
                                                  </label>
                                                  <input type="text" name="i_count[]" id="myCheckbox_item_count_<?php echo $a_value['id'] ?>" placeholder="count" form="checkout-list" style="display: none; float: right; width: 100px !important;">
                                                  </td>
                                                </tr>
                                                
                                                <?php
                                              }
                                              ?>
                                              <?php
                                            }
                                          ?>
                                          </tbody>
                                        </table>
                                      </div>
                                      <div class="tab-pane container fade pt-3" id="accessories">
                                        <table id="" class="item table nowrap">
                                          <thead>
                                            <tr>
                                              <th>Name</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            
                                            <?php 
                                            if ($a->num_rows > 0) {
                                              foreach ($a as $key => $a_value) {
                                                
                                                ?>
                                                <tr>
                                                  <td style="width: 100%;">
                                                    
                                                    <label for="myCheckbox_accessories<?php echo $a_value['id'] ?>" class="checkbox" name="items">
                                                    <input class="checkbox__input" type="checkbox" id="myCheckbox_accessories<?php echo $a_value['id'] ?>" name="accessories[]" value="<?php echo $a_value['name'] ?>" form="checkout-list" 
                                                     onchange="checkbox_selected('myCheckbox_accessories<?php echo $a_value["id"] ?>', 'myCheckbox_accessories_count_<?php echo $a_value["id"] ?>')">

                                                    <span class="checkbox__label"><?php echo $a_value['name'] ?></span>
                                                  </label>
                                                  <input type="text" name="a_count[]" id="myCheckbox_accessories_count_<?php echo $a_value['id'] ?>" placeholder="count" form="checkout-list" style="display: none; float: right; width: 100px !important;">
                                                  </td>
                                                </tr>
                                                
                                                <?php
                                              }
                                              ?>
                                              <?php
                                            }
                                          ?>
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                    
                                  </div>
                                </div>


                                <div class="col-12">
                                  <form id="checkout-list" method="post" action="../assets/php/checkout.php">
                                    <input type="hidden" name="checkout_id" value="<?php echo base64_decode($_GET['checkoutID']); ?>">
                                    <input type="hidden" name="robot">
                                    <input type="hidden" name="check_way_yes" value="check_way_yes">
                                    <button type="submit" form="checkout-list" class="btn btn-primary btn-sm">
                                      <?php 
                                        if (empty($value['checkout_item'])) {
                                          echo 'Save record';
                                        }else{
                                          echo 'Update record';
                                        }
                                      ?>
                                      
                                    </button>
                                  </form>
                                  
                                </div>
                                <?php
                                }
                              }
                            ?>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end main content -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include 'footer.php'; ?>
  <script type="text/javascript">
    const checkbox_selected = (id, count) =>{
      var chk = document.getElementById(id);
      var isChecked = chk.checked;
      
      if (isChecked) {
          document.getElementById(count).style.display = 'block';
      } else {
          document.getElementById(count).style.display = 'none';
        }
    }

    // document.getElementById('myCheckbox').addEventListener('click', function() {
    //   var isChecked = this.checked;
    //   if (isChecked) {
    //     alert('Checkbox is checked');
    //   } else {
    //     alert('Checkbox is not checked');
    //   }
    // });


    $('.item').dataTable({
      "bPaginate": false
  });
  </script>
  </body>
</html>