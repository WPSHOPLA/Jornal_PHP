<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
<?php include_once("../_include/modules/pricing.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$controlp_enkomp_title?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<?=$controlp_enkomp_keywords?>" />
	<meta name="description" content="<?=$controlp_enkomp_meta_description?>" />
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
	<div class="header"><?php print ("$dedicated_enkompass"); ?></div>
</div></div>
<div class="lc-content"><div class="lc-content-holder">

	<div class="lc-content-wrapper-inner">
		<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td class="lc-content-left" valign="top">

				<?php $left="cp"; $page="cp5"; include_once("../_include/modules/left.php"); ?>

			</td>
			<td class="lc-content-right" valign="top">
<?php if (!empty($global_plan->lc_license_comment_message)): ?>
                			<div  id="message" class="lc-box-alert"><?php echo $global_plan->lc_license_comment_message; ?></div>
				<?php endif; ?>
				<h1>Enkompass</h1>
                
				<div class="lc-box">
					<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td class="lc-service-info" valign="top">
							<p><?=_('Enkompass by cPanel is one of the fastest growing control panels for Windows on the market currently. Popping with features, Enkompass has proven to be a cost-effective, stable, and scalable control panel to work specifically on a Windows platform.');?></p>
							<ul class="lc-list-check1">
								<li><?=_('Windows Server 2008 Support');?></li>
								<li><?=_('Highly Scalable');?> </li>
								<li><?=_('Reduced Licensing Costs');?></li>
								<li><?=_('Extreme Flexibility');?></li>
								<li><?=_('Consistency with cPanel/WHM');?></li>
                                <li><?=_('Active Directory Integrated');?></li>
							</ul>
							<img src="<?=$img_dir?>/service-logo-enkompass.gif" alt="<?=_('Enkompass License logo');?>" />
						</td>
						<td valign="top">
							<div id="screen1" class="lc-service-screen"><img src="<?=$img_dir?>/enkompass.jpg" width="320" height="223" alt="<?=_('Enkompass License Screenshot');?>" /></div>
							<div class="lc-service-order" style="padding-top: 25px;">
								<table width="100%" cellpadding="0" cellspacing="0">
								<tr>
									<td valign="top">
										<div class="lc-service-price1">$<?=$global_plan->price?><?=_('/mo');?></div>
									</td>
									<td valign="top">
										<div class="lc-float-right"><?=order_link_button(_("Order your Enkompass License"));?></div>
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
							<td><h2><?=_('It\'s Enkompass license by cPanel just for Windows...');?></h2></td>
							<td>
                            	<div class="lc-float-right"><a class="youtube" href="<?php print("$cp_enkompass_video"); ?>" title="<?php print("$cp_enkompass_video_title"); ?>"><img src="<?=$img_dir?>/buttons/view-in-action-<?=getActualPage()?>.png" width="127" height="29" alt="<?=_('See InterWorx in action...');?>" /></a></div>
								<!--<div class="lc-float-right" style="padding-right:7px"><a href="<?php print("$cp_enkompass_demo"); ?>" target="_blank" title="Encompass Demo"><img src="<?=$img_dir?>/buttons/view-demo.png" width="110" height="29" alt="Enkompass License Account Demo" /></a></div>-->
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
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon1.gif" width="72" height="71" alt="<?=_('Enkompass license simular design');?>" />
							<h2><?=_('Design Consistency');?></h2>
							<p><?=_('One Design. One Workflow. Regardless if you are on Enkompass or cPanel/WHM for Linux the same easy to use interface that you have gotten to love works. Enkompass is ready to rock right out of the box, just a simple install, and the next generation of cPanel/WHM for Windows is ready go make you money.');?></p>
						</td>
						<td class="lc-feature-rightf" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon4.gif" width="72" height="71" alt="<?=_('Enkompass license Microsoft IIS7 support');?>" />
							<h2><?=_('Microsoft IIS7');?></h2>
							<p><?=_('Finally, an easy-to-manage Web server that can host anything for anyone. IIS is highly scalable and independent web server that ensures that your Enkompass accounts will never flicker. This is why Enkompass has chosen IIS7 for its core.');?></p>
						</td>
					</tr>
					<tr>
						<td class="lc-feature-spacer"><!-- --></td>
						<td class="lc-feature-spacer"><!-- --></td>
					</tr>
					<tr>
						<td class="lc-feature-left" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon8.gif" width="72" height="71" alt="<?=_('Enkompass license easy management');?>" />
							<h2><?=_('Central Management');?></h2>
							<p><?=_('Manage multiple servers with one Enkompass installation. User-based management has never been so easy. Only pay for the users that you need, nothing extra. If more users are needed, your Enkompass license is automatically expanded, allowing you to have the capacity to as many customers as you\'d like.');?></p>
						</td>
						<td class="lc-feature-right" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon5.gif" width="72" height="71" alt="<?=_('Enkompass license easy and accurate reporting');?>" />
							<h2><?=_('Accurate Reporting');?></h2>
							<p><?=_('Understand what is happening within your hosting environment using Enkompass easy to use management tools that tell your bandwidth utilization, disk space utilization, resource availability, and active accounts. Enkompass tools like these are excellent for making instant decisions if more capacity is needed.');?></p>
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
