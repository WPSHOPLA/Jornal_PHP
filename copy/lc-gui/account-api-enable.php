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

                       <div class="box-top-right"><div class="box-top-left">Activate API</div></div>
                       <div class="box-middle-right"><div class="box-middle-left">


                            <div id="error" class="notification error" style="display:none;">
                                 <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi rhoncus elementum odio, vel elementum velit volutpat eget.</span>
                            </div>

                            <form action="#" class="form" id="api-enable">

                               <label>Terms &amp; Conditions</label>
                               <textarea class="terms mb10" style="height:200px; width:97%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam et tellus nunc. Sed non orci est. Maecenas tortor elit, feugiat et scelerisque ac, aliquam non magna. Duis imperdiet orci quis velit rhoncus non tempus dolor sagittis. Aenean urna felis, varius sit amet tincidunt vitae, luctus in tortor. In hac habitasse platea dictumst. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris hendrerit, metus sed suscipit porta, enim turpis blandit mi, quis pulvinar metus urna vitae dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non nisi eu tellus ornare faucibus. Suspendisse pretium velit rhoncus nisi rhoncus sit amet luctus tellus posuere. Maecenas sed rhoncus ligula. Sed convallis bibendum est, eu tempor mauris malesuada ultricies. Phasellus euismod lobortis enim nec hendrerit. Aliquam erat volutpat. Nam id neque a felis aliquet porta.

Donec ac justo at mauris faucibus lacinia ac sit amet nibh. Integer ante sapien, tincidunt vitae laoreet vel, rhoncus sit amet dolor. Nullam laoreet est non nulla rutrum vitae tempor massa scelerisque. Donec tempus gravida tincidunt. Duis porta rutrum odio, eu semper justo convallis sit amet. Nam dapibus commodo massa, vitae dignissim tellus dapibus eu. Vestibulum hendrerit dictum dui, euismod mollis est fermentum ut. Etiam auctor scelerisque nunc, in placerat justo vehicula sit amet. Quisque ultricies viverra condimentum. Nullam at dolor vitae libero congue fringilla. Suspendisse mollis lacus eu tellus mattis vel sollicitudin ante tristique. Proin posuere ornare lobortis. Donec accumsan metus in nisl dignissim semper.
                               </textarea>

                              <label>Please provide us with all the IP addresses you will be connecting from.</label>
                              <textarea style="width:97%; height:90px; resize: none">Duis porta rutrum odio, eu semper justo convallis sit amet</textarea>


                              <div class="actions clearfix mb0">
                                    <button class="fr btn btn-action" onclick="javascript:hide('edit'); ajaxshow('#success')"><span>Activate API</span></button>
                              </div>
                            </form>

                            <div id="success" class="notification success" style="display:none;">
                                 <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi rhoncus elementum odio, vel elementum velit volutpat eget.</span>
                            </div>


                       </div></div>
                       <div class="box-btm-right"><div class="box-btm-left"><!--  --></div></div>



</body>
</html>