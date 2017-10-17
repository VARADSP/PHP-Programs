<?php

if(!file_exists("HELLO.txt"))
{
	die("File not Found");
}
	else
	{
		$file = fopen('HELLO.txt','r');
	}


?>
