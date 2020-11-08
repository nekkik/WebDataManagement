<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="portfolio.css">
<script type="text/javascript" src="login.js"></script>
<body>
    <nav>
  <a href="Home.html">Home</a>
      <a href="showaboutme.php">ABOUT ME</a>
    <a href="showskills.php">SKILLS</a>
    <a href="showresume.php">RESUME</a>
    <a href="ContactMe.html">CONTACT</a>
    <a href="showportfolio.php">PORTFOLIO</a>
    <a href="http://rishikumarsoni.uta.cloud">BLOG</a>
    <a href="HireMe.html">HIREME</a>
    <a href="Login.html">LOG IN</a>
    <a href="SignUp.html">SIGN UP</a>
  
    <FORM METHOD="POST"  name="myForm" onsubmit="return validateForm()" ACTION="connectlogin.php">
    <div class="form_main">
     <div id="login">
      <h1 id="loginheading">Login</h1>
      <h3 id="X">X</h3>
      <hr id="login1">
      <div>
        <label>
        User:
        <p><input type="text" name="username" size=43 required=""><p>
        </label>   
     </div> 
      <div>
        <label>Password:
        <p><input type="password" name="password" size=43 required=""></p>
        </label>
        <hr id="login2"><br><br>
        <input type="submit" name="submit">
     

      </div>
      </div>     
    </div>    
    </FORM>  
  

</body>
</html>