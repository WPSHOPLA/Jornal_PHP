<?php

switch ($_SERVER['QUERY_STRING']) {
	case 'vps':
		$license_type = 'VPS';
		$LicenseType = 'VPS';
		break;
	case 'dedicated':
	 case 'dedicada':
		$license_type = 'dedicated';
		$LicenseType = 'Dedicated';
		break;	
	default:
		$license_type = '';
		break;
}

function _get_price_from_code($code) {
	global $ubersmith;
	$plan = $ubersmith->getPlanByCode($code);
	if ($plan === null) {
		error_log("ERROR getting service plans!!");
		throw "Error getting service plans";
	}
	return $plan->price;
}

function _get_lowest_price_from_codes($vps_code, $dedicated_code) {
	global $ubersmith;
	$plan = $ubersmith->getPlanByCode($code);
	if ($plan === null) {
		error_log("ERROR getting service plans!!");
		throw "Error getting service plans";
	}
	return $plan->price;
}

function order_button() {
	global $ubersmith;
	$active = 1;
	foreach (func_get_args() as $code) {
		if ($ubersmith->getPlanByCode($code)->active_licensing == 'no_order') {
			$active = 0;
			break;
		}
	}
	return $active ? 'order-now-large-'.getActualPage().'.png' : 'unavailable-large-'.getActualPage().'.png';
}

function order_link_button() {
	global $ubersmith;
	global $img_dir;
	global $order_process_dirname;
	global $global_plan;
	global $other_plan_codes;

	$args = func_get_args();
	//echo "args: " . sizeof($args);
	if (sizeof($args) == 1) { // new fashion
		$alt = $args[0];
		$link = $order_process_dirname . '/' . $global_plan->lc_url_basename;
		
		if (!preg_match('/_vps/', $link)) {
			if (array_key_exists('vps', $_REQUEST)) {
				$link .= '?vps';
			} else if (!preg_match('/_license/', $link)) {
				$link .= '_license';
			}

		} else if (!preg_match('/_dedicated/', $link)) {
			if (array_key_exists('dedicated', $_REQUEST)) {
				$link .= '?dedicated';
			} else if (!preg_match('/_license/', $link)) {
				$link .= '_license';
			}

		}
		//Spanish Version
		if(getActualPage()=='es'){
			$link = $order_process_dirname . '/';
			$link = str_replace("my", "es.my", $link);
			$link_license =  str_replace("dedicated", "dedicada", $global_plan->lc_url_basename);
			$link_license =  str_replace("_license", "", $link_license);

			
			if (!preg_match('/_vps/', $link)) {
			if (!preg_match('/_license/', $link)) {
				$link .= 'licencia_';
			}

			} else if (!preg_match('/_dedicated/', $link)) {
				if (!preg_match('/_license/', $link)) {
					$link .= 'licencia_';
				}	
	
			}
			$link.=$link_license;
				
		
		}
		
		
		$link=str_replace("_vps","", $link);
		$link=str_replace("_dedicated","", $link);
		$link=str_replace("_license","", $link);	
		$link=str_replace("licencia_","", $link);		

		//echo "order-now-link=$link";

		if ($global_plan->active_licensing != 'no_order') {
			//return "<a rel=\"nofollow\" href=\"$link\"><img src=\"$img_dir/buttons/order-now-large-".getActualPage().".png\" width=\"137\" height=\"33\" alt=\"$alt\" /></a>";
			return "  <a rel=\"nofollow\" href=\"$link\"  class=\"button-orange\">"._('ORDER NOW')."<span></span></a>";

		} else {
			//return "<img src=\"$img_dir/buttons/unavailable-large-".getActualPage().".png\" width=\"137\" height=\"33\" alt=\"$alt\" />";
			return "  <a rel=\"nofollow\" href=\"javascript: return false;\"  class=\"button-grey\">"._('Unavailable')."<span></span></a>";

		}
	}

	$link = array_shift($args);
	$alt = array_shift($args);
	$active = 1;

	foreach ($args as $code) {
		if ($ubersmith->getPlanByCode($code)->active_licensing == 'no_order') {
			$active = 0;
			break;
		}
	}

	if ($active) {
		//return "<a href=\"$link\"><img src=\"$img_dir/buttons/order-now-large-".getActualPage().".png\" width=\"137\" height=\"33\" alt=\"$alt\" /></a>";
		return "  <a rel=\"nofollow\" href=\"$link\"  class=\"button-orange\">"._('ORDER NOW')."<span></span></a>";
	}
	//return "<img src=\"$img_dir/buttons/unavailable-large-".getActualPage().".png\" width=\"137\" height=\"33\" alt=\"$alt\" />";
	return "  <a rel=\"nofollow\" href=\"javascript: return false;\"  class=\"button-grey\">"._('Unavailable')."<span></span></a>";
}

