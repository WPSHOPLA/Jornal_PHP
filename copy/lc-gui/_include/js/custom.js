jQuery(document).ready(function() {
          // Jquery Tools Scrollable
          $(".scrollable").scrollable();
          // Jquery Tools Accordions
          $(".accordion").tabs(".pane", {tabs: 'h2', effect: 'slide'});
          $(".accordion-faq").tabs(".pane", {tabs: 'span', effect: 'slide'});
          // External links open in new windows
          $("a[rel='external']").bind("click.external", function(){  window.open(this.href);  return false;  });
          // PrettyPhoto trigger rel
          $("a[rel^='modalWindow']").prettyPhoto({ animation_speed: 'fast', opacity: 0.60, theme: 'facebook' });
          $(".partners .partner").equalHeights();
          //$(".hosting-plan-vps").equalHeights();
          $('#passwordst1').pstrength();
          $('#passwordst2').pstrength();
          // Jquery Tools Tabs
          $("ul.tabs").tabs("div.panes > div");
          $("ul.css-tabs").tabs("div.css-panes > div.pane");
});

// simple hide no animation
function hide(id){  if (document.getElementById){  obj = document.getElementById(id);  obj.style.display = "none";  } }

// simple show no animation
function show(id){  if (document.getElementById){  obj = document.getElementById(id);  obj.style.display = ""; } }

// jquery hide, show and toggle
function ajaxshow(id){	$(id).fadeIn("slow");	}
function ajaxhide(id){	$(id).fadeOut("slow");	}
function toggle(id)  {	$(id).slideToggle("fast");  }


// Cufon Replacements
Cufon.replace(' .container-top h1, .login-welcome h1, .btn ', { hover: true, fontFamily: 'Proxima Nova Bold' });
Cufon.replace(' .menu li a, .data-table-horizontal th ', { hover: true, textShadow: '1px 1px #0b1520', fontFamily: 'Proxima Nova Bold' });
Cufon.replace(' .data-table-horizontal th, .data-table-vertical th ', { hover: true, textShadow: '1px 1px #4f4f4f', fontFamily: 'Proxima Nova Semibold' });
Cufon.replace(' .data-table-vertical caption, .data-table-horizontal caption, .css-tabs h3, #license-configurator h3, #apiactive h4, #notification-language h3, #top-up h4 ', { hover: true, textShadow: '1px 1px #ffffff', fontFamily: 'Proxima Nova Semibold' });

