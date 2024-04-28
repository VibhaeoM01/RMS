<?php
session_start();
$servername = "localhost";
$port = 3307; // Adjust the port as needed
$username = "root";
$password = "";
$database= "final";
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check if the admin login form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the provided username and password match the default admin credentials
    if ($username === "Abhishek" && $password === "12345678") {
        // Authentication successful, set admin session
        $_SESSION['admin'] = true;
        header("Location: admin_panel.php"); // Redirect to admin panel
        exit();
    } else {
        // Authentication failed, redirect back to admin login page with error message
        header("Location: admin_login.html?error=1");
        exit();
    }
}
?>
