<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php $page="reviews"; include_once("_include/modules/config.php"); ?>
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
            <h1>Reviews</h1>
            <div class="welcome clearfix">
                <div class="user-avatar"><img src="<?php echo $img_dir; ?>/misc/user200.png" width="37" height="37" alt="" /></div>
                <div class="user-data">Welcome John Doe, <br/> <a href="#">My Account</a>  &nbsp;I&nbsp;  <a href="#">Some Link</a> &nbsp;I&nbsp;   <a href="#">Log Out</a></div>
            </div>
        </div>

        <div class="container-body clearfix">

                <div class="grid_6">
                    <div class="containerPlus { width:'100%', height:'360', buttons:'m', skin:'lc' }" style="position:relative;">
                      <div class="no">
                        <div class="ne"><div class="n">License Buddy</div></div>
                        <div class="o"><div class="e"><div class="c">
                          <div class="mbcontainercontent">

                            <h3>Donec vestibulum sollicitudin tellus</h3>
                            <p>Suspendisse potenti. Maecenas nec nisi. Donec vestibulum sollicitudin tellus. Sed consequat pellentesque ante. Vestibulum turpis quam, vulputate nec, sollicitudin tellus.</p>

                            <div class="boxed rounded mb10">
                                <p class="center mt10 mb0"><img src="<?php echo $img_dir; ?>/misc/lblogo.png" width="287" height="54" alt="" /></p>
                                <h3 class="center mt0">$2.95/One-Time for Each Review</h3>
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
                        <div class="ne"><div class="n">Your Review Stats</div></div>
                        <div class="o"><div class="e"><div class="c">
                          <div class="mbcontainercontent">
                              <h3>Donec vestibulum sollicitudin tellus</h3>
                              <p>Maecenas justo elit, lacinia sit amet, cursus ut, sagittis sed, eros. Suspendisse potenti. Maecenas nec nisi. Donec vestibulum sollicitudin tellus. Sed consequat pellentesque ante.</p>

                              <table cellpadding="0" cellspacing="0" class="simple-data-table" width="100%">
                                <tr class="odd">
                                  <td>Total Reviews:</td>
                                  <td><b>4 Reviews</b></td>
                                </tr>
                                <tr class="even">
                                  <td>Disapproved:</td>
                                  <td><b>2 Reviews</b></td>
                                </tr>
                                <tr class="odd">
                                  <td>Pending Approvment:</td>
                                  <td><b>2 Reviews</b></td>
                                </tr>
                                <tr class="even">
                                  <td>Pending Approvment:</td>
                                  <td><b>2 Reviews</b></td>
                                </tr>
                                <tr class="odd totals">
                                  <td class="btmlast">Earnings:</td>
                                  <td class="btmlast"><b>$122.23</b></td>
                                </tr>
                              </table>

                          </div>
                        </div></div></div>
                        <div><div class="so"><div class="se"><div class="s"></div></div></div></div>
                      </div>
                    </div>
                </div>

                <div class="clear"></div>

                <div class="grid_12">
                    <div class="containerPlus { width:'100%', buttons:'m', skin:'lc' }" style="position:relative;">
                      <div class="no">
                        <div class="ne"><div class="n">Licenses you can Review</div></div>
                        <div class="o"><div class="e"><div class="c">
                          <div class="mbcontainercontent">

                                 <table cellspacing="0" cellpadding="0" class="data-table-horizontal" width="100%">
                                    <tr>
                                        <th>License Name <a href="#" class="sorting"><span><img src="<?php echo $img_dir; ?>/icons/arrow-up.png" width="16" height="16" alt="" /></span></a></th>
                                        <th>Domain Name <a href="#" class="sorting"><span><img src="<?php echo $img_dir; ?>/icons/arrow-down.png" width="16" height="16" alt="" /></span></a></th>
                                        <th class="center">IP Address <a href="#" class="sorting"><span><img src="<?php echo $img_dir; ?>/icons/arrow-down.png" width="16" height="16" alt="" /></span></a></th>
                                        <th class="center">Current Status</th>
                                        <th class="center">Renewal Date</th>
                                        <th class="center">Operating System</th>
                                        <th class="center">Price</th>
                                        <th class="center last">Actions</th>
                                    </tr>
                                    <tr class="odd">
                                        <td><a href="<?php echo $site_dir; ?>/review-license.php?iframe=true&width=650&height=630" rel="modalWindow">Lorem ipsum dolor</a></td>
                                        <td>Domain.Com</td>
                                        <td class="center">192.168.2.1</td>
                                        <td class="center">Active</td>
                                        <td class="center">02/09/2011</td>
                                        <td class="center"><img src="<?php echo $img_dir; ?>/icons/win.png" width="20" height="18" alt="" /> Windows</td>
                                        <td class="center"><b class="price">$299.99</b></td>
                                        <td class="center last">
                                            <a href="<?php echo $site_dir; ?>/review-license.php?iframe=true&width=750&height=630" class="action review" rel="modalWindow">Review</a>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td><a href="<?php echo $site_dir; ?>/review-license.php?iframe=true&width=750&height=630" rel="modalWindow">Dolor sit amet</a></td>
                                        <td>Domain.Com</td>
                                        <td class="center">192.168.2.1</td>
                                        <td class="center">Active</td>
                                        <td class="center">02/09/2011</td>
                                        <td class="center"><img src="<?php echo $img_dir; ?>/icons/linux.png" width="20" height="18" alt="" /> Linux</td>
                                        <td class="center"><b class="price">$299.99</b></td>
                                        <td class="center last">
                                            <a href="<?php echo $site_dir; ?>/review-license.php?iframe=true&width=750&height=630" class="action review" rel="modalWindow">Review</a>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td><a href="<?php echo $site_dir; ?>/review-license.php?iframe=true&width=750&height=630" rel="modalWindow">Lorem ipsum dolor</a></td>
                                        <td>Domain.Com</td>
                                        <td class="center">192.168.2.1</td>
                                        <td class="center">Active</td>
                                        <td class="center">02/09/2011</td>
                                        <td class="center"><img src="<?php echo $img_dir; ?>/icons/win.png" width="20" height="18" alt="" /> Windows</td>
                                        <td class="center"><b class="price">$299.99</b></td>
                                        <td class="center last">
                                            <a href="<?php echo $site_dir; ?>/review-license.php?iframe=true&width=750&height=630" class="action review" rel="modalWindow">Review</a>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td><a href="<?php echo $site_dir; ?>/review-license.php?iframe=true&width=750&height=630" rel="modalWindow">Dolor sit amet</a></td>
                                        <td>Domain.Com</td>
                                        <td class="center">192.168.2.1</td>
                                        <td class="center">Active</td>
                                        <td class="center">02/09/2011</td>
                                        <td class="center"><img src="<?php echo $img_dir; ?>/icons/linux.png" width="20" height="18" alt="" /> Linux</td>
                                        <td class="center"><b class="price">$299.99</b></td>
                                        <td class="center last">
                                            <a href="<?php echo $site_dir; ?>/review-license.php?iframe=true&width=750&height=630" class="action review" rel="modalWindow">Review</a>
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

                <div class="grid_12">
                    <div class="containerPlus { width:'100%', buttons:'m', skin:'lc' }" style="position:relative;">
                      <div class="no">
                        <div class="ne"><div class="n">Licenses Reviewed</div></div>
                        <div class="o"><div class="e"><div class="c">
                          <div class="mbcontainercontent">

                                 <table cellspacing="0" cellpadding="0" class="data-table-horizontal" width="100%">
                                    <tr>
                                        <th>License Name <a href="#" class="sorting"><span><img src="<?php echo $img_dir; ?>/icons/arrow-up.png" width="16" height="16" alt="" /></span></a></th>
                                        <th>Domain Name <a href="#" class="sorting"><span><img src="<?php echo $img_dir; ?>/icons/arrow-down.png" width="16" height="16" alt="" /></span></a></th>
                                        <th class="center">IP Address <a href="#" class="sorting"><span><img src="<?php echo $img_dir; ?>/icons/arrow-down.png" width="16" height="16" alt="" /></span></a></th>
                                        <th class="center">Current Status</th>
                                        <th class="center">Renewal Date</th>
                                        <th class="center">Operating System</th>
                                        <th class="center">Price</th>
                                        <th class="center last">Actions</th>
                                    </tr>
                                    <tr class="odd">
                                        <td><a href="#" rel="external">Lorem ipsum dolor</a></td>
                                        <td>Domain.Com</td>
                                        <td class="center">192.168.2.1</td>
                                        <td class="center">Approved</td>
                                        <td class="center">02/09/2011</td>
                                        <td class="center"><img src="<?php echo $img_dir; ?>/icons/win.png" width="20" height="18" alt="" /> Windows</td>
                                        <td class="center"><b class="price">$299.99</b></td>
                                        <td class="center last">
                                            -
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td><a href="#" rel="external">Dolor sit amet</a></td>
                                        <td>Domain.Com</td>
                                        <td class="center">192.168.2.1</td>
                                        <td class="center">Pending</td>
                                        <td class="center">02/09/2011</td>
                                        <td class="center"><img src="<?php echo $img_dir; ?>/icons/linux.png" width="20" height="18" alt="" /> Linux</td>
                                        <td class="center"><b class="price">$299.99</b></td>
                                        <td class="center last">
                                            -
                                        </td>
                                    </tr>
                                    <tr class="odd redbg">
                                        <td><a href="#" rel="external">Lorem ipsum dolor</a></td>
                                        <td>Domain.Com</td>
                                        <td class="center">192.168.2.1</td>
                                        <td class="center">Disapproved</td>
                                        <td class="center">02/09/2011</td>
                                        <td class="center"><img src="<?php echo $img_dir; ?>/icons/win.png" width="20" height="18" alt="" /> Windows</td>
                                        <td class="center"><b class="price">$299.99</b></td>
                                        <td class="center last">
                                            -
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td><a href="#" rel="external">Dolor sit amet</a></td>
                                        <td>Domain.Com</td>
                                        <td class="center">192.168.2.1</td>
                                        <td class="center">Approved</td>
                                        <td class="center">02/09/2011</td>
                                        <td class="center"><img src="<?php echo $img_dir; ?>/icons/linux.png" width="20" height="18" alt="" /> Linux</td>
                                        <td class="center"><b class="price">$299.99</b></td>
                                        <td class="center last">
                                            -
                                        </td>
                                    </tr>
                                  </table>

                          </div>
                        </div></div></div>
                        <div><div class="so"><div class="se"><div class="s"></div></div></div></div>
                      </div>
                    </div>
                </div>


                <div class="grid_12 notification success"><span>Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div>
                <div class="grid_12 notification error"><span>Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div>

        </div>
     </div>
</div>

<?php include("_include/modules/footer.php"); ?>


</body>
</html>