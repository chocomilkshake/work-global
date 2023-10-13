<!DOCTYPE html>
<html lang="en">
<?php
include('assets/process/config.php');
include('assets/include/check_job_expiration.php');
include('assets/include/employer_auth.php');
?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Job Post</title>
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
  <link href="assets/css/job_post.css" rel="stylesheet">


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

  <?php include('employer_header.php'); ?>

  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="container py-5 h-100">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
              <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">

                  <!-- Upload photo for job Posting -->
                  <form id="formSubmit" action="assets/process/job_post.php" method="post"
                    enctype="multipart/form-data">

                    <div class="file-upload">
                      <button class="file-upload-btn" type="button"
                        onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>

                      <div class="image-upload-wrap">
                        <input class="file-upload-input" id="jobPhoto" name="jobPhoto" form="formSubmit" type='file'
                          onchange="readURL(this);" accept="image/*" required />
                        <div class="drag-text">
                          <h3>Drag and drop a company logo</h3>
                        </div>
                      </div>
                      <div class="file-upload-content">
                        <img class="file-upload-image" src="#" alt="your image" />
                        <div class="image-title-wrap">
                          <button type="button" onclick="removeUpload()" class="remove-image">Remove <span
                              class="image-title">Uploaded Image</span></button>
                        </div>
                      </div>
                    </div>
                    <br>

                    <!-- Other information for job posting -->
                    <div class="form-outline">
                      <input form="formSubmit" type="text" id="jobTitle" name="jobTitle"
                        class="form-control form-control-lg" required />
                      <label class="form-label" for="jobTitle">Job Title</label>
                    </div>
                    <br>
                    <div class="form-outline">
                      <input form="formSubmit" type="text" id="position" name="position"
                        class="form-control form-control-lg" required />
                      <label class="form-label" for="position">Job Position</label>
                    </div>
                    <br>
                    <select form="formSubmit" id="jobCategory" name="jobCategory" class="form-control form-control-lg">
                      <option value="Accounting and Finance">Accounting and Finance</option>
                      <option value="Administrative and Clerical">Administrative and Clerical</option>
                      <option value="Customer Service">Customer Service</option>
                      <option value="Sales and Marketing">Sales and Marketing</option>
                      <option value="Information Technology (IT)">Information Technology (IT)</option>
                      <option value="Healthcare and Medical">Healthcare and Medical</option>
                      <option value="Education">Education</option>
                      <option value="Event Management">Event Management</option>
                      <option value="Engineering">Engineering</option>
                      <option value="Human Resources">Human Resources</option>
                      <option value="Manufacturing and Production">Manufacturing and Production</option>
                      <option value="Retail">Retail</option>
                      <option value="Retail">Food and Beverage Services</option>
                      <option value="Hospitality and Tourism">Hospitality and Tourism</option>
                      <option value="Construction and Trades">Construction and Trades</option>
                      <option value="Creative Arts and Design">Creative Arts and Design</option>
                      <option value="Legal">Legal</option>
                      <option value="Science">Science</option>
                      <option value="Government and Public Administration">Government and Public Administration</option>
                      <option value="Transportation and Logistics">Transportation and Logistics</option>
                      <option value="Social Services">Social Services</option>
                    </select>
                    <label class="form-label" for="jobCategory">Job Category</label>
                    <br><br>
                    <div class="form-outline">
                      <label class="form-label" for="responsibility">Job Responsibility</label>
                      <textarea form="formSubmit" name="responsibility" id="responsibility" cols="60" rows="5"
                        class="form-control form-control-lg" required></textarea>
                    </div>
                    <br><br>
                    <div class="form-outline  career">
                      <select form="formSubmit" type="text" id="careerLevel" name="careerLevel"
                        class="form-control form-control-lg" required>
                        <option value="Entry-Level">Entry-Level</option>
                        <option value="Internship">Internship</option>
                        <option value="Junior or Associate">Junior or Associate</option>
                        <option value="Mid-Level">Mid-Level</option>
                        <option value="Senior-Level">Senior-Level</option>
                        <option value="Managerial">Managerial</option>
                        <option value="Director">Director</option>
                        <option value="Executive">Executive</option>
                        <option value="C-Suite">C-Suite</option>
                        <option value="Specialist or Expert">Specialist or Expert</option>
                        <option value="Consultant">Consultant</option>
                        <option value="Freelancer or Contractor">Freelancer or Contractor</option>
                        <option value="Entrepreneur">Entrepreneur</option>
                        <option value="Academic/Researcher">Academic/Researcher</option>
                        <option value="Nonprofit or NGO">Nonprofit or NGO</option>
                      </select>
                      <label class="form-label" for="">Career Level</label>
                    </div>
                    <br>
                    <?php include('assets/include/select_location.php'); ?>

                    <br>


                    <div class="button"><button type="submit">POST</button></div>
                  </form>

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