<?php
$x = 40;
$y = 20;


function addition()
{
  $GLOBALS['ans']=$GLOBALS['x']+$GLOBALS['y'];

}

addition();
echo  "Addtion = " . $ans;


 ?>
