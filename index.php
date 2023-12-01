<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include('head_contain.php'); 
  include('assets/include/check_applicant_account.php'); 
  include('assets/process/config.php');
  include('assets/include/check_job_expiration.php');
  ?>
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
  
  <?php include('header.php') ?>
  
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Join Job Access today and unlock a world of opportunities!</h1>
          <h2>Whether you're a job seeker looking to take your career to new heights or an employer seeking exceptional talent, we are here to make your recruitment journey a success.</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="login.php" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">



    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              At Job Access, we are passionate about connecting talented individuals with their dream jobs across the globe. As a leading Local online recruitment company, we provide a platform that bridges the gap between employers and job seekers, facilitating seamless recruitment processes regardless of geographical boundaries.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Extensive Local Network: Our extensive network spans across countries and industries, ensuring that both job seekers and employers have access to a diverse range of opportunities and talent.</li>
              <li><i class="ri-check-double-line"></i> Dedicated Support: We have a team of dedicated professionals who provide personalized assistance and support throughout the recruitment process, addressing any queries or concerns promptly.</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              For employers, we offer tailored solutions to streamline their recruitment process. Our platform provides access to a local talent pool, allowing employers to search and connect with qualified professionals from different backgrounds and expertise. We provide innovative tools and resources to facilitate efficient candidate screening, interview scheduling, and hiring processes, saving time and effort for employers.
            </p>
            <a href="applicant_registration.php" class="btn-learn-more">Sign-up as candidate</a>
            <a href="employer_registration.php" class="btn-learn-more">Sign-up as employer</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Why Us?<strong> Job Access have</strong></h3>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Extensive Local Network: Job Access has built an extensive network spanning across countries and industries. This expansive reach ensures that both job seekers and employers have access to a diverse range of opportunities and talent from around the world. Whether you're seeking a job abroad or looking to recruit top talent locally, our local network provides unparalleled access.
                    </p>
                  </div>
                </li>


              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.gif");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->


    <!-- ======= Job offer Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Job offer</h2>
          <p>Right person for the right job. we can help you to find the best position that match your experience and if you have professional work experience or solid technical and interpersonal skills and interest in working for the best organization local.</p>
        </div>
                    
        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <?php include('assets/include/position_list.php'); ?>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">


          <?php include('assets/include/job_offer.php'); ?>

        </div>

      </div>
    </section><!-- End Job offer Section -->

    <!-- ======= Employer Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">

          
            <h2>Our Employment Partners</h2>
            <p>"Discover a world of career opportunities with our Employment Partners. Our platform connects you with a diverse network of top-tier companies actively looking for talented individuals like you. Explore our directory, find exciting job prospects, and take the next step towards your professional growth. Join our community and unlock a wealth of possibilities with our trusted Employment Partners."
          </div>
          <div class="row">
          <?php include('assets/include/employer_list.php'); ?>


        </div>

      </div>
    </section><!-- End Employer Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pricing</h2>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Free trial</h3>
              <h4><sup>&#x20B1;</sup>0<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Can Post 5 jobs</li>
                <li><i class="bx bx-check"></i> Up to 10 applicant per job</li>
                <li><i class="bx bx-check"></i> viewing resume count as one</li>
                <li class="na"><i class="bx bx-x"></i> <span>Job reposting/Management</span></li>
                <li class="na"><i class="bx bx-x"></i> <span>Applicant Management</span></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>Monthly Plan</h3>
              <h4><sup>&#x20B1;</sup>1200<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Can Post 100 jobs</li>
                <li><i class="bx bx-check"></i> Up to 50 applicant per job</li>
                <li><i class="bx bx-check"></i> viewing resume count as one</li>
                <li><i class="bx bx-check"></i> Job reposting/Management</li>
                <li><i class="bx bx-check"></i> Applicant Management</li>
              </ul>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Annual Plan</h3>
              <h4><sup>&#x20B1;</sup>12000<span>per year</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Can Post jobs many as you can</li>
                <li><i class="bx bx-check"></i> Unlimited applicant per job</li>
                <li><i class="bx bx-check"></i> viewing resume count as one</li>
                <li><i class="bx bx-check"></i> Job reposting/management</li>
                <li><i class="bx bx-check"></i> Applicant Management</li>
              </ul>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Unit 1 eden Townhomes <br>
              2001 eden St. Croner Pedro Gil St.<br>
              Sta. Ana Manila City  </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>crempcohrd@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p></p>
              </div>

              <iframe src="https://maps.google.com/maps?q=SMC Manpower Agency Philippines Company, Unit 1 Eden Townhomes 2001 Eden Street Corner, Pedro Gil Street, Santa Ana, Manila, Metro Manila&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="assets/process/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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