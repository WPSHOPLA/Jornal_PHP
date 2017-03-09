<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php $page="popup"; include_once("_include/modules/config.php"); ?>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" xml:lang="<?php echo $language; ?>" lang="<?php echo $language; ?>">
<head profile="http://gmpg.org/xfn/11">
	<title><?php echo $site_name; ?></title>
	<meta http-equiv="Content-Type" content="<?php echo $page_encoding; ?>" />
	<meta name="keywords" content="<?php echo $site_keywords; ?>" />
	<meta name="description" content="<?php echo $site_description; ?>" />
	<meta name="author" content="<?php echo $author; ?>" />
	<meta name="copyright" content="<?php echo $copy; ?>" />
    <link rel="shortcut icon" href="<?php echo $img_dir; ?>/icons/favicon.ico" type="image/x-icon" />
	<?php include("_include/modules/css-js-popup.php"); ?>
    <?php include("_include/modules/google-analytics.php"); ?>
</head>
<body>

                       <div class="box-top-right"><div class="box-top-left">Account Holder</div></div>
                       <div class="box-middle-right"><div class="box-middle-left">


                            <div id="error" class="notification error" style="display:none;">
                                 <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi rhoncus elementum odio, vel elementum velit volutpat eget.</span>
                            </div>

                            <form class="form clearfix">
                                <div class="split">
                                    <label>First Name</label>
                                    <input name="fname" class="field" value="Some Name"/>
                                </div>
                                <div class="split">
                                  <label>Last Name</label>
                                  <input name="lname" class="field" value="Some Last Name"/>
                                </div>

                                <label>Address 1</label>
                                <input name="ad1" class="field" value="Address 1" style="width:95%"/>

                                <label>Address 2</label>
                                <input name="ad2" class="field" value="Address 1" style="width:95%"/>

                                <div class="split">
                                    <label>City</label>
                                    <input name="city" class="field" value="City"/>
                                </div>
                                <div class="split">
                                  <label>State</label>
                                  <input name="state" class="field" value="State"/>
                                </div>

                                <div class="split">
                                    <label>Phone</label>
                                    <input name="city" class="field" value="Phone Value"/>
                                </div>
                                <div class="split">
                                  <label>Email</label>
                                  <input name="state" class="field" value="Email Value"/>
                                </div>
                                <div class="actions clearfix">
                                    <a href="#" class="ml15 fr btn btn-action-small"><span>Update Information</span></a>
                                    <a href="#" class="ml15 fr btn btn-soft-action-small"><span>Some Button</span></a>
                                </div>

                              </form>

                            <div id="success" class="notification success" style="display:none;">
                                 <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi rhoncus elementum odio, vel elementum velit volutpat eget.</span>
                            </div>


                       </div></div>
                       <div class="box-btm-right"><div class="box-btm-left"><!--  --></div></div>



</body>
</html>