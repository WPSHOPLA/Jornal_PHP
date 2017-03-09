
				<div id="tabc3" class="lc-box" style="display:none">



					<div class="lc-form-note">

						<p  style="text-align:left"><strong><?=_('To cancel your license, please fill out the below mentioned form.</strong>  Please note, that this license must be within your account for it to be canceled. Additionally, if your account information doesn\'t match the information provided, your license will not be canceled.');?></p>
                        
					</div>
                    <div  class="lc-box-ok login-message" style="display:none">

						<span  class="name-login"></span><?=_(', thank you for logging in to manage your licenses. Below, you will see the list of licenses that are currently available for you to cancel.');?><br />
                       
					</div>

					<div id="form3" class="lc-form">

						
                    
                    <div id="form-contact-cancel-license" style="width:100%; ">
                    
                                      
                    
                    
                    
                    <form   id="login2" action="https://my.licensecube.com/lc-api/license_update.php"  method="post" >
                        <div  class="message-login">

                   		</div>
                        
                        
                        <table width="100%" border="0" cellspacing="2" cellpadding="2">
                          
                         
                          
                          
                          <tr>
                            <td style="width:227px; text-align:right"><label ><?=_('Email Address:');?></label><span class="lc-required">*</span></td>
                            <td><input name="login-form" id="login-form-2" type="hidden" value="installation" />
                            <input type="text" style="width: 220px;" class="lc-input required email" value="" name="email" id="email-2"/>
                            <a rel="colorbox[forms-email2]" href="/_include/popups/forms-email.php?iframe=true&amp;width=500&amp;height=180"> 
                          			<img class="lc-question-icon"  src="http://content.licensecube.com/_include/gui/questionmark.png"  style="padding-bottom: 6px;" alt="2Questions1"  />
                                </a></td>
                          </tr>
                          <tr>
                            <td style="text-align:right"><label for="password-2">Password:</label><span class="lc-required">*</span></td>
                            <td><input type="password" style="width: 220px;" class="lc-input required" value="" name="password" id="password-2"/>
                            <a rel="colorbox[forms-password2]" href="/_include/popups/forms-password.php?iframe=true&amp;width=500&amp;height=180"> 
                          			<img class="lc-question-icon"  src="http://content.licensecube.com/_include/gui/questionmark.png"  style="padding-bottom: 6px;" alt="2Questions2"  />
                                </a></td>
                          </tr>
                          
                           
                          </table>
                        
                       
                        
                        <div class="lc-form-buttons" >
                            <div class="button-submit">
                            <!--<button type="submit"  style="margin: 0px; padding: 0px; background: none; vertical-align: middle; border: none;">
                                <img src="http://content.licensecube.com/_include/gui/validate-login-license-form-<?=getActualPage();?>.png" alt="<?=_('Log in');?>"  />
                            </button>-->
                             <a rel="nofollow"  href="javascript: return false;" onclick="$('#login2').submit();"  class="button-orange"><?= _('Validate Login')?><span></span></a>
                            </div>
                            <div class="loader" style="display:none">
                                <img alt="Loading" src="https://my.licensecube.com/license-process/_include/gui/barber_pole.gif"  style="width:153px; height:19px; margin-top:6px; " />
                            </div>
                        </div>
                        
                        
                        
                        
                        </form>
                    
                    
                    
                    
                    <div id="client-license-cancel" style="display:none">
                        	<div class="lc-box-header" style="border-bottom:1px solid #D5D5D5">
                            	<div class="lc-float-left">
                                	<h2 onclick='$("#client-license-cancel #lc-box").slideDown("normal");' style='cursor:pointer'> Cancel License </h2>
                                </div>
                            <div class="lc-clear"></div>
                            </div>
                        	<div class="lc-box" >
                       			 <ul  style="color:#2390B5; cursor:pointer">
                       		<li></li>
                    			</ul>
                        	</div>
                        </div>
                    
                     <div  class="message" style="padding-right: 20px;">

                    </div>
                    
                        <br />
                    
                        <form   id="cancel-license"  style="display:none" action="https://my.licensecube.com/lc-api/license_update.php" method="post" >
                         <input name="lc_sess_id"  id="lc_sess_id-2" type="hidden" value="" /> 
                        <input name="pack_id"  id="pack_id-2" type="hidden" value="" />
                        <input type="hidden" value="cancel" name="action" />
                        
                       <table width="100%" border="0" cellspacing="2" cellpadding="2">
                         
                        
                         
                         
                           <tr id="tr-type-license-id-2" style="display:none">
                            <td style="width:227px; text-align:right"><label for="license-type-2"><?=_('Type of License:');?></label><span class="lc-required">*</span></td>
                            <td>
                             <div  style="float:left;" id="type-of-license-2">
                            
                            <select class="lc-input required"  name="license-type" id="license-type-2" >
                              <option selected="selected" disabled="disabled" value=""> <?=_('Please Select...');?></option>
                            </select>
                            </div>
                             <a style="float:left; margin-top:2px;"  rel="colorbox[forms-type-license2]" href="/_include/popups/forms-type-license.php?iframe=true&amp;width=500&amp;height=180"> <img class="lc-question-icon" src="http://content.licensecube.com/_include/gui/questionmark.png" style="padding: 1px 6px 6px 8px;" alt="2Questions3" /></a>
                           <img id="cancel-loading-licenses" src="http://content.licensecube.com/_include/gui/ajax-loader.gif" style="padding-top: 6px; display: none;" alt="Loading"/>
                                
                             </td>
                          </tr>
                          
                           <tr id="tr-license-id-2" style="display:none">
                            <td  style="text-align:right"><label for="license-id-2"><?=_('License ID:');?></label><span class="lc-required">*</span></td>
                            <td><input type="text" style="width: 220px;" class="lc-input licenseID" value="" name="license-id" id="license-id-2"/>
                            <a rel="colorbox[forms-licenseID1]" href="/_include/popups/forms-licenseID.php?iframe=true&amp;width=500&amp;height=180"> 
                          			<img class="lc-question-icon"  src="http://content.licensecube.com/_include/gui/questionmark.png"  style="padding-bottom: 6px;" alt="2Questions4"  />
                                </a></td>
                          </tr>
                          
                                                 
                        
                         
                         <tr id="tr-current-ip-2" style="display:none">
                            <td style="text-align:right"><label for="current-ip-2" ><?=_('Current IP Address:');?></label><span class="lc-required">*</span></td>
                            <td><input disabled="disabled" type="text" style="width: 220px;" class="lc-input ip-address" value="" name="current-ip" id="current-ip-2"/>
                            <a rel="colorbox[forms-current-ip2]" href="/_include/popups/forms-current-ip.php?iframe=true&amp;width=500&amp;height=180"> 
                          			<img class="lc-question-icon"  src="http://content.licensecube.com/_include/gui/questionmark.png"  style="padding-bottom: 6px;" alt="2Questions5"  />
                                </a></td>
                          </tr>                                                                        
                          
                          <tr id="tr-current-domain-2" style="display:none">
                            <td style="text-align:right"><label for="new-domain"><?=_('Current Domain:');?></label><span class="lc-required">*</span></td>
                            <td><input disabled="disabled" type="text" style="width: 220px;" class="lc-input domain" value="" name="current-domain" id="current-domain-2"/>
                            <a rel="colorbox[forms-current-domain]" href="/_include/popups/forms-current-domain.php?iframe=true&amp;width=500&amp;height=200"> 
                          			<img class="lc-question-icon"  src="http://content.licensecube.com/_include/gui/questionmark.png"  style="padding-bottom: 6px;" alt="2Questions6"  />
                                </a></td>
                          </tr>
                          
                        
                          </table>
                       
                       
                                              
                        
                        
                    
                       
                        
                        <div class="lc-form-buttons" >
                            <div  class="button-submit" >
                            <!--<button type="submit"  style="margin: 0px; padding: 0px; background: none; vertical-align: middle; border: none;">
                                <img src="http://content.licensecube.com/_include/gui/cancel-license-form.png" alt="Log in"  />
                            </button>-->
                            <a rel="nofollow"  href="javascript: return false;" onclick="$('#cancel-license').submit();"  class="button-orange"><?= _('Cancel License')?><span></span></a>
                            </div>
                            <div class="loader" style="display:none">
                                <img alt="Loading" src="https://my.licensecube.com/license-process/_include/gui/barber_pole.gif"  style="width:153px; height:19px; margin-top:6px; " />
                            </div>
                        </div>
                        
                        </form>
                    

</div>
					

					<div id="thankyou-cancel" class="lc-form-thankyou" style="display:none">

					<span class="lc-form-thankyou-message"><?=_('Success! Your license is cancelled.');?></span><br /><br />


                        <div id="thankyou-cancel-msg"><?=_('Curabitur ullamcorper libero sed risus posuere gravida malesuada mauris eleifend dignissim pulvinar, metus tortor porttitor quam, sed laoreet augue justo non justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.');?>
                        </div>

					</div>

</div>

				</div>
