<!DOCTYPE html>
<html>
<head>
<title>Registration Page </title>
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: sans-serif;
}

* {
  box-sizing: border-box;
}

.background-image {
  /* The image used */
  background-image: url("flyer-image.jpg");
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-size: cover;
}

/* Position text in the middle of the page/image */
.background-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  border: 3px solid white;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 80%;
  padding: 20px;
  text-align: center;
}
</style>
</head>
<body>

<div class="background-image"></div>

<div class="background-text">
  <h2>My library</h2>
  <h1>Welcome</h1>
  <h3>Put your details to register</h3>
<div id = "overalllogin">
		<form action= "insertdata.php" method = "POST">
			<p style = "color:WHITE">
			<label>UserID:</label>
			<input type= "number" id = "userid" name = "userid"/>
			<a href="#" title="Your unique id. REQUIRED TO LOG IN AGAIN"><img src="blue_question_mark.png" height="13px"/></a>
			</p>
			<p style = "color:WHITE">
			<label>Username:</label>
			<input type= "text" id = "user" name = "user"/>
			</p>
			<p style = "color:WHITE">
			<label>Password:</label>
			<input type= "password" id = "pass" name = "pass"/>
			</p>
			<p style = "color:WHITE">
			<label>E-mail:</label>
			<input type= "email" id = "email" name = "email"/>
			</p>
			<p style = "color:WHITE">
			<input type= "submit" id = "btn" name = "login"/>
			</p>
		</form>
		
		</div>
</div>

</body>
</html>
