<?php 
  $takepart = 'current-menu-item';
  $about = '';
  $contact = '';
  $donation = '';
  $home = '';
  $recipients = '';
  $portfolio = '';
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
    <style type="text/css">
      .slideshow-container {
        position: relative;        
      }
      .mySlides {
        display: none;
      }
      .prv, .nxt{
        cursor: pointer;
      }
    </style>
    <div class="page-header" style="background: url(images/volunteer.jpg) no-repeat center center !important;">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1>Volunteer with US</h1>
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
                <h2 class="entry-title about-title">Why Join Us!</h2>
              </header>
              <div class="entry-content mt-5">
                <p>The Community WardrobeNG relies heavily on the dedication of our volunteers. There are diverse roles available to contribute at CWNG, from assisting on our shopping floor with sign-in/check-out, bagging, restocking, to sorting and hanging clothing.</p>
                
                <p>
                  We're grateful not only for individual volunteers who join us regularly but also for groups from local businesses. If your group is interested in making a positive impact on the community, please get in touch via email or call us at <a href="tel:+2349093311220">+2349093311220</a>
                </p> 

                <h5>
                  Ready to apply? Please complete our volunteer application by clicking on the below button!
                </h5>

                <a href="volunteers-registration.php" target="_blank" class="btn gradient-bg mt-3">Sign Up</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 order-1 order-lg-2">
            <img src="images/volunteer-1.jpg" alt="welcome">
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-12 col-lg-6 order-2 order-lg-1">
            <div class="welcome-content">
              <header class="entry-header">
                <h2 class="entry-title about-title">Current Volunteer Needs</h2>
              </header>
              <div class="entry-content mt-5 slideshow-container">
                <div class="card card-body mySlides">
                  <h5>1. New Start Boutique Attendant </h5>
                  <p>
                    Our New Start Boutique is designed to equip clients with the proper attire for a job interview or when starting a new job. Volunteers work one on one with clients to find the perfect clothing. Computer and past human resource experience beneficial. Other tasks could include helping on ours general shopping floor or bagging at checkout.
                  </p>
                </div>
                <div class="card card-body mySlides">
                  <h5>2. Shopping Floor Attendant </h5>
                  <p>
                    This is a moderately physical position and requires you to be on your feet for most of your shift. Responsibilities include hanging and straightening clothing on our general shopping floor.
                  </p>
                </div>
                <div class="card card-body mySlides">
                  <h5>3. Client Check-out Attendant </h5>
                  <p>
                   This position requires the use of a computer. Responsibilities include accurately entering the items clients receive during their shopping visit and bagging items. Bilingual is a plus, but not required.
                  </p>
                </div>
                <div class="card card-body mySlides">
                  <h5>4. Donation Desk Attendant</h5>
                  <p>
                   This person is the first person a donor sees when walking through our doors. Responsibilities include greeting donors, answering donor questions, helping with donation receipts and helping donors unload their donations from their vehicles. Other small projects completed at the desk. This is a physical position that requires constant sit to stand, walking, twisting and lifting up to 40 lbs.
                  </p>
                </div>
                <div class="card card-body mySlides">
                  <h5>5. Clothing Hanger </h5>
                  <p>
                   Responsibilities include hanging clothing for on our shopping floor. This position requires you to stand for the duration of your two-hour shift, twist, bend and reach.
                  </p>
                </div>
                <div class="text-right">
                  <i class="fa fa-arrow-left mr-3 prv" onclick="plusSlides(-1)"></i> <i class="fa fa-arrow-right ml-3 nxt" onclick="plusSlides(1)"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 order-1 order-lg-2">
            <img src="images/volunteer-2.jpg" alt="welcome">
          </div>
        </div>
      </div>
    </div>

    <?php include 'footer.php'; ?>
    <script type="text/javascript">
      var slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
      }
    </script>
  </body>
</html>