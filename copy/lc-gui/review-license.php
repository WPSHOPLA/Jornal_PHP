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

                       <div class="box-top-right"><div class="box-top-left">Review License</div></div>
                       <div class="box-middle-right"><div class="box-middle-left">


                            <div id="error" class="notification error" style="display:none;">
                                 <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi rhoncus elementum odio, vel elementum velit volutpat eget.</span>
                            </div>

                            <form action="#" class="form" id="review-license">

                               <div class="field">
                               <label>Question 1</label>
                               <input name="question" style="width:97%"/>
                               </div>

                               <div class="field">
                               <label>Question 2</label>
                               <input name="question" style="width:97%"/>
                               </div>

                               <div class="field">
                               <label>Question 3</label>
                               <input name="question" style="width:97%"/>
                               </div>

                               <div class="field">
                               <label>Question 4</label>
                               <textarea style="width:97%; height:90px; resize: none"></textarea>
                               </div>

                               <div class="field">
                               <label>Question 5</label>
                               <select name="question" style="width:99%"/><option>Select...</option></select>
                               </div>

                               <div class="field">
                               <label>Question 6</label>
                               <select name="question" style="width:99%"/><option>Select...</option></select>
                               </div>

                               <input type="checkbox" name="iagree" /> I agree to the <a href="#">terms of the review</a><br />

                              <div class="actions clearfix mb0">
                                    <button class="fr btn btn-action" onclick="javascript:hide('edit'); ajaxshow('#success')"><span>Submit Review</span></button>
                              </div>
                            </form>

                            <div id="success" class="notification success" style="display:none;">
                                 <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi rhoncus elementum odio, vel elementum velit volutpat eget.</span>
                            </div>


                       </div></div>
                       <div class="box-btm-right"><div class="box-btm-left"><!--  --></div></div>



</body>
</html>