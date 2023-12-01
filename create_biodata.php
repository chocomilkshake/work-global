<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <?php
    include('assets/include/web_title.php');
    ?>
    
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
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
                    <li><a class="nav-link scrollto " href="index.php">Home</a></li>
                    <li><a class="getstarted scrollto" id="login-btn" href="login.php">Get Started</a></li>
                    <i class="bi bi-list mobile-nav-toggle"></i>
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


                                    <!--*************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
                                    <div id="personalInformation">
                                        <div class="file-upload">
                                            <button class="file-upload-btn" type="button"
                                                onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>

                                            <div class="image-upload-wrap">
                                                <input form="bio" class="file-upload-input" id="appPhoto"
                                                    name="appPhoto" form="bio" type='file' onchange="readURL(this);"
                                                    accept="image/*" required />
                                                <div class="drag-text">
                                                    <h3>Drag & Drop your formal photo*.</h3>
                                                </div>
                                            </div>
                                            <div class="file-upload-content">
                                                <img class="file-upload-image" src="#" alt="your image" />
                                                <div class="image-title-wrap">
                                                    <button type="button" onclick="removeUpload()"
                                                        class="remove-image">Remove <span class="image-title">Uploaded
                                                            Image</span></button>
                                                </div>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">

                                                <div class="form-outline">
                                                    <input form="bio" type="text" id="firstName" name="firstName"
                                                        class="form-control form-control-lg" required />
                                                    <label class="form-label" for="firstName">First Name*</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4">

                                                <div class="form-outline">
                                                    <input form="bio" type="text" id="middleName" name="middleName"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="middleName">Middle Name</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4">

                                                <div class="form-outline">
                                                    <input form="bio" type="text" id="lastName" name="lastName"
                                                        class="form-control form-control-lg" required />
                                                    <label class="form-label" for="lastName">Last Name*</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4">

                                                <div class="form-outline">
                                                    <input form="bio" type="text" id="suffix" name="suffix"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="suffix">suffix</label>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input form="bio" type="text" id="address" name="address"
                                                        class="form-control form-control-lg" required />
                                                    <label class="form-label" for="address">Address*</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4 d-flex align-items-center">

                                                <div class="form-outline datepicker w-100">
                                                    <input form="bio" type="date" class="form-control form-control-lg"
                                                        id="birthdayDate" name="birthdayDate" onchange="calculateAge()"
                                                        required />
                                                    <label for="birthdayDate" class="form-label">Birthday*</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4">

                                                <h6 class="mb-2 pb-1">Gender: </h6>

                                                <div class="form-check form-check-inline">
                                                    <input form="bio" class="form-check-input" type="radio"
                                                        name="inlineRadioOptions" id="femaleGender" value="Female"
                                                        checked />
                                                    <label class="form-check-label" for="femaleGender">Female</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input form="bio" class="form-check-input" type="radio"
                                                        name="inlineRadioOptions" id="maleGender" value="Male" />
                                                    <label class="form-check-label" for="maleGender">Male</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input form="bio" class="form-check-input" type="radio"
                                                        name="inlineRadioOptions" id="otherGender" value="Other" />
                                                    <label class="form-check-label" for="otherGender">Other</label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="col-md-6 mb-4 d-flex align-items-center">
                                                <div class="form-outline">
                                                    <input form="bio" type="text" id="age" name="age"
                                                        class="form-control form-control-lg" readonly />
                                                    <label class="form-label" for="age">Age</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4">

                                                <h6 class="mb-2 pb-1">Civil Status: </h6>

                                                <div class="form-check form-check-inline">
                                                    <input form="bio" class="form-check-input" type="radio"
                                                        name="statusRadioOptions" id="single" value="Single" checked />
                                                    <label class="form-check-label" for="single">Single</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input form="bio" class="form-check-input" type="radio"
                                                        name="statusRadioOptions" id="widow" value="Widow" />
                                                    <label class="form-check-label" for="widow">Widowed</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input form="bio" class="form-check-input" type="radio"
                                                        name="statusRadioOptions" id="married" value="Married" />
                                                    <label class="form-check-label" for="">Married</label>
                                                </div>

                                            </div>


                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4 pb-2">

                                                <div class="form-outline">
                                                    <input form="bio" type="email" id="emailAddress" name="emailAddress"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="emailAddress">Email*</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4 pb-2">

                                                <div class="form-outline">
                                                    <input form="bio" type="tel" id="phoneNumber" name="phoneNumber"
                                                        class="form-control form-control-lg"
                                                        oninput="this.value = this.value.replace(/[^0-9]/g, '');javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                        maxlength="11" required />
                                                    <label class="form-label" for="phoneNumber">Phone Number*</label>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="next-back-btn">

                                            <div class="mt-4 pt-2">
                                                <button class="btn btn-primary btn-lg" id=next>Next</button>
                                            </div>

                                        </div>

                                    </div>

                                    <!--*************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->

                                    <div id="educationalBackground" style="display: none;">
                                        <h3>Educational background</h3>
                                        <br>
                                        <h5>Primary</h5>
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input form="bio" type="text" id="primaryName" name="primaryName"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="primaryName">School Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input form="bio" type="text" id="primaryAddress"
                                                        name="primaryAddress" class="form-control form-control-lg" />
                                                    <label class="form-label" for="primaryAddress">Address</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4 pb-2">
                                            <div class="form-outline">
                                                <input form="bio" type="tel" id="primaryEnd" name="primaryEnd"
                                                    class="form-control form-control-lg"
                                                    oninput="this.value = this.value.replace(/[^0-9]/g, '');javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                    maxlength="11" />
                                                <label class="form-label" for="primaryEnd">Year Graduated*</label>
                                            </div>
                                        </div>

                                        <br>
                                        <h5>Junior Secondary</h5>
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input form="bio" type="text" id="secondaryName"
                                                        name="secondaryName" class="form-control form-control-lg" />
                                                    <label class="form-label" for="secondaryName">School Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input form="bio" type="text" id="secondaryAddress"
                                                        name="secondaryAddress" class="form-control form-control-lg" />
                                                    <label class="form-label" for="secondaryAddress">Address</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4 pb-2">
                                            <div class="form-outline">
                                                <input form="bio" type="tel" id="secondaryEnd" name="secondaryEnd"
                                                    class="form-control form-control-lg"
                                                    oninput="this.value = this.value.replace(/[^0-9]/g, '');javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                    maxlength="11" />
                                                <label class="form-label" for="secondaryEnd">Year Graduated*</label>
                                            </div>
                                        </div>

                                        <h5>Senior Secondary</h5>
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input form="bio" type="text" id="seniorSchool" name="seniorSchool"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label"
                                                        for="seniorSchool">College/University/School</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input form="bio" type="text" id="seniorAddress"
                                                        name="seniorAddress" class="form-control form-control-lg" />
                                                    <label class="form-label" for="seniorAddress">Address</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input form="bio" type="text" id="strand" name="strand"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="course">Strand/Academic Track</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4 pb-2">
                                                <div class="form-outline">
                                                    <input form="bio" type="tel" id="seniorEnd" name="seniorEnd"
                                                        class="form-control form-control-lg"
                                                        oninput="this.value = this.value.replace(/[^0-9]/g, '');javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                        maxlength="11" />
                                                    <label class="form-label" for="seniorEnd">Year Graduated*</label>
                                                </div>
                                            </div>
                                        </div>


                                        <br>
                                        <h5>Tertiary</h5>
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input form="bio" type="text" id="tertiarySchool"
                                                        name="tertiarySchool" class="form-control form-control-lg" />
                                                    <label class="form-label"
                                                        for="tertiarySchool">College/University</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input form="bio" type="text" id="tertiaryAddress"
                                                        name="tertiaryAddress" class="form-control form-control-lg" />
                                                    <label class="form-label" for="tertiaryAddress">Address</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input form="bio" type="text" id="course" name="course"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="course">Course/Program</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4 pb-2">
                                                <div class="form-outline">
                                                    <input form="bio" type="tel" id="tertiaryEnd" name="tertiaryEnd"
                                                        class="form-control form-control-lg"
                                                        oninput="this.value = this.value.replace(/[^0-9]/g, '');javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                        maxlength="11" />
                                                    <label class="form-label" for="TertiaryEnd">Year Graduated*</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="next-back-btn">

                                            <div class="mt-4 pt-2">
                                                <button class="btn btn-primary btn-lg" id=eduBack>Back</button>
                                            </div>

                                            <div class="mt-4 pt-2">
                                                <button class="btn btn-primary btn-lg" id=eduNext>Next</button>
                                            </div>

                                        </div>

                                    </div>
                                    <!--*************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->


                                    <div id="workExperience" style="display: none;">
                                        <br>
                                        <h5>Work Experience #1</h5>
                                        <br>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input form="bio" type="text" id="position" name="position[]"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="position">Position</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input form="bio" type="text" id="companyName" name="companyName[]"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="companyName">Company Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input form="bio" type="text" id="companyAddress"
                                                        name="companyAddress[]" class="form-control form-control-lg" />
                                                    <label class="form-label" for="companyAddress">Company
                                                        Address</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input form="bio" type="text" id="year" name="year[]"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="year">Year</label>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-outline">
                                                <label class="form-label" for="aboutExp">About Work Experience</label>
                                                <textarea form="bio" name="aboutExp[]" name="aboutExp" cols="60"
                                                    rows="5" class="form-control form-control-lg"></textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <h5>Work Experience #2</h5>
                                        <br>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input form="bio" type="text" id="position" name="position[]"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="position">Position</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input form="bio" type="text" id="companyName" name="companyName[]"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="companyName">Company Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input form="bio" type="text" id="companyAddress"
                                                        name="companyAddress[]" class="form-control form-control-lg" />
                                                    <label class="form-label" for="companyAddress">Company
                                                        Address</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input form="bio" type="text" id="year" name="year[]"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="year">Year</label>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-outline">
                                                <label class="form-label" for="aboutExp">About Work Experience</label>
                                                <textarea form="bio" name="aboutExp[]" name="aboutExp" cols="60"
                                                    rows="5" class="form-control form-control-lg"></textarea>
                                            </div>

                                            <br>
                                            <h5>Work Experience #3</h5>
                                            <br>

                                            <div class="row">
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <input form="bio" type="text" id="position" name="position[]"
                                                            class="form-control form-control-lg" />
                                                        <label class="form-label" for="position">Position</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <input form="bio" type="text" id="companyName"
                                                            name="companyName[]" class="form-control form-control-lg" />
                                                        <label class="form-label" for="companyName">Company Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <input form="bio" type="text" id="companyAddress"
                                                            name="companyAddress[]"
                                                            class="form-control form-control-lg" />
                                                        <label class="form-label" for="companyAddress">Company
                                                            Address</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <input type="text" id="year" name="year[]"
                                                            class="form-control form-control-lg" />
                                                        <label form="bio" class="form-label" for="year">Year</label>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-outline">
                                                    <label class="form-label" for="aboutExp">About Work
                                                        Experience</label>
                                                    <textarea form="bio" name="aboutExp[]" name="aboutExp" cols="60"
                                                        rows="5" class="form-control form-control-lg"></textarea>
                                                </div>


                                            </div>






                                            <div class="next-back-btn">

                                                <div class="mt-4 pt-2">
                                                    <button class="btn btn-primary btn-lg" id=workexpBack>Back</button>
                                                </div>

                                                <div class="mt-4 pt-2">
                                                    <button class="btn btn-primary btn-lg" id=workexpNext>Next</button>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <!--*************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
                                    <div id="account" style="display: none;">

                                        <div class="form-outline">
                                            <input form="bio" type="text" id="username" name="username"
                                                class="form-control form-control-lg" minlength="8" required />
                                            <label class="form-label" for="username">Username</label>
                                            <div id="username-feedback"></div>
                                        </div>
                                        <br>
                                        <div class="form-outline">
                                            <input form="bio" type="password" id="password" name="password"
                                                class="form-control form-control-lg" minlength="8" required />
                                            <label class="form-label" for="password">Password</label>
                                        </div>
                                        <br>
                                        <div class="form-outline">
                                            <input form="bio" type="password" id="confirmPassword"
                                                name="confirmPassword" oninput="checkPasswordMatch(this)"
                                                class="form-control form-control-lg" minlength="8" required />
                                            <label class="form-label" for="confirmPassword">Confirm Password</label>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="form-outline">
                                            <input type="checkbox" name="term" id="term"><a href="privacy.php"> Term and
                                                Condition</a>
                                            <br>
                                            <input type="checkbox" name="privay" id="privacy"><a href="privacy.php">
                                                Privacy policies</a>
                                        </div>



                                        <form id="bio" action="assets/process/create_account_bio.php" method="post"
                                            enctype="multipart/form-data">
                                            <div class="mt-4 pt-2">
                                                <input class="btn btn-primary btn-lg" id="send" name="send"
                                                    type="submit" value="Submit" disabled />
                                            </div>
                                        </form>


                                    </div>

                                    <!--*************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->

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
                            Sta. Ana Manila City <br><br>
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
    <script src="assets/js/age_calculation.js"></script>
    <script src="assets/js/upload_photo.js"></script>
    <script src="assets/js/biodata_pages.js"></script>

</body>

</html>