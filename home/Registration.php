<?php
	session_start();
	$conn = mysqli_connect("localhost","root","","NITRUtsav");

	if(isset($_POST['register_btn']))
	{
		$name=mysql_real_escape_string($_POST['name']);
		$username=mysql_real_escape_string($_POST['username']);
		$email=mysql_real_escape_string($_POST['email']);
		$password1=mysql_real_escape_string($_POST['password1']);
		$password2=mysql_real_escape_string($_POST['password2']);

		if($password1==$password2)
		{
			$password1=md5($password);
			$sql="INSERT INTO registratin(name,username,email,password) VALUES ('$name','$username','$email','$password')";
			mysqli_query($conn,$sql);
			$SESSION['message']="You are now logged in";
			$SESSION['username']=$username;
			header("location:home.php");
		}
		else
		{
			$SESSION['message']="The two passwords do not match";
		}
	}
?>




<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION PORTAL</title>
</head>
<body>

	<div class="header">
		<H1>REGISTRATION PORTAL</H1>	
	</div>

	<form method="post" action="Registration.php">
		<table>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name" class="textInput"></td>
			</tr>
			<tr>
				<td>User Name:</td>
				<td><input type="text" name="username" class="textInput"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="email" name="email" class="textInput"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="passowrd1" class="textInput"></td>
			</tr>
			<tr>
				<td>Renter Password:</td>
				<td><input type="password" name="passowrd2" class="textInput"></td>
			</tr>
			<tr>
				<td></td>								
				<td><input type="submit" name="register_btn" value="Register"></td>
			</tr>
		</table>
	</form>

</body>
</html>