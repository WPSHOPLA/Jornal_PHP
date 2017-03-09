<?php
function _q_cmp($a, $b) {
	if ($a[0] == $b[0])
		return 0;
	return ((float)$a[0] < (float)$b[0]) ? 1 : -1;
}

function locale_priorities($val) {
	$lang_list = array();
	foreach (explode(',', $val) as $lang) {
		$q = (float)1;
		if (preg_match('/(\S+)\s*;\s*q=([.0-9]+)/', $lang, $matches)) {
			$lang = $matches[1];
			$q = (float)$matches[2];
		}
		$lang = preg_replace('/[-_]([a-z][a-z])/ie', '"_".strtoupper("$1")', $lang);
		$lang_list[] = array($q, $lang);
	}
	usort($lang_list, '_q_cmp');
//	foreach ($lang_list as $lang) {
//		print_r($lang);
//	}
	return $lang_list;
}

function valid_locales($dir) {
	$ret = array();
	$dirh = opendir($dir);
	while (false !== ($de = readdir($dirh))) {
		if ($de[0] == '.')
			continue;
		$ret[] = $de;
	}
	closedir($dirh);
	return $ret;
}

function best_locale($header, $dir) {
	$wantedv = locale_priorities($header);
	$have = valid_locales($dir);
	foreach ($wantedv as $wanted) {
		if (in_array($wanted[1] . '.utf8', $have))
			return $wanted[1];
	}
	return null;
}

function set_language() {
	$lang_dir = $_SERVER['DOCUMENT_ROOT'] . '/_include/modules/locale';
	if (!@empty($_COOKIE['language']))
		$language = @$_COOKIE['language'];
	else
		$language = best_locale($_SERVER['HTTP_ACCEPT_LANGUAGE'], $lang_dir);
//echo best_locale($_SERVER['HTTP_ACCEPT_LANGUAGE'], $lang_dir);
	$language = getActualPage();
	if ($language == 'es')
		$language = 'es_ES';

	if ($language == 'pt')
		$language = 'pt_BR';
	//echo $language;
	//$language = 'es_ES'; echo $_SERVER['DOCUMENT_ROOT'];
	putenv("LC_ALL=$language.utf8");
	setlocale(LC_ALL, $language . '.utf8');

	$src_file = "$lang_dir/$language/LC_MESSAGES/messages.mo";
	$domain = 'messages';
	if (file_exists($src_file)) {
		$current_file = strftime("$lang_dir/$language/LC_MESSAGES/messages-%Y%m%d-%H%M%S.mo", filemtime($src_file));
		foreach (glob("$lang_dir/$language/LC_MESSAGES/messages-[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]-[0-9][0-9][0-9][0-9][0-9][0-9].mo") as $file) {
			if ($file == $current_file)
				continue;
			error_log(">> rm $file");
			unlink($file);
		}

		if (!file_exists($current_file)) {
			error_log(">> cp $src_file $current_file");
			copy($src_file, $current_file);
		}

		if (file_exists($current_file))
			$domain = basename($current_file, '.mo');
	}

	bindtextdomain($domain, $lang_dir);
	textdomain($domain);
	bind_textdomain_codeset($domain, 'UTF-8');
}

function getActualPage() {
	$hostname = $_SERVER['SERVER_NAME'];
	$hostname = explode(".", $hostname);
	
	if($hostname[0]=='www' || $hostname[0]=='licensecubecom')
		return "en";		
	else
		return $hostname[0];
	
	
	/*if ($hostname[0]=='www') {
		if($hostname[1] == 'mvg')
			return "en";
		else
			return "es";
	} else
		return $hostname[0];*/	
}

set_language();

//print_r(locale_priorities('en-US,en;q=0.8,es;q=0.6'));
//print_r(locale_priorities('es-ES,es;q=0.8'));

//print_r(valid_locales('/tmp/trad/locale'));


//print_r(best_locale($_SERVER['HTTP_ACCEPT_LANGUAGE'], $_SERVER['DOCUMENT_ROOT'] . '/_include/modules/locale'));
/*print_r(best_locale('en-US,en;q=0.8,es;q=0.6', '/tmp/trad/locale'));
print_r(best_locale('es-ES,es;q=0.8', '/tmp/trad/locale'));
print_r(best_locale('es-AR,es;q=0.8', '/tmp/trad/locale'));*/

