<?php
include('config.php'); // Assuming this file contains your database connection settings

if (isset($_POST['username'])) {
  $username = mysqli_real_escape_string($con, $_POST['username']);
  
  $query = "SELECT * FROM `applicant_account` WHERE `username`='$username'";
  $result = mysqli_query($con, $query);

  if (mysqli_num_rows($result) > 0) {
    echo "exists"; // Username already exists in the database
  } else {
    echo "available"; // Username is available
  }
}