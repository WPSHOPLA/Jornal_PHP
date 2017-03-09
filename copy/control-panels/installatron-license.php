<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
<?php include_once("../_include/modules/pricing.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$controlp_instal_title?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<?=$controlp_instal_keywords?>" />
	<meta name="description" content="<?=$controlp_instal_meta_description?>" />
	<meta name="author" content="<?=$author?>" />
	<meta name="copyright" content="<?=$copyright?>" />
	<link href="<?=$img_dir?>/favicon.ico" rel="shortcut icon" />
	<?php $css=""; include_once("../_include/modules/css.php"); ?>
	<?php $java=""; include_once("../_include/modules/java.php"); ?>
 <!-- 	<script src="<?=$site_dir?>/../_include/js/colorbox.js" type="text/javascript"></script> -->
	<script type="text/javascript">
		$(document).ready(function(){
			$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:370});
		});
	</script>
</head>
<body>
<div class="wrapper">
<?php $menu="cp"; include_once("../_include/modules/header.php"); ?>
<div class="lc-header-inner"><div class="lc-header-inner-holder">
	<div class="header"><?php print ("$vps_installatron_message"); ?></div>
</div></div>
<div class="lc-content"><div class="lc-content-holder">

	<div class="lc-content-wrapper-inner">
		<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td class="lc-content-left" valign="top">

				<?php $left="cp"; $page="cp8"; include_once("../_include/modules/left.php"); ?>

			</td>
			<td class="lc-content-right" valign="top">

				<?php if (!empty($global_plan->lc_license_comment_message)): ?>
                			<div  id="message" class="lc-box-alert"><?php echo $global_plan->lc_license_comment_message; ?></div>
				<?php endif; ?> 
				<h1>Installatron</h1>
                
				<div class="lc-box">
					<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td class="lc-service-info" valign="top">
							<p><?=_('Installatron is one of the most popular auto-installers. Supporting over 65+ open-source scripts, Installatron license also can be installed on almost any control panel making it an ideal choice for hosting providers and resellers.');?></p>
							<ul class="lc-list-check1">
								<li><?=_('Completely brandable');?></li>
								<li><?=_('Import from other installers');?></li>
								<li><?=_('Create custom Install scripts');?></li>
								<li><?=_('Integration API (For Customization)');?></li>
								<li><?=_('Fast Application Updates');?></li>
							</ul>
							<img src="<?=$img_dir?>/installatron.gif"  alt="<?=_('Installatron License Logo');?>" />
						</td>
						<td valign="top">
							<div id="screen1" class="lc-service-screen"><img src="<?=$img_dir?>/installatron_screenshot.jpg" width="320" height="223" alt="<?=_('Installatron License Screenshot');?>" /></div>
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
										<div class="lc-float-right"><?=order_link_button(_("Order your Installatron License"));?></div>
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
							<td><h2><?=_('Let Installatron show you the easy way...');?></h2></td>
							<td>
                            	<div class="lc-float-right"><a class="youtube" href="<?php print("$cp_installatron_video"); ?>" title="<?php print("$cp_installatron_video_title"); ?>"><img src="<?=$img_dir?>/buttons/view-in-action-<?=getActualPage()?>.png" width="127" height="29" alt="<?=_('See an Installatron license up close');?>" /></a></div>                         
								<!--<div class="lc-float-right" style="padding-right:7px"><a href="<?php print ("$cp_installatron_demo"); ?>" target="_blank" title="Installatron Demo"><img src="<?=$img_dir?>/buttons/view-demo.png" width="110" height="29" alt="Installatron license account demo" /></a></div>-->
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
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon5.gif" width="72" height="71" alt="<?=_('Installatron Swift Updates');?>" />
							<h2><?=_('Third-Party Integration');?></h2>
							<p><?=_('Are you using a custom theme, or perhaps a theme installed with RVSkins? If so, you\'ll be glad to learn that Installatron will work with it, right out of the box. No other auto-installers can provide you with that level of integration like Installatron!');?></p>
						</td>
						<td class="lc-feature-rightf" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon4.gif" width="72" height="71" alt="<?=_('Installatron Zero Maintenance');?>" />
							<h2><?=_('Zero Maintenance');?></h2>
							<p><?=_('When it comes time to update your auto-installed application, Installatron license makes it easy. Installatron automatically downloads new products and updates on a daily basis via cron, ensuring that you\'re always up-to-date.');?></p>
						</td>
					</tr>
					<tr>
						<td class="lc-feature-spacer"><!-- --></td>
						<td class="lc-feature-spacer"><!-- --></td>
					</tr>
					<tr>
						<td class="lc-feature-left" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon1.gif" width="72" height="71" alt="<?=_('Installatron Intergration API');?>" />
							<h2><?=_('Integration API');?></h2>
							<p><?=_('Have you ever wanted to install an application right as you open an account? Installatron\'s API will allow you to do just that. Have a custom control panel? Just use the API to get Installatron integrated.');?></p>
						</td>
						<td class="lc-feature-right" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon9.gif" width="72" height="71" alt="<?=_('Installatron customized Installers');?>" />
							<h2><?=_('Customized Installers');?></h2>
							<p><?=_('Installatron contains a truly unique feature which allows administrators to make their own software and place it into Installatron for customers to be able to install with a click of a button.');?></p>
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
