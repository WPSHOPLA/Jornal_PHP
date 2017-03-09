<?php include_once("../_include/modules/config.php"); ?>

<?php include_once("../_include/modules/general.php"); ?>

<?php include_once("../_include/modules/overlay-boxes.php"); ?>

<?php include_once("../_include/modules/ubersmith.php"); ?>

	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

	<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <title>

<?=$additional_main_title?>

</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="keywords" content="<?=$additional_main_keywords?>" />

    <meta name="description" content="<?=$additional_main_meta_description?>" />

    <meta name="author" content="<?=$author?>" />

    <meta name="copyright" content="<?=$copyright?>" />

    <link href="<?=$img_dir?>/favicon.ico" rel="shortcut icon" />

    <?php $css=""; $css_footer_push=1; include_once("../_include/modules/css.php"); ?>

    <?php $java=""; include_once("../_include/modules/java.php"); ?>

    <script type="text/javascript">

		$(function() {

          	$('#license-carousela').jcarousel({ scroll: 1 }); // late init

			 <?

				//$('#ded').hide();

				 /* jcarousel expects the items to be visible.  So, in #ded, we added style="position: absolute; left: -999em; display:"

				See http://stackoverflow.com/questions/2112474/hide-a-jcarousel-when-page-loads

				*/

			 ?>

		});



		<?php /*

			See http://benalman.com/code/projects/jquery-bbq/examples/fragment-basic/#kielbasa.html

		*/ ?>

		function showVPS() {

			$("#vps_carousel").fadeIn();

			$('#vps_carousel').css('position', 'static');

			$('#ded_carousel').css('position', 'absolute');

			$('#ded_carousel').css('left', '-999em');

			$("#triggerded").removeClass('service-tab-on');

			$("#triggerded").addClass('service-tab-off');

			$('#triggervps').removeClass('service-tab-off');

			$('#triggervps').addClass('service-tab-on');

		        $('li.additional-only-dedicated').fadeOut();

		        $('li[class$="addit"] > a').each(function (i, a) {

				var url = $(a).attr('href');

				//url = $.param.querystring(url, 'vps', 2);

//				var x = /^(.*)[?\/](dedicated|vps)/.exec(url);

//				if (x == null)

//					url = url + '/vps';

//				else

//					url = x[1] + '/vps';

				//url = $.param.querystring(url, 'vps', 2);

				$(a).attr('href', url);

		        });

		}



		function showDedicated() {

			$("#ded_carousel").fadeIn();

			$("#ded_carousel").css('position', 'static');

			$('#vps_carousel').css('position', 'absolute');

			$('#vps_carousel').css('left', '-999em');

			$("#triggervps").removeClass('service-tab-on');

			$("#triggervps").addClass('service-tab-off');

			$('#triggerded').removeClass('service-tab-off');

			$('#triggerded').addClass('service-tab-on');

		        $('li.additional-only-dedicated').fadeIn();

		        $('li[class$="addit"] > a').each(function (i, a) {

	 			var url = $(a).attr('href');

				//url = $.param.querystring(url, 'dedicated', 2);

//				var x = /^(.*)[?\/](dedicated|vps)/.exec(url);

//				if (x == null)

//					url = url + '/dedicated';

//				else

//					url = x[1] + '/dedicated';

				url = $.param.querystring(url, '<?=_('dedicated')?>', 2);

				$(a).attr('href', url);

		        });

		}



		$(function() {

			$("#triggervps").click(function(event) {

				event.preventDefault();

				window.location = './#vps'; //showVPS();

			});

		});



		$(function() {

			$("#triggerded").click(function(event) {

				event.preventDefault();

				window.location = './#<?=_('dedicated')?>'; //showDedicated();

			});

		});



		$(window).bind('hashchange', function (e) {

			//var url = $.param.fragment();

			var url = window.location.hash; //e.fragment;



			if (url == '#vps') {

				showVPS();

			} else if (url == '#<?=_('dedicated')?>') {

				showDedicated();

			} else {

				showVPS();

			}

		});



		$(document).ready(function() {

			$(window).trigger('hashchange');

			$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:385});

			$(".table").colorbox({iframe:true, innerWidth:740, innerHeight:255});

		});

	</script>

    </head>

