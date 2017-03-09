<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
<?php include_once("../_include/modules/pricing.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$controlp_cpanel_title?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="keywords" content="<?=$controlp_cpanel_keywords?>" />
	<meta name="description" content="<?=$controlp_cpanel_meta_description?>" />
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
	
<style>
.lc-yr-discount {font-size: 16px; margin-top:-32px; fot-weight: bold; float: right;}

@media only screen and (max-width: 682px){
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	table {table-layout:fixed; width:100%}
	td {word-wrap: break-word;}
	.lc-content-holder {width:100%;}
	.lc-header-inner-holder {width:100%;}
	.lc-header-inner {min-height:150px;}
	.lc-content-right {padding:0px;}
	.lc-yr-discount {width:100%; min-height:50px;  font-size: 16px; margin-top:5px; fot-weight: bold; float: none;}
	.lc-box {padding:0px; border:1px solid #ffffff;}
	.lc-service-screen {width:100%;}
	.lc-service-order {padding-left:50px;}
	.lc-service-order .lc-float-right {float:left;}
	.lc-feature-leftf, .lc-feature-rightf,.lc-feature-left, .lc-feature-right {width:100%; padding:10px 0; border:1px solid #ffffff;}
	lc-feature-left
}

@media only screen and (min-width: 682px) and (max-width: 982px) {
	table {table-layout:fixed; width:100%}
	td{word-wrap: break-word;}
	.lc-header-inner-holder {width:100%;}
	.lc-header-inner {min-height:100px;}
	.lc-content-holder {width:100%;}
	.lc-yr-discount {width:100%; font-size: 16px; margin-top:5px; fot-weight: bold; float: none;}
	.lc-service-info {width:35%; padding-right:5px;}
	.lc-feature-leftf {width:46%;}
	.lc-service-screen {width:auto;}
}


</style>

</head>
<body>
<div class="wrapper">
<?php $menu="cp"; include_once("../_include/modules/header2.php"); ?>
<div class="lc-header-inner"><div class="lc-header-inner-holder">
	<div class="header headem"><?php print ("$vps_cpanel_message"); ?></div>
</div></div>
<div class="lc-content"><div class="lc-content-holder">

	<div class="lc-content-wrapper-inner">
		<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td class="lc-content-left" valign="top">

				<?php $left="cp"; $page="cp1"; include_once("../_include/modules/left.php"); ?>

			</td>
			<td class="lc-content-right" valign="top">

				<?php if (!empty($global_plan->lc_license_comment_message)): ?>
                			<div  id="message" class="lc-box-alert"><?php echo $global_plan->lc_license_comment_message; ?></div>
				<?php endif; ?>
				<h1>
                    cPanel/WHM


                </h1>
                <div class="lc-yr-discount">
                    Discounted Yearly Licenses Only - Monthly Licenses Not Available
                </div>


				<div class="lc-box">
					<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td class="lc-service-info" valign="top">
							<p><?=_('cPanel and WHM software makes life simpler for the website owners it serves. With cPanel license you get easy-to-use tools to perform daily tasks quickly, and easily. Watch the video, or try out our cPanel demo.');?></p>
							<ul class="lc-list-check1">
								<li><?=_('Mobile Accessibility');?></li>
								<li><?=_('Web Developer Friendly');?></li>
								<li><?=_('Powerful Reseller Tools');?></li>
								<li><?=_('Optimized to use less resources');?></li>
								<li><?=_('One-Click version upgrades');?></li>
							</ul>
							<img src="<?=$img_dir?>/service-logo.gif" width="93" height="47" alt="<?=_('cPanel License Logo');?>" />
						</td>
						<td valign="top">
							<div id="screen1" class="lc-service-screen"><img src="<?=$img_dir?>/screen.jpg" style="max-width:100%;height:auto;" alt="<?=_('cPanel License Screenshot');?>" /></div>
							<div class="lc-service-order">
								<table width="100%" cellpadding="0" cellspacing="0">
								<tr>
									<td valign="top">
										<?php if (empty($_SERVER['QUERY_STRING'])) { ?>
										<div class="lc-service-price1-info"><?=_('Starting at');?></div>
										<div class="lc-service-price1">$<?=$global_plan->price?><?=_('/year');?></div>
										<?php } else if (array_key_exists('vps', $_REQUEST)) { ?>
										<div class="lc-service-price1">$<?=$global_plan->price?><?=_('/year');?></div>
										<div class="lc-service-price1-info"><?=_('(VPS license)');?></div>
										<?php } else if (array_key_exists(_('dedicated'), $_REQUEST)) { ?>
										<div class="lc-service-price1">$<?=$global_plan->price?><?=_('/year');?></div>
										<div class="lc-service-price1-info"><?=_('(Dedicated license)');?></div>
										<?php } ?>
									</td>
									<td valign="top">
										<div class="lc-float-right"><?=order_link_button(_("Order your cPanel License"));?></div>
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
							<td><h2><?=_("See what cPanel license can do for you...");?>.</h2></td>
							<td>
								<div class="lc-float-right"><a class="youtube" href="<?php print ("$vps_cpanel_video"); ?>" title="<?php print ("$vps_cpanel_video_title"); ?>"><img src="<?=$img_dir?>/buttons/view-in-action-<?=getActualPage()?>.png" width="127" height="29" alt="<?=_('cPanel License interactive tour');?>" /></a></div>
								<!--<div class="lc-float-right" style="padding-right:7px"><a href="<?php print ("$vps_cpanel_demo"); ?>" target="_blank" title="cPanel/WHM Demo"><img src="<?=$img_dir?>/buttons/view-demo.png" width="110" height="29" alt="cPanel license account demo" /></a></div>-->
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
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon1.gif" width="72" height="71" alt="<?=_('cPanel reliability overview');?>" />
							<h2><?=_('Reliability');?></h2>
							<p><?=_("cPanel uses a self-monitoring system. If it detects a service has failed, it will automatically attempt to restart the service to get it back online. Also, it will notify you via Email, IM or Text Message of problems that could affect your cPanel server's reliability. With cPanel you can always stay on top of things even when you are away.");?></p>
						</td>
						<td class="lc-feature-rightf" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon2.gif" width="72" height="71" alt="<?=_('cPanel constant update releases');?>" />
							<h2><?=_('Cutting Edge');?></h2>
							<p><?=_('cPanel can automatically upgrade itself and all your server\'s software. Doing this automatically allows you to stay on top of the latest security fixes, and software improvements. Additionally, with cPanel license you can add support for new technologies in a few mouse clicks.');?></p>
						</td>
					</tr>
					<tr>
						<td class="lc-feature-spacer"><!-- --></td>
						<td class="lc-feature-spacer"><!-- --></td>
					</tr>
					<tr>
						<td class="lc-feature-left" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon3.gif" width="72" height="71" alt="<?=_('cPanel license billing intergration');?>" />
							<h2><?=_('Billing Integration');?></h2>
							<p><?=_('cPanel is integrated into every major billing system currently for sale, so there are no complicated integrations needed. However, if you have a custom billing system that you\'d like to integrate cPanel with, the process is quite straight forward.');?></p>
						</td>
						<td class="lc-feature-right" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon4.gif" width="72" height="71" alt="<?=_('cPanel streamlined account controls');?>" />
							<h2><?=_('Streamlined Controls');?></h2>
							<p><?=_('With cPanel license, you\'re in the driving seat. You choose what versions of Apache, and PHP run on your server, and what applications handle services such as Email, and other functionality. Additionally, you can disable any feature of cPanel for a specific user using the WHM.');?></p>
						</td>
					</tr>
					</table>
				</div>

			</td>
		</tr>
		</table>
	</div>

</div></div>
<?php include_once("../_include/modules/footer2.php"); ?>
<?php include_once("../_include/modules/additional.php"); ?>
</div>
</body>
</html>
