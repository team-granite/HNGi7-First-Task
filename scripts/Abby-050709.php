<?php
$name = "Amusa Quadri";
$hng_id = "HNG-050709";
$language = "PHP";
$email = "amusaabiodun88@gmail.com";

function show_info(){ 
    global $intern, $hng_id, $language, $email;
    return "Hello World, this is $name with HNGi7 ID $hng_id using $language for stage 2 task and $email";
}

echo show_info();
?>

