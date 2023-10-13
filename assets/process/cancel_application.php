<?php


include('config.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $getjobinfo = mysqli_query($con, "SELECT * FROM `job_offer` WHERE `job_id`='{$_POST['jobId']}'");
    $value = mysqli_fetch_array($getjobinfo);
    $currentDate = date('m - d - Y');
    $mysqlDateFormat = $currentDate;
    $insertApplication = mysqli_query($con, "DELETE FROM `application` WHERE `applicant_id`='{$_SESSION['appId']}' AND `job_id`='{$value['job_id']}'");

    echo '<script>
    alert("Application Cancelled");
    window.location.href="../../index.php";
    </script>';
}
