<?php session_start(); /* Starts the session */
session_destroy(); /* Destroy started session */
header("location:landing.html");  /* Redirect to login page */
exit;
?>