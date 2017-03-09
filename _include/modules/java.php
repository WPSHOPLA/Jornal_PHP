

    <?php include_once($_SERVER['DOCUMENT_ROOT']."/_include/modules/language.php"); ?>





    <link rel="stylesheet" type="text/css" href="<?=$css_dir?>/_include/css/jcarousel.skin.css" />

    <!--<link href="<?=$css_dir?>/_include/css/landing/table/style-5.css" rel="stylesheet" type="text/css" />-->

    <link rel="stylesheet" type="text/css" href="<?=$css_dir?>/_include/css/menu-2.css" />

	<script src="<?=$js_dir?>/_include/js-00002/single-0.js" type="text/javascript"></script>

  <!--  <script src="http://www.licensecube.com/_include/js/proxima-nova-light.js" type="text/javascript"></script>

  	<script src="<?=$js_dir?>/_include/js/proxima-nova-regular.js" type="text/javascript"></script>-->

  	<script src="<?=$js_dir?>/_include/js-00002/proxima-nova-semibold.js" type="text/javascript"></script>

  	<script src="http://www.licensecube.com/_include/js/proxima-nova-bold.js" type="text/javascript"></script>

    <script src="<?=$js_dir?>/_include/js-00002/jquery.dd-v2.js" type="text/javascript"></script>



	<link rel="stylesheet" type="text/css" href="http://blog.licensecube.com/_include/css/dd.css" />

  <script type="text/javascript">var myBrowserLenguage = "<?=best_locale($_SERVER['HTTP_ACCEPT_LANGUAGE'], $_SERVER['DOCUMENT_ROOT'] . '/_include/modules/locale')?>"; </script>

   <script src="http://www.licensecube.com/_include/js/translation.js" type="text/javascript"></script>
   <script src="http://www.licensecube.com/_include/js/jquery.leanModal.min.js" type="text/javascript"></script>


