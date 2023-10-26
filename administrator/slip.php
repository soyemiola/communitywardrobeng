<?php 
  include '../assets/php/functions.php';
  include 'header.php';

  $getA = new Volunteers();

  $a = new ApplicationForm();
  $b = new Form();

  if ($_GET['recipient_ref_id']) {
    $id = json_decode($_GET['recipient_ref_id']);
  }else{

    header("Location: newrecord.php");
    exit();
  }
  
?>
  <style type="text/css">
    .dt{
      border:1px solid grey;
      border-radius: 5px;
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
                          <h5>Registration slip</h5>
                          <div class="card-header-right">
                              <ul class="list-unstyled card-option">
                                    <li><a href="newrecord.php"><i class="feather icon-plus" title="recipients record"></i>Create new record</a></li>
                              </ul>
                            </div>
                        </div>
                        <div class="card-block">
                          <div class="row">
                            <div class="col-xs-12 col-md-6 col-lg-6 ">
                              <?php 

                                if($id){
                                  $slip = $a->appointment_slip(intval($id));

                                  if ($slip->num_rows == 1) {
                                    foreach ($slip as $key => $value) {
                                      // code...
                                    ?>
                                    <div class="dt p-2" id="content">
                                      <h4 class="">Event Appointment Slip</h4>
                                      <p class="">Registration date: <b><?php echo $value['date'] ?></b></p>

                                      <hr>

                                      <div class="row">
                                        <div class="col-12">
                                          <div class="dte">
                                            <span><b>Access code: </b></span> 
                                            <span class="ml-1"><?php echo $value['access_code'] ?></span>
                                          </div>
                                          <div class="dte">
                                            <span><b>Appointment batch: </b></span> 
                                            <span class="ml-1"><?php echo $value['stream'] ?></span>
                                          </div>
                                          <div class="dte">
                                            <span><b>Shopping date: </b></span> 
                                            <span class="ml-1"><?php echo $value['appointment_date'] ?></span>
                                          </div>
                                          <div class="dte">
                                            <span><b>Shopping time slot: </b></span> 
                                            <span class="ml-1"><?php echo $value['time_slot'] ?></span>
                                          </div>
                                          <hr>
                                        </div>
                                        <hr>
                                        <div class="col-12">
                                          <h6>Applicant Information</h6>
                                        </div>
                                        <?php 
                                          if (!empty($value['email'])) {
                                            ?>
                                            <div class="col-12 mb-2">
                                              <div class="dte">
                                                <span><b>Email: </b></span> &nbsp;
                                                <span><?php echo $value['email']; ?></span>
                                              </div>
                                            </div>
                                            <?php
                                          }
                                        ?>
                                        
                                        <?php 
                                          if (!empty($value['number'])) {
                                            ?>
                                            <div class="col-xs-12 col-md-6 col-lg-4">
                                              <div class="dte">
                                                <span><b>Phone number: </b></span> <br>
                                                <span><?php echo $value['number'] ?></span>
                                              </div>
                                            </div>
                                            <?php
                                          }

                                        ?>
                                        <?php 
                                          if (!empty($value['name'])) {
                                            ?>
                                            <div class="col-xs-12 col-md-6 col-lg-4">
                                              <div class="dte">
                                                <span><b>Fullname: </b></span> <br>
                                                <span><?php echo $value['name'] ?></span>
                                              </div>
                                            </div>
                                            <?php
                                          }

                                        ?>
                                        <div class="col-xs-12 col-md-6 col-lg-4">
                                          <div class="dte">
                                            <span><b>Gender: </b></span> <br>
                                            <span><?php echo $value['gender'] ?></span>
                                          </div>
                                        </div>
                                        <div class="col-12 mt-2">
                                          <div class="dte">
                                            <span><b>Address: </b></span> <br>
                                            <span><?php echo $value['address'] ?></span>
                                          </div>
                                        </div>
                                      </div>

                                      <hr>

                                      <div class="row mt-3">
                                        <div class="col-12">
                                          <h6>Shopping address</h6>
                                          <p>
                                            <b><?php echo $value['appointment_address']; ?></b>
                                          </p>
                                          <h6>Shopping Time Limit</h6>
                                          <p>
                                            <b>20 minutes</b>
                                          </p>
                                          <hr>
                                          <?php 

                                            $coy = $b->coy_profile();

                                            if ($coy->num_rows == 1) {
                                              foreach ($coy as $key => $value) {
                                                ?>
                                                <p class="mb-0">
                                                  <b>Contact Number</b> <?php echo $value['number'] ?>
                                                </p>
                                                <p class="mt-0">
                                                  <b>Email Address</b> <?php echo $value['email'] ?>
                                                </p>
                                                <?php
                                              }
                                            }
                                          ?>
                                          
                                        </div>
                                      </div>

                                    </div> 
                                  <div>
                                  <button class="btn btn-primary btn-sm mt-4" id="downloadButton">
                                    Download Slip
                                  </button>
                                  <a href="newrecord.php" class="btn btn-sm btn-light mt-4">
                                    Back
                                  </a>           
                                </div>
                                      <?php
                                      }
                                    }
                                  }
                                ?> 
                            </div>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.2.61/jspdf.debug.js"></script>
  
  <script>
    document.getElementById('downloadButton').addEventListener('click', function() {
            var doc = new jsPDF();

            // Assuming the content you want to convert is in a div with id 'content'
            var element = document.getElementById('content');

            doc.fromHTML(element, 15, 15, {
                width: 170
            });

            doc.save('communitywardrobeng_slip.pdf');
        });
  </script>
  </body>
</html>