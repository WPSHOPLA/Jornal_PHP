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
            <h1>Management</h1>
            <div class="welcome clearfix">
                <div class="user-avatar"><img src="<?php echo $img_dir; ?>/misc/user200.png" width="37" height="37" alt="" /></div>
                <div class="user-data">Welcome John Doe, <br/> <a href="#">My Account</a>  &nbsp;I&nbsp;  <a href="#">Some Link</a> &nbsp;I&nbsp;   <a href="#">Log Out</a></div>
            </div>
        </div>

        <div class="container-body clearfix">

                <div class="grid_12">
                       <div class="box-top-right"><div class="box-top-left">Current Licenses</div></div>
                       <div class="box-middle-right"><div class="box-middle-left">
                       
                                <div class="pagination clearfix mb10">
                                      <div class="fl item">
                                          <table cellpadding="0" cellspacing="0">
                                            <tr>
                                              <td>Show</td>
                                              <td><select><option>10</option><option>20</option></select></td>
                                              <td>entries</td>
                                            </tr>
                                          </table>
                                      </div>
                                      <div class="fl item">
                                            <ul class="pages clearfix">
                                            <li>Pages: </li>
                                            <li><a href="#">1</a></li>
                                            <li class="active"><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                          </ul>
                                      </div>                                      
                                      <div class="fr item last">
                                          <table cellpadding="0" cellspacing="0">
                                            <tr>
                                              <td>Search</td>
                                              <td><input name="search" class="search" /></td>
                                              <td><button class="btn btn-soft-action-small"><span>Go</span></button></td>
                                            </tr>
                                          </table>
                                      </div>
                                </div>
                                <h3>Active Licenses</h3>
                                 <table cellspacing="0" cellpadding="0" class="data-table-horizontal" width="100%">
                                    <tr>
                                        <th>License Name <a href="#" class="sorting"><span><img src="<?php echo $img_dir; ?>/icons/arrow-up.png" width="16" height="16" alt="" /></span></a></th>
                                        <th>Domain Name <a href="#" class="sorting"><span><img src="<?php echo $img_dir; ?>/icons/arrow-down.png" width="16" height="16" alt="" /></span></a></th>
                                        <th class="center">IP Address <a href="#" class="sorting"><span><img src="<?php echo $img_dir; ?>/icons/arrow-down.png" width="16" height="16" alt="" /></span></a></th>
                                        <th class="center">Current Status</th>
                                        <th class="center">Renewal Date</th>
                                        <th class="center">Operating System</th>
                                        <th class="center">Price</th>
                                        <th class="center last" style="width:330px;">Actions</th>
                                    </tr>
                                    <tr class="odd parent">
                                        <td><a href="<?php echo $site_dir; ?>/management-license-details.php?iframe=true&width=600&height=500" rel="modalWindow">Lorem ipsum dolor</a></td>
                                        <td>Domain.Com</td>
                                        <td class="center">192.168.2.1</td>
                                        <td class="center">Active</td>
                                        <td class="center">02/09/2011</td>
                                        <td class="center"><img src="<?php echo $img_dir; ?>/icons/win.png" width="20" height="18" alt="" /> Windows</td>
                                        <td class="center"><b class="price">$299.99</b></td>
                                        <td class="center last">
                                            <a href="<?php echo $site_dir; ?>/management-license-details.php?iframe=true&width=600&height=500" class="action license" rel="modalWindow">Details</a>
                                            <a href="<?php echo $site_dir; ?>/management-license-edit.php?iframe=true&width=600&height=500" class="action edit" rel="modalWindow">Edit</a>
                                            <a href="<?php echo $site_dir; ?>/confirmation.php?iframe=true&width=500&height=250" class="action deactivate" rel="modalWindow">Deactivate</a>
                                            <a href="#" class="action upgrade" rel="modalWindow">Upgrade</a>
                                            <!--<a href="<?php echo $site_dir; ?>/confirmation.php?iframe=true&width=500&height=250" class="action delete" rel="modalWindow">Delete</a>-->
                                        </td>
                                    </tr>
                                    <tr class="odd child">
                                        <td colspan="6" class="first">Additional Language Pack</td>
                                        <td class="center">$19.99</td>
                                        <td class="center last">
                                            <a href="<?php echo $site_dir; ?>/management-license-details.php?iframe=true&width=600&height=500" class="action license" rel="modalWindow">Details</a>
                                            <a href="<?php echo $site_dir; ?>/management-license-edit.php?iframe=true&width=600&height=500" class="action edit" rel="modalWindow">Edit</a>
                                            <a href="<?php echo $site_dir; ?>/confirmation.php?iframe=true&width=500&height=250" class="action deactivate" rel="modalWindow">Deactivate</a>
                                            <a href="#" class="action upgrade" rel="modalWindow">Upgrade</a>
                                            <!--<a href="<?php echo $site_dir; ?>/confirmation.php?iframe=true&width=500&height=250" class="action delete" rel="modalWindow">Delete</a>-->
                                        </td>
                                    </tr>
                                    <tr class="odd child">
                                        <td colspan="6" class="first">Power Pack Addon</td>
                                        <td class="center">$19.99</td>
                                        <td class="center last">
                                            <a href="<?php echo $site_dir; ?>/management-license-details.php?iframe=true&width=600&height=500" class="action license" rel="modalWindow">Details</a>
                                            <a href="<?php echo $site_dir; ?>/management-license-edit.php?iframe=true&width=600&height=500" class="action edit" rel="modalWindow">Edit</a>
                                            <a href="<?php echo $site_dir; ?>/confirmation.php?iframe=true&width=500&height=250" class="action deactivate" rel="modalWindow">Deactivate</a>
                                            <a href="#" class="action upgrade" rel="modalWindow">Upgrade</a>
                                            <!--<a href="<?php echo $site_dir; ?>/confirmation.php?iframe=true&width=500&height=250" class="action delete" rel="modalWindow">Delete</a>-->
                                        </td>
                                    </tr>
                                    <tr class="even parent">
                                        <td><a href="<?php echo $site_dir; ?>/management-license-details.php?iframe=true&width=600&height=500" rel="modalWindow">Dolor sit amet</a></td>
                                        <td>Domain.Com</td>
                                        <td class="center">192.168.2.1</td>
                                        <td class="center">Active</td>
                                        <td class="center">02/09/2011</td>
                                        <td class="center"><img src="<?php echo $img_dir; ?>/icons/linux.png" width="20" height="18" alt="" /> Linux</td>
                                        <td class="center"><b class="price">$299.99</b></td>
                                        <td class="center last">
                                            <a href="<?php echo $site_dir; ?>/management-license-details.php?iframe=true&width=600&height=500" class="action license" rel="modalWindow">Details</a>
                                            <a href="<?php echo $site_dir; ?>/management-license-edit.php?iframe=true&width=600&height=500" class="action edit" rel="modalWindow">Edit</a>
                                            <a href="<?php echo $site_dir; ?>/confirmation.php?iframe=true&width=500&height=250" class="action deactivate" rel="modalWindow">Deactivate</a>
                                            <a href="#" class="action upgrade" rel="modalWindow">Upgrade</a>
                                            <!--<a href="<?php echo $site_dir; ?>/confirmation.php?iframe=true&width=500&height=250" class="action delete" rel="modalWindow">Delete</a>-->
                                        </td>
                                    </tr>
                                    <tr class="even child">
                                        <td colspan="6" class="first">Additional Language Pack</td>
                                        <td class="center">$19.99</td>
                                        <td class="center last">
                                            <a href="<?php echo $site_dir; ?>/management-license-details.php?iframe=true&width=600&height=500" class="action license" rel="modalWindow">Details</a>
                                            <a href="<?php echo $site_dir; ?>/management-license-edit.php?iframe=true&width=600&height=500" class="action edit" rel="modalWindow">Edit</a>
                                            <a href="<?php echo $site_dir; ?>/confirmation.php?iframe=true&width=500&height=250" class="action deactivate" rel="modalWindow">Deactivate</a>
                                            <a href="#" class="action upgrade" rel="modalWindow">Upgrade</a>
                                            <!--<a href="<?php echo $site_dir; ?>/confirmation.php?iframe=true&width=500&height=250" class="action delete" rel="modalWindow">Delete</a>-->
                                        </td>
                                    </tr>
                                    <tr class="even child">
                                        <td colspan="6" class="first">Power Pack Addon</td>
                                        <td class="center">$19.99</td>
                                        <td class="center last">
                                            <a href="<?php echo $site_dir; ?>/management-license-details.php?iframe=true&width=600&height=500" class="action license" rel="modalWindow">Details</a>
                                            <a href="<?php echo $site_dir; ?>/management-license-edit.php?iframe=true&width=600&height=500" class="action edit" rel="modalWindow">Edit</a>
                                            <a href="<?php echo $site_dir; ?>/confirmation.php?iframe=true&width=500&height=250" class="action deactivate" rel="modalWindow">Deactivate</a>
                                            <a href="#" class="action upgrade" rel="modalWindow">Upgrade</a>
                                            <!--<a href="<?php echo $site_dir; ?>/confirmation.php?iframe=true&width=500&height=250" class="action delete" rel="modalWindow">Delete</a>-->
                                        </td>
                                    </tr>
                                    <tr class="odd suspended">
                                        <td><a href="<?php echo $site_dir; ?>/management-license-details.php?iframe=true&width=600&height=500" rel="modalWindow">Lorem ipsum dolor</a></td>
                                        <td>Domain.Com</td>
                                        <td class="center">192.168.2.1</td>
                                        <td class="center">Suspended</td>
                                        <td class="center">02/09/2011</td>
                                        <td class="center"><img src="<?php echo $img_dir; ?>/icons/win.png" width="20" height="18" alt="" /> Windows</td>
                                        <td class="center"><b class="price">$299.99</b></td>
                                        <td class="center last">
                                            <a href="<?php echo $site_dir; ?>/management-license-details.php?iframe=true&width=600&height=500" class="action license" rel="modalWindow">Details</a>
                                            <a href="<?php echo $site_dir; ?>/management-license-edit.php?iframe=true&width=600&height=500" class="action edit" rel="modalWindow">Edit</a>
                                            <a href="<?php echo $site_dir; ?>/confirmation.php?iframe=true&width=500&height=250" class="action deactivate" rel="modalWindow">Deactivate</a>
                                            <a href="#" class="action upgrade" rel="modalWindow">Upgrade</a>
                                            <!--<a href="<?php echo $site_dir; ?>/confirmation.php?iframe=true&width=500&height=250" class="action delete" rel="modalWindow">Delete</a>-->
                                        </td>
                                    </tr>
                                    <tr class="even upgraded">
                                        <td><a href="<?php echo $site_dir; ?>/management-license-details.php?iframe=true&width=600&height=500" rel="modalWindow">Dolor sit amet</a></td>
                                        <td>Domain.Com</td>
                                        <td class="center">192.168.2.1</td>
                                        <td class="center">Upgraded</td>
                                        <td class="center">02/09/2011</td>
                                        <td class="center"><img src="<?php echo $img_dir; ?>/icons/linux.png" width="20" height="18" alt="" /> Linux</td>
                                        <td class="center"><b class="price">$299.99</b></td>
                                        <td class="center last">
                                            <a href="<?php echo $site_dir; ?>/management-license-details.php?iframe=true&width=600&height=500" class="action license" rel="modalWindow">Details</a>
                                            <a href="<?php echo $site_dir; ?>/management-license-edit.php?iframe=true&width=600&height=500" class="action edit" rel="modalWindow">Edit</a>
                                            <a href="<?php echo $site_dir; ?>/confirmation.php?iframe=true&width=500&height=250" class="action deactivate" rel="modalWindow">Deactivate</a>
                                            <a href="#" class="action upgrade" rel="modalWindow">Upgrade</a>
                                            <!--<a href="<?php echo $site_dir; ?>/confirmation.php?iframe=true&width=500&height=250" class="action delete" rel="modalWindow">Delete</a>-->
                                        </td>
                                    </tr>
                                    <tr class="odd suspended">
                                        <td><a href="<?php echo $site_dir; ?>/management-license-details.php?iframe=true&width=600&height=500" rel="modalWindow">Lorem ipsum dolor</a></td>
                                        <td>Domain.Com</td>
                                        <td class="center">192.168.2.1</td>
                                        <td class="center">Suspended</td>
                                        <td class="center">02/09/2011</td>
                                        <td class="center"><img src="<?php echo $img_dir; ?>/icons/unknown.png" width="20" height="18" alt="" /> Unknown</td>
                                        <td class="center"><b class="price">$299.99</b></td>
                                        <td class="center last">
                                            <a href="<?php echo $site_dir; ?>/management-license-details.php?iframe=true&width=600&height=500" class="action license" rel="modalWindow">Details</a>
                                            <a href="<?php echo $site_dir; ?>/management-license-edit.php?iframe=true&width=600&height=500" class="action edit" rel="modalWindow">Edit</a>
                                            <a href="<?php echo $site_dir; ?>/confirmation.php?iframe=true&width=500&height=250" class="action deactivate" rel="modalWindow">Deactivate</a>
                                            <a href="#" class="action upgrade" rel="modalWindow">Upgrade</a>
                                            <!--<a href="<?php echo $site_dir; ?>/confirmation.php?iframe=true&width=500&height=250" class="action delete" rel="modalWindow">Delete</a>-->
                                        </td>
                                    </tr>

                                </table>

                                <h3>Deactivated licenses</h3>
                                 <table cellspacing="0" cellpadding="0" class="data-table-horizontal" width="100%">
                                    <tr>
                                        <th>License Name <a href="#" class="sorting"><span><img src="<?php echo $img_dir; ?>/icons/arrow-up.png" width="16" height="16" alt="" /></span></a></th>
                                        <th>Domain Name <a href="#" class="sorting"><span><img src="<?php echo $img_dir; ?>/icons/arrow-up.png" width="16" height="16" alt="" /></span></a></th>
                                        <th class="center">IP Address</th>
                                        <th class="center">Current Status</th>
                                        <th class="center">Renewal Date</th>
                                        <th class="center">Operating System</th>
                                        <th class="center">Price</th>
                                        <th class="center last" style="width:230px;">Actions</th>
                                    </tr>
                                    <tr class="odd">
                                        <td><a href="<?php echo $site_dir; ?>/management-license-details.php?iframe=true&width=600&height=500" rel="modalWindow">Sctetur adipiscing elit</a></td>
                                        <td>Domain.Com</td>
                                        <td class="center">192.168.2.1</td>
                                        <td class="center">Active</td>
                                        <td class="center">02/09/2011</td>
                                        <td class="center"><img src="<?php echo $img_dir; ?>/icons/win.png" width="20" height="18" alt="" /> Windows</td>
                                        <td class="center"><b class="price">$299.99</b></td>
                                        <td class="center last">
                                            <a href="<?php echo $site_dir; ?>/management-license-details.php?iframe=true&width=600&height=500" class="action license" rel="modalWindow">Details</a>
                                            <a href="<?php echo $site_dir; ?>/management-license-edit.php?iframe=true&width=600&height=500" class="action edit" rel="modalWindow">Edit</a>
                                            <a href="#" class="action upgrade" rel="modalWindow">Upgrade</a>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td><a href="<?php echo $site_dir; ?>/management-license-details.php?iframe=true&width=600&height=500" rel="modalWindow">Adipiscing elit</a></td>
                                        <td>Domain.Com</td>
                                        <td class="center">192.168.2.1</td>
                                        <td class="center">Active</td>
                                        <td class="center">02/09/2011</td>
                                        <td class="center"><img src="<?php echo $img_dir; ?>/icons/linux.png" width="20" height="18" alt="" /> Linux</td>
                                        <td class="center"><b class="price">$299.99</b></td>
                                        <td class="center last">
                                            <a href="<?php echo $site_dir; ?>/management-license-details.php?iframe=true&width=600&height=500" class="action license" rel="modalWindow">Details</a>
                                            <a href="<?php echo $site_dir; ?>/management-license-edit.php?iframe=true&width=600&height=500" class="action edit" rel="modalWindow">Edit</a>
                                            <a href="#" class="action upgrade" rel="modalWindow">Upgrade</a>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td><a href="<?php echo $site_dir; ?>/management-license-details.php?iframe=true&width=600&height=500" rel="modalWindow">Sctetur adipiscing elit</a></td>
                                        <td>Domain.Com</td>
                                        <td class="center">192.168.2.1</td>
                                        <td class="center">Active</td>
                                        <td class="center">02/09/2011</td>
                                        <td class="center"><img src="<?php echo $img_dir; ?>/icons/unknown.png" width="20" height="18" alt="" /> Unknown</td>
                                        <td class="center"><b class="price">$299.99</b></td>
                                        <td class="center last">
                                            <a href="<?php echo $site_dir; ?>/management-license-details.php?iframe=true&width=600&height=500" class="action license" rel="modalWindow">Details</a>
                                            <a href="<?php echo $site_dir; ?>/management-license-edit.php?iframe=true&width=600&height=500" class="action edit" rel="modalWindow">Edit</a>
                                            <a href="#" class="action upgrade" rel="modalWindow">Upgrade</a>
                                        </td>
                                    </tr>
                                </table>

                                <div class="actions clearfix mb0">
                                    <a href="<?php echo $site_dir; ?>/management-order-new-license.php" class="ml15 fr btn btn-action"><span>Order New License</span></a>
                                    <a href="#" class="ml15 fr btn btn-soft-action"><span>Some Button</span></a>
                                </div>


                    </div></div>
                    <div class="box-btm-right"><div class="box-btm-left"><!--  --></div></div>
                    
                </div>

                <div class="clear"></div>

                <div class="grid_12">
                    <div class="containerPlus { width:'100%', buttons:'m', skin:'lc' }" style="position:relative;">
                      <div class="no">
                        <div class="ne"><div class="n">Advanced Search</div></div>
                        <div class="o"><div class="e"><div class="c">
                          <div class="mbcontainercontent">

                              <form class="form clearfix">

                                <div class="split">
                                    <label>OS</label>
                                    <select class="field" /><option>Select...</option></select>
                                </div>

                                <div class="split">
                                  <label>License Type</label>
                                  <select class="field" /><option>Select...</option></select>
                                </div>

                                <div class="clear"></div>

                                <div class="split">
                                  <label>IP Address</label>
                                  <input name="ad1" class="field"/>
                                </div>

                                <div class="split">
                                  <label>Domain</label>
                                  <input name="ad2" class="field"/>
                                </div>

                                <div class="clear"></div>

                                <label>Purchase Method</label>
                                <input name="pmethod" class="field" style="width:95%" />

                                <div class="clear"></div>

                                <div class="actions clearfix mb0">
                                    <a href="#" class="ml15 fr btn btn-action-small"><span>Search</span></a>
                                    <a href="#" class="ml15 fr btn btn-soft-action-small"><span>Some Button</span></a>
                                </div>

                              </form>

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