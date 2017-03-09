<?php

ini_set('include_path', ini_get('include_path').':'.$_SERVER['DOCUMENT_ROOT']);

require_once('_include/classes/Ubersmith.class.php');
require_once('config.php');

global $ubersmith;

$ubersmith = new UberSmith(array(
	'user' => UBERSMITH_USER,
	'pass' => UBERSMITH_PASS,
	'baseURL' => UBERSMITH_BASEURL,
	'brand_id' => UBERSMITH_BRANDID
));

