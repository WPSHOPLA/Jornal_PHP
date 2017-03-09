<?php

$NCACHES = 1;

$jsv = array();
$jsv[] = "../js/main.js";
$jsv[] = "../js/jquery.js";
$jsv[] = "../js/jquery.tools.js";
$jsv[] = "../js/jquery.jcarousel.min.js";
$jsv[] = "../js/cufon.js";
$jsv[] = "../js/proxima-nova-light.js";
$jsv[] = "../js/proxima-nova-regular.js";
$jsv[] = "../js/proxima-nova-semibold.js";
$jsv[] = "../js/proxima-nova-bold.js";
$jsv[] = "../js/easing.js";
$jsv[] = "../js/jquery.ba-bbq.min.js";
$jsv[] = "../js/jquery.ba-hashchange.min.js"; // http://benalman.com/projects/jquery-hashchange-plugin/
$jsv[] = "../js/colorbox.js"; // http://benalman.com/projects/jquery-hashchange-plugin/
//$jsv[] = "../js/local.js";

$js_cache = "../js/single2";

function rebuild_js_cache(&$jsv, $js_cache) {
	$_linesv = array();

	foreach ($jsv as $js)
		$_linesv[] = file_get_contents($js);
	
	if (file_put_contents($js_cache . '.tmp', $_linesv) !== false)
		rename($js_cache . '.tmp', $js_cache);
}

/*
// We have to check more than just filemtime, like if $NCACHES did change as well.
function check_js_cache(&$jsv, $js_cache) {

	$js_cache_mtime = @filemtime($js_cache);
	if ($js_cache_time === false) {
		rebuild_js_cache($jsv, $js_cache);
		return;
	}

	foreach ($jsv as $js) {
		$_mtime = filemtime($js);

		if ($_mtime >= $js_cache_mtime) {
			rebuild_js_cache($jsv, $js_cache);
			return;
		}
	}
}
*/

$icache = 0;
for ($i = 0; $i < sizeof($jsv); ++$i) {
	$_jsv[$icache][] = $jsv[$i];
	echo "$icache " . filesize($jsv[$i]) . " $jsv[$i]\n";
	$icache = ($icache+1) % $NCACHES;
}

for ($i = 0; $i < $NCACHES; ++$i)
	rebuild_js_cache($_jsv[$i], $js_cache . '-' . $i . '.js');