<!--	<script src="<?=$js_dir?>/_include/js/main.js" type="text/javascript"></script>

	<script src="<?=$js_dir?>/_include/js/jquery.js" type="text/javascript"></script>

  	<script src="<?=$js_dir?>/_include/js/cufon.js" type="text/javascript"></script>

  	<script src="<?=$js_dir?>/_include/js/proxima-nova-light.js" type="text/javascript"></script>

  	<script src="<?=$js_dir?>/_include/js/proxima-nova-regular.js" type="text/javascript"></script>

  	<script src="<?=$js_dir?>/_include/js/proxima-nova-semibold.js" type="text/javascript"></script>

  	<script src="<?=$js_dir?>/_include/js/proxima-nova-bold.js" type="text/javascript"></script>

  	<script src="<?=$js_dir?>/_include/js/easing.js" type="text/javascript"></script>

	<script src="<?=$js_dir?>/_include/js/jquery.tools.js" type="text/javascript"></script>

	<script src="<?=$js_dir?>/_include/js/jquery.ba-bbq.min.js" type="text/javascript"></script>

	<script src="<?=$js_dir?>/_include/js/jquery.ba-hashchange.min.js" type="text/javascript"></script>

    <script src="<?=$js_dir?>/_include/js/colorbox.js" type="text/javascript"></script>

    <script src="<?=$js_dir?>/_include/js/jquery.jcarousel.js" type="text/javascript"></script>-->





    <!-- Load Pretty Photo -->

    <link rel="stylesheet" href="<?=$js_dir?>/_include/css/jquery.prettyPhoto.css" type="text/css" media="screen" />

    <script src="<?=$js_dir?>/_include/js-00002/jquery.prettyPhoto.js" type="text/javascript"></script>







     <script type="text/javascript">
	 $(document).ready(function(){
			$(".modalEffect").leanModal({ closeButton: ".modal_close" });
			$(".modalEffect").click(function(){
				return false;
			});
	 });

	$(document).ready(function() {

          // PrettyPhoto trigger rel

          $("a[rel^='prettyPhoto']").prettyPhoto();

          $("a[rel='colorbox[feature]']").colorbox({ iframe:true, innerWidth:640, innerHeight:340, arrowKey: false, overlayClose:false });

          $("a[rel='colorbox[instant-activation]']").colorbox({ iframe:true, innerWidth:640, innerHeight:275, arrowKey: false, overlayClose:false });

          $("a[rel='colorbox[bulk-discounts]']").colorbox({ iframe:true, innerWidth:640, innerHeight:340, arrowKey: false, overlayClose:false });

          $("a[rel='colorbox[price-match]']").colorbox({ iframe:true, innerWidth:640, innerHeight:275, arrowKey: false, overlayClose:false });

          $("a[rel='colorbox[free-installation]']").colorbox({ iframe:true, innerWidth:640, innerHeight:280, arrowKey: false, overlayClose:false });

          $("a[rel='colorbox[money-back]']").colorbox({ iframe:true, innerWidth:640, innerHeight:232, arrowKey: false, overlayClose:false });



		  //Forms license

		  $("a[rel='colorbox[forms-email1]']").colorbox({ iframe:true, innerWidth:480, innerHeight:150, arrowKey: false });

		  $("a[rel='colorbox[forms-email2]']").colorbox({ iframe:true, innerWidth:480, innerHeight:150, arrowKey: false });

		  $("a[rel='colorbox[forms-email3]']").colorbox({ iframe:true, innerWidth:480, innerHeight:150, arrowKey: false });



		  $("a[rel='colorbox[forms-password1]']").colorbox({ iframe:true, innerWidth:480, innerHeight:150, arrowKey: false });

		  $("a[rel='colorbox[forms-password2]']").colorbox({ iframe:true, innerWidth:480, innerHeight:150, arrowKey: false });

		  $("a[rel='colorbox[forms-password3]']").colorbox({ iframe:true, innerWidth:480, innerHeight:150, arrowKey: false });



		  $("a[rel='colorbox[forms-type-license1]']").colorbox({ iframe:true, innerWidth:480, innerHeight:150, arrowKey: false });

		  $("a[rel='colorbox[forms-type-license2]']").colorbox({ iframe:true, innerWidth:480, innerHeight:150, arrowKey: false });

		  $("a[rel='colorbox[forms-type-license3]']").colorbox({ iframe:true, innerWidth:480, innerHeight:150, arrowKey: false });



		  $("a[rel='colorbox[forms-licenseID1]']").colorbox({ iframe:true, innerWidth:500, innerHeight:190, arrowKey: false });

		  $("a[rel='colorbox[forms-licenseID2]']").colorbox({ iframe:true, innerWidth:500, innerHeight:190, arrowKey: false });



		  $("a[rel='colorbox[forms-current-ip1]']").colorbox({ iframe:true, innerWidth:480, innerHeight:150, arrowKey: false });

		  $("a[rel='colorbox[forms-current-ip2]']").colorbox({ iframe:true, innerWidth:480, innerHeight:150, arrowKey: false });



		  $("a[rel='colorbox[forms-current-domain1]']").colorbox({ iframe:true, innerWidth:500, innerHeight:190, arrowKey: false });

		  $("a[rel='colorbox[forms-current-domain2]']").colorbox({ iframe:true, innerWidth:500, innerHeight:190, arrowKey: false });



		  $("a[rel='colorbox[forms-new-domain]']").colorbox({ iframe:true, innerWidth:500, innerHeight:190, arrowKey: false });

		  $("a[rel='colorbox[forms-new-ip]']").colorbox({ iframe:true, innerWidth:480, innerHeight:170, arrowKey: false });



		$("a[rel='colorbox[installation-ftp-domain]']").colorbox({ iframe:true, innerWidth:480, innerHeight:180, arrowKey: false });

		$("a[rel='colorbox[installation-ftp-domain2]']").colorbox({ iframe:true, innerWidth:480, innerHeight:180, arrowKey: false });

		$("a[rel='colorbox[installation-ftp-username]']").colorbox({ iframe:true, innerWidth:480, innerHeight:180, arrowKey: false });

		$("a[rel='colorbox[installation-ftp-username2]']").colorbox({ iframe:true, innerWidth:480, innerHeight:180, arrowKey: false });

		$("a[rel='colorbox[installation-ftp-password]']").colorbox({ iframe:true, innerWidth:480, innerHeight:180, arrowKey: false });

		$("a[rel='colorbox[installation-ftp-password2]']").colorbox({ iframe:true, innerWidth:480, innerHeight:180, arrowKey: false });

		$("a[rel='colorbox[installation-ftp-directory]']").colorbox({ iframe:true, innerWidth:480, innerHeight:195, arrowKey: false });

		$("a[rel='colorbox[installation-ftp-directory2]']").colorbox({ iframe:true, innerWidth:480, innerHeight:195, arrowKey: false });

		$("a[rel='colorbox[installation-server-ip]']").colorbox({ iframe:true, innerWidth:480, innerHeight:190, arrowKey: false });

		$("a[rel='colorbox[installation-server-ip2]']").colorbox({ iframe:true, innerWidth:480, innerHeight:190, arrowKey: false });

		$("a[rel='colorbox[installation-server-username]']").colorbox({ iframe:true, innerWidth:480, innerHeight:150, arrowKey: false });

		$("a[rel='colorbox[installation-server-username2]']").colorbox({ iframe:true, innerWidth:480, innerHeight:150, arrowKey: false });

		$("a[rel='colorbox[installation-server-password]']").colorbox({ iframe:true, innerWidth:480, innerHeight:150, arrowKey: false });

		$("a[rel='colorbox[installation-server-password2]']").colorbox({ iframe:true, innerWidth:480, innerHeight:150, arrowKey: false });

		$("a[rel='colorbox[installation-server-status]']").colorbox({ iframe:true, innerWidth:480, innerHeight:180, arrowKey: false });

		$("a[rel='colorbox[installation-server-status2]']").colorbox({ iframe:true, innerWidth:480, innerHeight:180, arrowKey: false });



	});

    </script>

	<script src="<?=$js_dir?>/_include/js-00002/local.js" type="text/javascript"></script>

