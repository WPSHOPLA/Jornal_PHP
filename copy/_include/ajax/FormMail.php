<?
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 10 Jul 2000 02:00:00 GMT');
header('Content-type: application/json');
header('Access-Control-Allow-Origin: http://es.licensecube.com/');
require_once "FormMail-config.php";
require_once "FormMail-validated.php";
require_once "../classes/class.RateLimit.php";


//Valido que no halla enviado demaciados correos juntos
if(RateLimit::hit($ip,$_POST['form-type'], 4, "min")) 
{
	//echo json_encode(array("status"=>"error-ratelimit"));
	echo json_encode(array("status"=>"error-ratelimit"));
	LogError("Rate Limit");
	die();
}



//Verifico que la clave exista
$keys = array_keys($_POST);
sort($keys);
$hash = "";
$noId = 1;
foreach($forms as $clave => $field)
{
	if ($_POST['id']==$clave)
	{
		$noId=1;
		$hash = $_POST['id'];
	}
}
if ($noId==0)
{
	echo json_encode(array("status"=>"errorid"));
	LogError("Not valid ID");
	die();
}



$fields = $forms[$hash]['fields'];
$message = "";
$form_error=array();
$form_status = array();
$validform = true;


$message .= $forms[$hash]['default_body'];

//Recorro todos los campos y realizo verificacion
foreach($_POST as $key => $value){
	if($key == "id" or $key == "submit" or $key == "sub-to" or $key == "contactform" or $key == "change") continue;

	$validated = true;
	if($fields[$key]['oblig']==1 && $value==''  )
		$validated=false;
	elseif($fields[$key]['oblig']==0 && $value!='' || $fields[$key]['oblig']==1 && $value!='')
		{
		if($fields[$key]['validate']==EMAIL_VALIDATION){
			$validated = ValidateEmail($value);
		} else if($fields[$key]['validate']==IP_VALIDATION){
			$validated = ValidateIP($value);
		} else if($fields[$key]['validate']==NAME_VALIDATION){
			$validated = ValidateName($value);
		} else if($fields[$key]['validate']==ADDRESS_VALIDATION){
			$validated = ValidateAddress($value);
		} else if($fields[$key]['validate']==PHONE_VALIDATION){
			$validated = ValidatePhone($value); 
		} else if($fields[$key]['validate']==TEXTAREA_VALIDATION){
			$validated = ValidateTextArea($value);
		} else if($fields[$key]['validate']==LIST_VALIDATION){
			$validated = ValidateList($value);
			
		}
		
	}
	if($fields[$key]['oblig']==0 && $value=='' || $fields[$key]['oblig']==0 && $value==0)
		$validform = true;
		
	if($validated){
		if($key == 'message') $message .= "\n== CLIENT MESSAGE ==\n\n".$value."\n";
		else {
			if ($fields[$key]['title']!='')
			$message .= $fields[$key]['title'];
		$message .= $fields[$key]['label'].$value."\n";
		}
	} else {
		$validform = false;
		$form_error[] = $key;
		
	}
}


//Envio mensaje de error
if(!$validform)
{		
	echo json_encode($form_status = array("status"=>"error", "inputError"=>$form_error));
	LogError("Field not valid; ".$form_error."}");
	die();
}


//subject and to
if (isset($_POST['department']))
{
	$subject = $forms[$hash]['subject'][$_POST['department']];
	$to      = $forms[$hash]['to'][$_POST['department']];
		
}
else
{
	$subject = $forms[$hash]['subject'];
	$to      = $forms[$hash]['to'];

}

//Envio correo
require("../phpmailer/class.phpmailer.php");
$mail = new PHPMailer();
$mail->Host = "localhost";
$mail->From = $_POST['email'];
$mail->FromName = $_POST['name']." ".$_POST['lastname'];
$mail->AddReplyTo = $_POST['email'];
$mail->Subject = $subject;
$mail->AddCustomHeader = "Errors-To: support@licensecube.com";
$mail->AddAddress($to,"Licenses Cube");
$message = strip_tags($message);
$body  = $message;
$mail->Body = $body;

if($mail->Send())
{
	echo json_encode(array("status"=>"ok"));
	RateLimit::hit($ip,$_POST['form-type'], 4, "min");
}
else
	echo json_encode(array("status"=>"errorsend"));


?>