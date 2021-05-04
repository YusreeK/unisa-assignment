<?php
$servername = "localhost";
$username = "project";
$password = "wawasan";
$dbname = "Comp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Competition (
Competition VARCHAR(30) NOT NULL,
Actions VARCHAR(30) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Competition created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 