<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<title><?=$company_index_page?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<meta name="keywords" content="<?=$company_index_page_keywords?>" />

	<meta name="description" content="<?=$company_index_page_meta_description?>" />

	<meta name="author" content="<?=$author?>" />

	<meta name="copyright" content="<?=$copyright?>" />

	<link href="<?=$img_dir?>/favicon.ico" rel="shortcut icon" />

	<?php $css=""; include_once("../_include/modules/css.php"); ?>

	<?php $java=""; include_once("../_include/modules/java.php"); ?>

</head>

<body>
<div class="wrapper">
<?php $menu="about"; include_once("../_include/modules/header.php"); ?>

<div class="lc-header-inner"><div class="lc-header-inner-holder">

	<div class="header"><?php print("$company_message"); ?></div>

</div></div>

<div class="lc-content"><div class="lc-content-holder">



	<div class="lc-content-wrapper-inner">

		<table width="100%" cellpadding="0" cellspacing="0">

		<tr>

			<td class="lc-content-left" valign="top">



				<?php $left="information"; $page="about"; include_once("../_include/modules/left.php"); ?>



			</td>

			<td class="lc-content-right" valign="top">



				<h1><?=_('Overview');?></h1>

				<p><?=_("As many companies and end-users know, licensing is an essential part of doing business online. Thus, we embarked on building a company that would provide licensing services, as well as technical advise on what products best suite our customer's needs on a case by case basis.");?> </p>
                
                <p><?=_('Here, at LicenseCube, we want to ensure that you obtain just the right license to take your business to the next level, be it a Parallels Virtuozzo Container License, or WHMCS which will automate your billing process; we want to work with you to ensure your business continues to flourish.');?></p>
                
                <h2><?=_('Customer Focus');?></h2>

				<p><?=_('Advising our customers of the best licensing methods, and providing strategies is something we enjoy. Utilizing the right software combinations helps our customers achieve their desired goals. Below you will find some of the advantages all of our customers are entitled to:');?></p>

				<table width="100%" cellpadding="0" cellspacing="0">

				<tr>

					<td valign="top">

						<ul class="lc-list-check">

							<li><?=_('Competitive Pricing');?></li>

							<li><?=_('Instant License Activations');?></li>

							<li><?=_('Easy Account Management');?></li>

							<li><?=_('30 Day Money Back Guarantee');?></li>

							<li><?=_('Licensing Advise/Guidance');?></li>

							<li><?=_('Bulk Discount Rates');?></li>

							

						</ul>

					</td>

					<td valign="top">

						<ul class="lc-list-check">

							<li><?=_('Free Installation Services');?></li>
                            
                            <li><?=_('Toll Free Sales/Support Hotline');?></li>

							<li><?=_('Knowledge Base Access');?></li>

							<li><?=_('Price Match Guarantee');?></li>

							<li><?=_('cPanel Fast Update Server');?></li>

							<li><?=_('and much more...');?></li>

						</ul>

					</td>

				</tr>

				</table>

				<h2><?=_('Price Match Guarantee');?></h2>

				<p><strong><?=_("We won't be beaten on price. If you can find a reputable licensing company that has been in business at least six-months that is offering the same pricing as us or better, we'll not only give you a month free, but we'll also match their pricing; that's our guarantee.");?></strong></p>
            



			</td>

		</tr>

		</table>
<!--<div class="lc-logos"><img src="<?pkp//$img_dir?>/logos.gif" width="915" height="92" alt="LicenseCube logo" /></div>-->
	</div>



</div></div>

<?php include_once("../_include/modules/footer.php"); ?>
<?php include_once("../_include/modules/additional.php"); ?>
</div>
</body>

</html>