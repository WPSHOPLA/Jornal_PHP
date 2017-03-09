<?
require_once "../modules/parse-accept-language.php";
define('EMAIL_VALIDATION', 'email-validation');
define('IP_VALIDATION', 'ip-validation');
define('NAME_VALIDATION', 'name-validation');
define('ADDRESS_VALIDATION', 'address-validation');
define('PHONE_VALIDATION', 'phone-validation');
define('TEXTAREA_VALIDATION', 'textarea-validation');
define('LIST_VALIDATION', 'list-validation');
define('DOMAIN_VALIDATION', 'ValidateDomain');
define('LICENSEID_VALIDATION', 'ValidateLicenseID');



$ip = $_SERVER['REMOTE_ADDR'] ;
$navegador = $_SERVER['HTTP_USER_AGENT'];

$forms = array(
	'9151256b9beb0df69a0d35b484365fe1' =>  array(
		'fields' => array(
			'name' => array("validate" => NAME_VALIDATION, "oblig" => 1, "label" => "First Name: ", "title" => "== CLIENT DATA ==\n\n"),
			'lastname' => array("validate" => NAME_VALIDATION, "oblig" => 1, "label" => "Last Name: ", "title" => ""),
			'email' => array("validate" => EMAIL_VALIDATION, "oblig" => 1, "label" => "Email Address: ", "title" => ""),
			'phone' => array("validate" => PHONE_VALIDATION, "oblig" => 0, "label" => "Phone Number: ", "title" => ""),
			'department' => array("validate" => LIST_VALIDATION, "oblig" => 1, "label" => "Department: ", "title" => ""),
			'message' => array("validate" => TEXTAREA_VALIDATION, "oblig" => 1, "label" => "", "title" => "\n== CLIENT MESSAGE ==\n\n")
		),
		'subject' => array("Sales Question" => _("LicenseCube Sales"),
						 "Support Question" => _("LicenseCube Support"),
						 "Billing Question" => _("LicenseCube Billing"),
						 "Partner Inquiry" => _("New Partner Contact"),
						 "Abuse Desk" => _("Possible License Abuse")							
						),
		'to' => array("Sales Question" => _("sales@licensecube.com"),
						 "Support Question" => _("support@licensecube.com"),
						 "Billing Question" => _("billing@licensecube.com"),
						 "Partner Inquiry" => _("partners@licensecube.com"),
						 "Abuse Desk" => _("abuse@licensecube.com")							
						),
		'default_body' => "== CLIENT INFORMATION ==\n\nBrowser Type: ".$navegador."\nClient IP Address: ".$ip."\n\n"
	),
	'9151256b9beb0df69a0d35b484365fe4' =>  array(
		'fields' => array(
			'email' => array("validate" => EMAIL_VALIDATION, "oblig" => 1, "label" => "Email Address: ", "title" => ""),
			'password' => array("validate" => NAME_VALIDATION, "oblig" => 1, "label" => "Password: ", "title" => ""),
			'license-type' => array("validate" => LIST_VALIDATION, "oblig" => 1, "label" => "Type of License: ", "title" => ""),
			'license-id' => array("validate" => LICENSEID_VALIDATION, "oblig" => 0, "label" => "License ID: ", "title" => ""),
			'current-ip' => array("validate" => IP_VALIDATION, "oblig" => 0, "label" => "Current IP Address: ", "title" => ""),
			'new-ip' => array("validate" => IP_VALIDATION, "oblig" => 0, "label" => "New Requested IP Address: ", "title" => ""),	
			'current-domain' => array("validate" => DOMAIN_VALIDATION, "oblig" => 0, "label" => "Current Domain: ", "title" => ""),
			'new-domain' => array("validate" => DOMAIN_VALIDATION, "oblig" => 0, "label" => "New Requested Domain: ", "title" => ""),
			
		),
		'subject' => "Change License IP",
		
		'to' => "agpucci@gmail.com",
		
		'default_body' => "== CLIENT INFORMATION ==\n\nBrowser Type: ".$navegador."\nClient IP Address: ".$ip."\n\n"
	),
	'9151256b9beb0df69a0d35b484365fe5' =>  array(
		'fields' => array(
			'email' => array("validate" => EMAIL_VALIDATION, "oblig" => 1, "label" => "Email Address: ", "title" => ""),
			'password' => array("validate" => NAME_VALIDATION, "oblig" => 1, "label" => "Password: ", "title" => ""),
			'license-type' => array("validate" => LIST_VALIDATION, "oblig" => 1, "label" => "Type of License: ", "title" => ""),
			'license-id' => array("validate" => LICENSEID_VALIDATION, "oblig" => 0, "label" => "License ID: ", "title" => ""),
			'current-ip' => array("validate" => IP_VALIDATION, "oblig" => 0, "label" => "Current IP Address: ", "title" => ""),			
			'current-domain' => array("validate" => DOMAIN_VALIDATION, "oblig" => 0, "label" => "Current Domain: ", "title" => ""),			
			
		),
		'subject' => "Cancel License",
		
		'to' => "agpucci@gmail.com",
		
		'default_body' => "== CLIENT INFORMATION ==\n\nBrowser Type: ".$navegador."\nClient IP Address: ".$ip."\n\n"
	),
	'9151256b9beb0df69a0d35b484365fe10' =>  array(
		'fields' => array(
			'name-ticket' => array("validate" => NAME_VALIDATION, "oblig" => 1, "label" => "Name: ", "title" => ""),
			'coment-ticket' => array("validate" => NAME_VALIDATION, "oblig" => 0, "label" => "Coment: ", "title" => ""),
			'lc_sess_id' => array("validate" => NAME_VALIDATION, "oblig" => 0, "label" => "Client ID: ", "title" => ""),
			'pack_id' => array("validate" => LICENSEID_VALIDATION, "oblig" => 0, "label" => "Pack ID: ", "title" => ""),
		),
		'subject' => "Ticket",
		
		'to' => "support@licensecube.com",
		
		'default_body' => "== CLIENT INFORMATION ==\n\nBrowser Type: ".$navegador."\nClient IP Address: ".$ip."\n\n"
	)
);


?>
