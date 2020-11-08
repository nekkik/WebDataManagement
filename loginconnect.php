<? php

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

////////////   CHECKING VALIDATION ////////////////

    if(isset($_POST)==true)
    {
    	$username=$_POST['user'];
    	$password=$_POST['password'];
    }

    if($username!='' && $password='')
    {
    	$sql="SELECT user, password FROM signup where user='".$username."' and password='".$password"'";

    	$result=mysqli_query($conn,$query);
    	if(!$result)
    		echo "FAILED !!";
    	else
    	{
    		if(mysqli_num_rows($result)>0)
    		{
    			$_SESSION['username']=$username;
    			$_SESSION['password']=$password;
    			echo "Success !!";
    		}
    		else
    		{
    			echo "FAILED ";
    		}
    	}
    }

?>