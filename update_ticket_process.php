<?php
// Connect to your database
session_start();
$servername = "localhost";
$port = 3307; // Adjust the port as needed
$username = "root";
$password = "";
$database= "final";
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $train_number = $_POST['train_number'];
    $destination = $_POST['destination'];
    $source = $_POST['source'];
    $date = $_POST['date'];
    $passenger_count = $_POST['passenger_count'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $aadhar = $_POST['aadhar'];

    // Update ticket information in the database
    $sql = "UPDATE reservations SET train_number='$train_number', destination='$destination', source='$source', date='$date', passenger_count='$passenger_count', name='$name', age='$age', aadhar='$aadhar' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Ticket updated successfully.<br>";
        echo "<a href='show_all_tickets.php'>Back to Show All Tickets</a>";
    } else {
        echo "Error updating ticket: " . $conn->error;
    }
}

// Close connection
$conn->close();
?>
