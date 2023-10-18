<?php 
  $about = 'current-menu-item';
  $contact = '';
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
    <div class="page-header">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1>About Us</h1>
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
                <h2 class="entry-title about-title">Welcome to our <br> Community Wardrobe NG</h2>
              </header>
              <div class="entry-content mt-5">
                <h5>WHY WE DO WHAT WE DO?</h5>

                <p>The right to an adequate standard of living required, at a minimum, that everyone shall enjoy the necessary subsistence rights; adequate food and nutrition, clothing, housing and good the environment.</p>
                
                <p>
                  Creative way to breath new life into pre-loved clothing. Reduce the amount of waste going into landfills.
                </p>                
                
                <div class="popular-posts">
                  <h5>WHAT TO EXPECT?</h5>
                    <ul class="mt-0">
                      <li><i class="fa fa-heart-o"></i> Female & Male garments for varying sizes.</li>
                      <li><i class="fa fa-heart-o"></i> Female & Male footware of varying size</li>
                      <li><i class="fa fa-heart-o"></i> Hair accessories, ties, bags, eyewear and household items.</li>
                      <li><i class="fa fa-heart-o"></i> Children wears.</li>
                      <li><i class="fa fa-heart-o"></i> Household Items</li>
                    </ul>
                </div>
                
              </div>
              
            </div>
          </div>
          <div class="col-12 col-lg-6 order-1 order-lg-2">
            <img src="images/about_cw.jpg" alt="welcome">
          </div>
        </div>
      </div>
    </div>
    <div class="about-stats">
      <div class="container">
        <!-- <div class="row">
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="circular-progress-bar">
              <div class="circle" id="loader_1">
                <strong class="d-flex justify-content-center"></strong>
              </div>
              <h3 class="entry-title">Hard Work</h3>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="circular-progress-bar">
              <div class="circle" id="loader_2">
                <strong class="d-flex justify-content-center"></strong>
              </div>
              <h3 class="entry-title">Pure Love</h3>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="circular-progress-bar">
              <div class="circle" id="loader_3">
                <strong class="d-flex justify-content-center"></strong>
              </div>
              <h3 class="entry-title">Smart Ideas</h3>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="circular-progress-bar">
              <div class="circle" id="loader_4">
                <strong class="d-flex justify-content-center"></strong>
              </div>
              <h3 class="entry-title">Good Decisions</h3>
            </div>
          </div>
        </div> -->
        <div class="row">
          <div class="col-xs-12 col-md-2">
            <div class="counter-box">
                  <div class="d-flex justify-content-center align-items-center">
                    <img src="images/cloth-1.png" alt>
                  </div>
                  <div class="d-flex justify-content-center align-items-baseline">
                    <div class="start-counter text-white" data-to="96" data-speed="2000"></div>
                  </div>
                  <h3 class="entry-title text-white mt-0">Men's Clothing</h3>
                </div>
          </div>
          <div class="col-xs-12 col-md-2">
            <div class="counter-box">
                  <div class="d-flex justify-content-center align-items-center">
                    <img src="images/cloth-3.png" alt>
                  </div>
                  <div class="d-flex justify-content-center align-items-baseline">
                    <div class="start-counter text-white" data-to="49" data-speed="2000"></div>
                  </div>
                  <h3 class="entry-title text-white mt-0">Footwares</h3>
                </div>
          </div>
          <div class="col-xs-12 col-md-2">
            <div class="counter-box">
                  <div class="d-flex justify-content-center align-items-center">
                    <img src="images/cloth-2.png" alt>
                  </div>
                  <div class="d-flex justify-content-center align-items-baseline">
                    <div class="start-counter text-white" data-to="288" data-speed="2000"></div>
                  </div>
                  <h3 class="entry-title text-white mt-0">Female Clothing</h3>
                </div>
          </div>
          <div class="col-xs-12 col-md-2">
            <div class="counter-box">
                  <div class="d-flex justify-content-center align-items-center">
                    <img src="images/cloth-4.png" alt>
                  </div>
                  <div class="d-flex justify-content-center align-items-baseline">
                    <div class="start-counter text-white" data-to="38" data-speed="2000"></div>
                  </div>
                  <h3 class="entry-title text-white mt-0">Accessories</h3>
                </div>
          </div>
          <div class="col-xs-12 col-md-2">
            <div class="counter-box">
                  <div class="d-flex justify-content-center align-items-center">
                    <img src="images/cloth-5.png" alt>
                  </div>
                  <div class="d-flex justify-content-center align-items-baseline">
                    <div class="start-counter text-white" data-to="190" data-speed="2000"></div>
                  </div>
                  <h3 class="entry-title text-white mt-0">Children Items</h3>
                </div>
          </div>
          <div class="col-xs-12 col-md-2">
            <div class="counter-box">
                  <div class="d-flex justify-content-center align-items-center">
                    <img src="images/cloth-6.png" alt>
                  </div>
                  <div class="d-flex justify-content-center align-items-baseline">
                    <div class="start-counter text-white" data-to="30" data-speed="2000"></div>
                  </div>
                  <h3 class="entry-title text-white mt-0">Household Items</h3>
                </div>
          </div>

        </div>
      </div>
    </div>
    <div class="about-testimonial">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-5">
            <div class="testimonial-cont">
              <div class="entry-content">
                <p>We love to help all the people that have problems in our community. After 2 years we have many goals achieved.</p>
              </div>
              <div class="entry-footer d-flex flex-wrap align-items-center mt-5">
                <img src="images/testimonial-1.jpg" alt>
                <h4>James Williams, <span>Volunteer</span></h4>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 offset-lg-2 col-lg-5">
            <div class="testimonial-cont">
              <div class="entry-content">
                <p>We love to help all the people that have problems in our community. After 2 years we have many goals achieved.</p>
              </div>
              <div class="entry-footer d-flex flex-wrap align-items-center mt-5">
                <img src="images/testimonial-2.jpg" alt>
                <h4>Maria Cristian, <span>Volunteer</span></h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="help-us">
      <div class="container">
        <div class="row">
          <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
            <h2>Help us so we can help others</h2>
            <a class="btn orange-border" href="donation.php">Donate now</a>
          </div>
        </div>
      </div>
    </div>

    <?php include 'footer.php'; ?>

  </body>
</html>