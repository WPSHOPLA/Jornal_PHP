<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
	<?php include_once("../_include/modules/pricing.php"); ?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>
<?=$additional_kernelcare_title?>
</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="<?=$additional_kernelcare_keywords?>" />
    <meta name="description" content="<?=$additional_kernelcare_meta_description?>" />
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
      <div class="header"><?php print ("$additional_kernelcare"); ?></div>
    </div>
      </div>
  <div class="lc-content">
        <div class="lc-content-holder">
      <div class="lc-content-wrapper-inner">
            <table width="100%" cellpadding="0" cellspacing="0">
          <tr>
                <td class="lc-content-left" valign="top"><?php $left="additional"; $page="addi11"; include_once("../_include/modules/left.php"); ?></td>
                <td class="lc-content-right" valign="top">
                <?php if (!empty($global_plan->lc_license_comment_message)): ?>
                			<div  id="message" class="lc-box-alert"><?php echo $global_plan->lc_license_comment_message; ?></div>
				<?php endif; ?>
                <h1>KernelCare</h1>
                
              <div class="lc-box">
                    <table width="100%" cellpadding="0" cellspacing="0">
                  <tr>
                        <td class="lc-service-info" valign="top"><p><?=_('KernelCare provides live Linux kernel patching without the need for a reboot.  This includes complex kernel changes so it can patch virtually any kernel level vulnerability.  It is automated so your kernel remains up-to-date within hours of a patch release.');?> </p>
                      <ul class="lc-list-check1">
                            <li><?=_('Minutes to setup');?></li>
                            <li><?=_('Prompt patches roll out');?></li>
                            <li><?=_('Supports CentOS 6.x, CloudLinux 6.x, RHEL 6.x and OpenVZ …');?></li>
                            <li><?=_('No performance impact');?></li>
                            <li><?=_(' Ability to roll back changes');?></li>
                          </ul>
                      <img src="<?=$img_dir?>/service-logo-kernelcare.gif" alt="<?=_('KernelCare license logo');?>" /></td>
                        <td valign="top"><div id="screen1" class="lc-service-screen"><img src="<?=$img_dir?>/kernelcare.jpg" width="320" height="223" alt="<?=_('KernelCare license screenshot');?>" /></div>
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
                      <td><h2><?=_('Let KernelCare show you the real difference...');?></h2></td>
                      <td>
                      
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
                      <h2><?=_('Save time');?></h2>
                      <p><?=_('Automated updates prevent server administrators from having to stay up late at night to schedule reboots to complete kernel patching.  There is no performance impact to the server.');?> </p></td>
                        <td class="lc-feature-rightf" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon4.gif" width="72" height="71" alt="" />
                      <h2><?=_('Ensure Security');?></h2>
                      <p><?=_('Not doing reboots can result in a hacked server. With KernelCare, security updates are applied automatically, to a running server, without downtime – and no need to reboot.');?></p></td>
                      </tr>
                  <tr>
                        <td class="lc-feature-spacer"><!-- --></td>
                        <td class="lc-feature-spacer"><!-- --></td>
                      </tr>
                  <tr>
                        <td class="lc-feature-left" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon5.gif" width="72" height="71" alt="" />
                      <h2><?=_('Easy Installation');?></h2>
                      <p><?=_('Installation is only a few commands and if you choose to remove KernekCare, that is just as easy.  You don’t need to be an expert server administrator to use Kernel Care.');?></p></td>
                        <td class="lc-feature-right" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon2.gif" width="72" height="71" alt="" />
                      <h2><?=_('Wide Support');?></h2>
                      <p><?=_('Kernel Care supports all the most popular Linux versions including CentOS, RHEL, CloudLinux, OpenVZ, with more on the way.  Attempting an install on an unsupported Linux OS will NOT result in downtime.');?></p></td>
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
