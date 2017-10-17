<?php   //SERVER SIDE VALIDATION
$fnameErr=$passErr="";
$fname=$pass="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(empty($_POST["fname"]))
	{
		$fnameErr = "Please Enter first name";
	}
	else
	{
		$fname=check_input($_POST["fname"]);
		echo "Corrected : " . $fname;
	}
	
	if(empty($_POST["pass"]))
	{
		$passErr = "Please Enter Password";
	}
	else
	{
		$pass=check_input($_POST["pass"]);
		echo "Corrected :" .$pass;
	}
}

function check_input($data)
{
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}
?>
