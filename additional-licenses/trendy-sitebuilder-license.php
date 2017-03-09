<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
	<?php include_once("../_include/modules/pricing.php"); ?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>
<?=$additional_trendy_sitebuilder_title?>
</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="<?=$additional_trendy_sitebuilder_keywords?>" />
    <meta name="description" content="<?=$additional_trendy_sitebuilder_meta_description?>" />
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
      <div class="header"><?php print ("$additional_trendy_sitebuilder"); ?></div>
    </div>
      </div>
  <div class="lc-content">
        <div class="lc-content-holder">
      <div class="lc-content-wrapper-inner">
            <table width="100%" cellpadding="0" cellspacing="0">
          <tr>
                <td class="lc-content-left" valign="top"><?php $left="additional"; $page="addi9"; include_once("../_include/modules/left.php"); ?></td>
                <td class="lc-content-right" valign="top">
                <?php if (!empty($global_plan->lc_license_comment_message)): ?>
                			<div  id="message" class="lc-box-alert"><?php echo $global_plan->lc_license_comment_message; ?></div>
				<?php endif; ?>
                <h1>Trendy SiteBuilder</h1>

              <div class="lc-box">
                    <table width="100%" cellpadding="0" cellspacing="0">
                  <tr>
                        <td class="lc-service-info" valign="top"><p><?=_('As the Internet continues to mature, so does the appetite of many website visitors and followers. Using Trendy SiteBuilder you can now integrate your newly created websites with social media giants, such as Facebook, Twitter, Google Plus, LinkedIn and many others. Oh, don\'t forget, you can even make your website mobile friendly too!');?> </p>
                      <ul class="lc-list-check1">
                            <li><?=_('Smartphone Friendly');?></li>
                            <li><?=_('YouTube Integrated');?></li>
                            <li><?=_('Online Store Builder');?></li>
                            <li><?=_('Social Media Integrated');?></li>
                          </ul>
                      <img src="<?=$img_dir?>/service-logo-trendy.gif" alt="<?=_('Trendy SiteBuilder license logo');?>" /></td>
                        <td valign="top"><div id="screen1" class="lc-service-screen"><img src="<?=$img_dir?>/trendy.jpg" width="320" height="223" alt="<?=_('Trendy SiteBuilder license screenshot');?>" /></div>
                      <div class="lc-service-order">
                            <table width="100%" cellpadding="0" cellspacing="0">
                          <tr>
                                <td valign="top">
                                    <?php
                                        $totalTPrice = $global_plan->price;
                                        if (isset($global_plan->option_groups['Trendy SiteBuilder Variants']->options['1291'])) {
                                            $totalTPrice += $global_plan->option_groups['Trendy SiteBuilder Variants']->options['1291']->price;
                                        }
                                    ?>
                                    <div class="lc-service-price1-info"><?=_('Starting at');?></div>
                                    <div class="lc-service-price1">$<?=$totalTPrice?><?=_('/mo');?></div>
                                </td>
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
                      <td><h2><?=_('Trendy SiteBuilder delivers more with less...');?></h2></td>
                      <td>
                      <!--<div class="lc-float-right" style="padding-right:7px"><a href="<?php print("$additional_ksplice_demo"); ?>" target="_blank" title="Trendy SiteBuilder Demo"><img src="<?=$img_dir?>/buttons/view-demo.png" width="110" height="29" alt="Try out the interactive demo of the ksplice license" /></a></div>-->
                      <div class="lc-float-right"><a class="youtube" href="<?php print("$additional_trendy_video"); ?>" title="<?php print("$additional_trendy_video_title"); ?>"><img src="<?=$img_dir?>/buttons/view-in-action-<?=getActualPage()?>.png" width="127" height="29" alt="<?=_('$additional_trendy_video_title');?>" /></a></div>
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
                        <td class="lc-feature-leftf" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon6.gif" width="72" height="71" alt="" />
                      <h2><?=_('Automated Marketing');?></h2>
                      <p><?=_('When deploying your website with Trendy SiteBuilder, there are several perks you receive by default. One such perk is the ability to fully integrate your website with Social Media outlets, such as MySpace, Twitter, Facebook and others.');?> </p></td>
                        <td class="lc-feature-rightf" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon4.gif" width="72" height="71" alt="" />
                      <h2><?=_('Mobile SiteBuilder ');?></h2>
                      <p><?=_('Making your website compatible with smartphone devices isn\'t a requirement with Trendy SiteBuilder, as all websites created by Trendy SiteBuilder are fully optimized for both regular internet browsers and handheld devices.');?></p></td>
                      </tr>
                  <tr>
                        <td class="lc-feature-spacer"><!-- --></td>
                        <td class="lc-feature-spacer"><!-- --></td>
                      </tr>
                  <tr>
                        <td class="lc-feature-left" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon5.gif" width="72" height="71" alt="" />
                      <h2><?=_('Live Sales People');?></h2>
                      <p><?=_('Ever wanted to enrich your visitors website experience by explaining your product or service in greater detail? Well, now it\'s possible. Within just a few clicks within Trendy SiteBuilder you can easily enable live sales spoke persons.');?></p></td>
                        <td class="lc-feature-right" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon2.gif" width="72" height="71" alt="" />
                      <h2><?=_('Fan Pages');?></h2>
                      <p><?=_('Promote your website using new social media tools such as Facebook fan pages. Choose from over forty-five categories, and have your Facebook fan page up and running within ten minutes or less!');?></p></td>
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
