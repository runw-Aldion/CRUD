<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "crud_db";

// connect to MySQL
$conn = new mysqli($servername, $username, $password, $database);

// check if connected
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
