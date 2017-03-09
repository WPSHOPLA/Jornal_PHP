<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
	<?php include_once("../_include/modules/pricing.php"); ?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>
<?=$additional_wpb_title?>
</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="<?=$additional_wpb_keywords?>" />
    <meta name="description" content="<?=$additional_wpb_meta_description?>" />
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
      <div class="header"><?php print ("$additional_wpb"); ?></div>
    </div>
      </div>
  <div class="lc-content">
        <div class="lc-content-holder">
      <div class="lc-content-wrapper-inner">
            <table width="100%" cellpadding="0" cellspacing="0">
          <tr>
                <td class="lc-content-left" valign="top"><?php $left="additional"; $page="addi1"; include_once("../_include/modules/left.php"); ?></td>
                <td class="lc-content-right" valign="top">
                 <?php if (!empty($global_plan->lc_license_comment_message)): ?>
                			<div  id="message" class="lc-box-alert"><?php echo $global_plan->lc_license_comment_message; ?></div>
				<?php endif; ?>
                <h1>Web Presence Builder</h1>

              <div class="lc-box">
                    <table width="100%" cellpadding="0" cellspacing="0">
                  <tr>
                        <td class="lc-service-info" valign="top"><p><?=_('The Web Presence Builder is an easy, scalable web application that is designed to create and manage websites. Web Presence Builder software can be integrated into almost any control panel, and is ideal for offering as a value added extra into your existing customer base.');?></p>
                      <ul class="lc-list-check1">
                            <li><?=_('Multi-Language Support');?></li>
                        <!--<li><?=_('5 Step website wizard');?></li>-->
                            <li><?=_('500+ Quality Templates');?></li>
                            <li><?=_('Powerful WYSIWYG editor');?></li>
                            <li><?=_('Attract and Retain More Customers');?></li>
                            <li><?=_('Site Owner Admin Panel');?></li>
                          </ul>
                      <img src="<?=$img_dir?>/web-presence-builder.png" alt="<?=_('Web Presence Builder License Logo');?>" width="80"/></td>
                        <td valign="top"><div id="screen1" class="lc-service-screen"><img src="<?=$img_dir?>/wpb-screenshot.jpg" width="320" alt="<?=_('Web Presence Builder License screenshot');?>" /></div>
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
                                    <?=order_link_button(_("Obtain your license of Web Presence Builder today"));?>
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
                      <td><h2><?=_('Attract and retain more customers with Web Presence Builder...');?></h2></td>
                      <td>
                      <div class="lc-float-right"><a class="youtube" href="<?php print ("$additional_wpb_video"); ?>" title="<?php print ("$additional_wpb_video_title"); ?>"><img src="<?=$img_dir?>/buttons/view-in-action-<?=getActualPage()?>.png" width="127" height="29" alt="<?=_('Watch Web Presence Builder in action...');?>" /></a></div>
                      <!--<div class="lc-float-right" style="padding-right:7px"><a href="<?php print("$additional_wpb_demo"); ?>" target="_blank" title="Web Presence Builder Demo"><img src="<?=$img_dir?>/buttons/view-demo.png" width="110" height="29" alt="Web Presence Builder Account Demo" /></a></div>-->

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
                        <td class="lc-feature-leftf" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon2.gif" width="72" height="71" alt="<?=_('Web Presence Builder License Easy and Fast Installation');?>" />
                      <h2><?=_('Fast Implementation');?></h2>
                      <p><?=_('Web Presence Builder is an out of the box tool that is designed for fast implementation. The Web Presence Builder license can also be used with a variety of control panels including cPanel/WHM that makes it an ideal tool for webmasters.');?></p></td>
                        <td class="lc-feature-rightf" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon1.gif" width="72" height="71" alt="<?=_('Web Presence Builder license branding functionality');?>" />
                      <h2><?=_('Easily Brandable');?></h2>
                      <p><?=_('Making Web Presence Builder look like it\'s a part of your control panel is easy. Simply modify the parameters in the admin interface, and bam you\'ve got a Web Presence Builder that fits neatly with your current theme.');?></p></td>
                      </tr>
                  <tr>
                        <td class="lc-feature-spacer"><!-- --></td>
                        <td class="lc-feature-spacer"><!-- --></td>
                      </tr>
                  <tr>
                        <td class="lc-feature-left" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon4.gif" width="72" height="71" alt="<?=_('Use Web Presence Builder and within five easy steps your still will be completed');?>" />
                      <h2><?=_('Easy Five Step Wizard');?> </h2>
                      <p><?=_('A step-by-step wizard that supports drag and drop features, allows end users to create design structures, edit content, and publish websites without any delays. Additionally, the Intuitive WYSIWYG Editor whicomes with Web Presence Builder license allows your end-users to easily edit sites without knowing any HTML.');?></p></td>
                        <td class="lc-feature-right" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon8.gif" width="72" height="71" alt="<?=_('Web Presence Builder license adminstrator site panel');?>" />
                      <h2><?=_('Site Owner Panel');?></h2>
                      <p><?=_('Easily manage multiple sites by providing your IT staff the ability to manage site statistics, configure profiles, and create new websites. This level of functionality only goes to show that Web Presence Builder is an ideal tool for Webmasters and Administrators alike.');?></p></td>
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
