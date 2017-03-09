
    <!-- Load Jquery -->
    <script src="<?php echo $js_dir; ?>/jquery.js" type="text/javascript" charset="utf-8"></script>
    <!-- End Load -->

	<!-- Preload the buttons -->
	<script type="text/javascript">
         //<![CDATA[
		 jQuery.preloadImages = function() {  for(var i = 0; i<arguments.length; i++)  {  jQuery("<img>").attr("src", arguments[i]);  }	}
		 $.preloadImages( 
		 	"<?php echo $img_dir; ?>/buttons/big-pink-left.png",
		 	"<?php echo $img_dir; ?>/buttons/big-pink-lefta.png",
		 	"<?php echo $img_dir; ?>/buttons/big-pink-lefth.png",
		 	"<?php echo $img_dir; ?>/buttons/big-pink-right.png",
		 	"<?php echo $img_dir; ?>/buttons/big-pink-righta.png",
		 	"<?php echo $img_dir; ?>/buttons/big-pink-righth.png",
		 	"<?php echo $img_dir; ?>/buttons/small-pink-left.png",
		 	"<?php echo $img_dir; ?>/buttons/small-pink-lefta.png",
		 	"<?php echo $img_dir; ?>/buttons/small-pink-lefth.png",
		 	"<?php echo $img_dir; ?>/buttons/small-pink-right.png",
		 	"<?php echo $img_dir; ?>/buttons/small-pink-righta.png",
		 	"<?php echo $img_dir; ?>/buttons/small-pink-righth.png",
		 	"<?php echo $img_dir; ?>/buttons/small-grey-left.png",
		 	"<?php echo $img_dir; ?>/buttons/small-grey-lefta.png",
		 	"<?php echo $img_dir; ?>/buttons/small-grey-lefth.png",
		 	"<?php echo $img_dir; ?>/buttons/small-grey-right.png",
		 	"<?php echo $img_dir; ?>/buttons/small-grey-righta.png",
		 	"<?php echo $img_dir; ?>/buttons/small-grey-righth.png"
		 );
         //]]>
	</script>
	<!-- End Preload the buttons -->


    <!-- Load Jquery Easing -->
    <script src="<?php echo $js_dir; ?>/jquery.easing.js" type="text/javascript"></script>
    <!-- End Load -->

    <!-- Load Jquery EqualHeights -->
    <script src="<?php echo $js_dir; ?>/jquery.equalheights.js" type="text/javascript"></script>
    <!-- End Load -->

    <!-- Load Pretty Photo -->
    <link rel="stylesheet" href="<?php echo $css_dir; ?>/prettyPhoto.css" type="text/css" media="screen" />
    <script src="<?php echo $js_dir; ?>/jquery.prettyPhoto.js" type="text/javascript"></script>
    <!-- End Load -->

    <!-- Load Cufon -->
    <script src="<?php echo $js_dir; ?>/cufon.js" type="text/javascript"></script>
    <script src="<?php echo $font_dir; ?>/proxima-nova-bold.js" type="text/javascript"></script>
    <script src="<?php echo $font_dir; ?>/proxima-nova-semibold.js" type="text/javascript"></script>
    <script src="<?php echo $font_dir; ?>/proxima-nova-regular.js" type="text/javascript"></script>
    <script src="<?php echo $font_dir; ?>/proxima-nova-light.js" type="text/javascript"></script>
    <!-- End Load -->

    <!-- Load MbContainer -->
    <link rel="stylesheet" type="text/css" href="<?php echo $css_dir; ?>/mbContainer.css" title="style"  media="screen"/>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo $js_dir; ?>/mbContainer.js"></script>
    <script type="text/javascript" src="<?php echo $js_dir; ?>/jquery.metadata.js"></script>
    <script type="text/javascript">
      $(function(){
        $(".containerPlus").buildContainers({
          containment:"document",
          elementsPath:"_include/images/elements/",
          mantainOnWindow:false
        });
      });
    </script>
    <!-- End Load -->

    <!-- ALL jQuery Tools. jQuery library -->
    <script src="<?php echo $js_dir; ?>/jquery.tools.js" type="text/javascript" charset="utf-8"></script>
    <!-- End Load -->    

    <!-- BEGIN: load jqplot -->
    <script type="text/javascript" src="<?php echo $js_dir; ?>/jquery.jqplot.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo $css_dir; ?>/jquery.jqplot.css" />
    <!-- END: load jqplot -->

    <!-- BEGIN: password strenght -->
    <script type="text/javascript" src="<?php echo $js_dir; ?>/jquery.passwordst.js"></script>
    <!-- END:  password strenght -->

    <!-- Load some small custom scripts -->
    <script src="<?php echo $js_dir; ?>/custom.js" type="text/javascript"></script>
    <!-- End Load -->

    <!-- Load Main Stylesheets and Default Color and Style -->
    <link rel="stylesheet" href="<?php echo $css_dir; ?>/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo $css_dir; ?>/grid.css" type="text/css" media="screen" />
    <!-- End Load -->


    <!-- Load IE6 Stylesheet -->
    <!--[if IE 6]>
        <link rel="stylesheet" href="<?php echo $css_dir; ?>/ie6.css" type="text/css" media="screen" />
    <![endif]-->
    <!-- End Load -->

    <!-- Load IE7 Stylesheet -->
    <!--[if IE 7]>
        <link rel="stylesheet" href="<?php echo $css_dir; ?>/ie7.css" type="text/css" media="screen" />
    <![endif]-->
    <!-- End Load -->

    <!-- Load PNG Fix older IE Versions -->
    <!--[if lte IE 7]>
        <script type="text/javascript" src="<?php echo $js_dir; ?>/pngfix.js"></script>
        <script type="text/javascript">DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <!-- End Load -->
