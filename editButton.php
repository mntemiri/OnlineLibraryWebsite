<!DOCTYPE html>
<html>
<head>
<title>EditButton</title>
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
}

* {
  box-sizing: border-box;
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

.background-image {
 
  background-image: url("forest.jpg");
  

  height: 100%; 
  

  background-size: cover;
}


.background-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  border: 4px solid white;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 80%;
  text-align: center;
}
</style>
</head>
<body>

<div class="background-image"></div>

<div class="background-text">
  <h1>My library</h1>
  <h2 style="font-size:30px , font-family:Georgia">ENTER THE ID OF THE BOOK YOU WANT TO EDIT AND UPDATE </h2>
<div id = "bookstuff">
		<form action= "infoeditBooks.php" method = "POST">
			<p style = "color:WHITE">
                <label>BOOKiD:</label>
                <input type= "number" id = "bookId" name = "bookId"/>
                <a href="#" title="Check the BOOKiD by clicking the view button"><img src="blue_question_mark.png" height="13px"/></a>
			
			</p>
                <p style = "color:WHITE">
                <input type= "submit" id = "btn" name = "submit"/>
			</p>

		</form>
    </div>
    <div class="left">
      <form action= "piechart.php" method = "GET" >
            <p>
            <button onclick="window.location.href = 'viewBooks.php';">VIEW MY LIBRARY AS PIECHART</button>
			</p>
      </form>
  </div>
    <div class="right">
      <form action= "viewBooks.php" method = "GET" >
            <p>
            <button onclick="window.location.href = 'viewBooks.php';">VIEW MY LIBRARY</button>
			</p>
      </form>
  </div>
</div>
<div class="right">
    <form action= "frontpage.php" method = "POST">
		<p>
        <button onclick="window.location.href = 'frontpage.php';">LOG OUT</button>
			</p>
  </div>
</body>
</html>