if (!function_exists('min')) {
	function min($a, $b) { return $a < $b ? $a : $b; }
}

//////////////////////////////////////////////////////////////////////////////
//
//  Control panels pricings
//

function price_cpanel_vps_monthly() { return _get_price_from_code('LIN0'); }
function price_cpanel_dedicated_monthly() { return _get_price_from_code('LIN14'); }
function price_cpanel_lowest() { return min(price_cpanel_vps_monthly(), price_cpanel_dedicated_monthly()); }

function price_plesk_vps_monthly() { return _get_price_from_code('LIN72'); }
function price_plesk_dedicated_monthly() { return _get_price_from_code('LIN73'); }
function price_plesk_lowest() { return min(price_plesk_vps_monthly(), price_plesk_dedicated_monthly()); }

function price_directadmin_vps_monthly() { return _get_price_from_code('LIN5'); }
function price_directadmin_dedicated_monthly() { return _get_price_from_code('LIN15'); }
function price_directadmin_lowest() { return min(price_directadmin_vps_monthly(), price_directadmin_dedicated_monthly()); }

function price_softaculous_vps_monthly() { return _get_price_from_code('LIN10'); }
function price_softaculous_dedicated_monthly() { return _get_price_from_code('LIN16'); }
function price_softaculous_lowest() { return min(price_softaculous_vps_monthly(), price_softaculous_dedicated_monthly()); }

function price_fantastico_vps_monthly() { return _get_price_from_code('LIN9'); }
function price_fantastico_dedicated_monthly() { return _get_price_from_code('LIN17'); }
function price_fantastico_lowest() { return min(price_fantastico_vps_monthly(), price_fantastico_dedicated_monthly()); }

function price_interworx_vps_monthly() { return _get_price_from_code('LIN48'); }
function price_interworx_dedicated_monthly() { return _get_price_from_code('LIN47'); }
function price_interworx_lowest() { return min(price_interworx_vps_monthly(), price_inetworx_dedicated_monthly()); }

function price_installatron_vps_monthly() { return _get_price_from_code('LIN44'); }
function price_installatron_dedicated_monthly() { return _get_price_from_code('LIN45'); }
function price_installatron_lowest() { return min(price_installatron_vps_monthly(), price_installatron_dedicated_monthly()); }

function price_solusvm_vps_monthly() { return _get_price_from_code('LIN46'); }
function price_solusvm_lowest() { return min(price_solusvm_vps_monthly(), 
price_solusvm_dedicated_monthly()); }

function price_ispmanager_vps_monthly() { return _get_price_from_code('LIN51'); }
function price_ispmanager_dedicated_monthly() { return _get_price_from_code('LIN51'); }
function price_ispmanager_lowest() { return min(price_ispmanager_vps_monthly(), price_ispmanager_dedicated_monthly()); }

function price_hostingsuite_vps_monthly() { return _get_price_from_code('LIN80'); }
function price_hostingsuite_dedicated_monthly() { return _get_price_from_code('LIN81'); }
function price_hostingsuite_lowest() { return min(price_hostingsuite_vps_monthly(), price_hostingsuite_dedicated_monthly()); }

