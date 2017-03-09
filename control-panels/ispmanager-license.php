<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
<?php include_once("../_include/modules/pricing.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$controlp_ispmanager_title?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<?=$controlp_ispmanager_keywords?>" />
	<meta name="description" content="<?=$controlp_ispmanager_meta_description?>" />
	<meta name="author" content="<?=$author?>" />
	<meta name="copyright" content="<?=$copyright?>" />
	<link href="<?=$img_dir?>/favicon.ico" rel="shortcut icon" />
	<?php $css=""; include_once("../_include/modules/css.php"); ?>
	<?php $java=""; include_once("../_include/modules/java.php"); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="http://www.licensecube.com/responsive.css" rel="stylesheet" type="text/css" />
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
<div class="lc-header-inner px200"><div class="lc-header-inner-holder">
	<div class="header"><?php print ("$vps_ispmanager_message"); ?></div>
</div></div>
<div class="lc-content"><div class="lc-content-holder">

	<div class="lc-content-wrapper-inner">
		<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td class="lc-content-left" valign="top">

				<?php $left="cp"; $page="cp12"; include_once("../_include/modules/left.php"); ?>

			</td>
			<td class="lc-content-right" valign="top">

				<?php if (!empty($global_plan->lc_license_comment_message)): ?>
                			<div  id="message" class="lc-box-alert"><?php echo $global_plan->lc_license_comment_message; ?></div>
				<?php endif; ?> 
				<h1>ISPmanager</h1>
                
				<div class="lc-box">
					<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td class="lc-service-info" valign="top">
							<p><?=_('ISPmanager control panel allows you to easily control every aspect of your customer\'s activity, from complicated multi-faceted issues, to the simpler feature additions and removals. ISPmanager is with you every step of the way.');?></p>
							<ul class="lc-list-check1">
								<li><?=_('Multi-Language Support');?></li>
								<li><?=_('Powerful Developer API');?></li>
								<li><?=_('Low Resource Consumption');?></li>
								<li><?=_('24x7 Multilingual Support');?></li>
                                <li><?=_('Ganular Hosting Controls');?></li>
							</ul>
							<img src="<?=$img_dir?>/ISPmanager.png"  alt="<?=_('ISPmanager License Logo');?>" />
						</td>
						<td valign="top">
							<div id="screen1" class="lc-service-screen"><img src="<?=$img_dir?>/ispmanager.jpg" width="320" height="223" alt="<?=_('ISPmanager License Screenshot');?>" /></div>
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
										<div class="lc-float-right"><?=order_link_button(_("Order your ISPManager License"));?></div>
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
							<td><h2><?=_('Control resources more effectively with ISPmanager...');?></h2></td>
							<td>
                            	<div class="lc-float-right"><a class="youtube" href="<?php print("$cp_ispman_video"); ?>" title="<?php print("$cp_ispman_video_title"); ?>"><img src="<?=$img_dir?>/buttons/view-in-action-<?=getActualPage()?>.png" width="127" height="29" alt="<?=_('GIve ISPmanager a go, you\'ll be glad you did.');?>" /></a></div>                       
								<!--<div class="lc-float-right" style="padding-right:7px"><a href="<?php print ("$cp_ispman_demo"); ?>" target="_blank" title="ISPmanager Demo"><img src="<?=$img_dir?>/buttons/view-demo.png" width="110" height="29" alt="ISPmanager is waiting for you." /></a></div>-->
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
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon3.gif" width="72" height="71" alt="<?=_('ISPmanager Automated Updates');?>" />
							<h2><?=_('Automated Updates');?></h2>
							<p><?=_('Automatic updates take the hassle out of having to be concerned with the security of your website/server. Allow ISPmanager to do all the heavy lifting, while you focus on growth, knowing that ISPmanager license has you covered.');?></p>
						</td>
						<td class="lc-feature-rightf" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon7.gif" width="72" height="71" alt="<?=_('ISPmanager Easy Navigation');?>" />
							<h2><?=_('Easy Navigation');?></h2>
							<p><?=_('ISPmanager, having one of the simplest designs around, has not only managed to pack their control panel full of features, but also has ensured that it is easy and user-friendly all at the same time.');?></p>
						</td>
					</tr>
					<tr>
						<td class="lc-feature-spacer"><!-- --></td>
						<td class="lc-feature-spacer"><!-- --></td>
					</tr>
					<tr>
						<td class="lc-feature-left" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon1.gif" width="72" height="71" alt="<?=_('ISPmanager Rock Solid API');?>" />
							<h2><?=_('Rock Solid API');?></h2>
							<p><?=_('Have you ever wanted to automate, just to find that your control panel does not support it? Well, with the ISPmanager, you will now be able to fully control every aspect of your control panel remotely, via an advanced API. ISPmanager license is just making your life a lot more simpler and easier.');?></p>
						</td>
						<td class="lc-feature-right" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon5.gif" width="72" height="71" alt="<?=_('ISPmanager Ganular Controls');?>" />
							<h2><?=_('Granular Control');?></h2>
							<p><?=_('It is nearly impossible to have control over every aspect of an operating system. However, when it comes to ISPmanager almost every feature you could even begin to ask for is already there.  No more ssh configurations, or on the fly adjustments; you can simply update via the interface, instantly applying the settings for you.');?></p>
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
