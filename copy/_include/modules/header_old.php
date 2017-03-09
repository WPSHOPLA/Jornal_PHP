<?php $css=""; include($_SERVER['DOCUMENT_ROOT']."/_include/modules/ubersmith.php"); ?>
  <!--[if IE 8]>
       

        <style>
        .titlesie{ margin-top:0px; margin-bottom:18px !important;}
        .titlesie2{ margin-top:16px!important; }
        .titlesie3{ margin-top:0px!important; }
        #menu .menuactivo:hover { padding-bottom:15px !important; margin-top:-0px!important;}
        #menu .dropdown:hover {margin-top:4px!important; padding-top:8px!important;}
        
        </style>
<![endif]-->

     <!--[if IE 9]>
       

        <style>
        .columie9{ margin-top:-16px; }
       .columie9-2{ margin-top:-38px !important; }
        
        </style>
<![endif]-->


<?php
   if (strpos($_SERVER["HTTP_USER_AGENT"], "Safari"))
   {
      echo("<style type='text/css'>
#menu .menuactivo:hover {

padding-bottom:15px !important; margin-top:0px!important;
}
#menu .dropdown:hover {

margin-top:3px!important;
}

</style>");
   }
?>



<div class="lc-top">

<div class="lc-top-holder">







	<div class="lc-top-logo"><a href="<?= _('http://www.licensecube.com'); ?>"><img src="<?=$img_dir?>/logo.gif" width="266" height="49" alt="LicenseCube Logo" /></a></div>



	<div class="lc-top-right" style="padding-right:5px;">





    	<div style="float:left; margin-right:7px;"><div class="lc-top-phone"><?= _('Call Us:'); ?> <span class="lc-top-phone-number">(855) <?= _('GO-LICENSE'); ?></span></div>



		<span class="lc-top-hours" style="font-size:12px;">(855) 465-4236</span></div>

        

  

	 <div style="float:right">

     

     

      <div class="language" style="margin-right:25px; margin-left:10px;">

     <table style="width:100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td align="center" ><div class="sselected" style=" color:#777777; padding-right:0px; text-transform:uppercase; font-size:11px;">

   <?php if(getActualPage()=='en') echo "English"?><?php if(getActualPage()=='es') echo "Spanish"?><?php if(getActualPage()=='pt') echo "Portuguese"?>

   </div></td>

  </tr>

  <tr>

    <td  <?php if(getActualPage()=='pt') echo "style='padding-left:7px;'"?> ><div id="flags_msddHolder" style="height: 0px; overflow: hidden; position: absolute;" class="ddOutOfVision"><select  id="flags">

                <option title="http://blog.licensecube.com/_include/gui/english.jpg"  value="en" <?php if(getActualPage()=='en') echo "selected=\"selected\""?>>English</option>

                <option title="http://blog.licensecube.com/_include/gui/spanish.jpg" value="es" <?php if(getActualPage()=='es') echo "selected=\"selected\""?>>Spanish</option>

                

                <!--<option title="http://blog.licensecube.com/_include/gui/brazil.jpg" value="pt" <?php if(getActualPage()=='pt') echo "selected=\"selected\""?>>Portuguese</option>-->

              </select></div><div class="dd" id="flags_msdd" style="width: 89px;"><div class="ddTitle" id="flags_title"><span class="arrow" id="flags_arrow" style="background-position: 0pt 0pt;"></span><span id="flags_titletext" class="ddTitleText"><img alt="english" src="http://blog.licensecube.com/_include/gui/english.jpg"/> <span class="ddTitleText">English</span></span></div><div class="ddChild noBorderTop" id="flags_child" style="width: 87px; z-index: 9999; top: 68.5px; display: block; height: 92px;"><a id="flags_msa_0" onclick="window.location = document.getElementById('lang-en').href;" class="selected enabled" href="javascript:void(0);"><img alt="english"  src="http://blog.licensecube.com/_include/gui/english.jpg"/> <span class="ddTitleText">English</span></a><a id="flags_msa_1" class="enabled" href="javascript:void(0);"><img alt="spanish"  src="http://blog.licensecube.com/_include/gui/spanish.jpg"/> <span class="ddTitleText">Spanish</span></a><!--<a id="flags_msa_2" class="enabled" href="javascript:void(0);"><img align="absmiddle" src="http://blog.licensecube.com/_include/gui/portugese.jpg"> <span class="ddTitleText">Portugese</span></a><a id="flags_msa_3" class="enabled" href="javascript:void(0);"><img align="absmiddle" src="http://blog.licensecube.com/_include/gui/brazil.jpg"> <span class="ddTitleText">Portuguese</span></a>--></div></div><script  type="text/javascript">

                $(document).ready(function(e) {

                  try {

                  $("#flags").msDropDown();

                  } catch(e) {   }

                  });

				  

				

				 

				  /* $('#flags').click(function() 

				   {

					   if( document.getElementById('lang-es')==null)  

					   		$('#flags_msa_1').hide(); 

				   	   if( document.getElementById('icl-pt-br')==null) 

					   		$('#flags_msa_2').hide(); 

					});*/

				   $('#flags').change(function() { 

					   //alert(document.getElementById('flags').value)

					   if(document.getElementById('flags').value=='en'){
						setCookie("language", 'en', "/", 0, ".licensecube.com");
					  	//window.location = "http://www.licensecube.com/"; 
						changeDomain('en');
						return false;}

						 if(document.getElementById('flags').value=='es') {

					  		setCookie("language", 'es', "/", 0, ".licensecube.com");
							//window.location  = "http://es.licensecube.com/"; return false;
							changeDomain('es');
							}

						else

							if(document.getElementById('icl-pt-br')!=null) window.location = document.getElementById('icl-pt-br').href;

				  });

				  

				  

				  Cufon.replace('.pricemenu', { fontFamily: 'Proxima Nova Semibold', fontSize: '12px', color: '#999', hover: {  fontSize: '12px !important' } });

                  </script></td>

  </tr>

