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
		<div class="lc-float-left"><h2><?=_('eNom Domain Reseller Account');?></h2></div>
		<div class="lc-clear"><!-- --></div>
	</div>
	<div class="lc-box">

		<div id="form" class="lc-form">
			
            

				<p><?=_('Getting started on selling domain names with your own eNom reseller account has never been so easy, and inexpensive. eNom currently supports over 30 TLD\'s, so you can offer your customers a wide choice or domain registrations.');?></p>
                
                <?=_('Some of the benefits that eNom can offer your business:');?>
                <div class="lc-list-check2"> 
					<ul class="lc-list2">
                    	<li><?=_('No set up fee, only minimum $100 top-up required.');?></li>
                        <li><?=_('Works with the ClientExec, Blesta, WHMAutoPilot, WHMCS, and many others.');?></li>
                        <li><?=_('Customize your reseller account with the eNom API, or sell directly with their Registry Rocket portal.');?></li>
                    </ul>
                </div>
                
                <p><?=_('TLD pricing is available below. Please note, that the below mentioned pricing are subject to at eNom\'s discretion.');?></p>
                
                
                <table width="100%" class="lc-table" cellpadding="1" cellspacing="1">

                            <tr>
                        
                                <td class="lc-table-header">.com</td>
                                <td class="lc-table-header">.net</td>
                                <td class="lc-table-header">.org</td>
                                <td class="lc-table-header">.info</td>
                                <td class="lc-table-header">.name</td>
                                <td class="lc-table-header">.biz</td>
                                <td class="lc-table-header">.mobi</td>
                                <td class="lc-table-header">.us</td>
                        
                            </tr>
                                <tr>
                             		<td>$20.00</td>
                                    <td>$20.00</td>
                                    <td>$20.00</td>
                                    <td>$20.00</td>
                                    <td>$20.00</td>
                                    <td>$20.00</td>
                                    <td>$20.00</td>
                                    <td>$20.00</td>
                            
                                </tr>

				</table>

            
            
		</div>

	</div>
    
    
    
    

</div>
<script type="text/javascript">Cufon.now();</script>
</body>
</html>