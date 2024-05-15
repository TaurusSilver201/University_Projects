<?php
include_once 'db.inc.php';

$event_name = $_POST['event_name'];
$date = $_POST['date'];

$sql = "INSERT INTO Events (event_name, date) VALUES ('$event_name', '$date')";
if (mysqli_query($conn, $sql)) {
    echo "New event added successfully.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
