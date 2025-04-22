<?php
$mysqli = new mysqli("localhost", "root", "", "student_db");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Get values from POST (with fallback)
$name     = $_POST['name'] ?? '';
$reg_no   = $_POST['reg_no'] ?? '';
$roll_no  = $_POST['roll_no'] ?? '';
$branch   = $_POST['branch'] ?? '';
$gender   = $_POST['gender'] ?? '';
$semester = $_POST['semester'] ?? '';
$mobileno = $_POST['mobileno'] ?? '';
$email    = $_POST['email'] ?? '';
$query    = $_POST['query'] ?? '';
// Insert query--> here students is table name
$sql = "INSERT INTO students (name, reg_no, roll_no, branch, gender, semester,mobileno, email,query)
        VALUES ('$name', '$reg_no', '$roll_no', '$branch', '$gender', '$semester','$mobileno', '$email','$query')";

if ($mysqli->query($sql)) {
    echo "Student data inserted successfully!";
} else {
    echo "Error: " . $mysqli->error;
}
?>
