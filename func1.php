<?php
function interest($p,$r,$n=2)
{
$interest = ($p*$r*$n)/100;
echo "Interest is : " . $interest;
}
interest(10000,5);

$str1 = "php";
$str2 = "java";
$str3 = $str1.$str2;
echo $str3;
echo "<br>";
var_dump($str1 == $str2);
print_r($str3);


?>