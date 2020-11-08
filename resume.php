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

//    	if(isset($_POST['save']))
if(isset($_POST)==true)
{
	$nam=$_POST['name'];
	$qualification=$_POST['qualification'];
	$phone=$_POST['phone'];
	$about=$_POST['about'];

$sql = "INSERT INTO resume (name, qualification, phone, aboutyourself)
VALUES ('$nam','$qualification','$phone','$about')";

if (mysqli_query($conn, $sql)) {
    echo "<script>
alert('Success  !! ');
window.location.href='resumefill.html'
</script>";
}
 else {
   echo "<script>
alert('error !! ');
window.location.href='resumefill.html'
</script>";
    //locatio
}
}
else
{
	echo "<script>
alert('Fill the form correctly  !! ');
</script>";

//$loc=true;
//header("location: signup.php");
}



?>