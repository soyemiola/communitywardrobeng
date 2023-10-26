<?php 
  include '../assets/php/functions.php';
  include 'header.php';

  if (isset($_GET['idref'])) {    

    $a = new Volunteers();
    $id = base64_decode($_GET['idref']);

    $volunteer = $a->volunteers_details($id);

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
                                    <li><a href="volunteers.php"><i class="feather icon-list" title="recipients record"></i>Record List </a></li>
                              </ul>
                            </div>
                        </div>
                        <div class="card-block">
                          <?php 
                            if(isset($_SESSION['volunteer_activated'])) {
                              echo '
                              <div class="row" id="alert_msg_id">
                                <div class="col-12">
                                  <div class="alert alert-success">
                                    <strong>Alert! </strong> '.$_SESSION['volunteer_activated'].'
                                  </div>
                                </div>
                              </div>
                              ';

                              unset($_SESSION['volunteer_activated']);
                            }
                            if(isset($_SESSION['volunteer_deactivated'])) {
                              echo '
                              <div class="row" id="alert_msg_id">
                                <div class="col-12">
                                  <div class="alert alert-success">
                                    <strong>Alert! </strong>'.$_SESSION['volunteer_deactivated'].'
                                  </div>
                                </div>
                              </div>
                              ';

                              unset($_SESSION['volunteer_deactivated']);
                            }

                          ?>
                          
                          <?php 

                            if ($volunteer->num_rows == 1) {
                              ?>
                              <div class="row">
                              <?php
                              foreach ($volunteer as $key => $value) {
                                ?>
                                <div class="col-xs-12 col-md-6 boxx">
                                  <h5 class="p-2 m-2">Basic Information</h5>
                                  <div class="dtx p-2 mb-2">
                                    <h6>Name: <b class="rep"><?php echo $value['name'] ?></b></h6>
                                  </div>
                                  <div class="dtx p-2 mb-2">
                                    <h6>Number: <b class="rep"><?php echo $value['number'] ?></b></h6>
                                  </div>                                  
                                  <div class="dtx p-2 mb-2">
                                    <h6>Email: <b class="rep"><?php echo $value['email'] ?></b></h6>
                                  </div>
                                  <div class="dtx p-2 mb-2">
                                    <h6>Gender: <b class="rep"><?php echo $value['gender'] ?></b></h6>
                                  </div>
                                  <div class="dtx p-2 mb-2">
                                    <h6>Address: <b class="rep"><?php echo $value['address'] ?></b></h6>                                    
                                  </div>
                                  <div class="dtx p-2 mb-2">
                                    <h6>Date of Birth: <b class="rep"><?php echo $value['dob'] ?></b></h6>
                                  </div>
                                  <div class="dtx p-2 mb-2">
                                    <h6>Position: <b class="rep"><?php echo $value['position'] ?></b></h6>
                                  </div>
                                </div>
                                
                                <div class="col-xs-12 col-md-6 boxx">
                                  <h5 class="p-2 m-2">Other Information</h5>
                                  <div class="dtx p-2 mb-2">
                                    <h6>Emergency Contact: <b class="rep"><?php echo $value['eme_contact'] ?></b></h6>
                                  </div>
                                  <div class="dtx p-2 mb-2">
                                    <h6>Emergency Contact Relationship: <b class="rep"><?php echo $value['eme_contact_rel'] ?></b></h6>
                                  </div>
                                  <div class="dtx p-2 mb-2">
                                    <h6>How did you hear about us? <b class="rep"><?php echo $value['aboutus'] ?></b></h6>
                                  </div>
                                  <div class="dtx p-2 mb-2">
                                    <h6>Are you a current or previous recipient of Community WardrobeNG? <b class="rep"><?php echo $value['previous_recipient'] ?></b></h6>
                                  </div>
                                  <div class="dtx p-2 mb-2">
                                    <h6>May we use your name and/or likeness in publicity related to the Community WardrobeNG? 

                                    <b class="rep"><?php echo $value['publicity'] ?></b>
                                  </h6>                                    
                                  </div>
                                  <div class="dtx p-2 mb-2">
                                    <h6>Terms of Agreement? <b class="rep"><?php echo $value['term_of_agreement'] ?></b></h6>
                                  </div>
                                  <div class="dtx p-2 mb-2">
                                    <h6>Status <b class="rep">
                                      <?php
                                        if ($value['status'] == 1) {
                                          echo 'Active';
                                        }else{
                                          echo 'Inactive';
                                        }
                                      ?></b>
                                    </h6>
                                  </div>
                                </div>

                                <div class="col-12">
                                  <?php 

                                    if ($value['status'] == 1) {
                                        ?>
                                        <a href="process-volunteer.php?volunteer_ref_id=<?php echo base64_encode($value["id"]) ?>&&ACCEPT=NO" class="btn btn-danger btn-sm">
                                                Deactivate
                                              </a>
                                        <?php
                                        }else{
                                          ?>
                                          <a href="process-volunteer.php?volunteer_ref_id=<?php echo base64_encode($value["id"]) ?>&&ACCEPT=YES" class="btn btn-primary btn-sm">
                                              Activate
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

