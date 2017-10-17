<?php
header("content-type:image/jpg");

header('content-Disposition:attachment ; filename="coding.jpg"'); 

readfile("coding.jpg");

?>
