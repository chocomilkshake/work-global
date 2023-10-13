<?php
session_start();
if($_SESSION['authAdmin'] != session_id()){
    header('location:index.php');
}

?>