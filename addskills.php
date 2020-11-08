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
 	$p1=$_POST['p1'];
 	$language=$_POST['language'];
 	$p2=$_POST['p2'];

 }
 $sql="INSERT INTO skills (name, percentage1, langauges, percentage2) VALUES('$name','$p1','$language','$p2')";
 if (mysqli_query($conn, $sql)) 
				{
					 echo "<script>
					 
alert(' Saved SUCCESSFULLY  !! ');
window.location.href='addskills.html'

</script>";
				}
				 else
				 {

				    echo "<script>
alert('error  !! ');
window.location.href='addskills.html'

</script>";
				}



?>