<?php 
  $portfolio = 'current-menu-item';
  $about = '';
  $contact = '';
  $donation = '';
  $home = '';
  $recipients = '';
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
    <div class="page-header" style="background: url(images/photo-speaks.jpg) no-repeat top !important;">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1>Photo speaks</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-wrap">
      <div class="container">
        <div class="row portfolio-container">
          <div class="col-12 col-md-6 col-lg-4 portfolio-item">
            <div class="portfolio-cont">
              <a href="#"><img src="images/a.jpg" alt></a>
              <h3 class="entry-title"><a href="#">Event title</a></h3>
              <h4>2023 Causes</h4>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 portfolio-item">
            <div class="portfolio-cont">
              <a href="#"><img src="images/b.jpg" alt></a>
              <h3 class="entry-title"><a href="#">Event title</a></h3>
              <h4>2023 Causes</h4>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-5 portfolio-item">
            <div class="portfolio-cont">
              <a href="#"><img src="images/c.jpg" alt></a>
              <h3 class="entry-title"><a href="#">Event title</a></h3>
              <h4>2023 Causes</h4>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-5 portfolio-item">
            <div class="portfolio-cont">
              <a href="#"><img src="images/d.jpg" alt></a>
              <h3 class="entry-title"><a href="#">Event title</a></h3>
              <h4>2023 Causes</h4>
            </div>
          </div>
          <!-- <div class="col-12 col-md-6 col-lg-3 mt-48 portfolio-item">
            <div class="portfolio-cont">
              <a href="#"><img src="images/e.jpg" alt></a>
              <h3 class="entry-title"><a href="#">Toys for Children Campaign</a></h3>
              <h4>2018 Causes</h4>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mt-48 portfolio-item">
            <div class="portfolio-cont">
              <a href="#"><img src="images/f.jpg" alt></a>
              <h3 class="entry-title"><a href="#">Toys for Children Campaign</a></h3>
              <h4>2018 Causes</h4>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 mt-72 portfolio-item">
            <div class="portfolio-cont">
              <a href="#"><img src="images/g.jpg" alt></a>
              <h3 class="entry-title"><a href="#">Toys for Children Campaign</a></h3>
              <h4>2018 Causes</h4>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-6 mt-72 portfolio-item">
            <div class="portfolio-cont">
              <a href="#"><img src="images/h.jpg" alt></a>
              <h3 class="entry-title"><a href="#">Water for Children AI</a>D</h3>
              <h4>2018 Causes</h4>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 mt-72 portfolio-item">
            <div class="portfolio-cont">
              <a href="#"><img src="images/i.jpg" alt></a>
              <h3 class="entry-title"><a href="#">Toys for Children Campaign</a></h3>
              <h4>2018 Causes</h4>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 portfolio-item">
            <div class="portfolio-cont">
              <a href="#"><img src="images/a.jpg" alt></a>
              <h3 class="entry-title"><a href="#">Toys for Children Campaign</a></h3>
              <h4>2018 Causes</h4>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 portfolio-item">
            <div class="portfolio-cont">
              <a href="#"><img src="images/b.jpg" alt></a>
              <h3 class="entry-title"><a href="#">Toys for Children Campaign</a></h3>
              <h4>2018 Causes</h4>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-5 portfolio-item">
            <div class="portfolio-cont">
              <a href="#"><img src="images/c.jpg" alt></a>
              <h3 class="entry-title"><a href="#">Water for Children AID</a></h3>
              <h4>2018 Causes</h4>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-5 portfolio-item">
            <div class="portfolio-cont">
              <a href="#"><img src="images/d.jpg" alt></a>
              <h3 class="entry-title"><a href="#">Water for Children AID</a></h3>
              <h4>2018 Causes</h4>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 mt-48 portfolio-item">
            <div class="portfolio-cont">
              <a href="#"><img src="images/e.jpg" alt></a>
              <h3 class="entry-title"><a href="#">Toys for Children Campaign</a></h3>
              <h4>2018 Causes</h4>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mt-48 portfolio-item">
            <div class="portfolio-cont">
              <a href="#"><img src="images/f.jpg" alt></a>
              <h3 class="entry-title"><a href="#">Toys for Children Campaign</a></h3>
              <h4>2018 Causes</h4>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 mt-72 portfolio-item">
            <div class="portfolio-cont">
              <a href="#"><img src="images/g.jpg" alt></a>
              <h3 class="entry-title"><a href="#">Toys for Children Campaign</a></h3>
              <h4>2018 Causes</h4>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-6 mt-72 portfolio-item">
            <div class="portfolio-cont">
              <a href="#"><img src="images/h.jpg" alt></a>
              <h3 class="entry-title"><a href="#">Water for Children AI</a>D</h3>
              <h4>2018 Causes</h4>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 mt-72 portfolio-item">
            <div class="portfolio-cont">
              <a href="#"><img src="images/i.jpg" alt></a>
              <h3 class="entry-title"><a href="#">Toys for Children Campaign</a></h3>
              <h4>2018 Causes</h4>
            </div>
          </div> -->
        </div>
        <div class="row">
          <div class="col-12 d-flex justify-content-center mt-72">
            <!-- <a href="#" class="btn gradient-bg load-more-btn">Load More</a> -->
          </div>
        </div>
      </div>
    </div>
    
    <?php include 'footer.php'; ?>
  </body>
</html>