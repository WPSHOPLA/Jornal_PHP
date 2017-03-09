<?

function LogError($msg){
	$errormessage = "POST:\n";
	foreach($_POST as $key => $value){
		$errormessage .= $key.": ".$value."\n";
	}

	$errormessage .= "\nSERVER:\n";
	foreach($_SERVER as $key => $value){
		$errormessage .= $key.": ".$value."\n";
	}

	$errormessage = "ERROR: ".$msg."\n%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%\n".$errormessage."%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%\n\n";
	file_put_contents("/var/www/formmail/log.txt", $errormessage, FILE_APPEND);
}

function ValidateIP($value){
	if( count(explode(".",$value)) != 4 ){
		return false;
	} else if("192.168."== substr($value, 0, strlen("192.168."))){
		return false;
	} else if("10."== substr($value, 0, strlen("10."))){
		return false;
	} else if("127.0.0.1" == $value){
		return false;
	} else {
		return true;
	}
}

function ValidateEmail($value){
	$regexp = "/^[^0-9][A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/";

	if (preg_match($regexp, $value)) {
		return true;
	} else {
		return false;
	}
}

function ValidateName($value){
	return strlen($value)>3;
}

function ValidateAddress($value){
	return strlen($value)>8;
}

function ValidatePhone($numero)  
{  
  if (preg_match('/^\(?[0-9]{3}\)?|[0-9]{3}[-. ]? [0-9]{3}[-. ]?[0-9]{4}$/', $numero)) {
    return true;
	} else {
		return false;
	}
} 

function ValidateTextArea($value){
	if (strlen($value)>5 && strlen($value)<500)
		return true;
	else
		return false;
	
}
function ValidateList($value){
	if($value!='' || $value!=0)
		return 1;
	else
		return 0;
}
function ValidateDomain($value){

	if (preg_match('/[^-_.a-z0-9A-Z]/', $value)) {
		return false;
	} else {
		return true;
	}	
}
function ValidateLicenseID($value){
	if (preg_match('/^([-_.a-z0-9A-Z])*$/', $url)) {
		echo "Your url is ok.";
	} else {
		echo "Wrong url.";
	}
}
?>

