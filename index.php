<?php

$files = scandir("scripts");

function filter_files($var){
    $arr = [];
    for ($counter = 0; $counter < count($var); $counter++){
        $file = $var[$counter];
        if (strlen($file) > 3){
            array_push($arr,$file);
        }           
    }
    return $arr;
}

$nfiles = filter_files($files);

$html = "";
$json = [];
for ($counter = 0; $counter < count($nfiles); $counter++){
    $file = $nfiles[$counter];
    $path_info = pathinfo($file);
    if ($path_info["extension"] == "js"){
        $ret = exec("node scripts/".$file." 2>&1 ", $output,$return_var);
        
    }
    if ($path_info["extension"] == "py"){
        $ret = exec("python scripts/".$file." 2>&1 ", $output,$return_var);
        
    }
    if ($path_info["extension"] == "php"){
        
        $ret = exec("php scripts/".$file." 2>&1 ", $output,$return_var);
    }

	if (isset($output[0])){
		$userStrings = strip_tags($output[0]);
	}else{
		$userStrings = "nothing returned";
	}

	$detail = explode("and",$userStrings);
	$userString = trim($detail[0]);
	
    
    if (isset($detail[1])){
        $email = $detail[1];
    }else{
		$email = "";
	}
    
    
    preg_match("/ [a-zA-Z]+ [a-zA-Z]+ with/", $userString,$matches);
    preg_match("/ HNG-[0-9]+ using/", $userString,$matches2);
    preg_match("/ [a-zA-Z]+ for/", $userString,$matches3);

    if (isset($matches2[0])){
        $id = substr($matches2[0],1,-6);
    }else{
		$id = "";
	}
    if (isset($matches[0])){
        $name = substr($matches[0],1,-5);
    }else{
		$name = "";
	}
    if (isset($matches3[0])){
        $language = substr($matches3[0],0,-3);
    }else{
		$language = "";
	}


	
    if (preg_match("/^Hello World, this is [a-zA-Z]+ [a-zA-Z]+ with HNGi7 ID HNG-[0-9]+ using [a-zA-Z]+ for stage 2 task$/", $userString)){
        $html = $html . "<p>". $userString . "<p> Status - Pass </p> \n";
        $obj = [
            "file" => $file,
            "output" => $userString,
            "email" => $email,
            "fullname" => $name,
            "HNG Id" => $id,
            "language" => $language,
            "status" => "pass"
        ];
		array_push($json,$obj);
        $output = [];
    }else {
        $html = $html . "<p>". $userString . "<p> Status - Fail </p> \n";
        $obj = [
            "file" => $file,
            "output" => $userString,
            "email" => $email,
            "fullname" => $name,
            "HNG Id" => $id,
            "language" => $language,
            "status" => "fail"
        ];
		array_push($json,$obj);
        $output = [];
    }  
   
}
$json = json_encode($json);
if (isset($_GET['json'])){
    echo $json;
}else{
    echo $html;
}
?>









