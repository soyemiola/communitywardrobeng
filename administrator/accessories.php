<?php 
  include 'header.php';

  include '../assets/php/functions.php';

  $a = new Volunteers();

  $accessories = $a->accessories();
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
                            <h5>Accessories Record</h5>
                            <!-- <span>The list below comprises registered users who have completed the registration ready for checkout.</span> -->
                            <div class="card-header-right">
                              <ul class="list-unstyled card-option">
                                    <li><a href="add-accessories.php"><i class="feather icon-plus" title="add new record"></i>Add new </a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="card-block">
                            <div class="dt-responsive table-responsive">
                              <table id="simpletable" class="table table-striped table-bordered nowrap">
                                <thead>
                                  <tr>
                                    <th>Item</th>
                                    <th>Counts</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php 
                                    if ($accessories->num_rows > 0) {
                                      foreach ($accessories as $key => $value) {
                                        echo '
                                        <tr>
                                          <td>'. $value['name'].'</td>
                                          <td>'. $value['count'].'</td>
                                          <td>
                                            <a href="edit-accessories.php?id='.base64_encode($value['id']).'" class="btn btn-sm btn-primary"><i class="feather icon-edit"></i></a>
                                            <a href="#" class="btn btn-sm btn-danger"><i class="feather icon-trash"></i></a>
                                          </td>
                                        </tr>

                                        ';
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