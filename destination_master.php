<?php

include 'save.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $destination = $_POST['destination'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO destination_master (destination) VALUES ('$destination')");
   

    if ($stmt->execute()) {
        echo "New Destination created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    parse_str(file_get_contents("php://input"), $_DELETE);
    $destination = $_DELETE['destination'];

    // Prepare and bind
    $stmt = $conn->prepare("DELETE FROM destination_master WHERE destination = ?");
    $stmt->bind_param("s", $destination);

    if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
            echo "Destination deleted successfully";
        } else {
            echo "No destination found with that name";
        }
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

// Handle GET request for fetching all sources
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $result = $conn->query("SELECT destination FROM destination_master");
    $destination = [];

    while ($row = $result->fetch_assoc()) {
        $destination[] = $row;
    }

    // Return the sources as JSON
    header('Content-Type: application/json');
    echo json_encode($destination);
}
// Close connection
$conn->close();
?>
