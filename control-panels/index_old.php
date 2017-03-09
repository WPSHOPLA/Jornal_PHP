<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/overlay-boxes.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$controlp_main_title?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<?=$controlp_main_keywords?>" />
	<meta name="description" content="<?=$controlp_main_meta_description?>" />
	<meta name="author" content="<?=$author?>" />
	<meta name="copyright" content="<?=$copyright?>" />
	<link href="<?=$img_dir?>/favicon.ico" rel="shortcut icon" />
	<?php $css=""; include_once("../_include/modules/css.php"); ?>
	<?php $java=""; include_once("../_include/modules/java.php"); ?>
	<script type="text/javascript">
		$(function() {
          	$('#license-carousela').jcarousel({ scroll: 1 }); // late init
			 <?
				//$('#ded').hide();
				 /* jcarousel expects the items to be visible.  So, in #ded, we added style="position: absolute; left: -999em; display:"
				See http://stackoverflow.com/questions/2112474/hide-a-jcarousel-when-page-loads
				*/
			 ?>
		});

		<?php /*
			See http://benalman.com/code/projects/jquery-bbq/examples/fragment-basic/#kielbasa.html
		*/ ?>
		function showVPS() {
			$("#vps_carousel").fadeIn();
			$('#vps_carousel').css('position', 'static');
			$('#ded_carousel').css('position', 'absolute');
			$('#ded_carousel').css('left', '-999em');
			$("#triggerded").removeClass('service-tab-on');
			$("#triggerded").addClass('service-tab-off');
			$('#triggervps').removeClass('service-tab-off');
			$('#triggervps').addClass('service-tab-on');
		        $('li.cpanel-only-dedicated').fadeOut();
		        $('li[class$="cpanel"] > a').each(function (i, a) {
				var url = $(a).attr('href');
				//url = $.param.querystring(url, 'vps', 2);
//				var x = /^(.*)[?\/](dedicated|vps)/.exec(url);
//				if (x == null)
//					url = url + '/vps';
//				else
//					url = x[1] + '/vps';
				url = $.param.querystring(url, 'vps', 2);
				$(a).attr('href', url);
		        });
		}

		function showDedicated() {
			$("#ded_carousel").fadeIn();
			$("#ded_carousel").css('position', 'static');
			$('#vps_carousel').css('position', 'absolute');
			$('#vps_carousel').css('left', '-999em');
			$("#triggervps").removeClass('service-tab-on');
			$("#triggervps").addClass('service-tab-off');
			$('#triggerded').removeClass('service-tab-off');
			$('#triggerded').addClass('service-tab-on');
		        $('li.cpanel-only-dedicated').fadeIn();
		        $('li[class$="cpanel"] > a').each(function (i, a) {
	 			var url = $(a).attr('href');
//				var x = /^(.*)[?\/](dedicated|vps)/.exec(url);
//				if (x == null)
//					url = url + '/dedicated';
//				else
//					url = x[1] + '/dedicated';
				url = $.param.querystring(url, '<?=_('dedicated')?>', 2);
				$(a).attr('href', url);
		        });
		}

		$(function() {
			$("#triggervps").click(function(event) {
				event.preventDefault();
				window.location = './#vps'; //showVPS();
			});
		});

		$(function() {
			$("#triggerded").click(function(event) {
				event.preventDefault();
				window.location = './#<?=_('dedicated')?>'; //showDedicated();
			});
		});

		$(window).bind('hashchange', function (e) {
			//var url = $.param.fragment();
			var url = window.location.hash; //e.fragment;

			if (url == '#vps') {
				showVPS();
			} else if (url == '#<?=_('dedicated')?>') {
				showDedicated();
			} else {
				showVPS();
			}
		});

		$(document).ready(function() {
			$(window).trigger('hashchange');
		});
	</script>
</head>
<body>
<div class="wrapper">
<?php $menu="cp"; include_once("../_include/modules/header.php"); ?>
<div class="lc-header-inner"><div class="lc-header-inner-holder">
	<div class="header"><?php print("$vps_message"); ?></div>