//function price_cpenkompass_vps_monthly() { return _get_price_from_code('LINX'); }
function price_cpenkompass_dedicated_monthly() { return _get_price_from_code('LIN11'); }
//function price_cpenkompass_lowest() { return min(price_cpenkompass_vps_monthly(), price_cpenkompass_dedicated_monthly()); }

//function price_virtuozzo_vps_monthly() { return _get_price_from_code('LINX'); }
function price_virtuozzo_dedicated_monthly() { return _get_price_from_code('LIN74'); }
//function price_virtuozzo_lowest() { return min(price_virtuozzo_vps_monthly(), price_virtuozzo_dedicated_monthly()); }

//////////////////////////////////////////////////////////////////////////////
//
//  Additional licensings prices
//

function price_sitebuilder_vps_monthly() { return _get_price_from_code('LIN76'); }
function price_sitebuilder_dedicated_monthly() { return _get_price_from_code('LIN76'); }
function price_sitebuilder_lowest() { return min(price_sitebuilder_vps_monthly(), price_sitebuilder_dedicated_monthly()); }

function price_rvskins_vps_monthly() { return _get_price_from_code('LIN23'); }
function price_rvskins_dedicated_monthly() { return _get_price_from_code('LIN24'); }
function price_rvskins_lowest() { return min(price_rvskins_vps_monthly(), price_rvskins_dedicated_monthly()); }

function price_rvsitebuilder_vps_monthly() { return _get_price_from_code('LIN21'); }
function price_rvsitebuilder_dedicated_monthly() { return _get_price_from_code('LIN22'); }
function price_rvsitebuilder_lowest() { return min(price_rvsitebuilder_vps_monthly(), price_rvsitebuilder_dedicated_monthly()); }

function price_whmextra_vps_monthly() { return _get_price_from_code('LIN8'); }
function price_whmextra_dedicated_monthly() { return _get_price_from_code('LIN8'); }
function price_whmextra_lowest() { return min(price_whmextra_vps_monthly(), price_whmextra_dedicated_monthly()); }

function price_mivamerchant_vps_monthly() { return _get_price_from_code('LIN84'); }
function price_mivamerchant_dedicated_monthly() { return _get_price_from_code('LIN84'); }
function price_mivamerchant_lowest() { return min(price_mivamerchant_vps_monthly(), price_mivamerchant_dedicated_monthly()); }

function price_whmsonic_vps_monthly() { return _get_price_from_code('LIN25'); }
function price_whmsonic_dedicated_monthly() { return _get_price_from_code('LIN27'); }
function price_whmsonic_lowest() { return min(price_whmsonic_vps_monthly(), price_whmsonic_dedicated_monthly()); }

function price_cloudlinux_dedicated_monthly() { return _get_price_from_code('LIN86'); }
function price_cloudlinux_lowest() { return min(price_cloudlinux_vps_monthly(), price_cloudlinux_dedicated_monthly()); }

function price_billmanager_vps_monthly() { return _get_price_from_code('LIN87'); }
function price_billmanager_dedicated_monthly() { return _get_price_from_code('LIN87'); }
function price_billmanager_lowest() { return min(price_billmanager_vps_monthly(), price_billmanager_dedicated_monthly()); }

function price_hostbill_vps_monthly() { return _get_price_from_code('LIN88'); }
function price_zopim_vps_monthly() { return _get_price_from_code('LIN900'); }

//////////////////////////////////////////////////////////////////////////////
//
//
//

function lowest_price_plan_code() {
	global $ubersmith;

	$args = func_get_args();

	if (is_array($args[0]))
		$args = $args[0];

	$plan = null;
	foreach ($args as $code) {
		$iplan = $ubersmith->getPlanByCode($code);
		if (($plan == null) || (($iplan->price < $plan->price) && ($iplan->active_licensing != 'no_order')))
			$plan = $iplan;
	}

	if ($plan === null)
		$plan = $ubersmith->getPlanByCode($args[0]);

	return $plan->code;
}

