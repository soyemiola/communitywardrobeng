<?php 
  include 'header.php';
  include '../assets/php/func.php';

  $f = new ApplicationForm();

  if (isset($_GET['id'])) {

    $id = base64_decode($_GET['id']);
    $details = $f->appointment_slip($id);

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
                                    <li><a href="recipients.php"><i class="feather icon-list" title="recipients record"></i>Record List </a></li>
                              </ul>
                            </div>
                        </div>
                        <div class="card-block">                          
                          <?php 
                            if(isset($_SESSION['recipient_checkin'])) {
                                  echo '<div class="alert alert-success" id="alert_msg_id">
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <i class="icofont icofont-close-line-circled"></i>
                                          </button>
                                          <strong>Notification!</strong> '.$_SESSION['recipient_checkin'].'
                                        </div>';

                                  unset($_SESSION['recipient_checkin']);
                              }

                            if ($details->num_rows == 1) {
                              ?>
                              <div class="row">
                              <?php
                              foreach ($details as $key => $value) {
                                ?>
                                <div class="col-xs-12 col-md-6 boxx">
                                  <h5 class="p-2 m-2">Basic Information</h5>
                                  <div class="dtx p-2 mb-2">
                                    <h6>Purpose of Application: <b class="rep">
                                      <?php 
                                          if (!empty($value['purpose_of_application_others'])) {
                                           echo $value['purpose_of_application_others'];
                                          }else{
                                            echo $value['purpose_of_application'] ;
                                          }
                                      ?>
                                        
                                      </b></h6>
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
                                        echo '<span class="badge badge-primary mr-1">'. $item .'</span>';
                                      }

                                      if (!empty($value['item_needed_others'])) {
                                       echo '<p>
                                              Other Items: '. $value['item_needed_others'] .'
                                            </p>';
                                      }
                                    ?>
                                    
                                  </div>
                                  <div class="dtx p-2 mb-2">
                                    <h6>Shoe Size: <b class="rep"><?php echo $value['shoe_size'] ?></b></h6>
                                  </div>
                                  <div class="dtx p-2 mb-2">
                                    <h6>Cloth Size: <b class="rep"><?php echo $value['cloth_size'] ?></b></h6>
                                  </div>
                                  <div class="dtx p-2 mb-2">
                                    <h6>Accessories:</h6>
                                    <?php 
                                      $accessories = json_decode($value['accessories'] , true);
                                      foreach ($accessories as $key => $item) {
                                        echo '<span class="badge badge-primary mr-1">'. $item .'</span>';
                                      }

                                      if (!empty($value['accessories_others'])) {
                                       echo '<p>
                                              Other Items: '. $value['accessories_others'] .'
                                            </p>';
                                      }
                                    ?>
                                  </div>
                                </div>
                                <div class="col-xs-12 col-md-6 boxx">
                                  <h5 class="p-2 m-2">Event Appointment details</h5>
                                  <div class="dtx p-2 mb-2">
                                    <h6>Access Code: <b class="rep"><?php echo $value['access_code'] ?></b></h6>
                                  </div>
                                  <div class="dtx p-2 mb-2">
                                    <h6>Appointment batch:: <b class="rep"><?php echo $value['stream'] ?></b></h6>
                                  </div>
                                  <div class="dtx p-2 mb-2">
                                    <h6>Shopping date: <b class="rep"><?php echo $value['appointment_date'] ?></b></h6>
                                  </div>
                                  <div class="dtx p-2 mb-2">
                                    <h6>Shopping time: <b class="rep"><?php echo $value['time_slot'] ?></b></h6>
                                  </div>
                                  <div class="dtx p-2 mb-2">
                                    <h6>Shopping address: <b class="rep"><?php echo $value['appointment_address'] ?></b></h6>
                                  </div>
                                  <div class="dtx p-2 mb-2">
                                    <?php 
                                    if ($value['checkin'] == null || $value['checkin'] == '') {
                                      echo '<h6>Status: <span class="badge badge-primary rep">Registered</span></h6>';
                                    }else if ($value['checkin'] == 'checkin'){
                                      echo '<h6>Status: <span class="badge badge-primary rep">Checked in</span></h6>';
                                    }else{
                                      echo '<h6>Status: <span class="badge badge-primary rep">Checked out</span></h6>';
                                    }

                                    ?>
                                    
                                    
                                  </div>
                                </div>

                                <div class="col-12">
                                  <a href="recipients.php" class="btn btn-light btn-sm">
                                    Back
                                  </a>
                                  
                                  <?php 
                                    if ($value['checkin'] == null || $value['checkin'] == '') {
                                    ?>
                                    <a href="checkin.php?recipient_ref_id=<?php echo base64_encode($value['id']) ?>" class="btn btn-primary btn-sm">
                                      Check-in
                                    </a>

                                    <?php
                                    }else{
                                      ?>
                                      <a href="checkout-details.php?checkoutID=<?php echo base64_encode($value['id']) ?>" class="btn btn-primary btn-sm">
                                        Checkout
                                      </a>
                                      <?php
                                    }
                                  ?>  
                                </div>
                                <?php
                              }
                              ?>
                              </div>
                              <?php
                            }
                          ?>
                          
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
  </body>
</html>