</div></div>
<div class="lc-content"><div class="lc-content-holder">

	<div class="lc-content-wrapper-inner">
		<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td class="lc-content-left" valign="top">

				<?php $left="cp"; $page=""; include_once("../_include/modules/left.php"); ?>

			</td>
			<td class="lc-content-right" valign="top">

				<h1><?=_('Control Panels');?></h1>
				<p><?=_('Below you will find a wide-selection of licenses that are currently available for anyone who is looking or already owns a VPS. If you hover over the content blocks, you will be able to view a brief overview of the software\'s capability. By clicking on the content blocks you will be able to get a detailed overview of the software.');?></p>


				<div class="service-tabs">
					<div class="service-tab-on" id="triggervps"><h2><?=_('VPS Licenses');?></h2></div>
					<div class="service-tab-off" id="triggerded"><h2><?=_('Dedicated Licenses');?></h2></div>
					<div class="lc-clear"><!-- --></div>
				</div>

				<div id="vps_carousel" style="display:">
					<ul id="license-carousel" class="jcarousel-skin">
<?php
// meta_active_licensing
add_overlay_box(array('title' => 'cPanel/WHM', 'info-url' => _('/control-panels/cpanel-license.php?vps'), 'code' => 'LIN0', 'period' => _('Monthly'), 'logo' => 'logo-cpanel.gif', 'infodivid' => 'info1', 'bg-position' => '14', 'bg-image' => 'logo-control-panel'));
add_overlay_box(array('title' => 'Plesk Panel 10.x', 'info-url' => _('/control-panels/plesk-license.php?vps'), 'code' => 'LIN72', 'period' => _('Monthly'), 'logo' => 'logo-parallelspleskpanel.gif', 'infodivid' => 'info2', 'bg-position' => '-104', 'bg-image' => 'logo-control-panel'));
add_overlay_box(array('title' => 'Direct Admin', 'info-url' => _('/control-panels/directadmin-license.php?vps'), 'code' => 'LIN5', 'period' => _('Monthly'), 'logo' => 'logo-directadmin.gif', 'infodivid' => 'info3', 'bg-position' => '-238', 'bg-image' => 'logo-control-panel'));
add_overlay_box(array('title' => 'Softaculous', 'info-url' => _('/control-panels/softaculous-license.php?vps'), 'code' => 'LIN10', 'period' => _('Monthly'), 'logo' => 'logo-softaculous.gif', 'infodivid' => 'info4', 'bg-position' => '-369', 'bg-image' => 'logo-control-panel'));
add_overlay_box(array('title' => 'Fantastico', 'info-url' => _('/control-panels/fantastico-license.php?vps'), 'code' => 'LIN9', 'period' => _('Monthly'), 'logo' => 'logo-fantastico.gif', 'infodivid' => 'info5', 'bg-position' => '-504', 'bg-image' => 'logo-control-panel'));
add_overlay_box(array('title' => 'Installatron', 'info-url' => _('/control-panels/installatron-license.php?vps'), 'code' => 'LIN44', 'period' => _('Monthly'), 'logo' => 'logo-installatron.gif', 'infodivid' => 'info9', 'bg-position' => '-633', 'bg-image' => 'logo-control-panel'));
add_overlay_box(array('title' => 'InterWorx', 'info-url' => _('/control-panels/interworx-license.php?vps'), 'code' => 'LIN48', 'period' => _('Monthly'), 'logo' => 'logo-interworx.gif', 'infodivid' => 'info11', 'bg-position' => '-763', 'bg-image' => 'logo-control-panel'));
add_overlay_box(array('title' => 'ISPmanager', 'info-url' => _('/control-panels/ispmanager-license.php?vps'), 'code' => 'LIN51', 'period' => _('Monthly'), 'logo' => 'logo-ispmanager.gif', 'infodivid' => 'info12', 'bg-position' => '-895', 'bg-image' => 'logo-control-panel'));

show_overlay_boxes_2('a');
$_boxes = array();
?>
					</ul><!-- id="license-carousel" class="jcarousel-skin" -->
					<div class="lc-clear"><!-- --></div>
				</div> <!-- id=vps_carousel -->


				<div id="ded_carousel" style="position: absolute; left: -999em; display:">
					<ul id="license-carousela" class="jcarousel-skin">
