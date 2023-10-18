<?php 
	session_start();

	include 'assets/php/func.php';

	$getA = new ApplicationForm();

	$purpose = $getA->app_purpose();
	$item_needed = $getA->items_needed();
	$accessories = $getA->accessories();

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Community WardrobeNg | Registration</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
	    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
	    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
	    <link rel="manifest" href="images/site.webmanifest">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.4.6/tailwind.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/elegant-fonts.css">
		<link rel="stylesheet" href="css/themify-icons.css">
		<link rel="stylesheet" href="css/swiper.min.css">
		<link rel="stylesheet" href="style.css">
	</head>
	<style type="text/css">
		.boxx h6{
			color: #2A4E57;
		}
	</style>
	<body   x-data="alertComponent()"
  x-init="$watch('openAlertBox', value => {
    if(value){
      setTimeout(function () {
        openAlertBox = false
      }, 5000)
    }
  })"
  class="relative"
>
		<div class="home-page-icon-boxes pt-4">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6 col-lg-6 offset-md-3 offset-lg-3">
						<p>
							<a href="index.php">
								<img class="d-block" src="images/logo.png" alt="logo">
							</a>
						</p>
						<div class="text-center">
							<h3 class="mt-4" style="color: #2A4E57">Volunteer Application</h3>
						</div>
						
						<?php
							if(isset($_SESSION['invalid-email'])) {
                                echo '<div class="alert alert-warning">
										<strong>'. $_SESSION['invalid-email'] .'</strong>
									</div>';

                                unset($_SESSION['invalid-email']);
                            }
                            if(isset($_SESSION['success_form'])) {
                                echo '<div class="alert alert-success">
										<strong>'. $_SESSION['success_form'] .'</strong>
									</div>';

                                unset($_SESSION['success_form']);
                            }
                            if(isset($_SESSION['error_submission'])) {
                                echo '<div class="alert alert-danger">
										<strong>'. $_SESSION['error_submission'] .'</strong>
									</div>';

                                unset($_SESSION['error_submission']);
                            }
                        ?>
   						
						<form class="mt-1" method="post" action="./assets/php/volunteer-registration.php">
							<div class="boxx">
								<h6>Full Name</h6>
								<div class="form-group mb-3">
								    <input type="text" class="form-control shadow-none" name="name" required placeholder="Firstname Lastname">
								</div>
								<small class="badge badge-light">Required</small>
							</div>
							<div class="boxx">
								<h6>Phone Number</h6>
								<div class="form-group">
									<input type="text" class="form-control shadow-none" name="number" required>
								</div>
								<small class="badge badge-light">Required</small>
							</div>
							<div class="boxx">
								<h6>Email</h6>
								<div class="form-group">
									<input type="email" class="form-control shadow-none" name="email" required>
								</div>
								<small class="badge badge-light">Required</small>
							</div>
							<div class="boxx">
								<h6>Gender</h6>
								<div class="form-group">
									<select class="form-control shadow-none" name="gender" required>
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
									<textarea class="form-control shadow-none" name="address" style="resize: none;" rows="3" required></textarea>
									<small class="badge badge-light">Required</small>
								</div>
							</div>
							<div class="boxx">
								<h6>Date of Birth</h6>								
								<div class="form-group">									
									<input type="date" name="dob" class="form-control shadow-none mt-1" required>
							        <small class="badge badge-light">Required</small>
								</div>
							</div>
							<div class="boxx">
								<h6>Which of our open positions are you interested in applying for? </h6>
								<div class="form-group check-group">
									<input type="text" name="position" class="form-control shadow-none mt-1" required>
									<small class="badge badge-light">Required</small>
								</div>
							</div>
							<div class="boxx">
								<h6>Emergency Contact Name</h6>
								<div class="form-group">
									<input type="text" name="eme_contact" class="form-control shadow-none mt-1" required>
								</div>
								<small class="badge badge-light">Required</small>
							</div>
							<div class="boxx">
								<h6>Emergency Contact Relationship</h6>
								<div class="form-group">
									<input type="radio" name="eme_contact_rel" id="radio11" value="Spouse" required>
									<label class="radio" for="radio11">Spouse</label>

									<input type="radio" name="eme_contact_rel" id="radio12" value="Child">
									<label class="radio" for="radio12">Child</label>

									<input type="radio" name="eme_contact_rel" id="radio13" value="Relative">
									<label class="radio" for="radio13">Relative</label>

									<input type="radio" name="eme_contact_rel" id="radio14" value="Friend">
									<label class="radio" for="radio14">Friend</label>

									<input type="text" name="eme_contact_rel_other" class="form-control shadow-none" placeholder="if other specify" value="">
								</div>
								<small class="badge badge-light">Required</small>
							</div>
							<div class="boxx">
								<h6>How did you hear about us?</h6>
								<div class="form-group">
									<input type="text" name="aboutus" class="form-control shadow-none mt-1" required>
								</div>
								<small class="badge badge-light">Required</small>
							</div>
							<div class="boxx">
								<h6>Are you a current or previous recipient of Community WardrobeNG?</h6>
								<div class="form-group">
									<input type="radio" name="previous_recipient" id="rec1" value="Yes (Current Recipient)" required>
									<label class="radio" for="rec1">Yes (Current Recipient)</label>

									<input type="radio" name="previous_recipient" id="rec2" value="Yes (Previous Recipient)">
									<label class="radio" for="rec2">Yes (Previous Recipient)</label>

									<input type="radio" name="previous_recipient" id="rec3" value="No">
									<label class="radio" for="rec3">No</label>
								</div>
								<small class="badge badge-light">Required</small>
							</div>
							<div class="boxx">
								<h6>May we use your name and/or likeness in publicity related to the Community WardrobeNG?</h6>
								<div class="form-group">
									<input type="radio" name="publicity" id="pb1" value="Yes" required>
									<label class="radio" for="pb1">Yes</label>

									<input type="radio" name="publicity" id="pb2" value="No">
									<label class="radio" for="pb2">No</label>
								</div>
								<small class="badge badge-light">Required</small>
							</div>
							<div class="boxx">
								<small>
									Terms of Agreement - Submission of this application will be treated as a signature to the following statement: <br>
									<i>
										I certify that the answers provided are true and complete to the best of my knowledge. I understand that Community wardrobeNG, is not obligated to accept me into their volunteer program and that if accepted they or I may terminate the volunteer agreement at any time. If accepted, I understand that false or misleading information given in my application(s) may result in discharge at any time.
									</i> <br>
									<i>
										I agree to treat all information I may hear, see, read or otherwise acquire highly confidential and I will not reveal or discuss this information outside of my official duties at Community WardrobeNG.
									</i>
								</small>
								<div class="form-group">
									<input type="radio" name="term_of_agreement" id="tm_yes" value="Yes" class="tm_agree" required>
									<label class="radio" for="tm_yes">Yes, I agree to the terms above</label>

									<input type="radio" name="term_of_agreement" id="tm_no" value="No" class="tm_agree">
									<label class="radio" for="tm_no">No, I do not agree to the terms above</label>
								</div>
								<small class="badge badge-light">Required</small>
							</div>
							<div class="form-group mt-3">
								<input type="hidden" name="robot">
								<button class="btn btn-light btn-lg disabled" id="submit_btn" type="submit">Submit Application</button>
								<p>
									<small><i>Community WardrobeNg By Modular Gold</i></small>
								</p>


							</div>
						</form>

						<template x-if="openAlertBox">
						    <div
						      class="fixed bottom-0 right-0"
						      x-transition:enter="transition ease-out duration-300"
						      x-transition:enter-start="opacity-0"
						      x-transition:enter-end="opacity-100"
						      x-transition:leave="transition ease-in duration-300"
						      x-transition:leave-start="opacity-100"
						      x-transition:leave-end="opacity-0"
						    >
						      <div class="p-10">
						        <div class="flex items-center text-white text-sm font-bold px-4 py-3 rounded shadow-md" :class="alertBackgroundColor" role="alert">
						          <span x-html="alertMessage" class="flex"></span>
						          <button type="button" class="flex" @click="openAlertBox = false">
						            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 ml-4"><path d="M6 18L18 6M6 6l12 12"></path></svg>
						          </button>
						        </div>
						      </div>
						    </div>
						  </template>
					</div>
				</div>
			</div>
		</div>
		<button @click="showAlert('success')" class="px-2 py-1 text-white bg-green-500 rounded hover:bg-green-600" id="myButton" style="visibility: hidden;">Success</button>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    	<script src="js/multiselect-dropdown.js" ></script>
    	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js"></script>

    	<script type="text/javascript">
    		$('.tm_agree').on('click', function(){
    			id = $(this).attr('id');

    			btn = document.getElementById('submit_btn');

    			val = document.getElementById(id).value;

    			if (val == 'Yes') {
    				btn.classList.remove('disabled');
    			}else{
    				btn.classList.add('disabled');
    			}
    		});
    		

    	</script>
	</body>
</html>