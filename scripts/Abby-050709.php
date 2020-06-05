<?php
$intern_info= [
			'fullname'=>'Amusa Quadri Abiodun',
			'email'=>'amusaabiodun88@gmail.com',
			'HNGId'=>'HNG-050709',
			'language'=>'PHP'
			];
                    function displayStatement($intern_info){
		$statement = "Hello World, this is {$intern_info['fullname']} with HNGi7 ID {$intern_info['HNGId']} using {$intern_info['language']} for stage 2 task ";
		return $statement;
	}
	echo displayStatement($intern_info);
?>

