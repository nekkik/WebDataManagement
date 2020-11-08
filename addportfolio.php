<?php
	
$servername = "localhost:3306";
$user = "rishikum_1604";
$password = "librarks3";
$dbname = "rishikum_web";

// Create connection
$conn = mysqli_connect($servername, $user, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }	
 if(isset($_POST)==true)
 {
 	$name=$_POST['name'];
 	$post=$_POST['post'];
 	$message=$_POST['message'];

 }
 $sql="INSERT INTO portfolio (name, post, message) VALUES('$name','$post','$message')";
 if (mysqli_query($conn, $sql)) 
				{
					 echo "<script>
					 
alert(' Saved SUCCESSFULLY  !! ');
window.location.href='addportfolio.html'

</script>";
				}
				 else
				 {

				    echo "<script>
alert('error  !! ');
window.location.href='addportfolio.html'

</script>";
				}



?>