<?php
session_start();

// Destroy the session to log out
session_unset();
session_destroy();

// Redirect the user to the login page
header("Location: index.php");
exit();
?>
