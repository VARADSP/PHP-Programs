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
		
	}
	
	if(empty($_POST["pass"]))
	{
		$passErr = "Please Enter Password";
	}
	else
	{
		$pass=check_input($_POST["pass"]);
		
		
	}
}

function check_input($data)
{
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	echo "IN THE FUNCTION : " . $data ;echo "<br>";
	return $data;
}
?>











<html>
<body>
<H3> Login Form </H3><hr/><br><br>
<p><span class="error">*required field.</span>
<form method="post">
  First Name: <input type="text" name="fname"><span>*<?php echo $fnameErr;?></span>
  <br>Password : <input type="password" name="pass"><span> * <?php echo $passErr;?></span><br>
  <br><input type="submit" name="submit" value="click">
  </form>
  </body>
  </html>
  