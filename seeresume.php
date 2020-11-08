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
    $phone=$_POST['phone'];


    $sql="SELECT name, phone FROM resume WHERE name='$name' and phone='$phone'";
    $result=mysqli_query($conn,$sql);
 //  $sql="SELECT user,password FROM signup WHERE user='$nam' and password='$pass'";			
				
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
					$_SESSION['name']=$name;
					$_SESSION['phone']=$phone;
			echo "<script>
						alert('WELCOME user!!');
						</script>";


    			echo "<table border='1'>
<tr>
<th>Name</th>
<th>QUALIFICATION</th>
<th>Phone</th>
<th>AboutYourself</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['qualification'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "<td>" . $row['aboutyourself'] . "</td>";
echo "</tr>";
}
echo "</table>";
 }

    		else
    		{
    			echo "FAILED ";
    		}
    	}
	
			else
			{
						echo "<script>
						alert('Please enter the correct username and password !!');
window.location.href='login.php'
</script>";	
			}


 ?>