<script type="text/javascript">//<![CDATA[

 $(function() {

    $('<img/>').attr('src', '/_include/modules/a.php');

});

//]]></script>

    <!-- End Load -->

<!-- local.js -> single.js

    <script type="text/javascript">

/*

    jQuery(document).ready(function() {

              $("ul.css-tabs").tabs("div.css-panes > div");

              $(".scrollable").scrollable();

              $(".accordion").tabs(".pane", {tabs: 'h2', effect: 'slide'});

              $(".accordion-faq").tabs(".pane", {tabs: 'span', effect: 'slide'});

              // PrettyPhoto trigger rel

              $("a[rel^='prettyPhoto']").prettyPhoto();

              $("a[rel^='colorbox']").colorbox({iframe:true, innerWidth:640, innerHeight:585});

              /* External links open in new windows */

              $("a[rel='external']").bind("click.external", function(){

                window.open(this.href);

                return false;

              });

    });

*/

    </script>

-->

<!-- single.js

    <script type="text/javascript" src="<?=$js_dir?>/_include/js/jquery.jcarousel.min.js"></script>

-->

<!-- local.js -> single.js

    <script type="text/javascript">

        jQuery(document).ready(function() {

            jQuery('#license-carousel').jcarousel();

            jQuery('#license-carousela').jcarousel();

        });

    </script>

-->





    <!--[if lt IE 7]><script src="<?=$js_dir?>/_include/js/supersleight.js" type="text/javascript"></script><![endif]-->

<!-- local.js -> single.js

    <script type="text/javascript">

     $(document).ready(function(){

          $('A[rel="_blank"]').each(function(){

               $(this).attr('target', '_blank');

          });

     });

    </script>

-->

