<?php
// Unset the "remember_me" cookie if it exists
    setcookie('mobile', '', time() -86400);
    setcookie('password', '', time() -86400);


// Redirect to the login page or any other appropriate page
header('Location: login.php');
?>