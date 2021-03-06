<?php include_once("parse-accept-language.php"); ?>
<?php

// GENERAL CONFIGURATION SETTINGS

	$site_name = _("LicenseCube - The Control Panel Licensing Leader");
	$author = "LicenseCube LLC";
	$copyright = _(date("Y")." LicenseCube. All Rights Reserved");
	$site_dir = _("http://www.licensecube.com");
	
	// CDN PROVIDED FILES 	
		$img_dir = "http://cdn.licensecube.com/_include/gui";
		$js_dir = "http://cdn.licensecube.com";
		$css_dir = "http://cdn.licensecube.com";
	
// UBERSMITH CONFIGURATION SETTINGS BELOW

	define('UBERSMITH_USER', 'LiCeNsECuBe');
	define('UBERSMITH_PASS', 'xtr7Hnpf4vnxMZGrtrXx7z3krbVxkc4K');
	define('UBERSMITH_BASEURL', 'https://my.licensecube.com/api/');
	define('UBERSMITH_BRANDID', 2);
	
	global $UBERSMITH_SERVICEPLAN_FIELDS;
	
	$UBERSMITH_SERVICEPLAN_FIELDS = array('plan_id', 'title', 'code', 'price',
	 'active', 'category', 'lc_license_dedicated', 'lc_product_type',
	'lc_url_basename', 'active_licensing', 'lc_requires_ip', 'lc_requires_domain',
	'lc_requires_license_id', 'lc_license_change_action', 'lc_license_id',
	'lc_license_comment_message');

	$discount_tiers = array(
        array(/* 'charged_min' => 10, */ 'pack_count' => 5, 'discount' => 2, 'discount_type' => 'perc', 'credit' => 0),
        array(/* 'charged_min' => 20, */ 'pack_count' => 11, 'discount' => 3, 'discount_type' => 'perc', 'credit' => 0),
        array(/* 'charged_min' => 30, */ 'pack_count' => 21, 'discount' => 4, 'discount_type' => 'perc', 'credit' => 15),
        array(/* 'charged_min' => 40, */ 'pack_count' => 31, 'discount' => 5, 'discount_type' => 'perc', 'credit' => 30),
);
