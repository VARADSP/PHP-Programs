<?php
$a1 = array('a','b','c');
$a2 = array('p','q','r');

print_r(array_merge($a1,$a2));
echo "<br>";
print_r(array_combine($a1,$a2));
echo "<br>";
print_r(array_search('a',$a1));
echo "<br>";
$ap = array_push($a1,'d','e');
print_r($a1);
echo "<br>";
array_pop($a1);
print_r($a1);
?>

