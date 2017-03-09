<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
<?php include_once("../_include/modules/pricing.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$billing_pbilling_title?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<?=$billing_pbilling_keywords?>" />
	<meta name="description" content="<?=$billing_pbilling_meta_description?>" />
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
<?php $menu="billing"; include_once("../_include/modules/header.php"); ?>
<div class="lc-header-inner"><div class="lc-header-inner-holder">
	<div class="header"><?php print ("$billing_pbill_message"); ?></div>
</div></div>
<div class="lc-content"><div class="lc-content-holder">

	<div class="lc-content-wrapper-inner">
		<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td class="lc-content-left" valign="top">

				<?php $left="billing"; $page="bill2"; include_once("../_include/modules/left.php"); ?>

			</td>
			<td class="lc-content-right" valign="top">
				 <?php if (!empty($global_plan->lc_license_comment_message)): ?>
                			<div  id="message" class="lc-box-alert"><?php echo $global_plan->lc_license_comment_message; ?></div>
				<?php endif; ?>
				<h1>Plesk Billing</h1>
               
				<div class="lc-box">
					<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td class="lc-service-info" valign="top">
							<p><?=_('Plesk Billing is one of the most advanced billing systems currently available. Its automation and modular design makes it easy to use for Web Hosts, ISPs, and other niche industries. We strongly believe that Plesk Billing license will fit your every need.');?></p>
							<ul class="lc-list-check1">
								<li><?=_('Automate Account Creation');?></li>
								<li><?=_('Highly Expandable');?></li>
								<li><?=_('Nineteen Control Panel Integrations');?></li>
								<li><?=_('Twenty-five Gateway Integrations');?></li>
								<li><?=_('Easily Customizable');?></li>
							</ul>
							<img src="<?=$img_dir?>/service-logo-parallelspleskbilling.gif" alt="<?=_('Parallels Plesk Billing License Logo');?>" />
						</td>
						<td valign="top">
							<div id="screen1" class="lc-service-screen"><img src="<?=$img_dir?>/plesk-billing.jpg" width="320" height="223" alt="<?=_('Take a look at the Parallels Plesk Billing License screenshot');?>" /></div>
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
							<td><h2><?=_('Plesk Billing wants to serve your needs...');?></h2></td>
							<td>
                            <div class="lc-float-right"><a class="youtube" href="<?php print ("$bsystem_pbill_video"); ?>" title="<?php print ("$bsystem_pbill_video_title"); ?>"><img src="<?=$img_dir?>/buttons/view-in-action-<?=getActualPage()?>.png" width="127" height="29" alt="<?=_('Checkout the Plesk Billing Interactive Video');?>" /></a></div> 
								<!--<div class="lc-float-right" style="padding-right:7px"><a href="<?php print("$bsystem_pbill_demo"); ?>" target="_blank" title="Plesk Billing Demo"><img src="<?=$img_dir?>/buttons/view-demo.png" width="110" height="29" alt="Try out the Plesk Billing license today" /></a></div>-->
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
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon6.gif" width="72" height="71" alt="<?=_('Plesk Billing is Extensive and modular');?>" />
							<h2><?=_('Extensive &amp; Modular');?></h2>
							<p><?=_('Being one of the most modular billing systems around, Plesk Billing supports a great deal of modules ranging from credit card gateways to domain registration services. Plesk Billing also showcases a power API that will allow you to build additional modules for your specific needs.');?> </p>
						</td>
						<td class="lc-feature-rightf" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon3.gif" width="72" height="71" alt="<?=_('Plesk Billing has an intuitive design');?>" />
							<h2><?=_('Intuitive Design');?></h2>
							<p><?=_('One of the major advantages of Plesk Billing is  its design. Looking very much like Plesk, customers will find it extremely easy to navigate and perform tasks such as updating their financial data on the billing system.');?> </p>
						</td>
					</tr>
					<tr>
						<td class="lc-feature-spacer"><!-- --></td>
						<td class="lc-feature-spacer"><!-- --></td>
					</tr>
					<tr>
						<td class="lc-feature-left" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon2.gif" width="72" height="71" alt="<?=_('Automate your hosting with a Plesk Billing license');?>" />
							<h2><?=_('Account Automation');?></h2>
							<p><?=_('When managing hundreds of accounts daily becomes too hard, let Plesk Billing do all the heavy lifting. Plesk can easily manage payments, and provide detailed invoices about clients and their hosting plans. Perhaps a custom report is what you\'re looking for? Plesk Billing has that covered as well.');?> </p>
						</td>
						<td class="lc-feature-right" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon5.gif" width="72" height="71" alt="<?=_('Easily mold your Plesk Billing instance into any requirement');?>" />
							<h2><?=_('Easily Adaptable');?></h2>
							<p><?=_('Do you currently run a hotspot service? Want the ability to bill based upon time rather then days or months? Plesk Billing license can do that without a hitch. Plesk Billing is adaptable into almost anything your business does or will do in the future.');?></p>
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
