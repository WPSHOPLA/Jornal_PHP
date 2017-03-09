<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
<?php include_once("../_include/modules/pricing.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$billing_hostbill_title?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<?=$billing_hostbill_keywords?>" />
	<meta name="description" content="<?=$billing_hostbill_meta_description?>" />
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
<?php $menu="hostbill"; include_once("../_include/modules/header.php"); ?>
<div class="lc-header-inner"><div class="lc-header-inner-holder">
	<div class="header"><?php print ("$billing_hostbill_message"); ?></div>
</div></div>
<div class="lc-content"><div class="lc-content-holder">

	<div class="lc-content-wrapper-inner">
		<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td class="lc-content-left" valign="top">

				<?php $left="billing"; $page="bill6"; include_once("../_include/modules/left.php"); ?>

			</td>
			<td class="lc-content-right" valign="top">
				 <?php if (!empty($global_plan->lc_license_comment_message)): ?>
                			<div  id="message" class="lc-box-alert"><?php echo $global_plan->lc_license_comment_message; ?></div>
				<?php endif; ?>
				<h1>HostBill</h1>
               
				<div class="lc-box">
					<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td class="lc-service-info" valign="top">
							<p><?=_('Regardless of your business niche, you can rest assured knowing that HostBill has you covered. Having an extensive array of features and options available to your fingertips, you can be assured HostBill will fit your every need and desire. Think of HostBill as the Swiss army knife of billing systems.');?></p>
							<ul class="lc-list-check1">
								<li><?=_('Multilingual Support');?></li>
								<li><?=_('Fully Feature API');?></li>
								<li><?=_('70+ Payment Gateways');?></li>
								<li><?=_('Streamlined Helpdesk');?></li>

							</ul>
							<img src="<?=$img_dir?>/service-logo-hostbill.gif" alt="<?=_('View HostBill; you might be surprised…');?>" />
						</td>
						<td valign="top">
							<div id="screen1" class="lc-service-screen"><img src="<?=$img_dir?>/hostbill.jpg" width="320" height="223" alt="<?=_('Take a look at the HostBill License screenshot');?>" /></div>
							<div class="lc-service-order">
								<table width="100%" cellpadding="0" cellspacing="0">
								<tr>
									<td valign="top">
										<div class="lc-service-price1">$<?=$global_plan->price?></div>
										<div class="lc-service-price1-info"><?=_('per month');?></div>
									</td>
									<td valign="top">
										<div class="lc-float-right"><?=order_link_button(_("Order your Plesk Billing license"));?></div>
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
							<td><h2><?=_('View HostBill; you might be surprised...');?></h2></td>
							<td>
                            <div class="lc-float-right"><a class="youtube" href="<?php print ("$bsystem_hostbill_video"); ?>" title="<?php print ("$bsystem_hostbill_video_title"); ?>"><img src="<?=$img_dir?>/buttons/view-in-action-<?=getActualPage()?>.png" width="127" height="29" alt="<?=_('$bsystem_hostbill_video_title');?>" /></a></div> 
								<!--<div class="lc-float-right" style="padding-right:7px"><a href="<?php print("$bsystem_pbill_demo"); ?>" target="_blank" title="HostBill Demo"><img src="<?=$img_dir?>/buttons/view-demo.png" width="110" height="29" alt="Try out the HostBill license today" /></a></div>-->
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
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon4.gif" width="72" height="71" alt="<?=_('HostBill is Extensive and modular');?>" />
							<h2><?=_('Copious Integrations');?></h2>
							<p><?=_('Being one of the most integrated billing systems currently on the market, HostBill can be linked up to any control panel, game panel, and/or service that is currently available in the market. Should your control panel not be integrated, you can even do it yourself via their advanced API.');?> </p>
						</td>
						<td class="lc-feature-rightf" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon3.gif" width="72" height="71" alt="<?=_('HostBill has an intuitive design');?>" />
							<h2><?=_('Easy Management');?></h2>
							<p><?=_('You can now easily and quickly manage any domain/DNS based service from directly within HostBill. HostBill is able to interact with multiple registrars, control panels, and even cloud hosting environments. Furthermore, you can even do all those tasks simultaneously by automating your entire workflow.');?> </p>
						</td>
					</tr>
					<tr>
						<td class="lc-feature-spacer"><!-- --></td>
						<td class="lc-feature-spacer"><!-- --></td>
					</tr>
					<tr>
						<td class="lc-feature-left" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon8.gif" width="72" height="71" alt="<?=_('Automate your hosting with a HostBill license');?>" />
							<h2><?=_('Extensive API');?></h2>
							<p><?=_('Using the API (Advanced Programming Interface) you can quickly integrate any third party application and/or service directly into HostBill. Subsequently, increasing your profitability and/or automation processes with just a few clicks of the mouse, its truly that simple.');?> </p>
						</td>
						<td class="lc-feature-right" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon7.gif" width="72" height="71" alt="<?=_('Easily mold your HostBill instance into any requirement');?>" />
							<h2><?=_('Billing Schedules');?></h2>
							<p><?=_('Have the choice of how you bill your customers. Whether you are providing a product or service, you can now bill in any fashion you\'d like, including hourly, daily, weekly, monthly, quarterly, and many other durations. In doing so, HostBill allows you to be more nimble as compared to your competitors.');?></p>
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
