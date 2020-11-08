<?php
	
$servername = "167.99.105.36";
$user = "web";
$password = "Librark@16";
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
 	$phone=$_POST['phone'];
 	$address=$_POST['address'];
 	$email=$_POST['email'];
 	$dob=$_POST['dob'];
 	$nationality=$_POST['nationality'];

 }
 $sql="INSERT INTO aboutme (name, phone, address, email, dob, nationality) VALUES('$name','$phone','$address','$email','$dob','$nationality')";
 if (mysqli_query($conn, $sql)) 
				{
					 echo "<script>
					 
alert(' Saved SUCCESSFULLY  !! ');
window.location.href='addaboutme.html'

</script>";
				}
				 else
				 {

				    echo "<script>
alert('error  !! ');
window.location.href='addaboutme.html'

</script>";
				}



?>