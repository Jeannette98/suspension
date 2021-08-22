<?php
   include("connection.php");
   $password = $_GET['Password'];
   $query = "SELECT * FROM Admin WHERE Password =".$password;
   
   $result = mysqli_query ($connection, $query);
   if(!$result){
	   echo "Error ".mysqli_error($connection);
   }else{
	   while($row=mysqli_fetch_array($result)){
		    echo "<br/><hr/>";
		  
		   echo "username: ".$row['username']; echo "<br/>";
		   echo "Password: ".$row['password']; echo "<br/>";
	   }
   }
?>