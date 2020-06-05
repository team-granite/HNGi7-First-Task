<?php
$output = "Hello World, this is Temilola Onifade with HNGi7 ID HNG-05369 using PHP for stage 2 task and temmieonifade@gmail.com";

if(defined('STDIN') || PHP_SAPI === 'cli')
    fwrite(STDOUT, $output);
else
    echo $output;
?>