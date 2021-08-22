<?php
include("connection.php");
?>

<html>
<head>
<style type="text/css">

body{
background-color:lightblue;
background:url(bg_image.jpg) no-repeat;
background-size: cover;
align-items: center;
justfy-content: center;

font-family:
}
.container{

margin-top:0px;
width: 450px;
height: auto;
background: #dedede;
border-radius: 5px;

}
.label{
padding: 20px;
font-size: 35px;
font-weight: bold;
color: #130f40;

}
.login_form{
	padding: 20px 40px;
}
.login_form.font{
	font-size: 18px;
	color: #130f40;
	margin: 5px 0;
}
.login_form input{
	height: 40px;
	width: 350px;
	padding:0px;
	font-size: 18px;
	outline: none;
	border: 1px solid silver;
}
.login_form .font2[
margin-top: 30px;
}
</style>
<script type="text/javascript">
	function login()
	{
		var uname= document.getElementById("REG NUMBER").value;
		var  = document.getElementById("pin").value;
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if(uname =='')
		{
			alert("please enter your reg number.");
		}
		else if(PIN=='')
		{
        	alert("enter the PIN");
		}
		else if(!filter.test(uname))
		{
			alert("Enter valid reg number.");
		}
		else if(PIN.length <5 )
		{
			alert("PIN min and max length is 5.");
		}
		else
		{
	alert('Thank You for Login & You are Redirecting to Campuslife Website');
  //Redirecting to other page or webste code or you can set your own html page.
       window.location = "https://www.campuslife.co.in";
			}
	}
	//Reset Inputfield code.
	function clearFunc()
	{
		document.getElementById("REG NUMBER").value="";
		document.getElementById("pin").value="";
	}
</script>	
<title>login form</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta charset="utf-8">



</head>
<body  style="background-color:lightblue ">
<table height="40%" width="100%">
<tr><h1>
</tr>
<ul>
<th><a href="home.php">HOME </a></th>
<th><a href="studh2.php ">STUDENT INFORMATION </a></th>
<th><a href="susp2.php">SUSPENSION DETAILS </a></th>
<th><a href="login.php">LOGIN AS </a></th>
</ul>
</table>
<div class="container">
<h1 class="label"> login</h1>
<form method = "POST" action="">
<br><div class="font"> REG NO: 
<input type="text" name="Reg_no" required></div></br>
<br><div class="font font2"> PIN:
<input type="password" name="Pin" required></div></br>
 
        <button type="submit" name="submit" value="Login"> save </button>
		<button type="submit" onclick="clearFunc()"> Reset </button>


</form>
</div>
<?php
  if(isset($_POST["submit"])){
	$reg_no = $_POST['Reg_no'];
	$pin = $_POST['Pin'];
	$query = "INSERT INTO studentLogin(Reg_no,Pin) VALUES('$reg_no','$pin')";
	$q = mysqli_query($connection,$query);
	if(!$q){
	echo "failed".mysqli_error($connection);
	}
	else{
	echo "your data has been submitted.";
	}
	}
	?>

</body></html>