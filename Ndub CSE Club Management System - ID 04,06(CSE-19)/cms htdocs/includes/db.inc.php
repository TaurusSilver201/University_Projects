<?php
// Database configuration
$dbHost = 'localhost';
$dbUsername = 'root'; // Replace with your MySQL username
$dbPassword = ''; // Replace with your MySQL password
$dbName = 'cms'; // Replace with your database name

// Create a database connection
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
