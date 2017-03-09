<?php

ini_set('display_erros', 1);

include_once("config.php");
include_once("general.php");
include_once("ubersmith.php");

function product_fields() {
	global $ubersmith;
	$planv = $ubersmith->ServicePlans();

	print_r($planv);
}

product_fields();

