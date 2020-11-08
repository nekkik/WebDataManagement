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
///////////////////////////////   INSERT PART ////////////////////////////////////////////
/*if(isset($_POST)==true)
{
	$namee=$_POST['username'];
}
$sql = "INSERT INTO demo (name)
VALUES ('$namee')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/
////////////////////////////////////        UPDATE PART ////////////////////////////
/*if(isset($_POST['update'])){
$mysql= "UPDATE demo SET name='zero' WHERE name='Nekki'";
if(mysqli_query($conn, $mysql))
{
	echo "DONE !! ";
}
else
{
	"LOSE!!";
}
}*/

if(isset($_POST['delete']))
{
	$mysql="DELETE FROM demo where name='John'";
	if(mysqli_query($conn, $mysql))
	{echo "yes";}
else
{
	echo "no";
}
}
mysqli_close($conn);
?>
