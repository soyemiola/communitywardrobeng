<?php 
	// session_start();

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
	<body>
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
							<h3 class="mt-4" style="color: #2A4E57">Recipient Application Form</h3>
							<?php 
								if (isset($_GET['status']) == 'IncEm' ) {
									echo '<div class="alert alert-info">
											<strong>Email address already exist!</strong>
										</div>';
								}
								if (isset($_GET['stat']) == 'Inc' ) {
									echo '<div class="alert alert-info">
											<strong>Phone number already exist!</strong>
										</div>';
								}

							?>
							
						</div>
						
						<form class="mt-1" method="post" action="./assets/php/process.php">
							<div class="boxx">
								<h6>Mobile Number</h6>
								<div class="form-group input-group mb-3">
								    <div class="input-group-prepend">
								      <span class="input-group-text">+234</span>
								    </div>
								    <input type="text" class="form-control shadow-none" name="number" required placeholder="(0) 812-345-6789">
								 </div>
								 <small class="badge badge-light">Required</small>
							</div>
							<div class="boxx">
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
												<label for="myCheckbox_items<?php echo $value['id']; ?>" class="checkbox" name="item_needed" value="men's pants">

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
												<label for="myCheckbox_accessories_<?php echo $value['id'] ?>" class="checkbox" name="accessories" value="belts">
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
									<input type="radio" name="time_slot" id="tm_slot1" value="12noon - 1pm">
									<label class="radio" for="tm_slot1">12noon - 1pm</label>

									<input type="radio" name="time_slot" id="tm_slot2" value="1pm - 2pm">
									<label class="radio" for="tm_slot2">1pm - 2pm</label>

									<input type="radio" name="time_slot" id="tm_slot3" value="2pm - 3pm">
									<label class="radio" for="tm_slot3">2pm - 3pm</label>

									<input type="radio" name="time_slot" id="tm_slot4" value="3pm - 4pm">
									<label class="radio" for="tm_slot4">3pm - 4pm</label>

								</div>
							</div>
							<div class="form-group mt-3">
								<input type="hidden" name="robot">
								<button class="btn btn-light btn-lg" type="submit">Submit</button>
								<!-- <a href="appointmentslip.php" class="btn btn-light btn-lg">Submit</a> -->
								<p>
									<small><i>Community WardrobeNg By Modular Gold</i></small>
								</p>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    	<script src="js/multiselect-dropdown.js" ></script>
	</body>
</html>