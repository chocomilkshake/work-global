<?php
include('../process/config.php');
$appicantInfo = mysqli_query($con,"SELECT * FROM `applicant_information` WHERE `id`='$applicantId'");
$getApplicantinfo = mysqli_fetch_array($appicantInfo);
$educationalInfo = mysqli_query($con,"SELECT * FROM `educational_background` WHERE `applicant_id`='$applicantId'");
$geteducInfo = mysqli_fetch_array($educationalInfo);
$workExp = mysqli_query($con,"SELECT + FROM `work_experience`");
?>