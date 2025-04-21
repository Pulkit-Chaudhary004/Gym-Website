<?php
session_start();

// Destroy session variables
session_unset();
session_destroy();

// Redirect to login page
header("Location: admin-login.php");
exit;
?>
