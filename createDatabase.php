<!doctype html>
<html>
<head>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "Unejammaria123";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE myLibrary";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();

?>
</body>
</html>