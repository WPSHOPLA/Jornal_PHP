<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
	<?php include_once("../_include/modules/pricing.php"); ?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>
<?=$additional_mivamerch_title?>
</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="<?=$additional_mivamerch_keywords?>" />
    <meta name="description" content="<?=$additional_mivamerch_meta_description?>" />
    <meta name="author" content="<?=$author?>" />
    <meta name="copyright" content="<?=$copyright?>" />
    <link href="<?=$img_dir?>/favicon.ico" rel="shortcut icon" />
    <?php $css=""; include_once("../_include/modules/css.php"); ?>
    <?php $java=""; include_once("../_include/modules/java.php"); ?>
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
  <div class="lc-header-inner">
        <div class="lc-header-inner-holder">
      <div class="header"><?php print ("$additional_miva_message"); ?></div>
    </div>
      </div>
  <div class="lc-content">
        <div class="lc-content-holder">
      <div class="lc-content-wrapper-inner">
            <table width="100%" cellpadding="0" cellspacing="0">
          <tr>
                <td class="lc-content-left" valign="top"><?php $left="additional"; $page="addi5"; include_once("../_include/modules/left.php"); ?></td>
                <td class="lc-content-right" valign="top">
                <?php if (!empty($global_plan->lc_license_comment_message)): ?>
                			<div  id="message" class="lc-box-alert"><?php echo $global_plan->lc_license_comment_message; ?></div>
				<?php endif; ?>
                <h1>Miva Merchant</h1>
                
              <div class="lc-box">
                    <table width="100%" cellpadding="0" cellspacing="0">
                  <tr>
                        <td class="lc-service-info" valign="top"><p><?=_('Miva Merchant is a powerful, all-encompassing e-commerce shopping cart software that is perfect for small business owners and web-developers alike. Being packed with countless features, Miva Merchant is expandable and easily customizable.');?></p>
                      <ul class="lc-list-check1">
                            <li><?=_('Enterprise Security');?></li>
                            <li><?=_('Real-time Shipping Rates');?></li>
                            <li><?=_('Order Management');?></li>
                            <li><?=_('Global Currency Support');?></li>
                            <li><?=_('Design Flexibility');?></li>
                          </ul>
                      <img src="<?=$img_dir?>/service-logo-mivamerchant.gif" alt="<?=_('Miva Merchant License Logo');?>" /></td>
                        <td valign="top"><div id="screen1" class="lc-service-screen"><img src="<?=$img_dir?>/mivamerchant.jpg" width="320" height="223" alt="<?=_('Miva Merchant Screenshot');?>" /></div>
                      <div class="lc-service-order">
                            <table width="100%" cellpadding="0" cellspacing="0">
                          <tr>
                                <td valign="top"><?php if (empty($_SERVER['QUERY_STRING'])) { ?>
                              <div class="lc-service-price1-info"><?=_('Starting at');?></div>
                              <div class="lc-service-price1">$<?=$global_plan->price?><?=_('/mo');?></div>
                              <?php } else if (array_key_exists('vps', $_REQUEST)) { ?>
                              <div class="lc-service-price1">$<?=$global_plan->price?><?=_('/mo');?></div>
                              <div class="lc-service-price1-info"><?=_('(VPS license)');?></div>
                              <?php } else if (array_key_exists(_('dedicated'), $_REQUEST)) { ?>
                              <div class="lc-service-price1">$<?=$global_plan->price?><?=_('/mo');?></div>
                              <div class="lc-service-price1-info"><?=_('(Dedicated license)');?></div>
                              <?php } ?></td>
                                <td valign="top"><div class="lc-float-right">
                                    <?=order_link_button(_("Get your copy of the Miva Merchant License"));?>
                                  </div>
                              <div class="lc-clear">
                                    <!-- -->
                                  </div></td>
                              </tr>
                        </table>
                          </div></td>
                      </tr>
                </table>
                    <div class="lc-bar">
                  <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                      <td><h2><?=_('Why Miva Merchant license is the right choice...');?></h2></td>
                      <td><div class="lc-float-right"><a class="youtube" href="<?php print ("$additional_miva_video"); ?>" title="<?php print ("$additional_mvia_video_title"); ?>"><img src="<?=$img_dir?>/buttons/view-in-action-<?=getActualPage()?>.png" width="127" height="29" alt="<?=_('View the Mia Merchant in action');?>" /></a></div>
                            <!--<div class="lc-float-right" style="padding-right:7px"><a href="<?php print("$additional_miva_demo"); ?>" target="_blank" title="Miva Merchant Demo"><img src="<?=$img_dir?>/buttons/view-demo.png" width="110" height="29" alt="Give Miva Merchant License a go, and see how its diffrent then other e-commerce sites" /></a></div>-->
                            <div class="lc-clear">
                          <!-- -->
                        </div></td>
                    </tr>
                      </table>
                </div>
                  </div>
              <div class="lc-spacer">
                    <!-- -->
                  </div>
              <div class="lc-box">
                    <table width="100%" cellpadding="0" cellspacing="0">
                  <tr>
                        <td class="lc-feature-leftf" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon5.gif" width="72" height="71" alt="<?=_('Miva Mercahnt License Design Overview');?>" />
                      <h2><?=_('Design Flexibility');?></h2>
                      <p><?=_('Miva Merchant, an extravagantly figure rich e-commerce solution, will provide you with unparalleled control over every pixel on every page. Customize your look to match your personality with the pre-built templates and your logo. With Miva Merchant license you\'ll be up and selling in no time.');?></p></td>
                        <td class="lc-feature-rightf" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon2.gif" width="72" height="71" alt="<?=_('Miva Merchant License Export and Import');?>" />
                      <h2><?=_('Data Import &amp; Export');?></h2>                      
                    <?=_(' Manage your data with ease by using the import/export features with Miva Merchant. Miva Merchant license has features that allow you to get granular with what data you need, so you only export and import data that you absolutely require.');?>  </td>
                      </tr>
                  <tr>
                        <td class="lc-feature-spacer"><!-- --></td>
                        <td class="lc-feature-spacer"><!-- --></td>
                      </tr>
                  <tr>
                        <td class="lc-feature-left" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon6.gif" width="72" height="71" alt="<?=_('Miva Merchant License Security Overview');?>" />
                      <h2><?=_('Enterprise Security');?></h2>
                      <p><?=_('Be at the forefront of security with Miva Merchant\'s dedication to PCI security standards. Miva Merchant\'s PCI ensures that you have peace of mind when it comes to processing your customers\' financial data via your checkout process.');?></p></td>
                        <td class="lc-feature-right" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon10.gif" width="72" height="71" alt="<?=_('Try out the Miva Mercahnt License Inhouse Support');?>" />
                      <h2><?=_('In House Support');?></h2>
                      <p><?=_('Miva Merchant is one of the few e-commerce checkout companies that provide rigorous support for all their products, no matter where you are being hosted. Miva Merchant world-class support department is backed by their development team, which can assist you quickly and correctly');?></p></td>
                      </tr>
                </table>
                  </div></td>
              </tr>
        </table>
          </div>
    </div>
      </div>
  <?php include_once("../_include/modules/footer.php"); ?>
  <?php include_once("../_include/modules/additional.php"); ?>
</div>
    </body>
</html>
