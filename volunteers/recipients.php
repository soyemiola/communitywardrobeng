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
                            <div class="dt-responsive table-responsive">
                              <?php 
                                if ($recipients->num_rows > 0) {
                                  ?>
                                  <table id="simpletable" class="table table-striped table-bordered nowrap">
                                    <thead>
                                      <tr>
                                        <th>Phone Number</th>
                                        <th>Email</th>
                                        <th>Gender</th>
                                        <th>Purpose of Application</th>
                                        <th></th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <?php 
                                        foreach ($recipients as $key => $value) {
                                          ?>
                                          <tr>
                                            <td>
                                              <?php echo $value['number']; ?>
                                            </td>
                                            <td><?php echo $value['email']; ?></td>
                                            <td><?php echo $value['gender']; ?></td>
                                            <td><?php echo $value['purpose_of_application']; ?></td>
                                            <td>
                                                  <a href="record-details.php?id=<?php echo base64_encode($value['id']) ?>" class="btn btn-sm btn-primary"><i class="feather icon-folder"></i></a>
                                            </td>
                                          </tr>

                                          <?php
                                        }

                                      ?>
                                    </tbody>
                                  </table>
                                  <?php
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
<?php include 'footer.php'; ?>
  </body>
</html>