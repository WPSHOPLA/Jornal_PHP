<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
<?php include_once("../_include/modules/pricing.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$billing_ubersmith_title?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<?=$billing_ubersmith_keywords?>" />
	<meta name="description" content="<?=$billing_ubersmith_meta_description?>" />
	<meta name="author" content="<?=$author?>" />
	<meta name="copyright" content="<?=$copyright?>" />
	<link href="<?=$img_dir?>/favicon.ico" rel="shortcut icon" />
	<?php $css=""; include_once("../_include/modules/css.php"); ?>
	<?php $java=""; include_once("../_include/modules/java.php"); ?>
<!--   	<script src="<?=$site_dir?>/../_include/js/colorbox.js" type="text/javascript"></script> -->
	<script type="text/javascript">
		$(document).ready(function(){
			$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:385});
		});
	</script>
</head>
<body>
<div class="wrapper">
<?php $menu="billing"; include_once("../_include/modules/header.php"); ?>
<div class="lc-header-inner"><div class="lc-header-inner-holder">
	<div class="header"><?php print ("$billing_ubersmith_message"); ?></div>
</div></div>
<div class="lc-content"><div class="lc-content-holder">

	<div class="lc-content-wrapper-inner">
		<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td class="lc-content-left" valign="top">

				<?php $left="billing"; $page="bill8"; include_once("../_include/modules/left.php"); ?>

			</td>
			<td class="lc-content-right" valign="top">
				<?php if (!empty($global_plan->lc_license_comment_message)): ?>
                			<div  id="message" class="lc-box-alert"><?php echo $global_plan->lc_license_comment_message; ?></div>
				<?php endif; ?>	
				<h1>Ubersmith</h1>
                
				<div class="lc-box">
					<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td class="lc-service-info" valign="top">
							<p><?=_('Choosing Ubersmith is much like choosing a multifaceted Swiss army knife; it can literally do anything and everything you ask of it. Whether you are looking at releasing a new service, or automating existing processes, Ubersmith is the essential module you need to get your entire workflow automated. Just remember, should Ubersmith not have what you need, you can build a module within minutes to make it happen!');?> </p>
							<ul class="lc-list-check1">
								<li><?=_('Bandwidth Monitoring/Billing');?></li>
								<li><?=_('Account Automation');?></li>
								<li><?=_('50+ Payment Gateways');?></li>
							<!--<li><?=_('Advanced Monitoring');?></li>-->
							</ul>
							<img src="<?=$img_dir?>/service-logo-ubersmith.png" alt="<?=_('Ubersmith Logo');?>" />
						</td>
						<td valign="top">
							<div id="screen1" class="lc-service-screen"><img src="<?=$img_dir?>/ubersmith-license.jpg" width="320" height="223" alt="<?=_('Ubersmith license screenshot');?>" /></div>
							<div class="lc-service-order">
								<table width="100%" cellpadding="0" cellspacing="0">
								<tr>
									<td valign="top">
										<div class="lc-service-price1">$<?=$global_plan->price?></div>
										<div class="lc-service-price1-info"><?=_('per month');?></div>
									</td>
									<td valign="top">
										<div class="lc-float-right"><a class="button-grey" href="javascript: return false;" rel="nofollow">Unavailable<span></span></a></div>
										<div class="lc-clear"><!-- --></div>
									</td>
								</tr>
								</table>
							</div>
						</td>
					</tr>
					</table>
					<div class="lc-bar">
						<table width="100%" cellpadding="0" cellspacing="0">
						<tr>
							<td><h2><?=_('Once you\'ve tried it, you\'ll love it...');?></h2></td>
							<td>
                            	<div class="lc-float-right"><a class="youtube" href="<?php print ("$bsystem_ubersmith_video"); ?>" title="<?php print ("$bsystem_ubersmith_video_title"); ?>"><img src="<?=$img_dir?>/buttons/view-in-action-<?=getActualPage()?>.png" width="127" height="29" alt="<?=_('$bsystem_ubersmith_video_title');?>" /></a></div>                            
								<!--<div class="lc-float-right" style="padding-right:7px"><a href="<?php print("$bsystem_whmcs_demo"); ?>" target="_blank" title="Ubersmith Demo"><img src="<?=$img_dir?>/buttons/view-demo.png" width="110" height="29" alt="Try before you buy with the Ubersmith license demo" /></a></div>-->
								<div class="lc-clear"><!-- --></div>
							</td>
						</tr>
						</table>
					</div>
				</div>
				<div class="lc-spacer"><!-- --></div>
				<div class="lc-box">
					<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td class="lc-feature-leftf" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon1.gif" width="72" height="71" alt="<?=_('With multiple control panel support Ubersmith is one of the most powerful billing systems');?>" />
							<h2><?=_('Payment Gateways');?></h2>
							<p><?=_('Having one of the largest selections of payment gateways, Ubersmith makes it easy to integrate into your existing processors, such as PayPal, Liberty Reserve, AliPay, and many others. That\'s not mentioning the countless amount of new payment gateways always being added on version upgrades.');?></p>
						</td>
						<td class="lc-feature-rightf" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon6.gif" width="72" height="71" alt="<?=_('Ubersmith license supports a massive amount of payment gateways');?>" />
							<h2><?=_('Advanced Monitoring');?></h2>
							<p><?=_('Monitoring your devices doesn\'t have to be tricky and confusing. Ubersmith has a built-in feature which allows you to quickly and easily manage and monitor all your devices from within the "Device Manager" option directly within Ubersmith. You can even group devices within the "Device Manager" based upon location, rack, and/or positions within the rack!');?></p>
						</td>
					</tr>
					<tr>
						<td class="lc-feature-spacer"><!-- --></td>
						<td class="lc-feature-spacer"><!-- --></td>
					</tr>
					<tr>
						<td class="lc-feature-left" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon4.gif" width="72" height="71" alt="<?=_('Automate account provisioning and termination with a Ubersmith license');?>" />
							<h2><?=_('Control Panels');?></h2>
							<p><?=_('Having to manually provision accounts can be a burden, especially if you are growing quickly. For this very reason, Ubersmith has integrated with over twenty different control panel vendors, such as Plesk, cPanel, DirectAdmin, InterWorx, ISPmanager, and many others to make your life as simple as possible. ');?></p>
						</td>
						<td class="lc-feature-right" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon7.gif" width="72" height="71" alt="<?=_('Intergrate with over 20 domain registrars with your Ubersmith license');?>" />
							<h2><?=_('Payment Validation');?></h2>
							<p><?=_('Ever provision a service only to find that the customer had already issued a chargeback or reversal? Using Ubersmith you no longer have to worry about this, as Ubersmith will validate the transaction every five minutes, and cancel the order if this happened. This is just another way to simplify your life. ');?></p>
						</td>
					</tr>
					</table>
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
