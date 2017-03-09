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
		<div class="lc-float-left"><h2><?=_('Server Status');?> </h2></div>
		<div class="lc-clear"><!-- --></div>
	</div>
	<div class="lc-box" style="padding: 0px 18px 3px 18px;">

		<div id="form" class="lc-form">
			
            

				<p><?=_('In this section we ask you to ensure that if you are requesting a control panel installation, such as cPanel, Plesk, DirectAdmin or any other control panel, that you have provided us a server that has been freshly installed.');?> </p>
                
            
            
		</div>

	</div>
    
    
    
    

</div>
<script type="text/javascript">Cufon.now();</script>
</body>
</html>
