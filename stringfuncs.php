<?php
$a1 = array("read","play");

$i = implode(",",$a1);
echo $i;
echo "<br>";


$e = explode(",",$i);

print_r($e);
echo "<br>";

echo strpos("PHP Training","Training");
echo "<br>";


echo str_replace("PHP","Java","PHP Training");
echo "<br>";


echo str_word_count("PHP Training For VSP");
echo "<br>";

?>