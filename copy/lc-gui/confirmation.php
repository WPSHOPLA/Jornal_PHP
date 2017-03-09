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

                       <div class="box-top-right"><div class="box-top-left">Please Confirm</div></div>
                       <div class="box-middle-right"><div class="box-middle-left">


                            <div id="error" class="notification error" style="display:none;">
                                 <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi rhoncus elementum odio, vel elementum velit volutpat eget.</span>
                            </div>

                            <div align="center">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi rhoncus elementum odio, vel elementum velit volutpat eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi rhoncus elementum odio, vel elementum velit volutpat eget.</p>
                                <table cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td><a href="#" class="btn btn-action"><span>Yes, Confirm!</span></a></td>
                                    <td style="width:40px;"></td>
                                    <td><a href="#" class="btn btn-soft-action"><span>No, Cancel.</span></a></td>
                                  </tr>
                                </table>
                                <br/>
                                <br/>
                            </div>

                            <div id="success" class="notification success" style="display:none;">
                                 <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi rhoncus elementum odio, vel elementum velit volutpat eget.</span>
                            </div>


                       </div></div>
                       <div class="box-btm-right"><div class="box-btm-left"><!--  --></div></div>



</body>
</html>