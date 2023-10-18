<?php 
 include 'header.php';

  include '../assets/php/functions.php';

  $counts = new Community();

  $total_recipients = $counts->total_registered();
  $total_gifted = $counts->total_gifted();
  $total_volunteers = $counts->volunteers();
  $total_volunteers_form = $counts->volunteers_form_submit();
  $total_accessories = $counts->total_accessories_items();

  
?>
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
                      <div class="row">
                        <div class="col-xl-3 col-md-6">
                          <div class="card bg-c-yellow update-card">
                            <div class="card-block">
                              <div class="row align-items-end">
                                <div class="col-8">
                                  <h4 class="text-white">
                                    <?php 
                                      if ($total_recipients->num_rows == 1) {
                                        foreach ($total_recipients as $key => $recipients) {
                                          echo $recipients['count'];
                                        }
                                      }
                                    ?>
                                  </h4>
                                  <h6 class="text-white m-b-0">Total Registered</h6>
                                </div>
                              </div>
                            </div>
                            <div class="card-footer">
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                          <div class="card bg-c-green update-card">
                            <div class="card-block">
                              <div class="row align-items-end">
                                <div class="col-8">
                                  <h4 class="text-white">
                                    <?php 
                                      if ($total_gifted->num_rows == 1) {
                                        foreach ($total_gifted as $key => $gifted) {
                                          echo $gifted['count'];
                                        }
                                      }
                                    ?>
                                  </h4>
                                  <h6 class="text-white m-b-0">Total Gifted</h6>
                                </div>
                              </div>
                            </div>
                            <div class="card-footer">
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                          <div class="card bg-c-pink update-card">
                            <div class="card-block">
                              <div class="row align-items-end">
                                <div class="col-8">
                                  <h4 class="text-white">
                                    <?php 
                                      if ($total_volunteers->num_rows == 1) {
                                        foreach ($total_volunteers as $key => $v) {
                                          echo $v['count'];
                                        }
                                      }
                                    ?>
                                  </h4>
                                  <h6 class="text-white m-b-0">Volunteers</h6>
                                </div>
                              </div>
                            </div>
                            <div class="card-footer">
                              <?php 
                                      if ($total_volunteers_form->num_rows == 1) {
                                        foreach ($total_volunteers_form as $key => $vf) {
                                          echo '<a href="volunteers.php" class="text-white">'. $vf['count'].' submitted forms</a>';
                                        }
                                      }
                              ?>
                              
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                          <div class="card bg-c-lite-green update-card">
                            <div class="card-block">
                              <div class="row align-items-end">
                                <div class="col-8">
                                  <h4 class="text-white">
                                    <?php 
                                      if ($total_accessories->num_rows == 1) {
                                        foreach ($total_accessories as $key => $accessories) {
                                          echo $accessories['total'];
                                        }
                                      }
                                    ?>
                                  </h4>
                                  <h6 class="text-white m-b-0">Total Accessories</h6>
                                </div>
                              </div>
                            </div>
                            <div class="card-footer">
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
  </body>
</html>