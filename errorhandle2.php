<?php
//custom error handling


function myfunc($errno,$errstr,$error_log)
{
	echo "<b> Error : </b> [$errno] $errstr $error_log<br>";
	echo "End Script ";
	die();
	
}
set_error_handler(myfunc);
echo($test);








?>