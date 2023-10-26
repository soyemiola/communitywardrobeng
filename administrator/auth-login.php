<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Community WardrobeNG </title>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords" content="">
    <meta name="author" content="#">
    <link rel="apple-touch-icon" sizes="180x180" href="../images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">
    <link rel="manifest" href="../images/site.webmanifest">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="files/bower_components/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="files/assets/icon/themify-icons/themify-icons.css">

    <link rel="stylesheet" type="text/css" href="files/assets/icon/icofont/css/icofont.css">

    <link rel="stylesheet" type="text/css" href="files/assets/icon/feather/css/feather.css">

    <link rel="stylesheet" type="text/css" href="files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="../files/assets/pages/data-table/css/buttons.dataTables.min.css"> -->
    <link rel="stylesheet" type="text/css" href="files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">


    <link rel="stylesheet" type="text/css" href="files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="files/assets/css/jquery.mCustomScrollbar.css"> 
  </head>
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
  <section class="login-block" style="background:url(files/assets/images/bg.jpg) no-repeat;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <form class="md-float-material form-material" method="post" action="../assets/php/auth-process.php">
            <div class="text-center">
              <img src="files/assets/images/logo.png" alt="logo.png">
            </div>
            <div class="auth-box card">
              <div class="card-block">
                <div class="row m-b-20">
                  <div class="col-md-12">
                    <h3 class="text-center">Sign In</h3>
                  </div>
                </div>
                <div class="form-group form-primary">
                  <input type="text" name="email" class="form-control shadow-none" required placeholder="Your Email Address">
                  <span class="form-bar"></span>
                </div>
                <div class="form-group form-primary">
                  <input type="password" name="password" class="form-control shadow-none" required placeholder="Password">
                  <span class="form-bar"></span>
                </div>
                <div class="row m-t-25 text-left">
                  <div class="col-12">
                    <div class="checkbox-fade fade-in-primary d-">
                      <label>
                      <input type="checkbox" value>
                      <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                      <span class="text-inverse">Remember me</span>
                      </label>
                    </div>
                    <div class="forgot-phone text-right f-right">
                      <!-- <a href="auth-reset-password.html" class="text-right f-w-600"> Forgot
                      Password?</a> -->
                    </div>
                  </div>
                </div>
                <div class="row m-t-30">
                  <div class="col-md-12">
                    <input type="hidden" name="robot">
                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Sign
                    in</button>
                    <div class="">
                  <?php 
                    if(isset($_SESSION['invalid-details'])) {
                      echo '<div class="alert alert-success" id="alert_msg_id">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="icofont icofont-close-line-circled"></i>
                              </button>
                                <strong>Success!</strong> '.$_SESSION['invalid-details'].'
                              </div>';

                      unset($_SESSION['invalid-details']);
                    }

                    ?>
                </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <?php include 'footer.php'; ?>
</body>
</html>