<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
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
            window.location.href="../../applicant_incode.php";
            </script>';
                exit();
            }

            // Check file size
            $maxFileSize = 5 * 1024 * 1024; // 5MB
            if ($_FILES['resume']['size'] > $maxFileSize) {
                echo '<script>
            alert("File size exceeds the limit of 5MB.");
            window.location.href="../../applicant_incode.php";
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
                $insertApplicantinfo = mysqli_query($con, "INSERT INTO `incoded_applicant`(`id`, `first_name`, `middle_name`, `last_name`, `suffix`, `birthday`, `gender`, `contact_number`, `email_address`, `position`, `employer`) VALUES ('$appId','$_POST[firstName]','$_POST[middleName]','$_POST[lastName]','$_POST[suffix]','$_POST[birthdayDate]','$gender','$_POST[phoneNumber]','$_POST[emailAddress]','$_POST[position]','$_POST[employer]')");
                $insertAccount = mysqli_query($con, "INSERT INTO `applicant_resume`(`id`, `file_dir`) VALUE('$appId','$destinationFile')");
                echo '<script>
                alert("Applicant incoded successful.");
                window.location.href="../../applicant_incode.php";
                </script>';
                    exit();
  
            } else {
                echo 'Failed to move file.';
            }
        } else {
            echo 'File upload failed.';
        }

}
