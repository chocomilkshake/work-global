<!doctype html>
<html lang="en">

<head>
	<?php
	$currentScript = $_SERVER['PHP_SELF'];
	$scriptName = basename($currentScript, '.php');
	$scriptNameWithSpaces = str_replace('_', ' ', $scriptName);
	?>
	<title>
		<?php echo $scriptNameWithSpaces; ?>
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Favicons -->
	<link href="assets/img/hero-img.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<link
		href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
		rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="assets/css/login.css">

</head>

<body>

	<div class="choose" id="choose">
		<section id="pricing" class="pricing">
			<div class="container" data-aos="fade-up">
				<div class="section-title">
					<a class="back-button" href="index.php">
						<img src="assets/img/icons8-back-80.png" class="back-img" alt="">
					</a>
					<div class="row">
						<div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
							<div class="box">
								<img src="assets/img/21207.jpg" class="choose-logo" alt="">
								<br><br><br><br>
								<h4>Be an Employer</h4>
								<button id="employerBtn" class="form-control btn btn-primary rounded submit px-3"
									role="button">Sign In</button>
							</div>
						</div>
						<div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
							<div class="box">
								<img src="assets/img/5385937.jpg" class="choose-logo" alt="">
								<h4>Be a Candidate</h4>
								<button id="applicantBtn" class="form-control btn btn-primary rounded submit px-3"
									role="button">Sign In</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<div class="applicant" id="applicantDiv" style="display: none;">
		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-7 col-lg-5">
						<div class="wrap">

							<a class="back-button" href="login.php">
								<img src="assets/img/icons8-back-80.png" class="back-img" alt="">
							</a>
							<div class="img">
								<img src="assets/img/hero-img.png" class="logo" alt="">
							</div>
							<div class="login-wrap p-4 p-md-5">
								<div class="d-flex">
									<div class="w-100">
										<h3 class="mb-4">Candidate</h3>
									</div>
								</div>
								<form action="assets/process/login.php" class="signin-form" method="post">
									<div class="form-group mt-3">
										<input type="text" id="username" name="username" class="form-control" required>
										<label class="form-control-placeholder" for="username">Username</label>
									</div>
									<div class="form-group">
										<input id="password-field" name='password' type="password" class="form-control"
											required>
										<label class="form-control-placeholder" for="password">Password</label>
										<span toggle="#password-field"
											class="fa fa-fw fa-eye field-icon toggle-password"></span>
									</div>
									<div class="form-group">
										<button type="submit"
											class="form-control btn btn-primary rounded submit px-3">Sign
											In</button>
									</div>
									<div class="form-group d-md-flex">
										<div class="w-50 text-left">

										</div>
										<div class="w-50 text-md-right">
											<a href="#">Forgot Password</a>
										</div>
									</div>
								</form>
								<p class="text-center">Not a member? <a href="applicant_registration.php">Sign Up</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section>
	</div>

	<div class="employer" id="employerDiv" style="display: none;">
		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-7 col-lg-5">
						<div class="wrap">
							<a class="back-button" href="login.php">
								<img src="assets/img/icons8-back-80.png" class="back-img" alt="">
							</a>
							<div class="img">
								<img src="assets/img/hero-img.png" class="logo" alt="">
							</div>
							<div class="login-wrap p-4 p-md-5">
								<div class="d-flex">
									<div class="w-100">
										<h3 class="mb-4">Employer</h3>
									</div>
								</div>
								<form action="assets/process/employer_login.php" class="signin-form" method="post">
									<div class="form-group mt-3">
										<input type="text" id="username" name="username" class="form-control" required>
										<label class="form-control-placeholder" for="username">Username</label>
									</div>
									<div class="form-group">
										<input id="password-field" name='password' type="password" class="form-control"
											required>
										<label class="form-control-placeholder" for="password">Password</label>
										<span toggle="#password-field"
											class="fa fa-fw fa-eye field-icon toggle-password"></span>
									</div>
									<div class="form-group">
										<button type="submit"
											class="form-control btn btn-primary rounded submit px-3">Sign
											In</button>
									</div>
									<div class="form-group d-md-flex">
										<div class="w-50 text-left">

										</div>
										<div class="w-50 text-md-right">
											<a href="#">Forgot Password</a>
										</div>
									</div>
								</form>
								<p class="text-center">Not a member? <a href="employer_registration.php">Sign Up</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section>
	</div>

	<!-- Vendor JS Files -->
	<script src="assets/vendor/aos/aos.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>

	<!-- Template Main JS File -->
	<script src="assets/js/main.js"></script>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/popper.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/login.js"></script>
	<script src="assets/js/choose.js"></script>

</body>

</html>