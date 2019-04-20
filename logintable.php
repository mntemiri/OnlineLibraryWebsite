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
$sql = "CREATE TABLE Details_LogIn (
userid INTEGER NOT NULL PRIMARY KEY, 
username  VARCHAR(30) NOT NULL ,
password   VARCHAR(30) NOT NULL,
email varchar(100) not null

)";

if ($conn->query($sql) === TRUE) {
    echo "Details_LogIn created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 
</body>
</html>
