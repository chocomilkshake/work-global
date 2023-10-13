<?php


$getAdmin=mysqli_query($con,"SELECT * FROM `admin_account` WHERE `id`='$getId'");
$valueAdmin=mysqli_fetch_array($getAdmin);

$getProfile=mysqli_query($con,"SELECT * FROM `admin_profile` WHERE `id`='$getId'");
$valueProfile=mysqli_fetch_array($getProfile);

$getEncoded = mysqli_query($con,"SELECT * FROM `incoded_applicant`");
$countEncoded = mysqli_num_rows($getEncoded);

$getEmployer = mysqli_query($con,"SELECT * FROM `employer_account` WHERE `status`='Activate'");
$countEmployer = mysqli_num_rows($getEmployer);

$getOffer = mysqli_query($con,"SELECT * FROM `job_offer`");
$countOffer = mysqli_num_rows($getOffer);

$profile="assets/img/profile-user.png";
$adminName=$valueAdmin['name'];
$position=$valueAdmin['position'];




