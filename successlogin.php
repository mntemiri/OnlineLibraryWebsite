<?php
$username =$_POST['user'];
$password=$_POST['pass'];
$userID = $_POST['userid'];

$servername = "localhost";
$user= "root";
$pass = "Unejammaria123";
$dbname = "myLibrary";

session_start();
$_SESSION["bookid"]=$_POST[userid];



$con = mysqli_connect($servername, $user , $pass , $dbname);
$sql  ="select * from Details_LogIn where username = '$username' and password = '$password'  and userid = '$userID'";
$result = mysqli_query($con , $sql);
if ($row = mysqli_fetch_assoc($result)) {
    header('Location: libraryselect.php'); 
}
else {
    header('Location: login.php'); 
}
?>





