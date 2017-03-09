<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
<?php include_once("../_include/modules/pricing.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$controlp_directa_title?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<?=$controlp_directa_keywords?>" />
	<meta name="description" content="<?=$controlp_directa_meta_description?>" />
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
	<div class="header"><?php print ("$vps_directa_message"); ?></div>
</div></div>
<div class="lc-content"><div class="lc-content-holder">

	<div class="lc-content-wrapper-inner">
		<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td class="lc-content-left" valign="top">

				<?php $left="cp"; $page="cp3"; include_once("../_include/modules/left.php"); ?>

			</td>
			<td class="lc-content-right" valign="top">
				<?php if (!empty($global_plan->lc_license_comment_message)): ?>
                			<div  id="message" class="lc-box-alert"><?php echo $global_plan->lc_license_comment_message; ?></div>
				<?php endif; ?>
				<h1>DirectAdmin</h1>
                
				<div class="lc-box">
					<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td class="lc-service-info" valign="top">
							<p><?=_('DirectAdmin is one of the most powerful, yet affordable control panels on the market. DirectAdmin\'s features and speed have made it highly successful while its simplistic design has truly made it a valuable asset in any web master\'s toolkit.');?></p>
								<ul class="lc-list-check1">
								<li><?=_('Simplest control panel');?></li>
								<li><?=_('Lightning-fast support');?></li>
								<li><?=_('Extremely stable');?></li>
								<li><?=_('Low resource requirements');?></li>
								<li><?=_('Great value for money');?></li>
							</ul>
							<img src="<?=$img_dir?>/directadmin-logo.gif" alt="<?=_('DirectAdmin License');?>" />
						</td>
						<td valign="top">
							<div id="screen1" class="lc-service-screen"><img src="<?=$img_dir?>/dascreen.jpg" width="320" height="223" alt="<?=_('DirectAdmin license screenshot');?>" /></div>
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
										<div class="lc-float-right"><?=order_link_button(_("Order your DirectAdmin License"));?></div>
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
							<td><h2><?=_('Let\'s explore DirectAdmin features from within...');?></h2></td>
							<td>
                            <div class="lc-float-right"><a class="youtube" href="<?php print("$vps_direct_video"); ?>" title="<?php print("$vps_direct_video_title"); ?>"><img src="<?=$img_dir?>/buttons/view-in-action-<?=getActualPage()?>.png" width="127" height="29" alt="<?=_('View the DirectAdmin license interactive demo');?>" /></a></div>
								<!--<div class="lc-float-right" style="padding-right:7px"><a href="<?php print("$vps_direct_demo"); ?>" target="_blank" title="DirectAdmin Demo"><img src="<?=$img_dir?>/buttons/view-demo.png" width="110" height="29" alt="DirectAdmin License account demo" /></a></div>-->
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
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon4.gif" width="72" height="71" alt="<?=_('DirectAdmin License Support');?>" />
							<h2><?=_('Superior Support');?></h2>
							<p><?=_('Support that you can really rely on is what DirectAdmin has come to be known for. DirectAdmin is the only provider that offers support via live chat and phone at no additional cost. Other support avenues are also available with DirectAdmin license are email and their online community.');?></p>
						</td>
						<td class="lc-feature-rightf" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon2.gif" width="72" height="71" alt="<?=_('DirectAdmin License Control Panel');?>" />
							<h2><?=_('Blazing Speed');?></h2>
							<p><?=_('DirectAdmin is a control panel that loads quickly is essential, as time waiting is time lost. When it comes to DirectAdmin, their control panel loads faster than any of its rivals. So if you are looking for a control panel that is fast loading, fully featured, and yet affordable, DirectAdmin is the undisputed champion.');?></p>
						</td>
					</tr>
					<tr>
						<td class="lc-feature-spacer"><!-- --></td>
						<td class="lc-feature-spacer"><!-- --></td>
					</tr>
					<tr>
						<td class="lc-feature-left" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon3.gif" width="72" height="71" alt="<?=_('DirectAdmin License Installation');?>" />
							<h2><?=_('Installation = Easy');?></h2>
							<p><?=_('When it comes to installation, other rival control panels tend to be pickier in how they are installed. However, DirectAdmin license will work on just about anything Linux. Bare minimum resource requirements also make DirectAdmin a true winner when it comes to running it on a VPS.');?></p>
						</td>
						<td class="lc-feature-right" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon5.gif" width="72" height="71" alt="<?=_('DirectAdmin License Navigation');?>" />
							<h2><?=_('Simplicity/Usability');?></h2>
							<p><?=_('We will have to agree DirectAdmin isn\'t the prettiest when it comes to control panel designs. However, what sets it apart is usability. When it comes to managing and doing daily tasks, with DirectAdmin you won\'t have to hunt for options that have been relocated from version to version, and that\'s great.');?> </p>
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
