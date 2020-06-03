<?php

$name = "Yusuf Abdulrahman";
$hngID = "HNG-06182";
$language = "PHP";
$email = "abulrahmanyusuf125@gmail.com";

function show_info(){ 
	global $name, $hngID, $language, $email;
	return "Hello World, this is $name with HNGi7 ID $hngID using $language for stage 2 task";
}

echo(show_info());
?>
