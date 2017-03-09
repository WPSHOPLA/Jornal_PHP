<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
<?php include_once("../_include/modules/pricing.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$additional_zopim_live_chat_title?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<?=$additional_zopim_live_chat_keywords?>" />
	<meta name="description" content="<?=$additional_zopim_live_chat_meta_description?>" />
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
<?php $menu="additional"; include_once("../_include/modules/header.php"); ?>
<div class="lc-header-inner"><div class="lc-header-inner-holder">
	<div class="header"><?php print ("$additional_zopim_live_chat"); ?></div>
</div></div>
<div class="lc-content"><div class="lc-content-holder">

	<div class="lc-content-wrapper-inner">
		<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td class="lc-content-left" valign="top">

				<?php $left="additional"; $page="addi11"; include_once("../_include/modules/left.php"); ?>

			</td>
			<td class="lc-content-right" valign="top">
				 <?php if (!empty($global_plan->lc_license_comment_message)): ?>
                			<div  id="message" class="lc-box-alert"><?php echo $global_plan->lc_license_comment_message; ?></div>
				<?php endif; ?>
				<h1>Zopim Live Chat</h1>
               
				<div class="lc-box">
					<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td class="lc-service-info" valign="top">
							<p><?=_('Ever needed a better way to engage with your customers? If so, Zopim Live Chat is the perfect answer to your woes. Zopim will not only provide you with your visitors browsing information, but will also provide you with vast amounts of additional information, such as location, language type, and much more!');?></p>
							<ul class="lc-list-check1">
								<li><?=_('Realtime visitor tracking');?></li>
								<li><?=_('Fully featured API');?></li>
								<li><?=_('Easy site integration');?></li>
								<li><?=_('Innate web interface');?></li>

							</ul>
							<img src="<?=$img_dir?>/service-logo-zopim-live-chat2.png" alt="<?=_('View Zopim; you might be surprised...');?>" />
						</td>
						<td valign="top">
							<div id="screen1" class="lc-service-screen"><img src="<?=$img_dir?>/zopim-live-chat.jpg" width="320" height="223" alt="<?=_('Take a look at the Zopim License screenshot');?>" /></div>
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
							<td><h2><?=_('Restructure the way you communicate using Zopim...');?></h2></td>
							<td>
                            <div class="lc-float-right"><a class="youtube" href="<?php print ("$bsystem_pbill_video"); ?>" title="<?php print ("$bsystem_pbill_video_title"); ?>"><img src="<?=$img_dir?>/buttons/view-in-action-<?=getActualPage()?>.png" width="127" height="29" alt="<?=_('Checkout the Zopim Interactive Video');?>" /></a></div> 
								<!--<div class="lc-float-right" style="padding-right:7px"><a href="<?php print("$bsystem_pbill_demo"); ?>" target="_blank" title="Zopim Demo"><img src="<?=$img_dir?>/buttons/view-demo.png" width="110" height="29" alt="Try out the Zopim license today" /></a></div>-->
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
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon4.gif" width="72" height="71" alt="<?=_('Zopim is Extensive and modular');?>" />
							<h2><?=_('Visitor Tracking');?></h2>
							<p><?=_('Take the guess work out of where your customers are from and what they are doing by using Zopim Live Chat. Zopim has a built in feature that provides you with exact information pertaining to what your visitors are viewing, and even where they are from, and what type of computer they are using!');?> </p>
						</td>
						<td class="lc-feature-rightf" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon3.gif" width="72" height="71" alt="<?=_('Zopim has an intuitive design');?>" />
							<h2><?=_('Developer Centric');?></h2>
							<p><?=_('Whether you are looking at integrating Zopim into your website or simply trying to make it work with a third party application, the process is extremely simple and extremely well documented. Don\'t forget, if you get stuck, you\'ll always get a reply to your query in minutes!');?> </p>
						</td>
					</tr>
					<tr>
						<td class="lc-feature-spacer"><!-- --></td>
						<td class="lc-feature-spacer"><!-- --></td>
					</tr>
					<tr>
						<td class="lc-feature-left" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon8.gif" width="72" height="71" alt="<?=_('Automate your hosting with a Zopim license');?>" />
							<h2><?=_('Chat Freedom');?></h2>
							<p><?=_('Running a business can be a complicated affair if you\'re the only one. To tackle this problem Zopim came up with an innovative solution, which to allow you to be able to receive live chats from any device or computer, regardless of where you are, providing you with full mobility.');?> </p>
						</td>
						<td class="lc-feature-right" valign="top">
							<img class="lc-float-right" src="<?=$img_dir?>/feature-icon7.gif" width="72" height="71" alt="<?=_('Easily mold your Zopim instance into any requirement');?>" />
							<h2><?=_('Lingual Choice');?></h2>
							<p><?=_('Choose the language that suits your needs, with over thirty different languages to choose from, you can rest assured that you\'ll always be able to communicate in the language that you and your clients prefer. Don\'t worry, there are always new languages being added too, just in case you are wanting to expand into a new market!');?></p>
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
