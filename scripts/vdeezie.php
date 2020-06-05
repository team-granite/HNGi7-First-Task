<?php
$fullName = "Victor Desire";
$HNG_Id = "HNG-01598";
$language = "PHP";
$email = "edesire22@yahoo.com";

echo returnContent($fullName, $HNG_Id, $language);

function returnContent($fullName, $HNG_Id, $language) {
$content = "Hello World, this is ".$fullName." with HNGi7 ID ".$HNG_Id." using ".$language." for stage 2 task";
return $content;
} 
?>
