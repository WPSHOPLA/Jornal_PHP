<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
<?php include_once("../_include/modules/pricing.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$billing_whmcs_title?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<?=$billing_whmcs_keywords?>" />
	<meta name="description" content="<?=$billing_whmcs_meta_description?>" />
	<meta name="author" content="<?=$author?>" />
	<meta name="copyright" content="<?=$copyright?>" />
	<link href="<?=$img_dir?>/favicon.ico" rel="shortcut icon" />
	<?php $css=""; include_once("../_include/modules/css.php"); ?>
	<?php $java=""; include_once("../_include/modules/java.php"); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="http://www.licensecube.com/responsive.css" rel="stylesheet" type="text/css" />
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
	<div class="header"><?php print ("$billing_whmcs_message"); ?></div>
</div></div>
<div class="lc-content"><div class="lc-content-holder">

	<div class="lc-content-wrapper-inner">
		<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td class="lc-content-left" valign="top">

				<?php $left="billing"; $page="bill1"; include_once("../_include/modules/left.php"); ?>

			</td>
			<td class="lc-content-right" valign="top">
				<?php if (!empty($global_plan->lc_license_comment_message)): ?>
                			<div  id="message" class="lc-box-alert"><?php echo "WHMCS licenses are only available on servers that are managed by one of our sister companies.  Request a server quote if you would like WHMCS from Licensecube" ; ?></div>
				<?php endif; ?>	
				<h1>WHMCS</h1>
                
				<div class="lc-box">
					<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td class="lc-service-info" valign="top">
							<p><?=_('WHMCS is a powerful all-in-one client management system that handles everything from signup to termination of an account.  WHMCS is easily customizable and a perfect fit for anyone who is looking at running subscription-based services.');?> </p>
							<ul class="lc-list-check1">
								<li><?=_('Multi-Language Support');?></li>
								<li><?=_('Developer Friendly');?></li>
								<li><?=_('Automated Provisioning');?></li>
								<li><?=_('Integrated Support Center');?></li>
								<li><?=_('Extensive module library');?></li>
							</ul>
							<img src="<?=$img_dir?>/service-logo-whmcs.gif" alt="<?=_('WHMCS Logo');?>" />
						</td>
						<td valign="top">
							<div id="screen1" class="lc-service-screen"><img src="<?=$img_dir?>/whmcs.jpg" width="320" height="223" alt="<?=_('WHMCS license screenshot');?>" /></div>
							<div class="lc-service-order">
								<table width="100%" cellpadding="0" cellspacing="0">
								<tr>
									<td valign="top">
										<div class="lc-service-price1">$<?=$global_plan->price?></div>
										<div class="lc-service-price1-info"><?=_('per month');?></div>
									</td>
									<td valign="top">
										<div class="lc-float-right"><?=order_link_button(_("Start using your WHMCS license today!"));?></div>
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
							<td><h2><?=_('Let\'s try a WHMCS license on for size...');?></h2></td>
							<td>
                            	<div class="lc-float-right"><a class="youtube" href="<?php print ("$bsystem_whmcs_video"); ?>" title="<?php print ("$bsystem_whmcs_video_title"); ?>"><img src="<?=$img_dir?>/buttons/view-in-action-<?=getActualPage()?>.png" width="127" height="29" alt="<?=_('WHMCS Billing System Interactive Video');?>" /></a></div>                            
								<!--<div class="lc-float-right" style="padding-right:7px"><a href="<?php print("$bsystem_whmcs_demo"); ?>" target="_blank" title="WHMCS Demo"><img src="<?=$img_dir?>/buttons/view-demo.png" width="110" height="29" alt="Try before you buy with the WHMCS license demo" /></a></div>-->
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
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon1.gif" width="72" height="71" alt="<?=_('With multiple control panel support WHMCS is one of the most powerful billing systems');?>" />
							<h2><?=_('Control Panels');?></h2>
							<p><?=_('WHMCS has one of the widest selections of control panel integrations. Control panels range from the all-famous cPanel/WHM to the more unknown control panels of the past such as Helm 3 and everything in between. If you\'re looking for a versatile billing system, WHMCS has to be the one when it comes to control panel support.');?></p>
						</td>
						<td class="lc-feature-rightf" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon6.gif" width="72" height="71" alt="<?=_('WHMCS license supports a massive amount of payment gateways');?>" />
							<h2><?=_('Payment Gateways');?></h2>
							<p><?=_('Talking about payment gateways, you\'ve never seen such a vast support of gateways with any other billing system. Supporting over 56 independent gateways WHMCS has the most impressive integrations in the industry. It almost seems like WHMCS has a no payment gateway left behind policy.');?></p>
						</td>
					</tr>
					<tr>
						<td class="lc-feature-spacer"><!-- --></td>
						<td class="lc-feature-spacer"><!-- --></td>
					</tr>
					<tr>
						<td class="lc-feature-left" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon4.gif" width="72" height="71" alt="<?=_('Automate account provisioning and termination with a WHMCS license');?>" />
							<h2><?=_('Account Automation');?></h2>
							<p><?=_('Automation is essential in any online business. Automation helps drive down costs, while improving productivity. WHMCS license gives you all the tools you need to automate your account creation, and day-to-day management.');?></p>
						</td>
						<td class="lc-feature-right" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon7.gif" width="72" height="71" alt="<?=_('Intergrate with over 20 domain registrars with your WHMCS license');?>" />
							<h2><?=_('Domain Registrars');?></h2>
							<p><?=_('While automation is important, WHMCS license gives you the ability to integrate with partners such as domain registrars for those all important domain orders that come in. Being integrated with over 25 domain registrars is another impressive feature that WHMCS displays.');?></p>
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
