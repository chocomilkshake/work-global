<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $checkUsername = mysqli_query($con, "SELECT * FROM `applicant_account` WHERE `username`='$_POST[username]'");
    $alert = mysqli_num_rows($checkUsername);
    if ($alert < 1) {
        // Check if a file was uploaded successfully. $_FILES['resume'] is <input type='file' name=''>
        if (isset($_FILES['resume']) && $_FILES['resume']['error'] === UPLOAD_ERR_OK) {
            $uploadedFile = $_FILES['resume']['tmp_name']; // Temporary path of the uploaded file

            $destinationFolder = 'upload/'; // Destination folder where you want to move the file
            
            //use rand to prevent same name
            $destinationFile = $destinationFolder.rand(1000, 9999). $_FILES['resume']['name']; // Destination path for the moved file

            // Check file extension
            $allowedExtensions = array('pdf', 'docx');
            $fileExtension = strtolower(pathinfo($_FILES['resume']['name'], PATHINFO_EXTENSION));
            
            //checking file extension
            if (!in_array($fileExtension, $allowedExtensions)) {
                echo '<script>
            alert("Invalid File.");
            window.location.href="../../applicant_registration.php";
            </script>';
                exit();
            }

            // Check file size
            $maxFileSize = 5 * 1024 * 1024; // 5MB
            if ($_FILES['resume']['size'] > $maxFileSize) {
                echo '<script>
            alert("File size exceeds the limit of 5MB.");
            window.location.href="../../applicant_registration.php";
            </script>';
                exit();
            }

            // Move the uploaded file to the destination folder
            if (move_uploaded_file($uploadedFile, "../../" . $destinationFile)) {
                // File moved successfully can insert code or notif if file moved successfuly
                // You can add further actions or code here if needed
                // Set the desired timezone
                date_default_timezone_set('UTC');

                // Get the current date
                $currentDate = date('Ymd');
                $appId = "APC" . rand(1000, 9999) . $currentDate;

                $gender = $_POST['inlineRadioOptions'];
                $insertApplicantinfo = mysqli_query($con, "INSERT INTO `applicant_information`(`id`, `first_name`, `middle_name`, `last_name`, `suffix`, `birthday`, `gender`, `contact_number`, `email`) VALUES ('$appId','$_POST[firstName]','$_POST[middleName]','$_POST[lastName]','$_POST[suffix]','$_POST[birthdayDate]','$gender','$_POST[phoneNumber]','$_POST[emailAddress]')");
                $insertAccount = mysqli_query($con, "INSERT INTO `applicant_account`(`id`, `username`, `password`) VALUES ('$appId','$_POST[username]','$_POST[password]')");
                $insertAccount = mysqli_query($con, "INSERT INTO `applicant_resume`(`id`, `file_dir`) VALUE('$appId','$destinationFile')");
                echo '<script>
                alert("Account creation successful.");
                window.location.href="../../login.php";
                </script>';
                    exit();
  
            } else {
                echo 'Failed to move file.';
            }
        } else {
            echo 'File upload failed.';
        }
    }
    else{
        echo '<script>
            alert("Username is Already Exist");
            window.location.href="../../applicant_registration.php";
            </script>';
                exit();
    }
}
