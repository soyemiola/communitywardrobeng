<?php 
  include 'header.php';

  include '../assets/php/functions.php';

  $getA = new Volunteers();

  $purpose = $getA->app_purpose();
  $item_needed = $getA->items_needed();
  $accessories = $getA->accessories();
  $time_slot = $getA->application_time_slot();
  
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
                          <h5>Add Recipients Record</h5>
                          <div class="card-header-right">
                              <ul class="list-unstyled card-option">
                                    <li><a href="recipients.php"><i class="feather icon-list" title="recipients record"></i>Record List</a></li>
                              </ul>
                            </div>
                        </div>
                        <div class="card-block">
                          <div class="row">
                            <div class="col-xs-12 col-md-6">
                              <?php 
                              // if(isset($_SESSION['success_message'])) {
                              //     echo '<div class="alert alert-success" id="alert_msg_id">
                              //             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              //             <i class="icofont icofont-close-line-circled"></i>
                              //             </button>
                              //             <strong>Notification!</strong> '.$_SESSION['success_message'].'
                              //           </div>';

                              //     unset($_SESSION['success_message']);
                              // }
                              if(isset($_SESSION['failed_message'])) {
                                  echo '<div class="alert alert-danger" id="alert_msg_id">
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <i class="icofont icofont-close-line-circled"></i>
                                          </button>
                                          <strong>Notification!</strong> '.$_SESSION['failed_message'].'
                                        </div>';
                                        
                                  unset($_SESSION['failed_message']); 
                              }
                              if(isset($_SESSION['number_exit'])) {
                                  echo '<div class="alert alert-danger" id="alert_msg_id">
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <i class="icofont icofont-close-line-circled"></i>
                                          </button>
                                          <strong>Success!</strong> '.$_SESSION['number_exit'].'
                                        </div>';
                                        
                                  unset($_SESSION['number_exit']); 
                              }
                              if(isset($_SESSION['email_exit'])) {
                                  echo '<div class="alert alert-danger" id="alert_msg_id">
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <i class="icofont icofont-close-line-circled"></i>
                                          </button>
                                          <strong>Success!</strong> '.$_SESSION['email_exit'].'
                                        </div>';
                                        
                                  unset($_SESSION['email_exit']); 
                              }
                              ?>
                              
                              <div class="d-flex p-3">
                                <div class="">
                                  <!-- No Number checkbox -->
                                  <label for="no-number" class="checkbox mr-2" name="no-number">
                                    <input class="checkbox__input" type="checkbox" id="no-number" name="">

                                    <svg class="checkbox__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22">
                                      <rect width="21" height="21" x=".5" y=".5" fill="#FFF" stroke="#006F94" rx="3" />
                                      <path class="tick" stroke="#2A4E57" fill="none" stroke-linecap="round" stroke-width="4" d="M4 10l5 5 9-9" />
                                    </svg>
                                    <span class="checkbox__label">No Number</span>
                                  </label>
                                </div>
                                <div class="">
                                  <!-- No email checkbox -->
                                <label for="no-email" class="checkbox ml-2" name="no-email">
                                  <input class="checkbox__input" type="checkbox" id="no-email" name="">

                                  <svg class="checkbox__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22">
                                    <rect width="21" height="21" x=".5" y=".5" fill="#FFF" stroke="#006F94" rx="3" />
                                    <path class="tick" stroke="#2A4E57" fill="none" stroke-linecap="round" stroke-width="4" d="M4 10l5 5 9-9" />
                                  </svg>
                                  <span class="checkbox__label">No Email</span>
                                </label>

                                </div>
                              </div>

                              <form class="mt-1" method="post" action="../assets/php/newprocess.php">
                                <div class="boxx" id="nobox" style="display: none">
                                  <h6>Full name</h6>
                                  <div class="form-group mb-3">
                                    <input type="text" class="form-control shadow-none" name="fullname" placeholder="Firstname Lastname">                                    
                                  </div>
                                  <small class="badge badge-light">Required</small>
                                </div>
                                <div class="boxx" id="phonenumberbox">
                                  <h6>Phone Number</h6>
                                  <div class="form-group input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text text-white">+234</span>
                                    </div>
                                    <input type="text" class="form-control shadow-none" name="number" placeholder="812-345-6789">
                                  </div>
                                  <small class="badge badge-light">Required</small>
                                </div>
                                <div class="boxx" id="emailbox">
                                  <h6>Email</h6>
                                  <div class="form-group">
                                    <input type="email" class="form-control shadow-none" name="email" value="">
                                  </div>
                                </div>
                                <div class="boxx">
                                  <h6>Gender</h6>
                                  <div class="form-group">
                                    <select class="form-control shadow-none" name="gender">
                                      <option selected disabled>select option</option>
                                      <option value="female">Female</option>
                                      <option value="male">Male</option>
                                    </select>
                                    <small class="badge badge-light">Required</small>
                                  </div>
                                </div>
                                <div class="boxx">
                                  <h6>Address</h6>
                                  <div class="form-group">
                                    <!-- <textarea class="form-control shadow-none" name="address" style="resize: none;" rows="3" ></textarea> -->
                                    <select class="form-control shadow-none" name="address">
                                      <option selected disabled>select option</option>
                                      <option value="Oshodi Lagos">Oshodi Lagos</option>
                                      <option value="Obalende Lagos">Obalende Lagos</option>
                                      <option value="Ikeja Lagos">Ikeja Lagos</option>
                                      <option value="Iyana-Ipaja Lagos">Iyana-Ipaja Lagos</option>
                                      <option value="Ojuelegba Lagos">Ojuelegba Lagos</option>
                                      <option value="Idumota Lagos">Idumota Lagos</option>
                                      <option value="Mile 2 Lagos">Mile 2 Lagos</option>
                                      <option value="Ojota Lagos">Ojota Lagos</option>
                                      <option value="Mushin Lagos">Mushin Lagos</option>
                                      <option value="Ikorodu Lagos">Ikorodu Lagos</option>
                                      <option value="Ojota Lagos">Ojota Lagos</option>
                                      <option value="Lekki Lagos">Lekki Lagos</option>
                                      <option value="Ajah Lagos">Ajah Lagos</option>
                                      <option value="Ikoyi Lagos">Ikoyi Lagos</option>
                                      <option value="Yaba Lagos">Yaba Lagos</option>
                                      <option value="Victoria Island Lagos">Victoria Island Lagos</option>
                                      <option value="Gbagada Lagos">Gbagada Lagos</option>
                                      <option value="Abule-Egba Lagos">Abule-Egba Lagos</option>
                                    </select>                 
                                    <input type="text" name="address_others" class="form-control shadow-none mt-1" placeholder="if other specify" value="">

                                    <small class="badge badge-light">Required</small>
                                  </div>
                                </div>
                                <div class="boxx">
                                  <h6>Purpose of Application</h6>
                                  
                                  <div class="form-group">
                                    <?php 
                                      if ($purpose->num_rows > 0) {
                                        ?>
                                        <select name="purpose_of_application" class="form-control shadow-none shadow-none">
                                          <option selected disabled>select option</option>
                                        <?php
                                        foreach ($purpose as $key => $value) {
                                          echo '<option value="'. $value['name'] .'">'. $value['name'] .'</option>';
                                        }
                                        ?>
                                        </select>
                                        <?php
                                      }
                                    ?>
                                    <input type="text" name="purpose_of_application_others" class="form-control shadow-none mt-1" placeholder="if other specify" value="">

                                        <small class="badge badge-light">Required</small>
                                  </div>
                                </div>
                                <div class="boxx">
                                  <h6>Items Needed</h6>
                                  <div class="form-group check-group">
                                    <?php 
                                      if ($item_needed->num_rows > 0) {
                                        foreach ($item_needed as $key => $value) {
                                          ?>
                                          <label for="myCheckbox_items<?php echo $value['id']; ?>" class="checkbox" name="item_needed">

                                              <input class="checkbox__input" type="checkbox" id="myCheckbox_items<?php echo $value['id']; ?>" name="item_needed[]" value="<?php echo $value['name']; ?>">

                                              <svg class="checkbox__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22">
                                                <rect width="21" height="21" x=".5" y=".5" fill="#FFF" stroke="#006F94" rx="3" />
                                                <path class="tick" stroke="#2A4E57" fill="none" stroke-linecap="round" stroke-width="4" d="M4 10l5 5 9-9" />
                                              </svg>

                                              <span class="checkbox__label"><?php echo $value['name']; ?></span>
                                            </label>
                                          <?php
                                        }
                                        ?>
                                        <input type="text" name="item_needed_others" class="form-control shadow-none" placeholder="if other specify" value="">
                                        <?php
                                      }

                                    ?>
                                    
                                    <small class="badge badge-light">Required</small>
                                  </div>
                                </div>
                                <div class="boxx">
                                  <h6>Shoe size</h6>
                                  <div class="form-group">
                                    <input type="radio" name="shoe_size" id="radio1" value="36">
                                    <label class="radio" for="radio1">36</label>
                                    <input type="radio" name="shoe_size" id="radio2" value="38">
                                    <label for="radio2">38</label>
                                    <input type="radio" name="shoe_size" id="radio3" value="40">
                                    <label for="radio3">40</label>
                                    <input type="radio" name="shoe_size" id="radio4" value="42">
                                    <label for="radio4">42</label>
                                    <input type="radio" name="shoe_size" id="radio5" value="44">
                                    <label for="radio5">44</label>
                                    <input type="text" name="shoe_size_other" class="form-control shadow-none" placeholder="if other specify" value="">
                                  </div>
                                </div>
                                <div class="boxx">
                                  <h6>Cloth size</h6>
                                  <div class="form-group">
                                    <input type="radio" name="cloth_size" id="radio11" value="6">
                                    <label class="radio" for="radio11">6</label>
                                    <input type="radio" name="cloth_size" id="radio12" value="8">
                                    <label class="radio" for="radio12">8</label>
                                    <input type="radio" name="cloth_size" id="radio13" value="10">
                                    <label class="radio" for="radio13">10</label>
                                    <input type="radio" name="cloth_size" id="radio14" value="12">
                                    <label class="radio" for="radio14">12</label>
                                    <input type="radio" name="cloth_size" id="radio15" value="14">
                                    <label class="radio" for="radio15">14</label>
                                    <input type="text" name="cloth_size_other" class="form-control shadow-none" placeholder="if other specify" value="">
                                  </div>
                                </div>
                                <div class="boxx">
                                  <h6>Accessories</h6>
                                  <div class="form-group">
                                    <?php 
                                      if ($accessories->num_rows > 0) {
                                        foreach ($accessories as $key => $value) {
                                          ?>
                                          <label for="myCheckbox_accessories_<?php echo $value['id'] ?>" class="checkbox" name="accessories">
                                              <input class="checkbox__input" type="checkbox" id="myCheckbox_accessories_<?php echo $value['id'] ?>" name="accessories[]" value="<?php echo $value['name'] ?>">

                                              <svg class="checkbox__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22">
                                                <rect width="21" height="21" x=".5" y=".5" fill="#FFF" stroke="#006F94" rx="3" />
                                                <path class="tick" stroke="#2A4E57" fill="none" stroke-linecap="round" stroke-width="4" d="M4 10l5 5 9-9" />
                                              </svg>

                                              <span class="checkbox__label"><?php echo $value['name'] ?></span>
                                            </label>
                                          <?php
                                        }
                                        ?>
                                        <input type="text" name="accessories_others" class="form-control shadow-none" placeholder="if other specify" value="">
                                        <?php
                                      }
                                    ?>
                                    
                                  </div>
                                </div>

                                <div class="boxx">
                                  <h6>Time Slot Preference</h6>
                                  <div class="form-group">
                                    <?php 
                                      if ($time_slot->num_rows > 0) {
                                        foreach ($time_slot as $key => $slot) {
                                          if ($slot['out_slot'] != 0) {
                                            echo '
                                              <input type="radio" name="time_slot" id="tm_slot'.$slot["id"].'" value="'.$slot["time_frame"].'">
                                              <label class="radio" for="tm_slot'.$slot["id"].'">'.$slot["time_frame"].'</label>';
                                          }
                                        }
                                      }

                                    ?>

                                  </div>
              </div>
                                <div class="form-group mt-3">
                                  <input type="hidden" name="robot">
                                  <button class="btn btn-primary btn-sm" type="submit">Submit</button>
                                  <p>
                                    <small><i>Community WardrobeNg By Modular Gold</i></small>
                                  </p>
                                </div>
                              </form>
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

  <script type="text/javascript">
    document.getElementById('no-number').addEventListener('click', function() {
      var isChecked = this.checked;
      if (isChecked) {
        document.getElementById('phonenumberbox').style.display = 'none';
      } else {
        document.getElementById('phonenumberbox').style.display = 'block';
        document.getElementById('nobox').style.display = 'none';
      }

      chk_email = document.getElementById('no-email');

      if (chk_email.checked == true && isChecked) {
        document.getElementById('nobox').style.display = 'block';
      }else{
        document.getElementById('nobox').style.display = 'none';
      }

    });

    document.getElementById('no-email').addEventListener('click', function() {
      var isChecked = this.checked;
      if (isChecked) {
        document.getElementById('emailbox').style.display = 'none';
      } else {
        document.getElementById('emailbox').style.display = 'block';
        document.getElementById('nobox').style.display = 'none';
      }

      chk_number = document.getElementById('no-number');
      if (chk_number.checked == true && isChecked) {
        document.getElementById('nobox').style.display = 'block';
      }else{
        document.getElementById('nobox').style.display = 'none';
      }

    });
  </script>


  </body>
</html>