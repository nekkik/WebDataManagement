<?php
	
$servername = "localhost:3306";
$user = "rishikum_1604";
$password = "librarks3";
$dbname = "rishikum_web";
session_start();
// Create connection
$conn = mysqli_connect($servername, $user, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }	

//    	if(isset($_POST['save']))


   if(isset($_POST)==true)
{
	if (empty($_POST["uname"])) {
		echo "<script>
alert('UserName is required !! ');
</script>";
    $x=false;
  }
else
	{
		$user=$_POST['uname'];
		$x=true;
}
}



if(isset($_POST)==true)
{
if (empty($_POST["password"])) {
		echo "<script>
alert('password is required !! ');
</script>";
    $y=false;
  }

else
		{
			$password=$_POST['password'];
	$y=true;
}
}





if($x==true && $y==true)
{
			//	$sql = "INSERT INTO admin (user, password )
			//	VALUES ('$user','$password')";

				//$sql_u="SELECT * FROM signup WHERE user='$userr'";
				//$res_u=mysqli_query($conn, $sql_u);
			
				$sql="SELECT user,password FROM admin WHERE user='$user' and password='$password'";			
				
				$result=mysqli_query($conn,$sql);
				$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
				//$active=$row['active'];
				$count=mysqli_num_rows($result);
				/*if (mysqli_query($conn, $sql)) 
				{
				    echo "HELLO ADMIN  !!!";
				   
				}
				 else
				 {
				    echo "Error: ";
				 	header("location: adminlogin.php");
				    //locatio
				}*/
				if($count==1)
				{
					//session_register("user");
					$_SESSION['login_user']=$user;
			echo "<script>
						alert('WELCOME ADMIN !!');
window.location.href='adminedit.php'
</script>";	
		}
			else
			{
						echo "<script>
						alert('Please enter the correct username and password !!');
window.location.href='adminlogin.php'
</script>";	
			}
		}
	
else
{
	echo "<script>
window.location.href='adminlogin.php'
</script>";

//$loc=true;
//header("location: signup.php");
}



?>