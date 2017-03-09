<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php $page="billing"; include_once("_include/modules/config.php"); ?>
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
            <h1>Billing</h1>
            <div class="welcome clearfix">
                <div class="user-avatar"><img src="<?php echo $img_dir; ?>/misc/user200.png" width="37" height="37" alt="" /></div>
                <div class="user-data">Welcome John Doe, <br/> <a href="#">My Account</a>  &nbsp;I&nbsp;  <a href="#">Some Link</a> &nbsp;I&nbsp;   <a href="#">Log Out</a></div>
            </div>
        </div>

        <div class="container-body clearfix">

                <div class="grid_12">
                    <div class="containerPlus { width:'100%', buttons:'m', skin:'lc' }" style="position:relative;">
                      <div class="no">
                        <div class="ne"><div class="n">Current Invoices</div></div>
                        <div class="o"><div class="e"><div class="c">
                          <div class="mbcontainercontent" id="current-invoices">

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

                                <table cellspacing="0" cellpadding="0" class="data-table-horizontal" width="100%">
                                    <tr>
                                        <th>Invoice Number</th>
                                        <th class="center">Date Sent</th>
                                        <th class="center">Date Due</th>
                                        <th class="center">Amount</th>
                                        <th class="center">Outstanding Amount</th>
                                        <th class="center last">Actions</th>
                                    </tr>
                                    <tr class="odd">
                                        <td>13131</td>
                                        <td>03/03/2011</td>
                                        <td class="center">03/03/2011</td>
                                        <td class="center">$412.99</td>
                                        <td class="center">$412.99</td>
                                        <td class="center last">
                                            <a href="#" class="action edit" rel="modalWindow">Pay</a>
                                            <a href="#" class="action print" rel="modalWindow">Print</a>
                                            <a href="#" class="action pdf" rel="modalWindow">PDF</a>
                                            <a href="#" class="action close">Cancel</a>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td>13131</td>
                                        <td>03/03/2011</td>
                                        <td class="center">03/03/2011</td>
                                        <td class="center">$412.99</td>
                                        <td class="center">$412.99</td>
                                        <td class="center last">
                                            <a href="#" class="action edit" rel="modalWindow">Pay</a>
                                            <a href="#" class="action print" rel="modalWindow">Print</a>
                                            <a href="#" class="action pdf" rel="modalWindow">PDF</a>
                                            <a href="#" class="action close">Cancel</a>
                                        </td>
                                    </tr>
                                    <tr class="odd greenbg">
                                        <td>13131</td>
                                        <td>03/03/2011</td>
                                        <td class="center">03/03/2011</td>
                                        <td class="center">$412.99</td>
                                        <td class="center">$412.99</td>
                                        <td class="center last">
                                            <a href="#" class="action edit" rel="modalWindow">Pay</a>
                                            <a href="#" class="action print" rel="modalWindow">Print</a>
                                            <a href="#" class="action pdf" rel="modalWindow">PDF</a>
                                            <a href="#" class="action close">Cancel</a>
                                        </td>
                                    </tr>
                                    <tr class="even redbg">
                                        <td>13131</td>
                                        <td>03/03/2011</td>
                                        <td class="center">03/03/2011</td>
                                        <td class="center">$412.99</td>
                                        <td class="center">$412.99</td>
                                        <td class="center last">
                                            <a href="#" class="action edit" rel="modalWindow">Pay</a>
                                            <a href="#" class="action print" rel="modalWindow">Print</a>
                                            <a href="#" class="action pdf" rel="modalWindow">PDF</a>
                                            <a href="#" class="action close">Cancel</a>
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
                        <div class="ne"><div class="n">Paid Invoices</div></div>
                        <div class="o"><div class="e"><div class="c">
                          <div class="mbcontainercontent" id="paid-invoices">

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

                                <table cellspacing="0" cellpadding="0" class="data-table-horizontal" width="100%">
                                    <tr>
                                        <th>Invoice Number</th>
                                        <th class="center">Date Sent</th>
                                        <th class="center">Date Due</th>
                                        <th class="center">Amount</th>
                                        <th class="center">Outstanding Amount</th>
                                        <th class="center last">Actions</th>
                                    </tr>
                                    <tr class="odd">
                                        <td>213131</td>
                                        <td>03/03/2011</td>
                                        <td class="center">03/03/2011</td>
                                        <td class="center">$412.99</td>
                                        <td class="center">$00.00</td>
                                        <td class="center last">
                                            <a href="#" class="action print" rel="modalWindow">Print</a>
                                            <a href="#" class="action pdf" rel="modalWindow">PDF</a>
                                            <a href="#" class="action close">Cancel</a>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td>13131121</td>
                                        <td>03/03/2011</td>
                                        <td class="center">03/03/2011</td>
                                        <td class="center">$412.99</td>
                                        <td class="center">$00.00</td>
                                        <td class="center last">
                                            <a href="#" class="action print" rel="modalWindow">Print</a>
                                            <a href="#" class="action pdf" rel="modalWindow">PDF</a>
                                            <a href="#" class="action close">Cancel</a>
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

                <div class="grid_6">
                    <div class="containerPlus { width:'100%', buttons:'m', skin:'lc' }" style="position:relative;">
                      <div class="no">
                        <div class="ne"><div class="n">Payment Method</div></div>
                        <div class="o"><div class="e"><div class="c">
                          <div class="mbcontainercontent" id="payment-method">

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non quam nibh. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam vitae purus nisl, non aliquam risus.</p>

                                <table cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td><input type="radio" name="paymethod" onclick="javascript:hide('paypal');ajaxshow('#cc');"/> Credit Card</td>
                                    <td style="width:20px;"></td>
                                    <td><input type="radio" name="paymethod" onclick="javascript:hide('cc');ajaxshow('#paypal');"/> PayPal</td>
                                  </tr>
                                </table>

                                <div class="separator"><!--  --></div>

                                <div id="cc">
                                <table cellspacing="0" cellpadding="0" class="simple-data-table" width="99%">
                                    <tr>
                                        <th colspan="2">Credit Cards</th>
                                        <th class="center">Name</th>
                                        <th class="center">Expiration</th>
                                        <th class="left last">Actions</th>
                                    </tr>
                                    <tr class="odd">
                                        <td><input type="radio" name="cc" /></td>
                                        <td><a href="#">XXXX-XXXX-XXXX-2312</a></td>
                                        <td class="center">Brian Miller</td>
                                        <td class="center">03/2013</td>
                                        <td class="left last">
                                            <a href="#" class="action edit">Make Default</a>
                                            <a href="#" class="action close">Remove</a>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td><input type="radio" name="cc" /></td>
                                        <td><a href="#">XXXX-XXXX-XXXX-2312</a></td>
                                        <td class="center">Card Name</td>
                                        <td class="center">03/2013</td>
                                        <td class="left last">
                                            <a href="#" class="action edit">Make Default</a>
                                            <a href="#" class="action close">Remove</a>
                                        </td>
                                    </tr>
                                </table>
                                <div class="actions clearfix">
                                    <a href="#" class="fr ml10 btn btn-action-small"><span>Make Default Payment Method</span></a>
                                    <a href="javascript:ajaxshow('#ccedit');" class="fr btn btn-action-small"><span>Add New Card</span></a>
                                </div>

                                <div id="ccedit" class="boxed" style="display:none;">
                                        <div class="fields">
                                           <label>Credit Card Type</label>
    									   <select name="cc_type" class="input"  style="width:255px;"><option>Select...</option></select>
                                        </div>

                                        <div class="fields">
                                           <label>Name on Card</label>
    									   <input type="text" name="cc_name" class="input" value="" style="width:240px;"/>
                                        </div>

                                        <div class="fields">
    									<label>Credit Card Number</label>
    									<input type="text" name="cc_number" value="" class="input" style="width:240px;"/>
                                        </div>

                                        <div class="fields">
    									<label class="fl">Expiration Date</label>
    									<select name="exp_month" class="input fl">
    										<option>01</option>
    										<option>02</option>
    										<option>03</option>
    										<option>04</option>
    										<option>05</option>
    										<option>06</option>
    										<option>07</option>
    										<option>08</option>
    										<option>09</option>
    										<option>10</option>
    										<option>11</option>
    										<option>12</option>
    									</select>
    									<select name="exp_year" class="input fl">
    										<option>2010</option>
    										<option>2011</option>
    										<option>2012</option>
    										<option>2013</option>
    										<option>2014</option>
    										<option>2015</option>
    										<option>2016</option>
    										<option>2017</option>
    										<option>2018</option>
    										<option>2019</option>
    										<option>2020</option>
    										<option>2021</option>
    										<option>2022</option>
    										<option>2023</option>
    									</select>
                                        <div class="clear"></div>
                                        </div>

                                        <div class="fields">
                                            <span style="position:relative; z-index:99999;"><img src="<?php echo $img_dir; ?>/misc/cvv21.png" style="position:absolute; z-index:99999; left:-20px;bottom:7px;z-index:999;border:0;display:none;cursor:pointer;" alt="CVV2 Code" onclick="$(this).fadeOut();" id="cvv2img"/></span>
      									    <label><a href="javascript:void(0);" onclick="$('#cvv2img').fadeIn().blur();" title="What is This">Security Code</a></label>
    									    <input type="text" name="security_code" style="width: 50px;" value="" class="input"/>
                                        </div>
                                        <div class="separator"><!--  --></div>
                                        <div class="clearfix">
                                            <a href="#" class="fr btn ml10 btn-action-small" onclick="ajaxhide('#ccedit')"><span>Save</span></a>
                                            <a href="#" class="fr btn ml10 btn-soft-action-small" onclick="ajaxhide('#ccedit')"><span>Cancel</span></a>
                                        </div>
                                </div>
                                </div>

                                <div id="paypal" style="display:none;">
                                    <table cellspacing="0" cellpadding="0" class="simple-data-table" width="99%">
                                        <tr>
                                            <th colspan="2">Paypal Account</th>
                                            <th class="center">Name</th>
                                            <th class="center">Lorem</th>
                                            <th class="left last">Actions</th>
                                        </tr>
                                        <tr class="odd">
                                            <td><input type="radio" name="cc" /></td>
                                            <td><a href="#">lorem@logem.com</a></td>
                                            <td class="center">The Name</td>
                                            <td class="center">Misum</td>
                                            <td class="left last">
                                                <a href="javascript:ajaxshow('#paypaledit');" class="action edit">Edit</a>
                                                <a href="#" class="action close">Remove</a>
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="actions clearfix">
                                      <a href="#" class="fr ml10 btn btn-action-small"><span>Make Default Payment Method</span></a>
                                      <a href="javascript:ajaxshow('#paypaledit');" class="fr btn btn-action-small"><span>Add Paypal</span></a>
                                    </div>

                                    <div id="paypaledit" class="boxed" style="display:none;">
                                        <table cellpadding="0" cellspacing="0" style="width:100%;">
                                          <tr>
                                            <td>Your Paypal ID:</td>
                                            <td><input name="ppid" style="width:94%;"/></td>
                                          </tr>
                                        </table>
                                        <div class="separator"><!--  --></div>
                                        <div class="clearfix">
                                            <a href="#" class="fr btn ml10 btn-action-small"><span>Save</span></a>
                                            <a href="#" class="fr btn ml10 btn-soft-action-small"><span>Cancel</span></a>
                                        </div>
                                    </div>

                                </div>


                          </div>
                        </div></div></div>
                        <div><div class="so"><div class="se"><div class="s"></div></div></div></div>
                      </div>
                    </div>
                </div>

                <div class="grid_6">
                    <div class="containerPlus { width:'100%', buttons:'m', skin:'lc' }" style="position:relative;">
                      <div class="no">
                        <div class="ne"><div class="n">API "Top Up"</div></div>
                        <div class="o"><div class="e"><div class="c">
                          <div class="mbcontainercontent" id="top-up">

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non quam nibh. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam vitae purus nisl, non aliquam risus.</p>


                                <h4>Top Up Status</h4>
                                <div class="separator"><!--  --></div>
                                <table cellspacing="0" cellpadding="0" class="simple-data-table top-up" width="99%">
                                        <tr>
                                            <td class="status" style="width:30%">
                                                <p class="center"><img src="<?php echo $img_dir; ?>/misc/reload.png" width="64" height="64" alt="" /></p>
                                                <div class="separator"><!--  --></div>
                                                <div class="active"><input type="radio" name="tpupstatus" onclick="show('topupenabled');hide('topupdisabled');"/>  Active</div>
                                                <div class="disabled"><input type="radio" name="tpupstatus" onclick="hide('topupenabled');show('topupdisabled');"/>  Disabled</div>
                                            </td>
                                            <td class="left last actions">
                                                <div id="topupenabled">
                                                 <p><b>We'll only charge Vivamus non quam nibh. Cum sociis natoque penatibus et magnis dis parturient montes.</b></p>

                                                    <div class="fields clearfix mb5">
                                                        <label class="fl" style="width:200px;">If Ballance falls Below:</label>
                                                        <select class="fl" style="width:200px;"><option>Select...</option></select>
                                                    </div>
                                                    <div class="fields clearfix mb5">
                                                        <label class="fl" style="width:200px;">If Ballance falls Below:</label>
                                                        <select class="fl" style="width:200px;"><option>Select...</option></select>
                                                    </div>
                                                    <div class="fields clearfix mb5">
                                                        <label class="fl" style="width:200px;">Using This Card:</label>
                                                        <select class="fl" style="width:200px;"><option>Select...</option></select>
                                                    </div>
                                                </div>
                                                <div id="topupdisabled" style="display:none;">
                                                    <p><b>Api Top Up is Disabled.</b></p>
                                                </div>
                                            </td>
                                        </tr>
                                </table>
                                <div class="actions clearfix mb5">
                                    <a href="#" class="fr btn btn-action-small"><span>Save</span></a>
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