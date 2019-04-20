<!doctype html>
<html>
<head>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "Unejammaria123";
$dbname = "myLibrary";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE BookShelves (
ID INTEGER NOT NULL ,
BookID INTEGER NOT NULL PRIMARY KEY,
Title VARCHAR(30) NOT NULL ,
Author VARCHAR(30) NOT NULL,
Genre Varchar (30) NOT NULL,
ProductionYear INTEGER 
)";

if ($conn->query($sql) === TRUE) {
    echo "Table BookShelves created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 
</body>
</html>
