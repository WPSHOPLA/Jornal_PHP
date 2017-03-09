<?php include_once("_include/modules/config.php"); ?>
<?php include_once("_include/modules/general.php"); ?>
<?php include_once("_include/modules/ubersmith.php"); ?>
<?php include_once("_include/modules/pricing.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$company_error_404_page?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<?=$company_error_404_page_keywords?>" />
	<meta name="description" content="<?=$company_error_404_page_meta_description?>" />
	<meta name="author" content="<?=$author?>" />
	<meta name="copyright" content="<?=$copyright?>" />
	<link href="<?=$img_dir?>/favicon.ico" rel="shortcut icon" />
    <?php $css=""; include_once("_include/modules/css.php"); ?>
	<?php $java=""; include_once("_include/modules/java.php"); ?>
    <link href="<?=$css_dir?>/_include/css/landing/style-2.css" rel="stylesheet" type="text/css" />
    <link href="<?=$css_dir?>/_include/css/landing/table/style-5.css" rel="stylesheet" type="text/css" />
 <!-- 	<script src="<?=$site_dir?>/../_include/js/colorbox.js" type="text/javascript"></script> -->
	<script src="<?php $js_dir?>/_include/js-00002/landing.js" type="text/javascript"></script>
    <script type="application/javascript">Cufon.replace('.oops',{fontFamily:'Proxima Nova Semibold'});</script>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="wrapper">
<?php $menu=""; include_once("_include/modules/header.php"); ?>
<div class="lc-header-inner"><div class="lc-header-inner-holder">
	<div class="header"><?php print ("$company_error_404_page_message"); ?></div>
</div></div>
<div class="lc-content"><div class="lc-content-holder">

	<div class="lc-content-wrapper-inner" style="padding-right:10px; padding-left:0px; padding-top:0px;">
		<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
			
			<td class="lc-content-wide" valign="top" style=" padding-left:0px;">
  <div class="oops"><!--Feel free to browse around using the links below:--></div>
  
   <div style=" border: 1px solid #D5D5D5;    padding: 15px 18px 20px; margin:15px;" ><?php include_once("_include/modules/sitemap.php"); ?></div>
  
                    
                    
				    <div class="clr"></div>
			      
				

			</td>
		</tr>
		</table>
	</div>

</div></div>
<?php include_once("_include/modules/footer.php"); ?>
<?php include_once("_include/modules/additional.php"); ?>
</div>
</body>
</html>
