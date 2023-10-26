<?php 
  include '../assets/php/functions.php';
  include 'header.php';

  $a = new Volunteers();

  $recipients = $a->recipients($status='checkin');


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
                      <div class="card">
                          <div class="card-header">
                            <h5>Recipients Checkout Record</h5>
                            <span>The list below comprises registered users who have completed the registration ready for checkout.</span>
                            
                          </div>
                          <div class="card-block">
                            <div class="dt-responsive table-responsive">
                              <table id="simpletable" class="table table-striped table-bordered nowrap">
                                <thead>
                                  <tr>
                                    <th>Access code</th>
                                    <th>Name / Number</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Status</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php 
                                    if ($recipients->num_rows > 0) {
                                      foreach ($recipients as $key => $value) {
                                      ?>
                                      <tr>
                                        <td><?php echo $value['access_code'] ?></td>
                                        <td>
                                              <?php 
                                                if (!empty($value['number'])) {
                                                  echo $value['number'];
                                                }else if (!empty($value['name'])) {
                                                  echo $value['name'];
                                                }{

                                                }

                                              ?>
                                            </td>
                                        <td><?php echo $value['email'] ?></td>
                                        <td><?php echo $value['gender'] ?></td>
                                        <td>
                                          <?php 
                                            if (!empty($value['checkout'])) {
                                              echo '<span class="badge badge-primary">Checked</span>';
                                            }
                                          ?>
                                          
                                        </td>
                                        <td>
                                              <a href="checkout-details.php?checkoutID=<?php echo base64_encode($value['id']) ?>" class="btn btn-sm btn-primary"><i class="feather icon-folder"></i></a>
                                        </td>
                                      </tr>
                                      <?php
                                      }
                                    }


                                  ?>
                                  
                                </tbody>
                              </table>
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
<?php include 'footer.php'; ?>
  </body>
</html>