<?php $css=""; include($_SERVER['DOCUMENT_ROOT']."/_include/modules/ubersmith.php"); ?>
<?php
   if (strpos($_SERVER["HTTP_USER_AGENT"], "Safari"))
   {
      echo("<style type='text/css'>
            #menu .menuactivo:hover {
              padding-bottom:15px !important; margin-top:0px!important;
            }
            #menu .dropdown:hover {margin-top:3px!important;}
        </style>");
   }
?>
<div class="lc-top">
<div class="lc-top-holder">
	<div class="lc-top-logo"><a href="<?= _('http://www.licensecube.com'); ?>"><img src="<?=$img_dir?>/logo.gif" width="266" height="49" alt="LicenseCube Logo" /></a></div>
	<div class="lc-top-right" style="padding-right:5px;">
    	<div class="call-go-li"><div class="lc-top-phone"><?= _('Call Us:'); ?> <span class="lc-top-phone-number">(855) <?= _('465-4236'); ?></span></div>
		<span class="lc-top-hours" style="font-size:12px;">(855) 465-4236</span></div>
	 <div class="lang100">
      <div class="language" style="margin-right:25px; margin-left:10px;">
     <table style="width:100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" ><div class="sselected" style=" color:#777777; padding-right:0px; text-transform:uppercase; font-size:11px;">
   <?php if(getActualPage()=='en') echo "English"?><?php if(getActualPage()=='es') echo "Spanish"?><?php if(getActualPage()=='pt') echo "Portuguese"?>
   </div></td>
  </tr>
  <tr>
    <td  <?php if(getActualPage()=='pt') echo "style='padding-left:7px;'"?> ><div id="flags_msddHolder" style="height: 0px; overflow: hidden; position: absolute;" class="ddOutOfVision"><select  id="flags">
                <option title="http://www.licensecube.com/_include/ngui/english.jpg"  value="en" <?php if(getActualPage()=='en') echo "selected=\"selected\""?>>English</option>
                <option title="http://www.licensecube.com/_include/ngui/spanish.jpg" value="es" <?php if(getActualPage()=='es') echo "selected=\"selected\""?>>Spanish</option>
                <!--<option title="http://blog.licensecube.com/_include/gui/brazil.jpg" value="pt" <?php if(getActualPage()=='pt') echo "selected=\"selected\""?>>Portuguese</option>-->
              </select></div><div class="dd" id="flags_msdd" style="width: 89px;"><div class="ddTitle" id="flags_title"><span class="arrow" id="flags_arrow" style="background-position: 0pt 0pt;"></span><span id="flags_titletext" class="ddTitleText"><img alt="english" src="http://www.licensecube.com/_include/ngui/english.jpg"/> <span class="ddTitleText">English</span></span></div><div class="ddChild noBorderTop" id="flags_child" style="width: 87px; z-index: 9999; top: 68.5px; display: block; height: 92px;"><a id="flags_msa_0" onclick="window.location = document.getElementById('lang-en').href;" class="selected enabled" href="javascript:void(0);"><img alt="english"  src="http://www.licensecube.com/_include/ngui/english.jpg"/> <span class="ddTitleText">English</span></a><a id="flags_msa_1" class="enabled" href="javascript:void(0);"><img alt="spanish"  src="http://www.licensecube.com/_include/ngui/spanish.jpg"/> <span class="ddTitleText">Spanish</span></a></div></div>
              </td>
  </tr>
