<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
	<?php include_once("../_include/modules/pricing.php"); ?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>
<?=$additional_rvbuilder_title?>
</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="<?=$additional_rvbuilder_keywords?>" />
    <meta name="description" content="<?=$additional_rvbuilder_meta_description?>" />
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
      <div class="header"><?php print ("$additional_rvsitebuilder"); ?></div>
    </div>
      </div>
  <div class="lc-content">
        <div class="lc-content-holder">
      <div class="lc-content-wrapper-inner">
            <table width="100%" cellpadding="0" cellspacing="0">
          <tr>
                <td class="lc-content-left" valign="top"><?php $left="additional"; $page="addi3"; include_once("../_include/modules/left.php"); ?></td>
                <td class="lc-content-right" valign="top">
                 <?php if (!empty($global_plan->lc_license_comment_message)): ?>
                			<div  id="message" class="lc-box-alert"><?php echo $global_plan->lc_license_comment_message; ?></div>
				<?php endif; ?><h1>RVSiteBuilder</h1>
               
              <div class="lc-box">
                    <table width="100%" cellpadding="0" cellspacing="0">
                  <tr>
                        <td class="lc-service-info" valign="top"><p><?=_('Having 851+ templates RVSiteBuilder is one of the most affordable web site building applications currently offered on the market. Save yourself both time and money with RVSiteBuilder license, by selecting a partner that has an unlimited licensing model at a cost efficient price.');?></p>
                      <ul class="lc-list-check1">
                            <li><?=_('Multi-lingual support');?></li>
                            <li><?=_('Customizable Template');?></li>
                        <!--<li><?=_('5 Step Site Wizard');?></li>-->
                            <li><?=_('Full cPanel/WHM Intergration');?></li>
                            <li><?=_('Advanced WYSIWYG editor');?></li>
                          </ul>
                      <img src="<?=$img_dir?>/service-logo-rvsitebuilder.gif" alt="<?=_('RVSiteBuilder license Logo');?>" /></td>
                        <td valign="top"><div id="screen1" class="lc-service-screen"><img src="<?=$img_dir?>/rvsitebuilder.jpg" width="320" height="223" alt="<?=_('RVSiteBuilder license screenshot');?>" /></div>
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
                                    <?=order_link_button(_("Get your RVSiteBuilder license"));?>
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
                      <td><h2><?=_('Take the DIY approach to your web site needs...');?></h2></td>
                      <td>
                      <div class="lc-float-right"><a class="youtube" href="<?php print ("$additional_rvbuilder_video"); ?>" title="<?php print ("$additional_rvbuilder_vide_title"); ?>"><img src="<?=$img_dir?>/buttons/view-in-action-<?=getActualPage()?>.png" width="127" height="29" alt="<?=_('RVSiteBuilder - Increase your revenue stream and retain customers...');?>" /></a></div>
                      <!--<div class="lc-float-right" style="padding-right:7px"><a href="<?php print("$additional_rvbuilder_demo"); ?>" target="_blank" title="RVSiteBuilder Demo"><img src="<?=$img_dir?>/buttons/view-demo.png" width="110" height="29" alt="Give RVSiteBuilder license a run for its money" /></a></div>-->
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
                        <td class="lc-feature-leftf" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon4.gif" width="72" height="71" alt="<?=_('Make custom templates with the RVSiteBuilder license');?>" />
                      <h2><?=_('Customize Templates');?></h2>
                      <p><?=_('RVSiteBuilder license makes customizing any template a breeze.  Using the intuitive WYSIWYG editor you can easily adjust anything on the page to make it fit your requirements. Additionally RVSiteBuilder has a wide browser support ensures that you can adjust your site from anywhere in the world.');?></p></td>
                        <td class="lc-feature-rightf" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon6.gif" width="72" height="71" alt="<?=_('The RVSiteBuilder license comes in one format and thats unlimited');?>" />
                      <h2><?=_('Unlimited Users');?></h2>
                      <p><?=_('Being the leader in Site Builder applications has its advantages. One of those advantages comes in the form of RVSiteBuilder licensing. While most sitebuilders charge on a per user basis, RVSiteBuilder license is unlimited so there are no hidden costs that you would incur.');?></p></td>
                      </tr>
                  <tr>
                        <td class="lc-feature-spacer"><!-- --></td>
                        <td class="lc-feature-spacer"><!-- --></td>
                      </tr>
                  <tr>
                        <td class="lc-feature-left" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon9.gif" width="72" height="71" alt="<?=_('Easily intergrate your RVSiteBuilder license with cPanel');?>" />
                      <h2><?=_('cPanel Integrated');?></h2>
                      <p><?=_('Control every aspect of the RVSiteBuilder for your existing web hosting package from the easy to use fully integrated RVSkin Feature Manager. Additionally, installation of RVSiteBuilder is quick and extremely straight forward. You can be up and running in minutes, not hours or days.');?></p></td>
                        <td class="lc-feature-right" valign="top"><img class="lc-float-right" src="<?=$img_dir?>/feature-icon2.gif" width="72" height="71" alt="<?=_('Perform automatic backups with your RVSiteBuilder licens');?>e" />
                      <h2><?=_('Automatic Backups');?></h2>
                      <p><?=_('RVSiteBuilder has a streamlined backup process, which makes an account snapshot daily. This way, if you\'d like to restore to a previous point in time, you can easily do this by selecting the date you wish to restore to and clicking on restore.');?></p></td>
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
