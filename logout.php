<?php
// Start session
session_start();

// free all session variables
//unset($_SESSION['user_name']);
session_unset();
// destroy the session
session_destroy();

if(!isset($_SESSION['user_name'])){
    echo '<p align="center" style="color:green; font-size:36px"> You have logged out! </p>';
    header("refresh:5, url=./formlogin_index.php");
    die();
}


?>