<!-- local.js -> single.js

    <script type="text/javascript">

        Cufon.replace('.lc-top-right', { fontFamily: 'Proxima Nova Semibold' });

        Cufon.replace('.lc-menu', { fontFamily: 'Proxima Nova Semibold', textShadow: '1px 1px #ffffff', fontSize: '16px', hover: { color: '#d75e29' } });

        Cufon.replace('#lc-slideshownavh', { fontFamily: 'Proxima Nova Semibold', fontSize: '18px' });

        Cufon.replace('.lc-footer h2', { fontFamily: 'Proxima Nova Semibold', fontSize: '18px' });

        Cufon.replace('.lc-home-box-one h2', { fontFamily: 'Proxima Nova Semibold' });

        Cufon.replace('.lc-home-box-two h2', { fontFamily: 'Proxima Nova Semibold' });

        Cufon.replace('.lc-home-box-three h2', { fontFamily: 'Proxima Nova Semibold' });

        Cufon.replace('.lc-home-box-four h2', { fontFamily: 'Proxima Nova Semibold' });

        Cufon.replace('.lc-home-side-box h2', { fontFamily: 'Proxima Nova Semibold' });

        Cufon.replace('.lc-home-side-box1 h2', { fontFamily: 'Proxima Nova Semibold' });

        Cufon.replace('.lc-content-right h1', { fontFamily: 'Proxima Nova Semibold' });

        Cufon.replace('.lc-content-right h2', { fontFamily: 'Proxima Nova Semibold' });

        Cufon.replace('.lc-content-wide h1', { fontFamily: 'Proxima Nova Semibold' });

        Cufon.replace('.lc-content-wide h2', { fontFamily: 'Proxima Nova Semibold' });

        Cufon.replace('.lc-side-menu h2', { fontFamily: 'Proxima Nova Semibold' });

        Cufon.replace('.lc-side-guarantee h2', { fontFamily: 'Proxima Nova Semibold' });

        Cufon.replace('.lc-header-inner', { fontFamily: 'Proxima Nova Semibold', textShadow: '1px 1px #27293a' });

        Cufon.replace('.lc-box-header h2', { fontFamily: 'Proxima Nova Semibold' });

        Cufon.replace('.lc-service-title h2', { fontFamily: 'Proxima Nova Semibold' });

        Cufon.replace('.lc-service-price', { fontFamily: 'Proxima Nova Bold', textShadow: '1px 1px #282939' });

        Cufon.replace('.lc-service-price-info', { fontFamily: 'Proxima Nova Semibold', textShadow: '1px 1px #282939' });

        Cufon.replace('.lc-service-price1', { fontFamily: 'Proxima Nova Bold' });

        Cufon.replace('.lc-service-price1-info', { fontFamily: 'Proxima Nova Semibold' });

//        Cufon.replace('.lc-service-price2', { fontFamily: 'Proxima Nova Bold', textShadow: '1px 1px #282939' });^M

//        Cufon.replace('.lc-service-price2-info', { fontFamily: 'Proxima Nova Semibold', textShadow: '1px 1px #282939' });^M

        Cufon.replace('.lc-bar h2', { fontFamily: 'Proxima Nova Semibold' });

        Cufon.replace('.lc-slide-one h1', { fontFamily: 'Proxima Nova Semibold', textShadow: '1px 1px #272838' });

        Cufon.replace('.lc-slide-one h2', { fontFamily: 'Proxima Nova Regular', textShadow: '1px 1px #272838' });

        Cufon.replace('.lc-slide-one h2.lc-price-big', { fontFamily: 'Proxima Nova Bold', textShadow: '1px 1px #272838' });

        Cufon.replace('.lc-slide-two h1', { fontFamily: 'Proxima Nova Semibold', textShadow: '1px 1px #a8560a' });

        Cufon.replace('.lc-slide-two h2', { fontFamily: 'Proxima Nova Regular', textShadow: '1px 1px #a8560a' });

        Cufon.replace('.lc-slide-three h1', { fontFamily: 'Proxima Nova Semibold', textShadow: '1px 1px #0f515f' });

        Cufon.replace('.lc-slide-three h2', { fontFamily: 'Proxima Nova Regular', textShadow: '1px 1px #0f515f' });

        Cufon.replace('.lc-slide-four h1', { fontFamily: 'Proxima Nova Semibold', textShadow: '1px 1px #703318' });

        Cufon.replace('.lc-slide-four h2', { fontFamily: 'Proxima Nova Regular', textShadow: '1px 1px #703318' });

        //Cufon.replace('.lc-tab-off', { fontFamily: 'Proxima Nova Semibold' });

        //Cufon.replace('.lc-tab-on', { fontFamily: 'Proxima Nova Semibold' });

        //Cufon.replace('h1', { fontFamily: 'Proxima Nova Semibold' });

        //Cufon.replace('h2', { fontFamily: 'Proxima Nova Semibold' });

        //Cufon.replace('.menu-holder', { fontFamily: 'Proxima Nova Bold', hover: { color: '#ffd675' } });

    </script>

