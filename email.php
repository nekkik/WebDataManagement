
<!-- include your own success html here -->
 
<html>
    <head></head>
    <body>
        	<nav>
  <a href="Home.html">Home</a>
      <a href="showaboutme.php">ABOUT ME</a>
    <a href="showskills.php">SKILLS</a>
    <a href="showresume.php">RESUME</a>
    <a href="contact.html">CONTACT</a>
    <a href="showportfolio.php">PORTFOLIO</a>
    <a href="http://rishikumarsoni.uta.cloud">BLOG</a>
    <a href="HireMe.html">HIREME</a>
    <a href="Login.html">LOG IN</a>
    <a href="SignUp.html">SIGN UP</a>
  </nav>
    </body>
    
</html>
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    global $alertMsg;
    if(isset($_POST["contactemail"]))
    {
      if (empty($_POST['first_name']) || empty($_POST['email']) || empty($_POST['comments']))
      {
        $alertMsg = "Required fields cannot be empty";
      }
      else{
        emailme();
        $alertMsg = "Email Sent Successfully";
      }
    }
  }
 function emailme()
  {
    $first_name = $_POST['first_name'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];
    $emailme = "swapnilnakum95@gmail.com";
    $result1 = mail ($emailme,"Project idea",$comments);
    if( $result1 == true ) {
        $alertMsg = "Successfully.";
    }else {
        $alertMsg = "Error";
    }
  }
?>