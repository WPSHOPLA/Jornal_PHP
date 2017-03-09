<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
	<?php include_once("../_include/modules/pricing.php"); ?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>
<?=$additional_whmsonic_title?>
</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="<?=$additional_whmsonic_keywords?>" />
    <meta name="description" content="<?=$additional_whmsonic_meta_description?>" />
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
      <div class="header"><?php print ("$additional_whmsonic"); ?></div>
    </div>
      </div>
  <div class="lc-content">
        <div class="lc-content-holder">
      <div class="lc-content-wrapper-inner">
            <table width="100%" cellpadding="0" cellspacing="0">
          <tr>
                <td class="lc-content-left" valign="top"><?php $left="additional"; $page="addi6"; include_once("../_include/modules/left.php"); ?></td>
                <td class="lc-content-right" valign="top">
                <?php if (!empty($global_plan->lc_license_comment_message)): ?>
                			<div  id="message" class="lc-box-alert"><?php echo $global_plan->lc_license_comment_message; ?></div>
				<?php endif; ?>
                <h1>WHMSonic</h1>
                
              <div class="lc-box">
                    <table width="100%" cellpadding="0" cellspacing="0">
                  <tr>
                        <td class="lc-service-info" valign="top"><p><?=_('Empowering your clients by providing them Shoutcast streaming has never been so easy. The WHMSonic module, which is installable in seconds, will allow you to provide your customers with easy-to-use Shoutcast streaming service that is accessible directly from the cPanel interface.');?></p>
                      <ul class="lc-list-check1">
                            <li><?=_('Real-time Bandwidth Control');?></li>
                            <li><?=_('Supports multiple audio players');?></li>
                            <li><?=_('Supports 8+ languages');?></li>
                            <li><?=_('Easy Installation &amp; Integration');?></li>
                            <li><?=_('Simplified user control via cPanel/WHM');?></li>
                          </ul>
                      <img src="<?=$img_dir?>/service-logo-whmsonic.gif" alt="<?=_('WHMSonic license logo');?>" /></td>
                        <td valign="top"><div id="screen1" class="lc-service-screen"><img src="<?=$img_dir?>/whmsonic.jpg" width="320" height="223" alt="<?=_('WHMSonic license screenshot');?>" /></div>
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
                                    <?=order_link_button(_("Order your WHMSonic license today"));?>
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
                      <td><h2><?=_('Get your broadcast heard loud and clear with WHMSonic...');?></h2></td>
                      <td>
                      <div class="lc-float-right"><a class="youtube" href="<?php print ("$additional_whmsonic_video"); ?>" title="<?php print ("$additional_whmsonic_video_title"); ?>"><img src="<?=$img_dir?>/buttons/view-in-action-<?=getActualPage()?>.png" width="127" height="29" alt="<?=_('Start your online streaming service with WHMSonic!');?>" /></a></div>
                      <!--<div class="lc-float-right" style="padding-right:7px"><a href="<?php print("$additional_whmsonic_demo"); ?>" target="_blank" title="WHMSonic Demo"><img src="<?=$img_dir?>/buttons/view-demo.png" width="110" height="29" alt="Try out the interactive WHMSonic license demo" /></a></div>-->
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
                        <td class="lc-feature-leftf" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon2.gif" width="72" height="71" alt="<?=_('WHMSonic license supports multiple audio players');?>" />
                      <h2><?=_('Audio Player Support');?></h2>
                      <p><?=_('Ensuring that everyone can listen to your audio stream is important; this is why WHMSonic has built its software to support a wide variety of audio players that ensures everyone can enjoy the same high-quality audio experience.');?></p></td>
                        <td class="lc-feature-rightf" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon6.gif" width="72" height="71" alt="<?=_('Get more felixable with WHMSonic license resource controls');?>" />
                      <h2><?=_('Resource Controls');?></h2>
                      <p><?=_('Real-time resource controls are imperative when it comes to full management over your new audio service. This is why WHMSonic has inbuilt bitrate, and bandwidth controls which ensures that no one customer can utilize all the audio resources on the server.');?> </p></td>
                      </tr>
                  <tr>
                        <td class="lc-feature-spacer"><!-- --></td>
                        <td class="lc-feature-spacer"><!-- --></td>
                      </tr>
                  <tr>
                        <td class="lc-feature-left" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon3.gif" width="72" height="71" alt="<?=_('Want to get HD support? If so, give WHMSonic license a shot');?>" />
                      <h2><?=_('HD Audio Support');?></h2>
                      <p><?=_('As online radio-stations become more competitive, you want to ensure that you are staying ahead of the competition. When it comes to providing high quality streams WHMSonic license has you covered. WHMSonic advanced features and easy to use interface will make streaming high quality music via SHOUTcast easy while also being cost-effective.');?></p></td>
                        <td class="lc-feature-right" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon7.gif" width="72" height="71" alt="<?=_('Open up your own audio reseller streaming service with WHMSonic license and cPanel/WHM.');?>" />
                      <h2><?=_('Reseller Channel');?></h2>
                      <p><?=_('Layer your business by offering WHMSonic Shoutcast reseller packages, which will provide you with an additional revenue stream for your business. Have your finger on the pulse of your competition with a WHMSonic license and its ever expanding reseller controls.');?></p></td>
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
