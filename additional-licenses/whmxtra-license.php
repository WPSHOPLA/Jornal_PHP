<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
	<?php include_once("../_include/modules/pricing.php"); ?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>
<?=$additional_whmxtra_title?>
</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="<?=$additional_whmxtra_keywords?>" />
    <meta name="description" content="<?=$additional_whmxtra_meta_description?>" />
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
      <div class="header"><?php print ("$additional_whmxtra"); ?></div>
    </div>
      </div>
  <div class="lc-content">
        <div class="lc-content-holder">
      <div class="lc-content-wrapper-inner">
            <table width="100%" cellpadding="0" cellspacing="0">
          <tr>
                <td class="lc-content-left" valign="top"><?php $left="additional"; $page="addi4"; include_once("../_include/modules/left.php"); ?></td>
                <td class="lc-content-right" valign="top">
                <?php if (!empty($global_plan->lc_license_comment_message)): ?>
                			<div  id="message" class="lc-box-alert"><?php echo $global_plan->lc_license_comment_message; ?></div>
				<?php endif; ?>
                <h1>WHMXtra</h1>
                
              <div class="lc-box">
                    <table width="100%" cellpadding="0" cellspacing="0">
                  <tr>
                        <td class="lc-service-info" valign="top"><p><?=_('WHMXtra is the next generation one-click auto-installer for administrators. WHMXtra license saves time, and makes more money for the company by allowing administrators to install software packages with a click of a button. This is a must have tool for any hosting provider, no matter the size.');?></p>
                      <ul class="lc-list-check1">
                            <li><?=_('Contains over 150+ features');?></li>
                            <li><?=_('Amazing Customer Service!');?></li>
                            <li><?=_('Easy Install / Uninstall process');?></li>
                            <li><?=_('Great support resources');?></li>
                            <li><?=_('Constantly adding new features');?></li>
                          </ul>
                      <img src="<?=$img_dir?>/service-logo-whmxtra.gif" alt="<?=_('WHMXtra license logo');?>" /></td>
                        <td valign="top"><div id="screen1" class="lc-service-screen"><img src="<?=$img_dir?>/whmxtra.jpg" width="320" height="223" alt="<?=_('WHMXtra license screenshot');?>" /></div>
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
                                    <?=order_link_button(_("Give WHMXtra license a try, and you'll be amazed"));?>
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
                      <td><h2><?=_('Get WHMXtra running, and you\'ll be amazed...');?></h2></td>
                      <td>
                      <div class="lc-float-right"><a class="youtube" href="<?php print("$additional_whmxtra_video"); ?>" title="<?php print("$additional_whmxtra_video_title"); ?>"><img src="<?=$img_dir?>/buttons/view-in-action-<?=getActualPage()?>.png" width="127" height="29" alt="<?=_('WHMXtra - The automated script installer');?>" /></a></div>
                      
                      <!--<div class="lc-float-right" style="padding-right:7px"><a href="<?php print("$additional_whmxtra_demo"); ?>" target="_blank" title="WHMXtra Demo"><img src="<?=$img_dir?>/buttons/view-demo.png" width="110" height="29" alt="Try out the interactive demo of the WHMXtra license" /></a></div>-->
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
                        <td class="lc-feature-leftf" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon10.gif" width="72" height="71" alt="<?=_('When you purchase a WHMXtra license you get World-Class support');?>" />
                      <h2><?=_('World-Class Support');?></h2>
                      <p><?=_('Support is like having a right hand man, its guidance is truly essential when you are in need of help or have a question. This is when WHMXtra springs into action with their world-class support department which is able to answer almost any question within a matter of minutes, not hours. We\'ve tried WHMXtra support ourselves and it\'s truly amazing.');?></p></td>
                        <td class="lc-feature-rightf" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon5.gif" width="72" height="71" alt="<?=_('WHMXtra license has a easy and efficeient design');?>" />
                      <h2><?=_('Efficient Design');?></h2>
                      <p><?=_('When it comes to managing software, a clean and crisp design is a requirement. Easy navigation, large icons, and a feature rich design allows users to enjoy all the features of WHMXtra license without having to explore the administrator interface in great detail.');?></p></td>
                      </tr>
                  <tr>
                        <td class="lc-feature-spacer"><!-- --></td>
                        <td class="lc-feature-spacer"><!-- --></td>
                      </tr>
                  <tr>
                        <td class="lc-feature-left" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon9.gif" width="72" height="71" alt="<?=_('Easily install WHMXtra license in just a few clicks');?>" />
                      <h2><?=_('Easy/Rapid Install');?></h2>
                      <p><?=_('In a time-sensitive world installation times need to be as short as possible, this is why the WHMXtra has created the streamlined auto-installer that will get the whole application ready for use within a matter of minutes.');?></p></td>
                        <td class="lc-feature-right" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon1.gif" width="72" height="71" alt="<?=_('WHMXtra license is constantly improving, and quickly!');?>" />
                      <h2><?=_('Constantly Evolving');?></h2>
                      <p><?=_('Constantly innovating software products ensures its longevity; this is what the software markets tell us on a daily basis. WHMXtra does its utmost to release new versions of the all-famous administrator one-click installer which is packed with new and even more impressive features then the previous.');?></p></td>
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
