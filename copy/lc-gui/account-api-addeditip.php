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

                       <div class="box-top-right"><div class="box-top-left">API Ip Address</div></div>
                       <div class="box-middle-right"><div class="box-middle-left">


                            <div id="error" class="notification error" style="display:none;">
                                 <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi rhoncus elementum odio, vel elementum velit volutpat eget.</span>
                            </div>

                            <form  class="form" id="api-ip">

                              <label>Please provide us with all the IP addresses you will be connecting from.</label>
                              <textarea style="width:97%; height:90px; resize: none">Duis porta rutrum odio, eu semper justo convallis sit amet</textarea>

                              <div class="actions clearfix mb0">
                                    <button class="fr btn btn-action" onclick="javascript:hide('edit'); ajaxshow('#success')"><span>Save API Ip Addresses</span></button>
                              </div>

                            </form>

                            <div id="success" class="notification success" style="display:none;">
                                 <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi rhoncus elementum odio, vel elementum velit volutpat eget.</span>
                            </div>


                       </div></div>
                       <div class="box-btm-right"><div class="box-btm-left"><!--  --></div></div>



</body>
</html>