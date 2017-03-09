<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php $page="support"; include_once("_include/modules/config.php"); ?>
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
            <h1>Support</h1>
            <div class="welcome clearfix">
                <div class="user-avatar"><img src="<?php echo $img_dir; ?>/misc/user200.png" width="37" height="37" alt="" /></div>
                <div class="user-data">Welcome John Doe, <br/> <a href="#">My Account</a>  &nbsp;I&nbsp;  <a href="#">Some Link</a> &nbsp;I&nbsp;   <a href="#">Log Out</a></div>
            </div>
        </div>

        <div class="container-body clearfix">

                <div class="grid_12">
                    <div class="containerPlus { width:'100%', skin:'lc' }" style="position:relative;">
                      <div class="no">
                        <div class="ne"><div class="n">Your Current Tickets</div></div>
                        <div class="o"><div class="e"><div class="c">
                          <div class="mbcontainercontent">

                                <div class="pagination clearfix">
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

                                <table cellspacing="0" cellpadding="0" class="data-table-horizontal" width="100%">
                                    <tr>
                                        <th>ID</th>
                                        <th>Subject</th>
                                        <th class="center">Submitted (Date)</th>
                                        <th class="center">Priority</th>
                                        <th class="center">Last Activity</th>
                                        <th class="center last">Actions</th>
                                    </tr>
                                    <tr class="odd">
                                        <td>1</td>
                                        <td><a href="<?php echo $site_dir; ?>/support-ticket.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></td>
                                        <td class="center">03/03/2011</td>
                                        <td class="center">4</td>
                                        <td class="center">5</td>
                                        <td class="center last">
                                            <a href="<?php echo $site_dir; ?>/support-ticket.php" class="action reply" rel="modalWindow">Reply</a>
                                            <a href="#" class="action close">Close</a>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td>2</td>
                                        <td><a href="<?php echo $site_dir; ?>/support-ticket.php">Morbi rhoncus elementum odio, vel elementum velit volutpat eget.</a></td>
                                        <td class="center">03/03/2011</td>
                                        <td class="center">4</td>
                                        <td class="center">5</td>
                                        <td class="center last">
                                            <a href="<?php echo $site_dir; ?>/support-ticket.php" class="action reply" rel="modalWindow">Reply</a>
                                            <a href="#" class="action close">Close</a>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td>3</td>
                                        <td><a href="<?php echo $site_dir; ?>/support-ticket.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></td>
                                        <td class="center">03/03/2011</td>
                                        <td class="center">4</td>
                                        <td class="center">5</td>
                                        <td class="center last">
                                            <a href="<?php echo $site_dir; ?>/support-ticket.php" class="action reply" rel="modalWindow">Reply</a>
                                            <a href="#" class="action close">Close</a>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td>4</td>
                                        <td><a href="<?php echo $site_dir; ?>/support-ticket.php">Morbi rhoncus elementum odio</a></td>
                                        <td class="center">03/03/2011</td>
                                        <td class="center">4</td>
                                        <td class="center">5</td>
                                        <td class="center last">
                                            <a href="<?php echo $site_dir; ?>/support-ticket.php" class="action reply" rel="modalWindow">Reply</a>
                                            <a href="#" class="action close">Close</a>
                                        </td>
                                    </tr>
                                </table>

                                <div class="actions clearfix">
                                    <div class="fl when-loading"><img src="<?php echo $img_dir; ?>/misc/loading-grey.gif" width="35" height="35" alt="" /> Loading stuff please wait...</div>
                                    <a href="<?php echo $site_dir; ?>/support-create-ticket.php?iframe=true&width=650&height=520" class="fr btn btn-action ml15" rel="modalWindow" title="Create New Ticket"><span>Create New Ticket</span></a>
                                    <a href="#" class="fr btn btn-soft-action ml15"><span>Another Button</span></a>
                                </div>

                          </div>
                        </div></div></div>
                        <div><div class="so"><div class="se"><div class="s"></div></div></div></div>
                      </div>
                    </div>
                </div>

                <div class="clear"></div>


                <div class="grid_12">
                    <div class="containerPlus { width:'100%', skin:'lc' }" style="position:relative;">
                      <div class="no">
                        <div class="ne"><div class="n">Closed Tickets</div></div>
                        <div class="o"><div class="e"><div class="c">
                          <div class="mbcontainercontent">

                                <div class="pagination clearfix">
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

                                <table cellspacing="0" cellpadding="0" class="data-table-horizontal" width="100%">
                                    <tr>
                                        <th>ID</th>
                                        <th>Subject</th>
                                        <th class="center">Submitted (Date)</th>
                                        <th class="center">Priority</th>
                                        <th class="center">Last Activity</th>
                                        <th class="center last">Actions</th>
                                    </tr>
                                    <tr class="odd">
                                        <td>4</td>
                                        <td><a href="<?php echo $site_dir; ?>/support-ticket.php">Morbi rhoncus elementum odio</a></td>
                                        <td class="center">03/03/2011</td>
                                        <td class="center">4</td>
                                        <td class="center">5</td>
                                        <td class="center last">
                                            <a href="#" class="action reopen">Reopen</a>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td>4</td>
                                        <td><a href="<?php echo $site_dir; ?>/support-ticket.php">Morbi rhoncus elementum odio, vel elementum velit volutpat eget.</a></td>
                                        <td class="center">03/03/2011</td>
                                        <td class="center">4</td>
                                        <td class="center">5</td>
                                        <td class="center last">
                                            <a href="#" class="action reopen">Reopen</a>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td>4</td>
                                        <td><a href="<?php echo $site_dir; ?>/support-ticket.php">Morbi rhoncus elementum odio</a></td>
                                        <td class="center">03/03/2011</td>
                                        <td class="center">4</td>
                                        <td class="center">5</td>
                                        <td class="center last">
                                            <a href="#" class="action reopen">Reopen</a>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td>4</td>
                                        <td><a href="<?php echo $site_dir; ?>/support-ticket.php">Rhoncus elementum odio, vel elementum velit volutpat eget.</a></td>
                                        <td class="center">03/03/2011</td>
                                        <td class="center">4</td>
                                        <td class="center">5</td>
                                        <td class="center last">
                                            <a href="#" class="action reopen">Reopen</a>
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

                <div class="grid_12 notification success"><span>Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div>
                <div class="grid_12 notification error"><span>Nulla facilisi. Vestibulum vel magna in ante lobortis semper. Integer posuere justo et urna.</span></div>

        </div>
     </div>
</div>

<?php include("_include/modules/footer.php"); ?>


</body>
</html>