<!DOCTYPE html>
<html>
<head>
	<title>NITRUtsav Sign-up</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
	<style>
		.error{
			color: red;
		}
		.container{
			align-content: center;
		}
	</style>
</head>
<body>
	
	<?php include('process.php'); ?>
	
	<h1>REGISTER HERE:</h1>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<fieldset>
		<legend><strong>SIGN UP:</strong></legend>
		<table>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name" value="<?php echo $name ?>" ></td>
				<td><span class="error">*<?php echo $nameErr; ?></span></td>
			</tr>
			<tr>
				<td>E-mail:</td>
				<td><input type="text" name="email" value="<?php echo $email ?>"></td>
				<td><span class="error">*<?php echo $emailErr; ?></span></td>
			</tr>
			<tr>
				<td>Phone Number:</td>
				<td><input type="text" name="number" value="<?php echo $number ?>"></td>
				<td><span class="error">*<?php echo $numberErr; ?></span></td>
			</tr>
			<tr>
				<td>Institute:</td>
				<td><input type="text" name="institute" value="<?php echo $institute ?>"></td>
				<td><span class="error">*<?php echo $instituteErr; ?></span></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="code1"></td>
				<td><span class="error">*<?php echo $code1Err; ?></span></td>
			</tr>
			<tr>
				<td>Renter Password:</td>
				<td><input type="password" name="code2"></td>
				<td><span class="error">*<?php echo $code2Err; ?></span></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="submit"></td>
			</tr>
			<tr>
				<td>Already a member?</td>
				<td><a href="signin.php">signin</td>
			</tr>
			</fieldset>
		</table>		
	</form>
	<h5>Password must be between 8-12 characters<br>Must contain an uppercase, ad digit ans special character (!@#$%)</h5>
</body>
</html>