<body>

    <div class="wrapper">

  <?php $menu="additional"; include_once("../_include/modules/header.php"); ?>

  <div class="lc-header-inner">

        <div class="lc-header-inner-holder">

      <div class="header"><?php print("$additional_message"); ?></div>

    </div>

      </div>

  <div class="lc-content">

        <div class="lc-content-holder">

      <div class="lc-content-wrapper-inner">

            <table width="100%" cellpadding="0" cellspacing="0">

          <tr>

                <td class="lc-content-left" valign="top"><?php $left="additional"; $page=""; include_once("../_include/modules/left.php"); ?></td>

                <td class="lc-content-right" valign="top"><h1><?=_('Additional Licenses');?></h1>

              <p> <?=_('Please find below a wide selection of licenses that allow you to accomplish multiple tasks within your hosting environment ranging from streaming audio to building a site. All the providers below have been reviewed and tested to ensure quality. ');?></p>

              

              <div id="vps_carousel" style="display:">

                    <ul id="license-carousel" class="jcarousel-skin">

                  <? // paralels ?>

                  <?php



add_overlay_box(array('title' => 'WPB', 'info-url' => _('/additional-licenses/parallels-web-presence-builder-license.php'), 'code' => 'LIN76', 'period' => _('Monthly'), 'logo' => 'web-presence-builder.png', 'infodivid' => 'info1', 'bg-position' => '1', 'bg-image' => 'logo-additional-v4'));

add_overlay_box(array('title' => 'RVSkins', 'info-url' => _('/additional-licenses/rvskins-license.php?vps'), 'code' => 'LIN23', 'period' => _('Monthly'), 'logo' => 'logo-rvskins.gif', 'infodivid' => 'info2', 'bg-position' => '-138', 'bg-image' => 'logo-additional-v4'));

add_overlay_box(array('title' => 'RVSiteBuilder', 'info-url' => _('/additional-licenses/rvsitebuilder-license.php'), 'code' => 'LIN76', 'period' => _('Monthly'), 'logo' => 'logo-rvsitebuilder.gif', 'infodivid' => 'info3', 'bg-position' => '-267', 'bg-image' => 'logo-additional-v4'));

add_overlay_box(array('title' => 'WHMXtra', 'info-url' => _('/additional-licenses/whmxtra-license.php'), 'code' => 'LIN8', 'period' => _('Monthly'), 'logo' => 'logo-whmxtra.gif', 'infodivid' => 'info4', 'bg-position' => '-400', 'bg-image' => 'logo-additional-v4')); 

add_overlay_box(array('title' => 'Miva Merchant', 'info-url' => _('/additional-licenses/miva-merchant-license.php'), 'code' => 'LIN84', 'period' => _('Monthly'), 'logo' => 'logo-mivamerchant.gif', 'infodivid' => 'info5', 'bg-position' => '-539', 'bg-image' => 'logo-additional-v4'));

add_overlay_box(array('title' => 'WHMSonic', 'info-url' => _('/additional-licenses/whmsonic-license.php'), 'code' => 'LIN25', 'period' => _('Monthly'), 'logo' => 'logo-whm-sonic.gif', 'infodivid' => 'info6', 'bg-position' => '-671', 'bg-image' => 'logo-additional-v4'));

add_overlay_box(array('title' => 'CloudLinux', 'info-url' => _('/additional-licenses/cloudlinux-license.php'), 'code' => 'LIN86', 'period' => _('Monthly'), 'logo' => 'logo-cloudlinux.gif', 'infodivid' => 'info8', 'bg-position' => '-940', 'bg-image' => 'logo-additional-v4'));

