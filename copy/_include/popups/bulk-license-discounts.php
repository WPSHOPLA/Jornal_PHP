<?php include_once("../modules/config.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php

function discount_credit_line($itier) {
        global $discount_tiers;
        global $img_dir;
        if ($discount_tiers[$itier]['credit']) {
                ?><td><center><img src="<?=$img_dir?>/bullet-check.png" alt="Avaliable" /></center></td><?
        } else {
                ?><td><center><img src="<?=$img_dir?>/no.png" alt="Not Avaliable"/></center></td><?
        }
}

?>
<head>
	<title><?=$site_name?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<?=$keywords?>" />
	<meta name="description" content="<?=$description?>" />
	<meta name="author" content="<?=$author?>" />
	<meta name="copyright" content="<?=$copyright?>" />
	<link href="<?=$img_dir?>/favicon.ico" rel="shortcut icon" />
	<?php $css=""; include_once("..//modules/css.php"); ?>
	<?php $java=""; include_once("..//modules/java.php"); ?>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".password").colorbox({iframe:true, innerWidth:640, innerHeight:385});
		});
	</script>
</head>
<body>
<div class="lc-popup">

	<div class="lc-box-header">
		<div class="lc-float-left"><h2><?=_('Bulk Licensing Discounts');?></h2></div>
		<div class="lc-clear"><!-- --></div>
	</div>
	<div class="lc-box">

		<div id="form" class="lc-form">
			
            

				<p style="margin-top:0px;"><?=_('Obtaining discounts isn\'t a complicated process with LicenseCube. In fact, obtaining the discount is as simple as logging into your account with us. For further information on how our bulk licensing discounts work, please contact us at (855) 465-4236');?></p>
                
<table width="100%" class="lc-table" cellpadding="1" cellspacing="1">
        <tr>
                <td class="lc-table-header"></td>
                <td class="lc-table-header"><?=_('Tier');?> 1</td>
                <td class="lc-table-header"><?=_('Tier');?> 2</td>
                <td class="lc-table-header"><?=_('Tier');?> 3</td>
                <td class="lc-table-header"><?=_('Tier');?> 4</td>
        </tr>
        <tr>
                <td><?=_('License Count');?></td>
                <td><?=$discount_tiers[0]['pack_count']?> - <?=$discount_tiers[1]['pack_count']-1?></td>
                <td><?=$discount_tiers[1]['pack_count']?> - <?=$discount_tiers[2]['pack_count']-1?></td>
                <td><?=$discount_tiers[2]['pack_count']?> - <?=$discount_tiers[3]['pack_count']-1?></td>
                <td><?=$discount_tiers[3]['pack_count']?>+</td>
        </tr>
        <tr>
                <td><?=_('Discount Level');?></td>
                <td><?=$discount_tiers[0]['discount']?>%</td>
                <td><?=$discount_tiers[1]['discount']?>%</td>
                <td><?=$discount_tiers[2]['discount']?>%</td>
                <td><?=$discount_tiers[3]['discount']?>%</td>
        </tr>
        <tr>
                <td><?=_('Account Credits');?></td>
                <? discount_credit_line(0); ?>
                <? discount_credit_line(1); ?>
                <? discount_credit_line(2); ?>
                <? discount_credit_line(3); ?>
        </tr>
</table>
    
    <p></p>
            
            
		</div>

	</div>
    
    
    
    

</div>
<script type="text/javascript">Cufon.now();</script>
</body>
</html>