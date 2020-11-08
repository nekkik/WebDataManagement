<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="portfolio.css">
	<link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
</head>
<body id="signupbody">



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
  
    <FORM  method="post" action="addconnect.php">
	    <div class="form_mainsignup">
		    
		    
		    <div id="signupborder">
		    	<h1 id="checkin">ADMIN ADD Member Form </h1>
		        <label>
		        	Name:
		        	<p><input type="text" name="firstname" size=43><p>
		        </label> 
		        <label>
		        	Last Name:<p><input type="text" name="lastname"  size=43></p>
		        </label>
		        <label>
		        	Email:<p><input type="text" name="emailaddress" size=43></p>
		        </label>
		        <label>
		        	User:<p><input type="text" name="user1"  size="43" placeholder="USERNAME"></p>
		        </label>  
		     
		  
		        <label>Password:
		        	<p><input type="password" name="password"  size=43 placeholder="Password"></p>
		        </label>
		        <label>
		        	Repeat Password:
		        	<p><input type="password" name="confirmpassword" size=43></p>
		        </label>
		      	<div id="singupbutton">
		      	<input type="submit" name="submit">
		    	</div>
		    </div>     
	    </div>    
    </FORM>  
</body>
</html>