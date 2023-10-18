<?php 
  $recipients = 'current-menu-item';
  $about = '';
  $contact = '';
  $donation = '';
  $home = '';
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
    <div class="page-header" style="background-image: url('images/recipients.jpg')!important;">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1>Our Recipients</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="welcome-wrap" id="about">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6 order-2 order-lg-1">
            <div class="welcome-content">
              <header class="entry-header">
                <h2 class="entry-title about-title">Who do we help?</h2>
              </header>
              <div class="entry-content mt-5">
                <p>Community WardrobeNG extends a helping hand to a diverse range of individuals within our community. We believe in inclusivity and aim to assist children, women, and men facing various life circumstances. Whether it's a family struggling to make ends meet, a student in need of appropriate attire for school, or an individual seeking attire for a job interview, our doors are open to all.</p>
                
                <p>
                  We understand that clothing is not just a basic necessity, but also a source of dignity and confidence. That's why we are committed to providing new and gently used clothing options that cater to the unique needs and preferences of each person we serve.
                </p> 
                
              </div>              
            </div>
          </div>
          <div class="col-12 col-lg-6 order-1 order-lg-2">
            <img src="images/rep.jpg" alt="welcome">
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-12 col-lg-6 order-1">
            <img src="images/rep2.jpg" alt="welcome">
          </div>
          <div class="col-12 col-lg-6 order-2">
            <div class="welcome-content">
              <header class="entry-header">
                <h2 class="entry-title about-title">Recipients Benefits</h2>
              </header>
              <div class="entry-content mt-5">
                <div class="popular-posts mt-0 pt-0">
                    <ul class="mt-0">
                      <li><i class="fa fa-heart"></i> Receive up to 10 items of clothing per person per shopping visit..</li>
                      <li><i class="fa fa-heart"></i> Choose up to 10 pairs of shoes annually.</li>
                      <li><i class="fa fa-heart"></i> Choose from Hair accessories, ties, bags, eyewear and household items.</li>
                      <li><i class="fa fa-heart"></i> Eligible for our programs.</li>
                    </ul>
                </div>
                
              </div>              
            </div>
          </div>
          
        </div>
        <div class="row mt-5">
          <div class="col-12">
            <a href="form.php" class="btn gradient-bg mr-2" target="_blank">Register Now</a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="help-us">
      <div class="container">
        <div class="row">
          <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
            <h2>Join us in making a difference for those in need by supporting our cause.</h2>
            <a class="btn orange-border" href="donation.php">Donate now</a>
          </div>
        </div>
      </div>
    </div>

    <?php include 'footer.php'; ?>

  </body>
  
</html>