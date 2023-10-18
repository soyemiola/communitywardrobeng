<?php 
	include 'assets/php/func.php';

	
	if(isset($_GET['id']) && isset($_GET['ky']) && isset($_GET['iv'])){
		$cipherText = base64_decode($_GET['id']);
		$ky = base64_decode($_GET['ky']);
		$iv = base64_decode($_GET['iv']);

		$id = $_GET['id'];

		$a = new ApplicationForm();
		$b = new Form();
		
	}

	
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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/elegant-fonts.css">
		<link rel="stylesheet" href="css/themify-icons.css">
		<link rel="stylesheet" href="css/swiper.min.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="style.css" media="print">
	</head>
	<body>
		<div class="home-page-icon-boxes pt-4">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6 col-lg-6 offset-md-3 offset-lg-3">
						<?php 

							if($id){
								$slip = $a->appointment_slip(intval($id));

								if ($slip->num_rows == 1) {
									foreach ($slip as $key => $value) {
										// code...
									?>
									<div class="dt" id="dt">
							<h4 class="text-center">Event Appointment Slip</h4>
							<p class="text-center">Registration date: <span><?php echo $value['date'] ?></span></p>

							<hr>

							<div class="row">
								<div class="col-12">
									<div class="dte">
										<span><b>Access code: </b></span> 
										<span class="ml-1"><?php echo $value['access_code'] ?></span>
									</div>
									<div class="dte">
										<span><b>Appointment batch: </b></span> 
										<span class="ml-1"><?php echo $value['stream'] ?></span>
									</div>
									<div class="dte">
										<span><b>Appointment details: </b></span> 
										<span class="ml-1"><?php echo $value['appointment_date'] ?></span>
									</div>
									<hr>
								</div>

								<div class="col-12">
									<h6>Applicant Information</h6>
								</div>
								<?php 
									if (!empty($value['email'])) {
										?>
										<div class="col-xs-12 col-md-6 col-lg-8">
											<div class="dte">
												<span><b>Email: </b></span> <br>
												<span><?php echo $value['email']; ?></span>
											</div>
										</div>
										<?php
									}
								?>
								

								<div class="col-xs-12 col-md-6 col-lg-4">
									<div class="dte">
										<span><b>Phone number: </b></span> <br>
										<span><?php echo $value['number'] ?></span>
									</div>
								</div>
								<div class="col-xs-12 col-md-6 col-lg-4">
									<div class="dte">
										<span><b>Gender: </b></span> <br>
										<span><?php echo $value['gender'] ?></span>
									</div>
								</div>
								<div class="col-12 mt-2">
									<div class="dte">
										<span><b>Address: </b></span> <br>
										<span><?php echo $value['address'] ?></span>
									</div>
								</div>
							</div>

							<hr>

							<div class="row">
								<div class="col-12">
									<h6>Shopping address</h6>
									<p>
										<small><?php echo $value['appointment_address'] ?></small>
									</p>
									<h6>Preferred Time Slot</h6>
									<p>
										<small><?php echo $value['time_slot'] ?></small>
									</p>
									<hr>
									<?php 

										$coy = $b->coy_profile();

										if ($coy->num_rows == 1) {
											foreach ($coy as $key => $value) {
												?>
												<p class="mb-0">
													<b>Contact Number</b> <?php echo $value['number'] ?>
												</p>
												<p class="mt-0">
													<b>Email Address</b> <?php echo $value['email'] ?>
												</p>
												<?php
											}
										}
									?>
									
								</div>
							</div>

						</div>	

						<div>
							<button class="btn btn-light btn-sm mt-4" onclick="printContainer()">
								Print
							</button>
							<p>
								<a href="form.php" class="">Back to Homepage</a>
							</p>							
						</div>
									<?php
									}
								}
							}
						?>
						
					</div>
				</div>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    	
    	<script>
        function printContainer() {
            var container = document.getElementById('dt');
            var originalContents = document.body.innerHTML;

            // Temporarily replace the body content with the container's content
            document.body.innerHTML = container.innerHTML;

            // Print the container
            window.print();

            // Restore the original content
            document.body.innerHTML = originalContents;
        }
    </script>
	</body>
</html>