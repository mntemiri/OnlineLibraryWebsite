<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
  <h2 style="font-size:30px , font-family:Georgia">If you are new register now  </h2>
<div id = "overall">
		<form action= "addButton.php" method = "POST" >
            <p>
            <button onclick="window.location.href = 'addButton.php';">ADD</button>
			</p>
      </form>
      <form action= "deleteButton.php" method = "POST" >
            <p>
            <button onclick="window.location.href = 'deleteButton.php';">DELETE</button>
			</p>
      </form>
      <form action= "editButton.php" method = "POST" >
            <p>
            <button onclick="window.location.href = 'editButton.php';">EDIT</button>
			</p>
    </form>
    <form action= "viewBooks.php" method = "GET" >
            <p>
            <button onclick="window.location.href = 'viewBooks.php';">VIEW</button>
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
