<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
<?php include_once("../_include/modules/pricing.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$seo_fantastico_install_title?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<?=$seo_fantastico_install_keywords?>" />
	<meta name="description" content="<?=$seo_fantastico_install_description?>" />
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
	<div class="header"><?php print ("$seo_fantastico_install_main"); ?></div>
</div></div>
<div class="lc-content"><div class="lc-content-holder">

	<div class="lc-content-wrapper-inner" style="padding-right:10px;">
		<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
			
			<td class="lc-content-right" valign="top" style=" padding-left:4px;"><div class="mainC" style="padding-bottom:0px; padding-top:0px;">
			  <div class="cpanelCon" style="height:289px;">
			    <h1>Fantastico Install</h1>
			    <div class="clr"></div>
			    <p class="pstyle01"><span class="pstyle01">Learning how to install Fantastico can be an overwhelming process if you are fairly new to having to install scripts yourself. Overall, if you are seasoned in software installations the Fantastico install process should be quite straightforward. Either way, the creators of Fantastico have chosen to automate their Fantastico install process as much as possible, thus making the deployment for Fantastico super-easy and quick.</span></p>
                
			    <p class="pstyle01"><span class="pstyle01">For the Fantastico install you will need to ensure that you have either a cPanel VPS (Virtual Private Server) or alternatively a cPanel Dedicated Server as the Fantastico install cannot run on any other platform than cPanel/WHM due to the constraints that were placed when it was originally being planned out and designed. As long as you have either one of those two types of hosting accounts, the Fantastico install process should go very smoothly.</span></p>
			    </div>
			  <div class="cpanelIMG"><a href="<?=$site_dir?>/control-panels/fantastico-license.php"><img style="margin-top:80px; margin-left:30px;" src="<?=$img_dir?>/landing/fantastico-install.jpg" width="325" height="154" alt="Fantastico License" /></a></div>
			  <div class="sepLine"></div>
			  <div class="clr"></div>
			  <div class="notificationC" >
			    <div class="notificationBox current box boxes1"  id="box1"  style="cursor:pointer">
			      <div class="notificationImg box boxes1" style="background:url('<?=$img_dir?>/landing/icons/ico-08.png') no-repeat scroll center center transparent"></div>
			      <div class="notificationText box boxes1"><h2 style="font-size:18px; padding-bottom:0px;"><span class="textStyle02 box boxes1">Fantastico Hosting</span></h2>
			       Learn how your host...</div>
			      </div>
			    <div class="notificationBox box2 boxes"  id="box2"  style="cursor:pointer">
			      <div class="notificationImg" style="background:url('<?=$img_dir?>/landing/icons/ico-01.png') no-repeat scroll center center transparent"></div>
			      <div class="notificationText"><h2 style="font-size:18px; padding-bottom:0px;"><span class="textStyle02">Fantastico Languages</span></h2>
			        Pick your own language...</div>
			      </div>
			    <div class="notificationBox noMR box3 boxes"  id="box3"  style="cursor:pointer">
			      <div class="notificationImg" style="background:url('<?=$img_dir?>/landing/icons/ico-05.png') no-repeat scroll center center transparent"></div>
			      <div class="notificationText"><h2 style="font-size:18px; padding-bottom:0px;"><span class="textStyle02">Fantastico Backups</span></h2>
			        Automatic backup...</div>
			      </div>
			    </div>
			  <div class="clr"></div>			                
                    
                    <div class="textC" id="boxchage1">
				      <h2>Learn how to pick the right provider...</h2>
				      <div class="clr"></div>
				      <p class="pStyle02">When looking for Fantastico web hosting, you should be sure that your Fantastico web hosting provider installed everything during the Fantastico install process. If not, you may run into issues such as not having enough scripts within your Fantastico web hosting account. Please note that it's not common that Fantastico web hosting providers do not install everything, but it has happened and does happen with some of the most popular web hosting providers, so ask the right questions about the Fantastico install process prior to signing up!</p>
				      
			        </div>
                    
                    
                    
                    <div class="textC" id="boxchage2"  style="display:none">
				      <h2>Switch to your own language...</h2>
				      <div class="clr"></div>
				      <p class="pStyle02">When it comes to changing the language within your Fantastico Install, the process is very streamlined and very easy and can be done in a matter of seconds. However, this can also be specified by the web hosting provider during the Fantastico Install process, and if this feature wasn't enabled during the Fantastico install process then it might be unavailable to you to make the necessary changes within your Fantastico options.  If you notice that you are unable to change changes within your Fantastico, we strongly advise you contact your web hosting provider and ask them to make the necessary changes.</p>
				      
			        </div>
                    
                    
                    
                    <div class="textC" id="boxchage3" style="display:none">
				      <h2>Automatically backup all your files...</h2>
				      <div class="clr"></div>
				      <p class="pStyle02">You hear that backups are extremely important, Fantastico seems to think so too. This is why during the Fantastico install process an administrator is able to make changes needed to ensure that all web hosting accounts using the auto-installers applications, are backed up prior to doing any new Fantastico install or upgrade. This is always suggested during the initial Fantastico install that you closely follow the "recommended" Fantastico guideline to ensure that all features are enabled for you as the administrator and your Fantastico web hosting resellers.</p>
				      
			        </div>
                    
                    
                    
                     <!--Start Table Competition-->
                     <div class="container04">
                       <div class="competition03">
                         <div class="competition03Top"></div>
                         <div class="competition03Contents">
                           <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                               <td align="right">&nbsp;</td>
                               <td align="center"><a href="<?=$site_dir?>/control-panels/fantastico-license.php"><img src="<?=$img_dir?>/landing/table/Fantastico.jpg" alt="Fantastico License" /></a></td>
                               <td align="center"><a href="<?=$site_dir?>/control-panels/softaculous-license.php"><img src="<?=$img_dir?>/landing/table/Softaculous.jpg" alt="Softaculous License" /></a></td>
                               <td align="center"><a href="<?=$site_dir?>/control-panels/installatron-license.php"><img src="<?=$img_dir?>/landing/table/Installatron.jpg" alt="Installatron License" /></a></td>
                             </tr>
                             <tr>
                               <td align="right" class="tdStyle02" style="width:255px;"><h3 style="font-size:14px;">Priority customer support</h3></td>
                               <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                               <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                               <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                             </tr>
                             <tr>
                               <td align="right" class="tdStyle02"><h3 style="font-size:14px;">A completely translated user-interface</h3></td>
                               <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                               <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                               <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                             </tr>
                             <tr>
                               <td align="right" class="tdStyle02"><h3 style="font-size:14px;">Total reseller control panel</h3></td>
                               <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                               <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                               <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                             </tr>
                             <tr>
                               <td align="right" class="tdStyle02"><h3 style="font-size:14px;">Excellent documentation</h3></td>
                               <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                               <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/cross.png" alt="Disabled Feature" /></td>
                               <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                             </tr>
                             <tr>
                               <td align="right" class="tdStyle02"><h3 style="font-size:14px;">Been around 8+ years</h3></td>
                               <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                               <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/cross.png" alt="Disabled Feature" /></td>
                               <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/cross.png" alt="Disabled Feature" /></td>
                             </tr>
                             <tr>
                               <td align="right" class="tdStyle02"><h3 style="font-size:14px;">Quick and easy product updates</h3></td>
                               <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                               <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                               <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                             </tr>
                             <tr>
                               <td height="50" align="right">&nbsp;</td>
                               <td align="center"><div class="margin10"><a class="button-orange" href="<?=$site_dir?>/control-panels/fantastico-license.php">Learn More</a></div></td>
                               <td align="center"><div class="margin10"><a class="button-grey" href="<?=$site_dir?>/control-panels/softaculous-license.php">Learn More</a></div></td>
                               <td align="center"><div class="margin10"><a class="button-grey" href="<?=$site_dir?>/control-panels/installatron-license.php">Learn More</a></div></td>
                             </tr>
                           </table>
                         </div>
                       </div>
                     </div>
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
