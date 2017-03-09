<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
	<?php include_once("../_include/modules/pricing.php"); ?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>
<?=$additional_ksplice_title?>
</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="<?=$additional_ksplice_keywords?>" />
    <meta name="description" content="<?=$additional_ksplice_meta_description?>" />
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
      <div class="header"><?php print ("$additional_ksplice"); ?></div>
    </div>
      </div>
  <div class="lc-content">
        <div class="lc-content-holder">
      <div class="lc-content-wrapper-inner">
            <table width="100%" cellpadding="0" cellspacing="0">
          <tr>
                <td class="lc-content-left" valign="top"><?php $left="additional"; $page="addi7"; include_once("../_include/modules/left.php"); ?></td>
                <td class="lc-content-right" valign="top">
                <?php if (!empty($global_plan->lc_license_comment_message)): ?>
                			<div  id="message" class="lc-box-alert"><?php echo $global_plan->lc_license_comment_message; ?></div>
				<?php endif; ?>
                <h1>Ksplice</h1>
                
              <div class="lc-box">
                    <table width="100%" cellpadding="0" cellspacing="0">
                  <tr>
                        <td class="lc-service-info" valign="top"><p><?=_('Ksplice is an application that allows your servers to automatically apply the latest security patches that are released by the Linux community without the need of rebooting your server, and causing service impacting server reboots.');?> </p>
                      <ul class="lc-list-check1">
                            <li><?=_('Rebootless server updates');?></li>
                            <li><?=_('Virtualization ready');?></li>
                            <li><?=_('Update rollback capability');?></li>
                            <li><?=_('Update email notifications');?></li>
                            <li><?=_('Easily Installable');?></li>
                          </ul>
                      <img src="<?=$img_dir?>/service-logo-ksplice.gif" alt="<?=_('Ksplice license logo');?>" /></td>
                        <td valign="top"><div id="screen1" class="lc-service-screen"><img src="<?=$img_dir?>/ksplice.jpg" width="320" height="223" alt="<?=_('Ksplice license screenshot');?>" /></div>
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
                                    <?=order_link_button(_("Rebooting is history. Never have to reboot again with a Ksplice license."));?>
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
                      <td><h2><?=_('Go rebootless with Ksplice and improve your uptime....');?></h2></td>
                      <td>
                      <!--<div class="lc-float-right" style="padding-right:7px"><a href="<?php print("$additional_ksplice_demo"); ?>" target="_blank" title="Ksplice Demo"><img src="<?=$img_dir?>/buttons/view-demo.png" width="110" height="29" alt="Try out the interactive demo of the ksplice license" /></a></div>-->
                      <div class="lc-float-right"><a class="youtube" href="<?php //print("$additional_ksplice_video"); ?>" title="<?php //print("$additional_ksplice_video_title"); ?>"><img src="<?=$img_dir?>/buttons/view-in-action-<?=getActualPage()?>.png" width="127" height="29" alt="<?=_('Maintain 100% Uptime; Ksplice allows you to go rebootless!');?>" /></a></div> 
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
                        <td class="lc-feature-leftf" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon1.gif" width="72" height="71" alt="" />
                      <h2><?=_('Swift Update Relases');?></h2>
                      <p><?=_('From the moment a patch is released by the Linux community, Ksplice promise to deliver a rebootless patch that will be ready for deployment within a couple of hours. So there is no waiting around. Ksplice can even automatically apply the patch for you, so there is no need to login to multiple servers to perform the update.');?> </p></td>
                        <td class="lc-feature-rightf" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon9.gif" width="72" height="71" alt="" />
                      <h2><?=_('Rollback Capability');?></h2>
                      <p><?=_('A patch didn\'t quite do what you expected? No problems with Ksplice license you can instantly reverse any update to the Linux kernel without the need to reboot. No more downtimes, and no more hassle of guessing to figure out which patches need to be removed. With Ksplice its truly that simple.');?></p></td>
                      </tr>
                  <tr>
                        <td class="lc-feature-spacer"><!-- --></td>
                        <td class="lc-feature-spacer"><!-- --></td>
                      </tr>
                  <tr>
                        <td class="lc-feature-left" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon6.gif" width="72" height="71" alt="" />
                      <h2><?=_('Online Management');?></h2>
                      <p><?=_('Ksplice Uptrack allows you to conveniently manage, which Linux patches are applied and which are not. Within Ksplice set server permission levels, and control which servers should be automatically updated and which shouldn\'t.');?></p></td>
                        <td class="lc-feature-right" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon7.gif" width="72" height="71" alt="" />
                      <h2><?=_('Virtualization Friendly');?></h2>
                      <p><?=_('Ksplice is also virtualization friendly and provides support for virtualization platforms such as: VMware, Virtuozzo, OpenVZ, and Xen. So updating 150 VPS containers within a virtual environment is a task of the past with Ksplice license.');?></p></td>
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
