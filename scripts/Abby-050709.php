  
<?php
$intern = "Amusa Quadri";
$hng_id = "HNG-050709";
$language = "PHP";
$email = "amusaabiodun88@gmail.com";
function show_details(){ 
    global $intern, $hng_id, $language, $email;
    return "Hello World, this is $intern with HNGi7 ID $hng_id using $language for stage 2 task";
}
echo(show_details());
?>
