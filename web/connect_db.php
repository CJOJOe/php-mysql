<?php
$servername = "localhost";
$username = "cj";
$password = "P@ssw0rd";
$dbname = "mybook";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>