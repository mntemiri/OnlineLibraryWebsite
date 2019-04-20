
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php



$servername = "localhost";
$username = "root";
$password = "Unejammaria123";
$dbname = "myLibrary";

$userId=$_POST['userid'];
$user = $_POST['user'];
$pass=$_POST['pass'];
$email=$_POST['email'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Details_LogIn
VALUES ('$userId','$user','$pass' , '$email')";

if ($conn->query($sql) === TRUE) {
    header('Location: login.php'); 
} else {
    echo "Something went wrong ! The useID alredy might exist ...";
}

$conn->close();
?> 
</body>
</html>