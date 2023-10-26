<?php 
  include '../assets/php/functions.php';
  include 'header.php'; 

  $a = new Volunteers();

  $volunteers_list = $a->volunteers_list();

  
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
                            <h5>Voluteers Record List</h5>
                            <span>The list below comprises registered volunteers, providing a comprehensive overview of individuals who have completed the registration process.</span>
                            <div class="card-header-right">
                              <!-- <ul class="list-unstyled card-option">
                                    <li><a href="newrecord.php"><i class="feather icon-plus" title="add new record"></i>Add Record </a></li>
                                    <li><i class="feather icon-download" title="download record"></i></li>
                              </ul> -->
                            </div>
                          </div>
                          <div class="card-block">
                            <div class="dt-responsive table-responsive">
                              <?php 
                                if ($volunteers_list->num_rows > 0) {
                                  ?>
                                  <table id="simpletable" class="table table-striped table-bordered nowrap">
                                    <thead>
                                      <tr>
                                        <th>Name</th>
                                        <th>Email / Number</th>
                                        <th>Gender</th>
                                        <th>Position</th>
                                        <th>Status</th>
                                        <th></th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <?php 
                                        foreach ($volunteers_list as $key => $value) {
                                          ?>
                                          <tr>
                                            <td>
                                              <?php echo $value['name']; ?>
                                            </td>
                                            <td><?php echo $value['email'].' <br> <small><a href="tel:'. $value['number'] .'">'. $value['number'] .'</a></small>'; ?></td>
                                            <td><?php echo $value['gender']; ?></td>
                                            <td><?php echo $value['position']; ?></td>
                                            <td>
                                              <?php 
                                                if ($value['status'] == 1 ) {
                                                  echo '<span class="badge badge-success">active</span>';
                                                }else{
                                                  echo '<span class="badge badge-primary">inactive</span>';
                                                } 
                                              ?>
                                                
                                                
                                              </td>
                                            <td>
                                                <a href="volunteers-details.php?idref=<?php echo base64_encode($value['id']) ?>" class="btn btn-sm btn-primary"><i class="feather icon-folder"></i></a>
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