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



                    <div class="containerPlus { width:'100%', skin:'lc' }" style="position:relative;">
                      <div class="no">
                        <div class="ne"><div class="n">Create New Ticket</div></div>
                        <div class="o"><div class="e"><div class="c">
                          <div class="mbcontainercontent">


                            <div id="error" class="notification error" style="display:none;">
                                 <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi rhoncus elementum odio, vel elementum velit volutpat eget.</span>
                            </div>

                            <form action="#" class="form" id="addticket">
                              <label>Select the license you have</label>
                              <select style="width:565px;" class="field"><option>Select...</option></select>
                              <label>Select the type of problem</label>
                              <select style="width:565px;" class="field"><option>Select...</option></select>
                              <label>Describe the problem</label>
                              <textarea name="problem" class="field" style="width:550px; height:90px;"></textarea>
                              <label>Submission confirmation &amp; Ticket ID</label>
                              <input name="id" style="width:550px;" class="field"/>
                              <div class="actions clearfix">
                                    <button class="fr btn btn-action" onclick="javascript:hide('addticket'); ajaxshow('#success')"><span>Create Ticket</span></button>
                              </div>
                            </form>

                            <div id="success" class="notification success" style="display:none;">
                                 <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi rhoncus elementum odio, vel elementum velit volutpat eget.</span>
                            </div>


                          </div>
                        </div></div></div>
                        <div><div class="so"><div class="se"><div class="s"></div></div></div></div>
                      </div>
                    </div>



</body>
</html>