<?php

require_once 'LiveChat_API.php';

try {

	$API = new LiveChat_API();

	print_r($API->status->get());

} catch (Exception $e) {

	error_log("ERROR getting LiveChat status (" . $e->getCode() . '): ' . $e->getMessage());
	
}

