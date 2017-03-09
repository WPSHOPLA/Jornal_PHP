<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
<?php include_once("../_include/modules/pricing.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$seo_whmcs_themes_title?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<?=$seo_whmcs_themes_keywords?>" />
	<meta name="description" content="<?=$seo_whmcs_themes_description?>" />
	<meta name="author" content="<?=$author?>" />
	<meta name="copyright" content="<?=$copyright?>" />
	<link href="<?=$img_dir?>/favicon.ico" rel="shortcut icon" />
    <?php $css=""; include_once("../_include/modules/css.php"); ?>
	<?php $java=""; include_once("../_include/modules/java.php"); ?>
    <link href="<?=$css_dir?>/_include/css/landing/style-2.css" rel="stylesheet" type="text/css" />
    <link href="<?=$css_dir?>/_include/css/landing/table/style-5.css" rel="stylesheet" type="text/css" />
 <!-- 	<script src="<?=$site_dir?>/../_include/js/colorbox.js" type="text/javascript"></script> -->
    <script>
	$(document).ready(function(){
	$(".box2").mouseover(
	  function () {				  
		$("#box2").addClass("current"); 
		$("#box1").removeClass("current"); 
		$("#box3").removeClass("current"); 
		$("#boxchage1").hide();
		$("#boxchage2").hide();
		$("#boxchage3").hide();
		$("#boxchage2").show();
	  });
	  $(".box3").mouseover(
	  function () {				  
		$("#box3").addClass("current"); 
		$("#box2").removeClass("current"); 
		$("#box1").removeClass("current"); 
		$("#boxchage1").hide();
		$("#boxchage2").hide();
		$("#boxchage3").hide();
		$("#boxchage3").show();
	  });
	  
	$(".boxes").mouseout(
	  function () {
		$("#box2").removeClass("current"); 
		$("#box1").addClass("current"); 
		$("#box3").removeClass("current");  
		$("#boxchage1").show();
		$("#boxchage2").hide();
		$("#boxchage3").hide();
	  });
	  
	
});
	</script>
</head>
<body>
<div class="wrapper">
<?php $menu=""; include_once("../_include/modules/header.php"); ?>
<div class="lc-header-inner"><div class="lc-header-inner-holder">
	<div class="header"><?php print ("$seo_whmcs_themes_main"); ?></div>
</div></div>
<div class="lc-content"><div class="lc-content-holder">

	<div class="lc-content-wrapper-inner" style="padding-right:10px;">
		<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
			
			<td class="lc-content-right" valign="top" style=" padding-left:4px;"><div class="mainC" style="padding-bottom:0px; padding-top:0px;">
			  <div class="cpanelCon" style="height:365px;">
			    <h1>WHMCS Themes</h1>
			    <div class="clr"></div>
			    <p><span class="pstyle01">Making your WHMCS checkout theme match your website is important to making your potential customers feel better about the purchase that they are about to make on your website. This is where WHMCS themes come into play. WHMCS themes allow you to customize the general look and feel of the WHMCS billing system. From the most basic themes to the most complex themes they all drive that extra vote of confidence needed to make a new customer. So, whether if you have a branded or unbranded version of the WHMCS billing system, if you want to make the sales, you have to customize the WHMCS billing system to fit with the look and feel of your website.</span> </p>
			    <p><span class="pstyle01">When it comes to theming your WHMCS billing system, there are a couple of options to choose from, one of them is that you can take the "do it yourself" approach to theming your WHMCS so that it looks like the rest of your site, or alternatively you can use a third-party WHMCS theme integrators which will do the job for you approximately half the time, as they are more familiar with the requirements that WHMCS has placed on customized WHMCS themes within their own environment.</span></p>
			    </div>
			  <div class="cpanelIMG"><a href="<?=$site_dir?>/billing-systems/whmcs-license.php"><img src="<?=$img_dir?>/landing/whmcs-theme.jpg" style="margin-top:100px; margin-left:30px;" alt="WHMCS Billing System License" /></a></div>
			  <div class="sepLine"></div>
			  <div class="clr"></div>
			  <div class="notificationC">
			    <div class="notificationBox current box boxes1"  id="box1" style="cursor:pointer">
			      <div class="notificationImg box boxes1" style="background:url('<?=$img_dir?>/landing/icons/ico-01.png') no-repeat scroll center center transparent"></div>
			      <div class="notificationText box boxes1"><h2 style="font-size:18px; padding-bottom:0px;"><span class="textStyle02 box boxes1">Stylize Your WHMCS</span></h2>
			        Customize your look...</div>
			      </div>
			    <div class="notificationBox box2 boxes"  id="box2" style="cursor:pointer">
			      <div class="notificationImg" style="background:url('<?=$img_dir?>/landing/icons/ico-03.png') no-repeat scroll center center transparent"></div>
			      <div class="notificationText"><h2 style="font-size:18px; padding-bottom:0px;"><span class="textStyle02">Powered By: WHMCS?</span></h2>
			        Pick the right version...</div>
			      </div>
			    <div class="notificationBox noMR box3 boxes"  id="box3" style="cursor:pointer">
			      <div class="notificationImg" style="background:url('<?=$img_dir?>/landing/icons/ico-05.png') no-repeat scroll center center transparent"></div>
			      <div class="notificationText"><h2 style="font-size:18px; padding-bottom:0px;"><span class="textStyle02">Pick The Right Integrator</span></h2>
			        Choose the right provider...</div>
			      </div>
			    </div>
			  <div class="clr"></div>
			  
                    
                    
                    <div class="textC" id="boxchage1">
				      <h2>"Tweak Out" Your WHMCS Look...</h2>
				      <div class="clr"></div>
				      <p class="pStyle02">When it comes to themes, unless you want to build your own, which can prove to be extremely expensive and time consuming, you now have the option to buy one off the shelf. There is an abundant amount of various WHMCS themes that are for sale, from as little as forty dollars to as much as one-thousand dollars, dependent on the WHMCS theme functionality that you are looking for. Overall, the integration process is normally very quick, and you can have your WHMCS fully customized with its new theme in less than a week!</p>
				      
			        </div>
                    
                    
                    
                    <div class="textC" id="boxchage2" style="display:none">
				      <h2>Can You Live Without The "Powered By"?</h2>
				      <div class="clr"></div>
				      <p class="pStyle02">When it comes to themes, there is often a debate as to which is better, the branded version of WHMCS or the non branded version of WHMCS. This is something that you are best to address with your web designer or WHMCS theme integration specialist, as they are ultimately the ones doing the integration and would be best suited to provide you with the answer. However, if you do choose to go with the non-branded version of WHMCS, be prepared to pay a bit extra as the non-branded version is slightly more expensive.</p>
				      
			        </div>
                    
                    
                    
                    <div class="textC" id="boxchage3" style="display:none">
				      <h2>Picking The Right Integration Company...</h2>
				      <div class="clr"></div>
				      <p class="pStyle02">Just picking an integrator is not good enough; you need to make sure that you are picking the right WHMCS integrator for the job. For example, if you pick the wrong WHMCS integrator you could end up waiting for weeks to get your WHMCS theme working, and which would also cause problems. Here at LicenseCube, we suggest when choosing a WHMCS theme integrator, that you take a look at their previous work. Looking for integrators with at least fifteen completed projects who are verifiable should be enough to suffice that they are aware of the WHMCS theme integration process. There are other quality markers that are available to look for, but the one mentioned above is a major factor to consider.</p>
				      
			        </div>
                    
                    
                    
                     <!--Start Table Competition-->
                    
                    <div class="container02">
                      <div class="competition">
                        <div class="competitionTop"></div>
                        <div class="competitionContents">
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td   style="width:253px" align="right">&nbsp;</td>
                              <td   style="width:150px" align="center"><a href="<?=$site_dir?>/billing-systems/blesta-license.php"><img src="<?=$img_dir?>/landing/table/Blesta.jpg" alt="Blesta License" /></a></td>
                              <td  style="width:152px" align="center"><a href="<?=$site_dir?>/billing-systems/clientexec-license.php"><img src="<?=$img_dir?>/landing/table/ClientExec.jpg" alt="ClientExec License" /></a></td>
                              <td  style="width:154px" align="center"><a href="<?=$site_dir?>/billing-systems/whmcs-license.php"><img src="<?=$img_dir?>/landing/table/WHMCS.jpg" alt="WHMCS License" /></a></td>
                              <td  style="width:155px" align="center"><a href="<?=$site_dir?>/billing-systems/whmautopilot-license.php"><img src="<?=$img_dir?>/landing/table/WHMAutoPilot.jpg" alt="WHMAutoPilot License" /></a></td>
                            </tr>
                            <tr>
                              <td  style="width:253px" align="right" class="tdStyle02"><h3 style="font-size:14px;">Branded/Unbranded Versions</h3></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/cross.png" alt="Disabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/cross.png" alt="Disabled Feature" /></td>
                            </tr>
                            <tr>
                              <td align="right" class="tdStyle02"><h3 style="font-size:14px;">Easily Found Integrators</h3></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/cross.png" alt="Disabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/cross.png" alt="Disabled Feature" /></td>
                            </tr>
                            <tr>
                              <td align="right" class="tdStyle02"><h3 style="font-size:14px;">Additional Modules Avaliable</h3></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/cross.png" alt="Disabled Feature" /></td>
                            </tr>
                            <tr>
                              <td align="right" class="tdStyle02"><h3 style="font-size:14px;">25+ Payment Gateways Avaliable</h3></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/cross.png" alt="Disabled Feature" /></td>
                            </tr>
                            <tr>
                              <td align="right" class="tdStyle02"><h3 style="font-size:14px;">10+ Supported Control Panels</h3></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/cross.png" alt="Disabled Feature" /></td>
                            </tr>
                            <tr>
                              <td align="right" class="tdStyle02"><h3 style="font-size:14px;">Swift Security Releases</h3></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                            </tr>
                            <tr>
                              <td  style="height:50px;" align="right">&nbsp;</td>
                              <td align="center"><a class="button-grey" href="<?=$site_dir?>/billing-systems/blesta-license.php">Learn More<span></span></a></td>
                              <td align="center"><a class="button-grey" href="<?=$site_dir?>/billing-systems/clientexec-license.php">Learn More<span></span></a></td>
                              <td align="center"><a class="button-orange" href="<?=$site_dir?>/billing-systems/whmcs-license.php">Learn More<span></span></a></td>
                              <td align="center"><a class="button-grey" href="<?=$site_dir?>/billing-systems/whmautopilot-license.php">Learn More<span></span></a></td>
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
