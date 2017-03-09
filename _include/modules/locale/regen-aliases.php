<?php

ini_set('display_errors', 0);

require_once ( dirname(__FILE__) . '/../parse-accept-language.php');

$debug = @$_REQUEST['debug'] ? true : false;

//if ($debug)
//  echo '# _(/control-panels/solusvm-license.php): ',
//    _('/control-panels/solusvm-license.php'),
//    "\n";

define ('DIRHIER_DEPTH', 1);

function dirhier_traversal($dir, $cb, $opts = 0, $max_depth = 64) {
  $dh = opendir($dir);
  while (false !== ($file = readdir($dh))) {
    if ($file == '.')
      continue;
    if ($file == '..')
      continue;
    $full_path = $dir . '/' . $file;
    if (!is_dir($full_path)) {
      call_user_func($cb, $full_path);
      continue;
    }
    if (!$max_depth) {
      call_user_func($cb, $full_path);
      continue;
    }
    if ($opts & DIRHIER_DEPTH) {
      dirhier_traversal($full_path, $cb, $opts, $max_depth-1);
      call_user_func($cb, $full_path);
    } else {
      dirhier_traversal($full_path, $cb, $opts, $max_depth-1);
      call_user_func($cb, $full_path);
    }
  }
}

function fix_path($path) {
  return preg_replace('/\/\/*/', '/', $path);
}

function no_trailing_slash($path) {
  return preg_replace('/\/*$/', '', $path);
}

$IGNORE_PATHS = array('_include', 'wp-content', 'wp-includes', 'wp-admin');

function build_variants($x) {
  return array($x, "/$x", "/$x/", "$x/");
}

function translate_variants($variants) {
  foreach ($variants as $variant) {
    $ret = _($variant);
    if ($ret != $variant) {
      if ($debug)
	echo "# variant=$variant -> $ret\n";
      return $ret;
    }
  }
  if ($debug)
    echo "# variant=$variant -> null\n";
  return null;
}

function addAlias($path) {
  // strip document root
  global $IGNORE_PATHS;
  if (!is_dir($path) && !preg_match('/\.(html|php)$/', $path))
    return;
  $drpathv = explode('/', fix_path($_SERVER['DOCUMENT_ROOT']));
  $pathv = explode('/', fix_path($path));
  while (sizeof($drpathv) && ($drpathv[0] == $pathv[0])) {
    array_shift($drpathv);
    array_shift($pathv);
  }

  $translated = array();
  $orig = array();

  if ($debug)
    echo "# Processing $path\n";

  foreach ($pathv as $ipath) {

    if (in_array($ipath, $IGNORE_PATHS))
      return;

    if ($ipath == 'index.php')
      return;

    $orig[] = $ipath;

    $itranslated = translate_variants(build_variants($ipath));

    if ($itranslated == null) {

      $partial_orig = implode('/', $orig);

      $itranslated = translate_variants(build_variants($partial_orig));

      if ($itranslated == null) { // ok, we give up
	$itranslated = $ipath;
	if ($debug) {
	  echo "# giving up on $ipath\n";
	  echo "# $ipath -> $itranslated\n";
	}
	$translated[] = $itranslated;
      } else {
	if ($debug)
	  echo "# $partial_orig -> $itranslated\n";
	$translated = array($itranslated);
      }
    } else {
      if ($debug)
	echo "# $ipath -> $itranslated\n";
      $translated[] = $itranslated;
    }

  }

  $translated = fix_path('/'.implode('/', $translated));
  $orig = '/'.implode('/', $pathv);

  if ($translated != $orig)
    echo "Alias " . no_trailing_slash($translated) . "\t\t" .
      fix_path($_SERVER['DOCUMENT_ROOT'] . $orig) .
      "\n";
}

dirhier_traversal($_SERVER['DOCUMENT_ROOT'], 'addAlias', DIRHIER_DEPTH);
