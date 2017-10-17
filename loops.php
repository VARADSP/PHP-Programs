<?php
$n1 = 100;
while(true)
{
	echo "<br> N1 is ".$n1." Value ";
	$n1++;
	if($n1 > 110)
		break;
}
for($i=0;$i<10;$i++)
{
	echo "HI :) 10 Times ";
}
$language = array("php","java","android");
foreach($language as $value)
{
	echo "<br>$value " ;
}
for($b++;$b++;$b++)
{
	print $b;
	if($b == 4)
		break;
}

?>