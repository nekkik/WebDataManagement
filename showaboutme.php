
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title></title>
</head>
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
  </nav>
  
</body>
</html>

<?php
	
$servername = "localhost:3306";
$user = "rishikum_1604";
$password = "librarks3";
$dbname = "rishikum_web";
echo " SKILLS ";
// Create connection
$conn = mysqli_connect($servername, $user, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }	

 $sql = "SELECT * FROM aboutme";
 $result= mysqli_query($conn,$sql);

 if(mysqli_num_rows($result)>0)
 {
 	echo "<table border='1'>
<tr>
<th>Name</th>
<th>PHONE</th>
<th>ADDRESS</th>
<th>EMAIL</th>
<th>DATE OF BIRTH</th>
<th>NATIONALIY</th>
</tr>";
 	while($row = mysqli_fetch_assoc($result))
 	{
 		 $field1name = $row["name"];
        $field2name = $row["phone"];
        $field3name = $row["address"];
        $field4name = $row["email"];
         $field5name = $row["dob"];

 $field6name = $row["nationality"];

         echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
                  <td>'.$field6name.'</td> 
                  
              </tr><br><br>';
 	}

 }
 else {
    echo "0 results";
}