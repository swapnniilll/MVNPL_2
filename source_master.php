<?php

include 'save.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $source = $_POST['source'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO source_master (source) VALUES ('$source')");
   

    if ($stmt->execute()) {
        echo "New Source created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    parse_str(file_get_contents("php://input"), $_DELETE);
    $source = $_DELETE['source'];

    // Prepare and bind
    $stmt = $conn->prepare("DELETE FROM source_master WHERE source = ?");
    $stmt->bind_param("s", $source);

    if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
            echo "Source deleted successfully";
        } else {
            echo "No source found with that name";
        }
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

// Handle GET request for fetching all sources
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $result = $conn->query("SELECT source FROM source_master");
    $source = [];

    while ($row = $result->fetch_assoc()) {
        $source[] = $row;
    }

    // Return the sources as JSON
    header('Content-Type: application/json');
    echo json_encode($source);
}
// Close connection
$conn->close();
?>
