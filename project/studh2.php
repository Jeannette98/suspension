<?php
include("connection.php");
?>


<html>
<head>
<style>
body{
background-color:lightblue;
text-align:center;
margin-top:18%;
}
</style>
</head>
<body>
<?php
include('header.php');
?>
<form method ="POST" action = "">
<br>Firstname:<input type="text" name="Firstname" size="20"/></br>
<br>Lastname:<input type="text" name="Lastname" size="20"/></br>
<br>Gender:<input type="radio" name="Gender" value="Female"/> Female
<input type="radio" name="Gender" value="Male"/>Male</br>
<br>Email:<input type="email" name="Email" required /></br

<br>College:<input type="text" name="College" size="20"/></br>
<br>School:<input type="text" name="School" size="20"/></br>
<br>Deparment:<input type="text" name="Department" size="20"/></br>
<br>Year of study:<input type="text" name="Year" size="20"/></br>
<br>Academic year:<input type="numbers" name="Academic" size="20"/></br>
Start date:<input type="date" name="Startdate" size="20"/></br>
End date:<input type="date" name="Enddate" size="20"/></br>
<br><input type="submit" name ="submit" value="Save"/>

</form>
<?php 
if(isset($_POST["submit"])){
	$firstname = $_POST['Firstname'];
	$lastname = $_POST['Lastname'];
	$email = $_POST['Email'];
	$gender = $_POST['Gender'];
	$college = $_POST['College'];
	$school = $_POST['School'];
	$department = $_POST['Department'];
	$yearOfstudy = $_POST['Year'];
	$academicYear = $_POST['Academic'];
	$startdate = $_POST['Startdate'];
	$enddate = $_POST['Enddate'];
	$query = "INSERT INTO student(Firstname, Lastname, Email, Gender, College, School, Department, Yearofstudy, AcademicYear,Startdate,Enddate) VALUES('$firstname', '$lastname','$email','$gender','$college', '$school','$department', '$yearOfstudy', '$academicYear','$startdate','$enddate')";
	$r = mysqli_query($connection, $query); 
	    if(!$r){
			echo "Failed ".mysqli_error($connection);
			
		}else{
			echo "your data has been submited";
}
    header("location:susp2.php");
	exit();
}

?>
</body>
</html>