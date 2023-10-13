<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sign-up</title>
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
  <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/progress_bar.css" rel="stylesheet">
  <link href="assets/css/registraion_applicant.css" rel="stylesheet">
  <link href="assets/css/upload_photo.css" rel="stylesheet">

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
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>


                  <!-- Company Information -->
                  <div class="com-info" id="comInfo">

                    <div class="form-outline">
                      <input form="formSubmit" type="text" id="comName" name="comName" class="form-control form-control-lg" required />
                      <label class="form-label" for="comName">Company Name</label>
                    </div>
                    <br><br>
                    <div class="form-outline">
                      <input form="formSubmit" type="text" id="ownerCeo" name="ownerCeo" class="form-control form-control-lg" required />
                      <label class="form-label" for="">President/CEO</label>
                    </div>
                    <br><br>
                    <div class="form-outline">
                      <input form="formSubmit" type="text" id="representative" name="representative" class="form-control form-control-lg" required />
                      <label class="form-label" for="">Representative</label>
                    </div>
                    <br><br>
                    <div class="form-outline">
                      <input form="formSubmit" type="text" id="address" name="address" class="form-control form-control-lg" required />
                      <label class="form-label" for="">Address</label>
                    </div>
                    <br><br>
                    <div class="form-outline">
                      <input form="formSubmit" type="tel" id="phoneNumber" name="phoneNumber" class="form-control form-control-lg" oninput="this.value = this.value.replace(/[^0-9]/g, '');javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="11" required />
                      <label class="form-label" for="phoneNumber">Phone Number</label>
                    </div>
                    <br><br>
                    <div class="form-outline">
                      <input form="formSubmit" type="email" id="emailAddress" name="emailAddress" class="form-control form-control-lg" required />
                      <label class="form-label" for="">Email</label>
                    </div>
                    <br><br>
                    <div class="form-outline">
                      <input form="formSubmit" type="text" id="website" name="website" class="form-control form-control-lg" />
                      <label class="form-label" for="website">website</label>
                    </div>
                    <br><br>
                    <div class="form-outline">
                      <input form="formSubmit" type="text" id="twitter" name="twitter" class="form-control form-control-lg" />
                      <label class="form-label" for="">Twitter</label>
                    </div>
                    <br><br>
                    <div class="form-outline">
                      <input form="formSubmit" type="text" id="facebook" name="facebook" class="form-control form-control-lg" />
                      <label class="form-label" for="">Facebook</label>
                    </div>
                    <br><br>
                    <div class="form-outline">
                      <input form="formSubmit" type="text" id="instagram" name="instagram" class="form-control form-control-lg" />
                      <label class="form-label" for="">instagram</label>
                    </div>
                    <br><br>
                    <div class="form-outline">
                      <input form="formSubmit" type="text" id="Linkedin" name="Linkedin" class="form-control form-control-lg" />
                      <label class="form-label" for="">Linkedin</label>
                    </div>

                    <div class="button"> <button type="submit" class="next" id="comInfonext">Next</button> <i class="fa fa-angle-right"></i> </div>

                  </div>

                  <div class="overview" id="overview" style="display: none;">

                    <div class="file-upload">
                      <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>

                      <div class="image-upload-wrap">
                        <input class="file-upload-input" id="employerLogo" name="employerLogo" form="formSubmit" type='file' onchange="readURL(this);" accept="image/*" required />
                        <div class="drag-text">
                          <h3>Drag and drop a company logo</h3>
                        </div>
                      </div>
                      <div class="file-upload-content">
                        <img class="file-upload-image" src="#" alt="your image" />
                        <div class="image-title-wrap">
                          <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="company-size">
                      <div class="form-outline">
                        <input form="formSubmit" type="tel" id="minimum" name="minimum" class="form-control form-control-lg" oninput="this.value = this.value.replace(/[^0-9]/g, '');javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="11" required />
                        <label class="form-label" for="minimum">minimum size</label>
                      </div>
                      <h1> - </h1>
                      <div class="form-outline">
                        <input form="formSubmit" type="tel" id="maximum" name="maximum" class="form-control form-control-lg" oninput="this.value = this.value.replace(/[^0-9]/g, '');javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="11" required />
                        <label class="form-label" for="maximum">maximum size</label>
                      </div>
                    </div>

                    <div class="form-outline">
                      <label class="form-label" for="inputOvewrview">Company overview</label>
                      <textarea form="formSubmit" name="inputOverview" id="inputOverview" cols="60" rows="17"></textarea>
                    </div>

                    <div class="industry">
                      <label class="form-label" for="list-industry">Industry</label><br>
                      <?php include("assets/include/list_of_industry.php"); ?>
                    </div>
                    <br>
                    <div class="form-outline">
                      <input type="text" form="formSubmit" id="validation" name="validation" class="form-control form-control-lg" />
                      <label class="form-label" for="">Company Registration Number/POEA Registration</label>
                    </div>
                    <div class="button"> <button id="backDiv">Back</button> <i class="fa fa-angle-right"></i> </div> <i class="fa fa-arrow-left back_page"></i>
                    <div class="button"> <button id="showAccount">Next</button> <i class="fa fa-angle-right"></i> </div> <i class="fa fa-arrow-left back_page"></i>

                  </div>

                  <div id="accountDiv" style="display: none;">

                    <form id="formSubmit" action="assets/process/employer_register.php" method="post" enctype="multipart/form-data">
                      <div class="form-outline">
                        <input type="text" id="username" name="username" class="form-control form-control-lg" required />
                        <label class="form-label" for="username">Username</label>
                      </div>

                      <div class="form-outline">
                        <input type="password" id="password" name="password" class="form-control form-control-lg" minlength="8" required />
                        <label class="form-label" for="password">Password</label>
                      </div>
                      <div class="button"><button type="submit">Create</button></div>
                    </form>
                    <div class="button"><button id="backOver">Back</button></div>
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
  <script src="assets/js/progress_bar.js"></script>
  <script src="assets/js/upload_photo.js"></script>

</body>

</html>