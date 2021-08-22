<?php 
$host = "localhost";
$user = "root";
$password = "";
$db = "student suspension";
$connection= mysqli_connect($host,$user,$password,$db);
if(!$connection)
{
	echo "faile";
}
?>