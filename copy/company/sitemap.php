<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$company_sitemap_page?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<?=$company_sitemap_keywords?>" />
	<meta name="description" content="<?=$company_sitemap_meta_description?>" />
	<meta name="author" content="<?=$author?>" />
	<meta name="copyright" content="<?=$copyright?>" />
	<link href="<?=$img_dir?>/favicon.ico" rel="shortcut icon" />
	<?php $css=""; $css_footer_push=0; include_once("../_include/modules/css.php"); ?>
	<?php $java=""; include_once("../_include/modules/java.php"); ?>
</head>
<body>
<div class="wrapper">
<?php $menu="about"; include_once("../_include/modules/header.php"); ?>
<div class="lc-header-inner"><div class="lc-header-inner-holder">
	<div class="header"><?php print("$company_sitemap"); ?></div>
</div></div>
<div class="lc-content"><div class="lc-content-holder">
	<div class="lc-content-wrapper-inner">
		<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td class="lc-content-wide" valign="top">
				<h1><?=_('Welcome to our Site Map...');?></h1>

				<p><?=_('Where else can someone go when they are looking for something? A Site Map! Our sitemap covers links on our website, so you can find everything in one easy to use page, just the way you\'d expect it to be. Please remember, that if you don\'t find what you\'re looking for, please be sure to get in contact with us, so we can assist you. Please call us at (855) 465-4236.');?></p>

<div class="lc-box">
			<?php include_once("../_include/modules/sitemap.php"); ?>
</div>
				
                <p></p>
			</td>
		</tr>
		</table>
	</div>
</div>
<div class="push"></div>
</div>
<?php include_once("../_include/modules/footer.php"); ?>
<?php include_once("../_include/modules/additional.php"); ?>
</div>
</body>

</html>
