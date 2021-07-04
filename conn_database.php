<?php
$servername = "localhost:3307";
$user = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $user, $password,'login1');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>



