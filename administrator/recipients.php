<?php 
  include 'header.php';

  include '../assets/php/functions.php';

  $a = new Volunteers();

  $recipients = $a->recipients();

  
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
                            <h5>Recipients Record List</h5>
                            <span>The list below comprises registered users, providing a comprehensive overview of individuals who have completed the registration process.</span>
                            <div class="card-header-right">
                              <ul class="list-unstyled card-option">
                                    <li><a href="newrecord.php"><i class="feather icon-plus" title="add new record"></i>Add Record </a></li>
                                    <li><i class="feather icon-download" title="download record"></i></li>
                              </ul>
                            </div>
                          </div>
                          <div class="card-block">
                            <?php 
                              if(isset($_SESSION['del_success'])) {
                                  echo '<div class="alert alert-success" id="alert_msg_id">
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <i class="icofont icofont-close-line-circled"></i>
                                          </button>
                                          <strong>Notification!</strong> '.$_SESSION['del_success'].'
                                        </div>';

                                  unset($_SESSION['del_success']);
                              }
                              
                              if(isset($_SESSION['del_error'])) {
                                  echo '<div class="alert alert-danger" id="alert_msg_id">
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <i class="icofont icofont-close-line-circled"></i>
                                          </button>
                                          <strong>Notification!</strong> '.$_SESSION['del_error'].'
                                        </div>';
                                        
                                  unset($_SESSION['del_error']); 
                              }
                            ?>
                            <div class="dt-responsive table-responsive">
                                  <table id="simpletable" class="table table-striped table-bordered nowrap">
                                    <thead>
                                      <tr>
                                        <th>Access code</th>
                                        <th>Name / Number</th>
                                        <th>Email</th>
                                        <th>Gender</th>
                                        <th>Purpose</th>
                                        <th>Status</th>
                                        <th></th>
                                      </tr>
                                    </thead>
                                    <tbody>
                              <?php 
                                if ($recipients->num_rows > 0) {
                                  ?>
                                      <?php 
                                        foreach ($recipients as $key => $value) {
                                          ?>
                                          <tr>
                                            <td><?php echo $value['access_code']; ?></td>
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
                                            <td><?php echo $value['email']; ?></td>
                                            <td><?php echo $value['gender']; ?></td>
                                            <td><?php echo $value['purpose_of_application']; ?></td>
                                            <td>
                                              <?php 
                                                if ($value['checkin'] != Null ) {
                                                  echo '<span class="badge badge-primary">checkin</span>';
                                                }

                                                if ($value['checkout'] != Null ) {
                                                  echo '<span class="badge badge-primary">checkout</span>';
                                                }
                                              ?>
                                              
                                            </td>
                                            <td>
                                                  <a href="record-details.php?id=<?php echo base64_encode($value['id']) ?>" class="btn btn-sm btn-primary"><i class="feather icon-folder"></i></a>
                                                  <a href="remove-recipient.php?id=<?php echo base64_encode($value['id']) ?>" class="btn btn-sm btn-danger"><i class="feather icon-trash"></i></a>
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