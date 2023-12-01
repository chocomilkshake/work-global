<!DOCTYPE html>
<html lang="en">
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle form data here
    // You can access the query parameter using $_GET['variable']
    $applicantId = $_GET['applicantId'];
}
include('include/get_applicant_info.php');
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
    <link href="assets/css/ebiodata.css" rel="stylesheet">

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
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="index.php">Home</a></li>
                    <li><a class="getstarted scrollto" id="login-btn" href="login.php">Get Started</a></li>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </ul>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <div class="container py-5 h-100">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-12 col-lg-9 col-xl-7">
                            <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                                <div class="card-body p-4 p-md-5">

                                    <!--===== container For Picture and  Name =====-->
                                    <div class="profile">
                                        <img src="assets/img/hero-img.png" class="applicant-photo" alt="">
                                        <div>
                                            <h3>John Michael Masmela</h3>
                                            <h6 class="address">1151 B Vargas St. Tondo Manila Metro Manila</h6>
                                        </div>
                                    </div>

                                    <!--===== container For Personal Inforamtion =====-->
                                    <div class="personal-info">
                                        <h2>Personal Information</h2>


                                        <!--===== first part of personal information =====-->
                                        <div class="top-info">
                                            <!--==========-->

                                            <!--===== Birthday =====-->
                                            <h6>Birthday: 01-15-1998</h6>

                                            <!--===== Age =====-->
                                            <h6>Age: 25</h6>

                                            <!--===== Gender =====-->
                                            <h6>Gender: Male</h6>

                                            <!--===== Civil Status =====-->
                                            <h6>Civil Status: Single</h6>

                                        </div>
                                        <!--===== End =====-->
                                        <br>
                                        <!--===== Contact Information =====-->
                                        <h2>Contact information</h5>
                                            <div class="contact-info">
                                                <h6>Contact Number: (+63)09971393258</h6>
                                                <h6>Email: crempcomasmela@gmail.com</h6>
                                            </div>
                                            <!--===== End =====-->

                                            <!--===== Educational Background =====-->
                                            <br>
                                            <h2>Educational Background</h2>
                                            <br>
                                            <h4>Primary Educational</h4>
                                            <div class="education-info">
                                                <div>
                                                    <h6>Francisco Benitez Elementary School</h6>
                                                    <h6>Tondo, Manila, Metro Manila</h6>
                                                </div>
                                                <h6>2010</h6>

                                            </div>

                                            <br>
                                            <h4>Junior High Educational</h4>
                                            <div class="education-info">
                                                <div>
                                                    <h6>Florentino High School School</h6>
                                                    <h6>Tondo, Manila, Metro Manila</h6>
                                                </div>
                                                <h6>2014</h6>
                                            </div>

                                            <br>
                                            <h4>Senior High Educational</h4>
                                            <div class="education-info">
                                                <div>
                                                    <h6>Senior High School School</h6>
                                                    <h6>Tondo, Manila, Metro Manila</h6>
                                                </div>
                                                <h6>Information and Communication Technology</h6>
                                                <h6>2014</h6>
                                            </div>

                                            <br>
                                            <h4>Tertiary Educational</h4>
                                            <div class="education-info">
                                                <div>
                                                    <h6>Global Reciprocal College</h6>
                                                    <h6>9th ave, Caloocan, Metro Manila</h6>
                                                </div>
                                                <h6>B.S. Information Technology</h6>
                                                <h6>2022</h6>
                                            </div>
                                            <!--===== End =====-->

                                            <!--===== Work Experience Background =====-->
                                            <br>
                                            <h2>Work Experiences</h2>
                                            <div class="work-exp">
                                                <h6>Company Name: Counterpart Resource Multi-Purpose Cooperative</h6>
                                                <div style="display: flex;">
                                                    <h6>Position: I.T. Programmer</h6>
                                                    <h6>Year of Exit: 2099</h6>
                                                </div>

                                                <h6>Reason To Exit:</h6>

                                            </div>

                                            <div class="work-exp">
                                                <h6>Company Name: Counterpart Resource Multi-Purpose Cooperative</h6>
                                                <div style="display: flex;">
                                                    <h6>Position: I.T. Programmer</h6>
                                                    <h6>Year of Exit: 2099</h6>
                                                </div>

                                                <h6>Reason To Exit:</h6>

                                            </div>


                                            <!--===== End =====-->

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section><!-- End Breadcrumbs -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">



        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Counterpart Resource Multi Purpose Cooperative</span></strong>. All
                Rights Reserved
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