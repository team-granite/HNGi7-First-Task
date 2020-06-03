<?php
$myName = "Ayoola Olayiwola";
$myId = "HNG-06411";
$stack = "PHP";
$email = "ayoola2906@gmail.com";

echo returnStatement($myName, $myId, $stack);

function returnStatement($myName, $myId, $stack) {
$statement = "Hello World, this is ".$myName." with HNGi7 ID ". $myId." using ".$stack." for stage 2 task";
return $statement;
} 
?>
