<?php
$servername = "mysql";
$username = "cj";
$password = "P@ssw0rd";
$dbname = "mybook";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if (!$conn->set_charset("utf8mb4")) {
  die("Error setting character set: " . $conn->error);
}  
?>