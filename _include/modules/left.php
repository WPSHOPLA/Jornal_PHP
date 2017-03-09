

            	<?php if( $left=="information" ) { ?>



				<div class="lc-side-menu">



					<ul>



						<li class="header"><h2><?=_('Company')?></h2></li>

						<li><a href="<?=$site_dir?><?=_('/company/');?>"<?php if( $page=="about" ) { ?> class="selected"<?php } else { ?><?php } ?> title="<?=_('LicenseCube About Us')?>"><?=_('Overview')?></a></li>



						<!--<li><a href="<?=$site_dir?><?=_('/contact/');?>"<?php if( $page=="contact" ) { ?> class="selected"<?php } else { ?><?php } ?> title="<?=_('LicenseCube Contact Us')?>"><?=_('Contact Us')?></a></li>-->

                        <li><a href="http://blog.licensecube.com"<?php if( $page=="blog" ) { ?> class="selected"<?php } else { ?><?php } ?> title="<?=_('LicenseCube Blog')?>"><?=_('Company Blog')?></a></li>

						<!--<li><a href="<?=$site_dir?><?=_('/support/');?>"<?php if( $page=="support" ) { ?> class="selected"<?php } else { ?><?php } ?> title="<?=_('LicenseCube Support Center')?>"><?=_('Support Center')?></a></li>-->



						<li><a href="<?=$site_dir?><?=_('/company/privacy.php');?>"<?php if( $page=="privacy" ) { ?> class="selected"<?php } else { ?><?php } ?> title="<?=_('LicenseCube Privacy Policy')?>"><?=_('Privacy Policy')?></a></li>



						<li ><a href="<?=$site_dir?><?=_('/company/terms-of-service.php');?>"<?php if( $page=="terms" ) { ?> class="selected"<?php } else { ?><?php } ?> title="<?=_('LicenseCube Terms of Service')?>"><?=_('Terms of Service')?></a></li>

                        <li class="last"><a href="<?=$site_dir?><?=_('/company/why-choose-licensecube.php');?>"<?php if( $page=="whychoose" ) { ?> class="selected"<?php } else { ?><?php } ?> title="<?=_('Why LicenseCube?')?>"><?=_('Why LicenseCube?')?></a></li>



					</ul>



				</div>



				<?php } else { ?><?php } ?>



                <?php if( $left=="supportcenter" ) { ?>

               <div class="lc-side-menu">

               <div class="ltMenu " style=" border:0px;">

                  <ul>

                  	<li class="header"><h2 style="padding-left:5px">Support Center</h2></li>

                    <li><a href="http://www.licensecube.com/support/" <?php if( $page=="support" ) { ?> class="selected"<?php } else { ?><?php } ?>>Overview</a></li>

                    <li><a href="<?=$site_dir?><?=_('/support/billing-system-license-modules.php');?>"<?php if( $page=="api" ) { ?> class="selected"<?php } else { ?><?php } ?> title="<?=_('Billing System Modules')?>"><?=_('API Modules')?></a></li>

                    <li><a href="http://kbase.licensecube.com/">Knowledge Base</a></li>

                    <li class=''><ul><?php echo kbase_categories(); ?>   </ul></li>



                  </ul>

                  <div class="clr"></div>

	      <div class="ltMenuStyle" style="background: none repeat scroll 0 0 #F1F1F1;">

              <p><strong>Support Center</strong></p>

              <p>The LicenseCube support knowledge base has <?php echo amountArticles() ?>+ articles. These articles will assist you in resolving almost any issue you should face!</p>

          </div>

                </div></div>

               <?php } else { ?><?php } ?>





                <?php if( $left=="blog" ) { ?>



                <div class="lc-side-blog-search">

					<h2><?=_('Search Blog')?></h2>

					<table cellpadding="1" cellspacing="1">

					<tr>

						<td><input name="" class="lc-input" style="width:130px" /></td>

						<td><a href="#"><img src="<?=$img_dir?>/buttons/go.png" width="36" height="28" alt="" /></a></td>

					</tr>

					</table>

				</div>



				<!--<div class="lc-side-menu">



					<ul>



						<li class="header"><h2>Information</h2></li>

						<li><a href="http://www.licensecube.com/company/index.php"<?php if( $page=="about" ) { ?> class="selected"<?php } else { ?><?php } ?>>About Us</a></li>

						<li><a href="http://www.licensecube.com/contact/index.php"<?php if( $page=="contact" ) { ?> class="selected"<?php } else { ?><?php } ?>>Contact Us</a></li>

                        <li><a href="http://blog.licensecube.com"<?php if( $page=="blog" ) { ?> class="selected"<?php } else { ?><?php } ?>>Company Blog</a></li>

						<li><a href="http://www.licensecube.com/support/kb/"<?php if( $page=="support" ) { ?> class="selected"<?php } else { ?><?php } ?>>Support Center</a></li>

						<li><a href="http://www.licensecube.com/company/privacy.php"<?php if( $page=="privacy" ) { ?> class="selected"<?php } else { ?><?php } ?>>Privacy Policy</a></li>

						<li class="last"><a href="http://www.licensecube.com/company/terms-of-service.php"<?php if( $page=="terms" ) { ?> class="selected"<?php } else { ?><?php } ?>>Terms of Service</a></li>



					</ul>



                    </div>



                    <div class="lc-side-menu">

					<ul>

						<li class="header"><h2>Categories</h2></li>

						<li><a href="#">Announcements</a></li>

						<li><a href="#">Enim fringilla</a></li>

						<li><a href="#">Adipiscing purus</a></li>

						<li class="last"><a href="#">Tellus blandit</a></li>

					</ul>

				</div>

				<div class="lc-side-blog">

					<h2>Archives</h2>

					<ul>

						<li><a href="#">January 2011</a></li>

						<li><a href="#">December 2010</a></li>

						<li><a href="#">November 2010</a></li>

					</ul>

				</div>-->









				<?php } else { ?><?php } ?>



				<?php if( $left=="cp" ) { ?>



				<?php

					$dedicated = 0;

					$qs_append = '';

					if (array_key_exists('vps', $_REQUEST)) {

						$qs_append = '?vps';

					} else if (array_key_exists(_('dedicated'), $_REQUEST)) {

						$qs_append = '?'._('dedicated');

						$dedicated = 1;



					}



					else {

						$dedicated = 1;

						if (($page == 'cp5') || ($page == 'cp6'))

							$qs_append = '?dedicated';

					}

				?>



				<div class="lc-side-menu">



					<ul>



						<li class="header"><h2><?=_('Control Panels')?></h2></li>

						<li class="cpanel"><a href="<?=$site_dir?><?=_('/control-panels/cpanel-license.php');?>"<?php if( $page=="cp1" ) { ?> class="selected"<?php } else { ?><?php } ?> title="<?=_('cPanel/WHM License');?>">cPanel/WHM</a></li>

						<li class="cpanel"><a href="<?=$site_dir?><?=_('/control-panels/plesk-license.php');?>"<?php if( $page=="cp2" ) { ?> class="selected"<?php } else { ?><?php } ?> title="<?=_('Plesk License');?>">Plesk Panel <?php print("$vps_plesk_version"); ?></a></li>

						<li class="cpanel"><a href="<?=$site_dir?><?=_('/control-panels/directadmin-license.php');?>"<?php if( $page=="cp3" ) { ?> class="selected"<?php } else { ?><?php } ?> title="<?=_('DirectAdmin License');?>">DirectAdmin</a></li>

						<li class="cpanel"><a href="<?=$site_dir?><?=_('/control-panels/softaculous-license.php');?>"<?php if( $page=="cp4" ) { ?> class="selected"<?php } else { ?><?php } ?> title="<?=_('Softaculous License');?>">Softaculous</a></li>

						<li class="cpanel"><a href="<?=$site_dir?><?=_('/control-panels/fantastico-license.php');?>"<?php if( $page=="cp7" ) { ?> class="selected"<?php } else { ?><?php } ?> title="<?=_('Fantastico License');?>">Fantastico</a></li>

                       	 <li class="cpanel"><a href="<?=$site_dir?><?=_('/control-panels/installatron-license.php');?>"<?php if( $page=="cp8" ) { ?> class="selected"<?php } else { ?><?php } ?> title="<?=_('Installatron License');?>">Installatron</a></li>

                          <li class="cpanel"><a href="<?=$site_dir?><?=_('/control-panels/interworx-license.php');?>"<?php if( $page=="cp11" ) { ?> class="selected"<?php } else { ?><?php } ?> title="<?=_('InterWorx License');?>">InterWorx</a></li>

                          <li class="cpanel"><a href="<?=$site_dir?><?=_('/control-panels/ispmanager-license.php');?>"<?php if( $page=="cp12" ) { ?> class="selected"<?php } else { ?><?php } ?> title="<?=_('ISPmanager License');?>">ISPmanager</a></li>

                       <!-- <li class="cpanel cpanel-only-dedicated" <?php if (($page != 'cp5') && !$dedicated) { ?> style="display: none;"<?php }?>><a href="<?=$site_dir?><?=_('/control-panels/enkompass-license.php');?>"<?php if( $page=="cp5" ) { ?> class="selected"<?php } else { ?><?php } ?> title="<?=_('Enkompass License');?>">Enkompass</a></li>-->

                        <li class="cpanel cpanel-only-dedicated" <?php if (($page != 'cp6') && !$dedicated) { ?> style="display: none;"<?php }?>><a href="<?=$site_dir?><?=_('/control-panels/parallels-virtuozzo-license.php');?>"<?php if( $page=="cp6" ) { ?> class="selected"<?php } else { ?><?php } ?> title="<?=_('Virtuozzo License');?>">Virtuozzo  <?php print("$dedicated_virtuozzo"); ?> </a></li>

                         <li class="cpanel cpanel-only-dedicated" <?php if (($page != 'cp10') && !$dedicated) { ?> style="display: none;"<?php }?>><a href="<?=$site_dir?><?=_('/control-panels/solusvm-license.php');?>"<?php if( $page=="cp10" ) { ?> class="selected"<?php } else { ?><?php } ?> title="<?=_('SolusVM License');?>">SolusVM </a></li>









					</ul>



				</div>

                 <?php } else { ?><?php } ?>



                <?php if( $left=="billing" ) { ?>



				<div class="lc-side-menu">



					<ul>



						<li class="header"><h2><?=_('Billing Systems')?></h2></li>

						<!--<li><a href="<?=$site_dir?><?=_('/billing-systems/whmcs-license.php');?>"<?php if( $page=="bill1" ) { ?> class="selected"<?php } else { ?><?php } ?> title="<?=_('WHMCS License');?>">WHMCS</a></li>-->

						<li><a href="<?=$site_dir?><?=_('/billing-systems/plesk-billing-license.php');?>"<?php if( $page=="bill2" ) { ?> class="selected"<?php } else { ?><?php } ?> title="<?=_('Plesk Billing License');?>">Plesk Billing</a></li>

						<li><a href="<?=$site_dir?><?=_('/billing-systems/whmautopilot-license.php');?>"<?php if( $page=="bill3" ) { ?> class="selected"<?php } else { ?><?php } ?> title="<?=_('WHMAutoPilot License');?>">WHMAutoPilot</a></li>

                        <li><a href="<?=$site_dir?><?=_('/billing-systems/blesta-license.php');?>"<?php if( $page=="bill4" ) { ?> class="selected"<?php } else { ?><?php } ?> title="<?=_('Blesta License');?>">Blesta</a></li>

       					<li><a href="<?=$site_dir?><?=_('/billing-systems/clientexec-license.php');?>"<?php if( $page=="bill5" ) { ?> class="selected"<?php } else { ?><?php } ?> title="<?=_('ClientExec License');?>">ClientExec</a></li>

                       <!-- <li><a href="<?=$site_dir?><?=_('/billing-systems/hostbill-license.php');?>"<?php if( $page=="bill6" ) { ?> class="selected"<?php } else { ?><?php } ?> title="<?=_('HostBill License');?>">HostBill</a></li>-->

                        <li ><a href="<?=$site_dir?><?=_('/billing-systems/billmanager-license.php');?>"<?php if( $page=="bill7" ) { ?> class="selected"<?php } else { ?><?php } ?> title="<?=_('BILLmanager License');?>">BILLmanager</a></li>



                       <!-- <li class="last"><a href="<?=$site_dir?><?=_('/billing-systems/ubersmith-license.php');?>"<?php if( $page=="bill8" ) { ?> class="selected"<?php } else { ?><?php } ?> title="<?=_('Ubersmith License');?>">Ubersmith</a></li>-->





					</ul>



				</div>





				<?php } else { ?><?php } ?>



                <?php if( $left=="additional" ) { ?>



				<?php

					$dedicated = 0;

					$qs_append = '';

					if (array_key_exists('vps', $_REQUEST)) {

						$qs_append = '?vps';

					} else if (array_key_exists(_('dedicated'), $_REQUEST)) {

						$qs_append = '?'._('dedicated');

						$dedicated = 1;

					}



				?>



				<div class="lc-side-menu">



					<ul>



						<li class="header"><h2><?=_('Additional Licenses')?></h2></li>



						<li class="addit"><a href="<?=$site_dir?><?=_('/additional-licenses/rvskins-license.php');?>"<?php if( $page=="addi2" ) { ?> class="selected"<?php } else { ?><?php } ?> title="<?=_('RVSkins License');?>">RVSkins</a></li>

						<li class="addit"><a href="<?=$site_dir?><?=_('/additional-licenses/rvsitebuilder-license.php');?>"<?php if( $page=="addi3" ) { ?> class="selected"<?php } else { ?><?php } ?> title="<?=_('RVSiteBilder License');?>">RVSiteBuilder</a></li>

                        <li class="addit"><a href="<?=$site_dir?><?=_('/additional-licenses/whmxtra-license.php');?>"<?php if( $page=="addi4" ) { ?> class="selected"<?php } else { ?><?php } ?> title="<?=_('WHMXtra License');?>">WHMXtra</a></li>

						<li class="addit"><a href="<?=$site_dir?><?=_('/additional-licenses/miva-merchant-license.php');?>"<?php if( $page=="addi5" ) { ?> class="selected"<?php } else { ?><?php } ?> title="<?=_('Miva Merchant License');?>">Miva Merchant</a></li>

                        <li class="addit"><a href="<?=$site_dir?><?=_('/additional-licenses/whmsonic-license.php');?>"<?php if( $page=="addi6" ) { ?> class="selected"<?php } else { ?><?php } ?> title="<?=_('WHMSonic License');?>">WHMSonic</a></li>

                        <!--<li class="additional-only-dedicated addit" <?php if (($page != 'addi7') && !$dedicated) { ?> style="display: none;"<?php }?>><a href="<?=$site_dir?><?=_('/additional-licenses/ksplice-license.php');?>"<?php if( $page=="addi7" ) { ?> class="selected"<?php } else { ?><?php } ?> title="<?=_('Ksplice Uptrack');?>">Ksplice</a></li>-->



                         <li class="addit"><a href="<?=$site_dir?><?=_('/additional-licenses/cloudlinux-license.php');?>"<?php if( $page=="addi8" ) { ?> class="selected"<?php } else { ?><?php } ?> title="CloudLinux">CloudLinux</a></li>



                         <li class="addit"><a href="<?=$site_dir?><?=_('/additional-licenses/trendy-sitebuilder-license.php');?>"<?php if( $page=="addi9" ) { ?> class="selected"<?php } else { ?><?php } ?> title="Trendy SiteBuilder">Trendy SiteBuilder</a></li>



                         <li class="addit"><a href="<?=$site_dir?><?=_('/additional-licenses/litespeed-license.php');?>"<?php if( $page=="addi10" ) { ?> class="selected"<?php } else { ?><?php } ?> title="LiteSpeed">LiteSpeed</a></li>
						 <li class="addit"><a href="<?=$site_dir?><?=_('/additional-licenses/kernelcare-license.php');?>"<?php if( $page=="addi11" ) { ?> class="selected"<?php } else { ?><?php } ?> title="KernelCare">KernelCare</a></li>
						 <li class="addit"><a href="<?=$site_dir?><?=_('/additional-licenses/parallels-web-presence-builder-license.php');?>"<?php if( $page=="addi11" ) { ?> class="selected"<?php } else { ?><?php } ?> title="KernelCare">Web Presence Builder</a></li>


                         <!--<li class="addit"><a href="<?=$site_dir?><?=_('/additional-licenses/zopim-license.php');?>"<?php if( $page=="addi11" ) { ?> class="selected"<?php } else { ?><?php } ?> title="Zopim Live Chat">Zopim Live Chat</a></li>-->





					</ul>



				</div>





				<?php } else { ?><?php } ?>





				<?php if( $total=="yes" ) { ?>



				<!--<div id="totals" class="lc-side-menu">



					<ul>



						<li class="header"><h2>Order Total</h2></li>



						<li class="last">



							<table width="100%" cellpadding="0" cellspacing="0">



							<tr>



								<td class="lc-form-total" style="text-align:left">Licenses:</td>

								<td class="lc-form-total" style="text-align:right">$50.00</td>



							</tr>



							<tr>



								<td class="lc-form-total" style="text-align:left">Setup Fee:</td>

								<td class="lc-form-total" style="text-align:right">$10.00</td>



							</tr>



							<tr>



								<td class="lc-form-total" style="text-align:left">Vestibulum:</td>

								<td class="lc-form-total" style="text-align:right">$10.00</td>



							</tr>



							<tr>



								<td class="lc-form-total" style="text-align:left">Maecenas:</td>

								<td class="lc-form-total" style="text-align:right">$5.00</td>



							</tr>



							<tr>



								<td class="lc-form-total" style="text-align:left"><strong>Total:</strong></td>

								<td class="lc-form-total" style="text-align:right"><strong>$150.00</strong></td>



							</tr>



							</table>



						</li>



					</ul>



				</div>-->



				<?php } else { ?><?php } ?>



				<div class="lc-side-features" style="padding-right:14px;">



					<ul>



						<li class="one"><div class="icon-left-one"></div><a class="modalEffect" name="popup1" href="#popup1" onclick="return false;"><? printf(_('Instant License %s Activation'),'<br />');?></a></li>

						<li class="two"><div class="icon-left-two"></div><a class="modalEffect" name="popup2" href="#popup2" onclick="return false;"><? printf(_('Bulk Licensing %s Discounts'),'<br />');?></a></li>

						<li class="three"><div class="icon-left-three"></div><a class="modalEffect" name="popup3" href="#popup3" onclick="return false;"><? printf(_('Price Match %s Guarantee'),'<br />');?></a></li>

						<li class="four"><div class="icon-left-four"></div><a class="modalEffect" name="popup4" href="#popup4" onclick="return false;"><? printf(_('Free Software %s Installation'),'<br />');?></a></li>


					</ul>

                     <div id="popup4" class="modal-box">
                        <div id="signup-header">
                            <h3 style="font-size:22px"><?=_('Free Installation Services');?></h3>
                            <div class="close-modal"><a class="modal_close" href="#">×</a></div>
                        </div>
                     	<div style="padding: 20px; padding-top:10px">

                        <?php include($_SERVER['DOCUMENT_ROOT']."/_include/popups/free-installation-services-new.php"); ?>

                     </div>
                    </div>
                    <div id="popup1" class="modal-box">
                        <div id="signup-header">
                            <h3 style="font-size:22px"><?=_('Automated License Activations');?></h3>
                            <div class="close-modal"><a class="modal_close" href="#">×</a></div>
                        </div>
                     	<div style="padding: 20px; padding-top:10px">

                        <?php include($_SERVER['DOCUMENT_ROOT']."/_include/popups/instant-license-activation-new.php"); ?>

                     </div>
                    </div>
                    <div id="popup2" class="modal-box">
                        <div id="signup-header">
                            <h3 style="font-size:22px"><?=_('Bulk Licensing Discounts');?></h3>
                            <div class="close-modal"><a class="modal_close" href="#">×</a></div>
                        </div>
                     	<div style="padding: 20px; padding-top:10px">

                        <?php include($_SERVER['DOCUMENT_ROOT']."/_include/popups/bulk-license-discounts-new.php"); ?>

                     </div>
                    </div>
                    <div id="popup3" class="modal-box">
                        <div id="signup-header">
                            <h3 style="font-size:22px"><?=_('Price Match Guarantee');?></h3>
                            <div class="close-modal"><a class="modal_close" href="#">×</a></div>
                        </div>
                     	<div style="padding: 20px; padding-top:10px">

                        <?php include($_SERVER['DOCUMENT_ROOT']."/_include/popups/price-match-guarantee-new.php"); ?>

                     </div>
                    </div>

                    <div id="popup5" class="modal-box">
                        <div id="signup-header">
                            <h3 style="font-size:22px"><?=_('Money Back Guarantee');?></h3>
                            <div class="close-modal"><a class="modal_close" href="#">×</a></div>
                        </div>
                     	<div style="padding: 20px; padding-top:10px">

                        <?php include($_SERVER['DOCUMENT_ROOT']."/_include/popups/money-back-guarantee-new.php"); ?>

                     </div>
                    </div>



				</div>

