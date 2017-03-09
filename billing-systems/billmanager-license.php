<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
<?php include_once("../_include/modules/pricing.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$billing_billmanager_title?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<?=$billing_billmanager_keywords?>" />
	<meta name="description" content="<?=$billing_billmanager_meta_description?>" />
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
<?php $menu="billing"; include_once("../_include/modules/header.php"); ?>
<div class="lc-header-inner"><div class="lc-header-inner-holder">
	<div class="header"><?php print ("$billing_billmanager_message"); ?></div>
</div></div>
<div class="lc-content"><div class="lc-content-holder">

	<div class="lc-content-wrapper-inner">
		<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td class="lc-content-left" valign="top">

				<?php $left="billing"; $page="bill7"; include_once("../_include/modules/left.php"); ?>

			</td>
			<td class="lc-content-right" valign="top">
				 <?php if (!empty($global_plan->lc_license_comment_message)): ?>
                			<div  id="message" class="lc-box-alert"><?php echo $global_plan->lc_license_comment_message; ?></div>
				<?php endif; ?>
				<h1>BILLmanager</h1>
               
				<div class="lc-box">
					<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td class="lc-service-info" valign="top">
							<p><?=_('Packed with features and brisling with the latest advancements, BILLmanager has quickly become one of the most flexible billing systems currently on the market. While its design may seem simplistic, it\'s packed with options and settings that can make it fit any role in your online business. ');?></p>
							<ul class="lc-list-check1">
								<li><?=_('24+ Payment Gateways');?></li>
								<li><?=_('9+ Support Control Panels');?></li>
								<li><?=_('Sleek Interface Design');?></li>
								<li><?=_('Easily Expandable');?></li>
							</ul>
							<img src="<?=$img_dir?>/service-logo-billmanager.gif" alt="<?=_('Parallels BILLmanager License Logo');?>" />
						</td>
						<td valign="top">
							<div id="screen1" class="lc-service-screen"><img src="<?=$img_dir?>/billmanager.jpg" width="320" height="223" alt="<?=_('Take a look at the Parallels BILLmanager License screenshot');?>" /></div>
							<div class="lc-service-order">
								<table width="100%" cellpadding="0" cellspacing="0">
								<tr>
									<td valign="top">
										<div class="lc-service-price1">$<?=$global_plan->price?></div>
										<div class="lc-service-price1-info"><?=_('per month');?></div>
									</td>
									<td valign="top">
										<div class="lc-float-right"> <?=order_link_button(_("Give ClientExec a shot, and obtain your copy today"));?></div>
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
							<td><h2><?=_('Give BILLmanager a whirl today...');?></h2></td>
							<td>
                            <div class="lc-float-right"><a class="youtube" href="<?php print ("$bsystem_billman_video"); ?>" title="<?php print ("$bsystem_billman_video_title"); ?>"><img src="<?=$img_dir?>/buttons/view-in-action-<?=getActualPage()?>.png" width="127" height="29" alt="<?=_('$bsystem_billman_video_title');?>" /></a></div> 
								<!--<div class="lc-float-right" style="padding-right:7px"><a href="<?php print("$bsystem_pbill_demo"); ?>" target="_blank" title="BILLmanager Demo"><img src="<?=$img_dir?>/buttons/view-demo.png" width="110" height="29" alt="Try out the BILLmanager license today" /></a></div>-->
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
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon7.gif" width="72" height="71" alt="<?=_('BILLmanager is Extensive and modular');?>" />
							<h2><?=_('Multiple Currencies');?></h2>
							<p><?=_('In ever changing business dynamics, you can rest assured that BILLmanager has your back covered. Being able to bill customers in over seven different currencies, you can be assured that you\'ll be able to approach international markets too!');?> </p>
						</td>
						<td class="lc-feature-rightf" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon1.gif" width="72" height="71" alt="<?=_('BILLmanager has an intuitive design');?>" />
							<h2><?=_('Streamlined Interface');?></h2>
							<p><?=_('Having been built from a usability and simplicity standpoint, BILLmanager boasts both an elegant and simple interface design. In doing so, BILLmanager is able to allow users of all experience to get setup quickly without complex configurations being needed.');?> </p>
						</td>
					</tr>
					<tr>
						<td class="lc-feature-spacer"><!-- --></td>
						<td class="lc-feature-spacer"><!-- --></td>
					</tr>
					<tr>
						<td class="lc-feature-left" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon9.gif" width="72" height="71" alt="<?=_('Automate your hosting with a BILLmanager license');?>" />
							<h2><?=_('Payment Gateways');?></h2>
							<p><?=_('Supporting a wide variety of payment gateways, BILLmanager makes it possible to do business in virtually any country worldwide. From some of the more famous payment gateways such as PayPal, to country specific ones, you can guarantee that BILLmanager will be there with you!');?> </p>
						</td>
						<td class="lc-feature-right" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon6.gif" width="72" height="71" alt="<?=_('Easily mold your BILLmanager instance into any requirement');?>" />
							<h2><?=_('Account Automation');?></h2>
							<p><?=_('Automate your daily tasks with BILLmanager account automation. Account automation allows you to refocus your time on productive tasks such as growing your business while BILLmanager does all the heavy lifting for you.   ');?></p>
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