<?php
add_overlay_box(array('title' => 'cPanel/WHM', 'info-url' => _('/control-panels/cpanel-license.php?dedicated'), 'code' => 'LIN14', 'period' => _('Monthly'), 'logo' => 'logo-cpanel.gif' , 'infodivid' => 'info1', 'bg-position' => '14', 'bg-image' => 'logo-control-panel'));
add_overlay_box(array('title' => 'Plesk Panel 10.x', 'info-url' => _('/control-panels/plesk-license.php?dedicated'), 'code' => 'LIN73', 'period' => _('Monthly'), 'logo' => 'logo-parallelspleskpanel.gif' , 'infodivid' => 'info2', 'bg-position' => '-104', 'bg-image' => 'logo-control-panel'));
add_overlay_box(array('title' => 'Direct Admin', 'info-url' => _('/control-panels/directadmin-license.php?dedicated'), 'code' => 'LIN15', 'period' => _('Monthly'), 'logo' => 'logo-directadmin.gif' , 'infodivid' => 'info3', 'bg-position' => '-238', 'bg-image' => 'logo-control-panel'));
add_overlay_box(array('title' => 'Softaculous', 'info-url' => _('/control-panels/softaculous-license.php?dedicated'), 'code' => 'LIN16', 'period' => _('Monthly'), 'logo' => 'logo-softaculous.gif' , 'infodivid' => 'info4', 'bg-position' => '-369', 'bg-image' => 'logo-control-panel'));
add_overlay_box(array('title' => 'Fantastico', 'info-url' => _('/control-panels/fantastico-license.php?dedicated'), 'code' => 'LIN17', 'period' => _('Monthly'), 'logo' => 'logo-fantastico.gif' , 'infodivid' => 'info5', 'bg-position' => '-504', 'bg-image' => 'logo-control-panel'));
add_overlay_box(array('title' => 'Installatron', 'info-url' => _('/control-panels/installatron-license.php?dedicated'), 'code' => 'LIN45', 'period' => _('Monthly'), 'logo' => 'logo-installatron.gif' , 'infodivid' => 'info9', 'bg-position' => '-633', 'bg-image' => 'logo-control-panel'));
add_overlay_box(array('title' => 'InterWorx', 'info-url' => _('/control-panels/interworx-license.php?dedicated'), 'code' => 'LIN47', 'period' => _('Monthly'), 'logo' => 'logo-interworx.gif' , 'infodivid' => 'info11', 'bg-position' => '-763', 'bg-image' => 'logo-control-panel'));
add_overlay_box(array('title' => 'ISPmanager', 'info-url' => _('/control-panels/ispmanager-license.php?dedicated'), 'code' => 'LIN51', 'period' => _('Monthly'), 'logo' => 'logo-ispmanager.gif' , 'infodivid' => 'info12', 'bg-position' => '-895', 'bg-image' => 'logo-control-panel'));
//add_overlay_box(array('title' => 'Enkompass', 'info-url' => _('/control-panels/enkompass-license.php?dedicated'), 'code' => 'LIN11', 'period' => _('Monthly'), 'logo' => 'logo-enkompass.gif' , 'infodivid' => 'info6', 'bg-position' => '-1028', 'bg-image' => 'logo-control-panel'));
add_overlay_box(array('title' => 'Virtuozzo', 'info-url' => _('/control-panels/parallels-virtuozzo-license.php?dedicated'), 'code' => 'LIN74', 'period' => _('Monthly'), 'logo' => 'logo-parallelsvirtuozzo.gif' , 'infodivid' => 'info7', 'bg-position' => '-1161', 'bg-image' => 'logo-control-panel'));
add_overlay_box(array('title' => 'SolusVM', 'info-url' => _('/control-panels/solusvm-license.php?dedicated'), 'code' => 'LIN46', 'period' => _('Monthly'), 'logo' => 'logo-solusvm.gif' , 'infodivid' => 'info10', 'bg-position' => '-1300', 'bg-image' => 'logo-control-panel'));




