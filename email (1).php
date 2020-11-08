<?php

	<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "myweb";
	$conn = mysqli_connect($servername, $username, $password , $dbname) or die('error connecting'); 

	
	
	if(isset($_POST['name']) and isset($_POST['email']) and isset($_POST['phone']) and isset($_POST['message'])) {
		$Name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$M = $_POST['message'];

		$to = 'elituscano@gmail.com';
		$subject = 'Contact Me Form Submission';
        $Message = "Name : ".$Name."\n"."Phone : ".$phone."\n"."Email : ".$email."\n". "Wrote this message : "."\n\n".$M;
            
        mail($to, $subject, $Message);
	}

	$message="Email Send !!!";
	header('location: contactme.php?error='.$message.'') ;

?>
