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
 	

 }
 $sql="DELETE FROM aboutme  WHERE name='$name'";
 if (mysqli_query($conn, $sql)) 
				{
					 echo "<script>
					 
alert(' Delete SUCCESSFULLY  !! ');
window.location.href='deleteaboutme.html'

</script>";
				}
				 else
				 {

				    echo "<script>
alert('error  !! ');
window.location.href='deleteaboutme.html'

</script>";
				}



?>