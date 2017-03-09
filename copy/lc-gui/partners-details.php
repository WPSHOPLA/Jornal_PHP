<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php $page="partners"; include_once("_include/modules/config.php"); ?>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" xml:lang="<?php echo $language; ?>" lang="<?php echo $language; ?>">
<head profile="http://gmpg.org/xfn/11">
	<title><?php echo $site_name; ?></title>
	<meta http-equiv="Content-Type" content="<?php echo $page_encoding; ?>" />
	<meta name="keywords" content="<?php echo $site_keywords; ?>" />
	<meta name="description" content="<?php echo $site_description; ?>" />
	<meta name="author" content="<?php echo $author; ?>" />
	<meta name="copyright" content="<?php echo $copy; ?>" />
    <link rel="shortcut icon" href="<?php echo $img_dir; ?>/icons/favicon.ico" type="image/x-icon" />
    <link rel="image_src" href="<?php echo $img_dir; ?>/misc/sitethumb.jpg" />
	<?php include("_include/modules/css-js.php"); ?>
    <?php include("_include/modules/google-analytics.php"); ?>

</head>
<body>

<div class="foundation-top">

     <?php include("_include/modules/top.php"); ?>

     <div class="container container_12 box-shadow clearfix">

        <div class="container-top clearfix">
            <h1>Partners</h1>
            <div class="welcome clearfix">
                <div class="user-avatar"><img src="<?php echo $img_dir; ?>/misc/user200.png" width="37" height="37" alt="" /></div>
                <div class="user-data">Welcome John Doe, <br/> <a href="#">My Account</a>  &nbsp;I&nbsp;  <a href="#">Some Link</a> &nbsp;I&nbsp;   <a href="#">Log Out</a></div>
            </div>
        </div>

        <div class="container-body clearfix">

                <div class="grid_12">
                       <div class="box-top-right"><div class="box-top-left">Our Current Partners > Parner Name Here</div></div>
                       <div class="box-middle-right"><div class="box-middle-left">

                            <div class="partner-details">

                                <div class="partner-logo">
                                     <img src="<?php echo $img_dir; ?>/partners/demowolf.gif" alt="" class="image"/>
                                </div>
                                <p>Techniques used in online card-not-present fraud are becoming more and more sophisticated. Traditional fraud screening tools can only determine if a credit card is legitimate or if the user-entered account information matches those on record. Today, fraudsters can obtain personal credit card information, pose as the legitimate card holder, and bypass standard fraud checks.</p>

                                <p>MaxMind however will examine an online transaction from various angles. Their tools are not geared towards verifying the authenticity of the credit card details used for the purchase, but rather, identifying if the purchaser is the legitimate card holder. Through analysis, they are able to identify traits and patterns that are associated with fraudulent orders.</p>

                                <h3>Key Features</h3>

                                <div class="grid_6">
                                   <ul class="bullet-list">
                                      <li>Their tools are not geared towards verifying the authenticity</li>
                                      <li>Through analysis, they are able to identify</li>
                                      <li>Their tools are not geared towards verifying the authenticity</li>
                                      <li>Through analysis, they are able to identify</li>
                                      <li>Their tools are not geared towards verifying the authenticity</li>
                                      <li>Through analysis, they are able to identify</li>
                                   </ul>
                                </div>
                                <div class="grid_6">
                                   <ul class="bullet-list">
                                      <li>Their tools are not geared towards verifying the authenticity</li>
                                      <li>Through analysis, they are able to identify</li>
                                      <li>Their tools are not geared towards verifying the authenticity</li>
                                      <li>Through analysis, they are able to identify</li>
                                      <li>Their tools are not geared towards verifying the authenticity</li>
                                      <li>Through analysis, they are able to identify</li>
                                   </ul>
                                </div>
                                <div class="clear"></div>

                                <p>MaxMind however will examine an online transaction from various angles. Their tools are not geared towards verifying the authenticity of the credit card details used for the purchase, but rather, identifying if the purchaser is the legitimate card holder. Through analysis, they are able to identify traits and patterns that are associated with fraudulent orders.</p>

                                <div class="actions clearfix">
                                    <a href="<?php echo $site_dir; ?>/partners.php" class="mr15 fl btn btn-soft-action-small"><span>Go Back</span></a>
                                    <a href="<?php echo $site_dir; ?>/partners-infopop.php?iframe=true&width=600&height=500" rel="modalWindow" class="ml15 fr btn btn-action-small"><span>Apply</span></a>
                                    <a href="#" class="ml15 fr btn btn-soft-action-small"><span>Some Button</span></a>
                                </div>
                            </div>

                       </div></div>
                       <div class="box-btm-right"><div class="box-btm-left"><!--  --></div></div>

                </div>

                <div class="clear"></div>

                 <div class="grid_12 notification success"><span>Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div>
                <div class="grid_12 notification error"><span>Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div>

        </div>
     </div>
</div>

<?php include("_include/modules/footer.php"); ?>


</body>
</html>