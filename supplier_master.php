<?php
$servername = "localhost"; // Change if your database server is different
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "saved"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle POST request to save supplier data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $mobile = $_POST['mobile'];

    $stmt = $conn->prepare("INSERT INTO supplier_master (name, address, city, phone, mobile) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $address, $city, $phone, $mobile);

    if ($stmt->execute()) {
        echo "Supplier saved successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
    exit; // Stop further execution
}

// Handle GET request to fetch supplier data
$result = $conn->query("SELECT * FROM supplier_master");
$suppliers = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $suppliers[] = $row;
    }
}

$conn->close();
header('Content-Type: application/json');
echo json_encode($suppliers);
?>