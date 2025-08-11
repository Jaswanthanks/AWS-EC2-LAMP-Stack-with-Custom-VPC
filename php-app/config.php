<?php
$servername = "YOUR_RDS_ENDPOINT";
$username = "admin"; // Your RDS username
$password = "YOUR_PASSWORD";
$dbname = "lampdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
