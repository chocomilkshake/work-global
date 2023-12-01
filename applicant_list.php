<!DOCTYPE html>
<html lang="en">
<?php
include('assets/include/employer_auth.php');
$getId = $_SESSION['employerId'];
include('assets/process/config.php');
include('assets/include/get_employer_info.php');
?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <?php
  include('assets/include/web_title.php');
  ?>
  
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/progress_bar.css" rel="stylesheet">
  <link href="assets/css/registraion_applicant.css" rel="stylesheet">
  <link href="assets/css/upload_photo.css" rel="stylesheet">
  <link href="assets/css/full_view.css" rel="stylesheet">
  <link href="assets/css/applicant_table_list.css" rel="stylesheet">

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
  
  <?php include('employer_header.php');?>
  
  <!-- End Header -->

  <main id="main">
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container job-container">
          <?php include('assets/include/applicant_list_table.php');?>
      </div>
    </section>
  </main><!-- End #main -->


  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; <span>Counterpart Resource Multi Purpose</span>. All Rights Reserved
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
  <script src="assets/js/progress_bar.js"></script>
  <script src="assets/js/upload_photo.js"></script>
  <script src="assets/js/search_filter.js"></script>

</body>

</html>