<?php

include 'save.php';

$in_out = $_POST['in_out'];
$do_no = $_POST['do_no'];
$do_date = $_POST['do_date'];
$material = $_POST['material'];
$grade = $_POST['grade'];
$qty = $_POST['qty'];
$source = $_POST['source'];
$party = $_POST['party'];
$do_valid_upto = $_POST['do_valid_upto'];
$select_site = $_POST['select_site'];

$stmt = $conn->prepare("INSERT INTO do_master (in_out, do_no, do_date, material, grade, qty, source, party, do_valid_upto, select_site) 
VALUES ('$in_out', '$do_no', '$do_date', '$material', '$grade', '$qty', '$source', '$party', '$do_valid_upto', '$select_site')");


if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}


$stmt->close();
$conn->close();
?>