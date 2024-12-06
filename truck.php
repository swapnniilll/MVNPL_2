<?php
// store_truck_data.php

// Database connection parameters
$host = 'localhost'; // Your database host
$db = 'saved'; // Your database name
$user = 'root'; // Your database username
$pass = ''; // Your database password

// Create a connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the form data
$truckNo = $_POST['truckNo'];
$fromDate = $_POST['fromDate'];
$toDate = $_POST['toDate'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO truck (truckNo, fromDate, toDate) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $truckNo, $fromDate, $toDate);

// Execute the statement
if ($stmt->execute()) {
    echo "Data stored successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>