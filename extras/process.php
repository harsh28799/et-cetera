<?php
$name=$email=$number=$institute=$code1=$code2="";
$nameErr=$emailErr=$numberErr=$instituteErr=$code1Err=$code2Err="";

$conn = new mysqli("localhost", "root", "", "nitrutsav");

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  			if (empty($_POST["name"])) { $nameErr = "Name is required";  }
  			else if(!preg_match("/^[a-zA-Z ]*$/",$_POST["name"])){	$nameErr ="Only letters and white space allowed"; }
  			else{	$name = test($_POST["name"]);	}
  

  			$val=$conn->query("SELECT email FROM register WHERE email='".$_POST["email"]."'");
  			if (empty($_POST["email"])) {    $emailErr = "Email is required";  }
 			else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {		$emailErr = "Invalid email format";  }
 			else if ($val->num_rows>0) {	$emailErr = "This email is already registered";	}
  			else{	$email = test($_POST["email"]);  }


  			if (empty($_POST["number"])) {		$numberErr = "contact number is required";  }
  			else if (!preg_match("/^[0-9]{10}+$/", $_POST["number"])) {	$numberErr = "enter a valid contact number";	}
  			else{	$number = test($_POST["number"]);    } 

  			if (empty($_POST["institute"])) {	$instituteErr = "institute name is required";	}
  			else if (!preg_match("/^[a-zA-Z ]*$/",$_POST["institute"])) {		$instituteErr = "Only letters and white space allowed";    }
  			else{	$institute = test($_POST["institute"]);    }

  			if(empty($_POST["code1"]))	{	$code1Err="password required";	}
  			else if (!preg_match("/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/", $_POST["code1"]))	{	$code1Err= "Password requirements not met";	}
  			else{	$code1=$_POST["code1"];		}

  			if(empty($_POST["code2"]))	{	$code2Err="reentering password required";	}
  			else if (!preg_match("/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/", $_POST["code2"]))	{	$code2Err= "Password requirements not met";	}
  			else{	$code2=$_POST["code2"];		}

  			if($code1!=$code2){		$code1Err="The two passwords do not match";
  									$code2Err="The two passwords do not match";  }
  			else {	$code1=md5($code1);	}

  			if($nameErr==""&&$emailErr==""&&$numberErr==""&&$instituteErr==""&&$code1Err==""&&$code2Err=="")
  			{
	
   				$conn->query("INSERT INTO register (name, email, contact, institute, password)
    			VALUES ('$name', '$email', '$number' , '$institute' , '$code1')");

    		//	$name=$email=$number=$institute=$code1=$code2="";

				header("location:home.html");
  				exit;
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