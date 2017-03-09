<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
<?php include_once("../_include/modules/pricing.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$controlp_cloudlinux_title?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<?=$controlp_cloudlinux_keywords?>" />
	<meta name="description" content="<?=$controlp_cloudlinux_meta_description?>" />
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
<?php $menu="additional"; include_once("../_include/modules/header.php"); ?>
<div class="lc-header-inner"><div class="lc-header-inner-holder">
	<div class="header"><?php print ("$dedicated_cloudlinux_message"); ?></div>
</div></div>
<div class="lc-content"><div class="lc-content-holder">

	<div class="lc-content-wrapper-inner">
		<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td class="lc-content-left" valign="top">

				<?php $left="additional"; $page="addi8"; include_once("../_include/modules/left.php"); ?>

			</td>
			<td class="lc-content-right" valign="top">

				<?php if (!empty($global_plan->lc_license_comment_message)): ?>
                			<div  id="message" class="lc-box-alert"><?php echo $global_plan->lc_license_comment_message; ?></div>
				<?php endif; ?> 
				<h1>CloudLinux</h1>
                
				<div class="lc-box">
					<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td class="lc-service-info" valign="top">
							<p><?=_('CloudLinux is an operating system, which provides an additional security barrier of protection against what is commonly known as the "bad neighbor" effect. This level of protection that CloudLinux  offers means less outages caused by traffic spikes.');?></p>
							<ul class="lc-list-check1">
								<li><?=_('Increase Server Density');?></li>
								<li><?=_('Decrease Support Costs');?></li>
								<li><?=_('Increase Profitability');?></li>
								<li><?=_('Advanced Resource Tools');?></li>
                                <li><?=_('Reduce Customer Churn');?></li>
							</ul>
							<img src="<?=$img_dir?>/cloudlinux.png"  alt="<?=_('CloudLinux License Logo');?>" />
						</td>
						<td valign="top">
							<div id="screen1" class="lc-service-screen"><img src="<?=$img_dir?>/cloudlinux_screen.png" width="320" height="223" alt="<?=_('CloudLinux License Screenshot');?>" /></div>
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
										<div class="lc-float-right"><?=order_link_button(_("Order your CloudLinux License"));?></div>
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
							<td><h2><?=_('Isolate with CloudLinux and increase your revenue...');?></h2></td>
							<td>
                            	<div class="lc-float-right"><a class="youtube" href="<?php print("$cp_cloudlinux_video"); ?>" title="<?php print("$cp_cloudlinux_video_title"); ?>"><img src="<?=$img_dir?>/buttons/view-in-action-<?=getActualPage()?>.png" width="127" height="29" alt="<?=_('Try CloudLinux, you\'ll be glad you did!');?>" /></a></div>                       
								<!--<div class="lc-float-right" style="padding-right:7px"><a href="<?php print ("$cp_cloudlinux_demo"); ?>" target="_blank" title="CloudLinux Demo"><img src="<?=$img_dir?>/buttons/view-demo.png" width="110" height="29" alt="CloudLinux license demo" /></a></div>-->
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
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon3.gif" width="72" height="71" alt="<?=_('CloudLinux Reduce Churn');?>" />
							<h2><?=_('Reduce Churn');?></h2>
							<p><?=_('Reducing churn is extremely important; this is why CloudLinux has tackled this head on by providing a highly insolated environment where your customers are not impacted by their peers within the same physical server.');?></p>
						</td>
						<td class="lc-feature-rightf" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon1.gif" width="72" height="71" alt="<?=_('CloudLinux Increase Density');?>" />
							<h2><?=_('Increase Density');?></h2>
							<p><?=_('Increasing server density is another amazing attribute of CloudLinux license. With the increased server stability, you can place more customers on a single server without having to worry about resource limitations.');?></p>
						</td>
					</tr>
					<tr>
						<td class="lc-feature-spacer"><!-- --></td>
						<td class="lc-feature-spacer"><!-- --></td>
					</tr>
					<tr>
						<td class="lc-feature-left" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon6.gif" width="72" height="71" alt="<?=_('CloudLinux Increase Profitability');?>" />
							<h2><?=_('Increase Profitability');?></h2>
							<p><?=_('Making the impossible, possible; this is what CloudLinux can do for you. Placing more customers on a server without having to worry about stability is finally here; not to mention the additional revenue that can be derived from each server.');?></p>
						</td>
						<td class="lc-feature-right" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon9.gif" width="72" height="71" alt="<?=_('CloudLinux Control Resources');?>" />
							<h2><?=_('Control Resources');?></h2>
							<p><?=_('Greater resource controls allow you to passively monitor your customers, while CloudLinux license ensures that none of them are overstepping their allocated resources. However, if they do, CloudLinux will quickly address this problem.');?></p>
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
