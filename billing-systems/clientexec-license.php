<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
<?php include_once("../_include/modules/pricing.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$billing_clientexec_title?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<?=$billing_clientexec_keywords?>" />
	<meta name="description" content="<?=$billing_clientexec_meta_description?>" />
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
	<div class="header"><?php print ("$billing_clien_message"); ?></div>
</div></div>
<div class="lc-content"><div class="lc-content-holder">

	<div class="lc-content-wrapper-inner">
		<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td class="lc-content-left" valign="top">

				<?php $left="billing"; $page="bill5"; include_once("../_include/modules/left.php"); ?>

			</td>
			<td class="lc-content-right" valign="top">
				 <?php if (!empty($global_plan->lc_license_comment_message)): ?>
                			<div  id="message" class="lc-box-alert"><?php echo $global_plan->lc_license_comment_message; ?></div>
				<?php endif; ?>
				<h1>ClientExec</h1>
               
				<div class="lc-box">
					<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td class="lc-service-info" valign="top">
							<p><?=_('ClientExec is the number-one choice when it comes to a reseller billing system. Having a wide-selection of plugins and features, ClientExec can integrate with almost any control panel that you are currently using. Additionally, the intuitive interface of ClientExec allows you easily navigate around the billing system.');?></p>
							<ul class="lc-list-check1">
								<li><?=_('Supports 12+ Control Panels');?></li>
								<!--<li><?=_('Intuitive Interface');?></li>-->
								<li><?=_('10+ Admin Generated Reports');?> </li>
                                <li><?=_('Easily Customizable');?></li>
								<li><?=_('22+ Payment Gateway Integrations');?></li>
							</ul>
							<img src="<?=$img_dir?>/service-logo-clientexec.gif"  alt="<?=_('ClientExec logo');?>" />
						</td>
						<td valign="top">
							<div id="screen1" class="lc-service-screen"><img src="<?=$img_dir?>/clientexec.jpg" width="320" height="223"  alt="<?=_('The ClientExec license screenshot');?>" /></div>
							<div class="lc-service-order">
								<table width="100%" cellpadding="0" cellspacing="0">
								<tr>
									<td valign="top">
										<div class="lc-service-price1">$<?=$global_plan->price?></div>
										<div class="lc-service-price1-info"><?=_('per month');?></div>
									</td>
									<td valign="top">
										<div class="lc-float-right"><?=order_link_button(_("Give ClientExec a shot, and obtain your copy today"));?></div>
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
							<td><h2><?=_('Try ClientExec as a billing system...');?></h2></td>
							<td>
                            <div class="lc-float-right"><a class="youtube" href="<?php print ("$bsystem_clien_video"); ?>" title="<?php print ("$bsystem_clien_video_title"); ?>"><img src="<?=$img_dir?>/buttons/view-in-action-<?=getActualPage()?>.png" width="127" height="29"  alt="<?=_('Watch the intuative ClientExec license demo in action');?>" /></a></div>
								<!--<div class="lc-float-right" style="padding-right:7px"><a href="<?php print("$bsystem_clien_demo"); ?>" target="_blank" title="ClientExec Demo"><img src="<?=$img_dir?>/buttons/view-demo.png" width="110" height="29" Give your ClientExec demo a spin" /></a></div>-->
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
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon1.gif" width="72" height="71"  alt="<?=_('ClientExec is extremely extensive');?>" />
							<h2><?=_('Highly Flexible');?></h2>
							<p><?=_('Flexibility is one of the most important parts of any modern day application. This is why ClientExec has been built with that very notion in mind. Need an additional extension for reporting or some custom module? If so, developing it on your own with ClientExec is easy and quick without any added costs.');?></p>
						</td>
						<td class="lc-feature-rightf" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon6.gif" width="72" height="71"  alt="<?=_('Always ensure accuracy with your ClientExec license');?>" />
							<h2><?=_('Accurate Billing');?></h2>
							<p><?=_('Tracking billing is easy within ClientExec the system automatically tracks all payments and accepts all major credit cards, so no additional modules are required. Regardless of if you are creating an invoice or an estimate for your work, you can rest assured, that it will always be billed to the customer on time.');?></p>
						</td>
					</tr>
					<tr>
						<td class="lc-feature-spacer"><!-- --></td>
						<td class="lc-feature-spacer"><!-- --></td>
					</tr>
					<tr>
						<td class="lc-feature-left" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon2.gif" width="72" height="71" alt="<?=_('Easily navigate all aspects of your ClientExec license');?>" />
							<h2><?=_('Intuitive Interface');?></h2>
							<p><?=_('With ClientExec license you get an easy to use interface allows your customers and staff to login and perform various billing and profile functions. Additionally with ClientExec, while in the member area, your clients can update their details, and pay outstanding invoices.');?></p>
						</td>
						<td class="lc-feature-right" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon7.gif" width="72" height="71" alt="<?=_('Store your files within your ClientExec licnese instance');?>" />
							<h2><?=_('Easy Management');?></h2>
							<p><?=_('Your online business runs on many sources of information - spreadsheets, documents, and presentations and many other items. ClientExec license makes your life simpler.  With ClientExec it is easy to keep your files organized and accessible day or night.');?> </p>
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
