<?php
include_once 'db.inc.php';

$name = $_POST['name'];
$email = $_POST['email'];
$student_id = $_POST['student_id'];
$year = $_POST['year'];

$sql = "INSERT INTO Members (name, email, student_id, year) VALUES ('$name', '$email', '$student_id', '$year')";
if (mysqli_query($conn, $sql)) {
    echo "New member added successfully.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
