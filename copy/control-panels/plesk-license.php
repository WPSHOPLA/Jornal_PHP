<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
<?php include_once("../_include/modules/pricing.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$controlp_plesk_title?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<?=$controlp_plesk_keywords?>" />
	<meta name="description" content="<?=$controlp_plesk_meta_description?>" />
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
	<div class="header"><?php print ("$vps_plesk_message"); ?></div>
</div></div>
<div class="lc-content"><div class="lc-content-holder">

	<div class="lc-content-wrapper-inner">
		<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td class="lc-content-left" valign="top">

				<?php $left="cp"; $page="cp2"; include_once("../_include/modules/left.php"); ?>

			</td>
			<td class="lc-content-right" valign="top">
<?php if (!empty($global_plan->lc_license_comment_message)): ?>
                			<div  id="message" class="lc-box-alert"><?php echo $global_plan->lc_license_comment_message; ?></div>
				<?php endif; ?>
				<h1>Plesk Panel <?php print("$vps_plesk_version"); ?></h1>
                
				<div class="lc-box">
					<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td class="lc-service-info" valign="top">
							<p><?=_("Parallels Plesk control panel allows you to quickly create and update websites, easily and add new services as your customer's needs change. Additionally, Plesk Panel allows you to manage service resources without having to learn any new skills. Plesk just works, right out of the box.");?></p>
							<ul class="lc-list-check1">
								<li><?=_('Easy Website Creation');?></li>
								<li><?=_('Friendly user interface');?></li>
								<li><?=_('Multi language support');?></li>
								<li><?=_('Add/Remove based upon business');?></li>
								<li><?=_('Google Tools Integration');?></li>
							</ul>
							<img src="<?=$img_dir?>/service-logo-parallelspleskpanel.gif" alt="<?=_('Plesk license logo');?>" />
						</td>
						<td valign="top">
							<div id="screen1" class="lc-service-screen"><img src="<?=$img_dir?>/Plesk10.jpg" width="320" height="223" alt="<?=_('Plesk license screenshot');?>" /></div>
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
										<div class="lc-float-right"><?=order_link_button(_("Get your Plesk license today"));?></div>
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
							<td><h2><?=_('Try Parallels Plesk license on for size...');?></h2></td>
							<td>
								<div class="lc-float-right"><a class="youtube" href="<?php print("$vps_plesk_video"); ?>" title="<?php print("$vps_plesk_video_title"); ?>"><img src="<?=$img_dir?>/buttons/view-in-action-<?=getActualPage()?>.png" width="127" height="29" alt="<?=_('View the Plesk license interactive demo');?>" /></a></div>
								<!--<div class="lc-float-right" style="padding-right:7px"><a href="<?php print("$vps_plesk_demo"); ?>" target="_blank" title="Plesk Demo"><img src="<?=$img_dir?>/buttons/view-demo.png" width="110" height="29" alt="Explore Plesk with an account demo" /></a></div>-->
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
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon5.gif" width="72" height="71" alt="<?=_('Plesk license provides you with role-based access functionality');?>" />
							<h2><?=_('Role-Based Access');?></h2>
							<p><?=_('Parallels Plesk Panel has role-based access (excellent for resellers), which allows administrators to specify which applications a user has access to. Additionally, recent performance improvements makes the Plesk control panel load faster, and also take much less resources then prior versions.');?></p>
						</td>
						<td class="lc-feature-rightf" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon3.gif" width="72" height="71" alt="<?=_('get your plesk license and improve security today');?>" />
							<h2><?=_('Improved Security');?></h2>
							<p><?=_('Assignment of random default passwords and password strength indicators are just some of the recent security enhancements that have been added. Plus, the recent addition of FCGI support with Plesk Panel 10 further isolates sites in a shared hosting environment allowing greater account density and security than the traditional module approach.');?></p>
						</td>
					</tr>
					<tr>
						<td class="lc-feature-spacer"><!-- --></td>
						<td class="lc-feature-spacer"><!-- --></td>
					</tr>
					<tr>
						<td class="lc-feature-left" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon8.gif" width="72" height="71" alt="<?=_('Obtain greater plan flexibility with your Plesk license');?>" />
							<h2><?=_('Plan Flexibility');?></h2>
							<p><?=_("Have you ever wanted to automatically update multiple hosting accounts with a single click and ability to add multiple add-on plans onto one subscription? It is possible with Plesk license. No more manual work involved, just click and all your settings are applied, no matter how many or few customers you have.");?></p>
						</td>
						<td class="lc-feature-right" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon6.gif" width="72" height="71" alt="<?=_('Plesk license provides PCI compliance');?>" />
							<h2><?=_('PCI Compliant');?></h2>
							<p><?=_('Parallels Plesk Panel license guarantee to meet all PCI compliance standards meaning that you can focus on your online business. With Parallels Plesk Panel 10 license you can now easily deploy your e-commerce applications, knowing that they will pass all PCI compliance scans. ');?></p>
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