-->

        <!--[if IE 8]>





        <style>

        #titlesie{ margin-top:0px; margin-bottom:18px !important;}

        #titlesie2{ margin-top:16px!important; }

        #titlesie3{ margin-top:0px!important; }

        #menu .menuactivo:hover { padding-bottom:15px !important; margin-top:-1px!important;}

        #menu .dropdown:hover {margin-top:4px!important; padding-top:8px!important;}



        </style>

<![endif]-->



     <!--[if IE 9]>





        <style>

        .columie9{ margin-top:-16px; }

       .columie9-2{ margin-top:-38px !important; }



        </style>

<![endif]-->

 <!--[if IE]>

<style type="text/css">

.cboxIE #cboxTopLeft{background:transparent;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src=../gui/colorbox/internet_explorer/borderTopLeft.png, sizingMethod='scale');}

.cboxIE #cboxTopCenter{background:transparent;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src=../gui/colorbox/internet_explorer/borderTopCenter.png, sizingMethod='scale');}

.cboxIE #cboxTopRight{background:transparent;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src=../gui/colorbox/internet_explorer/borderTopRight.png, sizingMethod='scale');}

.cboxIE #cboxBottomLeft{background:transparent;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src=../gui/colorbox/internet_explorer/borderBottomLeft.png, sizingMethod='scale');}

.cboxIE #cboxBottomCenter{background:transparent;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src=../gui/colorbox/internet_explorer/borderBottomCenter.png, sizingMethod='scale');}

.cboxIE #cboxBottomRight{background:transparent;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src=../gui/colorbox/internet_explorer/borderBottomRight.png, sizingMethod='scale');}

.cboxIE #cboxMiddleLeft{background:transparent;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src=../gui/colorbox/internet_explorer/borderMiddleLeft.png, sizingMethod='scale');}

.cboxIE #cboxMiddleRight{background:transparent;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src=../gui/colorbox/internet_explorer/borderMiddleRight.png, sizingMethod='scale');}

</style>

<![endif]-->

<style type="text/css">

.license-icons{  height:24px; background-image:url(https://my.licensecube.com/_include/gui/iconos-menu.jpg);  border: 1px solid #CFCFCF;   border-radius: 2px 2px 2px 2px;   box-shadow: 0 0 5px #EEEEEE; padding:3px; margin-top:0px; padding-right:27px; float:left;}

.pricemenu{ margin-left:10px;}

.lc-side-menu li.header{background-position: left center !important;}

.icon-cpanel{ background-position:-5px -106px;}

.icon-directadmin{ background-position:-5px -138px;}

.icon-softaculous{ background-position:-5px -505px;}

.icon-interworx{ background-position:-5px -279px;}

.icon-fantastico{ background-position:-5px -206px;}

.icon-installatron_license{ background-position:-5px -244px;}

.icon-isp_manager{ background-position:-5px -318px;}

.icon-plesk{ background-position:-5px -429px;}

.icon-blesta_license{ background-position:-5px -3px;}

.icon-whmautopilot_license{ background-position:-5px -614px;}

.icon-pleskbilling_license{ background-position:-5px -429px;}

.icon-clientexec_license{ background-position:-5px -38px;}

.icon-whmcs_license{ background-position:-5px -652px;}

.icon-miva_license{ background-position:-5px -393px;}

.icon-ksplice_uptrack_license{ background-position:-5px -356px;}

.icon-cloudlinux_license{ background-position:-5px -71px;}

.icon-installatron{ background-position:-5px -244px;}

.icon-whmsonic{ background-position:-5px -689px;}

.icon-enkompass{ background-position:-5px -169px;}

.icon-rvsitebuilder{ background-position:-5px -468px;}

.icon-ksplice_uptrack{ background-position:-5px -356px;}

.icon-rvskins{ background-position:-5px -468px;}

.icon-sitebuilder_license{ background-position:-5px -429px;}

.icon-whmxtra_license{ background-position:-5px -728px;}

.icon-solusvm_license{ background-position:-5px -540px;}

.icon-parallels-virtuozzo_license{ background-position:-5px -576px;}

.icon-hostbill_license{ background-position:-5px -923px;}

.icon-billmanager_license{ background-position:-5px -765px;}

.icon-trandy_license{background-position:-5px -861px;}

.icon-litespeed_license{background-position:-5px -830px;}

.icon-kernelcare_license{background-position:-5px -986px;}

.icon-zopim_license{background-position:-5px -897px;}

.icon-ubersmith_license{background-position:-5px -952px;}

.icon-magicspam_license { background-position: -5px -1046px;}

.modal_close {
position: absolute;
top: 12px;
right: 12px;
display: block;
width: 14px;
height: 14px;
/*background: url(http://www.licensebuddy.com/_include/gui/modal_close.png);*/
z-index: 2;
}

.modal_close:link,.modal_close:hover, .close-modal a, .close-modal a:link, .close-modal a:visited{
color: #444444 !important;
text-decoration:none}

.well-modal {
    background-color: #F5F5F5;
    border: 1px solid rgba(0, 0, 0, 0.05);
    border-radius: 4px 4px 4px 4px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05) inset;
    margin-bottom: 20px;
    min-height: 20px;
    padding: 19px;
}

#lean_overlay {
    position: fixed;
    z-index:9999;
    top: 0px;
    left: 0px;
    height:100%;
    width:100%;
    background: #000;
    display: none;
}
.modal-box  p{ padding-bottom:0px !important}
.modal-box {
width: 600px;

display: none;
background: white;
border-radius: 5px;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.7);
-webkit-box-shadow: 0 0 4px rgba(0, 0, 0, 0.7);
-moz-box-shadow: 0 0px 4px rgba(0,0,0,0.7);
display: none; position: fixed; opacity: 0; z-index: 11000; left: 50%; margin-left: -330px; top: 200px;
}

