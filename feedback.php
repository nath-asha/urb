<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Process the data (you can save it to a database, send it via email, etc.)
    // For this example, let's just display the submitted data
    echo "<h2>Feedback Submitted</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Message: $message</p>";

    // Database connection details
    $host = 'localhost'; 
    $username = 'root'; 
    $password = ''; 
    $database = 'urbanplan';

    // Create connection
    $con = mysqli_connect($host, $username, $password, $database);
    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Insert form data into database
    $sql = "INSERT INTO feedback (fname, email, message) VALUES ('$name', '$email', '$message')";
    if (mysqli_query($con, $sql)) {
        echo "Message has been sent successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    // Close connection
    mysqli_close($con);
} else {
    // If the form is not submitted, redirect back to the form page
    header("Location: feedbackk.html");
    exit;
}
?>
