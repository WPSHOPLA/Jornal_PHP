<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
<?php include_once("../_include/modules/pricing.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$billing_blesta_title?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<?=$billing_blesta_keywords?>" />
	<meta name="description" content="<?=$billing_blesta_meta_description?>" />
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
<div class="lc-header-inner px200"><div class="lc-header-inner-holder">
	<div class="header"><?php print ("$billing_blesta_message"); ?></div>
</div></div>
<div class="lc-content"><div class="lc-content-holder">

	<div class="lc-content-wrapper-inner">
		<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td class="lc-content-left" valign="top">

				<?php $left="billing"; $page="bill4"; include_once("../_include/modules/left.php"); ?>

			</td>
			<td class="lc-content-right" valign="top">
<?php if (!empty($global_plan->lc_license_comment_message)): ?>
                			<div  id="message" class="lc-box-alert"><?php echo $global_plan->lc_license_comment_message; ?></div>
				<?php endif; ?>
				<h1>Blesta</h1>
                
				<div class="lc-box">
					<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td class="lc-service-info" valign="top">
							<p><?=_('Blesta is a unified billing system that does billing, support and client management. Blesta modular design means that it can work for a wide spectrum of business types from web hosting companies, to developers and many other custom niches.');?></p>
							<ul class="lc-list-check1">
								<li><?=_('Clean &amp; Intuitive');?></li>
								<li><?=_('Super-Easy Management');?></li>
								<li><?=_('Automated Invoicing/Backups');?></li>
                                <li><?=_('Email/Web Based Ticketing');?></li>
								<li><?=_('Developers Friendly &amp; unencoded');?></li>
							</ul>
							<img src="<?=$img_dir?>/service-logo-blesta.gif" alt="<?=_('Blesta license logo');?>" />
						</td>
						<td valign="top">
							<div id="screen1" class="lc-service-screen"><img src="<?=$img_dir?>/blestabilling.jpg" width="320" height="223" alt="<?=_('Blesta License ScreenShot');?>" /></div>
							<div class="lc-service-order">
								<table width="100%" cellpadding="0" cellspacing="0">
								<tr>
									<td valign="top">
										<div class="lc-service-price1">$<?=$global_plan->price?>
</div>
										<div class="lc-service-price1-info"><?=_('per month');?></div>
									</td>
									<td valign="top">
										<div class="lc-float-right"><?=order_link_button(_("Get your Blesta license and start selling services"));?></div>
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
							<td><h2><?=_('Try out Blesta, you\'ll be impressed...');?></h2></td>
							<td>
								<div class="lc-float-right"><a class="youtube" href="<?php print ("$bsystem_blesta_video"); ?>" title="<?php print ("$bsystem_blesta_video_title"); ?>"><img src="<?=$img_dir?>/buttons/view-in-action-<?=getActualPage()?>.png" width="127" height="29" alt="<?=_('Watch the intuative Blesta license demo in action');?>" /></a></div>
								<!--<div class="lc-float-right" style="padding-right:7px"><a href="<?php print ("$bsystem_blesta_demo"); ?>" target="_blank" title="Blesta Demo"><img src="<?=$img_dir?>/buttons/view-demo.png" width="110" height="29" alt="Give your Blesta license a wirl with this interactive demo" /></a></div>-->
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
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon10.gif" width="72" height="71" alt="<?=_('How Blesta is clean and informative');?>" />
							<h2><?=_('Clean &amp; Informative');?></h2>
							<p><?=_('Keeping workflow as simple as possible is at the heart of the Blesta interface design. Using AJAX functionality with Blesta license, most of the common daily functions such as; suspending or unsuspending customers can be completed with a single click. Doing this allows you to stay focused on your goals of running a business.');?></p>
						</td>
						<td class="lc-feature-rightf" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon5.gif" width="72" height="71" alt="<?=_('How to automate everything in billing with a Blesta license');?>" />
							<h2><?=_('Automated Billing');?></h2>
							<p><?=_('When working with any billing system, one thing above everything else that is key: automation. Blesta understood this early on, so they set around building a fully automated billing system that can do more then just bill your clients, it can also perform daily backups, and many other handy functions.');?></p>
						</td>
					</tr>
					<tr>
						<td class="lc-feature-spacer"><!-- --></td>
						<td class="lc-feature-spacer"><!-- --></td>
					</tr>
					<tr>
						<td class="lc-feature-left" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon1.gif" width="72" height="71" alt="<?=_('Blesta is extremely developer friendly');?>" />
							<h2><?=_('Developer Friendly');?></h2>
							<p><?=_('Developers, where would a billing system be without you? Blesta has stood fast to their promise of openness. With Blesta license you will find that they are more unencoded modules, gateways, and other functions than any other billing system.');?> </p>
						</td>
						<td class="lc-feature-right" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon9.gif" width="72" height="71" alt="<?=_('Blesta features Enterprise Security');?>" />
							<h2><?=_('Enterprise Security');?></h2>
							<p><?=_('When it comes to security, nothing is more paramount. Blesta understands this, and constantly improves its systems and security with every release, so that there are never vulnerabilities within their systems, even if it\'s at the cost of a few extra Blesta features.');?></p>
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