show_overlay_boxes_2('b');
$_boxes = array();
?>
					</ul><!-- id="license-carousela" class="jcarousel-skin" -->
					<div class="lc-clear"><!-- --></div>
				</div> <!-- id=ded_carousel -->

	
				

				<div class="clear"><!-- --></div>
				<div style="min-height:330px">
				<div id="info" class="lc-box" style="display:">
					<h2><?=_('Our License Promise');?></h2>
					<p><?=_('We pride ourselves in being the hosting licensing leader. We stand true behind the promise of the best support, and pricing. If you find any of the above-mentioned licenses to be less than ours, we\'ll match it, and give you a five-dollar credit on your next month\'s bill.');?> </p>
                    
                    <table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td valign="top">
							<h2>cPanel + Fantastico</h2>
							<ul class="lc-list-check1">
								<li></li>
								<li><?=_('Powerful Reseller Functionality');?></li>
								<li><?=_('One-Click 50+ open-source scripts');?></li>
								<li><?=_('Mobile Accessibility');?></li>
								<li><?=_('Developer Friendly');?></li>
								<li><?=_('Secure &amp; Optimized');?></li>
								<li><?=_('and many more features...');?></li>
							</ul>
						</td>
						<td valign="top">
							<h2>cPanel/Plesk + Softaculous</h2>
							<ul class="lc-list-check1">
								<li><?=_('175+ One-Click open-source scripts');?></li>
								<li><?=_('Low resource utilization');?></li>
								<li><?=_('cost-effective pricing');?></li>
								<li><?=_('Full PCI Compliance');?></li>
								<li><?=_('and much much more...');?></li>
							</ul>
						</td>
					</tr>
					</table>
				</div>
				<div id="info1" class="lc-box" style="display:none">
					<h2>cPanel/WHM</h2>
					<p><?=_('cPanel/WHM makes life easier for website owners and administrators. cPanel offers a wide-variety of tools and options that can be used when performing daily tasks such as; backups, password resets, and many other daily chores. Additionally, if you\'re a reseller or simply trying to earn extra money online, cPanel has an amazing Reseller Center that makes managing your customers extremely easy.');?></p>
					<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td valign="top">
							<h2><?=_('Customer Features');?></h2>
							<ul class="lc-list-check1">
								<li></li>
								<li><?=_('PHPMyAdmin - MySQL Management');?></li>
								<li><?=_('Fully manage DNS settings');?></li>
								<li><?=_('SpamAssassin &amp; RBL\'s - Eliminate Spam');?></li>
								<li><?=_('SSL Manager - Install your SSL Certificates');?></li>
								<li><?=_('SSH Access - Login in directly from cPanel.');?></li>
								<li><?=_('and many more options...');?></li>
							</ul>
						</td>
						<td valign="top">
							<h2><?=_('Administrator Features');?></h2>
							<ul class="lc-list-check1">
								<li><?=_('White-Label Reseller Support');?></li>
								<li><?=_('Billing System Integration via API');?></li>
								<li><?=_('DNS Management &amp; Clustering support');?></li>
								<li><?=_('Create, Edit, and Manage Account Settings');?></li>
								<li><?=_('and a vast amount of other settings...');?></li>
							</ul>
						</td>
					</tr>
					</table>
				</div>
				<div id="info2" class="lc-box" style="display:none">
					<h2>Plesk Panel <?php print("$vps_plesk_version"); ?></h2>
					<p><?=_('Have an e-commerce application that you need to deploy quickly? Plesk can handle it; its most recent version is fully PCI compliant. Additionally, you are able to obtain extra tools such as Plesk Billing, SiteBuilder and many other applications as part of Plesk if you select to use the unlimited client license. This is one of the most feature rich control panels currently on the market.');?></p>
					<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td valign="top">
                        <h2><?=_('Administrator Controls');?></h2>
							<ul class="lc-list-check1">
								<li><?=_('Easy account management');?></li>
								<li><?=_('Full Reseller Control');?></li>
								<li><?=_('low resource usage');?></li>
								<li><?=_('One-Click account upgrades');?></li>
								<li><?=_('other hosting automation features...');?></li>
							</ul>
						</td>
						<td valign="top">
							<h2><?=_('Client feature-set');?></h2>
							<ul class="lc-list-check1">
								<li><?=_('One-Click Auto Installer');?></li>
								<li><?=_('Easy to use interface');?></li>
								<li><?=_('SiteBuilder (Unlimited License)');?></li>
								<li><?=_('Billing System (Unlimited License)');?></li>
								<li><?=_('Multiple FTP Accounts');?></li>
								<li><?=_('and many other neat features...');?></li>
							</ul>
                            
						</td>
					</tr>
					</table>
				</div>
				<div id="info3" class="lc-box" style="display:none">
					<h2>DirectAdmin</h2>
					<p><?=_('Looking for a reliable and yet afford control panel? If so, DirectAdmin is going to be your newly discovered hero. A great blend of features and support verses price makes DirectAdmin one of the best value choices in the market today.  Discover more about DirectAdmin today, and see if it suits your needs and requirements.');?></p>
					<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td valign="top">
							<h2><?=_('Administrator Benefits');?></h2>
							<ul class="lc-list-check1">
								<li><?=_('Low Resource Requirements');?></li>
								<li><?=_('Supports most Linux/Unix OS\'s');?></li>
								<li><?=_('Easy to use Interface');?></li>
								<li><?=_('Cost Effective');?></li>
								<li><?=_('Extremely stable and secure');?></li>
								<li><?=_('Vast support resources available');?></li>
								<li><?=_('the list of positives could go on...');?></li>
							</ul>
						</td>
						<td valign="top">
							<h2><?=_('Feature List');?></h2>
							<ul class="lc-list-check1">
								<li><?=_('Account Backups');?></li>
								<li><?=_('Create, Edit, Remove Emails');?></li>
								<li><?=_('Amazing File Manager controls');?></li>
								<li><?=_('Extremely user-friendly');?></li>
								<li><?=_('and there are many more...');?></li>
							</ul>
						</td>
					</tr>
					</table>
				</div>
				<div id="info4" class="lc-box" style="display:none">
					<h2>Softaculous</h2>
					<p><?=_('Choose from 175+ One-Click auto-installable scripts from the most popular open-source projects. Softaculous can integrate with cPanel/WHM and DirectAdmin so compatibility isn\'t going to be an issue when selecting this one-click auto-installer. For the price point and the amount of options that are available, this is a great and very popular auto-installer.');?></p>
					<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td valign="top">
							<h2><?=_('Basic Overview');?></h2>
							<ul class="lc-list-check1">
								<li><?=_('175+ one-click scripts');?></li>
								<li><?=_('Fast script updates (newer versions)');?></li>
								<li><?=_('Extremely cost efficient');?></li>
								<li><?=_('Multi Control Panel support');?></li>
								<li><?=_('One-Step script installer');?></li>
								<li><?=_('and many others...');?></li>
							</ul>
						</td>
						<td valign="top">
							<h2><?=_('Advanced Options');?></h2>
							<ul class="lc-list-check1">
								<li><?=_('Community Forums');?></li>
								<li><?=_('API for Developers');?></li>
								<li><?=_('Multi-Language support');?></li>
								<li><?=_('The list could go on...');?></li>
							</ul>
						</td>
					</tr>
					</table>
				</div>
				<div id="info5" class="lc-box" style="display:none">
					<h2>Fantastico</h2>
                    <p><?=_('Having been around since what seems like the dawn of time, Fantastico is the undisputed market leader when it comes to one-click auto-installers. Having a small but very well maintained selection of scripts that it manages, it serves over one million users on a daily basis.');?></p>
					<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td valign="top">
							<h2><?=_('General Overview');?></h2>
							<ul class="lc-list-check1">
								<li><?=_('10,000+ Installations');?></li>
								<li><?=_('Supports One Million+ users daily');?></li>
								<li><?=_('50+ Open-Source Scripts');?></li>
								<li><?=_('cPanel/WHM Support Only');?></li>
								<li><?=_('Advanced administrator controls');?></li>
							</ul>
						</td>
						<td valign="top">
							<h2><?=_('Users Overview');?></h2>
							<ul class="lc-list-check1">
								<li><?=_('Multi-Language Support');?></li>
								<li><?=_('Easy-to-use interface');?></li>
								<li><?=_('Installation Notifications');?></li>
								<li><?=_('Streamlined Installation process');?></li>
							</ul>
						</td>
					</tr>
					</table>
				</div>

				<div id="info6" class="lc-box" style="display:none">
					<h2>Enkompass</h2>
                    <p><?=_('Make your life simpler by offering a control panel for Windows Hosting that your customers are already familiar with. Enkompass will also allow you to start offering Windows hosting, allowing you access up to 30% more market share while reducing licensing costs with a per user licensing model.');?></p>
					<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td valign="top">
							<h2><?=_('General Overview');?></h2>
							<ul class="lc-list-check1">
								<li><?=_('Enkompass made by cPanel');?></li>
								<li><?=_('Reduce Support Costs (Single Sign-on)');?></li>
								<li><?=_('Access to 30% Windows market share');?></li>
								<li><?=_('Fully-featured API for developers');?></li>
								<li><?=_('Multi-Server management options');?></li>
							</ul>
						</td>
						<td valign="top">
							<h2><?=_('Advanced Overview');?></h2>
							<ul class="lc-list-check1">
								<li><?=_('Flexible Resource Allocation');?></li>
								<li><?=_('Simplified Reseller Management');?></li>
								<li><?=_('Website Bandwidth Limits');?></li>
								<li><?=_('Redundant Web Servers');?></li>
							</ul>
						</td>
					</tr>
					</table>
				</div>

				<div id="info7" class="lc-box" style="display:none">
					<h2>Virtuozzo 4.x</h2>
                    <p><?=_('The most used virtualization environment, Virtuozzo is packed with features and an abundance of options to choose from. Virtuozzo provides hosting companies and resellers, whether big or small, with many features such as VPS insolation, on-fly resource management, and many live-server migrations.');?></p>
					<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td valign="top">
							<h2><?=_('General Overview');?></h2>
							<ul class="lc-list-check1">
								<li><?=_('Resource Isolation');?></li>
								<li><?=_('Cross CPU load sharing');?></li>
								<li><?=_('On-fly resource management');?></li>
								<li><?=_('Live Container Migration');?></li>
								<li><?=_('Fully-featured API');?></li>
							</ul>
						</td>
						<td valign="top">
							<h2><?=_('Additional Features');?></h2>
							<ul class="lc-list-check1">
								<li><?=_('Operating System Templates');?></li>
								<li><?=_('Automated provisioning and activation');?></li>
								<li><?=_('Parallels Power Panel Management');?></li>
                                <li><?=_('Many other options...');?></li>
							</ul>
						</td>
					</tr>
					</table>
				</div>
                
                
                
                <div id="info8" class="lc-box" style="display:none">
					<h2>Inetworx</h2>
                    <p><?=_('The most used virtualization environment, Virtuozzo is packed with features and an abundance of options to choose from. Virtuozzo provides hosting companies and resellers, whether big or small, with many features such as VPS insolation, on-fly resource management, and many live-server migrations.');?></p>
					<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td valign="top">
							<h2><?=_('General Overview');?></h2>
							<ul class="lc-list-check1">
								<li><?=_('Resource Isolation');?></li>
								<li><?=_('Cross CPU load sharing');?></li>
								<li><?=_('On-fly resource management');?></li>
								<li><?=_('Live Container Migration');?></li>
								<li><?=_('Fully-featured API');?></li>
							</ul>
						</td>
						<td valign="top">
							<h2><?=_('Additional Features');?></h2>
							<ul class="lc-list-check1">
								<li><?=_('Operating System Templates');?></li>
								<li><?=_('Automated provisioning and activation');?></li>
								<li><?=_('Parallels Power Panel Management');?></li>
                                <li><?=_('Many other options...');?></li>
							</ul>
						</td>
					</tr>
					</table>
				</div>
                
                <div id="info9" class="lc-box" style="display:none">
					<h2>Installatron</h2>
                    <p><?=_('Want a great autoinstaller that works on any control panel available? Try Installatron; it fully integrates with cPanel/WHM, cPanel Enkompass, DirectAdmin, InterWorx, Kloxo/LxAdmin, Plesk Linux/Unix, and Plesk Windows. Installatron comes with over 60 applications to install ranging from CMS systems to ecommerce packages. All the software on Installatron is updated with 24 hours of the new release date making sure your software stays cutting edge.');?></p>
					<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td valign="top">
							<h2><?=_('General Overview');?></h2>
							<ul class="lc-list-check1">
								<li><?=_('Automatic Application filtering');?></li>
								<li><?=_('Multi-Language Support');?></li>
								<li><?=_('Swift application updates (24 Hours Max)');?></li>
								<li><?=_('Works with EVERY MAJOR control panel');?></li>
								<li><?=_('No maintenance needed (self-updating)');?></li>
							</ul>
						</td>
						<td valign="top">
							<h2><?=_('Additional Features');?></h2>
							<ul class="lc-list-check1">
								<li><?=_('Supports 60+ open-source scripts');?></li>
								<li><?=_('Customized API');?></li>
								<li><?=_('Automated Backups');?></li>
                                <li><?=_('Many other features...');?></li>
							</ul>
						</td>
					</tr>
					</table>
				</div>
                
                 <div id="info10" class="lc-box" style="display:none">
					<h2>SolusVM</h2>
                    <p><?=_('SolusVM is an powerful and extremely affordable virtual container control panel. SolusVM allows your customers to easily start, stop, reboot, and re-install their virtual environments with a single click. SolusVM even allows customers to pick their own operating systems, from a collection of pre-build operating system templates.');?></p>
					<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td valign="top">
							<h2><?=_('General Overview');?></h2>
							<ul class="lc-list-check1">
								<li><?=_('Fully featured API');?></li>
								<li><?=_('Resource Insolation');?></li>
								<li><?=_('Easy OS Reinstallation');?></li>
								<li><?=_('Highly scalable environment');?></li>
								<li><?=_('Cluster management system');?></li>
							</ul>
						</td>
						<td valign="top">
							<h2><?=_('Additional Features');?></h2>
							<ul class="lc-list-check1">
								<li><?=_('Automated Backups');?></li>
								<li><?=_('Multiple language support');?></li>
								<li><?=_('Flexible resource management');?></li>
                                <li><?=_('Many other options...');?></li>
							</ul>
						</td>
					</tr>
					</table>
				</div>
                
                <div id="info11" class="lc-box" style="display:none">
					<h2>InterWorx</h2>
                    <p><?=_('InterWorx is a highly scalable, yet extremely affordable control panel for customers that are looking for high availability. InterWorx, not only ensures that your website never goes down, but also provides you with all the right tools to it. Control your website, doesn\'t have to be a complicated process anymore.');?></p>
					<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td valign="top">
							<h2><?=_('General Overview');?></h2>
							<ul class="lc-list-check1">
								<li><?=_('Low resource requirements');?></li>
								<li><?=_('24x7 Support department');?></li>
								<li><?=_('Fully featured API');?></li>
								<li><?=_('High availability failover');?></li>
								<li><?=_('Detailed Support Resources');?></li>
							</ul>
						</td>
						<td valign="top">
							<h2><?=_('Additional Features');?></h2>
							<ul class="lc-list-check1">
								<li><?=_('Multiple language support');?></li>
								<li><?=_('Easy resource management');?></li>
								<li><?=_('Automated update process');?></li>
                                <li><?=_('Many other options...');?></li>
							</ul>
						</td>
					</tr>
					</table>
				</div>
                
                <div id="info12" class="lc-box" style="display:none">
					<h2>ISPmanager</h2>
                    <p><?=_('ISPmanager is a widely used control panel, which has been developed from the ground up, with customers in mind. The comprehensive multi-lingual web interface makes it easy to manage day-to-day activities, such as creating inboxes, managing users, and databases.');?></p>
					<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td valign="top">
							<h2><?=_('General Overview');?></h2>
							<ul class="lc-list-check1">
								<li><?=_('owerful API');?>P</li>
								<li><?=_('Multi-Language Support');?></li>
								<li><?=_('Low resource requirements');?></li>
								<li><?=_('Powerful web interface');?></li>
								<li><?=_('Reseller Controls');?></li>
                                <li><?=_('And much more...');?></li>
							</ul>
						</td>
						<td valign="top">
							<h2><?=_('Additional Overview');?></h2>
							<ul class="lc-list-check1">
								<li><?=_('Slave server management');?></li>
								<li><?=_('Inbuilt Support Center');?></li>
								<li><?=_('Plan template configuration');?></li>
                                <li><?=_('Granular configuration controls');?></li>
                                <li><?=_('And so many more options...');?></li>
							</ul>
						</td>
					</tr>
					</table>
				</div>

				</div>

			</td>
		</tr>
		</table>
        
	</div>

</div></div>
<?php include_once("../_include/modules/footer.php"); ?>
<?php include_once("../_include/modules/additional.php"); ?>
</div>
</body>
</html>
