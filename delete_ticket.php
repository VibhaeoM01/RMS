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

// Check if ticket ID is provided and exists
if (isset($_GET['id'])) {
    $ticket_id = $_GET['id'];
    
    // Delete the ticket from the database
    $sql = "DELETE FROM reservations WHERE id = $ticket_id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Ticket successfully deleted. <br>";
        echo "<a href='show_all_tickets.php'>Back to Show All Tickets</a>"; // Back button
    } else {
        echo "Error deleting ticket: " . $conn->error;
    }
} else {
    echo "Ticket ID not provided.";
}

// Close connection
$conn->close();
?>