function global_plan_price($code) {
	global $ubersmith;

	return  $ubersmith->getPlanByCode($code)->price;
}

$global_plan = null;
$other_plan_codes = array();

function get_plancode_from_enlish_url() {
	$uri = $_SERVER['REQUEST_URI'];

	if (array_key_exists('vps', $_REQUEST)) {
		$uri = $_SERVER['SCRIPT_NAME'] . '?vps';
	} else if (array_key_exists('dedicated', $_REQUEST)) {
		$uri = $_SERVER['SCRIPT_NAME'] . '?dedicated';
	} else if (array_key_exists('dedicada', $_REQUEST)) {
		$uri = $_SERVER['SCRIPT_NAME'] . '?dedicada';
	} else {
		$uri = $_SERVER['SCRIPT_NAME'];
	}

	switch ($uri) {
		case '/additional-licenses/miva-merchant-license.php':
		case '/additional-licenses/miva-merchant-license.php?dedicated':
		case '/additional-licenses/miva-merchant-license.php?vps':
			$code = 'LIN84';
			break;

		case '/additional-licenses/parallels-web-presence-builder-license.php':
			$code = array('LIN76');
			break;
		
		case '/additional-licenses/rvsitebuilder-license.php':
			$code = array('LIN21', 'LIN22');
			break;

		case '/additional-licenses/rvsitebuilder-license.php?dedicated':
			$code = 'LIN22';
			break;
		
		case '/additional-licenses/trendy-sitebuilder-license.php':
			$code = 'LIN90';
			break;
		
		case '/additional-licenses/zopim-license.php':
			$code = 'LIN95';
			break;

		case '/additional-licenses/rvsitebuilder-license.php?vps':
			$code = 'LIN21';
			break;
		
		case '/additional-licenses/litespeed-license.php':
			$code = 'LIN92';
			break;
		case '/additional-licenses/kernelcare-license.php':
			$code = 'LIN97';
			break;

		case '/additional-licenses/rvskins-license.php':
			$code = array('LIN23', 'LIN24');
			break;

		case '/additional-licenses/rvskins-license.php?dedicated':
			$code = 'LIN24';
			break;

		case '/additional-licenses/rvskins-license.php?vps':
			$code = 'LIN23';
			break;

		case '/additional-licenses/whmsonic-license.php':
			$code = array('LIN25', 'LIN27');
			break;

		case '/additional-licenses/whmsonic-license.php?dedicated':
			$code = 'LIN27';
			break;
		
		case '/additional-licenses/cloudlinux-license.php?dedicated':
			$code = 'LIN86';
			break;
		
		case '/additional-licenses/cloudlinux-license.php':
			$code = 'LIN86';
			break;
		
		case '/additional-licenses/zopim-license.php':
			$code = array('LIN900', 'LIN900');
			break;

		case '/additional-licenses/whmsonic-license.php?vps':
			$code = 'LIN25';
			break;

		case '/additional-licenses/whmxtra-license.php':	
		case '/additional-licenses/whmxtra-license.php':	
		case '/additional-licenses/whmxtra-license.php?dedicated':
		case '/additional-licenses/whmxtra-license.php?vps':
			$code = 'LIN8';
			break;

		case '/additional-licenses/ksplice-license.php':
		case '/additional-licenses/ksplice-license.php?dedicated':
			$code = 'LIN85';
			break;

		case '/billing-systems/blesta-license.php':
			$code = 'LIN20';
			break;
		
		case '/billing-systems/ubersmith-license.php':
			$code = 'LIN93';
			break;

		case '/billing-systems/clientexec-license.php':
			$code = 'LIN28';
			break;

		case '/billing-systems/plesk-billing-license.php':
			$code = 'LIN82';
			break;

		case '/billing-systems/whmautopilot-license.php':
			$code = 'LIN26';
			break;
			
		case '/billing-systems/hostbill-license.php':
			$code = 'LIN88';
			break;

		case '/billing-systems/whmcs-license.php':
			$code = 'LIN83';
			break;

		case '/control-panels/cpanel-license.php':
			$code = array('LIN0', 'LIN14');
			break;

		case '/control-panels/cpanel-license.php?dedicated':
			$code = 'LIN14';
			break;

		case '/control-panels/cpanel-license.php?vps':
			$code = 'LIN0';
			break;

		case '/control-panels/directadmin-license.php':
			$code = array('LIN5', 'LIN15');
			break;

		case '/control-panels/directadmin-license.php?dedicated':
			$code = 'LIN15';
			break;

		case '/control-panels/directadmin-license.php?vps':
			$code = 'LIN5';
			break;
			
		case '/control-panels/interworx-license.php?vps':
			$code = 'LIN48';
			break;
		
		case '/control-panels/interworx-license.php':
			$code = 'LIN48';
			break;
			
		case '/control-panels/interworx-license.php?dedicated':
			$code = 'LIN47';
			break;
			
		
		case '/control-panels/ispmanager-license.php?vps':
			$code = 'LIN51';
			break;
		
		case '/control-panels/ispmanager-license.php':
			$code = 'LIN51';
			break;
			
		case '/control-panels/ispmanager-license.php?dedicated':
			$code = 'LIN51';
			break;
		
			
		case '/control-panels/installatron-license.php?vps':
			$code = 'LIN44';
			break;
			
		case '/control-panels/installatron-license.php':
			$code = 'LIN44';
			break;
		
		case '/control-panels/installatron-license.php?dedicated':
			$code = 'LIN44';
			break;
		
		case '/control-panels/hosting-suite.php?vps':
			$code = 'LIN80';
			break;
			
		case '/control-panels/hosting-suite.php':
			$code = 'LIN80';
			break;
		
		case '/control-panels/hosting-suite.php?dedicated':
			$code = 'LIN81';
			break;
			
		
		case '/control-panels/enkompass-license.php':
			$code = 'LIN11';
			break;
		case '/control-panels/enkompass-license.php?dedicated':
			$code = 'LIN11';
			break;
			
			
		case '/control-panels/solusvm-license.php?dedicated':
			$code = 'LIN46';
			break;
		
		case '/control-panels/solusvm-license.php':
			$code = 'LIN46';
			break;
		
		
//		case '/control-panels/enkompass-license.php?vps':
//			header('Location: /control-panels/enkompass-license.php?dedicated');
//			exit;

		case '/control-panels/enkompass-license.php':
		case '/control-panels/enkompass-license.php?dedicated':
			$code = 'LIN11';
			break;

		case '/control-panels/fantastico-license.php':
			$code = array('LIN9', 'LIN17');
			break;

		case '/control-panels/fantastico-license.php?dedicated':
			$code = 'LIN17';
			break;

		case '/control-panels/fantastico-license.php?vps':
			$code = 'LIN9';
			break;

		case '/control-panels/parallels-virtuozzo-license.php':
		case '/control-panels/parallels-virtuozzo-license.php?dedicated':
			$code = 'LIN74';
			break;

		case '/control-panels/plesk-license.php':
			$code = array('LIN72', 'LIN72');
			break;

		case '/control-panels/plesk-license.php?dedicated':
			$code = 'LIN73';
			break;

		case '/control-panels/plesk-license.php?vps':
			$code = 'LIN72';
			break;

		case '/control-panels/softaculous-license.php':
			$code = array('LIN10', 'LIN16');
			break;

		case '/control-panels/softaculous-license.php?dedicated':
			$code = 'LIN16';
			break;

		case '/control-panels/softaculous-license.php?vps':
			$code = 'LIN10';
			break;

		default:
			$code = null;
	}

	return $code;
}

