<!-- !!! REMOVE ME BEFORE GOING LIVE !!! -->
	<script type="text/javascript" src="http://content.licensecube.com/_include/js/jquery.js"></script>
	<script type="text/javascript" src="http://content.licensecube.com/_include/js/jquery.validate.min.js"></script>
   <script type="text/javascript" src="http://content.licensecube.com/_include/js/validated.method.js"></script>
    <script type="text/javascript" src="http://content.licensecube.com/_include/js/licenses-forms.js"></script>
    <script type="text/javascript" src="new_form.js"></script>
    <link href="http://content.licensecube.com/_include/css/forms.css" rel="stylesheet" type="text/css" /> 
	   

				<div id="tabc2" class="lc-box" style="display:none">



					<div class="lc-form-note" id="lc-form-note">

						<p style="text-align:left"><strong><?=_('To update your license, please fill out the below form.</strong> This will automatically update the license of your choice within your account. Please note, that your account must not have a past-due balance. Otherwise, update will have to be completed manually.');?></p>
					</div>
					
                    <div  class="lc-box-ok login-message" style="display:none">

						<span  class="name-login"></span><?=_(', thank you for logging in to manage your licenses. Below, you will see the list of licenses that are currently available for you to modify.');?><br />
                       
					</div>
                    
                    
                    
                    <div id="form2" class="lc-form">
                    
                   
                    
                    
                    <form  id="login1" action="https://my.licensecube.com/lc-api/license_info.php"  method="post" >
                        <div   class="message-login">

                   		</div>
                        
                        
                        <table width="100%" border="0" cellspacing="2" cellpadding="2">
                          
                          <tr>
                            <td  style="width:227px; text-align:right" ><input name="login-form" id="login-form-1" type="hidden" value="installation" /><label ><?=_('Email Address:');?></label><span class="lc-required">*</span></td>
                            <td><input type="text" style="width: 220px;" class="lc-input required email" value="" name="email" id="email-1"/>
                            <a rel="colorbox[forms-email1]" href="/_include/popups/forms-email.php?iframe=true&amp;width=500&amp;height=180"> 
                          			<img class="lc-question-icon"  src="http://content.licensecube.com/_include/gui/questionmark.png"  style="padding-bottom: 6px;" alt="11Questions1"  />
                                </a></td>
                          </tr>
                          <tr>
                            <td align="right"><label for="password-1">Password:</label><span class="lc-required">*</span></td>
                            <td><input type="password" style="width: 220px;" class="lc-input required" value="" name="password" id="password-1"/>
                            <a rel="colorbox[forms-password1]" href="/_include/popups/forms-password.php?iframe=true&amp;width=500&amp;height=180"> 
                          			<img class="lc-question-icon"  src="http://content.licensecube.com/_include/gui/questionmark.png"  style="padding-bottom: 6px;" alt="11Questions2"  />
                                </a></td>
                          </tr>
                          
                           
                          </table>
                        
                        
                        
                        <div class="lc-form-buttons" >
                            <div  class="button-submit">
                            <button type="submit"  style="margin: 0px; padding: 0px; background: none; vertical-align: middle; border: none;">
                                <img src="http://content.licensecube.com/_include/gui/validate-login-license-form.png" alt="<?=_('Log in');?>"  />
                            </button>
                            </div>
                            <div class="loader" style="display:none">
                                <img alt="Loading" src="https://my.licensecube.com/license-process/_include/gui/barber_pole.gif" style="width:153px; height:19px; margin-top:6px; " />
                            </div>
                        </div>
                        
                        
                        
                        
                        </form>
                    
                    
                    
                    <div id="client-license-change" style="display:none">
                        	<div class="lc-box-header" style="border-bottom:1px solid #D5D5D5">
                            	<div class="lc-float-left">
                                	<h2 onclick='$("#lc-box").slideDown("normal");' style='cursor:pointer'><?=_('License Update Information');?> </h2>
                                </div>
                            <div class="lc-clear"></div>
                            </div>
                        	<div class="lc-box" >
                       			 <!--ul  style="color:#2390B5; cursor:pointer">
                       		<li></li>
                    			</ul-->
                        	</div>
                        </div>
                    
                     <div  class="message" style="padding-right: 20px;">

                    </div>
                    
                    
                        
                    
                    
                    
                    
                    <div id="form-contact" style="width:100%;">
                        <form   id="change-license" style="display:none"  action="https://my.licensecube.com/lc-api/license_update.php" method="post" >
                         <input name="lc_sess_id"  id="lc_sess_id-1" type="hidden" value="" /> 
                        <input name="pack_id"  id="pack_id-1" type="hidden" value="" />
                        <input type="hidden" value="change" name="action" />

                        <table width="100%" border="0" cellspacing="2" cellpadding="2">
                         
                           <tr id="tr-type-license-id-1" style="display:none">
                            <td style="width:227px; text-align:right"><label for="license-type-1"><?=_('Type of License:');?></label><span class="lc-required">*</span></td>
                            <td >
                           
                            <div style="float:left; " id="type-of-license-1" >
                           
                            <select class="lc-input required" style="width:50px;"  name="license-type" id="license-type-1" >
                              <option selected="selected" value="" disabled="disabled"> <?=_('Please Select...');?></option>
                            </select>
                            </div>
                            <a style="float:left; margin-top:2px;"  rel="colorbox[forms-type-license1]" href="/_include/popups/forms-type-license.php?iframe=true&amp;width=500&amp;height=180"> <img class="lc-question-icon" src="http://content.licensecube.com/_include/gui/questionmark.png" style="padding: 1px 6px 6px 8px;" alt="11Questions3" /></a>
                           <img alt="Loading" id="update-loading-licenses" src="/_include/gui/ajax-loader.gif" style="padding-top: 6px; display: none;"/>
                               </td> 
                           </tr>
                          
                          
                                                 
                          <tr id="tr-license-id-1" style="display:none">
                            <td align="right"><label for="license-id-1"><?=_('License ID:');?></label><span class="lc-required">*</span></td>
                            <td><input disabled="disabled" type="text" style="width: 220px;" class="lc-input licenseID" value="" name="license-id" id="license-id-1"/>
                            <a rel="colorbox[forms-licenseID1]" href="/_include/popups/forms-licenseID.php?iframe=true&amp;width=500&amp;height=180"> 
                          			<img class="lc-question-icon" alt="11Questions4"  src="http://content.licensecube.com/_include/gui/questionmark.png"  />
                                </a></td>
                          </tr>
                         
                         <tr id="tr-current-ip-1" style="display:none">
                            <td align="right"><label for="current-ip-1" ><?=_('Current IP Address:');?></label><span class="lc-required">*</span></td>
                            <td><input disabled="disabled" type="text" style="width: 220px;" class="lc-input ip-address" value="" name="current-ip" id="current-ip-1"/>
                            <a rel="colorbox[forms-current-ip1]" href="/_include/popups/forms-current-ip.php?iframe=true&amp;width=500&amp;height=180"> 
                          			<img class="lc-question-icon"  src="http://content.licensecube.com/_include/gui/questionmark.png"  style="padding-bottom: 6px;" alt="1Questions5"  />
                                </a></td>
                          </tr>
                         
                         
                          <tr id="tr-new-ip-1" style="display:none">
                            <td align="right"><label for="new-ip"><?=_('New IP Address:');?></label><span class="lc-required">*</span></td>
                            <td><input type="text" style="width: 220px;" class="lc-input ip-address" value="" name="new-ip" id="new-ip-1"/>
                            <a rel="colorbox[forms-new-ip]" href="/_include/popups/forms-new-ip.php?iframe=true&amp;width=500&amp;height=180"> 
                          			<img class="lc-question-icon"  src="http://content.licensecube.com/_include/gui/questionmark.png"  style="padding-bottom: 6px;" alt="1Questions22"  />
                                </a></td>
                          </tr>
                          
                          
                          <tr id="tr-current-domain-1" style="display:none">
                            <td align="right"><label for="new-domain"><?=_('Current Domain:');?></label><span class="lc-required">*</span></td>
                            <td><input disabled="disabled" type="text" style="width: 220px;" class="lc-input domain" value="" name="current-domain" id="current-domain-1"/>
                            <a rel="colorbox[forms-current-domain]" href="/_include/popups/forms-current-domain.php?iframe=true&amp;width=500&amp;height=200"> 
                          			<img class="lc-question-icon"  src="http://content.licensecube.com/_include/gui/questionmark.png" alt="1Questions6" />
                                </a></td>
                          </tr>
                          
                          <tr id="tr-new-domain" style="display:none">
                            <td align="right"><label for="new-domain"><?=_('New Domain:');?></label><span class="lc-required">*</span></td>
                            <td><input type="text" style="width: 220px;" class="lc-input domain" value="" name="new-domain" id="new-domain"/>
                            <a rel="colorbox[forms-new-domain]" href="/_include/popups/forms-new-domain.php?iframe=true&amp;width=500&amp;height=200"> 
                          			<img class="lc-question-icon"  src="http://content.licensecube.com/_include/gui/questionmark.png"  alt="1Questions7"/>
                                </a></td>
                          </tr>
                          
                          
                          <tr id="table-slaves" style="display:none"><td colspan="2"><table width="100%" border="0" cellspacing="2" cellpadding="2">
							    
                          <tr id="tr-slaves">
                            <td  style="width:182px; text-align:right"><label for="current-slaves"><?=_('Current Slave Count:');?></label><span class="lc-required">*</span></td>
                            <td  style="width:246px;"><input name="current-slaves" type="text"  class="lc-input" id="current-slaves" style="width: 30px;" value="" size="3" maxlength="3" disabled="disabled"/>
                            <a rel="colorbox[forms-licenseID1]" href="/_include/popups/forms-licenseID.php?iframe=true&amp;width=500&amp;height=180"> 
                          			<img class="lc-question-icon"  src="http://content.licensecube.com/_include/gui/questionmark.png" alt="1Questions8" />
                                </a></td>
                            <td  style="width:182px; text-align:right"><label for="new-slaves"><?=_('New Slave Count:');?></label>
                              <span class="lc-required">*</span></td>
                            <td  style="width:222px;"><input name="new-slaves" type="text"  class="lc-input" id="new-slaves" style="width: 30px;" value="" size="3" maxlength="3"/>
                              <a rel="colorbox[forms-licenseID1]" href="/_include/popups/forms-licenseID.php?iframe=true&amp;width=500&amp;height=180"> <img class="lc-question-icon"  src="http://content.licensecube.com/_include/gui/questionmark.png" alt="1Questions9" /> </a></td>
                          </tr>
                         
                          <tr id="tr-minislaves">
                            <td align="right"><label for="current-minislaves"><?=_('Current MiniSlave Count:');?></label><span class="lc-required">*</span></td>
                            <td><input name="current-minislaves" type="text" class="lc-input" id="current-minislaves" style="width: 30px;" value="" size="3" maxlength="3" disabled="disabled"/>
                            <a rel="colorbox[forms-new-ip]" href="/_include/popups/forms-new-ip.php?iframe=true&amp;width=500&amp;height=180"> 
                          			<img class="lc-question-icon"  src="http://content.licensecube.com/_include/gui/questionmark.png"  style="padding-bottom: 6px;" alt="1Questions10"  />
                                </a></td>
                            <td align="right"><label for="new-minislaves"><?=_('New MiniSlave Count:');?></label>
                              <span class="lc-required">*</span></td>
                            <td><input name="new-minislaves" type="text" class="lc-input" id="new-minislaves" style="width: 30px;" value="" size="3" maxlength="3"/>
                              <a rel="colorbox[forms-new-ip]" href="/_include/popups/forms-new-ip.php?iframe=true&amp;width=500&amp;height=180"> <img class="lc-question-icon"  src="http://content.licensecube.com/_include/gui/questionmark.png"  style="padding-bottom: 6px;" alt="1Questions11"  /> </a></td>
                          </tr>
                         
                         <tr id="tr-microslaves">
                            <td align="right"><label for="current-microslaves" ><?=_('Current MicroSlave Count:');?></label><span class="lc-required">*</span></td>
                            <td><input name="current-microslaves" type="text"  class="lc-input" id="current-microslaves" style="width: 30px;" value="" size="3" maxlength="3" disabled="disabled"/>
                            <a rel="colorbox[forms-current-ip1]" href="/_include/popups/forms-current-ip.php?iframe=true&amp;width=500&amp;height=180"> 
                          			<img class="lc-question-icon"  src="http://content.licensecube.com/_include/gui/questionmark.png"  style="padding-bottom: 6px;" alt="1Questions12"  />
                                </a></td>
                            <td align="right"><label for="new-microslaves" ><?=_('New MicroSlave Count:');?></label>
                              <span class="lc-required">*</span></td>
                            <td><input name="new-microslaves" type="text"  class="lc-input" id="new-microslaves" style="width: 30px;" value="" size="3" maxlength="3"/>
                              <a rel="colorbox[forms-current-ip1]" href="/_include/popups/forms-current-ip.php?iframe=true&amp;width=500&amp;height=180"> <img class="lc-question-icon"  src="http://content.licensecube.com/_include/gui/questionmark.png"  style="padding-bottom: 6px;" alt="1Questions13"  /> </a></td>
                          </tr>
                         
                        </table></td></tr>
                        
                          
                          <tr id="tr-current-language-packs" style="display:none">
                            <td align="right"><label for="current-language-packs">Current Language Packs:</label><span class="lc-required">*</span></td>
                            <td><input disabled="disabled" type="text" style="width: 220px;" class="lc-input" value="" name="current-language-packs" id="current-language-packs"/>
                            <a rel="colorbox[forms-current-domain]" href="/_include/popups/forms-current-domain.php?iframe=true&amp;width=500&amp;height=200"> 
                          			<img class="lc-question-icon"  src="_include/gui/questionmark.png"  />
                                </a></td>
                          </tr>
                          <tr id="tr-new-language-packs" style="display:none">
                            <td align="right"><label for="new-language-packs">New Language Packs:</label><span class="lc-required">*</span></td>
                            <td><select style="width: 220px;" class="lc-input" name="new-language-packs" id="new-language-packs">
									
								</select>
                            <a rel="colorbox[forms-new-domain]" href="/_include/popups/forms-new-domain.php?iframe=true&amp;width=500&amp;height=200"> 
                          			<img class="lc-question-icon"  src="_include/gui/questionmark.png"  />
                                </a></td>
                          </tr>
                          
                          <tr id="tr-current-os" style="display:none">
                            <td align="right"><label for="current-os">Current OS:</label><span class="lc-required">*</span></td>
                            <td><input disabled="disabled" type="text" style="width: 220px;" class="lc-input" value="" name="current-os" id="current-os"/>
                            <a rel="colorbox[forms-current-domain]" href="/_include/popups/forms-current-domain.php?iframe=true&amp;width=500&amp;height=200"> 
                          			<img class="lc-question-icon"  src="_include/gui/questionmark.png"  />
                                </a></td>
                          </tr>
                          <tr id="tr-new-os" style="display:none">
                            <td align="right"><label for="new-os">New OS:</label><span class="lc-required">*</span></td>
                            <td><select style="width: 220px;" class="lc-input" name="new-os" id="new-os">
									
								</select>
                            <a rel="colorbox[forms-new-domain]" href="/_include/popups/forms-new-domain.php?iframe=true&amp;width=500&amp;height=200"> 
                          			<img class="lc-question-icon"  src="_include/gui/questionmark.png"  />
                                </a></td>
                          </tr>
                           <tr id="tr-platform" style="display: none;">
					<td width="170" id="td-Platform-label" align="right" style="display: table-cell;"><label for="optionGroup-Platform">Platform:</label></td>
					<td width="255" id="td-Platform-select" style="display: table-cell;">
												<select style="margin:0 0 5px 0;" class="lc-input lc-change-option valid" id="optionGroup-Platform" name="genericOption[Platform]">
														<option price="0.00" value="Virtuozzo">VPS Option: Virtuozzo</option>
														<option price="0.00" value="KVM">VPS Option: KVM</option>
														<option price="0.00" value="XEN">VPS Option: XEN</option>
														<option price="0.00" value="VMWare">VPS Option: VMWare</option>
														<option price="0.00" value="MicroSoft Hyper-V">VPS Option: MicroSoft Hyper-V</option>
														<option price="0.00" value="Parallels Server">VPS Option: Parallels Server</option>
					  </select>											</td>
				</tr>
                
                           <tr id="tr-language-packs" style="display: none;">
					<td width="170" id="td-LanguagePacks-label" align="right"><label for="optionGroup-LanguagePacks">Language Packs:</label></td>
					<td width="247" id="td-LanguagePacks-select">
												<select style="margin:0 0 5px 0;" class="lc-input lc-change-option valid" id="optionGroup-LanguagePacks" name="genericOption[Language Packs]">
														<option price="0.00" value="None">None</option>
														<option price="7.95" value="1 Language Pack">1 Language Pack</option>
														<option price="15.90" value="2 Language Packs">2 Language Packs</option>
														<option price="23.85" value="3 Language Packs">3 Language Packs</option>
														<option price="31.80" value="4 Language Packs">4 Language Packs</option>
														<option price="39.75" value="5 Language Packs">5 Language Packs</option>
					  </select>											</td>
		  </tr>
          
                           <tr id="tr-power-pack" style="display: none;">
					<td width="170" id="td-PowerPack-label" align="right"><label for="optionGroup-PowerPack">Power Pack:</label></td>
					<td width="252" id="td-PowerPack-select">
												<select style="margin:0 0 5px 0;width: 230px;" class="lc-input lc-change-option" id="optionGroup-PowerPack" name="genericOption[Power Pack]">
							<option price="0.00" value="None">Incremente la Potencia de su Plesk!</option>
							<option price="19.95" value="Power Pack">Incrementador de Potencia Habilitado!</option>
						</select>
	  </td>
