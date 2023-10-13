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
            //Applicant system Id number 
            $gender = $_POST['inlineRadioOptions'];
            $updateApplicant=mysqli_query($con,"UPDATE `incoded_applicant` SET 
            `first_name`='{$_POST['firstName']}',
            `middle_name`='{$_POST['middleName']}',
            `last_name`='{$_POST['lastName']}',
            `suffix`='{$_POST['suffix']}',
            `birthday`='{$_POST['birthdayDate']}',
            `gender`='$gender',
            `email_address`='{$_POST['emailAddress']}',
            `contact_number`='{$_POST['phoneNumber']}',
            `position`='{$_POST['position']}',
            `employer`='{$_POST['employer']}' 
            WHERE id='{$_POST['applicantId']}'");
            
            echo '<script>
            alert("Applicant Profile Updated");
            window.location.href="../../edit_encode.php";
            </script>';
                exit();

        } else {
            echo 'Failed to move file.';
        }
    } else {
        $gender = $_POST['inlineRadioOptions'];
        $updateApplicant=mysqli_query($con,"UPDATE `incoded_applicant` SET 
            `first_name`='{$_POST['firstName']}',
            `middle_name`='{$_POST['middleName']}',
            `last_name`='{$_POST['lastName']}',
            `suffix`='{$_POST['suffix']}',
            `birthday`='{$_POST['birthdayDate']}',
            `gender`='$gender',
            `email_address`='{$_POST['emailAddress']}',
            `contact_number`='{$_POST['phoneNumber']}',
            `position`='{$_POST['position']}',
            `employer`='{$_POST['employer']}' 
            WHERE id='{$_POST['applicantId']}'");
            
            echo '<script>
            alert("Applicant Profile Updated");
            window.location.href="../../edit_encode.php";
            </script>';
                exit();
    }

}

?>