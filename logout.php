<?php
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect the user to the login page or any other page as needed
header("Location: sign-in.php"); // Replace "login.php" with the appropriate page
exit;
?>