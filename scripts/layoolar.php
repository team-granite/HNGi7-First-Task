<?php
$myName = "Ayoola Olayiwola";
$myId = "HNG-06411";
$stack = "PHP";
$email = "ayoola2906@gmail.com";

echo returnStatement($myName, $myId, $stack,$email);

function returnStatement($myName, $myId, $stack,$email) {
$statement = "Hello World, this is ".$myName." with HNGi7 ID ". $myId." using ".$stack." for stage 2 task and ".$email;
return $statement;
} 
?>