<?php if( $menu!="support") { ?>

				<div class="lc-side-guarantee"><div class="lc-side-guarantee-holder" style="background-image:url(<?php echo $img_dir?>/icon-guarantee-<?=getActualPage()?>.png)">

					<a class="modalEffect" name="popup5" href="#popup5" onclick="return false;" >

					<span class="titleLeft"><? printf(_('30 Day %s Money Back'),'<br />');?></span>

					<span class="titleLeftorange"><?=_('Guarantee')?></span>

					</a>

				</div>

                </div>

                <?php }?>



                <?php if( ( $menu=="support") and ($page!='api' and $page!='contact') and 0) { ?>

                <div style="cursor:pointer" onclick="location.href='<?=$site_dir?>/support/billing-system-license-modules.php'" class="lc-side-badge">

					<h2>Get your<br />Billing Systems<br />Module today!</h2>

					<a href="<?=$site_dir?>/support/billing-system-license-modules.php">click here</a>

				</div>



                <?php }?>

                <!--

                <div class="lc-side-badge" onclick="location.href='<?=$site_dir?>/easy-integration/billing-system-license-modules.php'" style="cursor:pointer">

					<h2>Get your API<br />Billing System<br />Modules today!</h2>

					<a href="<?=$site_dir?>/easy-integration/billing-system-license-modules.php">click here</a>

				</div>

				-->

