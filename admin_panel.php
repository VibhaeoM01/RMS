<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
     <!-- Link to your CSS file -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        
        .container {
            width: 80%;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }
        
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        
        .admin-options {
            margin-top: 30px;
        }
        
        .admin-options h2 {
            color: #666;
            margin-bottom: 20px;
        }
        
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Admin Panel</h1>
        <div class="admin-options">
            <h2>Welcome Abhishek :)</h2>
            <!-- Link/button to show all tickets for updating -->
            <a href="show_all_tickets.php" class="button">Show All Tickets</a>
        </div>
    </div>
</body>
</html>
