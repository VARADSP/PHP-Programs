<?php
header('Content-type:image/jpg');
header("Content-Disposition:attachment;filename='coding.jpg'");
readfile("coding.jpg");
?>