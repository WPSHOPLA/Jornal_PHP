<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
	<?php include_once("../_include/modules/pricing.php"); ?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>
<?=$additional_magicspam_title?>
</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="<?=$additional_magicspam_keywords?>" />
    <meta name="description" content="<?=$additional_magicspam_meta_description?>" />
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
      <div class="header">
MagicSpam is an anti-spam product designed for specific email servers to target spam and junk mail, and remove it before it gets in your inbox.
          
          </div>
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
                <h1>MagicSpam</h1>
                
              <div class="lc-box">
                    <table width="100%" cellpadding="0" cellspacing="0">
                  <tr>
                        <td class="lc-service-info" valign="top"><p><?=_('Magic Spam is installed with cpanel, plesk or on a standalone mail server to actually be "part" of the email server, so spam is identified at the edge, during the SMTP handshake phase. Blocking these bad sources of email, immediately creates a huge savings in bandwidth, cpu resources, and ram.  You also reduce "backscatter" problems created when checking for spam after the message has been accepted. <br /> <p><a href="http://www.licensecube.com/additional-licenses/MagicSpamFeatures.pdf" target="_blank">Features Comparison: Basic Edition vs Pro Edition</a></p>');?> </p>
<!--
                      <ul class="lc-list-check1">
                            <li><?=_('LIST');?></li>
                            <li><?=_('LIST');?></li>
                            <li><?=_('LIST');?></li>
                            <li><?=_('LIST');?></li>
                          </ul>
-->
<!--                       <img src="<?=$img_dir?>/service-logo-kernelcare.gif" alt="<?=_('ALT');?>" /></td> -->
                        <td valign="top"><div id="screen1" class="lc-service-screen"><img src="<?=$img_dir?>/magicspam.png" width="320" height="223" alt="<?=_('ALT');?>" /></div>
                      <div class="lc-service-order">
                            <table width="100%" cellpadding="0" cellspacing="0">
                          <tr>
                                <td valign="top"><?php if (empty($_SERVER['QUERY_STRING'])) { ?>
                              <div class="lc-service-price1-info"><?=_('Starting at');?></div>
                              <div class="lc-service-price1">$11.49<?php /* $global_plan->price */ ?><?=_('/mo');?></div>
                              <?php } else if (array_key_exists('vps', $_REQUEST)) { ?>
                              <div class="lc-service-price1">$<?=$global_plan->price?><?=_('/mo');?></div>
                              <div class="lc-service-price1-info"><?=_('(VPS license)');?></div>
                              <?php } else if (array_key_exists(_('dedicated'), $_REQUEST)) { ?>
                              <div class="lc-service-price1">$<?=$global_plan->price?><?=_('/mo');?></div>
                              <div class="lc-service-price1-info"><?=_('(Dedicated license)');?></div>
                              <?php } ?></td>
                                <td valign="top"><div class="lc-float-right">
                                   <!-- <?=order_link_button();?>-->
                                   <?=order_link_button(_("Get your copy of the MagicSpam License"));?>
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
                      <td><h2><?=_('Let MagicSpam show you the real difference...');?></h2></td>
                      <td>
                            <div class="lc-float-right"><a class="youtube" href="https://www.youtube.com/watch?v=UZ5k-PPxq5U"><img src="http://cdn.licensecube.com/_include/gui/buttons/view-in-action-en.png" width="127" height="29" alt="<?=_('Checkout the MagicSpam Interactive Video');?>" /></a></div> 
								<div class="lc-clear"><!-- --></div>
							</td>
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
                      <h2><?=_('Serverwide Protection');?></h2>
                      <p><?=_('Protects unlimited email addresses on the server.  Pro version allows resellers to upsell to individual end users.');?> </p></td>
                        <td class="lc-feature-rightf" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon4.gif" width="72" height="71" alt="" />
                      <h2><?=_('Instant Updates');?></h2>
                      <p><?=_('"Zero Day" prevention against new attackers and attacks, whether they be Spam or Dictionary Attacks, no matter what form they take, in images, videos, attachments, or even encrypted messages.');?></p></td>
                      </tr>
                  <tr>
                        <td class="lc-feature-spacer"><!-- --></td>
                        <td class="lc-feature-spacer"><!-- --></td>
                      </tr>
                  <tr>
                        <td class="lc-feature-left" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon5.gif" width="72" height="71" alt="" />
                      <h2><?=_('Simple for Everyone');?></h2>
                      <p><?=_('Full GUI (Graphical User Interfaces), statistics, graphs, full logging, custom controls, blacklists, exemptions and other tools');?></p></td>
                        <td class="lc-feature-right" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon2.gif" width="72" height="71" alt="" />
                      <h2><?=_('Widely Compatible');?></h2>
                      <p><?=_('Compatible with Odin Plesk, cPanel, MailEnable, Qmail, Postfix, Exim, Sendmail, and Zimbra');?></p></td>
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
