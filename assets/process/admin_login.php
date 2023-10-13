<?php
include('config.php');

// Start the session
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the submitted data
    $username = $_POST['username'];
    $password = $_POST['password'];

    $adminAccount = @mysqli_query($con, "SELECT * FROM `admin_account` WHERE `username` = '$username'");
    $checkAccount = mysqli_num_rows($adminAccount);
    $getPassword = mysqli_fetch_array($adminAccount);

    if ($checkAccount > 0) {
        if ($getPassword['password'] == $password) {
            $_SESSION['authadmin'] = session_id();
            $_SESSION['adminId']=$getPassword['id'];
            header("location:../../.php");
        } else {
            $sample=$getPassword['password'];
            echo '<script>
            alert("Invalid Password.");
            window.location.href="../../admin/index.php";
            </script>';
        }
    } else {
        echo '<script>
            alert("Invalid Login");
            window.location.href="../../admin/index.php";
            </script>';
    }
}
