<?php
include("connection.php");
?>

<html>
<head>
</head>
<body>
 <?php
      
	   $rqu = "SELECT * FROM Admin";
	   $result = mysqli_query($connection, $rqu);
	   ?>
	   <table border="1">
	     <tr>
		    <th>Username</th>
			<th>Password </th>
			
			<th colspan="2">Action </th>
		</tr>
		
	   <?php
	   while($r = mysqli_fetch_array($result)){
		   
		    
?>
		   
		   <tr>
		   
		   <td><?php echo $r['Username'];?></td>
		   <td><?php echo $r['Password'];?></td>
		   <td><a href="studentDetail.php?Password=<?php echo $r['Password'];?>"> More </a></td>
		   <td><a href="studentUpdate2.php?Password=<?php echo $r['Password'];?>"> Update</a> </td>
		   <td><a href="studentDelete2.php?Password=<?php echo $r['Password'];?>"> Delete </a></td>
		   </tr>
	   <?php
	}
	  ?> 
	  </table>
	  <?php
include("footer.php");
?>
	 </body>
	 </html>