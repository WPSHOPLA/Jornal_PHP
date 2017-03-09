<script type="text/javascript">
(function() {
	  document.getElementById('faceicon').target = "_blank";
	  document.getElementById('twittericon').target = "_blank";
	  document.getElementById('youicon').target = "_blank";
	  document.getElementById('rssicon').target = "_blank";      
})();

</script>

 
<?php if(getActualPage()=='en') :?>
<!-- #3 PIXEL (ADROLL) RETARGETING -->
<script type="text/javascript">
adroll_adv_id = "B7DX3FHMUBDYHNHX2V6732";
adroll_pix_id = "4UCY6BXJJFAEVDC4TACH4Y";
(function () {
var oldonload = window.onload;
window.onload = function(){
   __adroll_loaded=true;
   var scr = document.createElement("script");
   var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
   scr.setAttribute('async', 'true');
   scr.type = "text/javascript";
   scr.src = host + "/j/roundtrip.js";
   ((document.getElementsByTagName('head') || [null])[0] ||
    document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
   if(oldonload){oldonload()}};
}());
</script>
<?php endif;?>
<?php if(getActualPage()=='es') :?>
<script type="text/javascript">
adroll_adv_id = "VKXYPN73EZDG5AUDDFRP5G";
adroll_pix_id = "HRDHD54ZSRBNJPL5BTLCBA";
(function () {
var oldonload = window.onload;
window.onload = function(){
   __adroll_loaded=true;
   var scr = document.createElement("script");
   var host = (("https:" == document.location.protocol) ?
"https://s.adroll.com" : "http://a.adroll.com");
   scr.setAttribute('async', 'true');
   scr.type = "text/javascript";
   scr.src = host + "/j/roundtrip.js";
   ((document.getElementsByTagName('head') || [null])[0] ||
    document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
   if(oldonload){oldonload()}};
}());
</script>
<?php endif;?>