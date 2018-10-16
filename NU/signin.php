<!DOCTYPE html>
<html>
<head>
	<title>NITRUtsav Sign-in</title>
	<style>
		.error{
			color: red;
		}
	</style>
</head>
<body>
	
	<?php include('retrive.php'); ?>
	
	<h1>SIGN IN:</h1>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
		<fieldset>
		<legend><strong>SIGN IN:</strong></legend>
		<table>
			<tr>
				<td>E-mail:</td>
				<td><input type="text" name="email" value="<?php echo $email ?>"></td>
				<td><span class="error">*<?php echo $emailErr; ?></span></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="code"></td>
				<td><span class="error">*<?php echo $codeErr; ?></span></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="submit"></td>
			</tr>
			<tr>
				<td>Not a member?</td>
				<td><a href="signup.php">signup</a></td>
			</tr>
			</fieldset>
		</table>		
	</form>
</body>
</html>