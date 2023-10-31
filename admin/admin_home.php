<!DOCTYPE html>
<html lang="en">
<?php
include('assets/include/admin_auth.php');
$getId = $_SESSION['adminId'];
include('assets/process/config.php');
include('assets/include/get_admin_info.php');
?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/hero-img.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
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
  <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/progress_bar.css" rel="stylesheet">
  <link href="assets/css/registraion_applicant.css" rel="stylesheet">
  <link href="assets/css/upload_photo.css" rel="stylesheet">
  <link href="assets/css/full_view.css" rel="stylesheet">
  <link href="assets/css/dashboard.css" rel="stylesheet">
  <link href="assets/css/home_table.css" rel="stylesheet">

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

  <?php include('admin_header.php'); ?>

  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->

    <!-- Company Information -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container job-container">
        <div class="header-lower">
          <img src="<?php echo $profile; ?>" class="company-logo" alt="">

          <!-- ======= admin name and position ======= -->
          <div>
            <h3>
              <?php echo $adminName; ?>
            </h3>

            <h5>
              <?php echo $position; ?>
            </h5>
          </div>


        </div>
      </div>

      <!-- Count of all applicant, Employer and job posted -->
      <div class="container job-container">
        <div class="count-container">
          <!-- No. of Encoded -->
          <div class="num-encoded">
            <h4>No. of Encoded Applicant:
              <?php echo $countEncoded; ?>
            </h4>
          </div>
          <!-- No. of Employer-->
          <div class="num-employer">
            <h4>No. of Employer:
              <?php echo $countEmployer; ?>
            </h4>
          </div>

           <!-- No. of Posted offer -->
           <div class="num-offer">
            <h4>No. of Posted Offer:
              <?php echo $countOffer; ?>
            </h4>
          </div>

        </div>
      </div>

      <!-- tABLE OF USERS AND EMPLOYER -->
      <div class="table-container">
        <!-- Table of User's -->
        <div class="user-table">
            <?php include('assets/include/user_table.php');?>
        </div>

        <div class="employer-table">
            <?php include('assets/include/employer_table.php');?>
        </div>

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
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

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

</body>

</html>