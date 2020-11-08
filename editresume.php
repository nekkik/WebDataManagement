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
		$post=$_POST['post'];
		$sy=$_POST['sy'];
		$ey=$_POST['ey'];

	$sql = "UPDATE resume SET post='".$post."', start='".$sy."', end='".$ey."'   WHERE name='".$name."'";
					//echo "$sql";
				if (mysqli_query($conn, $sql)) 
				{
											    echo "<script>
							alert('EDIT SUCCESS  !! ');
							window.location.href='editresume.html'
							</script>";				}
				 else
				 {
				   
				    //locatio
				
				 				    echo "<script>
				 				    window.location.href='editreusume.html'
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