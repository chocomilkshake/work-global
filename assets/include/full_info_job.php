<?php

include('assets/process/config.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jobId = $_POST['jobId'];
}
$getJobvalue=mysqli_query($con,"SELECT * FROM `job_offer` WHERE `job_id`='$jobId'");
$value=mysqli_fetch_array($getJobvalue);
$empId=$value['employer_id'];
$getEmployer=mysqli_query($con,"SELECT * FROM `employer_information` WHERE `id`='$empId'");
$valueEmployer=mysqli_fetch_array($getEmployer);
$getLogo=mysqli_query($con,"SELECT * FROM `employer_logo` WHERE `id`='$empId'");
$valueLogo=mysqli_fetch_array($getLogo);
$CompanyLogo=$valueLogo['photo_dir'];
$companyName=$valueEmployer['company_name'];
$companyAddress=$valueEmployer['address'];
$jobTitle=$value['job_title'];
$jobPosition=$value['position'];
$jobPosted=$value['date_posted'];
$responsibility=$value['responsibility'];
$jobcareerLevel=$value['career_level'];
$jobCategory=$value['job_category'];
$location=$value['location'];


