<?php 

include_once("../../_include/modules/config.php");
include_once("../../_include/modules/general.php");
include_once("../../_include/modules/overlay-boxes.php");
include_once("../../_include/modules/ubersmith.php");

$planv = $ubersmith->ServicePlans();
usort($planv, 'ordenar2');
//var_dump($planv);
function ordenar($a, $b) {   
  if (strcasecmp($a->title, $b->title) == 0) return 0;
  if(strcasecmp($a->title, $b->title) < 1)
  	return -1;
  else
  	return 1;
}

function ordenar2($a, $b) {   
  if ($a->lc_product_type == $b->lc_product_type) return 0;
  return ($a->lc_product_type < $b->lc_product_type) ? 1 : -1;
}

$plan_typev = array();
foreach ($planv as $plan) {
        $plan_typev[$plan->lc_product_type][] = $plan;
}
?>