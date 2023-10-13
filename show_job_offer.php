<!DOCTYPE html>
<html lang="en">
<?php
include('assets/include/full_info_job.php');
include('assets/include/check_applicant_account.php');
include('assets/include/check_job_offer.php');
?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/hero-img.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/full_view.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Updated: Jul 05 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.php">Work Global.ph</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="index.php">Home</a></li>
          <!--li><a class="nav-link   scrollto" href="#portfolio">Job Offer</a></li-->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>

      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->


    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container job-container">
        <div class="header-lower">
          <img src="<?php echo $CompanyLogo; ?>" class="company-logo" alt="">
          <div>
            <h3>
              <?php echo $companyName; ?>
            </h3>

            <h5>
              <?php echo $companyAddress; ?>
            </h5>

          </div>
        </div>

        <div class="title-container">
          <div class="title">
            <h5>Job Title: </h5>
            <p><?php echo $jobTitle; ?></p>

            <h5>Position: </h5>
            <p><?php echo $jobPosition; ?></p>
          </div>

        </div>
        <div class="posted">
          <h5>Posted on</h5>
          <p> <?php echo $jobPosted; ?></p>
          <form action="assets/process/application.php" method="post">
            <input type="hidden" name="jobId" id="jobId" value="<?php echo $jobId; ?>">
            <div class="apply-btn">
              <button type="submit" class="apply-now-btn">Apply Now!</button>
            </div>
          </form>
          <form action="assets/process/cancel_application.php" method="post">
          <div class="cancel-btn">
          <input type="hidden" name="jobId" id="jobId" value="<?php echo $jobId; ?>">
          <button type="submit" class="apply-now-btn">Cancel</button>
          </div>
          </form>
        </div>

      </div>

      <div class="container description">
        
        <h5>location:</h5>
        <p>
          <?php echo $location; ?>
        </p>
        
        </br>
        
        <h5>Job Responsibility:</h5>
        <p>
          <?php echo nl2br($responsibility); ?>
        </p>
        </br>
        
      </div>

      <div class="container  additional-info">
        <h3>Additional Information</h3>
        <div class="half">
          <h5>Career Level</h5>
          <p><?php echo $jobcareerLevel; ?></p>
          <h5>Job Category</h5>
          <p><?php echo $jobCategory; ?></p>
        </div>

      </div>
    </section>

  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   <footer id="footer">


<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>Job Access.ph</h3>
        <p>
          Unit 1 eden Townhomes <br>
          2001 eden St. Croner Pedro Gil St.<br>
          Sta. Ana Manila City  <br><br>
          <strong>Phone:</strong> <br>
          <strong>Email:</strong> crempcohrd@gmail.com<br>
        </p>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="privacy.php">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Other Services</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Dr. Cleaners</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Party n Fun</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Ayusinko.ph</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Social Networks</h4>
        <div class="social-links mt-3">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="container footer-bottom clearfix">
  <div class="copyright">
    &copy; Copyright <strong><span>Counterpart Resource Multi Purpose Cooperative</span></strong>. All Rights Reserved
  </div>
</div>
</footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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

</body>

</html>