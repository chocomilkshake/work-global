<?php
include('config.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if a file was uploaded successfully
    if (isset($_FILES['appPhoto']) && $_FILES['appPhoto']['error'] === 0) {
        $uploadedFile = $_FILES['appPhoto']['tmp_name']; // Temporary path of the uploaded file
        $destinationFolder = 'assets/img/app_photo/'; // Destination folder where you want to move the file
        $destinationFile = $destinationFolder . rand(1000, 9999) . $_FILES['appPhoto']['name']; // Destination path for the moved file
        // Check file extension

        // Check file size
        $maxFileSize = 15 * 1024 * 1024; // 5MB
        if ($_FILES['appPhoto']['size'] > $maxFileSize) {
            echo '<script>
        alert("File size exceeds the limit of 5MB.");
        </script>';
            exit();
        }

        // Move the uploaded file to the destination folder
        if (move_uploaded_file($uploadedFile, "../../" . $destinationFile)) {
            $currentDate = date('Ymd');
            $appId = "APC" . rand(1000, 9999) . $currentDate;
            //insert personal information
            $insertInformation = mysqli_query($con, "INSERT INTO `applicant_information`(`id`, `first_name`, `middle_name`, `last_name`, `suffix`,`address`, `birthday`, `age`, `gender`, `civil_status`, `contact_number`, `email`) 
            VALUES ('$appId','$_POST[firstName]','$_POST[middleName]','$_POST[lastName]','$_POST[suffix]',$_POST[address],'$_POST[birthdayDate]','$_POST[age]','{$_POST['inlineRadioOptions']}','{$_POST['statusRadioOptions']}','$_POST[phoneNumber]','$_POST[emailAddress]')");
            //add applicant Photo
            $insertPhoto=mysqli_query($con,"INSERT INTO `applicant_photo`(`id`, `photo_dir`) VALUES ('$appId','$destinationFile')");
            //insert educational background
            $insertEducational = mysqli_query($con, "INSERT INTO `educational_background`(`applicant_id`, `primary_school`, `primary_address`, `primary_graduated`, 
            `jr_high_school`, `jr_high_address`, `jr_high_graduated`,
            `sr_high_school`, `sr_high_address`, `sr_high_graduated`, `strand_acad_track`,
            `college_university`, `tertiary_address`, `tertiary_graduated`, `course`) 
            VALUES ('$appId','$_POST[primaryName]','$_POST[primaryAddress]','$_POST[primaryEnd]'
                   ,'$_POST[secondaryName]','$_POST[secondaryAddress]','$_POST[secondaryEnd]'
                   ,'$_POST[seniorSchool]','$_POST[seniorAddress]','$_POST[seniorEnd]','$_POST[strand]'
                   ,'$_POST[tertiarySchool]','$_POST[tertiaryAddress]','$_POST[tertiaryEnd]','$_POST[course]')");

            //insert work Experience
            $positions = $_POST['position'];
            $companyNames = $_POST['companyName'];
            $companyAddresses = $_POST['companyAddress'];
            $years = $_POST['year'];
            $aboutExp = $_POST['aboutExp'];
            $numRows = count($positions);
            for ($i = 0; $i < $numRows; $i++) {
                $position = $positions[$i];
                $companyName = $companyNames[$i];
                $companyAddress = $companyAddresses[$i];
                $year = $years[$i];
                $aboutExperience = $aboutExp[$i];
                $insertWorkexperience = mysqli_query($con, "INSERT INTO 
                `work_experience`(`applicant_id`, `company_name`, `position`, `description`, `year`) 
                VALUES ('$appId','$companyName','$position','$aboutExperience','$year')");
                // Do whatever you need to do with the data, for example, insert it into a database
                // Or process it in any other way as per your requirements
            }

            $createAccount=mysqli_query($con, "INSERT INTO `applicant_account`(`id`, `username`, `password`) VALUES ('$appId','{$_POST['username']}','{$_POST['password']}')");
            echo '<script>
            alert("An account with biodata has been successfully created.");
            window.location.href="../../login.php";
            </script>';
        }
    }
}
