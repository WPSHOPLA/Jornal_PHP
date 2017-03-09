<?php ini_set('display_errors', 1); include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<?php include_once("../_include/modules/kbase-categories.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<title><?=$support_index_page?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<meta name="keywords" content="<?=$support_index_page_keywords?>" />

	<meta name="description" content="<?=$support_index_page_meta_description?>" />

	<meta name="author" content="<?=$author?>" />

	<meta name="copyright" content="<?=$copyright?>" />

	<link href="<?=$img_dir?>/favicon.ico" rel="shortcut icon" />

	<?php $css=""; include_once("../_include/modules/css.php"); ?>

	<?php $java=""; include_once("../_include/modules/java.php"); ?>
    
    <link rel="stylesheet" href="/_include/css/style.css" type="text/css" media="screen" />
	 <script type="text/javascript">
 function inputSearch(){
	if(document.getElementById('search_field').value == 'Search The Knowledge Base...') 
	{document.getElementById('search_field').value = "";}	
 }
 </script>
 <script type="text/javascript" src="<?php echo $js_dir ?>/_include/js-00002/jquery.validate.min.js"></script>
    <script type="text/javascript" src="<?php echo $js_dir ?>/_include/js-00002/validated.method.js"></script>
     <script type="text/javascript" src="/_include/js/password-reminder.js"></script>
     <script type="text/javascript" src="/_include/js/license-reissuance.js"></script>
     <link href="<?php echo $js_dir ?>/_include/css/forms.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="wrapper">
<?php $menu="support"; include_once("../_include/modules/header.php"); ?>

<div class="lc-header-inner"><div class="lc-header-inner-holder">

	<div class="header">Superior Support backed by years of experience; <br /> That's what sets us apart from the competition.</div>

</div></div>

<div class="lc-content"><div class="lc-content-holder">



	<div class="lc-content-wrapper-inner">

		<table width="100%" cellpadding="0" cellspacing="0">

		<tr>

			<td class="lc-content-left" valign="top">



				<?php $left="supportcenter"; $page="support"; include_once("../_include/modules/left.php"); ?>



			</td>

			<td class="lc-content-right" valign="top">



				<div class="rtContents">
    <div class="textBox2">
      <h2>Support Center</h2>
    At LicenseCube, we want to make sure we're in your comfort zone. As such, we've created numerous support resources for you to be able to easily and quickly manage your licenses online. Nevertheless, should you get stuck, please reach out!</div>
     <form  id="formsubmit"  method="post" action="http://kbase.licensecube.com/search.php" onsubmit="return check_form(<?php echo $Language_Search_String; ?>);"> 
 
<div class="searchBox" style=" padding-bottom:6px;">
        <div class="searchBtna"><a rel="nofollow"  onclick="document.getElementById('formsubmit').submit();" href="javascript: return false;"  class="button-orange">Search<span></span></a></div>
        
        <input name="keywords" onclick="document.getElementById('search_field').value = ''" type="text" class="searchField" id="search_field" value="Search The Knowledge Base" style="width:490px; font-size: 16px; color: #808080; padding: 4px 15px;    height: 20px;" />
        
        
    </div>
 
                           
                              </form>
   <div class="spacer"></div>
   
   
    <div class="rtBox" style="padding-top:12px" id="support">
      <div class="textBox3">
        <h2 class="NoBoderBtm" style="padding-bottom:11px">Password Reminder</h2>
      Have you misplaced your original login details? If so, go ahead and input the "Account ID" and "Email Address" information into the form to the right. Finally, you'll be able to retrieve your license details or your billing profile.  <br />
      <div class="spacer"></div>
      
      Should you have any further problems, please get in contact with us by calling (855) GO-LICENSE for additional assistance.</a>
     </div>
      <div class="textBox3 NoMarginRt">
       
		
		<div class="lc-box-error" id="error-box" style="display: none;">
			<p id="error-text" style="padding-bottom:0px"><strong>Oh snap!</strong> Change this and that and try again.</p>
		</div>
        <form id="password-reminder" action="" class="">
          <input type="hidden" value="ForgotPassword" name="app" />
        <ul class="loginStyle">
          <li>
              <label>Account ID <span class="lc-required">*</span></label>
              <input name="textfield2" type="text" class="lc-input required" id="domain" />
          </li>
          <li>
            <label>Email Address <span class="lc-required">*</span></label>
            <input name="email" type="text" class="lc-input required email" id="email" />
          </li>
          <li><label style="margin-top:-6px">Reminder <span class="lc-required">*</span></label>
             
              <select style="width:162px; font-size:12px"  name="which-info" id="which-info" class="lc-input required" >
                  <option value="" selected="selected" disabled="disabled">Please Select...</option>
                  <option value="billing">Billing Access Information</option>
                  <option value="hosting">Hosting/License Information</option>
             </select>
            
          </li>
          <li>
            <a rel="nofollow" style="margin-right:0px"  id="password-reminder-submit" href="#" class="button-orange">EMAIL MY DETAILS<span></span></a>
		  <img src="<?=$img_dir?>/barber_pole.gif" id="barber_pole" width="168" style="margin:10px auto;display:none;float:right;"/>
          </li>
        </ul>
        </form>
      </div>
    </div>
    
    
    
    <div class="rtBox" style="padding-top:12px; display:none" id="reissue">
      <div class="textBox3">
        <h2 class="NoBoderBtm" style="padding-bottom:11px">License Reissuance</h2>
      Using the form located to the right hand side, you'll be able to quickly and easily re-issue your license. This includes all license types that require re-issuance such as; WHMCS, SolusVM, and many others. Should additional assistance be required, please get in contact with us by emailing support@licensecube.com. <br />
     
     </div>
      <div class="textBox3 NoMarginRt">
        
		
		<div class="lc-box-error" id="reissue-error-box" style="display: none;">
			<p id="reissue-error-text" style="padding-bottom:0px"><strong>Oh snap!</strong> Change this and that and try again.</p>
		</div>
        <form id="reissue-form" action="" class="">
          <input type="hidden" name="app" value="ReissueLienses"/>
          <input type="hidden" name="action" value="reissue-license"/>
        <ul class="loginStyle">
          <li>
              <label for="reissue-clientid">Client ID <span class="lc-required">*</span></label>
              <input name="clientid" type="text" class="lc-input required" id="reissue-clientid" />
          </li>
          <li>
            <label for="reissue-licenseID">License Key <span class="lc-required">*</span></label>
            <input name="licenseID" type="text" class="lc-input required licenseID" id="reissue-licenseID" />
          </li>
          <li><label for="reissue-which-info" style="margin-top:-6px">Type <span class="lc-required">*</span></label>
              <select style="width:162px; font-size:12px"  name="which-info" id="reissue-which-info" class="lc-input required" >
                  <option value="" selected="selected" disabled="disabled">Please Select...</option>
                  <option value="whmcs">WHMCS</option>
             </select>
            
          </li>
          <li>
            <a rel="nofollow" style="margin-right:0px"  id="reissue-submit" href="javascript: return false;" class="button-orange">REISSUE LICENSE<span></span></a>
		  <img src="<?=$img_dir?>/barber_pole.gif" id="reissue-barber_pole" width="168" style="margin:10px auto;display:none;float:right;"/>
          </li>
        </ul>
        </form>
      </div>
    </div>
    
    
    
    
    <div class="rtBox" style="padding-top:15px; padding-bottom:15px; display:none" id="loading">
      <div id="load" class="textBox3" style="margin:0 auto; float:none; text-align:center; width:230px !important">
      <div>Processing Your Request...
        	<img src="<?=$img_dir?>/barber_pole.gif" id="barber_pole"  />
           </div>
      </div>
      <div id="success"  style="margin:0 auto; float:none; text-align:center; display:none; width:600px !important">
          <div style='float:left; margin-right:10px;height:20px;'><img src='http://www.licensecube.com/_include/images/success_icon.png'></div><span id="success-new-text">The requested license has been re-issued and noted on your account. Please be advised that we recommend only re-issuing licenses when its absolutely necessary.
          </div>
      <div id="error"  style="margin:0 auto; float:none; text-align:center; display:none; width:600px !important">
          <div style='float:left; margin-right:10px;height:20px;'><img src='http://www.licensecube.com/_include/images/error_icon.png'></div><span id="error-new-text">We apologize; it appears we encountered a technical problem while re-issuing your license. This maybe due to a problem with the upstream provider, please get in contact with us for further assistance.</span></div>      
    </div>
    
    
    
    
  <div class="spacer"></div>
  <div class="rtBox"  style="padding-top:12px">
    <h2 class="NoBoderBtm">Support Quicklinks</h2>
    <div class="quicklinks">
      <ul>
       <li class="" style="text-align:center"><div  style="text-align:center"><a href="javascript: return false;"  onclick="javascript: $('#reissue').show(); $('#support').hide(); $('#loading').hide(); return false;" ><img src="http://www.licensecube.com/_include/css/../images/reissue-license.png" style="margin:0 auto" alt="Reissue License" /></a></div><a href="javascript: return false;" onclick="javascript: $('#reissue').show(); $('#support').hide();$('#loading').hide(); return false;"> Reissue License</a></li>
       
        <li class=""><div  style="text-align:center"><a  href="<?=$site_dir?>/contact/" ><img style="margin:0 auto" alt="Submit Ticket" src="http://www.licensecube.com/_include/css/../images/ticket.png" /></a></div><a href="<?=$site_dir?>/contact/"> Submit Ticket</a></li>
        <li class=""><div style="text-align:center"><a  href="http://my.licensecube.com/" ><img style="margin:0 auto" alt="Account Login" src="http://www.licensecube.com/_include/css/../images/lock.png" /></a></div><a href="http://my.licensecube.com/">Account Login</a></li>
        <li class=""><div style="text-align:center"><a  href="http://kbase.licensecube.com/" ><img style="margin:0 auto" alt="Knowledge Base" src="http://www.licensecube.com/_include/css/../images/kb.png" /></a></div><a href="http://kbase.licensecube.com/">Knowledge Base</a></li>
        <li class=""><div style="text-align:center"><a  href="https://my.licensecube.com/cancellation-process/" ><img style="margin:0 auto" alt="Cancel Account" src="http://www.licensecube.com/_include/css/../images/account.png" /></a></div><a href="https://my.licensecube.com/cancellation-process/">Cancel Account</a></li>       
      </ul>
    </div>
  </div>
  <div class="spacer"></div>
  <div class="rtBox"  style="padding-top:12px">
    <h2 class="NoBoderBtm">Top Five Tutorials</h2>
      <ul class="tutorialStyle">
      	<?php  include_once("../_include/modules/popular-tutorials.php"); ?>
       
      </ul>
  </div>
  </div>
            



			</td>

		</tr>

		</table>
<!--<div class="lc-logos"><img src="<?pkp//$img_dir?>/logos.gif" width="915" height="92" alt="LicenseCube logo" /></div>-->
	</div>



</div></div>

<?php include_once("../_include/modules/footer.php"); ?>
<?php include_once("../_include/modules/additional.php"); ?>
</div>
</body>

</html>