<html>
<body>
<form method="post"">
Name : <input type="text" name="fname">
<input type="submit">
</form>


<?php
include('php1.php');
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$name = $_POST['fname'];
	$a = explode(" ",$name);
	if($a[0]=="varad")
	{
		echo "Hacker " .$a[0] . "<br>";
	}
	
	print_r($a);
	echo "<br>";
	if($name)
	{
		echo "Name is ".$name;
		include('download.php');
	}
}
?>
</body>
</html>
