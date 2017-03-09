<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
	<?php include_once("../_include/modules/pricing.php"); ?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>
<?=$additional_litespeed_title?>
</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="<?=$additional_litespeed_keywords?>" />
    <meta name="description" content="<?=$additional_litespeed_meta_description?>" />
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
      <div class="header"><?php print ("$additional_litespeed"); ?></div>
    </div>
      </div>
  <div class="lc-content">
        <div class="lc-content-holder">
      <div class="lc-content-wrapper-inner">
            <table width="100%" cellpadding="0" cellspacing="0">
          <tr>
                <td class="lc-content-left" valign="top"><?php $left="additional"; $page="addi10"; include_once("../_include/modules/left.php"); ?></td>
                <td class="lc-content-right" valign="top">
                <?php if (!empty($global_plan->lc_license_comment_message)): ?>
                			<div  id="message" class="lc-box-alert"><?php echo $global_plan->lc_license_comment_message; ?></div>
				<?php endif; ?>
                <h1>LiteSpeed</h1>
                
              <div class="lc-box">
                    <table width="100%" cellpadding="0" cellspacing="0">
                  <tr>
                        <td class="lc-service-info" valign="top"><p><?=_('Increasing the performance of your website starts with the right engine, that engine being LiteSpeed. LiteSpeed is a tried and tested web server that will not only increase your websites loading speeds, but will also give your visitors that "wow" factor. Being backed up by the LiteSpeed support team, you can rest assured your in good hands.');?> </p>
                      <ul class="lc-list-check1">
                            <li><?=_('Automated Updates');?></li>
                            <li><?=_('Real-time Service Monitoring');?></li>
                            <li><?=_('Tiny Resource Footprint');?></li>
                            <li><?=_('SSL Hardware Acceleration');?></li>
                          </ul>
                      <img src="<?=$img_dir?>/service-logo-litespeed.gif" alt="<?=_('LiteSpeed license logo');?>" /></td>
                        <td valign="top"><div id="screen1" class="lc-service-screen"><img src="<?=$img_dir?>/litespeed.jpg" width="320" height="223" alt="<?=_('LiteSpeed license screenshot');?>" /></div>
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
                                   <!-- <?=order_link_button();?>-->
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
                      <td><h2><?=_('Let LiteSpeed show you the real difference...');?></h2></td>
                      <td>
                      <!--<div class="lc-float-right" style="padding-right:7px"><a href="<?php print("$additional_ksplice_demo"); ?>" target="_blank" title="LiteSpeed Demo"><img src="<?=$img_dir?>/buttons/view-demo.png" width="110" height="29" alt="Try out the interactive demo of the ksplice license" /></a></div>-->
                      <div class="lc-float-right"><a class="youtube" href="<?php print("$additional_litespeed_video"); ?>" title="<?php print("$additional_litespeed_video_title"); ?>"><img src="<?=$img_dir?>/buttons/view-in-action-<?=getActualPage()?>.png" width="127" height="29" alt="<?=_('$additional_litespeed_video_title');?>" /></a></div> 
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
                        <td class="lc-feature-leftf" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon9.gif" width="72" height="71" alt="" />
                      <h2><?=_('Simplistic Interface');?></h2>
                      <p><?=_('Forget the old days of having to tune everything from command line. Using LiteSpeed, a single click on a web based GUI is all that is needed. No more complicated ssh configurations, just a few clicks directly within your web browser and you are done!');?> </p></td>
                        <td class="lc-feature-rightf" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon4.gif" width="72" height="71" alt="" />
                      <h2><?=_('Easily Updateable');?></h2>
                      <p><?=_('Have a busy schedule? We certainly understand that too! LiteSpeed now has several ways you can perform updates; automatically, manually, and semi-automatically. Regardless of the way you choose, you have the ability to control the way you want to do things. ');?></p></td>
                      </tr>
                  <tr>
                        <td class="lc-feature-spacer"><!-- --></td>
                        <td class="lc-feature-spacer"><!-- --></td>
                      </tr>
                  <tr>
                        <td class="lc-feature-left" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon5.gif" width="72" height="71" alt="" />
                      <h2><?=_('Infinitely Secure');?></h2>
                      <p><?=_('Take the hassle out of complicated security configurations and confusing parameters, just configure the settings you need, and let LiteSpeed handle the rest. Should you get stuck, you can always go back to the default configuration to reestablish maximum security.');?></p></td>
                        <td class="lc-feature-right" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon2.gif" width="72" height="71" alt="" />
                      <h2><?=_('Load Instantly');?></h2>
                      <p><?=_('Are you ready for a push into the modern era? If not, get ready as LiteSpeed will do that to you. Make your webpages load up to nine (9) times faster, than with Apache, not to mention use less resources in the process too!');?></p></td>
                      </tr>
                </table>
                  </div></td>
              </tr>
        </table>
          </div>
    </div>
      </div>
  <div class="push"></div>
  <?php include_once("../_include/modules/footer.php"); ?>
  <?php include_once("../_include/modules/additional.php"); ?>
</div>
    </body>
</html>
