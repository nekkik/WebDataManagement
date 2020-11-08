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
 	$post=$_POST['post'];
 	$start=$_POST['sy'];
 	$end=$_POST['ey'];

 }
 $sql="INSERT INTO resume (name,post, start, end) VALUES('$name','$post','$start','$end')";
 if (mysqli_query($conn, $sql)) 
				{
					 echo "<script>
					 
alert(' Saved SUCCESSFULLY  !! ');
window.location.href='addresume.html'

</script>";
				}
				 else
				 {

				    echo "<script>
alert('error  !! ');
window.location.href='addresume.html'

</script>";
				}



?>