add_overlay_box(array('title' => 'Trendy SiteBuilder', 'info-url' => _('/additional-licenses/trendy-sitebuilder-license.php'), 'code' => 'LIN90', 'period' => _('Monthly'), 'logo' => 'logo-whm-sonic.gif', 'infodivid' => 'info10', 'bg-position' => '-1056', 'bg-image' => 'logo-additional-v4'));

add_overlay_box(array('title' => 'LiteSpeed', 'info-url' => _('/additional-licenses/litespeed-license.php'), 'code' => 'LIN92', 'period' => _('Monthly'), 'logo' => 'logo-cloudlinux.gif', 'infodivid' => 'info9', 'bg-position' => '-1172', 'bg-image' => 'logo-additional-v4'));   

//add_overlay_box(array('title' => 'Zopim Live Chat', 'info-url' => _('/additional-licenses/zopim-license.php'), 'code' => 'LIN900', 'period' => _('Monthly'), 'logo' => 'logo-cloudlinux.gif', 'infodivid' => 'info11', 'bg-position' => '-1292', 'bg-image' => 'logo-additional-v4'));

show_overlay_boxes_2('a');     

$_boxes = array();



?>

                </ul>

                  </div>

              <!-- id="vps_carousel" -->

              <div id="ded_carousel" style="display:">

                    <ul id="license-carousela" class="jcarousel-skin">

                  <? // paralels ?>

                  <?php



add_overlay_box(array('title' => 'SiteBuilder', 'info-url' => _('/additional-licenses/parallels-web-presence-builder-license.php'), 'code' => 'LIN76', 'period' => _('Monthly'), 'logo' => 'web-presence-builder.png', 'infodivid' => 'info1', 'bg-position' => '1', 'bg-image' => 'logo-additional-v4'));

add_overlay_box(array('title' => 'RVSkins', 'info-url' => _('/additional-licenses/rvskins-license.php?dedicated'), 'code' => 'LIN24', 'period' => _('Monthly'), 'logo' => 'logo-rvskins.gif', 'infodivid' => 'info2', 'bg-position' => '-138', 'bg-image' => 'logo-additional-v4'));

add_overlay_box(array('title' => 'RVSiteBuilder', 'info-url' => _('/additional-licenses/rvsitebuilder-license.php?dedicated'), 'code' => 'LIN76', 'period' => _('Monthly'), 'logo' => 'logo-rvsitebuilder.gif', 'infodivid' => 'info3', 'bg-position' => '-267', 'bg-image' => 'logo-additional'));

add_overlay_box(array('title' => 'WHMXtra', 'info-url' => _('/additional-licenses/whmxtra-license.php?dedicated'), 'code' => 'LIN8', 'period' => _('Monthly'), 'logo' => 'logo-whmxtra.gif', 'infodivid' => 'info4', 'bg-position' => '-400', 'bg-image' => 'logo-additional'));

add_overlay_box(array('title' => 'Miva Merchant', 'info-url' => _('/additional-licenses/miva-merchant-license.php?dedicated'), 'code' => 'LIN84', 'period' => _('Monthly'), 'logo' => 'logo-mivamerchant.gif', 'infodivid' => 'info5', 'bg-position' => '-539', 'bg-image' => 'logo-additional'));

add_overlay_box(array('title' => 'WHMSonic', 'info-url' => _('/additional-licenses/whmsonic-license.php?dedicated'), 'code' => 'LIN27', 'period' => _('Monthly'), 'logo' => 'logo-whm-sonic.gif', 'infodivid' => 'info6', 'bg-position' => '-671', 'bg-image' => 'logo-additional'));

//add_overlay_box(array('title' => 'Ksplice Uptrack', 'info-url' => _('/additional-licenses/ksplice-license.php?dedicated'), 'code' => 'LIN85', 'period' => _('Monthly'), 'logo' => 'logo-ksplice.gif', 'infodivid' => 'info7', 'bg-position' => '-800', 'bg-image' => 'logo-additional'));

