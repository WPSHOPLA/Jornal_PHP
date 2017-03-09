<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
<?php include_once("../_include/modules/pricing.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$billing_whmauto_title?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<?=$billing_whmauto_keywords?>" />
	<meta name="description" content="<?=$billing_whmauto_meta_description?>" />
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
<div class="lc-header-inner px200"><div class="lc-header-inner-holder">
	<div class="header"><?php print ("$billing_whmauto_message"); ?></div>
</div></div>
<div class="lc-content"><div class="lc-content-holder">

	<div class="lc-content-wrapper-inner">
		<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td class="lc-content-left" valign="top">

				<?php $left="billing"; $page="bill3"; include_once("../_include/modules/left.php"); ?>

			</td>
			<td class="lc-content-right" valign="top">
				<?php if (!empty($global_plan->lc_license_comment_message)): ?>
                			<div  id="message" class="lc-box-alert"><?php echo $global_plan->lc_license_comment_message; ?></div>
				<?php endif; ?>
				<h1>WHMAutoPilot</h1>
                
				<div class="lc-box">
					<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td class="lc-service-info" valign="top">
							<p><?=_('WHMAutoPilot will truly run your online business on autopilot. Managing everything from orders creations to account terminations, there is almost nothing that will have to be done by manual intervention.  WHMAutoPilot crisp and clean interface makes it easy to use and great pricing makes it a win-win.');?></p>
							<ul class="lc-list-check1">
							  <li><?=_('Extensive Gateway Support');?></li>
								<li><?=_('Anti-Fraud Screening');?></li>
								<li><?=_('Automated Provisioning');?></li>
								<li><?=_('Integrated Support Manager');?></li>
							<!--<li><?=_('Clean &amp; Crisp Interface');?></li>-->
							</ul>
							<img src="<?=$img_dir?>/service-logo-whmautopilot.gif" alt="<?=_('WHMAutoPilot logo');?>" />
						</td>
						<td valign="top">
							<div id="screen1" class="lc-service-screen"><img src="<?=$img_dir?>/whmautopilot.jpg" width="320" height="223" alt="<?=_('WHMAutoPilot screenshot');?>" /></div>
							<div class="lc-service-order">
								<table width="100%" cellpadding="0" cellspacing="0">
								<tr>
									<td valign="top">
										<div class="lc-service-price1">$<?=$global_plan->price?></div>
										<div class="lc-service-price1-info"><?=_('per month');?></div>
									</td>
									<td valign="top">
										<div class="lc-float-right"><?=order_link_button(_("Purchase your WHMAutoPilot license"));?></div>
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
							<td><h2><?=_('WHMAutoPilot can be your right hand man...');?></h2></td>
                            
                            <td>                            
                            <!--<div class="lc-float-right"><a class="youtube" href="<?php print ("$bsystem_whmau_video"); ?>" title="<?php print ("$bsystem_whmau_video_title"); ?>"><img src="<?=$img_dir?>/buttons/view-in-action-<?=getActualPage()?>.png" width="127" height="29" alt="WHMAutoPilot - Checkout the billing system of the future!" /></a></div>
                            
                         <div class="lc-float-right" style="padding-right:7px"><a href="<?php print("$bsystem_whmcs_demo"); ?>" target="_blank" title="WHMAutoPilot Demo"><img src="<?=$img_dir?>/buttons/view-demo.png" width="110" height="29" alt="Take WHMAutoPilot for an interactive spin" /></a></div>-->
                                
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
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon8.gif" width="72" height="71" alt="<?=_('WHMAutoPilot Payment Gateways');?>" />
							<h2><?=_('Payment Gateways');?></h2>
							<p><?=_('Interfacing with multiple payment gateways is important, as the more flexible you can be with your payments the easier it will be for your customers to remit payments for your services. WHMAutoPilot supports a wide range of gateways which makes it simple to do just that.');?></p>
						</td>
						<td class="lc-feature-rightf" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon9.gif" width="72" height="71" alt="<?=_('WHMAutoPilot automates daily billing tasks quickly');?>" />
							<h2><?=_('Automated Billing');?></h2>
							<p><?=_('Fully automate your web hosting environment, from account creation to account termination. WHMAutoPilot license will be your right hand man when it comes to ensuring that your customers are paying bills on time, and being invoiced correctly');?></p>
						</td>
					</tr>
					<tr>
						<td class="lc-feature-spacer"><!-- --></td>
						<td class="lc-feature-spacer"><!-- --></td>
					</tr>
					<tr>
						<td class="lc-feature-left" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon2.gif" width="72" height="71" alt="<?=_('Clean and Crisp makes WHMAutoPilot easy to use');?>" />
							<h2><?=_('Easy Interface');?></h2>
							<p><?=_('Having a clean and crisp interface makes WHMAutoPilot simple for first time users to navigate through and perform account modifications as necessary. Additionally, for the administrators WHMAutoPilot can be setup easily allowing them to change pricing and features quickly without needing to do any advanced coding.');?></p>
						</td>
						<td class="lc-feature-right" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon6.gif" width="72" height="71" alt="<?=_('Advanced security allows WHMAutoPilot to be extremely secure');?>" />
							<h2><?=_('Advanced Security');?></h2>
							<p><?=_('Securing customer\'s data is top priority for any online business. This is why when it comes to WHMAutoPilot you\'re in good hands. WHMAutoPilot license provides industry grade encryption for all credit cards stored within its billing platform which makes obtaining any financial data impossible.');?> </p>
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
