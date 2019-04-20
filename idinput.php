<!DOCTYPE html>
<html>
<head>
<title>login Page</title>
	<link rel= "stylesheet" type="text/css" href="style.css">
<style>
body, html {
  height: 100%;
  margin: 0;
}

/**
Make the background image take the full background.
*/
.backgroundImage {
  background-image: url("actualbg.jpg");
  height: 100%; 
  background-position: center;
  background-size: cover;
}
</style>
</head>
<body>

<div class="backgroundImage"><p style="color:rgb(240, 65, 65) ; text-align:center; font-family:Bradley Hand ITC; font-size:160%;"><br><br><br><br><br><br> Please fill the following <br>fields with your login details!<br> LIBRARY LOGIN<br><br></p>
<div id = "overalllogin">
		<form action= "viewBooks.php" method = "POST">
			<p style = "color:WHITE">
			<label>bookId:</label>
			<input type= "number" id = "bookid" name = "bookid"/>
			</p>
		</form>
		</div>
</div>
</body>
</html>
