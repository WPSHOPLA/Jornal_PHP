<?php include_once("../_include/modules/config.php"); ?>
<?php include_once("../_include/modules/general.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$contact_index_page?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="<?=$contact_index_page_keywords?>" />
	<meta name="description" content="<?=$contact_index_page_meta_description?>" />
	<meta name="author" content="<?=$author?>" />
	<meta name="copyright" content="<?=$copyright?>" />
	<link href="<?=$img_dir?>/favicon.ico" rel="shortcut icon" />
	<?php $css=""; include_once("../_include/modules/css.php"); ?>
	<?php $java=""; include_once("../_include/modules/java.php"); ?>
    
    
	<script type="text/javascript" src="<?=$js_dir?>/_include/js-00002/jquery.validate.min.js"></script>
    <script type="text/javascript" src="<?=$js_dir?>/_include/js-00002/validated.method.js"></script>
<script type="text/javascript" src="<?=$js_dir?>/_include/js-00002/form.js"></script>
 <link href="<?=$css_dir?>/_include/css/forms.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="wrapper">
<?php $menu="contact"; include_once("../_include/modules/header.php"); ?>
<div class="lc-header-inner"><div class="lc-header-inner-holder">
	<div class="header"><?php print("$contact_message"); ?></div>
</div></div>
<div class="lc-content"><div class="lc-content-holder">

	<div class="lc-content-wrapper-inner">
		<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td class="lc-content-left" valign="top">

				<?php $left="information"; $page="contact"; include_once("../_include/modules/left.php"); ?>

			</td>
			<td class="lc-content-right" valign="top">

				<h1><?=_('Contact Us');?></h1>
				<div class="lc-box">
					<p><?=_('Getting in contact with us is simple. We\'re here to assist you in getting your licensing needs addressed. Simply fill out the below contact form and one of our friendly licensing specialists will be in contact shortly.');?></p>
					<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td class="lc-contact-one" valign="top">
							<h2><?=_('Our Office');?></h2>
							LicenseCube<br />
							9962 Brook Rd #611<br />
							Glen Allen, VA 23059<br />
							United States of America<br />
						</td>
						<td class="lc-contact-two" valign="top">
							<h2><?=_('Email Us');?></h2>
							<?=_('Get in contact with a specific department, by email them at:');?>
							<a href="#"><?=_("sales@licensecube.com")?></a>
							<a href="#"><?=_("billing@licensecube.com")?></a>
							<a href="#"><?=_("support@licensecube.com")?></a>
						</td>
						<td class="lc-contact-three" valign="top">
							<div id="life-chat-online" style="display: none;">
								<h2><?=_('Live Chat');?></h2>
								<?=_('Want to get answers to your questions immediately? Simply click on the below mentioned link, and one of our representatives will be glad to address your questions.');?> <br />
								<a id="live-chat-link" href="#" title="Live Chat"><?=_('click here to start');?></a>
							</div>
							<div id="life-chat-offline">
								<h2><?=_('Call Us');?></h2>
								<?=_('We want to work with every customer to answer their questions as quickly as possible. Please feel free to give us a call at (855) 465-2326 if you have questions.');?><br/>
							</div>
						</td>
					</tr>
					</table>

				</div>
				<div class="lc-spacer"><!-- --></div>
				<div class="lc-box-header">
					<div class="lc-float-left"><h2><?=_('Contact Form');?></h2></div>
					<div class="lc-float-right"><span class="lc-required">*</span> <?=_('required');?></div>
					<div class="lc-clear"><!-- --></div>
				</div>
				<div class="lc-box">

					<div id="form" class="lc-form">
					
                        
                        <div  id="message"></div>
                        
                        <div id="form-contact" style="width:100%; height:360px;">
                            <form  id="forms" action="FormMail.php" method="post" >
                           
                            <table width="100%" border="0" cellspacing="2" cellpadding="2">
                              <tr>
                                <td style="width:32%" align="right"><?=_('First Name:');?><span class="lc-required">*</span></td>
                                <td style="width:68%"> <input type="hidden" value="department" name="sub-to" />
                            <input type="hidden" value="form-type" name="contactform" />
                            <input type="hidden" value="9151256b9beb0df69a0d35b484365fe1" name="id" /><input type="text"   style="width: 220px;" class="lc-input required" value="" name="name" id="name"/></td>
                              </tr>
                              <tr>
                                <td align="right"><?=_('Last Name:');?><span class="lc-required">*</span></td>
                                <td><input type="text" style="width: 220px;"  class="lc-input required" value="" name="lastname" id="lastname"/></td>
                              </tr>
                              <tr>
                                <td align="right"><?=_('Email Address:');?><span class="lc-required">*</span></td>
                                <td><input type="text" style="width: 220px;" class="lc-input required email" value="" name="email" id="email"/></td>
                              </tr>
                              <tr>
                                <td align="right"><?=_('Phone:');?></td>
                                <td><input style="width: 220px;" class="lc-input phone"  type="text" value="" name="phone" id="phone" /></td>
                              </tr>
                              <tr>
                                <td align="right"><?=_('Department:');?><span class="lc-required">*</span></td>
                                <td><select class="lc-input required" style="width: 230px;" name="department" id="department">
                                  
                                  <option value="" selected="selected" disabled="disabled"><?=_('Please Choose...');?></option>
                                  
                                  <option value="Sales Question"><?=_('Sales Question');?></option>
                                  
                                  <option value="Support Question"><?=_('Support Question');?></option>
                                  
                                  <option value="Billing Question"><?=_('Billing Question');?></option>
                                  
                                  <optgroup label="---------------------"><option style="display:none">...</option></optgroup> 
                                  <option value="Partner Inquiry"><?=_('Partner Inquiry');?></option>
                                  
                                  <option value="Abuse Desk"><?=_('Abuse Desk');?></option>
                                    
                                  </select>
                                  </td>
                              </tr>
                              <tr>
                                <td align="right" valign="top"><?=_('Message:');?><span class="lc-required">*</span></td>
                                <td>
                                  <textarea name="message" style="width:280px;max-width:280px;max-height:130px;" class="lc-input required"  cols="45" rows="5"></textarea></td>
                              </tr>
                            </table>
                            
                           
                            
                            
                            
                            <div class="lc-form-buttons" >
                                <div id="button-submit">
                               <!-- <button type="submit" id="contact" style="margin: 0px; padding: 0px; background: none; vertical-align: middle; border: none;">
                                    <img src="<?=$img_dir?>/submit-form-<?=getActualPage()?>.png" alt="<?=_('Get in contact with us!');?>"  />
                                </button>-->
                                
                                <a rel="nofollow" id="contact" href="#" onclick="$('#forms').submit(); return false;"  class="button-orange"><?= _('Submit Form')?><span></span></a>
                                </div>
                                <div id="loader" style="display:none">
                                    <img alt="Loading" src="<?=$img_dir?>/barber_pole.gif"/>
                                </div>
                            </div>
                            </form>
                        </div>
                        
                        <div id="thankyou" class="lc-form-thankyou" style="display:none;  height:280px;">
                        
                        <span class="lc-form-thankyou-message"><?=_('Thank You! Your message was successfully sent.');?></span><br />
                        <?=_('Thank you for submitting your inquiry to us. One of our licensing specialists will be in contact shortly to address your questions. Within the next few moments, you should get A Ticket ID that you will be able to reference if needed.');?>
                        
                        </div>
                        
                        
                        
                        
                  	</div>

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
