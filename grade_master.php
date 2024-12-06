<?php

include 'save.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $grade = $_POST['grade'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO grade_master (grade) VALUES ('$grade')");
   

    if ($stmt->execute()) {
        echo "New Grade created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    parse_str(file_get_contents("php://input"), $_DELETE);
    $grade = $_DELETE['grade'];

    // Prepare and bind
    $stmt = $conn->prepare("DELETE FROM grade_master WHERE grade = ?");
    $stmt->bind_param("s", $grade);

    if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
            echo "Grade deleted successfully";
        } else {
            echo "No grade found with that name";
        }
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

// Handle GET request for fetching all sources
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $result = $conn->query("SELECT grade FROM grade_master");
    $grade = [];

    while ($row = $result->fetch_assoc()) {
        $grade[] = $row;
    }

    // Return the materials as JSON
    header('Content-Type: application/json');
    echo json_encode($grade);
}
// Close connection
$conn->close();
?>
