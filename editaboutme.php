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
		$name=$_POST['name'];

	$phone=$_POST['name'];
	$address=$_POST['address'];
	
	$email=$_POST['email'];

	$dob=$_POST['dob'];
	$nationality=$_POST['nationality'];

$sql = "UPDATE aboutme SET phone='".$phone."',address='".$address."', email='".$email."', dob='".$dob."',nationality='".$nationality."'   WHERE name='".$name."'";
					//echo "$sql";
				if (mysqli_query($conn, $sql)) 
				{
											    echo "<script>
							alert('EDIT SUCCESS  !! ');
							window.location.href='editaboutme.html'
							</script>";				}
				 else
				 {
				   
				    //locatio
				
				 				    echo "<script>
				 				    window.location.href='editaboutme.html'
							alert('Error  !! ');
							
							
							</script>";	
				}
			
}
else
{
	echo "<script>
alert('Fill the form correctly  !! ');
window.location.href='edit.php'
</script>";

//$loc=true;
//header("location: signup.php");
}



?>