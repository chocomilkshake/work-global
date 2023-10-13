<!DOCTYPE html>
<html lang="en">
<?php
include('assets/process/config.php');

//Id value of employer from index to get by included employer info
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $getId = $_POST['employerId'];
}
//Company information from database
include('assets/include/get_employer_info.php');
include('assets/include/check_job_expiration.php')
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
            <h1 class="logo me-auto"><a href="index.php">Job Access.ph</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="index.php">Home</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Job Offer</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>

            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->

        <!-- Company Information -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container job-container">
                <div class="header-lower">
                    <img src="<?php echo $companyLogo; ?>" class="company-logo" alt="">
                    <div>
                        <h3>
                            <?php echo $companyName; ?>
                        </h3>

                        <h5>
                            <?php echo $companyAddress; ?>
                        </h5>

                    </div>
                </div>

                <div class="container description">
                    <h5>Company Overview:</h5>
                    <p>
                        <?php echo $overview; ?>
                    </p>
                    </br>
                    </br>
                    <h5>Company Industry:</h5>
                    <p>
                        <?php echo $companyIndustry; ?>
                    </p>

                </div>

                <!-- Other Information -->
                <div class="container other-info">
                    <h1>Other Inforamtion</h1>
                    <div class="contain-other">
                        <div>

                            <h5>Representative</h5>
                            <p><?php echo $representative; ?></p>
                            <br>
                            <h5>Company Register Number/POAE</h5>
                            <p><?php echo $companyregNum; ?></p>
                            <br>
                            <h5>Company Size</h5>
                            <p><?php echo $companySize; ?></p>
                            <br>
                        </div>

                        <div>

                            <h5>contact</h5>
                            <p><?php echo $companyContact; ?></p>
                            <br>
                            <h5>Email</h5>
                            <p><?php echo $companyEmail; ?></p>
                            <br>
                            <h5>Website</h5>
                            <p><?php echo $companyWebsite; ?></p>
                            <br>
                        </div>
                    </div>

                </div>

                

            </div>

            
        <!-- ======= Job offer Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Job offer</h2>
                    <p>Right person for the right job. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">All</li>
                    <?php include('assets/include/employer_position_list.php'); ?>
                </ul>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">


                    <?php include('assets/include/employer_offer.php'); ?>

                </div>

            </div>
        </section><!-- End Job offer Section -->
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
          <strong>Phone:</strong> +1 5589 55488 55<br>
          <strong>Email:</strong> info@example.com<br>
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
        <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
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