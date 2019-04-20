<!DOCTYPE html>
<html>
<head>
<title>FrontPage</title>
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

.background-image {
 
  background-image: url("flyer-image.jpg");
  

  filter: blur(8px);
  -webkit-filter: blur(8px);
  

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
		<form action= "login.php" method = "POST">
		<p>
        <button onclick="window.location.href = 'login.php';">LOG IN</button>
			</p>

		</form>
		
		<form action= "registerpage.php" method = "POST">
		<p>
        <button onclick="window.location.href = 'login.php';">REGISTER</button>
			</p>

		</form>
</div>
</body>
</html>
