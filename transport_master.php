<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "saved"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle POST request to save transporter data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get POST data
    $transporterName = $conn->real_escape_string($_POST['transporterName']);
    $transporterAddress = $conn->real_escape_string($_POST['transporterAddress']);
    $transporterEmail = $conn->real_escape_string($_POST['transporterEmail']);
    $transporterContactNo = $conn->real_escape_string($_POST['transporterContactNo']);
    $transporterContactPerson = $conn->real_escape_string($_POST['transporterContactPerson']);
    $transporterGSTNo = $conn->real_escape_string($_POST['transporterGSTNo']);
    $transporterPANNo = $conn->real_escape_string($_POST['transporterPANNo']);
    $siteName = $conn->real_escape_string($_POST['siteName']);

    // Construct the SQL query
    $sql = "INSERT INTO transport_master (transporterName, transporterAddress, transporterEmail, transporterContactNo, transporterContactPerson, transporterGSTNo, transporterPANNo, siteName) 
            VALUES ('$transporterName', '$transporterAddress', '$transporterEmail', '$transporterContactNo', '$transporterContactPerson', '$transporterGSTNo', '$transporterPANNo', '$siteName')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Transporter saved successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
    exit; // Stop further execution
}

// Handle GET request to fetch transporter data
$result = $conn->query("SELECT * FROM transport_master");
$transporters = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $transporters[] = $row;
    }
}

$conn->close();
header('Content-Type: application/json');
echo json_encode($transporters);
?>