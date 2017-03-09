<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$company_top10_page?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<?=$company_top10_page_keywords?>" />
	<meta name="description" content="<?=$company_top10_page_meta_description?>" />
	<meta name="author" content="<?=$author?>" />
	<meta name="copyright" content="<?=$copyright?>" />
	<link href="<?=$img_dir?>/favicon.ico" rel="shortcut icon" />
	<?php $css=""; include_once("../_include/modules/css.php"); ?>
	<?php $java=""; include_once("../_include/modules/java.php"); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="http://www.licensecube.com/responsive.css" rel="stylesheet" type="text/css" />    

    <style type="text/css">
	/*Top Reason*/
	.top-reason-back{
	background-color:#ECECEC;
	background-image:url(<?php echo $img_dir?>/top-reason/backgrd.jpg);
	width:634px;
	padding:20px;
	margin-bottom:10px;
	padding-bottom:10px;
	border: 1px solid #D5D5D5;
	background-repeat:repeat-x;
}
	.reason-line{
		border-bottom-width: 1px;
		border-bottom-style: solid;
		border-bottom-color: #D5D5D5;
		height:1px;
		margin-left:-25px;
		margin-bottom:3px;
	}
	@media only screen and (max-width: 682px){
	.top-reason-back {width:100%; padding:0;}
	.reason-line{border-bottom: solid 1px #F4F4F4; height:1px; margin:0px;}
	}
	@media only screen and (min-width: 682px) and (max-width: 982px) {
	.top-reason-back {width:100%; padding:0;}
	.reason-line{border-bottom: solid 1px #F4F4F4; height:1px; margin:0px;}
	}
	</style>
</head>
<body>
<div class="wrapper">
<?php $menu="about"; include_once("../_include/modules/header.php"); ?>
<div class="lc-header-inner"><div class="lc-header-inner-holder">
	<div class="header"><?=$company_top10_reasons_page?></div>
</div></div>
<div class="lc-content"><div class="lc-content-holder">
	<div class="lc-content-wrapper-inner">
		<table style="width:100%" cellpadding="0" cellspacing="0">
		<tr>
			<td class="lc-content-left" valign="top">
				<?php $left="information"; $page="whychoose"; include_once("../_include/modules/left.php"); ?>
			</td>
			<td class="lc-content-right" valign="top">
				<h1><?=_("10 Reasons To Choose LicenseCube")?></h1>
				
                				
                <p><?=_("There are so many reasons to choose LicenseCube. In fact, there where so many, that we couldn't even fit them all into one page. So, we decided to just stick with the top 10 reasons why you should choose LicenseCube over the competition.")?></p>
                           
		    <div class="top-reason-back">
                  <table style="width:100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td style="width:9%; text-align:right" rowspan="2" valign="top"><img src="<?=$js_dir?>/_include/gui/top-reason/reason1.png" width="56" height="53" alt="Reason1" /></td>
                      <td style="width:91%; height:32px;"><h2 style="margin-left:15px; margin-bottom:3px;"><?=_("Instant License Activation.")?></h2>
                      <div class="reason-line"></div>
                      </td>
                    </tr>
                    <tr>
                      <td style="padding-left:15px;"><p><?=_("Waiting on licenses to be activated is something that can only be confined to the history books of the Internet. At LicenseCube we ensure that ever-single license that we activate, is active and ready to use within seconds after your order has been completed.  This is one of the main features that sets LicenseCube apart from our competitors.")?></p> </td>
                    </tr>
                  </table>
                </div>
                
                <div class="top-reason-back">
                  <table style="width:100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td style="width:9%; text-align:right"  rowspan="2"  valign="top"><img src="<?=$js_dir?>/_include/gui/top-reason/reason2.png" width="56" height="53" alt="Reason2" /></td>
                      <td style="width:91%; height:32px;"><h2 style="margin-left:15px; margin-bottom:3px;"><?=_("Price Match Guarantee.")?></h2>
                      <div class="reason-line"></div>
                      </td>
                    </tr>
                    <tr>
                      <td style="padding-left:15px;"><p><?=_("We understand that everyone is trying to make a living within the market; however, we also understand that our end customers want to get the best deal they can, to ensure that their rate is not only competitive, but also is backed with the industry's best support. This is why we not only match prices, but also ensure you get that low price, combined with the best support possible.")?> </p> </td>
                    </tr>
                  </table>
                </div>
                
                <div class="top-reason-back">
                  <table style="width:100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td style="width:9%; text-align:right" rowspan="2"  valign="top"><img src="<?=$js_dir?>/_include/gui/top-reason/reason3.png" width="56" height="53" alt="Reason3" /></td>
                      <td style="width:91%; height:32px;"><h2 style="margin-left:15px; margin-bottom:3px;"><?=_("Automated Bulk Discount Pricing.")?></h2>
                      <div class="reason-line"></div>
                      </td>
                    </tr>
                    <tr>
                      <td style="padding-left:15px;"><p><?=_("When it comes to discounts, we don't hold back when it comes to finding you the best deals. This is why at LicenseCube all of our discounts are automated. Once you reach a certain discount threshold, you are automatically awarded the discount tier that you have reached, no questions asked. On some discount tiers, you are also entitled to free credits which are provided as an added benefit just for being a LicenseCube customer.")?></p> </td>
                    </tr>
                  </table>
                </div>
                
                <div class="top-reason-back">
                  <table style="width:100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td style="width:9%; text-align:right" rowspan="2" valign="top"><img src="<?=$js_dir?>/_include/gui/top-reason/reason4.png" width="56" height="53" alt="Reason4" /></td>
                      <td style="width:91%; height:32px;"><h2 style="margin-left:15px; margin-bottom:3px;"><?=_("24/7 Technical Support")?></h2>
                      <div class="reason-line"></div>
                      </td>
                    </tr>
                    <tr>
                      <td style="padding-left:15px;"><p><?=_("Tired of waiting for your support to wake up? At LicenseCube we have a 24/7 support department that is dedicated to ensuring that you have the best in class service available. Our dedicated support team is made up of internet professionals who all have web hosting and/or software licensing experience from companies such as Symantec, Nokia, Microsoft, and other leading software vendors.")?> </p> </td>
                    </tr>
                  </table>
                </div>
                
                <div class="top-reason-back">
                  <table style="width:100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td style="width:9%; text-align:right" rowspan="2"  valign="top"><img src="<?=$js_dir?>/_include/gui/top-reason/reason5.png" width="56" height="53" alt="Reason5" /></td>
                      <td style="width:91%; height:32px;"><h2 style="margin-left:15px; margin-bottom:3px;"><?=_("Free License Installations")?></h2>
                      <div class="reason-line"></div>
                      </td>
                    </tr>
                    <tr>
                      <td style="padding-left:15px;"><p><?=_("Have you ever needed help installing a piece of software, but didn't know where to ask for help? Well, the waiting frustration is over. When this happens, simply get in contact with the LicenseCube support team and we'll handle the whole installation process for you.  You will then have a turn-key solution and will be able to login and start using your new license right away. At LicenseCube we want to make it as simple as possible.")?></p> </td>
                    </tr>
                  </table>
                </div>
                
                <div class="top-reason-back">
                  <table style="width:100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td style="width:9%; text-align:right" rowspan="2"  valign="top"><img src="<?=$js_dir?>/_include/gui/top-reason/reason6.png" width="56" height="53" alt="Reason6" />  </td>
                      <td style="width:91%; height:32px;"><h2 style="margin-left:15px; margin-bottom:3px;"><?=_("Multiple Language Support")?></h2>
                      <div class="reason-line"></div>
                      </td>
                    </tr>
                    <tr>
                      <td style="padding-left:15px;"><p><?=_("English not your native language? No problem, we can handle that. At LicenseCube we want to make it simple for you, so we provide all correspondence in three languages. From welcome emails, to status updates, everything can be in your native language. Currently, the languages that we support are English, Spanish and Portuguese. Additionally, our support department can speak Russian on a case-by-case basis.")?> </p> </td>
                    </tr>
                  </table>
                </div>
                
                <div class="top-reason-back">
                  <table style="width:100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td style="width:9%; text-align:right" rowspan="2" valign="top"><img src="<?=$js_dir?>/_include/gui/top-reason/reason7.png" width="56" height="53" alt="Reason7" /></td>
                      <td style="width:91%; height:32px;"><h2 style="margin-left:15px; margin-bottom:3px;"><?=_("Money Back Guarantee")?></h2>
                      <div class="reason-line"></div>
                      </td>
                    </tr>
                    <tr>
                      <td style="padding-left:15px;"><p><?=_("Ever had a product that you were not 100% satisfied with and on top of that had problems returning it?  At LicenseCube, we make things simple for our clients.  If you are not 100% satisfied with the product that you purchased from us, we'll be glad to refund it, no questions asked.")?> </p> </td>
                    </tr>
                  </table>
                </div>
                
                <div class="top-reason-back">
                  <table style="width:100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td style="width:9%; text-align:right" rowspan="2"  valign="top"><img src="<?=$js_dir?>/_include/gui/top-reason/reason8.png" width="56" height="53" alt="Reason8" /></td>
                      <td style="width:91%; height:32px;"><h2 style="margin-left:15px; margin-bottom:3px;"><?=_("Free RESTful API Access")?></h2>
                      <div class="reason-line"></div>
                      </td>
                    </tr>
                    <tr>
                      <td style="padding-left:15px;"><p><?=_("Making things simple is what we like to do at LicenseCube. This is why we've developed a fully automated licensing platform, which you can interface with our modern and streamlined API built upon REST standards. Using our API, you can order any license at any time, day or night, and it will be activated instantly.  An email will then be dispatched, providing you all the necessary information to get started on using your license.")?> </p> </td>
                    </tr>
                  </table>
                </div>
                
                <div class="top-reason-back">
                  <table style="width:100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td style="width:9%; text-align:right" rowspan="2"  valign="top"><img src="<?=$js_dir?>/_include/gui/top-reason/reason9.png" width="56" height="53" alt="Reason9" /></td>
                      <td style="width:91%; height:32px;"><h2 style="margin-left:15px; margin-bottom:3px;"><?=_("Free API Billing System Modules")?></h2>
                      <div class="reason-line"></div>
                      </td>
                    </tr>
                    <tr>
                      <td style="padding-left:15px;"><p><?=_("Have an existing billing system? Not a problem.  You can now use one of our many pre-built billing system modules, which will allow you to get connected and running within minutes, not days. The best part about the billing system modules is that they are free.  We don't charge for them like our competition. We want to make the whole process as easy and streamlined as possible.")?> </p> </td>
                    </tr>
                  </table>
                </div>
                
                <div class="top-reason-back">
                  <table border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td style="width:9%; text-align:right" rowspan="2" valign="top"><img src="<?=$js_dir?>/_include/gui/top-reason/reason10.png" width="56" height="53" alt="Reason10" /></td>
                      <td style="width:91%; height:32px;" ><h2 style="margin-left:15px; margin-bottom:3px;"><?=_("Industry Widest License Selection")?></h2>
                      <div class="reason-line"></div>
                      </td>
                    </tr>
                    <tr>
                      <td style="padding-left:15px;"><p><?=_("Being able to provide the best support and automation is no longer the most important factor if you are not also able to provide the widest selection. This is why we provide you with over twenty-five (25+) different types of licenses that you can choose from; ranging from Billing Systems, Control Panels, right down to resource utilities such as Ksplice, and CloudLinux. Best of all, these are available directly from our website and from our RESTful API, and are all able to be instantly activated. No more waiting or wondering.")?> </p> </td>
                    </tr>
                  </table>
                </div>
                
			</td>
		</tr>
		</table>
	</div>
</div></div>
<div class="push"></div>
<?php include_once("../_include/modules/footer.php"); ?>
<?php include_once("../_include/modules/additional.php"); ?>
</div>
</body>
</html>
