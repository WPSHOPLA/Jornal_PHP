<?php

header ('Content-Type: image/png');

//require_once 'fix-include.php';
//mvg_add_include_path(dirname(__FILE__).'/../../');
include 'ubersmith.php';

if (time() - filemtime(UBERSMITH_PLANLISTING_CACHE) < 1)
  exit;

$lock_fh = fopen(UBERSMITH_PLANLISTING_CACHE . '.LOCK', 'w+');
if (!flock($lock_fh, LOCK_EX | LOCK_NB))
  exit;

$ubersmith->ServicePlans(true);

flock($lock_fh, LOCK_UN);

fclose($lock_fh);
