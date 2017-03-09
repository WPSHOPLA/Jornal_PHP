<?php include_once("_include/modules/config.php"); ?>

<?php include_once("_include/modules/general.php"); ?>

<?php //include_once("_include/modules/ubersmith.php"); ?>

	<?php include_once("_include/modules/pricing.php"); ?>

	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

	<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <title><?=$main_index_page?></title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="keywords" content="<?=$main_index_page_keywords?>" />

    <meta name="description" content="<?=$main_index_page_meta_description?>" />

    <meta name="author" content="<?=$author?>" />

    <meta name="copyright" content="<?=$copyright?>" />

    <link href="<?=$img_dir?>/favicon.ico" rel="shortcut icon" />

    <?php $css=""; include_once("_include/modules/css.php"); ?>

    <?php $java=""; include_once("_include/modules/java.php"); ?>

    <script src="<?=$js_dir?>/_include/js/cycle.js" type="text/javascript"></script>

    <script type="text/javascript">

    	$(function() {

    	    $('#lc-slideshow').cycle({

    	        fx:     'fade',

    	        speed:  'slow',

    	        timeout: 7000,

    	        pager:  '#lc-slideshownav',

    	        pagerAnchorBuilder: function(idx, slide) {

    	            // return sel string for existing anchor

    	            return '#lc-slideshownav li:eq(' + (idx) + ') a';

    	        }

    	    });

    	});

	</script>