</table>
  </div>
    </div>
	</div>
	<div class="lc-clear"><!-- --></div>
    <ul id="menu" class="lc-menu">
    <li class="noDD2 lchome" ><div class="noDD menuactivo"><a  href="<?=_('http://www.licensecube.com')?>"><?=_('Home')?></a></div>
    </li>
    <li><div class="dropdown"><a <?php if($menu=='cp'){?>style="color:#d75e29 !important"<?php }?> href="<?=$site_dir?><?=_('/control-panels/')?>"><?=_('Control Panels')?></a>
      <div class="dropdown_2columns">
        <div class="col_3 columie9" >
          <div  class="titlesie"><?=_('Control Panels')?></div>
          <ul>
            <li>
              <div class="submenuactive"><div class="twoLine"><a href="<?=$site_dir?><?=_('/control-panels/cpanel-license.php')?>">
              <span class="license-icons icon-cpanel"></span>
              <strong>cPanel/WHM</strong><br  />
              <?php $ubersmith->ServicePlans(true); ?>
               <span class="pricemenu" id="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN0')->price;?><?=_('/year')?></span></a></div></div>
            </li>
            <li>
               <div class="submenuactive"><div class="twoLine"><a href="<?=$site_dir?><?=_('/control-panels/plesk-license.php')?>">
               <span class="license-icons icon-plesk"></span>
               <strong>Plesk Panel <?=$vps_plesk_version?></strong><br  />
               <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN72')->price;?><?=_('/month')?></span></a></div></div>
            </li>
            <li>
              <div class="twoLine"><a href="<?=$site_dir?><?=_('/control-panels/directadmin-license.php')?>">
              <span class="license-icons icon-directadmin"></span>
                <strong>DirectAdmin</strong><br  />
                <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN5')->price;?><?=_('/month')?></span></a></div>
            </li>
            <li>
              <div class="twoLine"><a href="<?=$site_dir?><?=_('/control-panels/softaculous-license.php')?>">
              <span class="license-icons icon-softaculous"></span>
              <strong>Softaculous</strong><br  />
               <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN10')->price;?><?=_('/month')?></span></a></div>
            </li>
            <li>
              <div class="twoLine"><a href="<?=$site_dir?><?=_('/control-panels/fantastico-license.php')?>">
              <span class="license-icons icon-fantastico"></span>
              <strong>Fantastico</strong><br  />
                <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN9')->price;?><?=_('/month')?></span></a></div>
            </li>
            <li>
              <div class="twoLine"><a href="<?=$site_dir?><?=_('/control-panels/installatron-license.php')?>">
              <span class="license-icons icon-installatron_license"></span>
              <strong>Installatron</strong><br  />
               <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN44')->price;?><?=_('/month')?></span></a></div>
            </li>
            <li>
              <div class="twoLine"><a href="<?=$site_dir?><?=_('/control-panels/interworx-license.php')?>">
              <span class="license-icons icon-interworx"></span>
              <strong>InterWorx</strong><br  />
                <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN48')->price;?><?=_('/month')?></span></a></div>
            </li>
            <li>
              <div class="twoLine"><a href="<?=$site_dir?><?=_('/control-panels/ispmanager-license.php')?>">
              <span class="license-icons icon-isp_manager"></span>
              <strong>ISPmanager</strong><br  />
                <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN51')->price;?><?=_('/month')?></span></a></div>
            </li>
          </ul>
        </div>
        <div  class="col_3 columie9-2 titlesie2" style="margin-top:-21px;">
          <h3 class=""></h3>
          <ul>
            <li>
              <div class="twoLine"><a href="<?=$site_dir?><?=_('/control-panels/parallels-virtuozzo-license.php')?>">
              <span class="license-icons icon-parallels-virtuozzo_license"></span>
             <strong>Virtuozzo <?=$dedicated_virtuozzo?></strong><br  />
               <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN75')->price;?><?=_('/month')?></span></a></div>
            </li>
            <li>
              <div class="twoLine"><a href="<?=$site_dir?><?=_('/control-panels/solusvm-license.php')?>">
              <span class="license-icons icon-solusvm_license"></span>
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
              <div class="twoLine"><a href="<?=$site_dir?><?=_('/billing-systems/plesk-billing-license.php')?>">
              <span class="license-icons icon-pleskbilling_license"></span>
              <strong>Plesk Billing</strong><br  />
                <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN82')->price;?><?=_('/month')?></span></a></div>
            </li>
            <li>
              <div class="twoLine"><a href="<?=$site_dir?><?=_('/billing-systems/whmautopilot-license.php')?>">
              <span class="license-icons icon-whmautopilot_license"></span>
             <strong>WHMAutoPilot</strong><br  />
               <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN26')->price;?><?=_('/month')?></span></a></div>
            </li>
            <li>
              <div class="twoLine"><a href="<?=$site_dir?><?=_('/billing-systems/blesta-license.php')?>">
              <span class="license-icons icon-blesta_license"></span>
              <strong>Blesta</strong><br  />
               <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN20')->price;?><?=_('/month')?></span></a></div>
            </li>
            <li>
              <div class="twoLine"><a href="<?=$site_dir?><?=_('/billing-systems/clientexec-license.php')?>">
              <span class="license-icons icon-clientexec_license"></span>
              <strong>ClientExec</strong><br  />
                <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN28')->price;?><?=_('/month')?></span></a></div>
            </li>
      <li>
              <div class="twoLine"><a href="<?=$site_dir?><?=_('/billing-systems/billmanager-license.php')?>">
              <span class="license-icons icon-billmanager_license"></span>
              <strong>BILLmanager</strong><br  />
                <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN87')->price;?><?=_('/month')?></span></a></div>
            </li>
          </ul>
        </div>
      </div>
      </div>
    </li>
    <li><div class="dropdown"><a <?php if($menu=='additional'){?>style="color:#d75e29 !important"<?php }?> href="<?=$site_dir?><?=_('/additional-licenses/')?>"><?php echo sprintf(_('Additional %sLicenses'), '');?></a>
       <div class="dropdown_2columns"  style="width: 460px;">
        <div class="col_3 columie9" style="width: 220px;" >
          <div  class="titlesie"><?php echo sprintf(_('Additional %sLicenses'), '');?></div>
          <ul>
           <li>
              <div class="twoLine"><a href="<?=$site_dir?><?=_('/additional-licenses/parallels-web-presence-builder-license.php')?>">
              <span class="license-icons icon-rvskins"></span>
              <strong>Web Presence Builder</strong><br  />
              <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN76')->price;?><?=_('/month')?></span> </a></div>
            </li>
            <li>
              <div class="twoLine"><a href="<?=$site_dir?><?=_('/additional-licenses/rvskins-license.php')?>">
              <span class="license-icons icon-rvskins"></span>
              <strong>RVSkins</strong><br  />
              <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN23')->price;?><?=_('/month')?></span> </a></div>
            </li>
            <li>
              <div class="twoLine"><a href="<?=$site_dir?><?=_('/additional-licenses/rvsitebuilder-license.php')?>">
              <span class="license-icons icon-rvsitebuilder"></span>
              <strong>RVSiteBuilder</strong><br  />
               <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN21')->price;?><?=_('/month')?></span> </a></div>
            </li>
            <li>
              <div class="twoLine"><a href="<?=$site_dir?><?=_('/additional-licenses/whmxtra-license.php')?>">
              <span class="license-icons icon-whmxtra_license"></span>
              <strong>WHMXtra</strong><br  />
                <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN8')->price;?><?=_('/month')?></span></a></div>
            </li>
            <li>
              <div class="twoLine"><a href="<?=$site_dir?><?=_('/additional-licenses/miva-merchant-license.php')?>">
              <span class="license-icons icon-miva_license"></span>
              <strong>Miva Merchant</strong><br  />
               <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN84')->price;?><?=_('/month')?></span> </a></div>
            </li>
            <li>
              <div class="twoLine"><a href="<?=$site_dir?><?=_('/additional-licenses/whmsonic-license.php')?>">
              <span class="license-icons icon-whmsonic"></span>
              <strong>WHMSonic</strong><br  />
                <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN25')->price;?><?=_('/month')?></span></a></div>
            </li>
            <li>
              <div class="twoLine"><a href="<?=$site_dir?><?=_('/additional-licenses/cloudlinux-license.php')?>">
              <span class="license-icons icon-cloudlinux_license"></span>
              <strong >CloudLinux</strong><br  />
               <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN86')->price;?><?=_('/month')?></span></a></div>
            </li>
             <li>
              <div class="twoLine"><a href="<?=$site_dir?><?=_('/additional-licenses/trendy-sitebuilder-license.php')?>">
              <span class="license-icons icon-trandy_license"></span>
              <strong >Trendy SiteBuilder</strong><br  />
              <?php
                    $trendyTempPlan = $ubersmith->getPlanByCode('LIN90');
                    $totalTPrice = $trendyTempPlan->price;
                    if (isset($trendyTempPlan->option_groups['Trendy SiteBuilder Variants']->options['1291'])) {
                        $totalTPrice += $trendyTempPlan->option_groups['Trendy SiteBuilder Variants']->options['1291']->price;
                    }
                ?>
               <span class="pricemenu" >$<?=$totalTPrice;?><?=_('/month')?></span></a></div>
            </li>
          </ul>
        </div>
        <div  class="col_3 columie9-2 titlesie2" style="margin-top:-2px;">
          <div class=""></div>
          <ul class="mobno">
            <li>
              <div class="twoLine"><a href="<?=$site_dir?><?=_('/additional-licenses/litespeed-license.php')?>">
              <span class="license-icons icon-litespeed_license"></span>
              <strong >LiteSpeed</strong><br  />
               <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN92')->price;?><?=_('/month')?></span></a></div>
            </li>
			 <li>

              <div class="twoLine"><a href="<?=$site_dir?><?=_('/additional-licenses/kernelcare-license.php')?>">
              <span class="license-icons icon-kernelcare_license"></span>
              <strong >KernelCare</strong><br  />
               <span class="pricemenu" >$<?=$price = $ubersmith->getPlanByCode('LIN97')->price;?><?=_('/month')?></span></a></div>
            </li>
            <li>
              <div class="twoLine"><a href="<?=$site_dir?><?=_('/additional-licenses/magicspam-license.php')?>">
              <span class="license-icons icon-magicspam_license"></span>
              <strong >MagicSpam</strong><br  />
               <span class="pricemenu" >$11.49<?=_('/month')?></span></a></div>
            </li>
          </ul>
      </div>
      </div>
      </div>
    </li>
    <li  class="noDD2"><div  class="noDD menuactivo"><a <?php if($menu=='support'){?>style="color:#d75e29 !important"<?php }?> <?php ?> href="<?=$site_dir?><?=_('/support/')?>"><?=_('Support')?></a></div></li>
    <li  class="noDD2"><div  class="noDD menuactivo"><a <?php if($menu=='about'){?>style="color:#d75e29 !important"<?php }?> href="<?=$site_dir?><?=_('/company/')?>"><?=_('Company')?></a></div></li>
    <li  class="noDD2"><div class="noDD menuactivo"><a <?php if($menu=='contact'){?>style="color:#d75e29 !important"<?php }?> href="<?=$site_dir?><?=_('/contact/')?>"><?=_('Contact')?></a></div></li>
</ul>
</div></div>
