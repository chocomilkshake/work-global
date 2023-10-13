<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('config.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $checkUsername = mysqli_query($con, "SELECT * FROM `employer_account` WHERE `username`='{$_POST['username']}'");
    if (!$checkUsername) {
        echo 'Error executing the username query: ' . mysqli_error($con);
        exit();
    }
    
    $alert = mysqli_num_rows($checkUsername);
    if ($alert < 1) {
        // Check if a file was uploaded successfully
        if (isset($_FILES['employerLogo']) && $_FILES['employerLogo']['error'] === 0) {
            $uploadedFile = $_FILES['employerLogo']['tmp_name']; // Temporary path of the uploaded file
            $destinationFolder = 'assets/img/employer_logo/'; // Destination folder where you want to move the file
            $destinationFile = $destinationFolder . rand(1000, 9999) . $_FILES['employerLogo']['name']; // Destination path for the moved file

            // Check file extension
            

            // Check file size
            $maxFileSize = 5 * 1024 * 1024; // 5MB
            if ($_FILES['employerLogo']['size'] > $maxFileSize) {
                echo '<script>
            alert("File size exceeds the limit of 5MB.");
            window.location.href="../../employer_registration.php";
            </script>';
                exit();
            }

            // Move the uploaded file to the destination folder
            if (move_uploaded_file($uploadedFile, "../../" . $destinationFile)) {
                $currentDate = date('Ymd');
                $empId = "emp" . rand(1000, 9999) . $currentDate;
                $companyName = mysqli_real_escape_string($con,$_POST['comName']);
                $companyOwner = mysqli_real_escape_string($con,$_POST['ownerCeo']);
                $representative = mysqli_real_escape_string($con,$_POST['representative']);
                $registerNumber = mysqli_real_escape_string($con,$_POST['validation']);
                if (isset($_POST['selected_items'])) {
                    $selectedValues = $_POST['selected_items'];
                    $listIndustry = "";
                
                    foreach ($selectedValues as $value) {
                      $listIndustry .= $value . "/ ";
                    }
                }
                $listIndustry = rtrim($listIndustry, "/ ");
                $companyOverview = mysqli_real_escape_string($con,$_POST['inputOverview']);
                $address = mysqli_real_escape_string($con,$_POST['address']);
                $contact = mysqli_real_escape_string($con,$_POST['phoneNumber']);
                $website = mysqli_real_escape_string($con,$_POST['website']);
                $email = mysqli_real_escape_string($con,$_POST['emailAddress']);
                $companySize = mysqli_real_escape_string($con,$_POST['minimum']." - ".$_POST['maximum']);
                $insertLogo = mysqli_query($con, "INSERT INTO `employer_logo`(`id`, `photo_dir`) VALUES ('$empId','$destinationFile')");
             
                $companySocialmedia=mysqli_query($con,"INSERT INTO `employer_social_media`(`id`, `twitter`, `facebook`, `instagram`, `linkedin`) VALUES ('$empId','$_POST[twitter]','$_POST[facebook]','$_POST[instagram]','$_POST[linkedin]')");
       
                $insertInformation = mysqli_query($con, "INSERT INTO `employer_information`(`id`, `company_name`, `president/ceo`, `representative`, `registered_number`, `industry`, `company_overview`, `address`, `contact`, `website`, `email`, `company_size`) VALUES ('$empId','$companyName','$companyOwner','$representative','$registerNumber','$listIndustry','$companyOverview','$address','$contact','$website','$email','$companySize')");
              

                $insertAccount = mysqli_query($con, "INSERT INTO `employer_account`(`id`, `username`, `password`, `expiration_date`, `status`, `class`) VALUES ('$empId','$_POST[username]','$_POST[password]','','Deactivate','')");
               
                echo '<script>
                alert("Registration Complete. To start the free trial we will call you to validate some information then activate your account within 2 working days");
                window.location.href="../../login.php";
                </script>';
            }
            else {
                echo 'Error moving uploaded file.';
                exit();
            }
        }
        else {
            echo 'File upload error: ' . $_FILES['employerLogo']['error'];
            exit();
        }
    }
}
?>
