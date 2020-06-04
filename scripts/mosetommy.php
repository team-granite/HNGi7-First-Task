<?php

$profile= [
			'fullname'=>'Eyitomiye Olaniyi Moses',
			'email'=>'olaniyimoses3464@gmail.com',
			'HNGId'=>'HNG-05521',
			'language'=>'PHP'
			];

function displayStatement($profile){

		$statement = "Hello World, this is {$profile['fullname']} with HNGi7 ID {$profile['HNGId']} using {$profile['language']} for stage 2 task ";
		return $statement;

	}

	echo displayStatement($profile);
?>


