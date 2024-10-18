<?php
// Database connection settings
$host = 'localhost'; 
$username = 'root'; // Default username for XAMPP MySQL
$password = ''; // Default password for XAMPP MySQL is empty
$database = 'urbanplan'; // Replace 'your_database_name' with the name of your database

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch resources from the database
$sql = "SELECT * FROM resources"; // Assuming you have a table named 'resources'
$result = $conn->query($sql);

// Output the results as JSON
$resources = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $resources[] = $row;
    }
}
echo json_encode($resources);

// Close connection
$conn->close();
?>
