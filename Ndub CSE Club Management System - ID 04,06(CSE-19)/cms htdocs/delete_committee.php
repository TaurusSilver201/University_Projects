<?php
include_once 'db.inc.php';

$id = $_POST['id'];

$sql = "DELETE FROM Committees WHERE id='$id'";
if (mysqli_query($conn, $sql)) {
    echo "Committee deleted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
