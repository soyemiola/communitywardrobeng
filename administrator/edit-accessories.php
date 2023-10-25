<?php 
  include 'header.php';

  include '../assets/php/functions.php';

  $e = new Volunteers();

  if (!$_GET['id']) {
    header("Location: accessories.php");
    exit();
  }
  $rec = $e->edit_accessories(base64_decode($_GET['id']));

  
?>

  <style type="text/css">
    .boxx{
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    padding: 15px;
    margin-bottom: 10px;
    }
    .check-group {
    counter-reset: total;
    counter-reset: checked;
    }
    .check-group > * + * {
    margin-top: 0.75rem;
    }
    .check-group .checkbox {
    counter-increment: total;
    }
    .check-group input[type=checkbox]:checked {
    counter-increment: checked;
    }
    .check-group__result {
    font-weight: bold;
    padding-top: 0.75rem;
    /*border-top: 1px solid rgba(0, 0, 0, 0.2);*/
    }
    .check-group__result:after {
    content: counter(checked) " / " counter(total);
    padding-left: 1ch;
    }
    .checkbox {
    cursor: pointer;
    display: flex;
    align-items: center;
    }
    .checkbox__input {
    position: absolute;
    width: 1.375em;
    height: 1.375em;
    opacity: 0;
    cursor: pointer;
    }
    .checkbox__input:checked + .checkbox__icon .tick {
    stroke-dashoffset: 0;
    }
    .checkbox__icon {
    width: 1.375em;
    height: 1.375em;
    flex-shrink: 0;
    overflow: visible;
    }
    .checkbox__icon .tick {
    stroke-dasharray: 20px;
    stroke-dashoffset: 20px;
    transition: stroke-dashoffset 0.2s ease-out;
    }
    .checkbox__label {
    margin-left: 0.5em;
    }
    input[type="radio"] {
    display: none;
    }
    input[type="radio"] + label:before {
    content: "";
    display: inline-block;
    width: 25px;
    height: 25px;
    padding: 6px;
    margin-right: 3px;
    background-clip: content-box;
    border: 2px solid #2A4E57;
    background-color: #e7e6e7;
    border-radius: 50%;
    }
    input[type="radio"]:checked + label:before {
    background-color: #2A4E57; 
    }
    label {
    display: flex;
    align-items: center;
    }
    .dt {
    border: 2px solid #bbb;
    padding: 10px;
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
                          <h5>Update Accessories Record</h5>
                          <div class="card-header-right">
                              <ul class="list-unstyled card-option">
                                    <li><a href="accessories.php"><i class="feather icon-list" title="recipients record"></i>Record List</a></li>
                              </ul>
                            </div>
                        </div>
                        <div class="card-block">
                          <div class="row">
                            <div class="col-xs-12 col-md-6">
                              <?php 
                              if(isset($_SESSION['success_message'])) {
                                  echo '<div class="alert alert-success" id="alert_msg_id">
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <i class="icofont icofont-close-line-circled"></i>
                                          </button>
                                          <strong>Notification!</strong> '.$_SESSION['success_message'].'
                                        </div>';

                                  unset($_SESSION['success_message']);
                              }
                              if(isset($_SESSION['failed_message'])) {
                                  echo '<div class="alert alert-danger" id="alert_msg_id">
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <i class="icofont icofont-close-line-circled"></i>
                                          </button>
                                          <strong>Notification!</strong> '.$_SESSION['failed_message'].'
                                        </div>';
                                        
                                  unset($_SESSION['failed_message']); 
                              }
                              

                              foreach ($rec as $key => $value) {
                                ?>
                                <form class="mt-1" method="post" action="../assets/php/proc_accessories.php">
                                <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                                <div class="boxx">
                                  <h6>Item Name</h6>
                                  <div class="form-group input-group mb-3">
                                    <input type="text" class="form-control shadow-none" name="name" value="<?php echo $value['name'] ?>" required placeholder="">
                                  </div>

                                  <h6>Item Count</h6>
                                  <div class="form-group input-group mb-3">
                                    <input type="text" class="form-control shadow-none" name="count" value="<?php echo $value['count'] ?>" required placeholder="0">
                                  </div>

                                  <div class="form-group mt-3">
                                    <input type="hidden" name="robot">
                                    <input type="hidden" name="update" value="1">
                                    <a href="accessories.php" class="btn btn-light btn-sm">Back</a>
                                    <button class="btn btn-primary btn-sm" type="submit">Update</button>
                                  </div>
                                </div>
                              </form>

                                <?php
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
  </body>
</html>