#signup-header {
background:#F5F5F5;
padding: 18px 18px 8px 18px;
border-bottom: 1px solid #CCC;
border-top-left-radius: 5px;
-moz-border-radius-topleft: 5px;
-webkit-border-top-left-radius: 5px;
border-top-right-radius: 5px;
-moz-border-radius-topright: 5px;
-webkit-border-top-right-radius: 5px;
}
</style>





<style type="text/css">

		#licensecube_sitebadgebg:hover { background-color: #bec0c5 !important;}

		#licensecube_sitebadgebg { background-color: #a2a4ac; border-color: #bec0c5 #717378 #717378 #717378 !important;}

		#menu .menuactivo{padding: 12px 13px; padding-top:13px; padding-bottom:13px; color:#32344D;}

		.lc-side-guarantee a:hover{ text-decoration:none !important}

		.lc-footer h4 {

		border-bottom: 1px solid #5A5C77;

		color: #FFFFFF;

		font-family: Arial,Helvetica,sans-serif;

		font-size: 17px;

		font-weight: normal;

		line-height: 17px;

		margin: 0;

		padding-bottom: 8px;

	}

	.lc-copyright a:link{ color:#FFF !important}



	 .sitelock{ width:160px; height:24px; margin-top:6px; margin-left:3px; }

	 .sitelock a{ background:url(<?php echo $img_dir?>/site-lock.png) no-repeat bottom;		 display:block; width:160px; height:24px; }

	 .sitelock a:hover{ background:url(<?php echo $img_dir?>/site-lock.png) no-repeat top;

		 }





	</style>



<?php

   if(strpos($_SERVER["HTTP_USER_AGENT"], "Firefox"))

   {

     // echo("Firefox");

   }

   elseif (strpos($_SERVER["HTTP_USER_AGENT"], "Chrome"))

   {

      ?>

      <style type="text/css">

      .dd .ddTitle span.ddTitleText { line-height: 19px !important;

	  }

	  </style>

      <?php

   }

   elseif (strpos($_SERVER["HTTP_USER_AGENT"], "Safari"))

   {

      echo("<style>

#menu .menuactivo:hover {



padding-bottom:15px !important; margin-top:-1px!important;

}

#menu .dropdown:hover {



margin-top:2px!important;

}



</style>");

   }



?>

