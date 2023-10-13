<?php


$getEmployer=mysqli_query($con,"SELECT * FROM `employer_information` WHERE `id`='$getId'");
$valueEmployer=mysqli_fetch_array($getEmployer);
$getLogo=mysqli_query($con,"SELECT * FROM `employer_logo` WHERE `id`='$getId'");
$valueLogo=mysqli_fetch_array($getLogo);
$companyLogo=$valueLogo['photo_dir'];
$companyName=$valueEmployer['company_name'];
$representative=$valueEmployer['representative'];
$companyAddress=$valueEmployer['address'];
$companyWebsite=$valueEmployer['website'];
$companyContact=$valueEmployer['contact'];
$companyEmail=$valueEmployer['email'];
$overview=$valueEmployer['company_overview'];
$companyregNum=$valueEmployer['registered_number'];
$companyIndustry=$valueEmployer['industry'];
$companySize=$valueEmployer['company_size'];




