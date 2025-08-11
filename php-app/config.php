<?php
$servername = "lamp-db.cfm00mm84ak7.ap-south-1.rds.amazonaws.com";
$username = "lamp-db"; // Your RDS username
$password = "Jaswanthan06";
$dbname = "lampdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

