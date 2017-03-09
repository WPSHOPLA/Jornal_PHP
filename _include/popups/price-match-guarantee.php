<?php include_once("../modules/config.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$site_name?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<?=$keywords?>" />
	<meta name="description" content="<?=$description?>" />
	<meta name="author" content="<?=$author?>" />
	<meta name="copyright" content="<?=$copyright?>" />
	<link href="<?=$img_dir?>/favicon.ico" rel="shortcut icon" />
	<?php $css=""; include_once("../modules/css.php"); ?>
	<?php $java=""; include_once("../modules/java.php"); ?>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".password").colorbox({iframe:true, innerWidth:640, innerHeight:385});
		});
	</script>
</head>
<body>
<div class="lc-popup">

	<div class="lc-box-header">
		<div class="lc-float-left"><h2><?=_('Price Match Guarantee');?></h2></div>
		<div class="lc-clear"><!-- --></div>
	</div>
	<div class="lc-box">

		<div id="form" class="lc-form">
			
            

				<p><?=_('At LicenseCube, we strive to offer all of our customers the best value we can. Having taken a great deal of time to ensure that our services are competitively priced and aligned with your needs we want to ensure your business can succeed.');?></p>
                
               <p><?=_('In an apples-to-apples comparison, if you find an offer that beats ours, that is publically advertised, we\'ll match it. We understand that helping you build your online business is the right choice and we\'re to help.');?></p>
            
            
		</div>

	</div>
    
    
    
    

</div>
<script type="text/javascript">Cufon.now();</script>
</body>
</html>