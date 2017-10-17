<?php

try{
	$error = "Alwats throw this error";
	
	throw new Exception($error);
	
	echo "Never Executed";
}

catch(Exception $e1)
{
	echo " Caught Exception FIrstSSSSSSSSSSSSSSSSSSSS: " . $e1->getMessage() . "\n";
}

catch(ArithmeticException $e)
{
	echo " Caught Exception : " . $e->getMessage() . "\n";
}
echo "hello World ..";








?>