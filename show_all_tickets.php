<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show All Tickets</title>
    <link rel="stylesheet" href="ticket_list.css"> <!-- Link to your CSS file -->
</head>
<body>
    <div class="container">
        <h1>Show All Tickets</h1>
        <div class="ticket-table">
            <table>
                <tr>
                    <th>Ticket ID</th>
                    <th>Train Number</th>
                    <th>Destination</th>
                    <th>Source</th>
                    <th>Date</th>
                    <th>Number of Passengers</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Aadhar Number</th>
                    <th>Action</th>
                </tr>
                <?php
                // Connect to your database
                $servername = "127.0.0.1:4306";
                $username = "root";
                $password = ""; // Enter your database password here
                $database = "project";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $database);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Retrieve all tickets from the database
                $sql = "SELECT * FROM reservations";
                $result = $conn->query($sql);

                // Display tickets in a table
                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["train_number"] . "</td>";
                        echo "<td>" . $row["destination"] . "</td>";
                        echo "<td>" . $row["source"] . "</td>";
                        echo "<td>" . $row["date"] . "</td>";
                        echo "<td>" . $row["passenger_count"] . "</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["age"] . "</td>";
                        echo "<td>" . $row["aadhar"] . "</td>";
                        echo "<td><a href='delete_ticket.php?id=" . $row["id"] . "'>Delete</a> | <a href='update_ticket.php?id=" . $row["id"] . "'>Update</a></td>"; // Links to delete and update ticket scripts
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='10'>No tickets found.</td></tr>";
                }

                // Close connection
                $conn->close();
                ?>
            </table>
        </div>
    </div>
</body>
</html>
