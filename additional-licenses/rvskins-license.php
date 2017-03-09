<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
	<?php include_once("../_include/modules/pricing.php"); ?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>
<?=$additional_rvskins_title?>
</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="<?=$additional_rvskins_keywords?>" />
    <meta name="description" content="<?=$additional_rvskins_meta_description?>" />
    <meta name="author" content="<?=$author?>" />
    <meta name="copyright" content="<?=$copyright?>" />
    <link href="<?=$img_dir?>/favicon.ico" rel="shortcut icon" />
    <?php $css=""; include_once("../_include/modules/css.php"); ?>
    <?php $java=""; include_once("../_include/modules/java.php"); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="http://www.licensecube.com/responsive.css" rel="stylesheet" type="text/css" />
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
      <div class="header"><?php print ("$additional_rvskins"); ?></div>
    </div>
      </div>
  <div class="lc-content">
        <div class="lc-content-holder">
      <div class="lc-content-wrapper-inner">
            <table width="100%" cellpadding="0" cellspacing="0">
          <tr>
                <td class="lc-content-left" valign="top"><?php $left="additional"; $page="addi2"; include_once("../_include/modules/left.php"); ?></td>
                <td class="lc-content-right" valign="top">
                <?php if (!empty($global_plan->lc_license_comment_message)): ?>
                			<div  id="message" class="lc-box-alert"><?php echo $global_plan->lc_license_comment_message; ?></div>
				<?php endif; ?>
                <h1>RVSkins</h1>
                
              <div class="lc-box">
                    <table width="100%" cellpadding="0" cellspacing="0">
                  <tr>
                        <td class="lc-service-info" valign="top"><p><?=_('RVSkins is a multi-theme skin management software that was designed for cPanel/WHM. RVSkin license supports over twenty-five languages and provides a great way to differentiate your web hosting plans from the competition.');?></p>
                      <ul class="lc-list-check1">
                        <!--<li><?=_('Multi-lingual support');?></li>-->
                            <li><?=_('Account-Specific Configuration');?></li>
                            <li><?=_('Easy Billing System Integration');?></li>
                            <li><?=_('Multi-theme design support');?></li>
                            <li><?=_('Up-sell messaging capabilities');?></li>
                          </ul>
                      <img src="<?=$img_dir?>/service-logo-rvskins.gif" alt="" /></td>
                        <td valign="top"><div id="screen1" class="lc-service-screen"><img src="<?=$img_dir?>/rvskins.jpg" width="320" height="223" alt="<?=_('RVSkins license logo');?>" /></div>
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
                                    <?=order_link_button(_("RVSkins license screenshot"));?>
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
                      <td><h2><?=_('Differentiate your hosting services today with RVSkin...');?></h2></td>
                      <td>
                      <div class="lc-float-right"><a class="youtube" href="<?php print ("$additional_rvskins_video"); ?>" title="<?php print ("$additional_rvskins_video_title"); ?>"><img src="<?=$img_dir?>/buttons/view-in-action-<?=getActualPage()?>.png" width="127" height="29" alt="<?=_('RVSkins - Customize your business!');?>" /></a></div>                      
                      <!--<div class="lc-float-right" style="padding-right:7px"><a href="<?php print("$additional_rvskins_demo"); ?>" target="_blank" title="RVSkins Demo"><img src="<?=$img_dir?>/buttons/view-demo.png" width="110" height="29" alt="Give RVSkins license a whirl and see how you like it" /></a></div>-->
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
                        <td class="lc-feature-leftf" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon5.gif" width="72" height="71" alt="<?=_('Intergrate any billing system into a RVSkins license');?>" />
                      <h2><?=_('Billing Integration');?></h2>
                      <p><?=_('Not needing to remember many complicated passwords has always been a plus. This is why RVSkin has developed a single sign-on module, which allows users to login to their billing system from their control panel without the need of remembering their passwords.');?></p></td>
                        <td class="lc-feature-rightf" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon7.gif" width="72" height="71" alt="<?=_('Support 25+ languages with your RVSkins license');?>" />
                      <h2><?=_('Multi-lingual Interface');?></h2>
                      <p><?=_('Having over twenty-five different languages that are supported by default, RVSkins license really provides an extremely valuable Webmaster toolset that anyone can use right out of the box.');?></p></td>
                      </tr>
                  <tr>
                        <td class="lc-feature-spacer"><!-- --></td>
                        <td class="lc-feature-spacer"><!-- --></td>
                      </tr>
                  <tr>
                        <td class="lc-feature-left" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon3.gif" width="72" height="71" alt="<?=_('Use the upsell feature to sell other products within the RVSkins license system');?>" />
                      <h2><?=_('Upsale Feature');?></h2>
                      <p><?=_('Ever had a new service which you wanted to share with your existing customer base? Using the Upsell feature, that comes standard with RVSkin, allows you to post your latest offers directly to end-users once they login to their control panel.');?></p></td>
                        <td class="lc-feature-right" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon4.gif" width="72" height="71" alt="<?=_('Automatically upgrade your RVSkins license without hassle');?>" />
                      <h2><?=_('Automatic Upgrades');?></h2>
                      <p><?=_('RVSkin automatically updates as soon as a new release is available, ensuring that everything is current. By doing this automatically, RVSkin frees you up to do more important business tasks.');?></p></td>
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
