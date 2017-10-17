<?php
$f = fopen('vsp.txt','w');

$str = "Example of write file";
fwrite($f,$str);

fclose($f);
echo "File Created";


$f1 = fopen('vsp.txt','r');
echo "<br>";
while(!feof($f1))
{
	echo fgetc($f1);
	
}
echo "<br>";

echo file_get_contents('vsp.txt');
fclose($f1);

?>
