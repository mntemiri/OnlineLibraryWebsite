<?php
$servername = "localhost";
$username = "root";
$password = "Unejammaria123";
$dbname = "myLibrary";
session_start();
$Id = $_SESSION["bookid"];


$bookid = $_POST['bookId'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = " DELETE FROM BookShelves
WHERE ID = $Id  AND BookID = $bookid";

if ($conn->query($sql) == TRUE) {
    header('Location: contorlogout.php');
} else {
    echo "Data doesn't exist or you have entered wrond BOOKiD";
}

$conn->close();
?> 