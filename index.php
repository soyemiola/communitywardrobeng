<?php 
	$home = 'current-menu-item';
	$about = '';
  $contact = '';
  $donation = '';
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
		<div class="swiper-container hero-slider">
			<div class="swiper-wrapper">
				<div class="swiper-slide hero-content-wrap">
					<img src="images/banner1.jpg" alt>
					<div class="hero-content-overlay position-absolute w-100 h-100">
						<div class="container h-100">
							<div class="row h-100">
								<div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start sld">
									<header class="entry-header">
										<h1>Wardrobe Wonders</h1>
										<h4>Sharing Style, Spreading Smiles</h4>
									</header>
									<div class="entry-content mt-4">
										<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus ullamcorper</p> -->
									</div>
									<footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
										<a href="donation.php" class="btn gradient-bg mr-2">Donate Now</a>
										<a href="index.php#about-home-page-welcome" class="btn orange-border">Read More</a>
									</footer>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide hero-content-wrap">
					<img src="images/banner2.jpg" alt>
					<div class="hero-content-overlay position-absolute w-100 h-100">
						<div class="container h-100">
							<div class="row h-100">
								<div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start sld">
									<header class="entry-header">
										<h1>From Closet</h1>
										<h4>to Kindness</h4>
									</header>
									<div class="entry-content mt-4">
										<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus ullamcorper</p> -->
									</div>
									<footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
										<a href="donation.php" class="btn gradient-bg mr-2">Donate Now</a>
										<a href="index.php#about-home-page-welcome" class="btn orange-border">Read More</a>
									</footer>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide hero-content-wrap">
					<img src="images/banner3.jpg" alt>
					<div class="hero-content-overlay position-absolute w-100 h-100">
						<div class="container h-100">
							<div class="row h-100">
								<div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start sld">
									<header class="entry-header">
										<h1>Wardrobes</h1>
										<h4>Empowering Lives</h4>
									</header>
									<div class="entry-content mt-4">
										<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus ullamcorper</p> -->
									</div>
									<footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
										<a href="donation.php" class="btn gradient-bg mr-2">Donate Now</a>
										<a href="index.php#about-home-page-welcome" class="btn orange-border">Read More</a>
									</footer>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="pagination-wrap position-absolute w-100">
				<div class="container">
					<div class="swiper-pagination" style="padding-left: 10%;"></div>
				</div>
			</div>
			<div class="swiper-button-next flex justify-content-center align-items-center">
				<span>
					<svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
						<path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z" />
					</svg>
				</span>
			</div>
			<div class="swiper-button-prev flex justify-content-center align-items-center">
				<span>
					<svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
						<path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z" />
					</svg>
				</span>
			</div>
		</div>
		<div class="home-page-icon-boxes">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
						<div class="icon-box ">
							<figure class="d-flex justify-content-center">
								<img src="images/mission-icon.png" alt>
								<img src="images/mission-icon-2.png" alt>
							</figure>
							<header class="entry-header">
								<h3 class="entry-title">Mission</h3>
							</header>
							<div class="entry-content">
								<p>
									To alleviate the suffering of individuals by collecting and distributing new and gently used clothing, household items and food.
								</p>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
						<div class="icon-box">
							<figure class="d-flex justify-content-center">
								<img src="images/value-icon.png" alt>
								<img src="images/value-icon-2.png" alt>
							</figure>
							<header class="entry-header">
								<h3 class="entry-title">Values</h3>
							</header>
							<div class="entry-content">
								<p>To provide compassionate, inclusive, and sustainable support, empowering individuals to overcome adversity and achieve a better quality of life. </p>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
						<div class="icon-box">
							<figure class="d-flex justify-content-center">
								<img src="images/vision-icon.png" alt>
								<img src="images/vision-icon-2.png" alt>
							</figure>
							<header class="entry-header">
								<h3 class="entry-title">Vision</h3>
							</header>
							<div class="entry-content">
								<p>To build a compassionate community where no one experiences the pain of want. We envision a future where individuals are not defined by their circumstances.  </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="home-page-welcome" id="about-home-page-welcome">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-6 order-2 order-lg-1">
						<div class="welcome-content">
							<header class="entry-header">
								<h2 class="entry-title text-white">Welcome to our <br> Community Wardrobe NG</h2>
							</header>
							<div class="entry-content mt-5 text-white">
								<p>
									Based in Lagos, Nigeria, Community WardrobeNG is a distinctive non-profit organization dedicated to supplying, women, men, and children in need with free, quality casual and career clothing. Established in 2021, our mission was inspired by a heartfelt commitment to address the immediate needs of our community, paying tribute to the cherished memory of my late sister, Mrs. Oma Christine Ahunna Smith nee Asonye. From these modest origins, Community WardrobeNG has blossomed into the thriving facility we operate today, annually assisting numerous individuals.
								</p>

								<p>The right to an adequate standard of living required, at a minimum, that everyone shall enjoy the necessary subsistence rights; adequate food and nutrition, clothing, housing and good the environment.</p>
								
								<p>
									Creative way to breath new life into pre-loved clothing. Reduce the amount of waste going into landfills.
								</p>
							</div>
							<div class="entry-footer mt-5">
								<a href="about.php#about" class="btn gradient-bg mr-2">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-6 mt-4 order-1 order-lg-2">
						<img src="images/about_cw.jpg" alt="welcome">
					</div>
				</div>
			</div>
		</div>
		<div class="home-page-events">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-6">
						<div class="upcoming-events">
							<div class="section-heading">
								<h2 class="entry-title">Our Events</h2>
							</div>
							<div class="event-wrap d-flex flex-wrap justify-content-between">
								<figure class="m-0">
									<img src="images/event-1.jpg" alt>
								</figure>
								<div class="event-content-wrap">
									<header class="entry-header d-flex flex-wrap align-items-center">
										<h3 class="entry-title w-100 m-0"><a href="javascript:void(0);" type="button" data-toggle="modal" data-target="#eventmodal1">Community Wardrobe Fair</a></h3>
										<div class="posted-date">
											<a href="javascript:void(0);">Sept 25, 2023 </a>
										</div>
										<div class="cats-links">
											<a href="javascript:void(0);">Lekki phase 1, Lagos state</a>
										</div>
									</header>
									<div class="entry-content">
										<p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
									</div>
									<div class="entry-footer">
										<a href="javascript:void(0);" type="button" data-toggle="modal" data-target="#eventmodal1">Read More</a>
									</div>
								</div>
							</div>
							<div class="event-wrap d-flex flex-wrap justify-content-between">
								<figure class="m-0">
									<img src="images/event-2.jpg" alt>
								</figure>
								<div class="event-content-wrap">
									<header class="entry-header d-flex flex-wrap align-items-center">
										<h3 class="entry-title w-100 m-0"><a href="javascript:void(0);" type="button" data-toggle="modal" data-target="#eventmodal2">Style Swap & Wardrobe Giveaway</a></h3>
										<div class="posted-date">
											<a href="javascript:void(0);">Oct 01, 2023 </a>
										</div>
										<div class="cats-links">
											<a href="javascript:void(0)">Maryland, Lagos</a>
										</div>
									</header>
									<div class="entry-content">
										<p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
									</div>
									<div class="entry-footer">
										<a href="javascript:void(0);" type="button" data-toggle="modal" data-target="#eventmodal2">Read More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-6">
						<div class="featured-cause">
							<div class="section-heading">
								<h2 class="entry-title">Donate to Cause</h2>
							</div>
							<div class="cause-wrap d-flex flex-wrap justify-content-between">
								<figure class="m-0" id="donate">
									<img src="images/donate-causes.jpg" alt>
								</figure>
								<div class="cause-content-wrap">
									<header class="entry-header d-flex flex-wrap align-items-center">
										<h3 class="entry-title w-100 m-0"><a href="#">Support us Today!</a></h3>
									</header>
									<div class="entry-content">
										<p class="m-0">Your generous contributions make a world of difference in our mission to provide accessible and dignified clothing options to those in need. </p>
										
									</div>
									<div class="entry-footer mt-5">
										<a href="donation.php" class="btn gradient-bg mr-2">Donate Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="our-causes" id="our-causes">
			<div class="container">
				<div class="row">
					<div class="coL-12">
						<div class="section-heading">
							<h2 class="entry-title">Our Causes</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="swiper-container causes-slider">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="cause-wrap">
										<figure class="m-0">
											<img src="images/cause-1.jpg" alt>
											<div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
												<a href="donation.php" class="btn gradient-bg mr-2">Donate Now</a>
											</div>
										</figure>
										<div class="cause-content-wrap">
											<header class="entry-header d-flex flex-wrap align-items-center">
												<h3 class="entry-title w-100 m-0"><a href="javascript:void(0);" type="button" class="causes_modal" onclick="causes_modal('causes-1')" id="causes-1" data-title="Alleviating Financial Hardship" data-content="Providing free clothing eases the financial burden on families and individuals struggling to make ends meet.">Alleviating Financial Hardship</a></h3>
											</header>
											<div class="entry-content">
												<p class="m-0">Providing free clothing eases the financial burden on families and individuals struggling to make ends meet.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="cause-wrap">
										<figure class="m-0">
											<img src="images/cause-1.jpg" alt>
											<div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
												<a href="donation.php" class="btn gradient-bg mr-2">Donate Now</a>
											</div>
										</figure>
										<div class="cause-content-wrap">
											<header class="entry-header d-flex flex-wrap align-items-center">
												<h3 class="entry-title w-100 m-0"><a href="javascript:void(0);" type="button" class="causes_modal" onclick="causes_modal('causes-2')" id="causes-2" data-title="Promoting Dignity and Confidence" data-content="Access to quality clothing restores a sense of dignity and confidence, crucial for personal well-being and success.">Promoting Dignity and Confidence</a></h3>
											</header>
											<div class="entry-content">
												<p class="m-0">Access to quality clothing restores a sense of dignity and confidence, crucial for personal well-being and success.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="cause-wrap">
										<figure class="m-0">
											<img src="images/cause-1.jpg" alt>
											<div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
												<a href="donation.php" class="btn gradient-bg mr-2">Donate Now</a>
											</div>
										</figure>
										<div class="cause-content-wrap">
											<header class="entry-header d-flex flex-wrap align-items-center">
												<h3 class="entry-title w-100 m-0"><a href="javascript:void(0);" type="button" class="causes_modal" onclick="causes_modal('causes-3')" id="causes-3" data-title="Empowering Job Seekers" data-content="Offering appropriate attire for interviews and work environments supports job seekers in their pursuit of employment.">Empowering Job Seekers</a></h3>
											</header>
											<div class="entry-content">
												<p class="m-0">Offering appropriate attire for interviews and work environments supports job seekers in their pursuit of employment.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="cause-wrap">
										<figure class="m-0">
											<img src="images/cause-1.jpg" alt>
											<div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
												<a href="donation.php" class="btn gradient-bg mr-2">Donate Now</a>
											</div>
										</figure>
										<div class="cause-content-wrap">
											<header class="entry-header d-flex flex-wrap align-items-center">
												<h3 class="entry-title w-100 m-0"><a href="javascript:void(0);" type="button" class="causes_modal" onclick="causes_modal('causes-4')" id="causes-4" data-title="Supporting Students and Education" data-content="Equipping students with necessary school attire ensures they can focus on their studies without feeling self-conscious about their clothing.">Supporting Students and Education</a></h3>
											</header>
											<div class="entry-content">
												<p class="m-0">Equipping students with necessary school attire ensures they can focus on their studies without feeling self-conscious about their clothing.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="cause-wrap">
										<figure class="m-0">
											<img src="images/cause-1.jpg" alt>
											<div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
												<a href="donation.php" class="btn gradient-bg mr-2">Donate Now</a>
											</div>
										</figure>
										<div class="cause-content-wrap">
											<header class="entry-header d-flex flex-wrap align-items-center">
												<h3 class="entry-title w-100 m-0"><a href="javascript:void(0);" type="button" class="causes_modal" onclick="causes_modal('causes-5')" id="causes-5" data-title="Sustainability and Recycling" data-content="Reusing gently used clothing promotes sustainable practices, reducing the environmental impact of fast fashion.">Sustainability and Recycling</a></h3>
											</header>
											<div class="entry-content">
												<p class="m-0">Reusing gently used clothing promotes sustainable practices, reducing the environmental impact of fast fashion.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-button-next flex justify-content-center align-items-center">
							<span>
								<svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
									<path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z" />
								</svg>
							</span>
						</div>
						<div class="swiper-button-prev flex justify-content-center align-items-center">
							<span>
								<svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
									<path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z" />
								</svg>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="home-page-limestone">
			<div class="container">
				<div class="row align-items-end">
					<div class="coL-12 col-lg-6">
						<div class="section-heading">
							<h2 class="entry-title">We love to help all the people that have problems with clothing. After 2 years we have many goals achieved.</h2>
							<p class="mt-5">Every little bit counts, and together, we can make a significant impact. Thank you for being a part of our journey towards a more inclusive and caring world.</p>
						</div>
					</div>
					<div class="col-12 col-lg-6">
						<div class="milestones d-flex flex-wrap justify-content-between">
							<div class="col-12 col-sm-4 mt-5 mt-lg-0">
								<div class="counter-box">
									<div class="d-flex justify-content-center align-items-center">
										<img src="images/teamwork.png" alt>
									</div>
									<div class="d-flex justify-content-center align-items-baseline">
										<div class="start-counter" data-to="150" data-speed="2000"></div>
										<!-- <div class="counter-k">K</div> -->
									</div>
									<h3 class="entry-title">People helped</h3>
								</div>
							</div>
							<div class="col-12 col-sm-4 mt-5 mt-lg-0">
								<div class="counter-box">
									<div class="d-flex justify-content-center align-items-center">
										<img src="images/donation.png" alt>
									</div>
									<div class="d-flex justify-content-center align-items-baseline">
										<div class="start-counter" data-to="692" data-speed="2000"></div>
									</div>
									<h3 class="entry-title">Item shared</h3>
								</div>
							</div>
							<div class="col-12 col-sm-4 mt-5 mt-lg-0">
								<div class="counter-box">
									<div class="d-flex justify-content-center align-items-center">
										<img src="images/dove.png" alt>
									</div>
									<div class="d-flex justify-content-center align-items-baseline">
										<div class="start-counter" data-to="20" data-speed="2000"></div>
									</div>
									<h3 class="entry-title">Volunteeres</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- modals -->
		<div class="modal fade" id="eventmodal1" tabindex="-1" role="dialog" aria-labelledby="eventmodal1" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLongTitle">Community Wardrobe Fair</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<div>
		      		<img src="images/event-1.jpg" alt width="100%">
		      	</div>
		        <p>
		        	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		        	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		        	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		        	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		        	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		        	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		        </p>
		        <p>
		        	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		        	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		        	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
		        </p>
		      </div>
		    </div>
		  </div>
		</div>

		<div class="modal fade" id="eventmodal2" tabindex="-1" role="dialog" aria-labelledby="eventmodal2" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLongTitle">Community Wardrobe Fair</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<div>
		      		<img src="images/event-2.jpg" alt width="100%">
		      	</div>
		        <p>
		        	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		        	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		        	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		        	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		        	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		        	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		        </p>
		        <p>
		        	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		        	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		        	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
		        </p>
		      </div>
		    </div>
		  </div>
		</div>

		<!-- causes modals -->
		<div class="modal fade" id="causes" tabindex="-1" role="dialog" aria-labelledby="causes" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="causes-selected-title">Giving to the needy</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<div>
		      		<img src="images/cause-1.jpg" alt width="100%">
		      	</div>
		        <div id="causes-selected-content">
		        	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		        	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		        	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		        	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		        	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		        	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		        </div>
		        <p class="mt-4">
		        	<a href="donation.php" class="btn gradient-bg mr-2">Donate Now</a>
		        </p>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- // causes modals -->
		<!-- // modals -->


		<?php include 'footer.php'; ?>

		<script type="text/javascript">
			const causes_modal = (id)=>{
				// id = document.getElementById(id);
				// title = id.dataset.title;
				// contents = id.dataset.content;

				// document.getElementById('causes-selected-title').innerHTML = title;
				// document.getElementById('causes-selected-content').innerHTML = contents;

				// $('#causes').modal('show');
			}
		</script>
	</body>
	
</html>