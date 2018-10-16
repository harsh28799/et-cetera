<!DOCTYPE html>
<html>
<head>
	<title>FORM INITIATION</title>
</head>
<body>
	
	<?php include('two.php'); ?>
	
	<h1>REGISTER HERE:</h1>
	<form method="post" action="<?=$_SERVER['PHP_SELF'];?>">
		<fieldset>
		<legend><strong>REGISTER HERE:</strong></legend>
		<table>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name"></td>
				<td><span class="error">*<?= $nameErr; ?></span></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="submit"></td>
			</tr>
			</fieldset>
		</table>		
	</form>
</body>
</html>