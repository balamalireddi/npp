<?php
error_reporting(E_ALL);
session_start();

$userName = $_POST['instA'];
$instB = $_POST['instB'];
$instC = $_POST['instC'];
$instD = $_POST['instD'];
$instE = $_POST['instE'];
$instF = $_POST['instF'];
$instG = $_POST['instG'];
$instH = $_POST['instH'];
//$dpnFilename = $_POST['dpnFilename'];
//$dpnFilename = $userName;
$tempFile = $_POST['tempFile'].'.html';
 
$pageName = $userName.rand(); 
$newFileName = './pf/'.$pageName.".html";
$html = file_get_contents("../templates/".$tempFile); 
$search = array('InstructionA-Data', 'InstructionB-Data', 'InstructionC-Data', 'InstructionD-Data', 'InstructionE-Data', 'InstructionF-Data', 'InstructionG-Data', 'InstructionH-Data'); 
$replace = array($userName, $instB, $instC, $instD, $instE, $instF, $instG, $instH); 
$newFileContent = str_replace($search, $replace, $html);

if (trim($instC) != ""){
	$newFileContent = str_replace('id="InstructionC-Div" style="display:none;"', 'id="InstructionC-Div" style="display:visible;"', $newFileContent);
}

if (trim($instD) != ""){
	$newFileContent = str_replace('id="InstructionD-Div" style="display:none;"', 'id="InstructionD-Div" style="display:visible;"', $newFileContent);
}

if (trim($instE) != ""){
	$newFileContent = str_replace('id="InstructionE-Div" style="display:none;"', 'id="InstructionE-Div" style="display:visible;"', $newFileContent);
}

if (trim($instF) != ""){
	$newFileContent = str_replace('id="InstructionF-Div" style="display:none;"', 'id="InstructionF-Div" style="display:visible;"', $newFileContent);
}

if (trim($instG) != ""){
	$newFileContent = str_replace('id="InstructionG-Div" style="display:none;"', 'id="InstructionG-Div" style="display:visible;"', $newFileContent);
}

if (trim($instH) != ""){
	$newFileContent = str_replace('id="InstructionH-Div" style="display:none;"', 'id="InstructionH-Div" style="display:visible;"', $newFileContent);
}

if(file_put_contents($newFileName,$newFileContent)!=false){
    //echo "File created (".basename($newFileName).")";
}else{
    //echo "Cannot create file (".basename($newFileName).")";
}

function getCurrDirectory(){
	$url = $_SERVER['REQUEST_URI']; //returns the current URL
	$parts = explode('/',$url);
	$dir = $_SERVER['SERVER_NAME'];
	for ($i = 0; $i < count($parts) - 1; $i++) {
	 $dir .= $parts[$i] . "/";
	}
	return $dir;
}

//$localURL = 'http://localhost/dpnc-v0.903/pf/'.$pageName.'.html';
$dynaUrl = getCurrDirectory().'pf/'.$pageName.'.html';

//echo $dynaUrl.'<br>';

//gets the data from a URL  
function get_tiny_url($url)  {  
	$ch = curl_init();  
	$timeout = 5;  
	curl_setopt($ch,CURLOPT_URL,'http://tinyurl.com/api-create.php?url='.$url);  
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);  
	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);  
	$data = curl_exec($ch);  
	curl_close($ch);  
	return $data;  
}

//echo $new_url.'<br>';
//echo $dynaUrl.'<br>';

//session Handling
$_SESSION['tinyURL']=get_tiny_url($dynaUrl);
$_SESSION['directURL']=$dynaUrl;

//echo $_SESSION['tinyURL'].'<br>';
//echo $_SESSION['directURL'].'<br>';
header("Location:done.php"); /* Redirect browser */
exit();
?>