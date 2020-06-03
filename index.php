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

	$detail = explode(" and ",$userStrings);
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
        $html = $html . 
        "<tr>
            <td scope='row'>".$name."</td>
            <td >".$id."</td>
            <td >".$email."</td>
            <td>".$userStrings."</td>
            <td> <span class='btn btn-success btn-disabled btn-sm'>Pass</span></td>
        </tr>";
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
        $html = $html . 
        "<tr>
            <td scope='row'>".$name."</td>
            <td >".$id."</td>
            <td >".$email."</td>
            <td>".$userStrings."</td>
            <td> <span class='btn btn-failure btn-disabled btn-sm'>Fail</span></td>
        </tr>";
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
    echo (
        "<!doctype html>
<html lang='en'>
  <head>
    <title>HNGi7 Task 2 - Team Granite</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
  </head>
  <body>
    <div class='container p-5 text-center'>
        <h1>HNGi7 Team Granite </h1>
        <a href='?json' class='btn btn-dark btn-sm'>VIEW JSON</a>
    </div>
    <div class='container mt-5 p-0'>
        <div class='row'>
            <div class='col-12'>
                <table class='table'>
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>HNG-ID</th>
                            <th>Email</th>
                            <th>Response</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>"
                        . $html .
                    "</tbody>
                </table>
            </div>
        </div>
    </div>
  </body>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>
</html>"
	);
}
?>









