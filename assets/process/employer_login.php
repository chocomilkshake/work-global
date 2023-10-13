<?php
include('config.php');

// Start the session
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the submitted data
    $username = $_POST['username'];
    $password = $_POST['password'];

    $adminAccount = @mysqli_query($con, "SELECT * FROM `employer_account` WHERE `username` = '$username' AND `status`='Activate' ");
    $checkAccount = mysqli_num_rows($adminAccount);
    $getPassword = mysqli_fetch_array($adminAccount);

    if ($checkAccount > 0) {
        if ($getPassword['password'] == $password) {
            $_SESSION['authEmp'] = session_id();
            $_SESSION['employerId']=$getPassword['id'];
            header("location:../../employer_home.php");
        } else {
            $sample=$getPassword['password'];
            echo '<script>
            alert("Invalid Password.");
            window.location.href="../../login.php";
            </script>';
        }
    } else {
        echo '<script>
            alert("Invalid Login");
            window.location.href="../../login.php";
            </script>';
    }
}
