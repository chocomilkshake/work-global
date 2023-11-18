<?php
require '../../assets/src/PHPMailer.php';
require '../../assets/src/SMTP.php';
require '../../assets/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

include('config.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if($_SESSION['authApp'] == session_id()){ 
    $getjobinfo = mysqli_query($con, "SELECT * FROM `job_offer` WHERE `job_id`='{$_POST['jobId']}'");
    $value = mysqli_fetch_array($getjobinfo);
    $getemployer = mysqli_query($con, "SELECT * FROM `employer_information` WHERE `id`='{$value['employer_id']}'");
    $valueInfo = mysqli_fetch_array($getemployer);
    $getAppinfo = mysqli_query($con, "SELECT * FROM `applicant_information` WHERE `id`='{$_SESSION['appId']}'");
    $valueApplicant = mysqli_fetch_array($getAppinfo);
    $currentDate = date('m - d - Y');
    $mysqlDateFormat = $currentDate;
    $insertApplication = mysqli_query($con, "INSERT INTO `application`(`applicant_id`, `job_id`, `employer_id`, `date`) VALUES ('{$_SESSION['appId']}','{$value['job_id']}','{$value['employer_id']}','$mysqlDateFormat')");

    /**** Sending Email********************************************************************/


    $mail = new PHPMailer;

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP server host
    $mail->Port = 587; // Replace with the appropriate port number (e.g., 587 for TLS, 465 for SSL)
    $mail->SMTPAuth = true;
    $mail->Username = 'pyt635401@gmail.com'; // Replace with your SMTP username
    $mail->Password = 'lcqlrezwtmsrbboc'; // Replace with your SMTP password
    $mail->SMTPSecure = 'tls'; // For TLS encryption, use 'tls'; for SSL encryption, use 'ssl'
    $mail->isHTML(true);
    $mail->setFrom('from@example.com', 'Your Name'); // Replace with your email and name
    $mail->addAddress($valueApplicant['email'], $valueApplicant['first_name'] . ' ' . $valueApplicant['last_name']); // Replace with recipient email and name

    $mail->Subject = ' Thank You for Applying via Work Global.ph';
    // Dynamic variables
    $first_name = $valueApplicant['first_name'];
    $last_name = $valueApplicant['last_name'];
    $position = $value['position'];
    $company_name = $valueInfo['company_name'];

    // The email body with HTML formatting
    $mail->Body = '
    <!DOCTYPE html>
    <html>
    <head>
        <title>Thank You for Applying</title>
    </head>
    <body>
        <p>Dear ' . $first_name . ' ' . $last_name . ',</p>
    
        <p>I hope this email finds you well. I am writing to extend my heartfelt thanks for applying for ' . $position . ' at ' . $company_name . ' through our Work Global.ph.</p>
        
        <p>We greatly appreciate your interest in joining our team and taking the time to submit your application online. Your decision to apply through our website showcases your enthusiasm and adaptability, qualities that resonate with our company values.</p>
        
        <p>Your application has been received, and our hiring team is currently reviewing all the submissions thoroughly. We understand that waiting for a response can be an anxious time, but please rest assured that your qualifications will be carefully considered.</p>
        
        <p>' . $company_name . ' prides itself on fostering a diverse and inclusive work environment that encourages innovation and collaboration. Your application has piqued our interest, and we look forward to learning more about how your skills and experience align with our current opportunities.</p>
        
        <p>Should your qualifications match our requirements, we will be in touch with you to discuss the next steps in the selection process. In the meantime, if you have any questions or would like to inquire about the status of your application, feel free to contact us at +63 999 9999 999.</p>
        
        <p>Once again, thank you for choosing to apply through our Work Global.ph. We appreciate your interest in ' . $company_name . ', and we genuinely value the potential contribution you could make to our team.</p>
        
        <p>Wishing you the best of luck in your job search and career aspirations.</p>
        
        <p>Warm regards,</p>
        <p>Work Global.ph</p>
    </body>
    </html>';

    // If you want to send HTML email, use the following line instead of the above line:
    // $mail->isHTML(true);
    // $mail->Body = '<h1>Hello</h1><p>This is an HTML email.</p>';

    // Add attachments (if needed)
    // $mail->addAttachment('/path/to/file.pdf', 'Document.pdf');

    // Send the email
    if (!$mail->send()) {
    } else {
    }
    // You can use $mail->msgHTML() to send HTML-formatted emails.

    // Optional: If you want to send attachments, use $mail->addAttachment()
    // $mail->addAttachment('path_to_attachment_file.pdf');

    // Optional: If you want to send inline/embedded images in the email, use $mail->addEmbeddedImage()
    // $mail->addEmbeddedImage('path_to_image.jpg', 'img_cid', 'image.jpg');

    // Optional: If you need to add CC, BCC, or reply-to addresses
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');
    // $mail->addReplyTo('replyto@example.com');
    /*************************************************************************************/

    echo '<script>
    alert("Application Sent");
    window.location.href="../../index.php";
    </script>';
}else{
    header('location:../../login.php');
}


}

 