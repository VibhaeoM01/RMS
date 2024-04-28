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
    
    // Fetch ticket information from the database
    $sql = "SELECT * FROM reservations WHERE id = $ticket_id";
    $result = $conn->query($sql);
    
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Update Ticket</title>
            <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
        </head>
        <body>
            <div class="container">
                <h1>Update Ticket</h1>
                <form action="update_ticket_process.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <label for="train_number">Train Number:</label>
                    <input type="text" name="train_number" value="<?php echo $row['train_number']; ?>"><br>
                    <label for="destination">Destination:</label>
                    <input type="text" name="destination" value="<?php echo $row['destination']; ?>"><br>
                    <label for="source">Source:</label>
                    <input type="text" name="source" value="<?php echo $row['source']; ?>"><br>
                    <label for="date">Date:</label>
                    <input type="date" name="date" value="<?php echo $row['date']; ?>"><br>
                    <label for="passenger_count">Number of Passengers:</label>
                    <input type="number" name="passenger_count" value="<?php echo $row['passenger_count']; ?>"><br>
                    <label for="name">Name:</label>
                    <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
                    <label for="age">Age:</label>
                    <input type="number" name="age" value="<?php echo $row['age']; ?>"><br>
                    <label for="aadhar">Aadhar Number:</label>
                    <input type="text" name="aadhar" value="<?php echo $row['aadhar']; ?>"><br>
                    <button type="submit">Update Ticket</button>
                </form>
            </div>
        </body>
        </html>
        <?php
    } else {
        echo "Ticket not found.";
    }
} else {
    echo "Ticket ID not provided.";
}

// Close connection
$conn->close();
?>
