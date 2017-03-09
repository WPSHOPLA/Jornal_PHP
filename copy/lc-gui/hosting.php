<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php $page="hosting"; include_once("_include/modules/config.php"); ?>
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
            <h1>Free Hosting</h1>
            <div class="welcome clearfix">
                <div class="user-avatar"><img src="<?php echo $img_dir; ?>/misc/user200.png" width="37" height="37" alt="" /></div>
                <div class="user-data">Welcome John Doe, <br/> <a href="#">My Account</a>  &nbsp;I&nbsp;  <a href="#">Some Link</a> &nbsp;I&nbsp;   <a href="#">Log Out</a></div>
            </div>
        </div>

        <div class="container-body clearfix">

                <div class="grid_6">
                    <div class="containerPlus { width:'100%', height:'360', buttons:'m', skin:'lc' }" style="position:relative;">
                      <div class="no">
                        <div class="ne"><div class="n">SiteServing Hosting</div></div>
                        <div class="o"><div class="e"><div class="c">
                          <div class="mbcontainercontent">

                            <h3>Donec vestibulum sollicitudin tellus</h3>
                            <p>Suspendisse potenti. Maecenas nec nisi. Donec vestibulum sollicitudin tellus. Sed consequat pellentesque ante. Vestibulum turpis quam, vulputate nec, sollicitudin tellus.</p>

                            <div class="boxed rounded mb10">
                                <p class="center mt10 mt5"><img src="<?php echo $img_dir; ?>/misc/sslogo.png" alt="" /></p>
                                <h3 class="center mt0">Offering Free Shared & VPS Hositng</h3>
                            </div>

                            <p> Nam non sem ut eros fringilla ornare. In ullamcorper lorem eget ipsum. Suspendisse semper enim in arcu cursus consectetuer. Suspendisse potenti. Proin libero eros, adipiscing quis, volutpat in, ultrices ut, lacus.</p>

                          </div>
                        </div></div></div>
                        <div><div class="so"><div class="se"><div class="s"></div></div></div></div>
                      </div>
                    </div>
                </div>

                <div class="grid_6">
                    <div class="containerPlus { width:'100%', height:'360', buttons:'m', skin:'lc' }" style="position:relative;">
                      <div class="no">
                        <div class="ne"><div class="n">Your Hosting Stats</div></div>
                        <div class="o"><div class="e"><div class="c">
                          <div class="mbcontainercontent">
                              <h3>Maecenas justo elit, lacinia sit amet</h3>
                              <p>Maecenas justo elit, lacinia sit amet, cursus ut, sagittis sed, eros. Suspendisse potenti. Maecenas nec nisi. Donec vestibulum sollicitudin tellus. Sed consequat pellentesque ante.</p>

                              <table cellpadding="0" cellspacing="0" class="simple-data-table" width="100%">
                                <tr class="odd totals">
                                  <td class="btmlast">Total Licenses:</td>
                                  <td class="btmlast"><b>4 Licenses</b></td>
                                </tr>
                              </table>

                              <div class="notification success">
                                <span class="clearfix">
                                    You qualify for : 1 <b>SiteServing Shared Hosting Plan</b>
                                    <a href="javascript:show('sharedhosting');" class="fr">Activate</a>
                                </span>
                              </div>

                              <div class="notification success">
                                <span  class="clearfix">You qualify for : 1 <b>SiteServing VPS Hosting Plan</b>
                                <a href="javascript:show('vpshosting');" class="fr">Activate</a>
                                </span>
                              </div>

                              <div class="notification error">
                                <span>You do not Qualify for any FREE hosting plan yet.</span>
                              </div>

                          </div>
                        </div></div></div>
                        <div><div class="so"><div class="se"><div class="s"></div></div></div></div>
                      </div>
                    </div>
                </div>

                <div class="clear"></div>



                <div class="grid_12" id="sharedhosting" style="display:none">
                       <div class="box-top-right"><div class="box-top-left">Activate Shared Hosting</div></div>
                       <div class="box-middle-right"><div class="box-middle-left">

                                <form class="form">
                                <h2>Choose Your Plan</h2>
                                <div class="separator mb10"><!--  --></div>
                                <div class="hosting-plan rounded fl">
                                    <h3>Hosting Plan Name</h3>
                                    <ul class="check-list">
                                        <li>UNLIMITED Domains <span>12.31</span></li>
                                        <li>UNLIMITED Disk Space <span>123.1</span></li>
                                        <li>UNLIMITED Bandwidth <span>1231</span></li>
                                        <li>Shared SSL Certificate <span>12.31</span></li>
                                        <li>Something <span>1231</span></li>
                                        <li>Something Else <span>123.1</span></li>
                                    </ul>
                                    <h4 class="fl"><input type="radio" name="plan" /> Select Plan Name</h4>
                                    <a href="#" class="fr btn btn-soft-action-small"><span>Details</span></a>
                                    <div class="clear"></div>
                                </div>

                                <div class="hosting-plan rounded fr">
                                    <h3>Hosting Plan Name</h3>
                                    <ul class="check-list">
                                        <li>UNLIMITED Domains <span>12.31</span></li>
                                        <li>UNLIMITED Disk Space <span>123.1</span></li>
                                        <li>UNLIMITED Bandwidth <span>1231</span></li>
                                        <li>Shared SSL Certificate <span>12.31</span></li>
                                        <li>Something <span>1231</span></li>
                                        <li>Something Else <span>123.1</span></li>
                                    </ul>
                                    <h4 class="fl"><input type="radio" name="plan" /> Select Plan Name</h4>
                                    <a href="#" class="fr btn btn-soft-action-small"><span>Details</span></a>
                                    <div class="clear"></div>
                                </div>

                                <div class="clear"></div>

                                <h2>Hosting Information</h2>
                                <div class="separator"><!--  --></div>
                                <table cellpadding="0" cellspacing="0" width="100%" class="hosting-info-table">
                                  <tr>
                                    <td>
                                        <label class="block">Domain Name:</label>
                                        <input name="dname" style="width:94%"/>
                                    </td>
                                    <td style="width:30%">
                                        <label class="block">Dedicated IP Address:</label>
                                        <select name="dip" style="width:97%"><option>Select...</option></select>
                                    </td>
                                    <td style="width:30%">
                                        <label class="block">SSH Access:</label>
                                        <select name="dip" style="width:98%"><option>Select...</option></select>
                                    </td>
                                  </tr>
                                </table>

                                 <div align="center" class="boxed rounded mt10"><input type="checkbox" name="iagree" /> I agree to <a href="#">vestibulum vel magna</a> eget libero quis sem elementum</div>

                                <div class="actions clearfix mb0">
                                    <a href="#" class="ml15 fr btn btn-action" onclick="show('hostingsuccess');hide('sharedhosting');hide('vpshosting');"><span>Place Order</span></a>
                                    <a href="#" class="ml15 fr btn btn-soft-action" onclick="hide('sharedhosting')"><span>Cancel</span></a>
                                </div>
                                </form>

                       </div></div>
                       <div class="box-btm-right"><div class="box-btm-left"><!--  --></div></div>

                </div>

                <div class="clear"></div>

                <div class="grid_12" id="vpshosting" style="display:none">
                       <div class="box-top-right"><div class="box-top-left">Activate VPS Hosting</div></div>
                       <div class="box-middle-right"><div class="box-middle-left">

                                <form class="form">
                                <h2>Choose Your Plan</h2>
                                <div class="separator mb10"><!--  --></div>

                                <div class="hosting-plan-vps rounded">
                                    <h3>Hosting Plan Name</h3>
                                    <ul class="check-list">
                                        <li>UNLIMITED Domains <span>12.31</span></li>
                                        <li>UNLIMITED Disk Space <span>123.1</span></li>
                                        <li>UNLIMITED Bandwidth <span>1231</span></li>
                                        <li>Shared SSL Certificate <span>12.31</span></li>
                                        <li>Something <span>1231</span></li>
                                        <li>Something Else <span>123.1</span></li>
                                    </ul>
                                    <h4 class="fl"><input type="radio" name="plan" /> Select Plan Name</h4>
                                    <a href="#" class="fr btn btn-soft-action-small"><span>Details</span></a>
                                    <div class="clear"></div>
                                </div>

                                <div class="hosting-plan-vps rounded">
                                    <h3>Hosting Plan Name</h3>
                                    <ul class="check-list">
                                        <li>UNLIMITED Domains <span>12.31</span></li>
                                        <li>UNLIMITED Disk Space <span>123.1</span></li>
                                        <li>UNLIMITED Bandwidth <span>1231</span></li>
                                        <li>Shared SSL Certificate <span>12.31</span></li>
                                        <li>Something <span>1231</span></li>
                                        <li>Something Else <span>123.1</span></li>
                                    </ul>
                                    <h4 class="fl"><input type="radio" name="plan" /> Select Plan Name</h4>
                                    <a href="#" class="fr btn btn-soft-action-small"><span>Details</span></a>
                                    <div class="clear"></div>
                                </div>

                                <div class="hosting-plan-vps rounded">
                                    <h3>Hosting Plan Name</h3>
                                    <ul class="check-list">
                                        <li>UNLIMITED Domains <span>12.31</span></li>
                                        <li>UNLIMITED Disk Space <span>123.1</span></li>
                                        <li>UNLIMITED Bandwidth <span>1231</span></li>
                                        <li>Shared SSL Certificate <span>12.31</span></li>
                                        <li>Something <span>1231</span></li>
                                        <li>Something Else <span>123.1</span></li>
                                    </ul>
                                    <h4 class="fl"><input type="radio" name="plan" /> Select Plan Name</h4>
                                    <a href="#" class="fr btn btn-soft-action-small"><span>Details</span></a>
                                    <div class="clear"></div>
                                </div>

                                <div class="clear"></div>

                                <div class="hosting-plan-vps rounded">
                                    <h3>Hosting Plan Name</h3>
                                    <ul class="check-list">
                                        <li>UNLIMITED Domains <span>12.31</span></li>
                                        <li>UNLIMITED Disk Space <span>123.1</span></li>
                                        <li>UNLIMITED Bandwidth <span>1231</span></li>
                                        <li>Shared SSL Certificate <span>12.31</span></li>
                                        <li>Something <span>1231</span></li>
                                        <li>Something Else <span>123.1</span></li>
                                    </ul>
                                    <h4 class="fl"><input type="radio" name="plan" /> Select Plan Name</h4>
                                    <a href="#" class="fr btn btn-soft-action-small"><span>Details</span></a>
                                    <div class="clear"></div>
                                </div>

                                <div class="hosting-plan-vps rounded">
                                    <h3>Hosting Plan Name</h3>
                                    <ul class="check-list">
                                        <li>UNLIMITED Domains <span>12.31</span></li>
                                        <li>UNLIMITED Disk Space <span>123.1</span></li>
                                        <li>UNLIMITED Bandwidth <span>1231</span></li>
                                        <li>Shared SSL Certificate <span>12.31</span></li>
                                        <li>Something <span>1231</span></li>
                                        <li>Something Else <span>123.1</span></li>
                                    </ul>
                                    <h4 class="fl"><input type="radio" name="plan" /> Select Plan Name</h4>
                                    <a href="#" class="fr btn btn-soft-action-small"><span>Details</span></a>
                                    <div class="clear"></div>
                                </div>

                                <div class="hosting-plan-vps rounded">
                                    <h3>Hosting Plan Name</h3>
                                    <ul class="check-list">
                                        <li>UNLIMITED Domains <span>12.31</span></li>
                                        <li>UNLIMITED Disk Space <span>123.1</span></li>
                                        <li>UNLIMITED Bandwidth <span>1231</span></li>
                                        <li>Shared SSL Certificate <span>12.31</span></li>
                                        <li>Something <span>1231</span></li>
                                        <li>Something Else <span>123.1</span></li>
                                    </ul>
                                    <h4 class="fl"><input type="radio" name="plan" /> Select Plan Name</h4>
                                    <a href="#" class="fr btn btn-soft-action-small"><span>Details</span></a>
                                    <div class="clear"></div>
                                </div>

                                <div class="clear"></div>

                                <h2>Hosting Information</h2>
                                <div class="separator"><!--  --></div>
                                <table cellpadding="0" cellspacing="0" width="100%" class="hosting-info-table">
                                  <tr>
                                    <td>
                                        <label class="block">Domain Name:</label>
                                        <input name="dname" style="width:94%"/>
                                    </td>
                                    <td style="width:30%">
                                        <label class="block">IP Address:</label>
                                        <select name="dip" style="width:97%"><option>Select...</option></select>
                                    </td>
                                    <td style="width:30%">
                                        <label class="block">Operating System:</label>
                                        <select name="dip" style="width:98%"><option>Select...</option></select>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                        <label class="block">Virtualization Type:</label>
                                        <select name="dip" style="width:97%"><option>Select...</option></select>
                                    </td>
                                    <td style="width:30%">
                                        <label class="block">Location:</label>
                                        <select name="dip" style="width:97%"><option>Select...</option></select>
                                    </td>
                                    <td style="width:30%"></td>
                                  </tr>
                                </table>

                                 <div align="center" class="boxed rounded mt10"><input type="checkbox" name="iagree" /> I agree to <a href="#">vestibulum vel magna</a> eget libero quis sem elementum</div>

                                <div class="actions clearfix mb0">
                                    <a href="#" class="ml15 fr btn btn-action" onclick="show('hostingsuccess');hide('sharedhosting');hide('vpshosting');"><span>Place Order</span></a>
                                    <a href="#" class="ml15 fr btn btn-soft-action" onclick="hide('vpshosting')"><span>Cancel</span></a>
                                </div>
                                </form>

                       </div></div>
                       <div class="box-btm-right"><div class="box-btm-left"><!--  --></div></div>
                </div>

                <div class="clear"></div>


                <div class="grid_12 notification success" id="hostingsuccess" style="display:none;"><span>Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div>

                <div class="clear"></div>

                <div class="grid_12">
                    <div class="containerPlus { width:'100%', buttons:'m', skin:'lc' }" style="position:relative;">
                      <div class="no">
                        <div class="ne"><div class="n">Activated Hosting Account(s)</div></div>
                        <div class="o"><div class="e"><div class="c">
                          <div class="mbcontainercontent">
                              <h3>Maecenas justo elit, lacinia sit amet</h3>
                              <p>Maecenas justo elit, lacinia sit amet, cursus ut, sagittis sed, eros. Suspendisse potenti. Maecenas nec nisi. Donec vestibulum sollicitudin tellus. Sed consequat pellentesque ante.</p>

                                 <table cellspacing="0" cellpadding="0" class="data-table-horizontal" width="100%">
                                    <tr>
                                        <th>Domain Name <a href="#" class="sorting"><span><img src="<?php echo $img_dir; ?>/icons/arrow-down.png" width="16" height="16" alt="" /></span></a></th>
                                        <th class="center">Hosting Plan <a href="#" class="sorting"><span><img src="<?php echo $img_dir; ?>/icons/arrow-down.png" width="16" height="16" alt="" /></span></a></th>
                                        <th class="center">Start Date</th>
                                        <th class="center">Renewal Date</th>
                                        <th class="center">Disk Usage</th>
                                        <th class="center">Bandwidth Usage</th>
                                        <th class="center last" style="width:430px;">Actions</th>
                                    </tr>
                                    <tr class="odd">
                                        <td>Domain.Com</td>
                                        <td class="center">Hosting Plan Name</td>
                                        <td class="center">02/09/2011</td>
                                        <td class="center">02/09/2011</td>
                                        <td class="center">22%</td>
                                        <td class="center">13%</td>
                                        <td class="center last">
                                            <a href="#" class="action license" rel="modalWindow">Account Login</a>
                                            <a href="#" class="action edit" rel="modalWindow">Resource Usage </a>
                                            <a href="<?php echo $site_dir; ?>/confirmation.php?iframe=true&width=500&height=250" class="action deactivate" rel="modalWindow">Deactivate</a>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td>Domain.Com</td>
                                        <td class="center">Hosting Plan Name</td>
                                        <td class="center">02/09/2011</td>
                                        <td class="center">02/09/2011</td>
                                        <td class="center">22%</td>
                                        <td class="center">13%</td>
                                        <td class="center last">
                                            <a href="#" class="action license" rel="modalWindow">Account Login</a>
                                            <a href="#" class="action edit" rel="modalWindow">Resource Usage </a>
                                            <a href="<?php echo $site_dir; ?>/confirmation.php?iframe=true&width=500&height=250" class="action deactivate" rel="modalWindow">Deactivate</a>
                                        </td>
                                    </tr>
                                  </table>

                          </div>
                        </div></div></div>
                        <div><div class="so"><div class="se"><div class="s"></div></div></div></div>
                      </div>
                    </div>
                </div>

                <div class="clear"></div>


        </div>
     </div>
</div>

<?php include("_include/modules/footer.php"); ?>


</body>
</html>