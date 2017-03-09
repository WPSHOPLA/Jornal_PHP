<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/kbase-categories.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$company_api_page?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<?=$company_api_page_keywords?>" />
	<meta name="description" content="<?=$company_api_page_meta_description?>" />
	<meta name="author" content="<?=$author?>" />
	<meta name="copyright" content="<?=$copyright?>" />
	<link href="<?=$img_dir?>/favicon.ico" rel="shortcut icon" />
	<?php $css=""; include_once("../_include/modules/css.php"); ?>
	<?php $java=""; include_once("../_include/modules/java.php"); ?>
       
	<script type="text/javascript" src="<?=$js_dir?>/_include/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="<?=$js_dir?>/_include/js/validated.method.js"></script>
    <script type="text/javascript" src="<?=$js_dir?>/_include/js/form.js"></script>
    <link href="<?=$js_dir?>/_include/css/forms.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/_include/css/style.css" type="text/css" media="screen" />
	
    <style type="text/css">
	#download ul{ list-style-image: url(icon.png);}
	.tipy-size {color:#8D808A}
	
	</style>
</head>

<body>
<div class="wrapper">
<?php $menu="support"; include_once("../_include/modules/header.php"); ?>

<div class="lc-header-inner"><div class="lc-header-inner-holder">

	<div class="header"><?php print("$api_message_billing_modules"); ?></div>

</div></div>

<div class="lc-content"><div class="lc-content-holder">
	<div class="lc-content-wrapper-inner">
		<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td class="lc-content-left" valign="top">
				<?php $left="supportcenter"; $page="api"; include_once("../_include/modules/left.php"); ?>
			</td>
			<td class="lc-content-right" valign="top">

				<h1>Billing System Modules</h1>
				<div >
			
					<p>At LicenseCube we want to make it easy for hosting resellers, providers, and end users to interact with us. Making changes or obtaining a new license now is super-easy. In fact, it can even be done via your billing system with our free to use billing system modules. The supported billing systems include; WHMCS, Ubersmith, and Blesta.</p>
					
	 			   <p>Please note, that sub-reselling isn't allowed. This module is designed for direct integration with the end-user billing systems only. If you have any questions, please email &#115;&#97;&#108;&#101;&#115;&#64;&#108;&#105;&#99;&#101;&#110;&#115;&#101;&#99;&#117;&#98;&#101;&#46;&#99;&#111;&#109; for additional information.</p>
	     	    </div>
				<div class="lc-spacer"><!-- --></div>            

                <div class="lc-box" style="height:160px;">
	<h2>WHMCS</h2>
					<div>
                    <img src="<?=$img_dir?>/screenshots_api/whmcs.jpg" alt="WHMCS Billing System Module" width="202" height="141" style="float:right; margin-right:14px; margin-top:-14px; margin-left:14px;" />LicenseCube integrates with WHMCS via a couple of modules. The integration makes it easy for customers using WHMCS to purchase licenses directly via their WHMCS system without having to place an order directly through our website.
					 <div class="download">
           	        <ul class="lc-list1" style="margin-top:10px;">
                        	<li><a href="<?=$api_module_whmcs?>"><?=$api_module_whmcs_text?></a></li>
                            <!--<li><a href="<?=$api_module_whmcs_guide?>"><?=$api_module_whmcs_guide_text?></a><span class="tipy-size"> <?=$api_module_whmcs_guide_text_size?></span></li>-->
                        </ul>
                     </div>
					</div>
		    </div>

            
            <div class="lc-spacer"><!-- --></div>
            
        <?php
/*           
     
            <div class="lc-box">
	<h2>ClientExec</h2>
					<div>
                    <img src="<?=$img_dir?>/screenshots_api/clientexec.jpg" alt="ClientExec Billing System Module" width="202" height="141" style="float:right; margin-right:14px; margin-left:14px;" />ClientExec is one of the more popular billing systems out there. So now, you can place an order for a license with any of your VPS or Dedicated server purchases! No more manual tasks involved, we want to save you time and money!<br />
					  <div id="download">
           	        <ul class="lc-list1"  style="margin-top:10px;"> 
                        	<li><a href="<?=$api_module_clientexec?>"><?=$api_module_clientexec_text?></a></li>
                            <li><a href="<?=$api_module_clientexec_guide?>"><?=$api_module_clientexec_guide_text?></a><span class="tipy-size"> <?=$api_module_clientexec_guide_text_size?></span></li>
                        </ul>
                     </div>
				</div>
		    </div>
            

            <div class="lc-spacer"><!-- --></div>
            

            <div class="lc-box">
	<h2>Blesta</h2>
					<div>
                    <img src="<?=$img_dir?>/screenshots_api/blesta.jpg" alt="Blesta Billing System Module" width="202" height="141" style="float:right; margin-right:14px; margin-left:14px;" />Blesta is truly committed to openness, and we know first hand! When building our modules, we found nothing but awesome support and guidance! Blesta is truly an amazing software application, that now can provide licenses powered by LicenseCube!<br />
			    <div id="download">
           	        <ul class="lc-list1"  style="margin-top:10px;">
                        	<li><a href="<?=$api_module_blesta?>"><?=$api_module_blesta_text?></a></li>
                            <li><a href="<?=$api_module_blesta_guide?>"><?=$api_module_blesta_guide_text?></a><span class="tipy-size"> <?=$api_module_blesta_guide_text_size?></span></li>
                        </ul>
                </div>
				</div>
		    </div>
            
 */ ?>
            <div class="lc-spacer"><!-- --></div>
            <div class="lc-box"  style="height:160px;">
	<h2>Ubersmith</h2>
					<div>
                    <img src="<?=$img_dir?>/screenshots_api/ubersmith.jpg" alt="Ubersmith Billing System Module" width="202" height="141" style="float:right; margin-right:14px; margin-left:14px; margin-top:-14px;" /> One of the most popular billing systems amongst hosting providers, LicenseCube/Ubersmith integration presents a wide array of new licensing options and features. Easily purchase any license when you are provisioning your clients!<br />
			    <div class="download">
           	        <ul class="lc-list1"  style="margin-top:10px;">
                        	<li><a href="<?=$api_module_ubersmith?>"><?=$api_module_ubersmith_text?></a></li>
                            <!--<li><a href="<?=$api_module_ubersmith_guide?>"><?=$api_module_ubersmith_guide_text?></a><span class="tipy-size"> <?=$api_module_ubersmith_guide_text_size?></span></li>-->
                        </ul>
                </div>
				</div>
		    </div>
<?php /*
            <div class="lc-spacer"><!-- --></div>
            <div class="lc-box">
	<h2>HostBill</h2>
					<div>
                    <img src="<?=$img_dir?>/screenshots_api/hostbill.jpg" alt="HostBill Billing System Module" width="202" height="141" style="float:right; margin-right:14px; margin-left:14px;" />Easily accomplish full license automation by using the LicenseCube/HostBill modules. They provide a wide array of feature rich licenses that can be instantly activated! They save you money, so you no longer have to worry about manual license provisioning.<br />
			    <div id="download">
           	        <ul class="lc-list1"  style="margin-top:10px;">
                        	<li><a href="<?=$api_module_hostbill?>"><?=$api_module_hostbill_text?></a></li>
                            <li><a href="<?=$api_module_hostbill_guide?>"><?=$api_module_hostbill_guide_text?></a><span class="tipy-size"> <?=$api_module_hostbill_guide_text_size?></span></li>
                        </ul>
                </div>
				</div>
		    </div>
*/ ?>
            <div class="lc-spacer"><!-- --></div>
             <div class="lc-box">
	<h2>Custom API Integration</h2>
					<div>
                   Are you using a custom billing system, or perhaps your billing system isn't currently supported using the preconfigured billing system modules? No worries; you may download our easy and straightforward API integration guide! There, you will be able to fully integrate any third-party application with our API to automate your licensing needs.<br />
			    <div class="download">
           	        <ul class="lc-list1"  style="margin-top:10px;">
                            <li><a href="<?=$api_module_general?>"><?=$api_module_general_text?></a><span class="tipy-size"> <?=$api_module_general_size?></span></li>
                        </ul>
                </div>
				</div>
		    </div>
              <div class="lc-spacer"><!-- --></div>
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