</tr>

                           <tr id="tr-operating-system" style="display: none;">
					<td width="170" id="td-OperatingSystem-label" align="right"><label for="optionGroup-OperatingSystem">Operating System:</label></td>
					<td width="239" id="td-OperatingSystem-select">
												<select style="margin:0 0 5px 0;" class="lc-input lc-change-option" id="optionGroup-OperatingSystem" name="genericOption[Operating System]">
														<option price="0.00" value="Plesk for Linux">Plesk for Linux</option>
														<option price="0.00" value="Plesk for Windows">Plesk for Windows</option>
					  </select>											</td>
</tr>
                         


                           <tr id="tr-containers" style="display: none;">
					<td width="170" id="td-Containers-label" align="right"><label for="optionGroup-Containers">Containers:</label></td>
					<td width="239" id="td-Containers-select">
												<select style="margin:0 0 5px 0;" class="lc-input lc-change-option" id="optionGroup-Containers" name="genericOption[Containers]">
					  </select>											</td>
</tr>
                         

                           <tr id="tr-version" style="display: none;">
					<td width="170" id="td-Version-label" align="right"><label for="optionGroup-Version">Version:</label></td>
					<td width="239" id="td-Version-select">
												<select style="margin:0 0 5px 0;" class="lc-input lc-change-option" id="optionGroup-Version" name="genericOption[Version]">
					  </select>											</td>
