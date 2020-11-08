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
		$p1=$_POST['p1'];
		$lan=$_POST['language'];
		$p2=$_POST['p2'];

	$sql = "UPDATE skills SET percentage1='".$p1."', langauges='".$lan."', percentage2='".$p2."'   WHERE name='".$name."'";
					//echo "$sql";
				if (mysqli_query($conn, $sql)) 
				{
											    echo "<script>
							alert('EDIT SUCCESS  !! ');
							window.location.href='editskills.html'
							
							</script>";				}
				 else
				 {
				   
				    //locatio
				
				 				    echo "<script>
							alert('Error  !! ');
							
							window.location.href='editskills.html'
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