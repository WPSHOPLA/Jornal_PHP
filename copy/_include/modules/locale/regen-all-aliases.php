<?php

// wget -O - http://licensecubecom.managebugs.net/_include/modules/locale/regen-all-aliases.php
// generates ~/aliases-es.conf, ~/aliases-pt.conf, etc.
// apache restart

$domain = preg_replace('/^www\./', '', $_SERVER['SERVER_NAME']);

$locales = array('es','pt');

foreach ($locales as $lang) {

	$url = "http://$lang.$domain/_include/modules/locale/regen-aliases.php";
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept-Language: $lang"));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HEADER, false);

	$content = curl_exec($ch);

	if (($code = curl_getinfo($ch, CURLINFO_HTTP_CODE)) != 200)
		echo "Error getting aliases for lang=$lang (url=$url, response code=$code, error=",
			curl_error($ch), ")\n";

	else
		file_put_contents($_SERVER['DOCUMENT_ROOT']."/../aliases-$lang.conf", $content);
	// /usr/bin/wget -O ~licensec/aliases-es.conf --header 'Accept-Language: es,es-ar' http://es.licensecubecom.managebugs.net/_include/modules/locale/regen-aliases.php
}

