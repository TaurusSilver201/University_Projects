<?php
// Include the database connection file
include_once 'db.inc.php';

// Function to fetch all members from the database
function getMembers() {
    global $conn;
    $members = array();
    $sql = "SELECT * FROM Member";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $members[] = $row;
        }
    }
    return $members;
}

// Function to fetch all committees from the database
function getCommittees() {
    global $conn;
    $committees = array();
    $sql = "SELECT * FROM Committee";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $committees[] = $row;
        }
    }
    return $committees;
}

// Function to fetch all events from the database
function getEvents() {
    global $conn;
    $events = array();
    $sql = "SELECT * FROM Events";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $events[] = $row;
        }
    }
    return $events;
}

// Close the database connection
mysqli_close($conn);
?>
