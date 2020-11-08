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
	if (empty($_POST["user"])) {
		echo "<script>
alert('Enter user name !! ');
</script>";
    $z=false;
 }
else
{	$user=$_POST['user'];
	$z=true;
}
}



	//$user=$_POST['user'];
if($z==true){
		$sql = "DELETE FROM signup WHERE user='$user'";

				if (mysqli_query($conn, $sql)) 
				{
				    echo "Deleted successfully !!!";
				    //header("location: Login.html");
				}

		}		
else
				 {
				    echo "Error: ";
				 	echo "<script>
window.location.href='delete.php'
</script>";
				    //locatio
				}



?>