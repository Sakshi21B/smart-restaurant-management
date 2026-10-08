<?php
$servername = "localhost:3307";  // use port 3307 (your MySQL port)
$username = "root";
$password = "";  // no password
$database = "restaurant_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}
echo "✅ Connected successfully to MySQL database!";
?>