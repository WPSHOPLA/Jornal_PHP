<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<title><?=$company_terms_page?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<meta name="keywords" content="<?=$company_terms_page_keywords?>" />

	<meta name="description" content="<?=$company_terms_meta_description?>" />

	<meta name="author" content="<?=$author?>" />

	<meta name="copyright" content="<?=$copyright?>" />

	<link href="<?=$img_dir?>/favicon.ico" rel="shortcut icon" />

	<?php $css=""; include_once("../_include/modules/css.php"); ?>

	<?php $java=""; include_once("../_include/modules/java.php"); ?>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="http://www.licensecube.com/responsive.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div class="wrapper">
<?php $menu="about"; include_once("../_include/modules/header.php"); ?>

<div class="lc-header-inner"><div class="lc-header-inner-holder">

	<div class="header"><?php print("$company_terms"); ?></div>

</div></div>

<div class="lc-content"><div class="lc-content-holder">



	<div class="lc-content-wrapper-inner">

		<table width="100%" cellpadding="0" cellspacing="0">

		<tr>

			<td class="lc-content-left" valign="top">



				<?php $left="information"; $page="terms"; include_once("../_include/modules/left.php"); ?>



			</td>

			<td class="lc-content-right" valign="top">



               		<?php include('../_include/modules/terms-of-service.php'); ?>



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
