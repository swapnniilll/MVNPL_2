<?php
// Database connection parameters
$servername = "localhost"; // Change as needed
$username = "root"; // Change as needed
$password = ""; // Change as needed
$dbname = "saved"; // Change as needed

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT product FROM product";
$result = $conn->query($sql);

// Prepare options for the dropdown
$options = "";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $options .= '<option value="' . htmlspecialchars($row['product']) . '">' . htmlspecialchars($row['product']) . '</option>';
    }
} else {
    $options .= '<option value="">No delivery orders available</option>';
}

// Close connection
$conn->close();
?>