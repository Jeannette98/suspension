<?php
   include("connection.php");
   $password = $_GET['Password'];
  echo $query = "SELECT * FROM Admin WHERE Password =".$password;
   
   $result = mysqli_query($connection,$query);
   if(!$result){
	   echo "Failed";
   }
   if($d = mysqli_fetch_array($result))
   {
	   ?>
	   <form action="" method="post">
		  Username:<input type="text" name ="username" value="<?php echo $d['Username'];?>" placeholder="Enter  username"/>
		  <br/>
         Password:<input type="hidden" name ="password" value="<?php echo $d['Password'];?>" placeholder="Enter the password"/>
		  <br/> 		  
			
			<input type="submit" name ="update" value="Update"/>
			<input type="submit" name ="retrieve" value="Retrieve"/>
		</form> 
	   
	   <?php  
	     if(isset($_POST['update'])){
			 $username = $_POST['username'];
			 $password = $_POST['password'];
			 echo $w = "UPDATE Admin SET Username='$username', Password=$password
			 WHERE Password=".$_POST['password'];
			 
			 $r = mysqli_query($connection,$w);
			 if(!$r){
				 echo "error ";
			 }else{
				 echo "Updated successfully";
			 }
			 
		 }
   }
?>