</table>



    <?php //do_action('icl_language_selector');?>

    

    

  </div>

    

    

    </div>

	</div>

   



	<div class="lc-clear"><!-- --></div>
    
    
    <ul id="menu" class="lc-menu">

        

    <li class="noDD2" style="padding-left:11px; "><div class="noDD menuactivo"><a  href="<?=_('http://www.licensecube.com')?>"><?=_('Home')?></a></div>   

    </li>

    <li><div class="dropdown"><a <?php if($menu=='cp'){?>style="color:#d75e29 !important"<?php }?> href="<?=$site_dir?><?=_('/control-panels/')?>"><?=_('Control Panels')?></a>

      <div class="dropdown_3columns">

        <div class="col_3 columie9" >

          <div  class="titlesie"><?=_('VPS Licenses')?></div>

          <ul>

            <li>

              <div class="submenuactive"><div class="twoLine"><a href="<?=$site_dir?><?=_('/control-panels/cpanel-license.php?vps')?>">
              <span class="license-icons icon-cpanel"></span>
              <!--<img src="<?=$img_dir?>/menu/cp.png" alt="" class="img_left imgshadow" />-->
              <strong>cPanel/WHM</strong><br  />

               <span class="pricemenu" id="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN0')->price;?><?=_('/month')?></span></a></div></div>

            </li>

            <li>

               <div class="submenuactive"><div class="twoLine"><a href="<?=$site_dir?><?=_('/control-panels/plesk-license.php?vps')?>">
               <span class="license-icons icon-plesk"></span>
               <!--<img src="<?=$img_dir?>/menu/plesk.png" alt="" class="img_left imgshadow" />-->
               <strong>Plesk Panel <?=$vps_plesk_version?></strong><br  />

               <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN72')->price;?><?=_('/month')?></span></a></div></div>

            </li>

            <li>

              <div class="twoLine"><a href="<?=$site_dir?><?=_('/control-panels/directadmin-license.php?vps')?>">
              <span class="license-icons icon-directadmin"></span>
              <!--<img src="<?=$img_dir?>/menu/directAdmin.png" alt="" class="img_left imgshadow" />--><strong>DirectAdmin</strong><br  />

                <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN5')->price;?><?=_('/month')?></span></a></div>

            </li>

            <li>

              <div class="twoLine"><a href="<?=$site_dir?><?=_('/control-panels/softaculous-license.php?vps')?>">
              <span class="license-icons icon-softaculous"></span>
              <!--<img src="<?=$img_dir?>/menu/softaculas.png" alt="" class="img_left imgshadow" />-->
              <strong>Softaculous</strong><br  />

               <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN10')->price;?><?=_('/month')?></span></a></div>

            </li>

            <li>

              <div class="twoLine"><a href="<?=$site_dir?><?=_('/control-panels/fantastico-license.php?vps')?>">
              <span class="license-icons icon-fantastico"></span>
              <!--<img src="<?=$img_dir?>/menu/fantastico.png" alt="" class="img_left imgshadow" />-->
              <strong>Fantastico</strong><br  />

                <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN9')->price;?><?=_('/month')?></span></a></div>

            </li>

            <li>

              <div class="twoLine"><a href="<?=$site_dir?><?=_('/control-panels/installatron-license.php?vps')?>">
              <span class="license-icons icon-installatron_license"></span>
              <!--<img src="<?=$img_dir?>/menu/installatron.png" alt="" class="img_left imgshadow" />-->
              <strong>Installatron</strong><br  />

               <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN44')->price;?><?=_('/month')?></span></a></div>

            </li>

            <li>

              <div class="twoLine"><a href="<?=$site_dir?><?=_('/control-panels/interworx-license.php?vps')?>">
              <span class="license-icons icon-interworx"></span>
              <!--<img src="<?=$img_dir?>/menu/interworx.png" alt="" class="img_left imgshadow" />-->
              <strong>InterWorx</strong><br  />

                <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN48')->price;?><?=_('/month')?></span></a></div>

            </li>

            <li>

              <div class="twoLine"><a href="<?=$site_dir?><?=_('/control-panels/ispmanager-license.php?vps')?>">
              <span class="license-icons icon-isp_manager"></span>
              <!--<img src="<?=$img_dir?>/menu/ispmanager.png" alt="" class="img_left imgshadow" />-->
              <strong>ISPmanager</strong><br  />

                <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN51')->price;?><?=_('/month')?></span></a></div>

            </li>

          </ul>

        </div>

        <div class="col_3 columie9">

          <div class="titlesie"><?=_('Dedicated Licenses')?></div>

          <ul>

            <li>

              <div class="twoLine"><a href="<?=$site_dir?><?=_('/control-panels/cpanel-license.php?dedicated')?>">
              <span class="license-icons icon-cpanel"></span>
              <!--<img src="<?=$img_dir?>/menu/cp.png" alt="" class="img_left imgshadow" />-->
              <strong>cPanel/WHM</strong><br  />

               <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN14')->price;?><?=_('/month')?></span></a></div>

            </li>

            <li>

              <div class="twoLine"><a href="<?=$site_dir?><?=_('/control-panels/plesk-license.php?dedicated')?>">
              <span class="license-icons icon-plesk"></span>
              <!--<img src="<?=$img_dir?>/menu/plesk.png" alt="" class="img_left imgshadow" />-->
              <strong>Plesk Panel <?=$vps_plesk_version?></strong><br  />

               <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN73')->price;?><?=_('/month')?></span></a></div>

            </li>

            <li>

              <div class="twoLine"><a href="<?=$site_dir?><?=_('/control-panels/directadmin-license.php?dedicated')?>">
              <span class="license-icons icon-directadmin"></span>
              <!--<img src="<?=$img_dir?>/menu/directAdmin.png" alt="" class="img_left imgshadow" />-->
              <strong>DirectAdmin</strong><br  />

               <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN15')->price;?><?=_('/month')?></span> </a></div>

            </li>

            <li>

              <div class="twoLine"><a href="<?=$site_dir?><?=_('/control-panels/softaculous-license.php?dedicated')?>">
              <span class="license-icons icon-softaculous"></span>
              <!--<img src="<?=$img_dir?>/menu/softaculas.png" alt="" class="img_left imgshadow" />-->
              <strong>Softaculous</strong><br  />

                <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN16')->price;?><?=_('/month')?></span></a></div>

            </li>

            <li>

              <div class="twoLine"><a href="<?=$site_dir?><?=_('/control-panels/fantastico-license.php?dedicated')?>">
              <span class="license-icons icon-fantastico"></span>
              <!--<img src="<?=$img_dir?>/menu/fantastico.png" alt="" class="img_left imgshadow" />-->
              <strong>Fantastico</strong><br  />

               <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN17')->price;?><?=_('/month')?></span></a></div>

            </li>

            <li>

              <div class="twoLine"><a href="<?=$site_dir?><?=_('/control-panels/installatron-license.php?dedicated')?>">
              <span class="license-icons icon-installatron_license"></span>
              <!--<img src="<?=$img_dir?>/menu/installatron.png" alt="" class="img_left imgshadow" />-->
              <strong>Installatron</strong><br  />

                <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN45')->price;?><?=_('/month')?></span></a></div>

            </li>

            <li>

              <div class="twoLine"><a href="<?=$site_dir?><?=_('/control-panels/interworx-license.php?dedicated')?>">
              <span class="license-icons icon-interworx"></span>
              <!--<img src="<?=$img_dir?>/menu/interworx.png" alt="" class="img_left imgshadow" />-->
              <strong>InterWorx</strong><br  />

               <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN47')->price;?><?=_('/month')?></span></a></div>

            </li>

            <li>

              <div class="twoLine"><a href="<?=$site_dir?><?=_('/control-panels/ispmanager-license.php?dedicated')?>">
              <span class="license-icons icon-isp_manager"></span>
              <!--<img src="<?=$img_dir?>/menu/ispmanager.png" alt="" class="img_left imgshadow" />-->
              <strong>ISPmanager</strong><br  />

               <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN51')->price;?><?=_('/month')?></span></a></div>

            </li>

          </ul>

        </div>

        <div  class="col_3 columie9-2 titlesie2" style="margin-top:-21px;">

          <h3 class=""></h3>

          <ul>

            <!--<li>

              <div class="twoLine"><a href="<?=$site_dir?><?=_('/control-panels/enkompass-license.php?dedicated')?>">
              <span class="license-icons icon-enkompass"></span>
              <strong>Enkompass</strong><br  />

                <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN11')->price;?><?=_('/month')?></span></a></div>

            </li>-->

            <li>

              <div class="twoLine"><a href="<?=$site_dir?><?=_('/control-panels/parallels-virtuozzo-license.php?dedicated')?>">
              <span class="license-icons icon-parallels-virtuozzo_license"></span>
             <!-- <img src="<?=$img_dir?>/menu/virtuozzo.png" alt="" class="img_left imgshadow" />-->
             <strong>Virtuozzo <?=$dedicated_virtuozzo?></strong><br  />

               <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN75')->price;?><?=_('/month')?></span></a></div>

            </li>

            <li>

              <div class="twoLine"><a href="<?=$site_dir?><?=_('/control-panels/solusvm-license.php?dedicated')?>">
              <span class="license-icons icon-solusvm_license"></span>
              <!--<img src="<?=$img_dir?>/menu/solusVM.png" alt="" class="img_left imgshadow" />-->
              <strong>SolusVM</strong><br  />

                <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN46')->price;?><?=_('/month')?></span></a></div>

            </li>

          </ul>

        </div>

      </div>

      </div>

    </li>

    <li><div class="dropdown"><a <?php if($menu=='billing'){?>style="color:#d75e29 !important"<?php }?> href="<?=$site_dir?><?=_('/billing-systems/')?>"><?php echo sprintf(_('Billing %sSystems'), ' ');?></a>

      <div class="dropdown_1column">

        <div class="col_1 columie9">

          <div class="titlesie"><?=_('Billing Systems')?></div>

          <ul>

            <li>

              <div class="twoLine"><a href="<?=$site_dir?><?=_('/billing-systems/whmcs-license.php')?>">
              <span class="license-icons icon-whmcs_license"></span>
              <!--<img src="<?=$img_dir?>/menu/WHMCS.png" alt="" class="img_left imgshadow" />-->
              <strong>WHMCS</strong><br  />

                <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN83')->price;?><?=_('/month')?></span></a></div>

            </li>

            <li>

              <div class="twoLine"><a href="<?=$site_dir?><?=_('/billing-systems/plesk-billing-license.php')?>">
              <span class="license-icons icon-pleskbilling_license"></span>
              <!--<img src="<?=$img_dir?>/menu/plesk.png" alt="" class="img_left imgshadow" />-->
              <strong>Plesk Billing</strong><br  />

                <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN82')->price;?><?=_('/month')?></span></a></div>

            </li>

            <li>

              <div class="twoLine"><a href="<?=$site_dir?><?=_('/billing-systems/whmautopilot-license.php')?>">
              <span class="license-icons icon-whmautopilot_license"></span>
             <!-- <img src="<?=$img_dir?>/menu/WHMautopilot.png" alt="" class="img_left imgshadow" />-->
             <strong>WHMAutoPilot</strong><br  />

               <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN26')->price;?><?=_('/month')?></span></a></div>

            </li>

            <li>

              <div class="twoLine"><a href="<?=$site_dir?><?=_('/billing-systems/blesta-license.php')?>">
              <span class="license-icons icon-blesta_license"></span>
              <!--<img src="<?=$img_dir?>/menu/blesta.png" alt="" class="img_left imgshadow" />-->
              <strong>Blesta</strong><br  />

               <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN20')->price;?><?=_('/month')?></span></a></div>

            </li>

            <li>

              <div class="twoLine"><a href="<?=$site_dir?><?=_('/billing-systems/clientexec-license.php')?>">
              
              <span class="license-icons icon-clientexec_license"></span><!--<img src="<?=$img_dir?>/menu/clientexec.png" alt="" class="img_left imgshadow" />-->
              <strong>ClientExec</strong><br  />

                <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN28')->price;?><?=_('/month')?></span></a></div>

            </li>

          </ul>

        </div>

      </div>

      </div>

    </li>

    <li><div class="dropdown"><a <?php if($menu=='additional'){?>style="color:#d75e29 !important"<?php }?> href="<?=$site_dir?><?=_('/additional-licenses/')?>"><?php echo sprintf(_('Additional %sLicenses'), '');?></a>

      <div class="dropdown_2columns">

        <div class="col_2 columie9">

          <div  class="titlesie"><?=_('VPS Licenses')?></div>

          <ul>

            <li>

              <div class="twoLine"><a href="<?=$site_dir?><?=_('/additional-licenses/parallels-sitebuilder-license.php?vps')?>">
              <span class="license-icons icon-sitebuilder_license"></span>
              <!--<img src="<?=$img_dir?>/menu/plesk.png" alt="" class="img_left imgshadow" />-->
              <strong>Plesk SiteBuilder</strong><br  />

                <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN76')->price;?><?=_('/month')?></span></a></div>

            </li>

            <li>



              <div class="twoLine"><a href="<?=$site_dir?><?=_('/additional-licenses/rvskins-license.php?vps')?>">
              <span class="license-icons icon-rvskins"></span>
              <!--<img src="<?=$img_dir?>/menu/rvskins.png" alt="" class="img_left imgshadow" />-->
              <strong>RVSkin</strong><br  />

              <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN23')->price;?><?=_('/month')?></span> </a></div>

            </li>

            <li>

              <div class="twoLine"><a href="<?=$site_dir?><?=_('/additional-licenses/rvsitebuilder-license.php?vps')?>">
              <span class="license-icons icon-rvsitebuilder"></span><!--<img src="<?=$img_dir?>/menu/rvskins.png" alt="" class="img_left imgshadow" />-->
              <strong>RVSiteBuilder</strong><br  />

               <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN21')->price;?><?=_('/month')?></span> </a></div>

            </li>

            <li>

              <div class="twoLine"><a href="<?=$site_dir?><?=_('/additional-licenses/whmxtra-license.php?vps')?>">
              <span class="license-icons icon-whmxtra_license"></span>
              <!--<img src="<?=$img_dir?>/menu/whmxtra.png" alt="" class="img_left imgshadow" />-->
              <strong>WHMXtra</strong><br  />

                <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN8')->price;?><?=_('/month')?></span></a></div>

            </li>

            <li>

              <div class="twoLine"><a href="<?=$site_dir?><?=_('/additional-licenses/miva-merchant-license.php?vps')?>">
              <span class="license-icons icon-miva_license"></span>
              <!--<img src="<?=$img_dir?>/menu/miva.png" alt="" class="img_left imgshadow" />-->
              <strong>Miva Merchant</strong><br  />

               <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN84')->price;?><?=_('/month')?></span> </a></div>

            </li>

            <li>

              <div class="twoLine"><a href="<?=$site_dir?><?=_('/additional-licenses/whmsonic-license.php?vps')?>">
              <span class="license-icons icon-whmsonic"></span>
              <!--<img src="<?=$img_dir?>/menu/WHMSonic.png" alt="" class="img_left imgshadow" />-->
              <strong>WHMSonic</strong><br  />

                <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN25')->price;?><?=_('/month')?></span></a></div>

            </li>

          </ul>

        </div>

        <div  style="margin-top:-21px;" class="col_2 columie9-2 titlesie3"  >

          <div class="titlesie"><?=_('Dedicated Licenses')?></div>

           <ul>

            <li>

              <div class="twoLine"><a href="<?=$site_dir?><?=_('/additional-licenses/parallels-sitebuilder-license.php?dedicated')?>">
              <span class="license-icons icon-sitebuilder_license"></span>
              <!--<img src="<?=$img_dir?>/menu/plesk.png" alt="" class="img_left imgshadow" />-->
              <strong>Plesk SiteBuilder</strong><br  />

               <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN77')->price;?><?=_('/month')?></span></a></div>

            </li>

            <li>

              <div class="twoLine"><a href="<?=$site_dir?><?=_('/additional-licenses/rvskins-license.php?dedicated')?>">
              <span class="license-icons icon-rvskins"></span>
              <!--<img src="<?=$img_dir?>/menu/rvskins.png" alt="" class="img_left imgshadow" />-->
              <strong>RVSkin</strong><br  />

               <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN24')->price;?><?=_('/month')?></span> </a></div>

            </li>

            <li>

              <div class="twoLine"><a href="<?=$site_dir?><?=_('/additional-licenses/rvsitebuilder-license.php?dedicated')?>">
              <span class="license-icons icon-rvsitebuilder"></span>
              <!--<img src="<?=$img_dir?>/menu/rvskins.png" alt="" class="img_left imgshadow" />-->
              <strong>RVSiteBuilder</strong><br  />

                <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN22')->price;?><?=_('/month')?></span></a></div>

            </li>

            <li>

              <div class="twoLine"><a href="<?=$site_dir?><?=_('/additional-licenses/whmxtra-license.php?dedicated')?>">
              <span class="license-icons icon-whmxtra_license"></span>
              <!--<img src="<?=$img_dir?>/menu/whmxtra.png" alt="" class="img_left imgshadow" />-->
              <strong>WHMXtra</strong><br  />

                <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN8')->price;?><?=_('/month')?></span></a></div>

            </li>

            <li>

              <div class="twoLine"><a href="<?=$site_dir?><?=_('/additional-licenses/miva-merchant-license.php?dedicated')?>">
              <span class="license-icons icon-miva_license"></span>
              <!--<img src="<?=$img_dir?>/menu/miva.png" alt="" class="img_left imgshadow" />-->
              <strong>Miva Merchant</strong><br  />

                <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN84')->price;?><?=_('/month')?></span></a></div>

            </li>

            <li>

              <div class="twoLine"><a href="<?=$site_dir?><?=_('/additional-licenses/whmsonic-license.php?dedicated')?>">
              <span class="license-icons icon-whmsonic"></span>
              <!--<img src="<?=$img_dir?>/menu/WHMSonic.png" alt="" class="img_left imgshadow" />-->
               <strong>WHMSonic</strong><br  />

                <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN27')->price;?><?=_('/month')?></span></a></div>

            </li>

            <!--<li>

              <div class="twoLine"><a href="<?=$site_dir?><?=_('/additional-licenses/ksplice-license.php?dedicated')?>">
              <span class="license-icons icon-ksplice_uptrack_license"></span>
             <img src="<?=$img_dir?>/menu/KSplice.png" alt="" class="img_left imgshadow" />
              <strong>Ksplice</strong><br  />

               <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN85')->price;?><?=_('/month')?></span></a></div>

            </li>-->

            <li>

              <div class="twoLine"><a href="<?=$site_dir?><?=_('/additional-licenses/cloudlinux-license.php?dedicated')?>">
              <span class="license-icons icon-cloudlinux_license"></span>
              <!--<img src="<?=$img_dir?>/menu/cloudLinux.png" alt="" class="img_left imgshadow" />-->
              <strong >CloudLinux</strong><br  />

               <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN86')->price;?><?=_('/month')?></span></a></div>

            </li>



          </ul>

        </div>

      </div>

      </div>

    </li>

    <li  class="noDD2"><div  class="noDD menuactivo"><a <?php if($menu=="support"){ echo 'style="color:#d75e29 !important"';}?> href="<?=$site_dir?><?=_('/support/kb/')?>"><?=_('Support')?></a></div></li>

    <li  class="noDD2"><div  class="noDD menuactivo"><a <?php if($menu=='about'){?>style="color:#d75e29 !important"<?php }?> href="<?=$site_dir?><?=_('/company/')?>"><?=_('Company')?></a></div></li>

    <li  class="noDD2"><div class="noDD menuactivo"><a <?php if($menu=='contact'){?>style="color:#d75e29 !important"<?php }?> href="<?=$site_dir?><?=_('/contact/')?>"><?=_('Contact')?></a></div></li>

