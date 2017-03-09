<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
<?php include_once("../_include/modules/pricing.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$seo_buy_whmcs_title?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<?=$seo_buy_whmcs_keywords?>" />
	<meta name="description" content="<?=$seo_buy_whmcs_description?>" />
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
	<div class="header"><?php print ("$seo_buy_whmcs_main"); ?></div>
</div></div>
<div class="lc-content"><div class="lc-content-holder">

	<div class="lc-content-wrapper-inner" style="padding-right:10px;">
		<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
			
			<td class="lc-content-right" valign="top" style=" padding-left:4px;"><div class="mainC" style="padding-bottom:0px; padding-top:0px;">
			  <div class="cpanelCon" style="height:310px;">
			    <h1>Buy WHMCS</h1>
			    <div class="clr"></div>
			    <p><span class="pstyle01">One of the industries most powerful billing systems, WHMCS is always constantly innovating. This is also indisputably the most popular billing system currently on the market. When it comes to buy WHMCS there are a couple of different ways you can go about purchasing a WHMCS license. Firstly, you could buy WHMCS from a reseller, such as LicenseCube, where you will often find pricing to buy WHMCS licenses or a less expensive price than as if going direct. Alternatively, you could buy WHMCS directly from WHMCS via their website, in which case you may end up spending slightly more to buy WHMCS.</span> </p>
			    <p><span class="pstyle01">Whatever choice you make when you buy WHMCS, you will have the power and flexibility of being a WHMCS license holder. However, we strongly advise that you decide early on, if you want to buy WHMCS directly or via a buy WHMCS reseller such as LicenseCube, as this will prevent you hassle in the future if you want to consolidate all your licenses under one roof.</span></p>
			    </div>
			  <div class="cpanelIMG"><a href="<?=$site_dir?>/billing-systems/whmcs-license.php"><img src="<?=$img_dir?>/landing/whmcs.jpg" style="margin-top:85px; margin-left:30px;" alt="WHMCS Billing System License" /></a></div>
			  <div class="sepLine"></div>
			  <div class="clr"></div>
			  <div class="notificationC">
			    <div class="notificationBox current box boxes1"  id="box1" style="cursor:pointer">
			      <div class="notificationImg box boxes1" style="background:url('<?=$img_dir?>/landing/icons/ico-09.png') no-repeat scroll center center transparent"></div>
			      <div class="notificationText box boxes1"><h2 style="font-size:18px; padding-bottom:0px;"><span class="textStyle02 box boxes1">WHMCS Addons</span></h2>
			        Add new features...</div>
			      </div>
			    <div class="notificationBox box2 boxes"  id="box2" style="cursor:pointer">
			      <div class="notificationImg" style="background:url('<?=$img_dir?>/landing/icons/ico-08.png') no-repeat scroll center center transparent"></div>
			      <div class="notificationText"><h2 style="font-size:18px; padding-bottom:0px;"><span class="textStyle02">WHMCS Reseller</span></h2>
			        Pick the right partner...</div>
			      </div>
			    <div class="notificationBox noMR box3 boxes"  id="box3" style="cursor:pointer">
			      <div class="notificationImg" style="background:url('<?=$img_dir?>/landing/icons/ico-07.png') no-repeat scroll center center transparent"></div>
			      <div class="notificationText"><h2 style="font-size:18px; padding-bottom:0px;"><span class="textStyle02">WHMCS Nulled</span></h2>
					Choose the right path...</div>
			      </div>
			    </div>
			  <div class="clr"></div>
			  
                    
                    
                    <div class="textC" id="boxchage1">
				      <h2>Expand Your WHMCS with WHMCS Addons!</h2>
				      <div class="clr"></div>
				      <p class="pStyle02">When choosing to buy WHMCS, you are not only choosing to purchase a highly automated billing system, but you are also choosing to get access to over one-thousand free addon modules that don't come standardly with WHMCS. These modules are called "WHMCS addons" and they allow you to expand the functionality of WHMCS introducing new features and options directly within the WHMCS billing system. The came come in two flavors, paid and free, dependent on your needs a WHMCS addon that is paid might be more desired. However, the choice is ultimately yours to make.</p>
				      
			        </div>
                    
                    
                    
                    <div class="textC" id="boxchage2" style="display:none">
				      <h2>Picking Your WHMCS Reseller...</h2>
				      <div class="clr"></div>
				      <p class="pStyle02">When it comes to WHMCS Reseller, you will find that there is more than one online. You will have to come to the point where you have to check which features and options your WHMCS reseller provides to compliment the WHMCS license. For example, 24x7 support, fast version access to new versions, and many other things that would set them apart. You also have to choose if your WHMCS reseller is a web hosting provider or an external licensing provider such as LicenseCube.</p>
				      
			        </div>
                    
                    
                    
                    <div class="textC" id="boxchage3" style="display:none">
				      <h2>Get Legal. Make Your Customers Happy!</h2>
				      <div class="clr"></div>
				      <p class="pStyle02">Going the legal way is much better than the illegal way, especially when it comes to your user's data. WHMCS Nulled versions are available online, and are not hard to come by if you know where to look for WHMCS nulled versions. However, when you get a WHMCS nulled version, you are not just risking your reputation online, but rather your customer's too, as well as their credit card, and contact information. So when you are deciding if you should buy WHMCS or get a WHMCS nulled version, you will have to do what is best for you and your customers.</p>
				      
			        </div>
                    
                    
                    
                     <!--Start Table Competition-->
                    
                    <div class="container02">
                      <div class="competition">
                        <div class="competitionTop"></div>
                        <div class="competitionContents">
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td   style="width:253px" align="right">&nbsp;</td>
                              <td   style="width:150px" align="center"><a href="<?=$site_dir?>/billing-systems/clientexec-license.php"><img src="<?=$img_dir?>/landing/table/ClientExec.jpg" alt="ClientExec License" /></a></td>
                              <td  style="width:152px" align="center"><a href="<?=$site_dir?>/billing-systems/whmcs-license.php"><img src="<?=$img_dir?>/landing/table/WHMCS.jpg" alt="WHMCS License" /></a></td>
                              <td  style="width:154px" align="center"><a href="<?=$site_dir?>/billing-systems/blesta-license.php"><img src="<?=$img_dir?>/landing/table/Blesta.jpg" alt="Blesta License" /></a></td>
                              <td  style="width:155px" align="center"><a href="<?=$site_dir?>/billing-systems/whmautopilot-license.php"><img src="<?=$img_dir?>/landing/table/WHMAutoPilot.jpg" alt="WHMAutoPilot License" /></a></td>
                            </tr>
                            <tr>
                              <td  style="width:253px" align="right" class="tdStyle02"><h3 style="font-size:14px;">Branded/Unbranded Versions Available</h3></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/cross.png" alt="Disabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/cross.png" alt="Disabled Feature" /></td>
                            </tr>
                            <tr>
                              <td align="right" class="tdStyle02"><h3 style="font-size:14px;">5+ Years In Development</h3></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                            </tr>
                            <tr>
                              <td align="right" class="tdStyle02"><h3 style="font-size:14px;">Has 25+ Payment Gateways Available</h3></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/cross.png" alt="Disabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/cross.png" alt="Disabled Feature" /></td>
                            </tr>
                            <tr>
                              <td align="right" class="tdStyle02"><h3 style="font-size:14px;">New Features Added On Every Release</h3></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/cross.png" alt="Disabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/cross.png" alt="Disabled Feature" /></td>
                            </tr>
                            <tr>
                              <td align="right" class="tdStyle02"><h3 style="font-size:14px;">Feedback / Bug Suggestion Area</h3></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                            </tr>
                            <tr>
                              <td align="right" class="tdStyle02"><h3 style="font-size:14px;">License Verification URL</h3></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/cross.png" alt="Disabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/check.png" alt="Enabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/cross.png" alt="Disabled Feature" /></td>
                              <td align="center" class="border01"><img src="<?=$img_dir?>/landing/table/cross.png" alt="Disabled Feature" /></td>
                            </tr>
                            <tr>
                              <td  style="height:50px;" align="right">&nbsp;</td>
                              <td align="center"><a class="button-grey" href="<?=$site_dir?>/billing-systems/clientexec-license.php">Learn More<span></span></a></td>
                              <td align="center"><a class="button-orange" href="<?=$site_dir?>/billing-systems/whmcs-license.php">Learn More<span></span></a></td>
                              <td align="center"><a class="button-grey" href="<?=$site_dir?>/billing-systems/blesta-license.php">Learn More<span></span></a></td>
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
