<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
<?php include_once("../_include/modules/pricing.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$controlp_virtuo_title?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<?=$controlp_virtuo_keywords?>" />
	<meta name="description" content="<?=$controlp_virtuo_meta_description?>" />
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
<?php $menu="cp"; include_once("../_include/modules/header.php"); ?>
<div class="lc-header-inner"><div class="lc-header-inner-holder">
	<div class="header"><?php print ("$dedicated_virtuozzo_message"); ?></div>
</div></div>
<div class="lc-content"><div class="lc-content-holder">

	<div class="lc-content-wrapper-inner">
		<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td class="lc-content-left" valign="top">

				<?php $left="cp"; $page="cp6"; include_once("../_include/modules/left.php"); ?>

			</td>
			<td class="lc-content-right" valign="top">
<?php if (!empty($global_plan->lc_license_comment_message)): ?>
                			<div  id="message" class="lc-box-alert"><?php echo $global_plan->lc_license_comment_message; ?></div>
				<?php endif; ?>
				<h1>Virtuozzo <?php print("$dedicated_virtuozzo"); ?></h1>
                
				<div class="lc-box">
					<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td class="lc-service-info" valign="top">
							<p><?=_('Virtuozzo allows you to take your business to the next level. Virtuozzo virtualization platform enables resellers to start offering VPS services directly from their rented or colocated servers. Parallels Virtuozzo is widely supported so installation of this software is a breeze.');?></p>
							<ul class="lc-list-check1">
								<li><?=_('Easy Integration');?></li>
								<li><?=_('On-fly resource management');?></li>
								<li><?=_('Resource Isolation');?></li>
								<li><?=_('Easy-to-use central management');?></li>
								<li><?=_('Live server migration');?></li>
							</ul>
							<img src="<?=$img_dir?>/service-logo-parallelsvirtuozzo.gif" alt="<?=_('Virtuozzo license logo');?>" />
						</td>
						<td valign="top">
							<div id="screen1" class="lc-service-screen"><img src="<?=$img_dir?>/virtuozzo.jpg" width="320" height="223" alt="<?=_('Virtuozzo license screenshot');?>" /></div>
							<div class="lc-service-order" style="padding-top: 25px;">
								<table width="100%" cellpadding="0" cellspacing="0">
								<tr>
									<td valign="middle">
                                    <div class="lc-service-price1-info"><?=_('Starting at');?></div>
										<div class="lc-service-price1">$<?=$global_plan->price?><?=_('/mo');?></div>
									</td>
									<td valign="top">
										<div class="lc-float-right"><?=order_link_button(_("Get started today with your Virtuozzo license"));?></div>
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
							<td><h2><?=_('Virtuozzo license, it can increase your revenue...');?></h2></td>
							<td>
                                <div class="lc-float-right"><a class="youtube" href="<?php print ("$cp_virtuozzo_video"); ?>" title="<?php print ("$cp_virtuozzo_video_title"); ?>"><img src="<?=$img_dir?>/buttons/view-in-action-<?=getActualPage()?>.png" width="127" height="29" alt="<?=_('View the virtuozzo license in action');?>" /></a></div>
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
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon5.gif" width="72" height="71" alt="<?=_('How the Virtuozzo license can automate your business');?>" />
							<h2><?=_('Automated Process');?></h2>
							<p><?=_('Provisioning a VPS doesn\'t have to be a manual process anymore. Virtuozzo has all the tools to fully automate account; creation, suspension, deletion, and many other daily functions that help automate daily tasks for administrators.');?></p>
						</td>
						<td class="lc-feature-rightf" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon2.gif" width="72" height="71" alt="<?=_('Virtuozzo licenses support multiple operating systems');?>" />
							<h2><?=_('Multiple OSes');?></h2>
							<p><?=_('Support almost any Linux based operating system on your Virtuozzo license installation. Using pre-defined templates with Virtuozzo you can get any operating system of choice online within a few short minuets, and that\'s a fact.');?></p>
						</td>
					</tr>
					<tr>
						<td class="lc-feature-spacer"><!-- --></td>
						<td class="lc-feature-spacer"><!-- --></td>
					</tr>
					<tr>
						<td class="lc-feature-left" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon6.gif" width="72" height="71" alt="<?=_('Virtuozzo license allows you to intergrate with an api');?>" />
							<h2><?=_('API Integration');?></h2>
							<p><?=_('Virtuozzo core  has a powerful and very flexible API, which allows developers to do almost anything. Virtuozzo license allows your users to adjust resources on the fly, or downgrade a VPS\'s resources with a single click. You are in total control when it comes to being able to easily manage Virtuozzo and its feature set.');?></p>
						</td>
						<td class="lc-feature-right" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon10.gif" width="72" height="71" alt="<?=_('buy a Virtuozzo license and fully manage your network from one location');?>" />
							<h2><?=_('Central Management');?></h2>
							<p><?=_('Imagine the ability to fully manage every Virtuozzo hardware node within your network from licensing to updates from one easy to use central interface. Well, Virtuozzo license allows you to do just that; one easy interface allows you control all server resources, and backups and so much more.');?> </p>
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
