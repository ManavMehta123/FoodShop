<?php
$host = "localhost";
$userName = "root";
$password = "";
$dbName = "customer";
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>