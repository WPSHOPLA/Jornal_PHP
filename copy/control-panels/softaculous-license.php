<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
<?php include_once("../_include/modules/pricing.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$controlp_softac_title?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<?=$controlp_softac_keywords?>" />
	<meta name="description" content="<?=$controlp_softac_meta_description?>" />
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
<?php $menu="cp"; include_once("../_include/modules/header.php"); ?>
<div class="lc-header-inner"><div class="lc-header-inner-holder">
	<div class="header"><?php print ("$vps_softacl_message"); ?></div>
</div></div>
<div class="lc-content"><div class="lc-content-holder">

	<div class="lc-content-wrapper-inner">
		<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td class="lc-content-left" valign="top">

				<?php $left="cp"; $page="cp4"; include_once("../_include/modules/left.php"); ?>

			</td>
			<td class="lc-content-right" valign="top">
<?php if (!empty($global_plan->lc_license_comment_message)): ?>
                			<div  id="message" class="lc-box-alert"><?php echo $global_plan->lc_license_comment_message; ?></div>
				<?php endif; ?>
				<h1>Softaculous</h1>
                
				<div class="lc-box">
					<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td class="lc-service-info" valign="top">
							<p><?=_('Softaculous having over 200+ scripts that are installable with just one-click, this is one of the most comprehensive auto-installers in the market today. Additionally, Softaculous is versatile enough to support multiple control panels including DirectAdmin and cPanel/WHM.');?></p>
							<ul class="lc-list-check1">
								<li><?=_('2x Faster than the competition');?></li>
								<li><?=_('Script installs in just one-step');?></li>
								<li><?=_('Multi Control Panel Support');?></li>
								<li><?=_('Fast &amp; Secure update process');?></li>
								<li><?=_('Easily Import from other installers');?></li>
							</ul>
							<img src="<?=$img_dir?>/softaculous-logo.gif" alt="<?=_('Softaculous License');?>" />
						</td>
						<td valign="top">
							<div id="screen1" class="lc-service-screen"><img src="<?=$img_dir?>/softaculous-screen.jpg" width="320" height="223" alt="<?=_('Softaculous License Screenshot');?>" /></div>
							<div class="lc-service-order">
								<table width="100%" cellpadding="0" cellspacing="0">
								<tr>
									<td valign="top">
										<?php if (empty($_SERVER['QUERY_STRING'])) { ?>
										<div class="lc-service-price1-info"><?=_('Starting at');?></div>
										<div class="lc-service-price1">$<?=$global_plan->price?><?=_('/mo');?></div>
										<?php } else if (array_key_exists('vps', $_REQUEST)) { ?>
										<div class="lc-service-price1">$<?=$global_plan->price?><?=_('/mo');?></div>
										<div class="lc-service-price1-info"><?=_('(VPS license)');?></div>
										<?php } else if (array_key_exists(_('dedicated'), $_REQUEST)) { ?>
										<div class="lc-service-price1">$<?=$global_plan->price?><?=_('/mo');?></div>
										<div class="lc-service-price1-info"><?=_('(Dedicated license)');?></div>
										<?php } ?>
									</td>
									<td valign="top">
										<div class="lc-float-right"><?=order_link_button(_("Order your Softaculous License now"));?></div>
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
							<td><h2><?=_('Softaculous one-click auto-installer is awaiting you...');?> </h2></td>
							<td>
                            <div class="lc-float-right"><a class="youtube" href="<?php print("$vps_softacl_video"); ?>" title="<?php print("$vps_softacl_video_title"); ?>"><img src="<?=$img_dir?>/buttons/view-in-action-<?=getActualPage()?>.png" width="127" height="29" alt="<?=_('Softaculous license interactive video');?>" /></a></div>
								<!--<div class="lc-float-right" style="padding-right:7px"><a href="<?php print("$vps_softacl_demo"); ?>" target="_blank" title="Softaculous Demo"><img src="<?=$img_dir?>/buttons/view-demo.png" width="110" height="29" alt="View the Softaculous License Demo" /></a></div>-->
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
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon1.gif" width="72" height="71" alt="<?=_('Fast Softaculous updates');?>" />
						  <h2><?=_('Fast Script Updates');?></h2>
						<p><?=_('Updates are extremely important. Updates within Softaculous not only fix issues, but also add new applications you can install with a single click. Softaculous updates also ensure, you have the latest version updates from providers such as WordPress.');?></p></td>
						<td class="lc-feature-rightf" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon4.gif" width="72" height="71" alt="<?=_('Install your Softaculous license with one-step');?>" />
							<h2><?=_('One-Step Installs');?></h2>
							<p><?=_('Unlike traditional installers, Softaculous uses a one-step installer, which only requires a few brief items filled out to complete the installation. Softaculous license means faster script installations, and less hassle when it comes to deploying new scripts on your website. ');?>  </p>
						</td>
					</tr>
					<tr>
						<td class="lc-feature-spacer"><!-- --></td>
						<td class="lc-feature-spacer"><!-- --></td>
					</tr>
					<tr>
						<td class="lc-feature-left" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon3.gif" width="72" height="71" alt="<?=_('Softaculous works for cPanel/WHM, DirectAdmin and other licenses');?>" />
							<h2><?=_('Control Panel Support');?></h2>
							<p><?=_('Softaculous license supports multiple control panels including DirectAdmin and cPanel/WHM. Installation is easy, simply download the correct Softaculous installer for your control panel, and the rest is pretty much done for you.');?> </p>
						</td>
						<td class="lc-feature-right" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon7.gif" width="72" height="71" alt="<?=_('easily install scripts with a Softaculous license');?>" />
							<h2><?=_('Wide Selection');?></h2>
							<p><?=_('Having a wide selection of easily installable scripts is important. This is why Softaculous has the widest selection of one-click installable scripts on the market currently.');?></p>
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
