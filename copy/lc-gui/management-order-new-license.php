<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php $page="management"; include_once("_include/modules/config.php"); ?>
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
            <h1>Order New License</h1>
            <div class="welcome clearfix">
                <div class="user-avatar"><img src="<?php echo $img_dir; ?>/misc/user200.png" width="37" height="37" alt="" /></div>
                <div class="user-data">Welcome John Doe, <br/> <a href="#">My Account</a>  &nbsp;I&nbsp;  <a href="#">Some Link</a> &nbsp;I&nbsp;   <a href="#">Log Out</a></div>
            </div>
        </div>

        <div class="container-body clearfix">

                <div class="grid_12" id="step1">
                       <div class="box-top-right"><div class="box-top-left">Step 1 - Choose License</div></div>
                       <div class="box-middle-right"><div class="box-middle-left">

                               <!-- the tabs -->
                               <ul class="css-tabs">
                                   <li><a href="#first-tab"><span><img src="<?php echo $img_dir; ?>/icons/control-panel64.png" alt="" /></span><h3>Control Panels</h3></a></li>
                                   <li><a href="#second-tab"><span><img src="<?php echo $img_dir; ?>/icons/billing-stuff64.png"  alt="" /></span><h3>Billing Systems</h3></a></li>
                                   <li><a href="#third-tab"><span><img src="<?php echo $img_dir; ?>/icons/click-monitor64.png"  alt="" /></span><h3>Additional Licenses</h3></a></li>
                               </ul>
                               <!-- tab "panes" -->
                               <div class="css-panes">
                                    <div class="pane">
                                          <p>Cras dapibus ante ut nisl mattis fringilla. Maecenas venenatis ultricies volutpat. Fusce ligula velit, adipiscing nec faucibus at, ultrices condimentum neque. Vivamus dapibus sapien quis tortor iaculis at imperdiet dui pharetra. Phasellus quis sem at nibh egestas mollis sit amet eget erat. Nullam venenatis sem quam.</p>

                                               <div class="half-this" style="marign-right:8px; margin-left:8px;">
                                               <h2>VPS Licenses</h2>
                                               <ul class="license-selector clearfix">
                                                 <li class="odd clearfix">
                                                    <div class="selector"><input type="checkbox" name="check" class="check" onclick="toggle('#license-selected1')"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Cpanel WHM</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div>
                                                    <div class="clear"></div>
                                                    <div id="license-selected1" class="license-selected">
                                                         <table cellpadding="0" cellspacing="0" width="100%">
                                                            <tr>
                                                              <td style="width:25%">Label:</td>
                                                              <td style="width:75%"><input name="label" /></td>
                                                            </tr>
                                                            <tr>
                                                              <td style="width:25%">License Packs:</td>
                                                              <td style="width:75%"><select class="select"><option>Select...</option><option>2</option></select></td>
                                                            </tr>
                                                            <tr>
                                                              <td style="width:25%">Operating System:</td>
                                                              <td style="width:75%"><select class="select"><option>Select...</option><option>12</option></select></td>
                                                            </tr>
                                                          </table>
                                                    </div>
                                                 </li>
                                                 <li class="even clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Plesk Panel</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                                 <li class="odd clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Direct Admin</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                                 <li class="even clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Softaculous</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                                 <li class="odd clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Cpanel WHM</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                                 <li class="even clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Plesk Panel</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                                 <li class="odd clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Direct Admin</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                                 <li class="even last clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Softaculous</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                               </ul>
                                               </div>

                                               <div class="half-this" style="marign-right:8px; margin-left:8px;">
                                               <h2>Dedicated Licenses</h2>
                                               <ul class="license-selector clearfix">
                                                 <li class="odd clearfix">
                                                    <div class="selector"><input type="checkbox" name="check" class="check" onclick="toggle('#license-selected2')"//></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Cpanel WHM</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div>
                                                    <div class="clear"></div>
                                                    <div id="license-selected2" class="license-selected">
                                                         <table cellpadding="0" cellspacing="0" width="100%">
                                                            <tr>
                                                              <td style="width:25%">Label:</td>
                                                              <td style="width:75%"><input name="label" /></td>
                                                            </tr>
                                                            <tr>
                                                              <td style="width:25%">License Packs:</td>
                                                              <td style="width:75%"><select class="select"><option>Select...</option><option>2</option></select></td>
                                                            </tr>
                                                            <tr>
                                                              <td style="width:25%">Operating System:</td>
                                                              <td style="width:75%"><select class="select"><option>Select...</option><option>12</option></select></td>
                                                            </tr>
                                                          </table>
                                                    </div>
                                                 </li>
                                                 <li class="even clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Plesk Panel</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                                 <li class="odd clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Direct Admin</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                                 <li class="even clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Softaculous</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                                 <li class="odd clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Cpanel WHM</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                                 <li class="even clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Plesk Panel</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                                 <li class="odd clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Direct Admin</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                                 <li class="even last clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Softaculous</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                               </ul>
                                               </div>
                                               <div class="clear"></div>


                                    </div>
                                    <div class="pane clearfix">
                                          <p>Cras dapibus ante ut nisl mattis fringilla. Maecenas venenatis ultricies volutpat. Fusce ligula velit, adipiscing nec faucibus at, ultrices condimentum neque. Vivamus dapibus sapien quis tortor iaculis at imperdiet dui pharetra. Phasellus quis sem at nibh egestas mollis sit amet eget erat. Nullam venenatis sem quam.</p>
                                               <div class="half-this" style="marign-right:8px; margin-left:8px;">
                                               <ul class="license-selector clearfix">
                                                 <li class="odd clearfix">
                                                    <div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Cpanel WHM</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div>
                                                 </li>
                                                 <li class="even clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Plesk Panel</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                                 <li class="odd clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Direct Admin</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                                 <li class="even clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Softaculous</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                                 <li class="odd clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Cpanel WHM</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                                 <li class="even last clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Softaculous</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                               </ul>
                                               </div>

                                               <div class="half-this" style="marign-right:8px; margin-left:8px;">
                                               <ul class="license-selector clearfix">
                                                 <li class="odd clearfix">
                                                    <div class="selector"><input type="checkbox" name="check" class="check"//></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Cpanel WHM</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div>
                                                 </li>
                                                 <li class="even clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Plesk Panel</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                                 <li class="odd clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Direct Admin</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                                 <li class="even clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Softaculous</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                                 <li class="odd clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Cpanel WHM</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                                 <li class="even last clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Softaculous</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                               </ul>
                                               </div>
                                               <div class="clear"></div>
                                    </div>
                                    <div class="pane clearfix">
                                          <p>Cras dapibus ante ut nisl mattis fringilla. Maecenas venenatis ultricies volutpat. Fusce ligula velit, adipiscing nec faucibus at, ultrices condimentum neque. Vivamus dapibus sapien quis tortor iaculis at imperdiet dui pharetra. Phasellus quis sem at nibh egestas mollis sit amet eget erat. Nullam venenatis sem quam.</p>
                                               <div class="half-this" style="marign-right:8px; margin-left:8px;">
                                               <h2>VPS Licenses</h2>
                                               <ul class="license-selector clearfix">
                                                 <li class="odd clearfix">
                                                    <div class="selector"><input type="checkbox" name="check" class="check" onclick="toggle('#license-selected3')"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Cpanel WHM</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div>
                                                    <div class="clear"></div>
                                                    <div id="license-selected3" class="license-selected">
                                                         <table cellpadding="0" cellspacing="0" width="100%">
                                                            <tr>
                                                              <td style="width:25%">Label:</td>
                                                              <td style="width:75%"><input name="label" /></td>
                                                            </tr>
                                                            <tr>
                                                              <td style="width:25%">License Packs:</td>
                                                              <td style="width:75%"><select class="select"><option>Select...</option><option>2</option></select></td>
                                                            </tr>
                                                            <tr>
                                                              <td style="width:25%">Operating System:</td>
                                                              <td style="width:75%"><select class="select"><option>Select...</option><option>12</option></select></td>
                                                            </tr>
                                                          </table>
                                                    </div>
                                                 </li>
                                                 <li class="even clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Plesk Panel</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                                 <li class="odd clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Direct Admin</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                                 <li class="even clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Softaculous</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                                 <li class="odd clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Cpanel WHM</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                                 <li class="even clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Plesk Panel</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                                 <li class="odd clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Direct Admin</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                                 <li class="even last clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Softaculous</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                               </ul>
                                               </div>

                                               <div class="half-this" style="marign-right:8px; margin-left:8px;">
                                               <h2>Dedicated Licenses</h2>
                                               <ul class="license-selector clearfix">
                                                 <li class="odd clearfix">
                                                    <div class="selector"><input type="checkbox" name="check" class="check" onclick="toggle('#license-selected4')"//></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Cpanel WHM</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div>
                                                    <div class="clear"></div>
                                                    <div id="license-selected4" class="license-selected">
                                                         <table cellpadding="0" cellspacing="0" width="100%">
                                                            <tr>
                                                              <td style="width:25%">Label:</td>
                                                              <td style="width:75%"><input name="label" /></td>
                                                            </tr>
                                                            <tr>
                                                              <td style="width:25%">License Packs:</td>
                                                              <td style="width:75%"><select class="select"><option>Select...</option><option>2</option></select></td>
                                                            </tr>
                                                            <tr>
                                                              <td style="width:25%">Operating System:</td>
                                                              <td style="width:75%"><select class="select"><option>Select...</option><option>12</option></select></td>
                                                            </tr>
                                                          </table>
                                                    </div>
                                                 </li>
                                                 <li class="even clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Plesk Panel</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                                 <li class="odd clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Direct Admin</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                                 <li class="even clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Softaculous</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                                 <li class="odd clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Cpanel WHM</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                                 <li class="even clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Plesk Panel</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                                 <li class="odd clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Direct Admin</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                                 <li class="even last clearfix"><div class="selector"><input type="checkbox" name="check" class="check"/></div> <div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div> <div class="texts"><span class="title">Softaculous</span> <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div> <div class="price">$4/month </div></li>
                                               </ul>
                                               </div>
                                               <div class="clear"></div>
                                    </div>
                               </div>
                                <div class="clear"></div>
                               <!-- end tab "panes" -->

                                                    <div class="boxed mb10">
                                                          <h2>Configure License Name here</h2>
                                                          <div class="separator"><!--  --></div>
                                                          <h5 class="pb5"><b>Quantity</b></h5>
                                                          <table cellpadding="0" cellspacing="0" width="100%" id="licence-quantity" class="pb10">
                                                            <tr>
                                                              <td style="width:18%">License Name Quantity:</td>
                                                              <td><select class="select" style="width:100px;"><option>1</option><option>2</option></select></td>
                                                              <td>&nbsp;  </td>
                                                              <td>&nbsp;  </td>
                                                            </tr>
                                                          </table>

                                                          <h5 class="pb5"><b>Licence Type</b></h5>
                                                          <table cellpadding="0" cellspacing="0" width="100%" id="licence-type" class="pb10">
                                                            <tr>
                                                              <td style="width:13%">License Type #1:</td>
                                                              <td><select class="select"><option>Select...</option><option>2</option></select></td>
                                                              <td style="width:13%">Site count:</td>
                                                              <td><select class="select"><option>Select...</option><option>12</option></select></td>
                                                            </tr>
                                                          </table>

                                                         <h5 class="pb5"><b>Upgrade Options</b></h5>
                                                          <table cellpadding="0" cellspacing="0" width="100%" id="upgrade-options" class="pb10">
                                                            <tr>
                                                              <td style="width:13%">Language Packs:</td>
                                                              <td><select class="select"><option>Select...</option><option>2</option></select></td>
                                                              <td style="width:13%">Power Pack:</td>
                                                              <td><select class="select"><option>Select...</option><option>12</option></select></td>
                                                            </tr>
                                                            <tr>
                                                              <td style="width:13%">Operating System:</td>
                                                              <td><select class="select"><option>Select...</option><option>2</option></select></td>
                                                              <td style="width:13%">Platform:</td>
                                                              <td><select class="select"><option>Select...</option><option>12</option></select></td>
                                                            </tr>
                                                          </table>
                                                    </div>

                                <div class="actions clearfix">
                                    <a href="<?php echo $site_dir; ?>/management.php" class="mr15 fl btn btn-soft-action"><span>Go Back</span></a>
                                    <a href="#" onclick="javascript:ajaxshow('#step2');hide('step1');" class="ml15 fr btn btn-action"><span>Proceed To Next Step</span></a>
                                    <a href="#" class="ml15 fr btn btn-soft-action"><span>Some Button</span></a>
                                </div>

                       </div></div>
                       <div class="box-btm-right"><div class="box-btm-left"><!--  --></div></div>

                </div>

                <div class="grid_12" id="step2" style="display:none">
                    <div class="containerPlus { width:'100%', skin:'lc' }" style="position:relative;">
                      <div class="no">
                        <div class="ne"><div class="n">Step 2 - Compatible Licenses</div></div>
                        <div class="o"><div class="e"><div class="c">
                          <div class="mbcontainercontent">

                                <p>Cras dapibus ante ut nisl mattis fringilla. Maecenas venenatis ultricies volutpat. Fusce ligula velit, adipiscing nec faucibus at, ultrices condimentum neque. Vivamus dapibus sapien quis tortor iaculis at imperdiet dui pharetra. </p>

                                <table cellpadding="0" cellspacing="0" class="data-table-horizontal license-selector-wide">
                                  <tr class="odd">
                                    <td style="width:15px;"><div class="selector"><input type="checkbox" name="check" class="check"/></div></td>
                                    <td style="width:65px;" class="center"><div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div></td>
                                    <td>
                                        <div class="texts">
                                            <span class="title">Cpanel WHM</span>
                                            <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span>
                                            <table border="0" class="checkbox-table">
                                              <tr>
                                                <td class="first"><input name="ip1" type="checkbox" value="" /></td>
                                                <td>192.168.1.1</td>
                                              </tr>
                                              <tr>
                                                <td class="first"><input name="ip2" type="checkbox" value="" /></td>
                                                <td><input name="ip" type="text" /></td>
                                              </tr>
                                            </table>

                                        </div>
                                    </td>
                                    <td><div class="rating"><img src="<?php echo $img_dir; ?>/icons/star.png" alt="" /><img src="<?php echo $img_dir; ?>/icons/star.png" alt="" /><img src="<?php echo $img_dir; ?>/icons/star.png" alt="" /><img src="<?php echo $img_dir; ?>/icons/star.png" alt="" /><img src="<?php echo $img_dir; ?>/icons/stard.png" alt="" /></div></td>
                                    <td class="last"><div class="price center">$4/month</div></td>
                                  </tr>
                                  <tr  class="even">
                                    <td style="width:15px;"><div class="selector"><input type="checkbox" name="check" class="check"/></div></td>
                                    <td style="width:65px;" class="center"><div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div></td>
                                    <td>
                                        <div class="texts">
                                            <span class="title">Cpanel WHM</span>
                                            <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span>
                                        </div>
                                    </td>
                                    <td><div class="rating"><img src="<?php echo $img_dir; ?>/icons/star.png" alt="" /><img src="<?php echo $img_dir; ?>/icons/star.png" alt="" /><img src="<?php echo $img_dir; ?>/icons/star.png" alt="" /><img src="<?php echo $img_dir; ?>/icons/star.png" alt="" /><img src="<?php echo $img_dir; ?>/icons/stard.png" alt="" /></div></td>
                                    <td class="last"><div class="price center">$4/month</div></td>
                                  </tr>
                                  <tr class="odd">
                                    <td style="width:15px;"><div class="selector"><input type="checkbox" name="check" class="check"/></div></td>
                                    <td style="width:65px;" class="center"><div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div></td>
                                    <td>
                                        <div class="texts">
                                            <span class="title">Cpanel WHM</span>
                                            <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span>
                                            <table border="0" class="checkbox-table">
                                              <tr>
                                                <td class="first"><input name="ip1" type="checkbox" value="" /></td>
                                                <td>192.168.1.1</td>
                                              </tr>
                                              <tr>
                                                <td class="first"><input name="ip2" type="checkbox" value="" /></td>
                                                <td><input name="ip" type="text" /></td>
                                              </tr>
                                            </table>                                            
                                        </div>
                                    </td>
                                    <td><div class="rating"><img src="<?php echo $img_dir; ?>/icons/star.png" alt="" /><img src="<?php echo $img_dir; ?>/icons/star.png" alt="" /><img src="<?php echo $img_dir; ?>/icons/star.png" alt="" /><img src="<?php echo $img_dir; ?>/icons/star.png" alt="" /><img src="<?php echo $img_dir; ?>/icons/stard.png" alt="" /></div></td>
                                    <td class="last"><div class="price center">$4/month</div></td>
                                  </tr>
                                  <tr  class="even">
                                    <td style="width:15px;"><div class="selector"><input type="checkbox" name="check" class="check"/></div></td>
                                    <td style="width:65px;" class="center"><div class="thumb"><img src="<?php echo $img_dir; ?>/misc/user200.png" alt="" /></div></td>
                                    <td>
                                        <div class="texts">
                                            <span class="title">Cpanel WHM</span>
                                            <span class="description">Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span>
                                        </div>
                                    </td>
                                    <td><div class="rating"><img src="<?php echo $img_dir; ?>/icons/star.png" alt="" /><img src="<?php echo $img_dir; ?>/icons/star.png" alt="" /><img src="<?php echo $img_dir; ?>/icons/star.png" alt="" /><img src="<?php echo $img_dir; ?>/icons/star.png" alt="" /><img src="<?php echo $img_dir; ?>/icons/stard.png" alt="" /></div></td>
                                    <td class="last"><div class="price center">$4/month</div></td>
                                  </tr>
                                </table>


                                <div class="actions clearfix">
                                    <a href="#" onclick="javascript:hide('step2');ajaxshow('#step1');" class="mr15 fl btn btn-soft-action"><span>Go Back</span></a>
                                    <a href="#" onclick="javascript:ajaxshow('#step3');hide('step2');" class="ml15 fr btn btn-action"><span>Proceed To Next Step</span></a>
                                    <a href="#" class="ml15 fr btn btn-soft-action"><span>Some Button</span></a>
                                </div>


                          </div>
                        </div></div></div>
                        <div><div class="so"><div class="se"><div class="s"></div></div></div></div>
                      </div>
                    </div>
                </div>

                <div class="grid_12" id="step3" style="display:none">
                    <div class="containerPlus { width:'100%', skin:'lc' }" style="position:relative;">
                      <div class="no">
                        <div class="ne"><div class="n">Step 3 - Summary Information</div></div>
                        <div class="o"><div class="e"><div class="c">
                          <div class="mbcontainercontent">

                                 <p>Cras dapibus ante ut nisl mattis fringilla. Maecenas venenatis ultricies volutpat. Fusce ligula velit, adipiscing nec faucibus at, ultrices condimentum neque. Vivamus dapibus sapien quis tortor iaculis at imperdiet dui pharetra. Phasellus quis sem at nibh egestas mollis sit amet eget erat. Nullam venenatis sem quam. </p>

                                 <h2>Please Confirm Your Order</h2>
                                 <table cellspacing="0" cellpadding="0" class="data-table-horizontal" width="100%">
                                    <tr>
                                        <th>License Name <a href="#" class="sorting"><span><img src="<?php echo $img_dir; ?>/icons/arrow-up.png" width="16" height="16" alt="" /></span></a></th>
                                        <th class="left">License Type</th>
                                        <th class="left">OS</th>
                                        <th class="left">IP Domain</th>                                  
                                        <th class="left">Unit Price:</th>
                                        <th class="left">Qty</th>
                                        <th class="right last">Total</th>
                                    </tr>
                                    <tr class="odd parent">
                                        <td><a href="<?php echo $site_dir; ?>/management-license-details.php?iframe=true&width=600&height=500" rel="modalWindow">Lorem ipsum dolor</a></td>
                                        <td class="left">License Type</td>        
                                        <td class="left"><img src="<?php echo $img_dir; ?>/icons/linux.png" alt="" width="20" height="18" /></td>                                        
                                        <td>192.168.1.1</td>
                                        <td class="left"><b class="price">$299.99</b></td>
                                        <td class="left">2</td>
                                        <td class="right  last"><b class="price">$299.99</b></td>
                                    </tr>
                                    <tr class="odd child">
                                        <td>Additional Language Pack</td>
                                        <td class="left"></td>        
                                        <td class="left"></td>                                        
                                        <td></td>
                                        <td class="left"><b class="price">$19.99</b></td>
                                        <td class="left">1</td>
                                        <td class="right  last"><b class="price">$19.99</b></td>
                                    </tr> 
                                    <tr class="odd child">
                                        <td>Power Pack</td>
                                        <td class="left"></td>        
                                        <td class="left"></td>                                        
                                        <td></td>
                                        <td class="left"><b class="price">$19.99</b></td>
                                        <td class="left">1</td>
                                        <td class="right  last"><b class="price">$19.99</b></td>
                                    </tr>                                                                          
                                    <tr class="even">
                                        <td><a href="<?php echo $site_dir; ?>/management-license-details.php?iframe=true&width=600&height=500" rel="modalWindow">Maecenas venenatis ultricies</a></td>
                                        <td class="left">License Type</td> 
                                        <td class="left"><img src="<?php echo $img_dir; ?>/icons/linux.png" alt="" width="20" height="18" /></td>
                                        <td>192.168.1.1</td>
                                        <td class="left"><b class="price">$299.99</b></td>
                                        <td class="left">2</td>
                                        <td class="right  last"><b class="price">$299.99</b></td>
                                    </tr>
                                    <tr class="even child">
                                        <td>Power Pack</td>
                                        <td class="left"></td>        
                                        <td class="left"></td>                                        
                                        <td></td>
                                        <td class="left"><b class="price">$19.99</b></td>
                                        <td class="left">1</td>
                                        <td class="right  last"><b class="price">$19.99</b></td>
                                    </tr>
                                    <tr class="totals">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="left"></td>
                                        <td class="left"></td>
                                        <td class="right last">
                                        	<div id="total"><b class="price">$299.99 per Month</b></div>
                                        	<div id="totaldiscounted" style="display:none;">
                                            	<b class="price">
                                                	$299.99<br/>
                                                    <span class="discount">- $29.99</span><br/>
                                                    <span class="remaining">= $270.00 per Month</span><rr/>
                                                </b> 
                                            </div>
                                          </td>
                                    </tr>
                                 </table>

								 <div class="boxed mb10" id="pcode">
                                              <table cellpadding="0" cellspacing="0" width="100%" id="promotional-code">
                                                <tr>
                                                  <td class="left" style="width:20%"><h4 class="mb0">Promotional Code:</h4></td>
                                                  <td class="right" style="width:70%"><input name="promocode" type="text" class="fr" style="width:100%"/></td>
                                                  <td><button class="fr btn btn-action-small" onclick="javascript:show('pcodeapplied');ajaxhide('#pcode');hide('total');ajaxshow('#totaldiscounted')"><span>Apply Code</span></button> </td>
                                                  <td>&nbsp;  </td>
                                                </tr>
                                              </table>                                 	
                                 </div>
                                 <div class="notification success" id="pcodeapplied" style="display:none;"><span>Succes: Promotional Code Applied</span></div>
	
                                 <table cellpadding="0" cellspacing="0" style="padding-bottom:10px; width:400px; margin:0 auto;">
                                   <tr>
                                     <td><input type="checkbox" name="iagree" /></td>
                                     <td>I have read and fully agree to License Cube's <a href="#" rel="modalwindow">Terms of Service</a>.</td>
                                   </tr>
                                 </table>

                                <div class="actions clearfix">
                                    <a href="#" onclick="javascript:hide('step3');ajaxshow('#step2');" class="mr15 fl btn btn-soft-action"><span>Go Back</span></a>
                                    <a href="#" onclick="javascript:ajaxshow('#step4');hide('step3');" class="ml15 fr btn btn-action"><span>Confirm Order</span></a>
                                    <a href="#" class="ml15 fr btn btn-soft-action"><span>Some Button</span></a>
                                </div>


                          </div>
                        </div></div></div>
                        <div><div class="so"><div class="se"><div class="s"></div></div></div></div>
                      </div>
                    </div>
                </div>

                <div class="grid_12" id="step4" style="display:none">
                    <div class="containerPlus { width:'100%', skin:'lc' }" style="position:relative;">
                      <div class="no">
                        <div class="ne"><div class="n">Thank You</div></div>
                        <div class="o"><div class="e"><div class="c">
                          <div class="mbcontainercontent">


                                <h2 class="mt10 mb20 center" style="width:70%; margin:0 auto;">Your license is activated!</h2>
                                <p class="center" style="width:70%; margin:0 auto;">Vestibulum at nisl ac sapien pulvinar fringilla. Integer rutrum accumsan mi at egestas. Etiam iaculis scelerisque est, non aliquam turpis ornare a. In id elit quis turpis lobortis lobortis. Aenean eleifend arcu blandit nulla aliquam auctor. Vestibulum turpis augue, congue in lobortis et, suscipit sed libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse ac purus gravida felis aliquam mollis. Nulla facilisis egestas diam id fermentum. Etiam sed nisi at felis vestibulum mollis nec at lacus. Morbi dictum facilisis commodo. Suspendisse molestie purus ac urna malesuada id auctor erat lacinia.</p>

                                <div class="actions clearfix">
                                    <a href="<?php echo $site_dir; ?>/dashboard.php" class="mr15 fl btn btn-soft-action"><span>Return to Dashboard</span></a>
                                    <!--<a href="#" onclick="javascript:hide('step4');ajaxshow('#step3');" class="mr15 fl btn btn-soft-action"><span>Go Back</span></a>-->
                                    <!--<a href="#" onclick="javascript:ajaxshow('#step5');hide('step4');" class="ml15 fr btn btn-action"><span>Place Your Order</span></a> -->
                                    <a href="#" class="ml15 fr btn btn-action"><span>Print Reciept</span></a>
                                    <a href="#" class="ml15 fr btn btn-soft-action"><span>Some Button</span></a>
                                </div>


                          </div>
                        </div></div></div>
                        <div><div class="so"><div class="se"><div class="s"></div></div></div></div>
                      </div>
                    </div>
                </div>

                <div class="clear"></div>

                <div class="grid_12 notification attention"><span>Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div>
                <div class="grid_12 notification success"><span>Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div>
                <div class="grid_12 notification error"><span>Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div>

        </div>
     </div>
</div>

<?php include("_include/modules/footer.php"); ?>


</body>
</html>