</tr>
                         
                           <tr id="tr-plesk-version" style="display: none;">
					<td width="170" id="td-PleskVersion-label" align="right"><label for="optionGroup-Plesk-Version">Plesk Version:</label></td>
					<td width="239" id="td-PleskVersion-select">
												<select style="margin:0 0 5px 0;" class="lc-input lc-change-option" id="optionGroup-PleskVersion" name="genericOption[Plesk Version]">
					  </select>											</td>
</tr>
                         

                           <tr id="tr-architecture" style="display: none;">
					<td width="170" id="td-Architecture-label" align="right"><label for="optionGroup-Architecture">Architecture:</label></td>
					<td width="239" id="td-Architecture-select">
												<select style="margin:0 0 5px 0;" class="lc-input lc-change-option" id="optionGroup-Architecture" name="genericOption[Architecture]">
					  </select>											</td>
</tr>
                         

                           <tr id="tr-physical-processors" style="display: none;">
					<td width="170" id="td-Physical-Processors-label" align="right"><label for="optionGroup-PhysicalProcessors">Physical Processors:</label></td>
					<td width="239" id="td-Physical-Processors-select">
												<select style="margin:0 0 5px 0;" class="lc-input lc-change-option" id="optionGroup-PhysicalProcessors" name="genericOption[Physical Processors]">
					  </select>											</td>
