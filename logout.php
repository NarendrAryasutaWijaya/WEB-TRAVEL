<?php 
 
session_start();
unset($_SESSION['username']);
unset($_SESSION['status_login']);
session_destroy();
 
header("Location: login.php");
 
?>