<!--    <style>

	.lc-home-box-one h2{margin:0px;padding-bottom:6px;font-family:Arial, Helvetica, sans-serif;font-weight:bold;font-size:23px;line-height:23px;color:#32344d;padding-left:10px; float:left; background-image:none !important}

	.lc-home-box-one #icon{background-image:url(http://cdn.licensecube.com/_include/gui/icon-home.gif) !important;background-repeat:no-repeat;background-position:0 4px; float:left; width:47px; height:50px;}

	

	.lc-home-box-two h2{margin:0px;padding-bottom:6px;font-family:Arial, Helvetica, sans-serif;font-weight:bold;font-size:23px;line-height:23px;color:#32344d;padding-left:10px; float:left; background-image:none !important}

	.lc-home-box-two #icon{background-image:url(http://cdn.licensecube.com/_include/gui/icon-home.gif) !important;background-repeat:no-repeat;background-position:-46px 4px; float:left; width:47px; height:50px;}

	

	.lc-home-box-three h2{margin:0px;padding-bottom:6px;font-family:Arial, Helvetica, sans-serif;font-weight:bold;font-size:23px;line-height:23px;color:#32344d;padding-left:10px; float:left; background-image:none !important}

	.lc-home-box-three #icon{background-image:url(http://cdn.licensecube.com/_include/gui/icon-home.gif) !important;background-repeat:no-repeat;background-position:-94px 4px; float:left; width:47px; height:50px;}

	

	.lc-home-box-four h2{margin:0px;padding-bottom:6px;font-family:Arial, Helvetica, sans-serif;font-weight:bold;font-size:23px;line-height:23px;color:#32344d; background-image:none !important}

	.lc-home-box-four #icon{background-image:url(http://cdn.licensecube.com/_include/gui/icon-home.gif) !important;background-repeat:no-repeat;background-position:-143px 4px; float:left; width:47px; height:50px;}

		

	.social-icons{background-image:url(http://cdn.licensecube.com/_include/gui/social-icons.png) ;background-repeat:no-repeat;}

	.social-icon-share{ width:30px; height:29px; background-position:0px 0px; }	

	.social-icon-face{ width:30px; height:29px; background-position:-29px 0px; }	

	.social-icon-twitter{ width:30px; height:29px; background-position:-58px 0px; }	

	.social-icon-youtube{ width:30px; height:29px; background-position:-87px 0px; }	

	.social-icon-rss{ width:30px; height:29px; background-position:-116px 0px; }	

	

	.lc-slide-one{width:964px;height:328px;margin-left:auto;margin-right:auto;text-align:left; background-image:url("http://cdn.licensecube.com/_include/gui/header/bg-slides.jpg"); background-repeat:no-repeat; background-position:top left;}

	.lc-slide-two{width:964px;height:328px;margin-left:auto;margin-right:auto;text-align:left; background-image:url("http://cdn.licensecube.com/_include/gui/header/bg-slides.jpg"); background-repeat:no-repeat; background-position:0px -328px;}

	.lc-slide-three{width:964px;height:328px;margin-left:auto;margin-right:auto;text-align:left; background-image:url("http://cdn.licensecube.com/_include/gui/header/bg-slides.jpg"); background-repeat:no-repeat; background-position:0px -656px;}

	.lc-slide-four{width:964px;height:328px;margin-left:auto;margin-right:auto;text-align:left; background-image:url("http://cdn.licensecube.com/_include/gui/header/bg-slides.jpg"); background-repeat:no-repeat; background-position:0px -984px;}-->


	<?php if(getActualPage()=='es'):?>

    	<style type="text/css">

		#lc-slideshownav a{padding:15px 15px 0;}

		#lc-slideshownav a.activeSlide{padding:15px 15px 0;}

        </style>

	<?php endif;?>

		
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<link href="http://www.licensecube.com/responsive.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="wrapper">

  <?php $menu=""; include_once("_include/modules/header.php"); ?>

  <div class="lc-header" style="background-image: url('<?php echo $img_dir?>/header/bg-tabs1.gif'); background-position:center bottom">

        <div id="lc-slideshownavh">

      

      <div >

          <div class="homesl1">

          <ul id="lc-slideshownav" >              

              <li class="first" style=""><a href="<?=$site_dir?><?= _('/control-panels/');?>"><?= _('Control Your Site');?></a></li>

              <li><a href="<?=$site_dir?><?= _('/billing-systems/');?>"><?= _('Automate Billing');?></a></li>

              <li><a href="<?=$site_dir?><?= _('/additional-licenses/');?>"><?= _('Build Sites Quickly');?></a></li>

              <li><a href="<?=$site_dir?><?= _('/additional-licenses/');?>"><?= _('1-Click Installs');?></a></li>

              <li class="mnone" style="width:100%; background-image: url('<?php echo $img_dir?>/header/bg-tabs1.gif'); background-position:center bottom; height: 50px;   <?php if(getActualPage()=='es') echo "width: 242px;"; else echo "width: 244px;"; ?>">&nbsp;    

              </li>

            </ul>

           

            

          </div>

          </div>

      

      

    </div>

        <div id="lc-slideshow">

      <div class="lc-slide1" style="display:; background-position: left -50px;">

            <div class="lc-slide-one" >

          <table width="100%" cellpadding="0" cellspacing="0">

                <tr>

              <td class="lc-slide-left"><div class="mh1"> <h1 style="line-height:0px; padding-bottom:0px;"><? 

			   printf(_('Buy your cPanel,%s Plesk or Virtuozzo %s License Today!'), '<br />', '<br />');

			 // printf(_('Select your %s Control Panel %s License Today!'), '<br />', '<br />');?></h1></div>

                    <ul >

                                   

                  <li><?= _('Start selling your hosting services today!');?></li>

                  <li><?= _('Easily access your control worldwide');?></li>

                  <li><?= _('Fully manage DNS, Email, and much more');?></li>

                  <li><?= _('Easily intergrate with any of the major billing systems');?></li>

                </ul></td>

              <td class="lc-slide-right"><div class="lc-slide-tag" style="padding-top:92px">

                  <h2><?= _('Starting from');?></h2>

                  <h2 class="lc-price-big">$

                    <?php include_once("_include/modules/price-control-panel.php");  ?>

                  </h2>

                  <h2 style="padding-bottom:8px"><?= _('per year!');?></h2>

                </div>

                    <div class="lc-slide-right-button"><a href="<?=$site_dir?><?= _('/control-panels/');?>"><img src="<?=$img_dir?>/buttons/learn-more-now-<?=getActualPage()?>.png" alt="<?= _('Obtain a Control Panel license today!');?>" /></a></div>

                    <div class="lc-clear">

                  <!-- -->

                </div></td>

            </tr>

              </table>

        </div>

          </div>

      <div class="lc-slide2" style="display:none; background-position: left -50px;">

            <div class="lc-slide-two">

          <table width="100%" cellpadding="0" cellspacing="0">

                <tr>

              <td class="lc-slide-left"><div class="mh1">

                  <? printf(_('Get a new BILLING %s SYSTEM that will help %s GROW YOUR BUSINESS!'), '<br />', '<br />');?></div>

                    <ul >

                  <li><?= _('Start accepting more payment methods');?></li>

                  <li><?= _('Automate your daily account management');?></li>

                  <li><?= _('Customize the look &amp; feel to fit your design');?></li>

                  <li><?= _('Expand functionality by adding custom modules');?></li>

                </ul></td>

              <td class="lc-slide-right"><div class="lc-slide-tag">

                  <h2>

                    <? printf(_('Make the switch to a NEW %s BILLING SYSTEM. You\'ll be %s amazed  how much you save!'), '<br />', '<br />');?>

                    </h2>

                </div>

                    <div class="lc-slide-right-button"><a href="<?=$site_dir?><?= _('/billing-systems/');?>"><img src="<?=$img_dir?>/buttons/learn-more-now-<?=getActualPage()?>.png" alt="<?= _('Get a new Billing System license');?>" /></a></div>

                    <div class="lc-clear">

                  <!-- -->

                </div></td>

            </tr>

              </table>

        </div>

          </div>

      <div class="lc-slide3" style="display:none; background-position: left -50px;">

            <div class="lc-slide-three">

          <table width="100%" cellpadding="0" cellspacing="0">

                <tr>

              <td class="lc-slide-left"><div class="mh1">

                  <? printf(_('Build STUNNING %s WEBSITES, easily. %s Obtain 800+ designs.'), '<br />', '<br />');?>

                  </div>

                    <ul >

                  <li><?= _('Start supporting more languages');?></li>

                  <li><?= _('Powerful Design tools such as a WYSIWYG editor');?></li>

                  <li><?= _('Easy intergration into most control panels');?></li>

                  <li><?= _('5-Step Website Design Wizard');?></li>

                </ul></td>

              <td class="lc-slide-right"><div class="lc-slide-tag">

                  <h2>

                    <? printf(_('We have a wide selection %s of  sitebuilders see which %s one will meet your needs!'), '<br />', '<br />');?>

                    </h2>

                </div>

                    <div class="lc-slide-right-button"><a href="<?=$site_dir?><?= _('/additional-licenses/');?>"><img src="<?=$img_dir?>/buttons/learn-more-now-<?=getActualPage()?>.png" alt="<?= _('Purchase extra licenses today!');?>" /></a></div>

                    <div class="lc-clear">

                  <!-- -->

                </div></td>

            </tr>

              </table>

        </div>

          </div>

      <div class="lc-slide4" style="display:none; background-position: left -50px;">

            <div class="lc-slide-four">

          <table width="100%" cellpadding="0" cellspacing="0">

                <tr>

              <td class="lc-slide-left"><div class="mh1">

                  <? printf(_('Install 200+ Scripts %s with a single-click. %s How does that feel?'), '<br />', '<br />');?>

                  </div>

                    <ul >

                  <li><?= _('Insall a script with a single-click');?></li>

                  <li><?= _('Easily Intergratable with cPanel/WHM, and others');?></li>

                  <li><?= _('Support 4+ Languages with a single-click');?></li>

                  <li><?= _('Fast Updates ensure your never a version behind');?></li>

                </ul></td>

              <td class="lc-slide-right"><div class="lc-slide-tag">

                  <h2>

                    <? printf(_('Give each of the %s auto-installers a whirl, %s and see which one fits!'), '<br />', '<br />');?>

                    </h2>

                </div>

                    <div class="lc-slide-right-button"><a href="<?=$site_dir?><?= _('/control-panels/');?>"><img src="<?=$img_dir?>/buttons/learn-more-now-<?=getActualPage()?>.png" alt="<?= _('Purchase extra licenses today!');?>" /></a></div>

                    <div class="lc-clear">

                  <!-- -->

                </div></td>

            </tr>

              </table>

        </div>

          </div>

    </div>

      </div>

  <div class="lc-content">

        <div class="lc-content-holder">

      <div class="lc-content-wrapper" style="padding-bottom:295px;">

            <table width="100%" cellpadding="0" cellspacing="0">

          <tr>

                <td valign="top" class="w625"><table width="100%" cellpadding="0" cellspacing="0">

                    <tr>

                    <td valign="top" class="lc-home-box-one">

                    <div style="overflow:hidden"><div class="icon"></div>

                    <h2><? printf(_('Instant License %s Activation'), '<br />');?></h2></div>

                        <p><?= _('When it comes to activating cPanel, Plesk, DirectAdmin, InterWorx, WHMCS, ClientExec, SolusVM, Virtuozzo or other license, we don\'t want to keep you waiting. This is why all of the software licenses that we currently offer are activated automatically, unless a license requires additional information to be providing by the user.');?></p></td>

                    <td valign="top" class="lc-home-box-two"><div style="overflow:hidden"><div class="icon"></div>

                         <h2><? printf(_('Bulk Licensing %s Discounts'), '<br />');?></h2></div>

                        <p><?= _('Looking for a reliable yet affordable WHMCS, cPanel, Plesk, Clientexec license provider? While all of our license prices are extremely competitive, we are always willing to go the extra mile and provide you the best pricing on bulk licensing requirements. For further information,');?> <a href="<?=$site_dir?><?= _('/contact/');?>"><?= _('please contact us.');?></a></p></td>

                  </tr>

                    <tr>

                    <td valign="top" class="lc-home-box-spacer"><!-- --></td>

                    <td valign="top" class="lc-home-box-spacer"><!-- --></td>

                  </tr>

                    <tr>

                    <td valign="top" class="lc-home-box-three"><div style="overflow:hidden"><div class="icon"></div><h2>

                        <? printf(_('Price Match %s Guarantee'), '<br />');?></h2></div>

                        <p><?= _('We pride ourselves in being a leader in cPanel, Plesk, DirectAdmin and InterWorx  web hosting licenses. To show the we stand true behind our promise of having the best pricing and support, if you find a provider that has been in business for six months or more with lower pricing, we\'ll match their pricing and give you a free month.');?></p></td>

                    <td valign="top" class="lc-home-box-four"><div style="overflow:hidden"><div class="icon"></div><h2><?= _('Free Software Installation');?></h2></div>

                        <p><?= _('Want us to install your cPanel, Plesk, DirectAdmin, SolusVM, WHMCS, Clientexec or other software for you? Simply contact our support and they will be glad to install the software you have recently purchased. If you are unfamiliar with the software, we will be glad to show you the basics of getting it up and running.');?></p></td>

                  </tr>

                    <tr>

                    <td valign="top" class="lc-home-box-spacer1"><!-- --></td>

                    <td valign="top" class="lc-home-box-spacer1"><!-- --></td>

                  </tr>

                  </table></td>

                <td valign="top"><div class="lc-home-side-box">

                    <div class="lc-float-left">

                    <h2><? printf(_('30 Day %s Money Back'), '<br />');?></h2>

                    <h2 class="lc-orange"><?= _('Guarantee');?></h2>

                  </div>

                    <div class="lc-float-right"><img src="<?=$img_dir?>/icon-money-back-<?=getActualPage()?>.gif" width="81" height="93" alt="<?= _('30 Day Money Back Gurantee');?>" /></div>

                    <div class="lc-clear">

                    <!-- -->

                  </div>

                    <p><?= _('We value our customers, and for that very reason we provide all of our customers with a 30-day money back guarantee. No exceptions!');?></p>

                  </div>

              <div class="lc-home-side-box1">

                    

                    <h2><? printf(_("Let's learn together... %s What are your needs?"), '<br />');?>

                   </h2>

                    <p><?= _('Big or small, we want to help you when it comes to your cPanel, Plesk, DirectAdmin, SolusVM, WHMCS, Clientexec or other software license requirements. Tell us what you need, so we can make it work for you.');?> </p>

                    <ul class="lc-list1">

                  <li><a href="<?=$site_dir?><?= _('/control-panels/');?>"><?= _('Control Panel Licenses')?></a></li>

                 

                  <li><a href="<?=$site_dir?><?= _('/billing-systems/');?>"><?= _('Billing System Licenses')?></a></li>

                  <li><a href="<?=$site_dir?><?= _('/additional-licenses/');?>"><?= _('Additional Licenses')?></a></li>

                </ul>

                  </div></td>

              </tr>

        </table>

            <div class="lc-logos"><img src="<?=$img_dir?>/logos.gif" width="100%" alt="<?= _('LicenseCube logo')?>" /></div>

          </div>

    </div>

      </div>

  <?php include_once("_include/modules/footer.php"); ?>

  <?php include_once("_include/modules/additional.php"); ?>

</div>


<style>
@media only screen and (max-width: 682px){
#lc-slideshownavh {margin-top:750px;}
#lc-slideshownav li {float:none;}
#lc-slideshow {height:900px;}
.lc-slide-one, .lc-slide-two, .lc-slide-three, .lc-slide-four {width:100%; height:900px; background-position:0px;}
.mnone {display:none;}
}

@media only screen and (min-width: 682px) and (max-width: 982px) {
#lc-slideshownavh {margin-top:400px;}
#lc-slideshownav li {float:left;}
#lc-slideshow {height:450px;}
.lc-slide-one, .lc-slide-two, .lc-slide-three, .lc-slide-four {width:100%; height:450px; background-position:0px;}
.mnone {display:none;}
}

</style>


    </body>

</html>

