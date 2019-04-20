<!DOCTYPE html>
<html>
<head>
<title>ViewButton</title>
<style>
table, th, td {
  border: 1px solid black;
}
.right {

position: fixed; /* or position: absolute; */
top: 0;
right: 0;

}
.left {

position: fixed; /* or position: absolute; */
top: 0;
left: 0;

}
</style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "Unejammaria123";
$dbname = "myLibrary";

session_start();


$book = $_SESSION["bookid"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
echo "<p style= font-size:200% , text-align:center>  Hello and welcome to your library  <br></p>"; 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM BookShelves 
INNER JOIN Details_LogIn 
ON BookShelves.ID = Details_LogIn.userid 
WHERE BookShelves.ID = $book";

$result = $conn->query($sql);
echo "<table style= width:100% >";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>username</th>";
        echo "<th>Title</th>";
        echo " <th>Author</th>";
        echo " <th>Genre</th>";
        echo " <th>PublicationYear</th>";


        if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<table style= width:100% >";
        echo "</tr>";
        echo "<tr>";
        echo "<td>  $row[BookID]  </td>";
        echo " <td>   $row[username] </td>";
        echo "<td>  $row[Title] </td>";
        echo " <td>  $row[Author] </td>";
        echo "<td>  $row[Genre] </td>";
        echo "<td>  $row[ProductionYear] </td>";
        echo "</tr>";
        echo "</table>";
    }        
    
} else {
    
    echo "You dont have any books in your library";
}

$conn->close();
?> 
<div class="left">
      <form action= "piechart.php" method = "GET" >
            <p>
            <button onclick="window.location.href = 'viewBooks.php';">VIEW MY LIBRARY AS PIECHART</button>
			</p>
      </form>
  </div>
<div class="right">
    <form action= "frontpage.php" method = "POST">
		<p>
        <button onclick="window.location.href = 'frontpage.php';">LOG OUT</button>
			</p>
  </div>
</body>
</html>