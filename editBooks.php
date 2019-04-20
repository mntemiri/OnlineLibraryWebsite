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
$bookId= $_SESSION['reqId'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE BookShelves SET Title= '$title' , Author='$author' , Genre= '$genre', ProductionYear= $yop
WHERE ID = $Id  AND BookID = $bookId"; 

if ($conn->query($sql) === TRUE) {
    header('Location: contorlogout.php');
} else {
    echo "OOOPS something went wrong . Try again the BOOKiD.";
}

$conn->close();
?> 