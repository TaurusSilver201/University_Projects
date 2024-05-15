<?php
include_once 'db.inc.php';

$id = $_POST['id'];

$sql = "DELETE FROM Events WHERE id='$id'";
if (mysqli_query($conn, $sql)) {
    echo "Event deleted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
