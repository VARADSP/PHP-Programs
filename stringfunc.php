<?php
$str = "PHP JAVA";
print_r(explode(" ",$str));
echo "<br>";
$a = array("PHP","JAVA");
echo implode(",",$a);
$a1 = implode(",",$a);
echo "<br>";
echo strcmp($str,$a1);
echo "<br>";
echo md5($str);
echo "<br>";
echo str_repeat($str,3);
?>