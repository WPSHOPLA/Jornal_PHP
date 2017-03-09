<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/ubersmith.php"); ?>
<?php include_once("../_include/modules/pricing.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$seo_buy_virtuozzo_title?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<?=$seo_buy_virtuozzo_keywords?>" />
	<meta name="description" content="<?=$seo_buy_virtuozzo_description?>" />
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
	<div class="header"><?php print ("$seo_buy_virtuozzo_main"); ?></div>
</div></div>
<div class="lc-content"><div class="lc-content-holder">

	<div class="lc-content-wrapper-inner" style="padding-right:10px;">
		<table width="100%" cellpadding="0" cellspacing="0">
		<tr>

			<td class="lc-content-right" valign="top" style=" padding-left:4px;"><div class="mainC" style="padding-bottom:0px; padding-top:0px;">
			  <div class="cpanelCon" style="height:360px;">
			    <h1>Buy Virtuozzo</h1>
			    <div class="clr"></div>
			    <p class="pstyle01"><span class="pstyle01">When it comes to choosing a virtualization platform, there are none that are superior in resource management and cost than Virtuozzo. Virtuozzo is the most powerful virtualization platform currently on the market, and is made by Parallels. When it comes to buying Virtuozzo, you will find that there is a couple of different ways you can go about doing so. Firstly, you could buy Virtuozzo directly form Parallels. However, please note that more than likely you will not be able to get the same pricing as if you would by going directly via a licensing reseller such as LicenseCube. Alternatively, you could buy Virtuozzo directly from a license reseller.</span></p>

			    <p class="pstyle01"><span class="pstyle01">Whatever you decide on doing when it comes to buying Virtuozzo, you will always have access to excellent support from either the license reseller or the Parallels support team directly. So, rest assured that you're always in good hands when it comes to obtaining support for Virtuozzo.</span></p>

                <div class="lc-service-order" style="padding-top: 25px;">
                    <?php $global_plan = $ubersmith->getPlanByCode('LIN75'); ?>
                    <table width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                        <td valign="middle">
                            <div class="lc-float-right" style="margin-right: 180px;width: 130px;height: 30px;overflow: hidden;"><?=order_link_button(_("Get started today with your Virtuozzo license"));?></div>
                            <div class="lc-service-price1-info"><?=_('Starting at');?></div>
                            <div class="lc-service-price1">$<?=$global_plan->price?><?=_('/mo');?></div>
                        </td>

                    </tr>
                    </table>
                </div>
			    </div>
			  <div class="cpanelIMG"><a href="<?=$site_dir?>/control-panels/parallels-virtuozzo-license.php"><img style="margin-top:70px; margin-left:30px;" src="<?=$img_dir?>/landing/virtuozzo-linux-windows.jpg" width="325" height="154" alt="Buy Virtuozzo" /></a></div>
			  <div class="sepLine"></div>
			  <div class="clr"></div>
			  <div class="notificationC" >
			    <div class="notificationBox current box boxes1"  id="box1"  style="cursor:pointer">
			      <div class="notificationImg box boxes1" style="background:url('<?=$img_dir?>/landing/icons/ico-01.png') no-repeat scroll center center transparent"></div>
			      <div class="notificationText box boxes1"><h2 style="font-size:18px; padding-bottom:0px;"><span class="textStyle02 box boxes1">Virtuozzo Flavors</span></h2>
			       Which is the right version...</div>
			      </div>
			    <div class="notificationBox box2 boxes"  id="box2"  style="cursor:pointer">
			      <div class="notificationImg" style="background:url('<?=$img_dir?>/landing/icons/ico-04.png') no-repeat scroll center center transparent"></div>
			      <div class="notificationText"><h2 style="font-size:18px; padding-bottom:0px;"><span class="textStyle02">Virtuozzo History</span></h2>
			       Why you should choose...</div>
			      </div>
			    <div class="notificationBox noMR box3 boxes"  id="box3"  style="cursor:pointer">
			      <div class="notificationImg" style="background:url('<?=$img_dir?>/landing/icons/ico-07.png') no-repeat scroll center center transparent"></div>
			      <div class="notificationText"><h2 style="font-size:18px; padding-bottom:0px;"><span class="textStyle02">Buy Virtuozzo</span></h2>
			       How to get your Virtuozzo...</div>
			      </div>
			    </div>
			  <div class="clr"></div>

                    <div class="textC" id="boxchage1">
				      <h2>How to pick your Virtuozzo flavor...</h2>
				      <div class="clr"></div>
				      <p class="pStyle02">Everyone wants to be recognized and offer something different. So, why not use Virtuozzo and standout from the crowd. Virtuozzo comes in two flavors, one being Virtuozzo for Linux and the other being Virtuozzo for Windows. Dependent on which Virtuozzo version you choose, you will be able to virtualize Microsoft Windows or almost every major Linux distribution currently available. So when you buy Virtuozzo, please ensure you pick the right Virtuozzo flavor for your needs.</p>

			        </div>

                    <div class="textC" id="boxchage2"  style="display:none">
				      <h2>Once you go Virtuozzo, you never go back...</h2>
				      <div class="clr"></div>
				      <p class="pStyle02">Companies and users alike, who buy Virtuozzo products, have loved them. When you buy Virtuozzo, it's much like buying a sports car that can virtually do anything you'd like. For example, Virtuozzo can virtualize any Linux or Windows operating system ensuring your continued growth. Customers who buy Virtuozzo licenses are generally web hosting providers or ISPs (Internet Service Providers), so when you buy Virtuozzo you're also buying into a symbol of quality and trust.</p>

			        </div>

                    <div class="textC" id="boxchage3" style="display:none">
				      <h2>Buy Virtuozzo today, and take control...</h2>
				      <div class="clr"></div>
				      <p class="pStyle02">When it comes to time to buy Virtuozzo, you can rest assured that you are buying into a solution that is proven and reliable. Unlike other players within the virtualization space, nothing can compete with Virtuozzo or its history. Buy Virtuozzo today, and ensure that your business continues to expand its revenue stream in an ever-changing highly competitive industry. If you don't already have Virtuozzo, buying Virtuozzo will allow you to witness the new revenue stream that your business will generate.</p>

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
