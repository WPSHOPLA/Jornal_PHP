<?php ini_set('display_errors', 1); include_once("../../_include/modules/config.php"); ?>
<?php include_once("../../_include/modules/general.php"); ?>
<?php include_once("../../_include/modules/kbase-categories.php"); ?>
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

	<?php $css=""; include_once("../../_include/modules/css.php"); ?>

	<?php $java=""; include_once("../../_include/modules/java.php"); ?>
    
    <link rel="stylesheet" href="/_include/css/style.css" type="text/css" media="screen" />
	 <script type="text/javascript">
 function inputSearch(){
	if(document.getElementById('search_field').value == 'Search The Knowledge Base...') 
	{document.getElementById('search_field').value = "";}	
 }
 </script>
 <script type="text/javascript" src="<?php echo $js_dir ?>/_include/js-00002/jquery.validate.min.js"></script>
    <script type="text/javascript" src="<?php echo $js_dir ?>/_include/js-00002/validated.method.js"></script>
     <script type="text/javascript" src="<?php echo $js_dir ?>/_include/js/password-reminder.js"></script>
     <link href="<?php echo $js_dir ?>/_include/css/forms.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="wrapper">
<?php $menu="support"; include_once("../../_include/modules/header_new.php"); ?>

<div class="lc-header-inner"><div class="lc-header-inner-holder">

	<div class="header"><?php print("$support_message"); ?></div>

</div></div>

<div class="lc-content"><div class="lc-content-holder">



	<div class="lc-content-wrapper-inner">

		<table width="100%" cellpadding="0" cellspacing="0">

		<tr>

			<td class="lc-content-left" valign="top">



				<?php $left="supportcenter"; $page="support"; include_once("../../_include/modules/left.php"); ?>



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
    <div class="rtBox">
      <div class="textBox3">
        <h3>Password Reminder</h3>
      If you have lost your original login details for your hosting plan or your billing system, please enter your domain name and email address below and we will send your logins to you instantly. <br />
      <div class="spacer"></div>
      If you have changed your password since joining SiteServing, your password will need to be reset. To reset your password, please contact <a href="#">support@siteserving.com</a> or <a href="#">submit a ticket.</a></div>
      <div class="textBox3 NoMarginRt">
        <h3>E mail my Logins</h3>
        <form id="password-reminder" action="" class="" onsubmit="return false;" >
        
        <ul class="loginStyle">
          <li><label>Account ID</label>
              <input name="textfield2" type="text" class="lc-input required" id="domain" />
          </li>
          <li>
            <label>Email Address </label>
            <input name="email" type="text" class="lc-input required email" id="email" />
          </li>
          <li><label>Reminder</label>
             
              <select style="width:162px; font-size:12px"  name="which-info" id="which-info" class="lc-input required" >
                  <option value="0" selected="selected" disabled="disabled">Please Select...</option>
                  <option value="billing">Billing Access Information</option>
                  <option value="hosting">Hosting/License Information</option>
             </select>
            
          </li>
          <li>
            <a rel="nofollow" style="margin-right:0px"   onclick="$('#password-reminder').submit()" href="javascript: return false;"  class="button-orange">E mail my login<span></span></a>
          </li>
        </ul>
        </form>
      </div>
    </div>
  <div class="spacer"></div>
  <div class="rtBox">
    <h2 class="NoBoderBtm">Support Quicklinks</h2>
    <div class="quicklinks">
      <ul>
       <li class="" style="text-align:center"><div  style="text-align:center"><a  href="http://<?php if(getActualPage()=='es') echo "es."?><?php if(getActualPage()=='pt') echo "pt."?>blog.licensecube.com" title="<?=_('LicenseCube Blog');?>"><img src="http://www.licensecube.com/_include/css/../images/blog.png" style="margin:0 auto" alt="Blog" /></a></div><a href="http://<?php if(getActualPage()=='es') echo "es."?><?php if(getActualPage()=='pt') echo "pt."?>blog.licensecube.com" title="<?=_('LicenseCube Blog');?>"> Blog</a></li>
       
        <li class=""><div  style="text-align:center"><a  href="<?=$site_dir?>/contact/" ><img style="margin:0 auto" alt="Submit Ticket" src="http://www.licensecube.com/_include/css/../images/ticket.png" /></a></div><a href="<?=$site_dir?>/contact/"> Submit Ticket</a></li>
        <li class=""><div style="text-align:center"><a  href="http://my.licensecube.com/" ><img style="margin:0 auto" alt="Account Login" src="http://www.licensecube.com/_include/css/../images/lock.png" /></a></div><a href="http://my.licensecube.com/">Account Login</a></li>
        <li class=""><div style="text-align:center"><a  href="http://kbase.licensecube.com/" ><img style="margin:0 auto" alt="Knowledge Base" src="http://www.licensecube.com/_include/css/../images/kb.png" /></a></div><a href="http://kbase.licensecube.com/">Knowledge Base</a></li>
        <li class=""><div style="text-align:center"><a  href="#" ><img style="margin:0 auto" alt="Cancel Account" src="http://www.licensecube.com/_include/css/../images/account.png" /></a></div><a href="#">Cancel Account</a></li>       
      </ul>
    </div>
  </div>
  <div class="spacer"></div>
  <div class="rtBox">
    <h2 class="NoBoderBtm">Top five tutorials</h2>
      <ul class="tutorialStyle">
      	<?php  include_once("../../_include/modules/popular-tutorials.php"); ?>
       
      </ul>
  </div>
  </div>
            



			</td>

		</tr>

		</table>
<!--<div class="lc-logos"><img src="<?pkp//$img_dir?>/logos.gif" width="915" height="92" alt="LicenseCube logo" /></div>-->
	</div>



</div></div>

<?php include_once("../../_include/modules/footer.php"); ?>
<?php include_once("../../_include/modules/additional.php"); ?>
</div>
</body>

</html>