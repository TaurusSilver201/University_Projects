<?php
include_once 'db.inc.php';

$committee_name = $_POST['committee_name'];

$sql = "INSERT INTO Committees (committee_name) VALUES ('$committee_name')";
if (mysqli_query($conn, $sql)) {
    echo "New committee added successfully.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
