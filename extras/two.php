<?php
$name=$email=$number=$institute=$password1=$password2="";
$nameErr=$emailErr=$numberErr=$instituteErr=$password1Err=$password2Err="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(empty($_POST["name"]))
	{
		$nameErr="Name is required";
	}
	else
	{
		$name=test($_POST["name"]);
		echo $name,"<br>";
	}
}

function test($data)
{
	$data=trim($data);
	$data=stripcslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}

?>

