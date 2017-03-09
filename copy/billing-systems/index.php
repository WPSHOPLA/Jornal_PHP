<?php include_once("../_include/modules/config.php"); ?>

<?php include_once("../_include/modules/general.php"); ?>

<?php include_once("../_include/modules/overlay-boxes.php"); ?>

<?php include_once("../_include/modules/ubersmith.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<title><?=$billing_main_title?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<meta name="keywords" content="<?=$billing_main_keywords?>" />

	<meta name="description" content="<?=$billing_main_meta_description?>" />

	<meta name="author" content="<?=$author?>" />

	<meta name="copyright" content="<?=$copyright?>" />

	<link href="<?=$img_dir?>/favicon.ico" rel="shortcut icon" />

	<?php $css=""; include_once("../_include/modules/css.php"); ?>

	<?php $java=""; include_once("../_include/modules/java.php"); ?>

</head>

<body>

<div class="wrapper">

<?php $menu="billing"; include_once("../_include/modules/header.php"); ?>

<div class="lc-header-inner"><div class="lc-header-inner-holder">

	<div class="header"><?php print("$billing_message"); ?></div>

</div></div>

<div class="lc-content"><div class="lc-content-holder">



	<div class="lc-content-wrapper-inner">

		<table width="100%" cellpadding="0" cellspacing="0">

		<tr>

			<td class="lc-content-left" valign="top">



				<?php $left="billing"; $page=""; include_once("../_include/modules/left.php"); ?>



			</td>

			<td class="lc-content-right" valign="top">



				<h1><?=_('Billing Systems');?></h1>

				<p><?=_('Mentioned below you will find a wide-selection of billing system licenses that are currently available. These billing systems can help you optimize your business and ensure that all your customers are paying on time, and paying the right amount.  By clicking the content blocks below, you will be able to get a detailed overview of each of these systems.');?> </p>

                <ul id="license-carousel" class="jcarousel-skin">

<?php



//add_overlay_box(array('title' => 'WHMCS', 'info-url' => _('http://www.licensecube.com/billing-systems/whmcs-license.php'), 'code' => 'LIN83', 'period' => 'Monthly', 'logo' => 'logo-whmcs.gif', 'infodivid' => 'info1', 'bg-position' => '1', 'bg-image' => 'logo-billing-system-v3'));

add_overlay_box(array('title' => 'Plesk Billing', 'info-url' => _('http://www.licensecube.com/billing-systems/plesk-billing-license.php'), 'code' => 'LIN82', 'period' => 'Monthly', 'logo' => 'logo-parallelspleskbilling.gif', 'infodivid' => 'info3', 'bg-position' => '-137', 'bg-image' => 'logo-billing-system-v3'));

add_overlay_box(array('title' => 'WHMAutoPilot', 'info-url' => _('http://www.licensecube.com/billing-systems/whmautopilot-license.php'), 'code' => 'LIN26', 'period' => 'Monthly', 'logo' => 'logo-whmautopilot.gif', 'infodivid' => 'info4', 'bg-position' => '-271', 'bg-image' => 'logo-billing-system-v3'));

add_overlay_box(array('title' => 'Blesta', 'info-url' => _('http://www.licensecube.com/billing-systems/blesta-license.php'), 'code' => 'LIN20', 'period' => 'Monthly', 'logo' => 'logo-blesta.gif', 'infodivid' => 'info5', 'bg-position' => '-401', 'bg-image' => 'logo-billing-system-v3'));

add_overlay_box(array('title' => 'ClientExec', 'info-url' => _('http://www.licensecube.com/billing-systems/clientexec-license.php'), 'code' => 'LIN28', 'period' => 'Monthly', 'logo' => 'logo-clientexec.gif', 'infodivid' => 'info6', 'bg-position' => '-536', 'bg-image' => 'logo-billing-system-v3'));

/*add_overlay_box(array('title' => 'HostBill', 'info-url' => _('http://www.licensecube.com/billing-systems/hostbill-license.php'), 'code' => 'LIN0', 'period' => 'Monthly', 'logo' => 'logo-clientexec.gif', 'infodivid' => 'info6', 'bg-position' => '-653', 'bg-image' => 'logo-billing-system-v3'));*/

add_overlay_box(array('title' => 'BILLmanager', 'info-url' => _('http://www.licensecube.com/billing-systems/billmanager-license.php'), 'code' => 'LIN87', 'period' => 'Monthly', 'logo' => 'logo-clientexec.gif', 'infodivid' => 'info8', 'bg-position' => '-768', 'bg-image' => 'logo-billing-system-v3'));

/*add_overlay_box(array('title' => 'Ubersmith', 'info-url' => _('http://www.licensecube.com/billing-systems/billmanager-license.php'), 'code' => 'LIN877', 'period' => 'Monthly', 'logo' => 'logo-clientexec.gif', 'infodivid' => 'info8', 'bg-position' => '-893', 'bg-image' => 'logo-billing-system-v3'));*/

show_overlay_boxes();



?>

		</ul>

				<div class="clear"><!-- --></div>

				<div style="min-height:400px">

				<div id="info1" class="lc-box" style="display:none">

                

                <h2><?=_('Choose your new billing partner..');?>.</h2>

					<p><?=_('Choosing a billing system can sometimes be a complicated process, as you have to ensure that you have covered every feature that your looking for. Do you need help? If so, our licensing specialists are available 24/7 to meet your needs. Give us a call on (855) 465-4236 today!');?></p>

                    <p><?=_('Mentioned below, is a comparison between two of the most popular billing systems available. They are popular as they both have unique features, and have allowed many online businesses to grow.');?> </p>

				<table width="100%" cellpadding="0" cellspacing="0">

					<tr>

						<td valign="top">

							<h2>WHMCS</h2>

							<ul class="lc-list-check1">

								<li><?=_('Automate Billing/Signups');?></li>

								<li><?=_('60+ Payment Gateway Integrations');?></li>

								<li><?=_('Easy to use API');?></li>

								<li><?=_('Developer Friendly');?></li>

								<li><?=_('Advanced Reporting Features');?></li>

								<li><?=_('Easy-to-use Configuration Wizard');?></li>

							</ul>

						</td>

						<td valign="top">

							<h2>ClientExec</h2>

							<ul class="lc-list-check1">

								<li><?=_('Supports 12+ Control Panels');?></li>

								<li><?=_('Easily Customizable');?></li>

								<li><?=_('Powerful API');?></li>

								<li><?=_('Sophisticated Anti-Fraud Modules');?></li>

								<li><?=_('Developer Friendly');?></li>

								<li><?=_('Share Files easily between users');?></li>

								<li><?=_('See Insightful Reports');?></li>

							</ul>

						</td>

					</tr>

					</table>	

                    

                    

				</div>

				<div id="info2" class="lc-box" style="display:none">

					<h2>WHMCS</h2>

					<p><?=_('WHMCS is one of the most popular billing systems used for online business. It combines flexibility with a clean and crisp design that is modular but still extremely flexible. When purchasing a license for WHMCS you are purchasing into a system that will automate your billing, provisioning and management needs. Having over fifty-six gateways and twenty-five domain registry integrations, why not give WHMCS a look?');?></p>

					<table width="100%" cellpadding="0" cellspacing="0">

					<tr>

						<td valign="top">

							<h2><?=_('General Overview');?></h2>

							<ul class="lc-list-check1">

								<li><?=_('Multi-Language Support');?></li>

								<li><?=_('Extensive Module Library');?></li>

								<li><?=_('Automated Account Creation');?></li>

								<li><?=_('Easily Cutomizable');?></li>

								<li><?=_('Developer Friendly');?></li>

								

							</ul>

						</td>

						<td valign="top">

							<h2><?=_('Business Advantages');?></h2>

							<ul class="lc-list-check1">

								<li><?=_('Intergrated Support Center');?></li>

								<li><?=_('Massive selection of payment gateways');?></li>

								<li><?=_('25+ Domain Registrar Integrations');?></li>

								<li><?=_('Easily Customizable');?></li>

								<li><?=_('Advanced Fraud Protection');?></li>

							</ul>

						</td>

					</tr>

					</table>

				</div>

				<div id="info3" class="lc-box" style="display:">

					<h2>Plesk Billing</h2>

					<p><?=_('Billing and income management are some of the most complicated tasks for any business. Eliminate the complication by using a billing system that is designed just for service providers. Create simple yet flexible hosting plans that will differentiate you from the competition. Additionally, with already integrated modules, sell additional services such as SSL Certificates, domains and many other related products and features. Plesk Billing can revolutionize the way you do business.');?></p>

					<table width="100%" cellpadding="0" cellspacing="0">

					<tr>

						<td valign="top">

							<h2><?=_('General Overview');?></h2>

							<ul class="lc-list-check1">

								<li><?=_('Automate Billing/Signups');?></li>

								<li><?=_('25+ Gateway Integrations');?></li>

								<li><?=_('Easy to use API');?></li>

								<li><?=_('Developer Friendly');?></li>

								<li><?=_('Advanced Reporting Features');?></li>

								<li><?=_('Easy-to-use Configuration Wizard');?></li>

							</ul>

						</td>

						<td valign="top">

							<h2><?=_('Flexiability');?></h2>

							<ul class="lc-list-check1">

								<li><?=_('Schedule Custom Tasks');?></li>

								<li><?=_('Customize Customer Interaction');?></li>

								<li><?=_('Create Specific Client Groups');?></li>

								<li><?=_('Administer Hosting Plans');?></li>

								<li><?=_('Customize your theme');?></li>

							</ul>

						</td>

					</tr>

					</table>

				</div>

				<div id="info4" class="lc-box" style="display:none">

					<h2>WHMAutoPilot</h2>

					<p><?=_("WHMAutoPilot allows you to take your foot off the pedal while it runs everything for you on autopilot. Being one of the most advanced billing systems on the market. WHMAutoPilot supports Google Checkout, PayPal, and a vast amount of other payment gateways and modules. If you're looking for a billing partner that you can rely on and not grow out of, WHMAutoPilot is going to be a great solution for you.");?></p>

					<table width="100%" cellpadding="0" cellspacing="0">

					<tr>

						<td valign="top">

							<h2><?=_('General Overview');?></h2>

							<ul class="lc-list-check1">

								<li><?=_('Has low resource requirements');?></li>

								<li><?=_('Extensive gateway support');?></li>

								<li><?=_('Clean &amp; Crisp Interface');?></li>

								<li><?=_('Automated account provisioning');?></li>

								<li><?=_('Anti-Fraud screening modules');?></li>

								<li><?=_('Easily add custom modules');?></li>

								<li><?=_('Enterprise security');?></li>

							</ul>

						</td>

						<td valign="top">

							<h2><?=_('Exciting Options');?></h2>

							<ul class="lc-list-check1">

								<li><?=_('Easy version-to-version upgrades');?></li>

								<li><?=_('Constant module additions');?></li>

								<li><?=_('Supports multiple branding functionality');?></li>

								<li><?=_('Supports cPanel/WHM &amp; Plesk Control Panels');?></li>

								<li><?=_('Has easy-to-use order flow setup');?></li>

							</ul>

						</td>

					</tr>

					</table>

				</div>

                <div id="info5" class="lc-box" style="display:none">

					<h2>Blesta</h2>

					<p><?=_('Blesta is a billing system that is extremely versatile, and can work in any niche that it is put in. Having pledged to developers; of its openness Blesta has stuck to that promise to this day, and still remains one of the most developer friendly billing systems in the market today.');?> </p>

                    

                    <p><?=_('Packed with features and options, Blesta is a great partner when it comes to billing automation. It has ever feature that you can think of, but also has the ability to be built upon if a custom module needs to be developed.');?></p>

					<table width="100%" cellpadding="0" cellspacing="0">

					<tr>

						<td valign="top">

							<h2><?=_('General Overview');?></h2>

							<ul class="lc-list-check1">

								<li><?=_('24+ Payment Gateways');?></li>

								<li><?=_('10+ Server Modules');?></li>

								<li><?=_('Partial &amp; Overpayment Support');?></li>

								<li><?=_('Simple Invoicing');?></li>

								<li><?=_('Multi-Currency Support');?></li>

								<li><?=_('Accurate Reporting Graphs');?></li>

								<li><?=_('Single-click account updates');?></li>

							</ul>

						</td>

						<td valign="top">

							<h2><?=_('Developer Friendly');?></h2>

							<ul class="lc-list-check1">

								<li><?=_('Automated Backups');?></li>

								<li><?=_('Automatic billing, invoicing, etc..');?></li>

								<li><?=_('Email/Web Ticket Management');?></li>

								<li><?=_('Tight Security Intergration');?></li>

								<li><?=_('and so much more...');?></li>

							</ul>

						</td>

					</tr>

					</table>

				</div>

				<div id="info6" class="lc-box" style="display:none">

					<h2>ClientExec</h2>

					<p><?=_('ClientExec is a billing system that will grow with you and your online business. Manage existing customers, and expand your businesses hosting automation with a wide variety of modules and plugins. Branch into multiple parallel business segments such as SSL certificates, and domain registration with a few clicks of a mouse. See why ClientExec is the #1 Reseller platform.');?> </p>

					<table width="100%" cellpadding="0" cellspacing="0">

					<tr>

						<td valign="top">

							<h2><?=_('General Overview');?></h2>

							<ul class="lc-list-check1">

								<li><?=_('Supports 12+ Control Panels');?></li>

								<li><?=_('Easily Customizable');?></li>

								<li><?=_('Powerful API');?></li>

								<li><?=_('Sophisticated Anti-Fraud Modules');?></li>

								<li><?=_('Developer Friendly');?></li>

								<li><?=_('Share Files easily between users');?></li>

								<li><?=_('See Insightful Reports');?></li>

							</ul>

						</td>

						<td valign="top">

							<h2><?=_('Neat Features');?></h2>

							<ul class="lc-list-check1">

								<li><?=_('Intergrated Help Desk');?></li>

								<li><?=_('Real time online user list');?></li>

								<li><?=_('Highly Optimized for performance');?></li>

								<li><?=_('Support for multiple levels of taxes');?></li>

								<li><?=_('Intergrated with iPhone &amp; Google Android');?></li>

							</ul>

						</td>

					</tr>

					</table>

				</div>

                

                <div id="info7" class="lc-box" style="display:none">

					<h2>BILLmanager</h2>

					<p><?=_('BILLmanager allows you to take the next step in your online business evolution by offering you a reliable and stable solution that will conform to your every need and desire. Having been in development for over a decade, BILLmanager is one of the fastest growing billing systems around, guaranteeing you\'ll never be left alone in the dark. ');?> </p>

					<table width="100%" cellpadding="0" cellspacing="0">

					<tr>

						<td valign="top">

							<h2><?=_('General Overview');?></h2>

							<ul class="lc-list-check1">

								<li><?=_('Easily Scalable');?></li>

								<li><?=_('Expensive API');?></li>

								<li><?=_('Multicurrency Support');?></li>

								<li><?=_('24+ Payment Gateways');?></li>

								<li><?=_('Modern Interface');?></li>

								<li><?=_('Accurate Reporting');?></li>

							</ul>

						</td>

						<td valign="top">

							<h2><?=_('Neat Features');?></h2>

							<ul class="lc-list-check1">

								<li><?=_('Event Management');?></li>

								<li><?=_('Control Panel Integrations');?></li>

								<li><?=_('21+ Domain Registrar Modules');?></li>

								<li><?=_('Extensive anti-fraud protection');?></li>

								<li><?=_('Modular Design');?></li>

                                <li><?=_('And much more…');?></li>

							</ul>

						</td>

					</tr>

					</table>

				</div>

                

                

                <div id="info8" class="lc-box" style="display:none">

					<h2>Ubersmith</h2>

					<p><?=_('Build your online presence on a solid foundation. Ubersmith provides you with all the tools you need to get started in not only automating your online business, but also to expand it. Not only is Ubersmith able to handle automation, but also device monitoring, ensuring that a server is never offline without you being alerted!');?> </p>

					<table width="100%" cellpadding="0" cellspacing="0">

					<tr>

						<td valign="top">

							<h2><?=_('General Overview');?></h2>

							<ul class="lc-list-check1">

								<li><?=_('Account Automation');?></li>

								<li><?=_('Device Automation');?></li>

								<li><?=_('Device Monitoring');?></li>

								<li><?=_('Bandwidth Billing');?></li>

								<li><?=_('Enterprise Security');?></li>

								<li><?=_('Intuitive Interface');?></li>

							</ul>

						</td>

						<td valign="top">

							<h2><?=_('Neat Features');?></h2>

							<ul class="lc-list-check1">

								<li><?=_('Multilingual Support');?></li>

								<li><?=_('Multiple Payment Options');?></li>

								<li><?=_('Easy Navigation');?></li>

								<li><?=_('Fully Featured API');?></li>

								<li><?=_('Multicurrency Support');?></li>

                                <li><?=_('And much more...');?></li>

							</ul>

						</td>

					</tr>

					</table>

				</div>

                

				</div>



			</td>

		</tr>

		</table>

        <!--<div class="lc-logos"><img src="<?php//$img_dir?>/logos.gif" width="915" height="92" alt="LicenseCube logo" /></div>-->

	</div>



</div></div>

<?php include_once("../_include/modules/footer.php"); ?>

<?php include_once("../_include/modules/additional.php"); ?>

</div>

</body>

</html>

