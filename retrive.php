<?php
$email=$code="";
$emailErr=$codeErr="";

$conn = new mysqli("localhost", "root", "", "nitrutsav");

if ($_SERVER["REQUEST_METHOD"] == "POST")
{  
        $val=$_POST["email"];
        $data=$conn->query("SELECT email FROM register WHERE email='".$val."'");  		

        if (empty($_POST["email"])) {    $emailErr = "Email is required";  }
        else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {   $emailErr = "Invalid email format";  }
        else if ($data->num_rows==0) { $emailErr = "This email is not registered"; }
        else{ $email = test($_POST["email"]);  }

        $pass=md5($_POST["code"]);
        $cod=$conn->query("SELECT * FROM register WHERE email='".$val."' AND password='".$pass."'");

        if(empty($_POST["code"]))  { $codeErr="password required";  }
        else if ($cod->num_rows==0)  { $codeErr= "Invalid email-password combination"; }
        else
        {
              header("location:home.html");
              echo "WELCOME";
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