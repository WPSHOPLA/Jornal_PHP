<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
<?php include_once("../_include/modules/pricing.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$controlp_interw_title?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<?=$controlp_interw_keywords?>" />
	<meta name="description" content="<?=$controlp_interw_meta_description?>" />
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
	<div class="header"><?php print ("$vps_interwrox_message"); ?></div>
</div></div>
<div class="lc-content"><div class="lc-content-holder">

	<div class="lc-content-wrapper-inner">
		<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td class="lc-content-left" valign="top">

				<?php $left="cp"; $page="cp11"; include_once("../_include/modules/left.php"); ?>

			</td>
			<td class="lc-content-right" valign="top">

				<?php if (!empty($global_plan->lc_license_comment_message)): ?>
                			<div  id="message" class="lc-box-alert"><?php echo $global_plan->lc_license_comment_message; ?></div>
				<?php endif; ?> 
				<h1>InterWorx</h1>
                
				<div class="lc-box">
					<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td class="lc-service-info" valign="top">
							<p><?=_('InterWorx makes life simpler for the website owners and administrators. InterWorx is packed with features and bursting with options. As well as acting as a regular control panel, InterWorx license also provides its own blend of advanced options such as: high availability, clustering and many others.');?></p>
							<ul class="lc-list-check1">
								<li><?=_('High Availability/Clustering');?></li>
							<!--<li><?=_('Fully Featured API');?></li>-->
								<li><?=_('Seamless Version Upgrades');?></li>
								<li><?=_('Powerful Reseller API');?></li>
								
							</ul>
							<img src="<?=$img_dir?>/interworx-whbg.png"  alt="<?=_('InterWorx License Logo');?>" />
						</td>
						<td valign="top">
							<div id="screen1" class="lc-service-screen"><img src="<?=$img_dir?>/interworx_screen.jpg" width="320" height="223" alt="<?=_('InterWorx License Screenshot');?>" /></div>
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
										<div class="lc-float-right"><?=order_link_button(_("Order your InterWorx License"));?></div>
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
							<td><h2><?=_('Ensure availability with an InterWorx license...');?></h2></td>
							<td>
                            	<div class="lc-float-right"><a class="youtube" href="<?php print("$cp_interworx_video"); ?>" title="<?php print("$cp_interworx_video_title"); ?>"><img src="<?=$img_dir?>/buttons/view-in-action-<?=getActualPage()?>.png" width="127" height="29" alt="<?=_('See InterWorx in action...');?>" /></a></div>                           
								<!--<div class="lc-float-right" style="padding-right:7px"><a href="<?php print ("$cp_interworx_demo"); ?>" target="_blank" title="InterWorx License Demo"><img src="<?=$img_dir?>/buttons/view-demo.png" width="110" height="29" alt="InterWorx License Demo" /></a></div>-->
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
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon2.gif" width="72" height="71" alt="<?=_('InterWorx Resource Optimized');?>" />
							<h2><?=_('Resource Optimized');?></h2>
							<p><?=_('When it comes to control panels, most control panels are resource hogs, consuming most if not all resources in certain circumstances. However, with InterWorx license, resource usage has been lowered and the control panel has been optimized to utilize fewer resources, while still maintaining speed.');?></p>
						</td>
						<td class="lc-feature-rightf" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon3.gif" width="72" height="71" alt="<?=_('InterWorx Centralized Resources');?>" />
							<h2><?=_('Centralized Resources');?></h2>
							<p><?=_('Ensuring maximum availability is extremely important. However, it\'s second that count when it comes to ensuring availability to critical website and billing data. For this very reason, InterWorx has introduced MySQL Server Pooling, which will ensure that all MySQL services remain online even if one of the servers goes offline.');?></p>
						</td>
					</tr>
					<tr>
						<td class="lc-feature-spacer"><!-- --></td>
						<td class="lc-feature-spacer"><!-- --></td>
					</tr>
					<tr>
						<td class="lc-feature-left" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon1.gif" width="72" height="71" alt="<?=_('InterWorx Billing Integration');?>" />
							<h2><?=_('Billing Integration');?></h2>
							<p><?=_('InterWorx is integrated into every major billing system currently available, so you\'ll never face any issues with InterWorx not working right out of the box with your current billing system. However, if you have a custom billing system, you can also easily integrate InterWorx using its advanced API.');?></p>
						</td>
						<td class="lc-feature-right" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon10.gif" width="72" height="71" alt="<?=_('InterWorx Steadfast Support');?>" />
							<h2><?=_('Steadfast Support');?></h2>
							<p><?=_('Being provided support when needed is essential in any business big or small. This is why InterWorx has a rock-solid support team and is highly rated for their fast problem solving skills. Whenever you need them, InterWorx is ready to assist you at anytime day or night.');?></p>
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
