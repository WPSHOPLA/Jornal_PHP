<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php $page="reports"; include_once("_include/modules/config.php"); ?>
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
            <h1>Reports</h1>
            <div class="welcome clearfix">
                <div class="user-avatar"><img src="<?php echo $img_dir; ?>/misc/user200.png" width="37" height="37" alt="" /></div>
                <div class="user-data">Welcome John Doe, <br/> <a href="#">My Account</a>  &nbsp;I&nbsp;  <a href="#">Some Link</a> &nbsp;I&nbsp;   <a href="#">Log Out</a></div>
            </div>
        </div>

        <div class="container-body clearfix">

                <div class="grid_4">
                    <div class="containerPlus { width:'100%', height:'360', buttons:'m', skin:'lc' }" style="position:relative;">
                      <div class="no">
                        <div class="ne"><div class="n">Latest Login Attempts</div></div>
                        <div class="o"><div class="e"><div class="c">
                          <div class="mbcontainercontent">

                                <table cellspacing="0" cellpadding="0" class="simple-data-table" width="99%">
                                    <tr>
                                        <th>Status</th>
                                        <th class="center">Time</th>
                                        <th class="left last">IP Address</th>
                                    </tr>
                                    <tr class="odd">
                                        <td>Successful</td>
                                        <td class="center">May/16/2011 1:48:32 PM</td>
                                        <td class="left last">69.70.233.86</td>
                                    </tr>
                                    <tr class="even">
                                        <td>Successful</td>
                                        <td class="center">May/16/2011 1:48:32 PM</td>
                                        <td class="left last">69.70.233.86</td>
                                    </tr>
                                    <tr class="odd">
                                        <td>Successful</td>
                                        <td class="center">May/16/2011 1:48:32 PM</td>
                                        <td class="left last">69.70.233.86</td>
                                    </tr>
                                    <tr class="even">
                                        <td>Successful</td>
                                        <td class="center">May/16/2011 1:48:32 PM</td>
                                        <td class="left last">69.70.233.86</td>
                                    </tr>

                                </table>
                                <div class="actions clearfix">
                                    <a href="<?php echo $site_dir; ?>/confirmation.php?iframe=true&width=500&height=250" class="ml15 fr btn btn-action-small" rel="modalWindow"><span>Clear Logs</span></a>
                                    <a href="<?php echo $site_dir; ?>/reports-full-logs.php?iframe=true&width=800&height=600" class="ml15 fr btn btn-soft-action-small" title="Full Logs" rel="modalWindow"><span>View Full Log</span></a>
                                </div>

                          </div>
                        </div></div></div>
                        <div><div class="so"><div class="se"><div class="s"></div></div></div></div>
                      </div>
                    </div>
                </div>

                <div class="grid_8">
                    <div class="containerPlus { width:'100%', height:'360', buttons:'m', skin:'lc' }" style="position:relative;">
                      <div class="no">
                        <div class="ne"><div class="n">Mail Log</div></div>
                        <div class="o"><div class="e"><div class="c">
                          <div class="mbcontainercontent">

                                <table cellspacing="0" cellpadding="0" class="simple-data-table" width="99%">
                                    <tr>
                                        <th>Date & Time</th>
                                        <th class="center">Subject</th>
                                        <th class="center">Recipient</th>
                                        <th class="center last">Success</th>
                                    </tr>
                                    <tr class="odd">
                                        <td>Jul/18/2011 3:30:02AM</td>
                                        <td class="center">LicenseCube - New Invoice Created</td>
                                        <td class="center">Hugo Dube</td>
                                        <td class="center last">Yes</td>
                                    </tr>
                                    <tr class="even">
                                        <td>Jul/18/2011 3:30:02AM</td>
                                        <td class="center">LicenseCube - New Invoice Created</td>
                                        <td class="center">Hugo Dube</td>
                                        <td class="center last">Yes</td>
                                    </tr>
                                    <tr class="odd">
                                        <td>Jul/18/2011 3:30:02AM</td>
                                        <td class="center">LicenseCube - New Invoice Created</td>
                                        <td class="center">Hugo Dube</td>
                                        <td class="center last">Yes</td>
                                    </tr>
                                    <tr class="even">
                                        <td>Jul/18/2011 3:30:02AM</td>
                                        <td class="center">LicenseCube - New Invoice Created</td>
                                        <td class="center">Hugo Dube</td>
                                        <td class="center last">Yes</td>
                                    </tr>
                                    <tr class="odd">
                                        <td>Jul/18/2011 3:30:02AM</td>
                                        <td class="center">LicenseCube - New Invoice Created</td>
                                        <td class="center">Hugo Dube</td>
                                        <td class="center last">Yes</td>
                                    </tr>
                                    <tr class="even">
                                        <td>Jul/18/2011 3:30:02AM</td>
                                        <td class="center">LicenseCube - New Invoice Created</td>
                                        <td class="center">Hugo Dube</td>
                                        <td class="center last">Yes</td>
                                    </tr>
                                </table>
                                <div class="actions clearfix">
                                    <a href="<?php echo $site_dir; ?>/confirmation.php?iframe=true&width=500&height=250" class="ml15 fr btn btn-action-small" rel="modalWindow"><span>Clear Logs</span></a>
                                    <a href="<?php echo $site_dir; ?>/reports-full-logs.php?iframe=true&width=800&height=600" class="ml15 fr btn btn-soft-action-small" title="Full Logs" rel="modalWindow"><span>View Full Log</span></a>
                                </div>

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
                        <div class="ne"><div class="n">Event Log</div></div>
                        <div class="o"><div class="e"><div class="c">
                          <div class="mbcontainercontent">

                                <table cellspacing="0" cellpadding="0" class="simple-data-table" width="99%">
                                    <tr>
                                        <th>Event ID</th>
                                        <th class="center">Date & Time</th>
                                        <th class="center">Action</th>
                                        <th class="center">User</th>
                                        <th class="center">Amount</th>
                                        <th class="center last">Balance</th>
                                    </tr>
                                    <tr class="odd">
                                        <td>38770</td>
                                        <td class="center">Aug/15/2011 9:41:53AM</td>
                                        <td class="center">Service 1212 paid via PayPal #33518436105838903</td>
                                        <td class="center">1743</td>
                                        <td class="center">$19.95</td>
                                        <td class="center last">$78.90</td>
                                    </tr>
                                    <tr class="even">
                                        <td>38770</td>
                                        <td class="center">Aug/15/2011 9:41:53AM</td>
                                        <td class="center">Service 1212 paid via PayPal #33518436105838903</td>
                                        <td class="center">1743</td>
                                        <td class="center">$19.95</td>
                                        <td class="center last">$78.90</td>
                                    </tr>
                                    <tr class="odd">
                                        <td>38770</td>
                                        <td class="center">Aug/15/2011 9:41:53AM</td>
                                        <td class="center">Service 1212 paid via PayPal #33518436105838903</td>
                                        <td class="center">1743</td>
                                        <td class="center">$19.95</td>
                                        <td class="center last">$78.90</td>
                                    </tr>
                                    <tr class="even">
                                        <td>38770</td>
                                        <td class="center">Aug/15/2011 9:41:53AM</td>
                                        <td class="center">Service 1212 paid via PayPal #33518436105838903</td>
                                        <td class="center">1743</td>
                                        <td class="center">$19.95</td>
                                        <td class="center last">$78.90</td>
                                    </tr>
                                    <tr class="odd">
                                        <td>38770</td>
                                        <td class="center">Aug/15/2011 9:41:53AM</td>
                                        <td class="center">Service 1212 paid via PayPal #33518436105838903</td>
                                        <td class="center">1743</td>
                                        <td class="center">$19.95</td>
                                        <td class="center last">$78.90</td>
                                    </tr>
                                    <tr class="even">
                                        <td>38770</td>
                                        <td class="center">Aug/15/2011 9:41:53AM</td>
                                        <td class="center">Service 1212 paid via PayPal #33518436105838903</td>
                                        <td class="center">1743</td>
                                        <td class="center">$19.95</td>
                                        <td class="center last">$78.90</td>
                                    </tr>

                                </table>
                                <div class="actions clearfix">
                                    <a href="<?php echo $site_dir; ?>/confirmation.php?iframe=true&width=500&height=250" class="ml15 fr btn btn-action-small" rel="modalWindow"><span>Clear Logs</span></a>
                                    <a href="<?php echo $site_dir; ?>/reports-full-logs.php?iframe=true&width=800&height=600" class="ml15 fr btn btn-soft-action-small" title="Full Logs" rel="modalWindow"><span>View Full Log</span></a>
                                </div>

                          </div>
                        </div></div></div>
                        <div><div class="so"><div class="se"><div class="s"></div></div></div></div>
                      </div>
                    </div>
                </div>

                <div class="clear"></div>

                <div class="grid_12 notification success"><span>Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div>
                <div class="grid_12 notification error"><span>Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div>

        </div>
     </div>
</div>

<?php include("_include/modules/footer.php"); ?>


</body>
</html>