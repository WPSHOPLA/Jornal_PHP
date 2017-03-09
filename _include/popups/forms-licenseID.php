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
		<div class="lc-float-left"><h2><?=_('License ID');?></h2></div>
		<div class="lc-clear"><!-- --></div>
	</div>
	<div class="lc-box">

		<div id="form" class="lc-form">
			
            

				<p><?=_('In this field, this is the unique license ID that was provided to you in your welcome email. It\'s normally a longer string of numbers and digits and may look like this: 1NJX817APPAB4A');?>  </p>
                
            
            
		</div>

	</div>
    
    
    
    

</div>
<script type="text/javascript">Cufon.now();</script>
</body>
</html>