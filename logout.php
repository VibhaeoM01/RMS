<?php
session_start();
session_destroy(); // Destroy the session data

// Redirect the user to the login page or any other appropriate page
header("Location: index.php"); // Change 'login.php' to your actual login page
exit;
?>
