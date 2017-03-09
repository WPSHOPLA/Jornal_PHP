<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
<?php include_once("../_include/modules/pricing.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$controlp_solusvm_title?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<?=$controlp_solusvm_keywords?>" />
	<meta name="description" content="<?=$controlp_solusvm_meta_description?>" />
	<meta name="author" content="<?=$author?>" />
	<meta name="copyright" content="<?=$copyright?>" />
	<link href="<?=$site_dir?>/favicon.ico" rel="shortcut icon" />
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
<div class="lc-header-inner"><div class="lc-header-inner-holder">
	<div class="header"><?php print ("$dedicated_solusvm"); ?></div>
</div></div>
<div class="lc-content"><div class="lc-content-holder">

	<div class="lc-content-wrapper-inner">
		<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td class="lc-content-left" valign="top">

				<?php $left="cp"; $page="cp10"; include_once("../_include/modules/left.php"); ?>

			</td>
			<td class="lc-content-right" valign="top">

				<?php if (!empty($global_plan->lc_license_comment_message)): ?>
                			<div  id="message" class="lc-box-alert"><?php echo $global_plan->lc_license_comment_message; ?></div>
				<?php endif; ?> 
				<h1>SolusVM</h1>
                
				<div class="lc-box">
					<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td class="lc-service-info" valign="top">
							<p><?=_('SolusVM is a powerful virtualization control panel that allows you to start offering VPS services to your customers, while not breaking the bank. Using SolusVM, you will be able to leverage your existing servers and infrastructure while improving your bottom line.');?></p>
							<ul class="lc-list-check1">
								<li><?=_('Central DNS Control');?></li>
								<li><?=_('Automated FTP Backups');?></li>
								<li><?=_('Advanced Cluster Control');?></li>
								<li><?=_('VPS Resource Throttling');?></li>
							</ul>
							<img src="<?=$img_dir?>/solusvm.png"  alt="<?=_('SolusVM License Logo');?>" />
						</td>
						<td valign="top">
							<div id="screen1" class="lc-service-screen"><img src="<?=$img_dir?>/solusvm_screen.jpg" width="320" height="223" alt="<?=_('SolusVM License Screenshot');?>" /></div>
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
										<div class="lc-float-right"><?=order_link_button(_("Order your SolusVM License"));?></div>
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
							<td><h2><?=_('Start saving money with a SolusVM license...');?></h2></td>
							<td>
                            	<div class="lc-float-right"><a class="youtube" href="<?php print("$cp_solusvm_video"); ?>" title="<?php print("$cp_solusvm_video_title"); ?>"><img src="<?=$img_dir?>/buttons/view-in-action-<?=getActualPage()?>.png" width="127" height="29" alt="<?=_('Try SolusVM for yourself...');?>" /></a></div>                       
								<!--<div class="lc-float-right" style="padding-right:7px"><a href="<?php print ("$cp_solusvm_demo"); ?>" target="_blank" title="SolusVM Demo"><img src="<?=$img_dir?>/buttons/view-demo.png" width="110" height="29" alt="SolusVM license demo" /></a></div>-->
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
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon9.gif" width="72" height="71" alt="<?=_('SolusVM Security');?>" />
							<h2><?=_('Security');?></h2>
							<p><?=_('When it comes to security, SolusVM doesn\'t take the matter lightly. SolusVM currently supports 7 different layers of security, ranging from brute-force protection to IP address blocking, and unique data encryption standards, which vary per installation.');?></p>
						</td>
						<td class="lc-feature-rightf" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon5.gif" width="72" height="71" alt="<?=_('SolusVM Automated Backups');?>" />
							<h2><?=_('Automated Backups');?></h2>
							<p><?=_('SolusVM has the ability to backup all the virtual containers assigned per server to an FTP server at anytime day or night, ensuring that you have total peace of mind knowing that your data is safe.');?></p>
						</td>
					</tr>
					<tr>
						<td class="lc-feature-spacer"><!-- --></td>
						<td class="lc-feature-spacer"><!-- --></td>
					</tr>
					<tr>
						<td class="lc-feature-left" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon4.gif" width="72" height="71" alt="<?=_('SolusVM OS Independence');?>" />
							<h2><?=_('OS Independence');?></h2>
							<p><?=_('In the past, providing a variety of different operating systems to the end customer was a problem, as there was no room for the customer to choose. However, with SolusVM you or your customer can now install their preferred Linux operating system.');?></p>
						</td>
						<td class="lc-feature-right" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon8.gif" width="72" height="71" alt="<?=_('SolusVM Centralized DNS');?>" />
							<h2><?=_('Centralized DNS');?></h2>
							<p><?=_('Finding it hard to ask your customers to register their own name servers? If so, there is a way out with SolusVM license. SolusVM supports centralized DNS, meaning you no longer have to deal with long phone calls on how to register private name servers!');?></p>
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
