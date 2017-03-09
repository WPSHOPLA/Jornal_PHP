<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php $page="account"; include_once("_include/modules/config.php"); ?>
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
            <h1>Account</h1>
            <div class="welcome clearfix">
                <div class="user-avatar"><img src="<?php echo $img_dir; ?>/misc/user200.png" width="37" height="37" alt="" /></div>
                <div class="user-data">Welcome John Doe, <br/> <a href="#">My Account</a>  &nbsp;I&nbsp;  <a href="#">Some Link</a> &nbsp;I&nbsp;   <a href="#">Log Out</a></div>
            </div>
        </div>

        <div class="container-body clearfix">

                <div class="grid_12">
                    <div class="containerPlus { width:'100%', buttons:'m', skin:'lc' }" style="position:relative;">
                      <div class="no">
                        <div class="ne"><div class="n">Account Information</div></div>
                        <div class="o"><div class="e"><div class="c">
                          <div class="mbcontainercontent">

                               <table cellpadding="0" cellspacing="0" class="fl simple-data-table" width="50%">
                                 <tr class="odd">
                                   <td>Account ID:</td>
                                   <td>124321</td>
                                 </tr>
                                 <tr class="even">
                                   <td>Credit Balance:</td>
                                   <td>$1000.00</td>
                                 </tr>
                                 <tr class="odd">
                                   <td class="btmlast">Client Creation Date:</td>
                                   <td class="btmlast">02/02/2011</td>
                                 </tr>
                               </table>
                               <table cellpadding="0" cellspacing="0" class="fr simple-data-table" width="50%">
                                 <tr class="odd">
                                   <td>Late Fee Schedule: </td>
                                   <td>02/06/2011</td>
                                 </tr>
                                 <tr class="even">
                                   <td>Discount Amount:</td>
                                   <td>$233.00</td>
                                 </tr>
                                 <tr class="odd">
                                   <td class="btmlast">Invoice Charge Date: </td>
                                   <td class="btmlast">03/04/2011</td>
                                 </tr>
                               </table>
                          </div>
                        </div></div></div>
                        <div><div class="so"><div class="se"><div class="s"></div></div></div></div>
                      </div>
                    </div>
                </div>

                <div class="clear"></div>

                <div class="grid_6">
                    <div class="containerPlus { width:'100%', height:'420', buttons:'m', skin:'lc' }" style="position:relative;">
                      <div class="no">
                        <div class="ne"><div class="n">Authorized Contacts</div></div>
                        <div class="o"><div class="e"><div class="c">
                          <div class="mbcontainercontent">

                                <table cellspacing="0" cellpadding="0" class="simple-data-table" width="99%">
                                    <tr>
                                        <th>Contact Name</th>
                                        <th class="center">Email</th>
                                        <th class="left last">Actions</th>
                                    </tr>
                                    <tr class="odd">
                                        <td><a href="#">Lorem ipsum dolor sit amet</a></td>
                                        <td class="center">dorem@yahoo.com</td>
                                        <td class="left last">
                                            <a href="#" class="action edit" rel="modalWindow">Edit</a>
                                            <a href="#" class="action close">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td><a href="#">Morbi rhoncus elementum odio</a></td>
                                        <td class="center">dorem@yahoo.com</td>
                                        <td class="left last">
                                            <a href="#" class="action edit" rel="modalWindow">Edit</a>
                                            <a href="#" class="action close">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td><a href="#">Lorem ipsum dolor sit amet</a></td>
                                        <td class="center">dorem@yahoo.com</td>
                                        <td class="left last">
                                            <a href="#" class="action edit" rel="modalWindow">Edit</a>
                                            <a href="#" class="action close">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td><a href="#">Morbi rhoncus elementum odio</a></td>
                                        <td class="center">dorem@yahoo.com</td>
                                        <td class="left last">
                                            <a href="#" class="action edit" rel="modalWindow">Edit</a>
                                            <a href="#" class="action close">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td><a href="#">Lorem ipsum dolor sit amet</a></td>
                                        <td class="center">dorem@yahoo.com</td>
                                        <td class="left last">
                                            <a href="#" class="action edit" rel="modalWindow">Edit</a>
                                            <a href="#" class="action close">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td><a href="#">Morbi rhoncus elementum odio</a></td>
                                        <td class="center">dorem@yahoo.com</td>
                                        <td class="left last">
                                            <a href="#" class="action edit" rel="modalWindow">Edit</a>
                                            <a href="#" class="action close">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td><a href="#">Lorem ipsum dolor sit amet</a></td>
                                        <td class="center">dorem@yahoo.com</td>
                                        <td class="left last">
                                            <a href="#" class="action edit" rel="modalWindow">Edit</a>
                                            <a href="#" class="action close">Delete</a>
                                        </td>
                                    </tr>
                                </table>
                                <div class="actions clearfix">
                                    <a href="#" class="ml15 fr btn btn-action-small"><span>Add New Contact</span></a>
                                    <a href="#" class="ml15 fr btn btn-soft-action-small"><span>Some Button</span></a>
                                </div>

                          </div>
                        </div></div></div>
                        <div><div class="so"><div class="se"><div class="s"></div></div></div></div>
                      </div>
                    </div>
                </div>

                <div class="grid_6">
                    <div class="containerPlus { width:'100%', height:'420', buttons:'m', skin:'lc' }" style="position:relative;">
                      <div class="no">
                        <div class="ne"><div class="n">Edit Account Holder Profile Information</div></div>
                        <div class="o"><div class="e"><div class="c">
                          <div class="mbcontainercontent">
                               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris nunc, tincidunt at mattis id, porta in lorem. Vivamus laoreet ipsum a dui porta ornare. Duis eget libero quis sem elementum ultricies.</p>
                               <table cellpadding="0" cellspacing="0" class="simple-data-table" width="100%">
                                 <tr class="odd">
                                   <td>Name:</td>
                                   <td>Bill Meyer</td>
                                 </tr>
                                 <tr class="even">
                                   <td>Address:</td>
                                   <td>Lonesome Road 12</td>
                                 </tr>
                                 <tr class="odd">
                                   <td>City:</td>
                                   <td>Atlanta</td>
                                 </tr>
                                 <tr class="even">
                                   <td>State: </td>
                                   <td>Georgia</td>
                                 </tr>
                                 <tr class="odd">
                                   <td>Contact Phone:</td>
                                   <td>1221121321</td>
                                 </tr>
                                 <tr class="even">
                                   <td>Email: </td>
                                   <td>bill@yahoo.com</td>
                                 </tr>
                               </table>

                               <div class="actions clearfix">
                                            <a href="#" class="ml15 fr btn btn-action-small"><span>Some Button</span></a>
                                            <a href="<?php echo $site_dir; ?>/account-addedit-account-holder.php?iframe=true&width=620&height=500" rel="modalWindow" class="ml15 fr btn btn-soft-action-small"><span>Edit Information</span></a>
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
                        <div class="ne"><div class="n">API Information</div></div>
                        <div class="o"><div class="e"><div class="c">
                          <div class="mbcontainercontent">

                                <table cellpadding="0" cellspacing="0" class="api-table">
                                  <tr>
                                    <td><input type="radio" name="api" selected="selected" onclick="show('apiactive');hide('apidisabled')"/></td>
                                    <td>Active</td>
                                    <td style="width:20px;"></td>
                                    <td><input type="radio" name="api" onclick="hide('apiactive');show('apidisabled')"/></td>
                                    <td>Disabled</td>
                                  </tr>
                                </table>

                                <div class="separator"><!--  --></div>

                                <div id="apiactive" style="display:;">

                                    <div class="fl" style="width:48%; margin-right:25px;">
                                        <h4 class="mb0">Api Information</h4>
                                        <div class="separator"><!--  --></div>
                                        <table cellpadding="0" cellspacing="0" class="data-table-vertical" width="100%" style="margin:0px; border:0px;">
                                          <tr>
                                            <td style="border:0px;">API Creation Date: </td>
                                            <td style="border:0px;"><b>02/03/2011</b></td>
                                          </tr>
                                          <tr>
                                            <td>API Username:</td>
                                            <td><b>johnywalker</b></td>
                                          </tr>
                                          <tr>
                                            <td>API Password: </td>
                                            <td><b>123uigf21ii123i2ghio11oixx1212</b></td>
                                          </tr>
                                          <tr>
                                            <td>API Daily Limit: </td>
                                            <td><b>455</b></td>
                                          </tr>
                                          <tr>
                                            <td>API Charge Method: </td>
                                            <td><b>Mores Milanos</b></td>
                                          </tr>
                                          <tr>
                                            <td>API Recharge Minimum: </td>
                                            <td><b>$12.00</b></td>
                                          </tr>
                                          <tr>
                                            <td>API Minimum Licenses: </td>
                                            <td><b>2</b></td>
                                          </tr>
                                          <tr>
                                            <td>API IPs Allowed: </td>
                                            <td><b>2</b></td>
                                          </tr>
                                        </table>
                                        <div class="separator"><!--  --></div>
                                        <div class="actions clearfix">
                                            <a href="#" class="ml15 fr btn btn-action-small"><span>Reset Password</span></a>
                                            <a href="<?php echo $site_dir; ?>/confirmation.php?iframe=true&width=500&height=250" rel="modalWindow" class="ml15 fr btn btn-soft-action-small"><span>Disable API</span></a>
                                        </div>
                                    </div>

                                    <div class="fr" style="width:48%">
                                        <h4 class="mb0">Remote Access IPs</h4>
                                        <div class="separator"><!--  --></div>
                                        <table cellspacing="0" cellpadding="0" class="simple-data-table" width="99%">
                                            <tr>
                                                <th>IP Address</th>
                                                <th class="right last">Actions</th>
                                            </tr>
                                            <tr class="odd">
                                                <td><a href="#">192.168.1.1</a></td>
                                                <td class="right last">
                                                    <a href="#" class="action edit" rel="modalWindow">Edit</a>
                                                    <a href="#" class="action close">Delete</a>
                                                </td>
                                            </tr>
                                            <tr class="even">
                                                <td><a href="#">192.168.1.1</a></td>
                                                <td class="right last">
                                                    <a href="#" class="action edit" rel="modalWindow">Edit</a>
                                                    <a href="#" class="action close">Delete</a>
                                                </td>
                                            </tr>
                                            <tr class="odd">
                                                <td><a href="#">192.168.1.1</a></td>
                                                <td class="right last">
                                                    <a href="#" class="action edit" rel="modalWindow">Edit</a>
                                                    <a href="#" class="action close">Delete</a>
                                                </td>
                                            </tr>
                                            <tr class="even">
                                                <td><a href="#">192.168.1.1</a></td>
                                                <td class="right last">
                                                    <a href="#" class="action edit" rel="modalWindow">Edit</a>
                                                    <a href="#" class="action close">Delete</a>
                                                </td>
                                            </tr>
                                            <tr class="odd">
                                                <td><a href="#">192.168.1.1</a></td>
                                                <td class="right last">
                                                    <a href="#" class="action edit" rel="modalWindow">Edit</a>
                                                    <a href="#" class="action close">Delete</a>
                                                </td>
                                            </tr>
                                            <tr class="even">
                                                <td><a href="#">192.168.1.1</a></td>
                                                <td class="right last">
                                                    <a href="#" class="action edit" rel="modalWindow">Edit</a>
                                                    <a href="#" class="action close">Delete</a>
                                                </td>
                                            </tr>
                                        </table>
                                        <div class="actions clearfix">
                                            <a href="<?php echo $site_dir; ?>/account-api-addeditip.php?iframe=true&width=500&height=300" rel="modalWindow" class="ml15 fr btn btn-action-small"><span>Add New IP's</span></a>
                                            <a href="<?php echo $site_dir; ?>/confirmation.php?iframe=true&width=500&height=250" rel="modalWindow" class="ml15 fr btn btn-soft-action-small"><span>Disable API</span></a>
                                        </div>
                                    </div>
                                    <div class="clear"></div>

                                </div>

                                <div id="apidisabled" style="display:none">
                                    <i>API Disabled <a href="<?php echo $site_dir; ?>/account-api-enable.php?iframe=true&width=600&height=530" rel="modalWindow">Click here to enable</a></i>
                                    <div class="separator"><!--  --></div>
                                    <div class="actions clearfix">
                                            <a href="<?php echo $site_dir; ?>/account-api-enable.php?iframe=true&width=600&height=530" rel="modalWindow" class="ml15 fr btn btn-action-small"><span>Activate API</span></a>
                                            <a href="#" class="ml15 fr btn btn-soft-action-small"><span>Some Button</span></a>
                                    </div>
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
                        <div class="ne"><div class="n">Notifications & Language</div></div>
                        <div class="o"><div class="e"><div class="c">
                          <div class="mbcontainercontent" id="notification-language">

                                <form class="form" action="">
                                <div class="fl" style="width:30%; margin-right:25px;">
                                <h3>Global Notification</h3>
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam vitae purus nisl, non aliquam risus.</p>

                                <table cellpadding="0" cellspacing="0" class="notify-pref-table">
                                  <tr>
                                    <td><input type="radio" name="notpref" /></td>
                                    <td>SMS</td>
                                    <td style="width:20px;"></td>
                                    <td><input type="radio" name="notpref" selected="selected" checked="selected"/></td>
                                    <td>Email</td>
                                  </tr>
                                </table>
                                </div>

                                <div class="fl" style="width:30%;  margin-right:25px;">
                                <h3>License Report Notification</h3>

                                <p>Vivamus non quam nibh. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam vitae purus nisl, non aliquam risus.</p>

                                <table cellpadding="0" cellspacing="0" class="notify-pref-table">
                                  <tr>
                                    <td><input type="radio" name="notpref" /></td>
                                    <td>Daily</td>
                                    <td style="width:20px;"></td>
                                    <td><input type="radio" name="notpref" selected="selected" checked="selected"/></td>
                                    <td>Weekly</td>
                                    <td style="width:20px;"></td>
                                    <td><input type="radio" name="notpref" /></td>
                                    <td>Monthly</td>
                                  </tr>
                                </table>
                                </div>

                                <div class="fl" style="width:30%;  margin-right:0px;">
                                <h3>Switching language</h3>

                                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam vitae purus nisl, non aliquam risus.</p>

                                <table cellpadding="0" cellspacing="0" class="notify-pref-table">
                                  <tr>
                                    <td><input type="radio" name="langpref" /></td>
                                    <td>English</td>
                                    <td style="width:20px;"></td>
                                    <td><input type="radio" name="langpref" selected="selected" checked="selected"/></td>
                                    <td>Spanish</td>
                                    <td style="width:20px;"></td>
                                    <td><input type="radio" name="langpref" /></td>
                                    <td>Portuguese</td>
                                  </tr>
                                </table>
                                </div>

                                <div class="clear"></div>

                                <div class="actions">
                                    <a href="#" class="ml15 fr btn btn-action-small"><span>Save</span></a>
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


                <div class="grid_6">
                    <div class="containerPlus { width:'100%', height:'350', buttons:'m', skin:'lc' }" style="position:relative;">
                      <div class="no">
                        <div class="ne"><div class="n">Password Reset</div></div>
                        <div class="o"><div class="e"><div class="c">
                          <div class="mbcontainercontent">

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non quam nibh. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam vitae purus nisl, non aliquam risus.</p>


                                <form action="" class="form">
                                  <table cellpadding="0" cellspacing="0" width="99%">
                                    <tr>
                                      <td class="label" style="width:40%">Old Password:</td>
                                      <td><input id="oldpassword"  name="pass" style="width:95%;" class="mb5"/></td>
                                    </tr>
                                    <tr>
                                      <td class="label" style="width:40%">New Password:</td>
                                      <td ><input id="passwordst1" type="password" name="pass" style="width:95%;" class="mb5" /></td>
                                    </tr>
                                    <tr>
                                      <td class="label" style="width:40%">Confirm New Password:</td>
                                      <td><input id="passwordst2" type="password" name="pass" style="width:95%;" class="mb5"/></td>
                                    </tr>
                                  </table>
                                <div class="actions">
                                    <a href="#" class="ml15 fr btn btn-action-small"><span>Save My Password</span></a>
                                    <a href="#" class="ml15 fr btn btn-soft-action-small"><span>Some Button</span></a>
                                </div>
                                </form>

                          </div>
                        </div></div></div>
                        <div><div class="so"><div class="se"><div class="s"></div></div></div></div>
                      </div>
                    </div>
                </div>

                <div class="grid_6">
                    <div class="containerPlus { width:'100%', buttons:'m', skin:'lc' }" style="position:relative;">
                      <div class="no">
                        <div class="ne"><div class="n">eNom Activated Account</div></div>
                        <div class="o"><div class="e"><div class="c">
                          <div class="mbcontainercontent">


                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non quam nibh. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam vitae purus nisl, non aliquam risus.</p>
                                <ul class="bullet-list">
                                    <li>Vivamus non quam nibh. Cum sociis natoque.</li>
                                    <li>Cum sociis natoque penatibus et magnis dis parturient montes</li>
                                    <li>Vivamus non quam nibh. Cum sociis natoque.</li>
                                    <li>Cum sociis natoque penatibus et magnis dis parturient montes</li>
                                </ul>

                                <table cellpadding="0" cellspacing="0" class="data-table-horizontal" width="100%">
                                  <tr>
                                    <th>.com</th>
                                    <th>.net</th>
                                    <th>.name</th>
                                    <th>.some</th>
                                    <th>.xxx</th>
                                    <th>.ggg</th>
                                    <th>.ccc</th>
                                    <th>.ggg</th>

                                    <th class="last">.ggg</th>
                                  </tr>
                                  <tr class="even">
                                    <td>$8.50</td>
                                    <td>$8.50</td>
                                    <td>$8.50</td>
                                    <td>$8.50</td>
                                    <td>$8.50</td>
                                    <td>$8.50</td>
                                    <td>$8.50</td>
                                    <td>$8.50</td>
                                    <td class="last">$8.50</td>
                                  </tr>
                                </table>

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