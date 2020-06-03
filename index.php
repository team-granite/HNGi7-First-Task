<?php
/*
 * This file is designed to read the scripts folder and read the content of every single file found there o extract the content
 *
 **/
$supported_languages = ["php"=>"php", "py"=>"python", "js"=>"/usr/local/bin/node"];
$supported_client_side_languages = [];

$scripts_dir = "./scripts";
$files = scandir($scripts_dir);
// var_dump($files);
$foundInterns = [];
$foundInternsHtml = "";
$Pass = "green";
$Fail = "red";
if(count($files) > 0){
	//Here Loop in all found files and try to get the right ones.
	foreach($files AS $file){
		$fileInformation = explode(".", $file);
		
		//Check if the found file is valid First
		if(is_dir($scripts_dir."/".$file)){
			// echo $file." is skipped because it looks strange!\n";
			continue;
		}

		//Here the file is valid now read the file and split every single text inside
		//Now gwt thw file extension to determin w=hich command should be used
		
		$results = "";
		//Here the Extensiol should be the last data
		if(count($fileInformation) > 1){
			//Here the file has a name and an extension
			$extension = $fileInformation[(count($fileInformation) - 1)];
			$command = "";
			// var_dump($extension);
			if(array_key_exists(strtolower($extension), $supported_languages)){
				$command = $supported_languages[strtolower($extension)]." ".$scripts_dir."/".$file;

				//Here Make sure to return the text from command
				$results = exec($command);
				if($extension == "js"){
					// var_dump($command, "\n", $results, "\n");
				}
			} else if(false){
				// echo $extension;response
				//Here Check if the comming code is for javascript
				if(in_array(strtolower($extension), $supported_client_side_languages)){
					// var_dump("JS Found for ", $file);
					$curl = curl_init();
				    // Set some options - we are passing in a useragent too here

				    $headers = [
				        'Accept: text/html',
				    ];

				    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
				    $host = $_SERVER['HTTP_HOST'];
				    $uri = str_replace("index.php","",$_SERVER['PHP_SELF']);

				    $url = $protocol.$host.$uri."scripts/".$file;
				    // echo $url;

				    // var_dump("<pre>", $_SERVER, $url); die();
				    curl_setopt_array($curl, [
				        CURLOPT_RETURNTRANSFER => 1,
				        CURLOPT_URL => $url,
				        // CURLOPT_USERAGENT => 'HGN Internship program task 1',
				        CURLOPT_HTTPHEADER => $headers
				    ]);

				    
				    // Send the request & save response to $resp
				    $response = curl_exec($curl);
				    // var_dump($response); die();
				    $results = strip_tags($response);
				    // dd($resp);
				    // var_dump($results); die();
				    // Close request to clear up some resources
				    curl_close($curl);
				} else {
					$results = "";
					$dir = __DIR__;
					// echo $dir;
					//Here The command should be read =ing th file as text
					$fp = fopen($dir."/scripts/".$file, "r+");
					// var_dump($fp);
					while ($line = stream_get_line($fp, 1024 * 1024, "\n")) {
					  $results .= $line;
					}
					fclose($fp);
				}
			} else {
				$results = "";
			}
		} else {
			$results = "";
		}
		$internPassed = [];
		$internPassedHTML = "";
		if(trim($results)){
			$rslt = "Pass";

			//Here Get the email from the string
			$emailsMatch = [];
			$user_email = "";
			$internPassed["file"] = $file;
			$internPassed['output'] = $results;
			if(preg_match("/\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+/", $results, $emailsMatch)){
				// var_dump($emailsMatch, "\n");

				foreach($emailsMatch AS $foundEmail){
					// var_dump($foundEmail, "<br />");
					if(preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", trim($foundEmail))){
						$user_email = trim($foundEmail);
						break;
					}
				}
			}
			// var_dump($results, "<br />"); continue;
			//Here Extract the Required Information 
			$removeHelloword = preg_split("/(Hello World, this is )/", $results);
			$results = $removeHelloword[1];
			//Here Get the intern full name from the string returned from its data
			$splittedInformation = preg_split("/(with HNGi7 ID)/", $results);
			// var_dump("\n", $splittedInformation, "\n");
			$full_name = str_replace("Hello World, this is ", "", trim($splittedInformation[0])) ;
			if(!trim($full_name) || preg_match("/[^a-zA-Z0-9_ ]/", $full_name)){
				$rslt = "Fail";
			}
			$remainingPart = $splittedInformation[1];

			$internPassedHTML = "Hello World, this is <b>".$full_name."</b> with ";
			$internPassed['name'] = $full_name;
			// var_dump($full_name);

			//Here Extraxt the Intern ID
			$splittedInformation = preg_split("/( using )/", $remainingPart);
			// var_dump($splittedInformation);
			$hgni7_id = trim($splittedInformation[0]);
			if(!trim($hgni7_id) || !preg_match("/^HNG-[0-9]{5}$/", $hgni7_id)){
				$rslt = "Fail";
			}
			$internPassedHTML .= "HNGi7 ID: <b>".$hgni7_id."</b> using ";
			$internPassed['id'] = $hgni7_id;

			$internPassed['email']		= $user_email;
			//remove the last strings informations
			$language = preg_split("/( for stage 2 task)/", trim($splittedInformation[1]))[0];
			// $language = str_replace(" for stage 2 task", "", trim($splittedInformation[1]));
			if(!trim($language)){
				$rslt = "Fail";
			}
			$internPassedHTML .= "language: <b>".$language."</b> for stage 2 task<br />TEST RESULT:<span style='font-weight: bold; font-size: 18px; color:".($$rslt)."'>".$rslt."</span> email: <b>".$user_email."<b><hr />";
			$internPassed['language'] 	= $language;
			
			$internPassed['status'] 	= $rslt;
		}
		// 
		if(count($internPassed) == 7){
			// var_dump("<pre>",$internPassed, "</pre>");
			$foundInterns[] = $internPassed;
		}

			$foundInternsHtml .= "<br />".$internPassedHTML;
		// }
		// echo "<hr /><hr /><hr />";
	}
}

if(isset($_GET['json'])){
	echo json_encode($foundInterns);
} else {
	echo $foundInternsHtml;
}
// echo "\n";
?>