	
				<div id="tabc4" class="lc-box" style="display:none">
                
                		<div class="lc-form-note">

						<p style="text-align:left"><strong><?=_('To request the installation services, please provide the below requested information.</strong> Please note, that installation of software can take up to 24 hours based upon the complexity of the software application that is being installed. Additionally, please note that any incorrect information may cause delays. Additional terms may apply.');?></p>
                        
					</div>
<div  class="lc-box-ok login-message" style="display:none">

						<span  class="name-login"></span><?=_('you have been successfully logged in. You may now select the type of license you are wishing to request installation services for, by choosing it from the menu listed below.');?>, <br />
                       
					</div><br />




					<div id="form4" class="lc-form">
                    
                    <div id="form-login" style="width:100%; ">
                    
                   
                    
                        <form   id="login" action="https://my.licensecube.com/lc-api/license_update.php" method="post" >
                        <div  class="message-login">

                   		</div>
                        
                        
                        <table width="100%" border="0" cellspacing="2" cellpadding="2">
                          
                          <tr>
                            <td style="width:227px; text-align:right"><label ><?=_('Email Address:');?></label><span class="lc-required">*</span></td>
                            <td>
                            <input name="login-form" id="login-form-3" type="hidden" value="installation" />
                        <input name="type-form" id="type-form" type="hidden" value="client-license" /><input type="text" style="width: 220px;" class="lc-input required email" value="" name="email" id="email-3"/>
                            <a rel="colorbox[forms-email3]" href="/_include/popups/forms-email.php?iframe=true&amp;width=500&amp;height=180"> 
                          			<img class="lc-question-icon"  src="http://content.licensecube.com/_include/gui/questionmark.png"  style="padding-bottom: 6px;" alt="3Questions1"  />
                                </a></td>
                          </tr>
                          <tr>
                            <td  style="text-align:right"><label for="password-3">Password:</label><span class="lc-required">*</span></td>
                            <td><input type="password" style="width: 220px;" class="lc-input required" value="" name="password" id="password-3"/>
                            <a rel="color box[forms-password3]" href="/_include/popups/forms-password.php?iframe=true&amp;width=500&amp;height=180"> 
                          			<img class="lc-question-icon"  src="http://content.licensecube.com/_include/gui/questionmark.png"  style="padding-bottom: 6px;" alt="3Questions2"  />
                                </a></td>
                          </tr>
                          
                           
                          </table>
                        
                        
                        
                        <div class="lc-form-buttons" >
                            <div class="button-submit" style="overflow:hidden">
                            <!--<button type="submit"  style="margin: 0px; padding: 0px; background: none; vertical-align: middle; border: none;">
                                <img src="http://content.licensecube.com/_include/gui/validate-login-license-form-<?=getActualPage();?>.png" alt="<?=_('Log in');?>"  />
                            </button>-->
                             <a rel="nofollow"  href="javascript: return false;" onclick="$('#login').submit();"  class="button-orange"><?= _('Validate Login')?><span></span></a>
                            </div>
                            <div class="loader" style="display:none">
                                <img alt="Loading" src="https://my.licensecube.com/license-process/_include/gui/barber_pole.gif"  style="width:153px; height:19px; margin-top:6px; " /> 
                            </div>
                        </div>
                        
                        
                        
                        </form>
                        
                       </div> 
                        
                        <div  id="message">
    
                        </div>
                        
                         <table id="table-type-license-id" style="display:none" width="100%" border="0" cellspacing="0" cellpadding="2">
                         
                           <tr id="tr-type-license-id-3" >
                            <td style="width:227px; text-align:right"><label for="license-type-3"><?=_('Type of License:');?></label><span class="lc-required">*</span></td>
                            <td>
                             <div style="float:left;" id="type-of-license-3">
                            <select class="lc-input required"  name="license-type" id="license-type-3" >
                              <option selected="selected" value="" disabled="disabled"> <?=_('Please Select...');?></option>
                            </select>
                            </div>
                           <a style="float:left; margin-top:2px;"  rel="colorbox[forms-type-license3]" href="/_include/popups/forms-type-license.php?iframe=true&amp;width=500&amp;height=180"> <img class="lc-question-icon" src="http://content.licensecube.com/_include/gui/questionmark.png"  alt="3Questions3" style="padding: 1px 6px 6px 8px;" /></a>
                                
                             </td>
                          </tr>
                          </table>
                        
                        
                        
                        
                        
                        
                      <!--  
                        <div id="client-license" style="display:none">
                        	<div class="lc-box-header" style="border-bottom:1px solid #D5D5D5">
                            	<div class="lc-float-left">
                                	<h2 onclick='$("#client-license #lc-box").slideDown("normal");' style='cursor:pointer'> Installation License </h2>
                                </div>
                            <div class="lc-clear"></div>
                            </div>
                        	<div class="lc-box" id="lc-box">
                       			 <ul  style="color:#2390B5; cursor:pointer">
                       		
                    			</ul>
                        	</div>
                        </div>
                        <br />-->

   						
                        
                       
                     
                        <form   id="form-billing-system" action="https://my.licensecube.com/lc-api/license_update.php" method="post" style="display:none"  >
                        <input name="pack_id"  id="pack_id-4" type="hidden" value="" />
                      <input name="lc_sess_id"  id="lc_sess_id-4" type="hidden" value="" />  
                        
                        <table width="100%" border="0" cellspacing="2" cellpadding="2">
                         
                          
                          
                          
                          <tr  id="tr-license-id-3" >
                            <td style="width:227px; text-align:right"><label for="ftp_domain-1"><?=_('FTP Domain:');?></label><span class="lc-required">*</span></td>
                            <td>
                        
                            <input type="text" style="width: 220px;" class="lc-input required domain" value="" name="ftp_domain" id="ftp_domain-1"/>
                            <a rel="colorbox[installation-ftp-domain2]" href="/_include/popups/installation-ftp-domain.php?iframe=true&amp;width=500&amp;height=180"> 
                          			<img class="lc-question-icon"  src="http://content.licensecube.com/_include/gui/questionmark.png" alt="3Questions4" />
                                </a></td>
                          </tr>
                          <tr    >
                            <td   style="text-align:right"><label for="ftp_username-1"><?=_('FTP Username:');?></label><span class="lc-required">*</span></td>
                            <td><input type="text" style="width: 220px;" class="lc-input required" value="" name="ftp_username" id="ftp_username-1"/>
                            <a rel="colorbox[installation-ftp-username2]" href="/_include/popups/installation-ftp-username.php?iframe=true&amp;width=500&amp;height=180"> 
                          			<img class="lc-question-icon"  src="http://content.licensecube.com/_include/gui/questionmark.png" alt="3Questions5" />
                                </a></td>
                          </tr>
                          <tr  >
                            <td  style="text-align:right"><label for="ftp_password-1"><?=_('FTP Password:');?></label><span class="lc-required">*</span></td>
                            <td><input type="password" style="width: 220px;" class="lc-input required" value="" name="ftp_password" id="ftp_password-1"/>
                            <a rel="colorbox[installation-ftp-password2]" href="/_include/popups/installation-ftp-password.php?iframe=true&amp;width=500&amp;height=180"> 
                          			<img class="lc-question-icon"  src="http://content.licensecube.com/_include/gui/questionmark.png" alt="3Questions6" />
                                </a></td>
                          </tr>
                          
                           <tr  >
                            <td style="text-align:right"><label for="installation_directory-1"><?=_('Installation Directory:');?></label><span class="lc-required">*</span></td>
                            <td><input type="text" style="width: 220px;" class="lc-input required" value="" name="installation_directory" id="installation_directory-1"/>
                            <a rel="colorbox[installation-ftp-directory2]" href="/_include/popups/installation-ftp-directory.php?iframe=true&amp;width=500&amp;height=180"> 
                          			<img class="lc-question-icon"  src="http://content.licensecube.com/_include/gui/questionmark.png" alt="3Questions7" />
                                </a></td>
                          </tr>
                          
                          <tr     >
                            <td   style="text-align:right"><label for="additional_information-1"><?=_('Additional Information:');?></label></td>
                            <td>
                            <textarea name="additional_information" style="width: 280px;" class="lc-input" id="additional_information-1" cols="45" rows="5"></textarea>                                         
                           </td>
                          </tr>
                         
                          </table>
                        
                      

                        
                        
                        <div class="lc-form-buttons" >
                            <div class="button-submit" style="overflow:hidden">
                            <!--<button type="submit"  style="margin: 0px; padding: 0px; background: none; vertical-align: middle; border: none;">
                                <img src="http://content.licensecube.com/_include/gui/validate-license-form.png" alt="Log in"  />
                            </button>-->
                             <a rel="nofollow"  href="javascript: return false;" onclick="$('#form-billing-system').submit();"  class="button-orange"><?= _('Request Installation')?><span></span></a>
                            </div>
                            <div class="loader" style="display:none">
                                <img alt="Loading" src="https://my.licensecube.com/license-process/_include/gui/barber_pole.gif"  style="width:153px; height:19px; margin-top:6px; " />
                            </div>
                        </div>
                        </form>
                        
                        
                        
                        
                        
                         <form   id="form-control-panel" action="https://my.licensecube.com/lc-api/license_update.php" method="post" style="display:none"  >
                        <table width="100%" border="0" cellspacing="2" cellpadding="2">
                         
                          
                          <tr id="tr-license-id-4" >
                            <td   style="text-align:right"><label for="server_ip_address-1"><?=_('Server IP Address:');?></label><span class="lc-required">*</span></td>
                            <td>
                            <input name="pack_id"  id="pack_id-5" type="hidden" value="" />
                        <input name="lc_sess_id"  id="lc_sess_id-5" type="hidden" value="" /> 
                            <input type="text" style="width: 220px;" class="lc-input ip-address required" value="" name="server_ip_address" id="server_ip_address-1"/>
                            <a rel="colorbox[installation-server-ip2]" href="/_include/popups/installation-server-ip.php?iframe=true&amp;width=500&amp;height=180"> 
                          			<img class="lc-question-icon"  src="http://content.licensecube.com/_include/gui/questionmark.png" alt="3Questions8" />
                                </a></td>
                          </tr>
                          <tr    >
                            <td  style="text-align:right"><label for="server_username-1"><?=_('Server Username:');?></label><span class="lc-required">*</span></td>
                            <td><input type="text" style="width: 220px;" class="lc-input required" value="" name="server_username" id="server_username-1"/>
                            <a rel="colorbox[installation-server-username2]" href="/_include/popups/installation-server-username.php?iframe=true&amp;width=500&amp;height=180"> 
                          			<img class="lc-question-icon"  src="http://content.licensecube.com/_include/gui/questionmark.png"  alt="3Questions9"/>
                                </a></td>
                          </tr>
                          <tr  >
                            <td style="text-align:right"><label for="server_password-1"><?=_('Server Password:');?></label><span class="lc-required">*</span></td>
                            <td><input type="password" style="width: 220px;" class="lc-input required" value="" name="server_password" id="server_password-1"/>
                            <a rel="colorbox[installation-server-password2]" href="/_include/popups/installation-server-password.php?iframe=true&amp;width=500&amp;height=180"> 
                          			<img class="lc-question-icon"  src="http://content.licensecube.com/_include/gui/questionmark.png" alt="3Questions10" />
                                </a></td>
                          </tr>
                          
                           <tr  >
                            <td style="text-align:right"><label for="server_status"><?=_('Server Status:');?></label><span class="lc-required">*</span></td>
                            <td>
                            <select name="server_status" id="server_status" style="width: 230px;" class="lc-input required">
                              <option><?=_('Please Choose.');?></option>
                              <option value="1"><?=_('The server is newly installed, with only Linux/Unix on it.');?></option>
                              <option value="2"><?=_('This server has had a control panel installed on it before.');?> </option>
                            </select>
                            
                            
                            <a rel="colorbox[installation-server-status2]" href="/_include/popups/installation-server-status.php?iframe=true&amp;width=500&amp;height=180"> 
                          			<img class="lc-question-icon"  src="http://content.licensecube.com/_include/gui/questionmark.png" alt="3Questions11" />
                                </a></td>
                          </tr>
                          
                          <tr     >
                            <td  style="text-align:right"><label for="aditional_information"><?=_('Additional Information:');?></label></td>
                            <td>
                            <textarea name="aditional_information" style="width: 280px;" class="lc-input " id="aditional_information" cols="45" rows="5"></textarea>                                         
                           </td>
                          </tr>
                         
                          </table>
                        
                      
                        

                       
                        
                        <div class="lc-form-buttons" >
                            <div class="button-submit" style="overflow:hidden">
                            <!--<button type="submit"  style="margin: 0px; padding: 0px; background: none; vertical-align: middle; border: none;">
                                <img src="http://content.licensecube.com/_include/gui/validate-license-form.png" alt="<?=_('Log in');?>"  />
                            </button>-->
                             <a rel="nofollow"  href="javascript: return false;" onclick="$('#form-control-panel').submit();"  class="button-orange"><?= _('Request Installation')?><span></span></a>
                            </div>
                            <div class="loader" style="display:none">
                                <img alt="Loading" src="https://my.licensecube.com/license-process/_include/gui/barber_pole.gif"  style="width:153px; height:19px; margin-top:6px; " />
                            </div>
                        </div>
                        </form>
                        
                        
                        
                        
                        
                        
                        
                         <form   id="form-additional-software" action="https://my.licensecube.com/lc-api/license_update.php" method="post" style="display:none"  >
                        <table width="100%" border="0" cellspacing="2" cellpadding="2">
                         
                         
                         <tr id="tr-license-id-5" >
                            <td style="width:227px; text-align:right"><label for="server_ip_address-2"><?=_('Server IP Address:');?></label><span class="lc-required">*</span></td>
                            <td>
                            <input name="pack_id"  id="pack_id-6" type="hidden" value="" />
                      <input name="lc_sess_id"  id="lc_sess_id-6" type="hidden" value="" />     
                            <input type="text" style="width: 220px;" class="lc-input required ip-address" value="" name="server_ip_address" id="server_ip_address-2"/>
                            <a rel="colorbox[installation-server-ip]" href="/_include/popups/installation-server-ip.php?iframe=true&amp;width=500&amp;height=180"> 
                          			<img class="lc-question-icon" alt="3Questions20"  src="http://content.licensecube.com/_include/gui/questionmark.png"  />
                                </a></td>
                          </tr>
                          <tr    >
                            <td   style="text-align:right"><label for="server_username-2"><?=_('Server Username:');?></label><span class="lc-required">*</span></td>
                            <td><input type="text" style="width: 220px;" class="lc-input required" value="" name="server_username" id="server_username-2"/>
                            <a rel="colorbox[installation-server-username]" href="/_include/popups/installation-server-username.php?iframe=true&amp;width=500&amp;height=180"> 
                          			<img class="lc-question-icon" alt="3Questions13"  src="http://content.licensecube.com/_include/gui/questionmark.png"  />
                                </a></td>
                          </tr>
                          <tr  >
                            <td  style="text-align:right"><label for="server_password-2"><?=_('Server Password:');?></label><span class="lc-required">*</span></td>
                            <td><input type="password" style="width: 220px;" class="lc-input required" value="" name="server_password" id="server_password-2"/>
                            <a rel="colorbox[installation-server-password]" href="/_include/popups/installation-server-password.php?iframe=true&amp;width=500&amp;height=180"> 
                          			<img class="lc-question-icon" alt="3Questions21"  src="http://content.licensecube.com/_include/gui/questionmark.png"  />
                                </a></td>
                          </tr>
                          
                          
                           <tr id="tr-license-id-6" >
                            <td style="text-align:right"><label for="ftp_domain-2"><?=_('FTP Domain:');?></label><span class="lc-required">*</span></td>
                            <td><input type="text" style="width: 220px;" class="lc-input required domain" value="" name="ftp_domain" id="ftp_domain-2"/>
                            <a rel="colorbox[installation-ftp-domain]" href="/_include/popups/installation-ftp-domain.php?iframe=true&amp;width=500&amp;height=180"> 
                          			<img class="lc-question-icon" alt="3Questions15"  src="http://content.licensecube.com/_include/gui/questionmark.png"  />
                                </a></td>
                          </tr>
                          <tr    >
                            <td   style="text-align:right"><label for="ftp_username-2"><?=_('FTP Username:');?></label><span class="lc-required">*</span></td>
                            <td><input type="text" style="width: 220px;" class="lc-input required" value="" name="ftp_username" id="ftp_username-2"/>
                            <a rel="colorbox[installation-ftp-username]" href="/_include/popups/installation-ftp-username.php?iframe=true&amp;width=500&amp;height=180"> 
                          			<img class="lc-question-icon" alt="3Questions16"  src="http://content.licensecube.com/_include/gui/questionmark.png"  />
                                </a></td>
                          </tr>
                          <tr  >
                            <td style="text-align:right"><label for="ftp_password-2"><?=_('FTP Password:');?></label><span class="lc-required">*</span></td>
                            <td><input type="password" style="width: 220px;" class="lc-input required" value="" name="ftp_password" id="ftp_password-2"/>
                            <a rel="colorbox[installation-ftp-password]" href="/_include/popups/installation-ftp-password.php?iframe=true&amp;width=500&amp;height=180"> 
                          			<img class="lc-question-icon" alt="3Questions17"  src="http://content.licensecube.com/_include/gui/questionmark.png"  />
                                </a></td>
                          </tr>
                          
                           <tr  >
                            <td style="text-align:right"><label for="installation_directory-2"><?=_('Installation Directory:');?></label><span class="lc-required">*</span></td>
                            <td><input type="text" style="width: 220px;" class="lc-input required" value="" name="installation_directory" id="installation_directory-2"/>
                            <a rel="colorbox[installation-ftp-directory]" href="/_include/popups/installation-ftp-directory.php?iframe=true&amp;width=500&amp;height=180"> 
                          			<img class="lc-question-icon" alt="3Questions18"  src="http://content.licensecube.com/_include/gui/questionmark.png"  />
                                </a></td>
                          </tr>
                          
                          <tr     >
                            <td   style="text-align:right"><label for="additional_information-2"><?=_('Additional Information:');?></label></td>
                            <td>
                            <textarea name="additional_information" style="width: 280px;" class="lc-input " id="additional_information-2" cols="45" rows="5"></textarea>                                         
                           </td>
                          </tr>
                         
                          </table>
                        
                      
                        

                       
                        
                        <div class="lc-form-buttons" >
                            <div class="button-submit" style="overflow:hidden">
                            <!--<button type="submit"  style="margin: 0px; padding: 0px; background: none; vertical-align: middle; border: none;">
                                <img src="http://content.licensecube.com/_include/gui/validate-license-form.png" alt="Log in"  />
                            </button>-->
                            <a rel="nofollow"  href="javascript: return false;" onclick="$('#form-additional-software').submit();"  class="button-orange"><?= _('Request Installation')?><span></span></a>
                            </div>
                            <div class="loader" style="display:none">
                                <img alt="Loading" src="https://my.licensecube.com/license-process/_include/gui/barber_pole.gif"  style="width:153px; height:19px; margin-top:6px; " />
                            </div>
                        </div>
                        
                        
                        
                        </form>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </div>
                        <div id="thankyou-installation" class="lc-form-thankyou" style="display:none">
                        
                                            <span class="lc-form-thankyou-message"><?=_('Success! Your order was sent.');?></span><br /><br />
                        
                        
                                                <div id="thankyou-installation-msg"><?=_('Curabitur ullamcorper libero sed risus posuere gravida malesuada mauris eleifend dignissim pulvinar, metus tortor porttitor quam, sed laoreet augue justo non justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.');?>
                                                </div>
                                            </div>

					</div>

					



