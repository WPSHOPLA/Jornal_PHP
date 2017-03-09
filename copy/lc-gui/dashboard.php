<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php $page="dashboard"; include_once("_include/modules/config.php"); ?>
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

    <script language="javascript" type="text/javascript" src="<?php echo $js_dir; ?>/plugins/jqplot.barRenderer.js"></script>
    <script language="javascript" type="text/javascript" src="<?php echo $js_dir; ?>/plugins/jqplot.categoryAxisRenderer.js"></script>

</head>
<body>

<div class="foundation-top">

     <?php include("_include/modules/top.php"); ?>

     <div class="container container_12 box-shadow clearfix">

        <div class="container-top clearfix">
            <h1>Account ID: 87611</h1>
            <div class="welcome clearfix">
                <div class="user-avatar"><img src="<?php echo $img_dir; ?>/misc/user200.png" width="37" height="37" alt="" /></div>
                <div class="user-data">Welcome John Doe, <br/> <a href="#">My Account</a>  &nbsp;I&nbsp;  <a href="#">Some Link</a> &nbsp;I&nbsp;   <a href="#">Log Out</a></div>
            </div>
        </div>

        <div class="container-body clearfix">

                <div class="grid_4">
                    <div class="containerPlus { width:'100%', height:'360', buttons:'m', skin:'lc' }" style="position:relative;">
                      <div class="no">
                        <div class="ne"><div class="n">Left content</div></div>
                        <div class="o"><div class="e"><div class="c">
                          <div class="mbcontainercontent">

                            <script type="text/javascript" language="javascript">

                              $(document).ready(function(){
                                  $.jqplot.config.enablePlugins = true;
                                     dline1 = [[4,'Nissan'],[6,'Porche'],[2,'Acura'],[5,'Aston Martin'],[6,'Rolls Royce']];

                                     plot1c = $.jqplot('chart1', [dline1], {
                                        title:'Default Colors',
                                        seriesColors: [ "#98bcf9", "#8bc73a", "#fa7035", "#e7c52c", "#d94b1b"],
                                         seriesDefaults:{
                                           renderer:$.jqplot.BarRenderer,
                                           rendererOptions:{
                                             barWidth:15,
                                             barPadding:-15,
                                             barMargin:15,
                                             barDirection: 'horizontal',
                                             varyBarColor: true
                                           },
                                           shadow:false
                                         },
                                         legend: {show:false},
                                         axes:{
                                             xaxis:{min:0, tickOptions: {formatString: '%.0f',showGridLine: false}},
                                             yaxis:{show: true, renderer: $.jqplot.CategoryAxisRenderer,
                                                        tickOptions: {show: true, showLabel: true},
                                                        showTicks: true}
                                             },
                                         grid: {
                                              borderWidth: 0.1,
                                              shadow: false
                                             }

                                     });

                              });

                              </script>
                              <div id="chart1" style="height:95%; width:97%; font-family:Arial;"></div>

                          </div>
                        </div></div></div>
                        <div><div class="so"><div class="se"><div class="s"></div></div></div></div>
                      </div>
                    </div>
                </div>

                <div class="grid_8">
                    <div class="containerPlus { width:'100%', height:'360', buttons:'m', skin:'lc' }" style="position:relative;">
                      <div class="no">
                        <div class="ne"><div class="n">Right Content</div></div>
                        <div class="o"><div class="e"><div class="c">
                          <div class="mbcontainercontent">

                              <script type="text/javascript">
                               $(document).ready(function(){
                                 $.jqplot.config.enablePlugins = true;
                                 line1 = [4, 2, 9, 16];
                                 line2 = [3, 7, 6.25, 3.125];
                                 line3 = [3, 7, 6.25, 3.125];
                                 plot3c = $.jqplot('chart-sales', [line1, line2, line3], {
                                     legend: {
                                         show: true,
                                         location: 'nw'
                                     },
                                     title: 'Unit Sales: Acme Decoy Division',
                                     seriesColors: [ "#98bcf9", "#8bc73a", "#fa7035", "#a72525", "#d94b1b"],
                                     seriesDefaults: {
                                         shadow: false,   // show shadow or not
                                         renderer: $.jqplot.BarRenderer,
                                         rendererOptions: {
                                             barPadding: 6,
                                             barMargin: 20
                                         }
                                     },
                                     series: [{
                                         label: '1st Qtr'
                                     },
                                     {
                                         label: '2st Qtr'
                                     },
                                     {
                                         label: '3rd Qtr'
                                     }],
                                     axes: {
                                         xaxis: {
                                             renderer: $.jqplot.CategoryAxisRenderer,
                                             ticks: ['Q1', 'Q2', 'Q3', 'Q4']
                                         },
                                         yaxis: {min: 0, max: 20, numberTicks:5}
                                     },
                                     grid: {
                                      borderWidth: 0.1,
                                      shadow: false
                                     }
                                 });
                              });
                              </script>
                              <div id="chart-sales" style="height:95%; width:100%; font-family:Arial;"></div>

                          </div>
                        </div></div></div>
                        <div><div class="so"><div class="se"><div class="s"></div></div></div></div>
                      </div>
                    </div>
                </div>

                <div class="clear"></div>

                <div class="grid_12">
                    <div class="containerPlus { width:'100%',  buttons:'m', skin:'lc' }" style="position:relative;">
                      <div class="no">
                        <div class="ne"><div class="n">License Overview</div></div>
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
                                        <table cellpadding="0" cellspacing="0">
                                          <tr>
                                            <td>Some Filter</td>
                                            <td><select><option>Filter #1</option><option>Filter #2</option></select></td>
                                            <td>entries</td>
                                          </tr>
                                        </table>
                                    </div>
                                    <div class="fr item last">
                                        <table cellpadding="0" cellspacing="0">
                                          <tr>
                                            <td>Search</td>
                                            <td><input name="search" class="search" /></td>
                                          </tr>
                                        </table>
                                    </div>
                              </div>

                                <table cellspacing="0" cellpadding="0" class="data-table-vertical" width="100%">
                                    <caption>Example Data Table Vertical Odd/Even</caption>
                                    <colgroup>
                                        <col class="odd" />
                                        <col class="even" />
                                        <col class="odd" />
                                        <col class="even" />
                                        <col class="odd" />
                                        <col class="even" />
                                        <col class="odd" />
                                        <col class="even" />
                                    </colgroup>
                                    <tr>
                                        <th class="odd first">License Name</th>
                                        <th class="center even">Domain Name</th>
                                        <th class="center odd">IP Address</th>
                                        <th class="center even">Current Status</th>
                                        <th class="center odd">Renewal Date</th>
                                        <th class="center even">Operating System</th>
                                        <th class="center odd">Price</th>
                                        <th class="center even last">Actions</th>
                                    </tr>
                                    <tr>
                                        <td class="first"><a href="#">Mauris non arcu magna</a></td>
                                        <td class="center"><a href="#">Domain.Com</a></td>
                                        <td class="center">192.168.2.1</td>
                                        <td class="center">Active</td>
                                        <td class="center">03/09/2011</td>
                                        <td class="center"><img src="<?php echo $img_dir; ?>/icons/win.png" width="20" height="18" alt="" /> Windows</td>
                                        <td class="center"><b>$219.99</b></td>
                                        <td class="center last">
                                            <a href="#" class="action deactivate" rel="modalWindow">Deactivate</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="first"><a href="#">Etiam nibh mauris gilla consectetur</a></td>
                                        <td class="center"><a href="#">Domain.Com</a></td>
                                        <td class="center">192.168.1.1</td>
                                        <td class="center">Active</td>
                                        <td class="center">03/09/2011</td>
                                        <td class="center"><img src="<?php echo $img_dir; ?>/icons/linux.png" width="20" height="18" alt="" /> Linux</td>
                                        <td class="center"><b>$219.99</b></td>
                                        <td class="center last">
                                            <a href="#" class="action deactivate" rel="modalWindow">Deactivate</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="first"><a href="#">Mauris non arcu magna</a></td>
                                        <td class="center"><a href="#">Domain.Com</a></td>
                                        <td class="center">192.168.2.1</td>
                                        <td class="center">Active</td>
                                        <td class="center">03/09/2011</td>
                                        <td class="center"><img src="<?php echo $img_dir; ?>/icons/mac.png" width="20" height="18" alt="" /> Mac</td>
                                        <td class="center"><b>$219.99</b></td>
                                        <td class="center last">
                                            <a href="#" class="action deactivate" rel="modalWindow">Deactivate</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="first"><a href="#">Etiam nibh mauris gilla consectetur</a></td>
                                        <td class="center"><a href="#">Domain.Com</a></td>
                                        <td class="center">192.168.1.1</td>
                                        <td class="center">Active</td>
                                        <td class="center">03/09/2011</td>
                                        <td class="center"><img src="<?php echo $img_dir; ?>/icons/linux.png" width="20" height="18" alt="" /> Linux</td>
                                        <td class="center"><b>$219.99</b></td>
                                        <td class="center last">
                                            <a href="#" class="action deactivate" rel="modalWindow">Deactivate</a>
                                        </td>
                                    </tr>
                                </table>

                                <table cellspacing="0" cellpadding="0" class="data-table-horizontal" width="100%">
                                    <caption>Example Data Table Horizontal Odd/Even</caption>
                                    <tr>
                                        <th>License Name</th>
                                        <th class="center">Domain Name</th>
                                        <th class="center">IP Address</th>
                                        <th class="center">Current Status</th>
                                        <th class="center">Renewal Date</th>
                                        <th class="center">Operating System</th>
                                        <th class="center">Price</th>
                                        <th class="center last">Actions</th>
                                    </tr>
                                    <tr class="odd parent">
                                        <td><a href="#">Mauris non arcu magna</a></td>
                                        <td class="center"><a href="#">Domain.Com</a></td>
                                        <td class="center">192.168.2.1</td>
                                        <td class="center">Active</td>
                                        <td class="center">03/09/2011</td>
                                        <td class="center"><img src="<?php echo $img_dir; ?>/icons/linux.png" width="20" height="18" alt="" /> Linux</td>
                                        <td class="center"><b>$219.99</b></td>
                                        <td class="center last">
                                            <a href="#" class="action deactivate" rel="modalWindow">Deactivate</a>
                                        </td>
                                    </tr>
                                    <tr class="odd child">
                                        <td colspan="6" class="first">Additional Language Pack </td>
                                        <td class="center">$19.99</td>
                                        <td class="center last">
                                            <a href="#" class="action deactivate" rel="modalWindow">Deactivate</a>
                                        </td>
                                    </tr>
                                    <tr class="odd child">
                                        <td colspan="6" class="first">Power Pack Addon</td>
                                        <td class="center">$19.99</td>
                                        <td class="center last">
                                            <a href="#" class="action deactivate" rel="modalWindow">Deactivate</a>
                                        </td>
                                    </tr>
                                    <tr class="even parent">
                                        <td><a href="#">Etiam nibh mauris gilla consectetur</a></td>
                                        <td class="center"><a href="#">Domain.Com</a></td>
                                        <td class="center">192.168.1.1</td>
                                        <td class="center">Active</td>
                                        <td class="center">03/09/2011</td>
                                        <td class="center"><img src="<?php echo $img_dir; ?>/icons/win.png" width="20" height="18" alt="" /> Windows</td>
                                        <td class="center"><b>$219.99</b></td>
                                        <td class="center last">
                                            <a href="#" class="action deactivate" rel="modalWindow">Deactivate</a>
                                        </td>
                                    </tr>
                                    <tr class="even child">
                                        <td colspan="6" class="first">Additional Language Pack </td>
                                        <td class="center">$19.99</td>
                                        <td class="center last">
                                            <a href="#" class="action deactivate" rel="modalWindow">Deactivate</a>
                                        </td>
                                    </tr>
                                    <tr class="even child">
                                        <td colspan="6" class="first">Power Pack Addon</td>
                                        <td class="center">$19.99</td>
                                        <td class="center last">
                                            <a href="#" class="action deactivate" rel="modalWindow">Deactivate</a>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td><a href="#">Mauris non arcu magna</a></td>
                                        <td class="center"><a href="#">Domain.Com</a></td>
                                        <td class="center">192.168.2.1</td>
                                        <td class="center">Active</td>
                                        <td class="center">03/09/2011</td>
                                        <td class="center"><img src="<?php echo $img_dir; ?>/icons/mac.png" width="20" height="18" alt="" /> Mac</td>
                                        <td class="center"><b>$219.99</b></td>
                                        <td class="center last">
                                            <a href="#" class="action deactivate" rel="modalWindow">Deactivate</a>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td><a href="#">Etiam nibh mauris gilla consectetur</a></td>
                                        <td class="center"><a href="#">Domain.Com</a></td>
                                        <td class="center">192.168.1.1</td>
                                        <td class="center">Active</td>
                                        <td class="center">03/09/2011</td>
                                        <td class="center"><img src="<?php echo $img_dir; ?>/icons/linux.png" width="20" height="18" alt="" /> Linux</td>
                                        <td class="center"><b>$219.99</b></td>
                                        <td class="center last">
                                            <a href="#" class="action deactivate" rel="modalWindow">Deactivate</a>
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
                    <div class="containerPlus { width:'100%', height:'320',  buttons:'m', skin:'lc' }" style="position:relative;">
                      <div class="no">
                        <div class="ne"><div class="n">Quick Support Overview</div></div>
                        <div class="o"><div class="e"><div class="c">
                          <div class="mbcontainercontent">

                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cras metus. Maecenas justo elit, lacinia sit amet, cursus ut, sagittis sed, eros.</p>

                                <table cellspacing="0" cellpadding="0" class="data-table-horizontal" width="100%">
                                    <!--<caption>Example Data Table Horizontal Odd/Even</caption>-->
                                    <tr>
                                        <th>Subject</th>
                                        <th class="center">Ticket ID</th>
                                        <th class="center">Last Reply</th>
                                        <th class="center">Status</th>
                                        <th class="center">Actions</th>
                                    </tr>
                                    <tr class="odd">
                                        <td><a href="#">Mauris non arcu magna</a></td>
                                        <td class="center"><a href="#">21321</a></td>
                                        <td class="center">02/09/2011</td>
                                        <td class="center">Active</td>
                                        <td class="center last">
                                            <a href="#" class="action update" rel="modalWindow">Update</a>
                                            <a href="#" class="action delete" rel="modalWindow">Close</a>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td><a href="#">Mauris non arcu magna</a></td>
                                        <td class="center"><a href="#">21321</a></td>
                                        <td class="center">02/09/2011</td>
                                        <td class="center">Active</td>
                                        <td class="center last">
                                            <a href="#" class="action update" rel="modalWindow">Update</a>
                                            <a href="#" class="action delete" rel="modalWindow">Close</a>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td><a href="#">Mauris non arcu magna</a></td>
                                        <td class="center"><a href="#">21321</a></td>
                                        <td class="center">02/09/2011</td>
                                        <td class="center">Active</td>
                                        <td class="center last">
                                            <a href="#" class="action update" rel="modalWindow">Update</a>
                                            <a href="#" class="action delete" rel="modalWindow">Close</a>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td><a href="#">Mauris non arcu magna</a></td>
                                        <td class="center"><a href="#">21321</a></td>
                                        <td class="center">02/09/2011</td>
                                        <td class="center">Active</td>
                                        <td class="center last">
                                            <a href="#" class="action update" rel="modalWindow">Update</a>
                                            <a href="#" class="action delete" rel="modalWindow">Close</a>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td><a href="#">Mauris non arcu magna</a></td>
                                        <td class="center"><a href="#">21321</a></td>
                                        <td class="center">02/09/2011</td>
                                        <td class="center">Active</td>
                                        <td class="center last">
                                            <a href="#" class="action update" rel="modalWindow">Update</a>
                                            <a href="#" class="action delete" rel="modalWindow">Close</a>
                                        </td>
                                    </tr>
                                </table>

                          </div>
                        </div></div></div>
                        <div><div class="so"><div class="se"><div class="s"></div></div></div></div>
                      </div>
                    </div>
                </div>


                <div class="grid_6">
                    <div class="containerPlus { width:'100%', height:'320', buttons:'m', skin:'lc' }" style="position:relative;">
                      <div class="no">
                        <div class="ne"><div class="n">Blog Feed</div></div>
                        <div class="o"><div class="e"><div class="c">
                          <div class="mbcontainercontent">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cras metus. Maecenas justo elit, lacinia sit amet, cursus ut, sagittis sed, eros. </p>
                            <ul class="border-list blog-feed">
                              <li><span class="date">02/03/2011</span><b>Facilisis eu dapibus et urna lipsum...</b>&nbsp;<a href="#" class="more">More</a></li>
                              <li><span class="date">02/03/2011</span><b>Proin ante diam lobortis at tempus...</b>&nbsp;<a href="#" class="more">More</a></li>
                              <li><span class="date">02/03/2011</span><b>Phasellus mi ligula accumsan...</b>&nbsp;<a href="#" class="more">More</a></li>
                              <li><span class="date">02/03/2011</span><b>Facilisis eu dapibus et urna lipsum...</b>&nbsp;<a href="#" class="more">More</a></li>
                              <li><span class="date">02/03/2011</span><b>Proin ante diam lobortis at tempus...</b>&nbsp;<a href="#" class="more">More</a></li>
                              <li><span class="date">02/03/2011</span><b>Pellentesque mauris arcu commodo porttitor...</b>&nbsp;<a href="#" class="more">More</a></li>
                              <li class="last"><span class="date">02/03/2011</span><b>Accumsan quis sollicitudin in bibendum turpis...</b>&nbsp;<a href="#" class="more">More</a></li>
                            </ul>
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