add_overlay_box(array('title' => 'CloudLinux', 'info-url' => _('/additional-licenses/cloudlinux-license.php?dedicated'), 'code' => 'LIN86', 'period' => _('Monthly'), 'logo' => 'logo-cloudlinux.gif', 'infodivid' => 'info8', 'bg-position' => '-940', 'bg-image' => 'logo-additional'));

show_overlay_boxes_2('b');

$_boxes = array();



?>

                </ul>

                  </div>

              <!-- id="vps_carousel" -->

              <div class="clear"></div>

              <div class="mb20">

                    <div id="info" class="lc-box" style="display:">

                  <h2><?=_('The choice is yours...');?></h2>

                  <p><?=_("At LicenseCube we believe the more choices you have, the more likely it is that you will find what you're looking for  With this in mind, we're glad to provide you with the LARGEST SELECTION of licenses currently available.");?></p>

                  <p><?=_("Not finding a license that fits your needs or requirements?  Give us a call at (855) 465-4236 and we'll be glad to find an application that suits your requirements.");?> </p>

                  <table width="100%" cellpadding="0" cellspacing="0">

                        <tr>

                      <td valign="top"><h2><?=_('Our promise to you...');?></h2>

                            <ul class="lc-list-check1">

                          <li><?=_('Fast License Activations');?></li>

                          <li><?=_('24x7 Technical Support');?></li>

                          <li><?=_('Detailed License Descriptions');?></li>

                          <li><?=_('Competitive Pricing');?></li>

                          <li><?=_('Excellent Support Resources');?></li>

                        </ul></td>

                      <td valign="top"><h2><?=_('Additional Guarantees');?></h2>

                            <ul class="lc-list-check1">

                          <li><?=_('Price Match Guarantee');?></li>

                          <li><?=_('Bulk Pricing Discounts');?></li>

                          <li><?=_('Free Installation Services');?></li>

                          <li><?=_('Access to our reseller API');?></li>

                        </ul></td>

                    </tr>

                      </table>

                </div>

                    <div id="info1" class="lc-box" style="display:none">

                  <h2>SiteBuilder</h2>

                  <p><?=_('Parallels Web Present Builder is an easy-to-use web building software application. Using the five-step website creation wizard is easy, it will guide you through the whole website creation process and even help you with integrating additional modules such as Image Gallery, Forum, and many other neat additional features.');?></p>

                  <p><?=_('If you are a service provider, you can use this software as an added value service for your customers. Differentiate your hosting plans by including a SiteBuilder that supports over ten different languages.');?></p>

                  

                  <table width="100%" cellpadding="0" cellspacing="0">

                        <tr>

                      <td valign="top"><h2><?=_('Advantages (Providers)');?></h2>

                            <ul class="lc-list-check1">

                          <li><?=_('Attract and Retain More Customers');?></li>

                          <li><?=_('Fast &amp; Easy Deployment');?></li>

                          <li><?=_('Brand to Fit Your Service Offering');?></li>

                          <li><?=_('Single sign on capability (Plesk Required)');?></li>

                          <li><?=_('Powerful Admin Control Panel');?></li>

                          <li><?=_('Cost Effective Pricing');?></li>

                          <li><?=_('Include Additional Components');?></li>

                        </ul></td>

                      <td valign="top"><h2><?=_('Advantages (End Users)');?></h2>

                            <ul class="lc-list-check1">

                          <li><?=_('Five Step Wizard');?></li>

                          <li><?=_('500+ Website Templates Available');?></li>

                          <li><?=_('Site Owner Panel');?></li>

                          <li><?=_('Additional Site Components');?></li>

                          <li><?=_('Intuitive WYSIWYG');?></li>

                        </ul></td>

                    </tr>

                      </table>

                </div>

                    <div id="info2" class="lc-box" style="display:none">

                  <h2>RVSkins</h2>

                  <p><?=_('Customize your cPanel/WHM to fit with your style. RVSkins allows you to pick from over nine elegant styles that will fit with almost any requirement that you may have. Need to have your skin in another language? No problems with over 25+ languages supported by RVSkins you will not face a language barrier ever again.');?></p>

                  <p><?=_('Crammed with features RVSkins can do as much or as little as you like. Being packed with features such as Sub Version integration, Single Sign on for multiple billing systems, and many other features. RVSkins is something you should consider.');?></p>

                  <table width="100%" cellpadding="0" cellspacing="0">

                        <tr>

                      <td valign="top"><h2><?=_('Features (Provider)');?></h2>

                            <ul class="lc-list-check1">

                          <li><?=_('Automatic Updates');?></li>

                          <li><?=_('Upsale feature');?></li>

                          <li><?=_('TracSubversion Integration');?></li>

                          <li><?=_('Message editor');?></li>

                          <li><?=_('Reseller support');?></li>

                          <li><?=_('Billing System Integration');?></li>

                          <li><?=_('Custom Plan configuration');?></li>

                        </ul></td>

                      <td valign="top"><h2><?=_('Features (End User)');?></h2>

                            <ul class="lc-list-check1">

                          <li><?=_('Multi-language support');?></li>

                          <li><?=_('Switch Themes between Text &amp; Icons');?></li>

                          <li><?=_('Easily change themes');?></li>

                          <li><?=_('Single Sign-on Integration');?></li>

                        </ul></td>

                    </tr>

                      </table>

                </div>

                    <div id="info3" class="lc-box" style="display:none">

                  <h2>RVSiteBuilder</h2>

                  <p><?=_("Offering 851+ professional sleek looking website templates is serious business! Differentiate yourself from the competition by offering your customers something that isn't currently offered by most hosting providers. Packed with exciting features such as automated backups, and multi-language support you can always rely on RVSiteBuilder to be there for you whenever you need them.");?></p>

                  <p><?=_("Do you want to change something within the template? Not a problem! RVSiteBuilder allows you to do that too; simply edit the file you'd like, and click save, its truly as simple as 1-2-3.");?></p>

                  <table width="100%" cellpadding="0" cellspacing="0">

                        <tr>

                      <td valign="top"><h2><?=_('Advantages (Provider)');?></h2>

                            <ul class="lc-list-check1">

                          <li><?=_('Automated Daily Backups');?></li>

                          <li><?=_('Multi-Language Support');?></li>

                          <li><?=_('Enterprise Security');?></li>

                          <li><?=_('Low Resource Requirements');?></li>

                          <li><?=_('Monthly Increasing Website Templates');?></li>

                          <li><?=_('One Licensing Model');?></li>

                        </ul></td>

                      <td valign="top"><h2><?=_('Advantages (End User)');?></h2>

                            <ul class="lc-list-check1">

                          <li><?=_('Intuitive WYSIWYG');?></li>

                          <li><?=_('5 Step Design Wizard');?></li>

                          <li><?=_('851+ Professional Designs');?></li>

                          <li><?=_('Easy to use Preview System');?></li>

                          <li><?=_('Flies Attachment Support');?></li>

                        </ul></td>

                    </tr>

                      </table>

                </div>

                    <div id="info4" class="lc-box" style="display:none">

                  <h2>WHMXtra</h2>

                  <p><?=_("Does your WHM need a little extra boost? WHMXtra is an addon module designed to give your cPanel server just that! With Xtra you can choose from many added features that would normally be done via a command line or are normal missed altogether! With WHMXtra Plugin, you will add even more functionality to the end user's cPanel with the added benefit of saving your tech support time and you money. As an added benefit, it installs in just one click!");?></p>

                  <table width="100%" cellpadding="0" cellspacing="0">

                        <tr>

                      <td valign="top"><h2><?=_('Server Tool Features');?></h2>

                            <ul class="lc-list-check1">

                          <li><?=_('Linux Malware Detect + Web UI');?></li>

                          <li><?=_('MySQL Performance Tuner');?></li>

                          <li><?=_('Lynis Security Auditor');?></li>

                          <li><?=_('Spam Blocklist Checker');?></li>

                          <li><?=_('Disable/Enable wget/lynx');?></li>

                          <li><?=_('Choose from several firewalls');?></li>

                          <li><?=_('32 and 64 bit FFMPEG Installers');?></li>

                        </ul></td>

                      <td valign="top"><h2><?=_('Additional Tools');?></h2>

                            <ul class="lc-list-check1">

                          <li><?=_('Zend/IonCube Installer');?></li>

                          <li><?=_('CHKRootkit Hunter');?></li>

                          <li><?=_('Yum Install /Update');?></li>

                          <li><?=_('CSF Firewall');?></li>

                          <li><?=_('and so many more options...');?></li>

                        </ul></td>

                    </tr>

                      </table>

                </div>

                    <div id="info5" class="lc-box" style="display:none">

                  <h2><?=_('Miva Merchant');?></h2>

                  <p><?=_("If you are a small business owner who is looking for ways to grow your online business, then Miva Merchant is what you've been looking for! Miva Merchant is easily expandable, so you can always add features and functionality to suit your needs. Miva Merchant e-commerce shopping cart software is flexible enough to fit a variety of needs and powerful enough to deliver them.");?></p>

                  <table width="100%" cellpadding="0" cellspacing="0">

                        <tr>

                      <td valign="top"><h2><?=_('Administrive Features');?></h2>

                            <ul class="lc-list-check1">

                          <li><?=_('Real-time Shipping Rates');?></li>

                          <li><?=_('Data Import &amp; Export');?></li>

                          <li><?=_('B2B &amp; B2C Channels');?></li>

                          <li><?=_('Internet Marketing Ready');?></li>

                          <li><?=_('Product Merchandising');?></li>

                        </ul></td>

                      <td valign="top"><h2><?=_('Additional Features');?></h2>

                            <ul class="lc-list-check1">

                          <li><?=_('Enterprise Security');?></li>

                          <li><?=_('In House Support');?></li>

                          <li><?=_('Sales Tax Calculation');?></li>

                          <li><?=_('Accept Credit Cards');?></li>

                        </ul></td>

                    </tr>

                      </table>

                </div>

                    <div id="info6" class="lc-box" style="display:none">

                  <h2>WHMSonic</h2>

                  <p><?=_('WHMSonic is not only one of the most popular WHM/cPanel plugins, it is also one of the easiest! With WHMSonic you can offer features such as Shoutcast streaming media and AutoDJ; you are virtually a radio reseller right from your Dedicated or VPS server! The best part, you can do this all without SSH access!');?></p>

                  <p><?=_("WHMSonic also supports your cPanel users; so when you've created your user's account, they can fully manage their audio streaming while your pre-set rules are being enforced by WHMSonic.");?></p>

                  <table width="100%" cellpadding="0" cellspacing="0">

                        <tr>

                      <td valign="top"><h2><?=_('Brief Overview');?></h2>

                            <ul class="lc-list-check1">

                          <li><?=_('WHMSonic Sound Filter HD radio');?></li>

                          <li><?=_('Supports 8 languages');?></li>

                          <li><?=_("Setup AutoDJ's with AAC+ encoder");?></li>

                          <li><?=_('Create WHMSonic Resellers');?></li>

                          <li><?=_('Setup External or Internal Shoutcast radios');?></li>

                          <li><?=_('Easily manage Shoutcast radios from cPanel/WHM');?></li>

                          <li><?=_('Wide Linux OS Support');?></li>

                        </ul></td>

                      <td valign="top"><h2><?=_('Additional Features');?></h2>

                            <ul class="lc-list-check1">

                          <li><?=_('Resource Controls (Bandwidth, etc...');?>)</li>

                          <li><?=_('Suspend/Unsuspend Streams');?></li>

                          <li><?=_('Real-Time Port Control');?></li>

                          <li><?=_('Custom Skin Support');?></li>

                          <li><?=_('F.A.Q Manager');?></li>

                        </ul></td>

                    </tr>

                      </table>

                </div>

                    <div id="info7" class="lc-box" style="display:none">

                  <h2>Ksplice Uptrack</h2>

                  <p><?=_('Rebooting your server can now be a thing of the past. With Ksplice, you can eliminate the need to reboot your server when updating Linux or any other supported OS. Your clients will certainly appreciate the fact that you will no longer need to call maintenance windows for simple software updates.');?></p>

                  <p><?=_('Additionally, Ksplice enables your server to automatically apply updates instead of waiting on server administrators to login to the multiple servers within your environment to ensure that all of them are updated; thus, reducing the time that your server is possibly at risk from not applying the updates.');?></p>

                  <table width="100%" cellpadding="0" cellspacing="0">

                        <tr>

                      <td valign="top"><h2><?=_('Brief Overview');?></h2>

                            <ul class="lc-list-check1">

                          <li><?=_('Rebootless server updates');?></li>

                          <li><?=_('Virtualization ready');?></li>

                          <li><?=_('Update rollback capability');?></li>

                          <li><?=_('Update email notifications');?></li>

                          <li><?=_('Easily Installable');?></li>

                          <li><?=_('Web management tool');?></li>

                          <li><?=_('Metered billing');?></li>

                        </ul></td>

                      <td valign="top"><h2><?=_('Additional Features');?></h2>

                            <ul class="lc-list-check1">

                          <li><?=_('API and monitoring');?></li>

                          <li><?=_('Proxy support');?></li>

                          <li><?=_('Access policies');?></li>

                          <li><?=_('No performance impact');?></li>

                          <li><?=_('and many more...');?></li>

                        </ul></td>

                    </tr>

                      </table>

                </div>

                

                 <div id="info8" class="lc-box" style="display:none">

                  <h2>CloudLinux</h2>

                  <p><?=_('Improve stability within your hosting environment by using CloudLinux. CloudLinux provides fixes for commonly seen problems in the web hosting industry, such as the "bad neighbors" effect. By choosing CloudLinux, you are choosing to improve security and stability, leading to improved revenue.');?></p>

                  <table width="100%" cellpadding="0" cellspacing="0">

                        <tr>

                      <td valign="top"><h2><?=_('General Overview');?></h2>

                            <ul class="lc-list-check1">

                          <li><?=_('Increased Server Density');?></li>

                          <li><?=_('Decreased Support costs');?></li>

                          <li><?=_('Reduce customer churn');?></li>

                          <li><?=_('Improve performance');?></li>

                          <li><?=_('And much more...');?> </li>

                      

                        </ul></td>

                      <td valign="top"><h2><?=_('Advanced Overview');?></h2>

                            <ul class="lc-list-check1">

                          <li><?=_('Multiple Control Panel Support');?></li>

                          <li><?=_('Excellent Customer Support');?></li>

                          <li><?=_('Adjust resource limits on fly');?></li>

                          <li><?=_('Improve server stability');?></li>

                          <li><?=_('And so much more...');?></li>

                        </ul></td>

                    </tr>

                      </table>

                </div>

                

                

                <div id="info9" class="lc-box" style="display:none">

                  <h2>LiteSpeed</h2>

                  <p><?=_('Increase performance and usability by trading in your existing web server for a web server that has a little more kick to it. LiteSpeed isn\'t only up to nine times faster than Apache, it also utilizes fewer resources making it more nimble on its feet. Additionally, it can be installed in conjunction with almost any control panel on the market currently, including cPanel, DirectAdmin, InterWorx, Plesk, and others.');?></p>

                  <table width="100%" cellpadding="0" cellspacing="0">

                        <tr>

                      <td valign="top"><h2><?=_('General Overview');?></h2>

                            <ul class="lc-list-check1">

                          <li><?=_('Configurable via Browser');?></li>

                          <li><?=_('Smaller Resource Usage');?></li>

                          <li><?=_('Up to nine times faster');?></li>

                          <li><?=_('DDoS Protection');?></li>

                          <li><?=_('Load Balancing');?> </li>

                      

                        </ul></td>

                      <td valign="top"><h2><?=_('Neat Features');?></h2>

                            <ul class="lc-list-check1">

                          <li><?=_('Improved Security');?></li>

                          <li><?=_('Automatically Updating');?></li>

                          <li><?=_('SSL Hardware Acceleration');?></li>

                          <li><?=_('Improved Script Performance');?></li>

                          <li><?=_('And much more...');?></li>

                        </ul></td>

                    </tr>

                      </table>

                </div>

                

                

                <div id="info10" class="lc-box" style="display:none">

                  <h2>Trendy SiteBuilder</h2>

                  <p><?=_('Modernize your website with Trendy SiteBuilder. Trendy SiteBuilder is a revolutionary website builder that allows you to design, build, and publish your website within ten minutes or less. Trendy SiteBuilder also allows you to engage your website visitors by using live sales persons directly on your website.');?></p>

                  <table width="100%" cellpadding="0" cellspacing="0">

                        <tr>

                      <td valign="top"><h2><?=_('General Overview');?></h2>

                            <ul class="lc-list-check1">

                          <li><?=_('SEO Enhanced');?></li>

                          <li><?=_('Performance Optimized');?></li>

                          <li><?=_('Smartphone Friendly');?></li>

                          <li><?=_('Social Media Integrated');?></li>

                          <li><?=_('Live Person Representative');?> </li>

                          <li><?=_('Online Store Builder');?> </li>

                      

                        </ul></td>

                      <td valign="top"><h2><?=_('Neat Features');?></h2>

                            <ul class="lc-list-check1">

                          <li><?=_('iPhone / Android App');?></li>

                          <li><?=_('Extensive Image/Video Gallery');?></li>

                          <li><?=_('Social Bookmarking App');?></li>

                          <li><?=_('100+ Pre-Build Designs');?></li>

                          <li><?=_('And much more...');?></li>

                        </ul></td>

                    </tr>

                      </table>

                </div>

                

                <div id="info11" class="lc-box" style="display:none">

                  <h2>Zopim Live Chat</h2>

                  <p><?=_('Improving your website marketing shouldn\'t be black magic and guesswork. Understand your website visitors, their viewing patterns, browsers, and vast amounts of other information by using Zopim Live Chat. Zopim does not only provide you with vast amounts of information about your website visitors, but also allows you to open a new communication channel between your business and them.');?></p>

                  <table width="100%" cellpadding="0" cellspacing="0">

                        <tr>

                      <td valign="top"><h2><?=_('General Overview');?></h2>

                            <ul class="lc-list-check1">

                          <li><?=_('Visitor Tracking');?></li>

                          <li><?=_('Developer Friendly');?></li>

                          <li><?=_('Extensive API');?></li>

                          <li><?=_('Multilingual Support');?></li>

                          <li><?=_('Platform Freedom');?> </li>

                          <li><?=_('Intuitive Interface');?> </li>

                      

                        </ul></td>

                      <td valign="top"><h2><?=_('Neat Features');?></h2>

                            <ul class="lc-list-check1">

                          <li><?=_('Plugins/Addons Available');?></li>

                          <li><?=_('No Software Downloads Required');?></li>

                          <li><?=_('Encrypted Live Chat Sessions');?></li>

                          <li><?=_('Google Analytics Integration');?></li>

                          <li><?=_('Instant Messenger Integrations');?></li>

                          <li><?=_('And so much more...');?></li>

                        </ul></td>

                    </tr>

                      </table>

                </div>

                

                  </div></td>

              </tr>

        </table>

          </div>

    </div>

      </div>

  <div class="push" ></div>

  <div style="position:absolute; bottom:0; width:100%">

        <?php include_once("../_include/modules/footer.php"); ?>

        <?php include_once("../_include/modules/additional.php"); ?>

      </div>

</div>

    </body>

</html>

