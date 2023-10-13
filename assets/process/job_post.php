<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $checkAccountClass = mysqli_query($con, "SELECT * FROM `employer_account`");
    $valueClass = mysqli_fetch_array($checkAccountClass);
    if ($valueClass['class'] == 'Free' && $valueClass['post'] >= 5) {

        echo '<script>
            alert("Account already reach the maximum post");
            window.location.href="../../job_post.php";
            </script>';
        exit();
    } 
    
    elseif($valueClass['class'] == 'Monthly' && $valueClass['post'] >= 100) {

        echo '<script>
            alert("Account already reach the maximum post");
            window.location.href="../../job_post.php";
            </script>';
        exit();
    } 
    
    else {
        // Check if a file was uploaded successfully
        if (isset($_FILES['jobPhoto']) && $_FILES['jobPhoto']['error'] === 0) {
            $uploadedFile = $_FILES['jobPhoto']['tmp_name']; // Temporary path of the uploaded file
            $destinationFolder = 'assets/img/job_photo/'; // Destination folder where you want to move the file
            $destinationFile = $destinationFolder . rand(1000, 9999) . $_FILES['jobPhoto']['name']; // Destination path for the moved file
            // Check file extension

            // Check file size
            $maxFileSize = 15 * 1024 * 1024; // 5MB
            if ($_FILES['jobPhoto']['size'] > $maxFileSize) {
                echo '<script>
            alert("File size exceeds the limit of 5MB.");
            window.location.href="../../job_post.php";
            </script>';
                exit();
            }

            // Move the uploaded file to the destination folder
            if (move_uploaded_file($uploadedFile, "../../" . $destinationFile)) {
                $forId = date('Ymd');
                $currentDate = date('m-d-Y');
                $mysqlDateFormat = $currentDate;
                $date="";
                $futureDate = date('m-d-Y', strtotime($date . ' +30 days'));
                $jobId = "job" . rand(1000, 9999) . $forId;
                $empId = $_SESSION['employerId'];
                $jobTitle = mysqli_real_escape_string($con, $_POST['jobTitle']);
                $jobPosition = mysqli_real_escape_string($con, $_POST['position']);
                $jobResponsibility = nl2br(mysqli_real_escape_string($con, $_POST['responsibility']));
                $category = mysqli_real_escape_string($con, $_POST['jobCategory']);
                $careerLevel = mysqli_real_escape_string($con, $_POST['careerLevel']);
                $location = mysqli_real_escape_string($con, $_POST['location']);
                $insertjobPhoto = mysqli_query($con, "INSERT INTO `job_photo`(`job_id`, `photo_dir`) VALUES ('$jobId','$destinationFile')");
                $insertjobOffer = mysqli_query($con, "INSERT INTO `job_offer`
                (`job_id`, `employer_id`, `job_title`, `position`, `job_category`, `location`, `responsibility`, `career_level`, `date_posted`, `expiration`, `status`) 
                VALUES ('$jobId','$empId','$jobTitle','$jobPosition','$category','$location','$jobResponsibility','$careerLevel','$mysqlDateFormat','$futureDate','Active')");
                $count=$valueClass['post']+1;
                $updatepost=mysqli_query($con,"UPDATE `employer_account` SET `post`='$count' WHERE `id`='$empId'");
                echo '<script>
                alert("Job Offer Successfuly Post");
                window.location.href="../../job_post.php";
                </script>';
            } else {
                echo 'Error moving uploaded file.';
                exit();
            }
        } else {
            echo 'File upload error: ' . $_FILES['jobPhoto']['error'];
            exit();
        }
    }
}
