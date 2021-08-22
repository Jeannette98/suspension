<?php
  include("connection.php");
  $Password = $_GET['Password'];
  
  $query = "DELETE FROM Admin WHERE Password=".$Password;
  //echo $query;
  
  $r = mysqli_query($connection, $query);
  
  if($r){
	  echo "Product Delected";
  }else{
	  echo "Something went wrong!";
  }

?>