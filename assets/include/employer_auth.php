<?php
session_start();
if($_SESSION['authEmp'] != session_id()){
    header('location:login.php');
}

?>