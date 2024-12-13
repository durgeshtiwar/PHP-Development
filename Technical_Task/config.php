<?php
// Database connection 
$servername = "localhost";
$username = "root";
$password = "Durgesh@1419";
$dbname = "technical_task";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}