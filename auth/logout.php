<?php 
session_start();
// Config
include '../config/config.php';
session_unset();
session_destroy();
header("location:".base_url('auth/login.php'));
?>