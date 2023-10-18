<?php 
  $contact = 'current-menu-item';
  $about = '';
  $donation = '';
  $home = '';
  $recipients = '';
  $portfolio = '';
  $takepart = '';
?>
<!DOCTYPE html>
<html lang="en">
  
   <?php include 'header.php'; ?> 
   <body class="single-page about-page">
    <header class="site-header">
      <div class="top-header-bar">
        <div class="container">
          <?php include 'header-bar.php'; ?>
        </div>
      </div>
      <div class="nav-bar">
        <div class="container">
          <div class="row">
            <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
              <div class="site-branding d-flex align-items-center">
                <a class="d-block" href="index.php" rel="home"><img class="d-block" src="images/logo.png" alt="logo"></a>
              </div>
              <nav class="site-navigation d-flex justify-content-end align-items-center">
                <?php include 'menus.php'; ?>
              </nav>
              <div class="hamburger-menu d-lg-none">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="page-header" style="background: url(images/contact-bg.jpg) no-repeat center !important; background-size: cover !important;">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1>Contact</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="contact-page-wrap">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-5">
            <div class="entry-content">
              <h2>Get In touch with us</h2>
              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris. Lorem ipsum dolor sit amet, conse ctetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam. Integer accu msan sodales odio, id tempus velit ullamc.</p> -->
              <ul class="contact-social d-flex flex-wrap align-items-center">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
              </ul>
              <ul class="contact-info p-0">
                <li><i class="fa fa-phone"></i><span><a href="tel:+2349093311220" style="">+234 909 331 1220</a></span></li>
                <li><i class="fa fa-envelope"></i><span><a href="mailto:info@communitywardrobeng.com">info@communitywardrobeng.com</a></li>
                <li><i class="fa fa-map-marker"></i><span>Lekki phase 1, Lagos island, Lagos state</span></li>
              </ul>
            </div>
          </div>
          <div class="col-12 col-lg-7">
            <form class="contact-form">
              <input type="text" placeholder="Name">
              <input type="email" placeholder="Email">
              <textarea rows="15" cols="6" placeholder="Messages"></textarea>
              <span>
              <input class="btn gradient-bg" type="button" value="Contact us">
              </span>
            </form>
          </div>
        </div>
      </div>
    </div>

    <?php include 'footer.php'; ?>
  </body>
</html>