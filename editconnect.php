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

$x=true;
   if(isset($_POST)==true)
{
	if (empty($_POST["firstname"])) {
		echo "<script>
alert('First Name is required !! ');
</script>";
    $x=false;
  }
else
	{
		$nam=$_POST['firstname'];
		$x=true;
}
}


	$lastnamee=$_POST['lastname'];

if(isset($_POST)==true)
{
if (empty($_POST["emailaddress"])) {
		echo "<script>
alert('Email is required !! ');
</script>";
    $y=false;
  }

else
		{
			$email=$_POST['emailaddress'];
	$y=true;
}
}


$userr=$_POST['user1'];
	
	
if(isset($_POST)==true)
{
	if (empty($_POST["password"])) {
		echo "<script>
alert('Password is required !! ');
</script>";
    $z=false;
 }
else
{	$pass=$_POST['password'];
	$z=true;
}
}

if(isset($_POST)==true)
{
	if (empty($_POST["confirmpassword"])) {
		echo "<script>
alert('ConfirmPassword is required !! ');
</script>";
    $u=false;
 }	
	else{
	$repeat=$_POST['confirmpassword'];
	{
		if($pass==$repeat)
		{
			$u=true;
		}
		else
		{
			echo "<script>
alert('ConfirmPassword is wrong !! ');
</script>";
			$u=false;
		}
	}
}
}
if($x==true && $y==true && $z==true && $u==true)
{
				$sql = "UPDATE signup SET name='".$nam."', lastname='".$lastnamee."', email='".$email."', password='".$pass."', repeatpassword='".$repeat."' WHERE user='".$userr."'";
					//echo "$sql";
				if (mysqli_query($conn, $sql)) 
				{
											    echo "<script>
							alert('EDIT SUCCESS  !! ');
							window.location.href='adminlogin.php'
							</script>";				}
				 else
				 {
				   
				    //locatio
				
				 				    echo "<script>
							alert('Error  !! ');
							window.location.href='edit.php'

							
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