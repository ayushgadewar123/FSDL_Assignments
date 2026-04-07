<?php
include 'db.php';

// Get values + remove extra spaces
$name = trim($_POST['employee_name']);
$id = trim($_POST['employee_id']);
$dept = trim($_POST['department_name']);
$phone = trim($_POST['phone_number']);
$date = $_POST['joining_date'];

// ✅ Empty validation
if ($name == "" || $id == "" || $dept == "" || $phone == "" || $date == "") {
    echo "<div class='alert alert-danger'>All fields are required!</div>";
    exit();
}

// ✅ Phone validation
if (!preg_match("/^[0-9]{10}$/", $phone)) {
    echo "<div class='alert alert-danger'>Phone must be exactly 10 digits!</div>";
    exit();
}

// ✅ Insert query
$sql = "INSERT INTO employees 
(employee_name, employee_id, department_name, phone_number, joining_date)
VALUES ('$name','$id','$dept','$phone','$date')";

if ($conn->query($sql) === TRUE) {
    echo "<div class='alert alert-success'>Employee inserted successfully!</div>";
} else {
    echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
}
?>