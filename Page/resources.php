<?php
// Database connection settings
$host = 'localhost'; // MySQL server
$username = 'root'; // MySQL username (default is 'root' for XAMPP)
$password = ''; // MySQL password (default is empty for XAMPP)
$database = 'urban_planning_db'; // Your MySQL database name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch resources from the database
$sql = "SELECT * FROM resources";
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
