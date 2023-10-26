<?php 
  include '../assets/php/functions.php';
  include 'header.php';

  $a = new Community();

  $users = $a->fetch_all_user_volunteer();

  
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
                            <h5>User Record List</h5>
                            <?php 
                            if(isset($_SESSION['del_success'])) {
                                  echo '<div class="alert alert-success" id="alert_msg_id">
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <i class="icofont icofont-close-line-circled"></i>
                                          </button>
                                          <strong>Alert!</strong> '.$_SESSION['del_success'].'
                                        </div>';

                                  unset($_SESSION['del_success']);
                              }
                              if(isset($_SESSION['del_error'])) {
                                  echo '<div class="alert alert-danger" id="alert_msg_id">
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <i class="icofont icofont-close-line-circled"></i>
                                          </button>
                                          <strong>Alert!</strong> '.$_SESSION['del_error'].'
                                        </div>';

                                  unset($_SESSION['del_error']);
                              }
                            ?>                            
                          </div>
                          <div class="card-block">
                            <div class="dt-responsive table-responsive">
                              <?php 
                                if ($users->num_rows > 0) {
                                  ?>
                                  <table id="simpletable" class="table table-striped table-bordered nowrap">
                                    <thead>
                                      <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Access Level</th>
                                        <th>Status</th>
                                        <th></th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <?php 
                                        foreach ($users as $key => $value) {
                                          ?>
                                          <tr>
                                            <td>
                                              <?php echo $value['name']; ?>
                                            </td>
                                            <td><?php echo $value['email']; ?></td>
                                            <td><?php

                                              if ($value['accesslevel'] == 1) {
                                                echo 'Administrator';
                                              }else{
                                                echo 'Volunteer';
                                              }
                                             ?></td>
                                            <td><?php
                                              if ($value['status'] == 1) {
                                                echo '<span class="badge badge-primary">Active</span>';
                                              }else{
                                                echo '<span class="badge badge-primary">Disabled</span>';
                                              }
                                             ?></td>
                                            <td>
                                                <a href="javascript:void(0)" class="btn btn-sm btn-primary" onclick="edit_user('us_<?php echo $value["id"] ?>')"
                                                 id="us_<?php echo $value['id'] ?>" data-name="<?php echo $value['name'] ?>" data-email="<?php echo $value['email'] ?>" data-accesslevel="<?php echo $value['accesslevel'] ?>" data-ustatus="<?php echo $value['status'] ?>"><i class="feather icon-edit"></i></a>

                                                 <a href="#" class="btn btn-dark btn-sm" title="reset password">
                                                   <i class="feather icon-settings"></i>
                                                 </a>
                                                <?php 
                                                  if ($_SESSION['email'] != $value['email']) {
                                                    ?>
                                                    <a href="delete.php?user_ref_id=<?php echo base64_encode($value['id']) ?>" class="btn btn-sm btn-danger"><i class="feather icon-trash"></i></a>
                                                    <?php
                                                  }

                                                ?>
                                                
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