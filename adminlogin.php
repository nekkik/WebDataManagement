<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="adminlogn.js"></script>
</head>
<body id="bb1">
<nav>
	<a href="Home.html">Home</a>
  		<a href="ABOUTME.html">ABOUT ME</a>
		<a href="Skills.html">SKILLS</a>
		<a href="Resume.html">RESUME</a>
		<a href="ContactMe.html">CONTACT</a>
		<a href="PortFolio.html">PORTFOLIO</a>
		<a href="http://rishikumarsoni.uta.cloud">BLOG</a>
		<a href="HireMe.html">HIREME</a>
		<a href="Login.html">LOG IN</a>
		<a href="SignUp.html">SIGN UP</a>	
</nav><br><br><br>
<h2> Admin Login Form</h2>

<form action="adminconnect.php" method="post"  name="myForm" onsubmit="return validateForm()">
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required="">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required="">
        
    <button type="submit">Login</button>
    
  </div>
</form>

</body>
</html>