</tr>


                           <tr id="tr-site-count" style="display: none;">
					<td width="170" id="td-SiteCount-label" align="right"><label for="optionGroup-SiteCount">Site Count:</label></td>
					<td width="239" id="td-SiteCount-select">
												<select style="margin:0 0 5px 0;" class="lc-input lc-change-option" id="optionGroup-SiteCount" name="genericOption[Site Count]">
					  </select>											</td>
</tr>


                          </table>
                            










                       
                        
                        <div class="lc-form-buttons" >
                            <div  class="button-submit" style="display:none">
                            <button type="submit"  style="margin: 0px; padding: 0px; background: none; vertical-align: middle; border: none;">
                                <img src="http://content.licensecube.com/_include/gui/update-license-form.png" alt="Log in"  />
                            </button>
                            </div>
                            <div class="loader" style="display:none">
                                <img alt="Loading" src="https://my.licensecube.com/license-process/_include/gui/barber_pole.gif"  style="width:153px; height:19px; margin-top:6px; " />
                            </div>
                        </div>
                        </form>
                        
                        
                        
                        
                        
                        
                        
                        
                        <form   id="form-ticket" style="display:none"  action="https://my.licensecube.com/lc-api/license_update.php" method="post" >
                        

                        <table width="100%" border="0" cellspacing="2" cellpadding="2">
                                      
                          <tr  >
                            <td style="width:227px; text-align:right"><label ><?=_('Name:');?></label><span class="lc-required">*</span></td>
                            <td>
                            <input name="lc_sess_id"  id="lc_sess_id" type="hidden" value="" /> 
                        <input name="pack_id"  id="pack_id" type="hidden" value="" />
                        
                        <input type="hidden" value="9151256b9beb0df69a0d35b484365fe10" name="id" />
                            <input  type="text" style="width: 220px;" class="lc-input" value="" readonly="readonly" name="name-ticket" id="name-ticket"/>
                           </td>
                          </tr>
                          
                          <tr  >
                            <td align="right"><label ><?=_('Coments:');?></label><span class="lc-required">*</span></td>
                            <td><textarea style="width: 220px;" class="lc-input" name="coment-ticket" id="coment-ticket" cols="" rows="5"></textarea>
                           </td>
                          </tr>
                         
                         
                          </table>
                        
                        
                        

                        
                        
                        <div class="lc-form-buttons" >
                            <div id="button-ticket" style="display:none">
                            <button type="submit"  style="margin: 0px; padding: 0px; background: none; vertical-align: middle; border: none;">
                                <img src="http://content.licensecube.com/_include/gui/ticket.png" alt="Log in"  />
                            </button>
                            </div>
                            <div class="loader" style="display:none">
                                <img alt="Loading" src="https://my.licensecube.com/license-process/_include/gui/barber_pole.gif"  style="width:153px; height:19px; margin-top:6px; " />
                            </div>
                        </div>
                        </form>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </div>
                    
                  </div>

					<div id="thankyou-change" class="lc-form-thankyou" style="display:none">

					<span class="lc-form-thankyou-message"><?=_('Success! Your new settings are applied.');?></span><br /><br />


                        <div id="thankyou-change-msg"><?=_('Curabitur ullamcorper libero sed risus posuere gravida malesuada mauris eleifend dignissim pulvinar, metus tortor porttitor quam, sed laoreet augue justo non justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.');?>
                        </div>
					</div>
                    
                    <div id="thankyou-ticket" class="lc-form-thankyou" style="display:none">

					<span class="lc-form-thankyou-message"><span id="thankyou-ticket-name"></span><?=_(', your ticket has been submitted.');?></span><br /><br />


                       
					</div>



				</div>
