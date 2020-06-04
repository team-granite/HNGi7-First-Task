<?php
$output = "Hello World, this is Joseph Bassey with HNGi7 ID HNG-02360 using PHP for stage 2 task and Joemires20@yahoo.com";

if(defined('STDIN') || PHP_SAPI === 'cli')
    fwrite(STDOUT, $output);
else
    echo $output;
?>