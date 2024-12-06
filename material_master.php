<?php

include 'save.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $material = $_POST['material'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO material_master (material) VALUES ('$material')");
   

    if ($stmt->execute()) {
        echo "New Material created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    parse_str(file_get_contents("php://input"), $_DELETE);
    $material = $_DELETE['material'];

    // Prepare and bind
    $stmt = $conn->prepare("DELETE FROM material_master WHERE material = ?");
    $stmt->bind_param("s", $material);

    if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
            echo "Material deleted successfully";
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
    $result = $conn->query("SELECT material FROM material_master");
    $material = [];

    while ($row = $result->fetch_assoc()) {
        $material[] = $row;
    }

    // Return the materials as JSON
    header('Content-Type: application/json');
    echo json_encode($material);
}
// Close connection
$conn->close();
?>
