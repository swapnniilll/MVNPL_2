<?php
// Include connection file
include 'save.php';

// Retrieve form data
$pan_no = $_POST['pan_no'];
$gstin_no = $_POST['gstin_no'];
$in_out = $_POST['in_out'];
$gate_pass_no = $_POST['gate_pass_no'];
$do_no = $_POST['do_no'];
$transporter = $_POST['transporter'];
$truck_no = $_POST['truck_no'];
$product = $_POST['product'];
$gross_weight = $_POST['gross_weight'];
$tare_weight = $_POST['tare_weight'];
$net_weight= $_POST['net_weight'];
$source = $_POST['source'];
$out_date = $_POST['out_date'];
$out_time = $_POST['out_time'];
$in_date = $_POST['in_date'];
$in_time = $_POST['in_time'];
$grade = $_POST['grade'];
$wb = $_POST['wb'];

// SQL query to insert data into the database
$sql = "INSERT INTO detail (pan_no, gstin_no, in_out, gate_pass_no, do_no, transporter, truck_no, product, gross_weight, tare_weight, net_weight, source, out_date, out_time, in_date, in_time, grade, wb)
 VALUES ('$pan_no', '$gstin_no', '$in_out', '$gate_pass_no', '$do_no', '$transporter', '$truck_no', '$product', '$gross_weight', '$tare_weight', '$net_weight', '$source', '$out_date', '$out_time', '$in_date', '$in_time', '$grade', '$wb')";

// Execute SQL query
if (mysqli_query($conn, $sql)) {
    echo "Record inserted successfully";
} else {
    echo "Error inserting record: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>