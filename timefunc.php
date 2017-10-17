<?php
//current date
$d = date('d/m/Y');
echo "Today is :".$d;
echo "<br>";

//current time
date_default_timezone_set('Asia/Calcutta');
echo "<br>";

$t = date('H : i : sa');
echo "<br>";

echo "Time is " .$t;

echo "<br>";
//date after 10 days
$m = mktime(0,0,0,date('m'),date('d')+10,date('y'));
$n = date("d/m/Y",$m);

echo "After 10 dys date is " . $n;

?>