</ul>
    
    
    
	<!--<div class="lc-menu">
		<ul>
			<li><a href="http://www.licensecube.com"<?php if( $menu=="home" ) { ?> class="selected"<?php } else { ?><?php } ?> ><?=_("Home");?></a></li>
			<li><a href="http://www.licensecube.com/control-panels"<?php if( $menu=="cp" ) { ?> class="selected"<?php } else { ?><?php } ?> ><?=_("Control Panels");?></a></li>
			<li><a href="http://www.licensecube.com/billing-systems"<?php if( $menu=="billing" ) { ?> class="selected"<?php } else { ?><?php } ?> ><?=_("Billing Systems");?></a></li>
			<li><a href="http://www.licensecube.com/additional-licenses"<?php if( $menu=="additional" ) { ?> class="selected"<?php } else { ?><?php } ?> ><?=_("Additional Licenses");?></a></li>
			<li><a href="http://www.licensecube.com/support/kb"<?php if( $menu=="support" ) { ?> class="selected"<?php } else { ?><?php } ?> ><?=_("Support");?></a></li>
			<li><a href="http://www.licensecube.com/company"<?php if( $menu=="about" ) { ?> class="selected"<?php } else { ?><?php } ?> ><?=_("Company");?></a></li>
			<li class="last"><a href="http://www.licensecube.com/contact"<?php if( $menu=="contact" ) { ?> class="selected"<?php } else { ?><?php } ?> ><?=_("Contact");?></a></li>
		</ul>
		<div class="lc-clear"></div>
	</div>-->

</div></div>
