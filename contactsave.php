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

$name=$_POST['name'];
if (isset($_POST)==true) 
{

	if (empty($_POST["name"]) && preg_match('/^[A-Za-z0-9]{10}/', $name); ) {
$namee = "Name is required";
    $x=false;
  }
	else {
		$namee=$_POST['name'];
		$x=true;
	}
	if (empty($_POST["email"])) {
    $email = "email is required";
    $x=false;
  }
	//$lastnamee=$_POST['lastname'];
	
	else{
		$email=$_POST['email'];
		$x=true;
	}
	$phone=$_POST['phone'];
	
	if (empty($_POST["comment"])) {
		echo "<script>
alert('Message is required !! ');
</script>";
    $x=false;
  }
  else{
	$message=$_POST['comment'];
	$x=true;
	}
	//$repeat=$_POST['confirmpassword'];
}
if($x==true){
$sql = "INSERT INTO contact (name, email, phone, message )
VALUES ('$namee','$email','$phone','$message')";
echo "<script>
alert('Message Delivered !! ');
window.location.href='ContactMe.html';
</script>";
}

 else 
{

echo "<script>
alert('Please fill the Fields Properly !! ');
window.location.href='ContactMe.html';
</script>";

    //locatio
}

?>