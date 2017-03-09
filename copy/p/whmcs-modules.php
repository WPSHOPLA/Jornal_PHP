<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
<?php include_once("../_include/modules/pricing.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$seo_whmcs_modules_title?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<?=$seo_whmcs_modules_keywords?>" />
	<meta name="description" content="<?=$seo_whmcs_modules_description?>" />
	<meta name="author" content="<?=$author?>" />
	<meta name="copyright" content="<?=$copyright?>" />
	<link href="<?=$img_dir?>/favicon.ico" rel="shortcut icon" />
    <?php $css=""; include_once("../_include/modules/css.php"); ?>
	<?php $java=""; include_once("../_include/modules/java.php"); ?>
    <link href="<?=$css_dir?>/_include/css/landing/style-2.css" rel="stylesheet" type="text/css" />
    <link href="<?=$css_dir?>/_include/css/landing/table/style-5.css" rel="stylesheet" type="text/css" />
 <!-- 	<script src="<?=$site_dir?>/../_include/js/colorbox.js" type="text/javascript"></script> -->
	<script src="<?php echo $js_dir?>/_include/js-00002/landing.js" type="text/javascript"></script>
</head>
<body>
<div class="wrapper">
<?php $menu=""; include_once("../_include/modules/header.php"); ?>
<div class="lc-header-inner"><div class="lc-header-inner-holder">
	<div class="header"><?php print ("$seo_whmcs_modules_main"); ?></div>
</div></div>
<div class="lc-content"><div class="lc-content-holder">

	<div class="lc-content-wrapper-inner" style="padding-right:10px;">
		<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
			
			<td class="lc-content-right" valign="top" style=" padding-left:4px;"><div class="mainC" style="padding-bottom:0px; padding-top:0px;">
			  <div class="cpanelCon" style="height:290px;">
			    <h1>WHMCS Modules</h1>
			    <div class="clr"></div>
			    <p><span class="pstyle01">Ever thought about expanding your WHMCS to make it perform certain features and functions that are not enabled out of the box? If so, you can do this easily by using WHMCS Modules. WHMCS Modules are generally third-party applications that have been built by web developers to expand the core functionality of WHMCS and its options. For example, if you wanted to automate your licensing needs you could use the LicenseCube WHMCS module, which would allow you to order licenses instantly via your billing system.</span> </p>
			    <p><span class="pstyle01">Furthermore, since there is such an avid community of web developers who create both paid and free WHMCS modules. You also have the option to have your own created if you couldn't find one that is already written. By having such a large community, it opens up the door to thousands of possibilities and provides a huge level of automation options from within your billing system.</span></p>
			    </div>
			  <div class="cpanelIMG"><a href="<?=$site_dir?>/billing-systems/whmcs-license.php"><img src="<?=$img_dir?>/landing/whmcs-modules.jpg" style="margin-top:65px; margin-left:30px;" alt="WHMCS Billing System License" /></a></div>
			  <div class="sepLine"></div>
			  <div class="clr"></div>
			  <div class="notificationC">
			    <div class="notificationBox current box boxes1"  id="box1" style="cursor:pointer">
			      <div class="notificationImg box boxes1" style="background:url('<?=$img_dir?>/landing/icons/ico-02.png') no-repeat scroll center center transparent"></div>
			      <div class="notificationText box boxes1"><h2 style="font-size:18px; padding-bottom:0px;"><span class="textStyle02 box boxes1">WHMCS Official Modules</span></h2>
			        Your toolbox awaits...</div>
			      </div>
			    <div class="notificationBox box2 boxes"  id="box2" style="cursor:pointer">
			      <div class="notificationImg" style="background:url('<?=$img_dir?>/landing/icons/ico-01.png') no-repeat scroll center center transparent"></div>
			      <div class="notificationText"><h2 style="font-size:18px; padding-bottom:0px;"><span class="textStyle02">Module Development</span></h2>
			        Design for your needs...</div>
			      </div>
			    <div class="notificationBox noMR box3 boxes"  id="box3" style="cursor:pointer">
			      <div class="notificationImg" style="background:url('<?=$img_dir?>/landing/icons/ico-05.png') no-repeat scroll center center transparent"></div>
			      <div class="notificationText"><h2 style="font-size:18px; padding-bottom:0px;"><span class="textStyle02">Module Assortment</span></h2>
			        Cover every angle...</div>
			      </div>
			    </div>
			  <div class="clr"></div>
			  
                    
                    
                    <div class="textC" id="boxchage1">
				      <h2>Download. Install. Run. It's 1-2-3 Simple.</h2>
				      <div class="clr"></div>
				      <p class="pStyle02">While WHMCS has its own WHMCS "official" Modules that they maintain, there are thousands of other modules that are not maintained by WHMCS directly. In fact, if you were to place a wager on the amount of third-party WHMCS modules compared to how many WHMCS "official" modules, you'd find that that for every one "official" module there are around five third-party WHMCS modules. Having said this, there are over 33+ WHMCS modules, which are available with WHMCS right out of the box, surpassing any other rival billing systems that are currently around.</p>
				      
			        </div>
                    
                    
                    
                    <div class="textC" id="boxchage2" style="display:none">
				      <h2>Perfect Documentation, Allows For Module Perfection...</h2>
				      <div class="clr"></div>
				      <p class="pStyle02">When it comes to customizing your own WHMCS modules, WHMCS has provided a massive amount of resources, which will allow you to fully understand how modules work and what is required from each module. There are also a wide variety of hooks within WHMCS that can be used when doing module development, making WHMCS module deployments quicker and more streamlined. Furthermore, WHMCS modules can be expanded and promoted within the WHMCS community forum, which will help your contribution become more popular. </p>
				      
			        </div>
                    
                    
                    
                    <div class="textC" id="boxchage3" style="display:none">
				      <h2>Simply The Most Encompassing Selection...</h2>
				      <div class="clr"></div>
				      <p class="pStyle02">When it comes to module support for different types of billing systems, control panels, and domain name registrars, it is hard to find a provider that WHMCS does not have a module for. WHMCS out of the box modules cover every major provider, meaning that you no longer have to worry about writing your own modules or having to upload new WHMCS module from day one. This gives you ample time to learn WHMCS and allows you breathing space before adding modules to expand the functionality of WHMCS. </p>
				      
			        </div>
                    
                    
                     <!--Start Table Competition-->
                    
                    <div class="container02">
                      <div class="competition">
                        <div class="competitionTop"></div>
                        <div class="competitionContents">
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td   style="width:253px" align="right">&nbsp;</td>
                              <td   style="width:150px" align="center"><a href="<?=$site_dir?>/billing-systems/whmcs-license.php"><img src="<?=$img_dir?>/landing/table/WHMCS.jpg" alt="WHMCS License" /></a></td>
                              <td  style="width:152px" align="center"><a href="<?=$site_dir?>/billing-systems/whmautopilot-license.php"><img src="<?=$img_dir?>/landing/table/WHMAutoPilot.jpg" alt="WHMAutoPilot License" /></a></td>
                              <td  style="width:154px" align="center"><a href="<?=$site_dir?>/billing-systems/clientexec-license.php"><img src="<?=$img_dir?>/landing/table/ClientExec.jpg" alt="ClientExec License" /></a></td>
                              <td  style="width:155px" align="center"><a href="<?=$site_dir?>/billing-systems/blesta-license.php"><img src="<?=$img_dir?>/landing/table/Blesta.jpg" alt="Blesta License" /></a></td>
                            </tr>
                            <tr>
                              <td  style="width:253px" align="right" class="tdStyle02"><h3 style="font-size:14px;">35+ Payment Gateways</h3></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/cross.png" alt="Disabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/cross.png" alt="Disabled Feature" /></td>
                            </tr>
                            <tr>
                              <td align="right" class="tdStyle02"><h3 style="font-size:14px;">1,000+ Non "Official" modules</h3></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/cross.png" alt="Disabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/cross.png" alt="Disabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/cross.png" alt="Disabled Feature" /></td>
                            </tr>
                            <tr>
                              <td align="right" class="tdStyle02"><h3 style="font-size:14px;">Web Developer Community</h3></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                            </tr>
                            <tr>
                              <td align="right" class="tdStyle02"><h3 style="font-size:14px;">5+ Years Development</h3></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                            </tr>
                            <tr>
                              <td align="right" class="tdStyle02"><h3 style="font-size:14px;">10+ Control Panel Support</h3></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/cross.png" alt="Disabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                            </tr>
                            <tr>
                              <td align="right" class="tdStyle02"><h3 style="font-size:14px;">Official Paid Addon Modules</h3></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/cross.png" alt="Disabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/cross.png" alt="Disabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/cross.png" alt="Disabled Feature" /></td>
                            </tr>
                            <tr>
                              <td  style="height:50px;" align="right">&nbsp;</td>
                              <td align="center"><a class="button-orange" href="<?=$site_dir?>/billing-systems/whmcs-license.php">Learn More<span></span></a></td>
                              <td align="center"><a class="button-grey" href="<?=$site_dir?>/billing-systems/whmautopilot-license.php">Learn More<span></span></a></td>
                              <td align="center"><a class="button-grey" href="<?=$site_dir?>/billing-systems/clientexec-license.php">Learn More<span></span></a></td>
                              <td align="center"><a class="button-grey" href="<?=$site_dir?>/billing-systems/blesta-license.php">Learn More<span></span></a></td>
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
