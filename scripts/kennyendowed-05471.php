<?php
$name = "kenneth Akpan";
$hng_id = "HNG-05471";
$language = "PHP";
$email = "kenneyg50@gmail.com";

function show_info(){
    global  $hng_id, $language, $email;
    return "Hello World, this is $name with HNGi7 ID $hng_id using $language for stage 2 task and $email";
}

echo show_info();
?>
