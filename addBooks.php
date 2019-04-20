<?php
$servername = "localhost";
$username = "root";
$password = "Unejammaria123";
$dbname = "myLibrary";


session_start();
$Id = $_SESSION["bookid"];
$title = $_POST['title'];
$author=$_POST['author'];
$genre=$_POST['genre'];
$yop=$_POST['yop'];
$bookId= $_POST['bookId'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO BookShelves 
VALUES ('$Id','$bookId', '$title','$author','$genre', '$yop')"; 

if ($conn->query($sql) === TRUE) {
    header('Location: contorlogout.php');
} else {
    echo "Try another BOOKiD";
}

$conn->close();
?> 