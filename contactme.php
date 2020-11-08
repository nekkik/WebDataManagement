<?php 
session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <link href="css/portfolio.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Rajdhani' rel='stylesheet'>
  <script type="text/javascript" src="js/portfolio.js"></script>
  <title>Contact Me </title>
</head>
<body>
<div id="wrapper">

<div id="navbar">
  <ul>
    <center><img src="Images/logo.png" width="57%"  ></center> 
    <p>Elison M Tuscano</p>
    <li><a href="Home.php">Home</a></li>
    <li><a href="About.php">About</a></li>
    <li><a href="Skills.php">Skills</a></li>
    <li><a href="Resume.php">Resume</a></li>
    <li><a href="references.php">References</a></li>
    <li><a href="Portfolio.php">Portfolio</a></li>
    <li><a href="Blog.php">Blog</a></li>
    <li><a class="active" href="Hireme.php">Hire me</a></li>
    <?php #admin option
    if (!empty($_SESSION['login'])) {
      
     if($_SESSION['login'] == 'elison'){?>   
    <li><a href="adminpage.php">Admin</a></li>
    <?php } } ?> 
    <?php if (empty($_SESSION['login'])) { ?>
    <li><a href="login.php">login</a></li>
    <li><a href="Signup.php">Signup</a></li>
    <?php }
      else {?>
    <li><a href="logout.php">logout</a></li>
    <?php } ?>   
    <div class="footer"><p>&copy;DiazApps ALL Rights Reserved By <mark>Elison M Tuscano</mark></p></div>
  </ul>
</div>

<div id="wrap" style="padding-left: 0px;">
    <div class ="topbar" >
    <span >
      CONTACT ME
    </span>
  </div>
<br>
<div class="grid-container">
  <div class="grid-item">
    <div class="center" style="text-align: left">

    <center><h3>CONTACT ADDRESS</h3></center>
    <P><img src="Images/amlocation.png" width="7%">    <STRONG>Address: </STRONG>635 Elrami, South Corner Street, Alexandria, Egypt<br></P>
    <p><img src="Images/amphone.png" width="7%">    <strong>Phone:</strong>+20 012 345 6789<br></p>
    <p> <img src="Images/amwhatsapp.png" width="7%"> <strong>Whatsapp:</strong>+20 012 856 7859<br></p>
    <p> <img src="Images/amskype.png" width="7%"> <STRONG>Skype:</STRONG>e.example<br></p>
    <p> <img src="Images/amemail.png" width="7%">     <strong>Email:</strong>luismalvarez@website.com<br></p>
    <p>  <img src="Images/amhome.png" width="7%"><strong>Website</strong>www.website.com<br>
    </P>
    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-linkedin"></a>
    <a href="#" class="fa fa-pinterest"></a>
    <a href="#" class="fa fa-google"></a>
    <a href="#" class="fa fa-snapchat-ghost"></a>


    </div>

  </div>
  <div class="grid-item">
    <div class="center" style="text-align: left">
      
    <h3>LET'S HAVE A FUN  </h3>

    <form class="contact" action="email.php" method="POST">
      <b style="color: red;"><?php /*$error = isset($_GET['error']) ? $_GET['error'] : '';
              echo $error;  */
              if(empty($_GET['error'])){  echo '';}
        else { $error= $_GET['error']; echo $error;}
            ?></b><br>
      <input type="text" name="name" id="name" placeholder="Your Name" required><br>
      <hr>
      <input type="email" name="email" id="email" placeholder="Email" required><br>
      <hr>
      <input type="tel" name="phone" id="phone" placeholder="Phone format 123-456-7890"  pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br>
      <hr>
      <textarea rows="4" cols="50" name="message" id="message" placeholder="Your Message" required></textarea><br>
      <hr>
      <br>
      <input class="btn" type="submit" value="Send Now" onclick="contactval()">
    </form>



    </div>

  </div>

</div>


  
</div>
</div>
</body>
</html>
