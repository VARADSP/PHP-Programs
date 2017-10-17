<?php
include('stringfuncs.php');
require('loops.php');
require('php1.php');
$d = date("D");
echo $d;
//finding current time
echo "<br>";
echo "Default Timezone Setting of PHP";
$a = date_default_timezone_set("USA");
echo $n = date("H : i : sa");
echo "<br>";
echo "PHP DATE AND TIME FUNCTIONS";


//For Finding date after 5 days from now
$d1 = mktime(0,0,0,date("m"),date("d")+5,date("y"));
echo $n2 = date("d/m/y",$d1);




?>
