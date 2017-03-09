<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
<?php include_once("../_include/modules/pricing.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$seo_whmsonic_title?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<?=$seo_whmsonic_keywords?>" />
	<meta name="description" content="<?=$seo_whmsonic_description?>" />
	<meta name="author" content="<?=$author?>" />
	<meta name="copyright" content="<?=$copyright?>" />
	<link href="<?=$img_dir?>/favicon.ico" rel="shortcut icon" />
    <?php $css=""; include_once("../_include/modules/css.php"); ?>
	<?php $java=""; include_once("../_include/modules/java.php"); ?>
    <link href="<?=$css_dir?>/_include/css/landing/style-2.css" rel="stylesheet" type="text/css" />
    <link href="<?=$css_dir?>/_include/css/landing/table/style-5.css" rel="stylesheet" type="text/css" />
    <link href="<?=$css_dir?>/_include/css/landing/table/style-table2-4.css" rel="stylesheet" type="text/css" />
 <!-- 	<script src="<?=$site_dir?>/../_include/js/colorbox.js" type="text/javascript"></script> -->
	<script src="<?php echo $js_dir?>/_include/js-00002/landing.js" type="text/javascript"></script>
</head>
<body>
<div class="wrapper">
<?php $menu=""; include_once("../_include/modules/header.php"); ?>
<div class="lc-header-inner"><div class="lc-header-inner-holder">
	<div class="header"><?php print ("$seo_whmsonic_main"); ?></div>
</div></div>
<div class="lc-content"><div class="lc-content-holder">

	<div class="lc-content-wrapper-inner" style="padding-right:10px;">
		<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
			
			<td class="lc-content-right" valign="top" style=" padding-left:4px;"><div class="mainC" style="padding-bottom:0px; padding-top:0px;">
			  <div class="cpanelCon" style="height:305px;">
			    <h1>WHMSonic</h1>
			    <div class="clr"></div>
			    <p class="pstyle01"><span class="pstyle01">Whether you are a web hosting provider looking at expanding your offers, or you are an independent webmaster looking at broadcasting your radio steam, the WHMSonic makes it all possible to create your own radio stream online. Using the powerful cPanel/WHM control panel as a base, WHMSonic sits on top allowing you to fully manage radio streams with only a few clicks. Additionally, WHMSonic has advanced reseller capabilities, which makes it an ideal plugin to be able to offer as a separate service to your resellers, allowing you an additional revenue stream.</span></p>
                
			    <p class="pstyle01"><span class="pstyle01">WHMSonic additionally allows you to control a vast amount of features, such as real-time bit control bandwidth, and other such limits and monitoring services, to ensure that both your users and resellers are not stepping over the line in using what they have not paid for.  Furthermore, you are able to create your own flash player or use a default one available from WHMSonic to integrate into your existing website design, ensuring it's never out of place.</span></p>
			    </div>
			  <div class="cpanelIMG"><a href="<?=$site_dir?>/additional-licenses/whmsonic-license.php"><img style="margin-top:80px; margin-left:30px;" src="<?=$img_dir?>/landing/whmsonic.jpg" width="325" height="154" alt="WHMSonic License" /></a></div>
			  <div class="sepLine"></div>
			  <div class="clr"></div>
			  <div class="notificationC" >
			    <div class="notificationBox current box boxes1"  id="box1"  style="cursor:pointer">
			      <div class="notificationImg box boxes1" style="background:url('<?=$img_dir?>/landing/icons/ico-01.png') no-repeat scroll center center transparent"></div>
			      <div class="notificationText box boxes1"><h2 style="font-size:18px; padding-bottom:0px;"><span class="textStyle02 box boxes1">WHMSonic Players</span></h2>
			       Choose your own style...</div>
			      </div>
			    <div class="notificationBox box2 boxes"  id="box2"  style="cursor:pointer">
			      <div class="notificationImg" style="background:url('<?=$img_dir?>/landing/icons/ico-04.png') no-repeat scroll center center transparent"></div>
			      <div class="notificationText"><h2 style="font-size:18px; padding-bottom:0px;"><span class="textStyle02">WHMSonic Users</span></h2>
			       Control your listeners...</div>
			      </div>
			    <div class="notificationBox noMR box3 boxes"  id="box3"  style="cursor:pointer">
			      <div class="notificationImg" style="background:url('<?=$img_dir?>/landing/icons/ico-07.png') no-repeat scroll center center transparent"></div>
			      <div class="notificationText"><h2 style="font-size:18px; padding-bottom:0px;"><span class="textStyle02">WHMSonic Admin</span></h2>
			       Adjust settings on the fly...</div>
			      </div>
			    </div>
			  <div class="clr"></div>			                
                    
                    <div class="textC" id="boxchage1">
				      <h2>Ensure your flash player fits your design...</h2>
				      <div class="clr"></div>
				      <p class="pStyle02">When it comes to vast support, you can now choose which type of player you would like your radio streams from WHMSonic to integrate with. For example, WHMSonic can play radio streams directly on the following popular media players: MediaPlayer, QuickTime, Realplayer, and Winamp.  Furthermore, if English isn't your native language, you can now choose from over eight (8) different types, ensuring that the interface will meet you and your customer's needs to ensure maximum usability.</p>
				      
			        </div>
                    
                    
                    
                    <div class="textC" id="boxchage2"  style="display:none">
				      <h2>Control your listeners with a single-click...</h2>
				      <div class="clr"></div>
				      <p class="pStyle02">Being a WHMSonic user, you will now be able to enjoy a vast amount of new features that have become available with the latest version of WHMSonic. Directly, within your cPanel web hosting account, you will be able to manage your SHOUTCast stream including but not limited to; start, stop, edit, update, and restart existing streams. Furthermore, you will also be able to manage your very own relay server, which allows you to further expand your broadcasting network by relaying your station, so you can pickup more subscribers to your online broadcast. </p>
				      
			        </div>
                    
                    
                    
                    <div class="textC" id="boxchage3" style="display:none">
				      <h2>Perform changes instantly on your live feeds...</h2>
				      <div class="clr"></div>
				      <p class="pStyle02">Within the WHMSonic administrative interface, you will now be able to see new ways of controlling your radio stream. For example, when it comes to what songs are played, you can now configure in advance the play list using the "Playlist Manager" and play certain songs during a preset time, while providing your listeners the WHMSonic broadcast both in regular and HD formats. Furthermore, you can adjust the look and feel of the website by using RVSkin to customize it for your needs and wants.</p>
				      
			        </div>
                    
                     <!--Start Table Competition-->
                     <!--<div class="container04">
                       <div class="competition03">
                         <div class="competition03Top"></div>
                         <div class="competition03Contents">
                           <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                               <td align="right">&nbsp;</td>
                               <td align="center"><a href="<?=$site_dir?>/control-panels/installatron-license.php"><img src="<?=$img_dir?>/landing/table/Installatron.jpg" alt="Installatron License" /></a></td>
                               <td align="center"><a href="<?=$site_dir?>/control-panels/softaculous-license.php"><img src="<?=$img_dir?>/landing/table/Softaculous.jpg" alt="Softaculous License" /></a></td>
                               <td align="center"><a href="<?=$site_dir?>/control-panels/fantastico-license.php"><img src="<?=$img_dir?>/landing/table/Fantastico.jpg" alt="Fantastico License" /></a></td>
                             </tr>
                             <tr>
                               <td align="right" class="tdStyle02" style="width:255px;"><h3 style="font-size:14px;">2+ years on the market</h3></td>
                               <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                               <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                               <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                             </tr>
                             <tr>
                               <td align="right" class="tdStyle02"><h3 style="font-size:14px;">Quick and easy product updates</h3></td>
                               <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                               <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                               <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                             </tr>
                             <tr>
                               <td align="right" class="tdStyle02"><h3 style="font-size:14px;">Multi language support</h3></td>
                               <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                               <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                               <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                             </tr>
                             <tr>
                               <td align="right" class="tdStyle02"><h3 style="font-size:14px;">Advanced Automation API</h3></td>
                               <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                               <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                               <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/cross.png" alt="Disabled Feature" /></td>
                             </tr>
                             <tr>
                               <td align="right" class="tdStyle02"><h3 style="font-size:14px;">Ability to install own scripts</h3></td>
                               <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                               <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/cross.png" alt="Disabled Feature" /></td>
                               <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/cross.png" alt="Disabled Feature" /></td>
                             </tr>
                             <tr>
                               <td align="right" class="tdStyle02"><h3 style="font-size:14px;">60+ Installable scripts</h3></td>
                               <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                               <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                               <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                             </tr>
                             <tr>
                               <td height="50" align="right">&nbsp;</td>
                               <td align="center"><div class="margin10"><a class="button-orange" href="<?=$site_dir?>/control-panels/installatron-license.php">Learn More</a></div></td>
                               <td align="center"><div class="margin10"><a class="button-orange" href="<?=$site_dir?>/control-panels/softaculous-license.php">Learn More</a></div></td>
                               <td align="center"><div class="margin10"><a class="button-orange" href="<?=$site_dir?>/control-panels/fantastico-license.php">Learn More</a></div></td>
                             </tr>
                           </table>
                         </div>
                       </div>
                     </div>-->
                     <!--End Table Competition-->              
                    
                    
                    
				    <div class="clr"></div>
			      </div>
				

			</td>
		</tr>
		</table>
	</div>

</div></div>
<?php include_once("../_include/modules/footer.php"); ?>
<?php include_once("../_include/modules/additional.php"); ?>
</div>
</body>
</html>
