<?php
session_start();
session_destroy();
session_unset();
// unset($_SESSION['oturum']);
unset($_SESSION['user_id']);
unset($_SESSION['logged_in']);
header("Location:login.php");
?>