function set_global_plan_from_url() { // TODO FIXME too fragile logic.  handle '?' query string for instance.
	global $global_plan;
	global $ubersmith;
	global $other_plan_codes;

	$uri = $_SERVER['REQUEST_URI'];

	if (array_key_exists('vps', $_REQUEST)) {
  $uri = $_SERVER['SCRIPT_NAME'] . '?vps';
 } else if (array_key_exists('dedicated', $_REQUEST)) {
  $uri = $_SERVER['SCRIPT_NAME'] . '?dedicated';
 } else if (array_key_exists('dedicada', $_REQUEST)) {
  $uri = $_SERVER['SCRIPT_NAME'] . '?dedicada';
 } else {
  $uri = $_SERVER['SCRIPT_NAME'];
 }

	switch ($uri) {
		case _('/additional-licenses/miva-merchant-license.php'):
		case _('/additional-licenses/miva-merchant-license.php?dedicated'):
		case _('/additional-licenses/miva-merchant-license.php?vps'):
			$code = 'LIN84';
			break;

		case _('/additional-licenses/parallels-sitebuilder-license.php'):
		case _('/additional-licenses/parallels-sitebuilder-license.php?vps'):
			$code = array('LIN76', 'LIN77');
			break;

		case _('/additional-licenses/parallels-sitebuilder-license.php?dedicated'):
			$code = 'LIN76';
			break;
		case _('/billing-systems/billmanager-license.php'):
			$code = 'LIN87';
			break;
		
		case _('/additional-licenses/rvsitebuilder-license.php'):
			$code = array('LIN21', 'LIN22');
			break;

		case _('/additional-licenses/rvsitebuilder-license.php?dedicated'):
			$code = 'LIN22';
			break;

		case _('/additional-licenses/rvsitebuilder-license.php?vps'):
			$code = 'LIN21';
			break;

		case _('/additional-licenses/rvskins-license.php'):
			$code = array('LIN23', 'LIN24');
			break;
			
		case _('/additional-licenses/kernelcare-license.php'):
			$code = 'LIN97';
			break;

		case _('/additional-licenses/rvskins-license.php?dedicated'):
			$code = 'LIN24';
			break;

		case _('/additional-licenses/rvskins-license.php?vps'):
			$code = 'LIN23';
			break;

		case _('/additional-licenses/whmsonic-license.php'):
			$code = array('LIN25', 'LIN27');
			break;

		case _('/additional-licenses/whmsonic-license.php?dedicated'):
			$code = 'LIN27';
			break;
		
		case _('/additional-licenses/cloudlinux-license.php?dedicated'):
			$code = 'LIN86';
			break;
		
		case _('/additional-licenses/cloudlinux-license.php'):
			$code = 'LIN86';
			break;

		case _('/additional-licenses/whmsonic-license.php?vps'):
			$code = 'LIN25';
			break;

		case _('/additional-licenses/whmxtra-license.php'):	
		case _('/additional-licenses/whmxtra-license.php'):	
		case _('/additional-licenses/whmxtra-license.php?dedicated'):
		case _('/additional-licenses/whmxtra-license.php?vps'):
			$code = 'LIN8';
			break;

		case _('/additional-licenses/ksplice-license.php'):
		case _('/additional-licenses/ksplice-license.php?dedicated'):
			$code = 'LIN85';
			break;

		case _('/billing-systems/blesta-license.php'):
			$code = 'LIN20';
			break;

		case _('/billing-systems/clientexec-license.php'):
			$code = 'LIN28';
			break;

		case _('/billing-systems/plesk-billing-license.php'):
			$code = 'LIN82';
			break;

		case _('/billing-systems/whmautopilot-license.php'):
			$code = 'LIN26';
			break;

		case _('/billing-systems/whmcs-license.php'):
			$code = 'LIN83';
			break;

		case _('/control-panels/cpanel-license.php'):
			$code = array('LIN0', 'LIN14');
			break;

		case _('/control-panels/cpanel-license.php?dedicated'):
			$code = 'LIN14';
			break;

		case _('/control-panels/cpanel-license.php?vps'):
			$code = 'LIN0';
			break;

		case _('/control-panels/directadmin-license.php'):
			$code = array('LIN5', 'LIN15');
			break;

		case _('/control-panels/directadmin-license.php?dedicated'):
			$code = 'LIN15';
			break;

		case _('/control-panels/directadmin-license.php?vps'):
			$code = 'LIN5';
			break;
			
		case _('/control-panels/interworx-license.php?vps'):
			$code = 'LIN48';
			break;
		
		case _('/control-panels/interworx-license.php'):
			$code = 'LIN48';
			break;
			
		case _('/control-panels/interworx-license.php?dedicated'):
			$code = 'LIN47';
			break;
			
		
		case _('/control-panels/ispmanager-license.php?vps'):
			$code = 'LIN51';
			break;
		
		case _('/control-panels/ispmanager-license.php'):
			$code = 'LIN51';
			break;
			
		case _('/control-panels/ispmanager-license.php?dedicated'):
			$code = 'LIN51';
			break;
		
			
		case _('/control-panels/installatron-license.php?vps'):
			$code = 'LIN44';
			break;
			
		case _('/control-panels/installatron-license.php'):
			$code = 'LIN44';
			break;
		
		case _('/control-panels/installatron-license.php?dedicated'):
			$code = 'LIN44';
			break;
		
		case _('/control-panels/hosting-suite.php?vps'):
			$code = 'LIN80';
			break;
			
		case _('/control-panels/hosting-suite.php'):
			$code = 'LIN80';
			break;
		
		case _('/control-panels/hosting-suite.php?dedicated'):
			$code = 'LIN81';
			break;
			
		
		case _('/control-panels/enkompass-license.php'):
			$code = 'LIN11';
			break;
		case _('/control-panels/enkompass-license.php?dedicated'):
			$code = 'LIN11';
			break;
			
			
		case _('/control-panels/solusvm-license.php?dedicated'):
			$code = 'LIN46';
			break;
		
		case _('/control-panels/solusvm-license.php'):
			$code = 'LIN46';
			break;
		
		
//		case _('/control-panels/enkompass-license.php?vps'):
//			header('Location: /control-panels/enkompass-license.php?dedicated');
//			exit;

		case _('/control-panels/enkompass-license.php'):
		case _('/control-panels/enkompass-license.php?dedicated'):
			$code = 'LIN11';
			break;

		case _('/control-panels/fantastico-license.php'):
			$code = array('LIN9', 'LIN17');
			break;

		case _('/control-panels/fantastico-license.php?dedicated'):
			$code = 'LIN17';
			break;

		case _('/control-panels/fantastico-license.php?vps'):
			$code = 'LIN9';
			break;

		case _('/control-panels/parallels-virtuozzo-license.php'):
		case _('/control-panels/parallels-virtuozzo-license.php?dedicated'):
			$code = 'LIN74';
			break;

		case _('/control-panels/plesk-license.php'):
			$code = array('LIN72', 'LIN72');
			break;

		case _('/control-panels/plesk-license.php?dedicated'):
			$code = 'LIN73';
			break;

		case _('/control-panels/plesk-license.php?vps'):
			$code = 'LIN72';
			break;

		case _('/control-panels/softaculous-license.php'):
			$code = array('LIN10', 'LIN16');
			break;

		case _('/control-panels/softaculous-license.php?dedicated'):
			$code = 'LIN16';
			break;

		case _('/control-panels/softaculous-license.php?vps'):
			$code = 'LIN10';
			break;

		default:
			$code = get_plancode_from_enlish_url();
	}

	if (is_array($code)) {
		$other_plan_codes = $code;
		$code = lowest_price_plan_code($code);
	}

	if (empty($code))
		$global_plan = null;
	else
		$global_plan = $ubersmith->getPlanByCode($code);
	
}

set_global_plan_from_url();

