<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php $page="404"; include_once("_include/modules/config.php"); ?>
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
     <div class="login-top clearfix">
        <h1><img src="<?php echo $img_dir; ?>/misc/logo.png" alt="License Cube" /></h1>
     </div>
     <div class="login box-shadow">
        <div class="login-welcome clearfix">
            <h1>404: Oops, we're sorry...</h1>
            <div class="welcome clearfix">
                <div class="icon-to-right"><img src="<?php echo $img_dir; ?>/icons/404.png" alt="404"/></div>
                Nunc lobortis leo eget turpis dignissim nec luctus mi egestas
            </div>
        </div>
        <div class="login-content">
            <form action="">
            <div align="center" class="mb20">
            <table cellpadding="0" cellspacing="0" width="80%">
              <tr>
                <td class="label" style="padding-top:5px;"><h3 class="mb0 mt0">Search:</h3></td>
                <td style="width:10px;"></td>
                <td><input name="username" style="width:330px; height:17px;"/></td>
                <td><button class="btn btn-action fr" onclick="location.href='#link'"><span>Search</span></button></td>
              </tr>
            </table>
            </div>
            </form>
            <div class="separator mb20"><!--  --></div>

            <table cellpadding="0" cellspacing="0" width="100%" class="mb20">
              <tr>
                <td>
                  <h4>Rctus mi egestas</h4>
                  <ul>
                      <li><a href="#">Obortis leo eget turpis dignissim</a></li>
                      <li><a href="#">Feo eget turpis dignissim</a></li>
                      <li><a href="#">Eget turpis dignissim</a></li>
                      <li><a href="#">Obortis leo eget turpis dignissim</a></li>
                      <li><a href="#">Feo eget turpis dignissim</a></li>
                      <li><a href="#">Eget turpis dignissim</a></li>
                  </ul>
                </td>
                <td>
                  <h4>Rctus mi egestas</h4>
                  <ul>
                      <li><a href="#">Obortis leo eget turpis dignissim</a></li>
                      <li><a href="#">Feo eget turpis dignissim</a></li>
                      <li><a href="#">Eget turpis dignissim</a></li>
                      <li><a href="#">Obortis leo eget turpis dignissim</a></li>
                      <li><a href="#">Feo eget turpis dignissim</a></li>
                      <li><a href="#">Eget turpis dignissim</a></li>
                  </ul>
                </td>
                <td>
                  <h4>Rctus mi egestas</h4>
                  <ul>
                      <li><a href="#">Obortis leo eget turpis dignissim</a></li>
                      <li><a href="#">Feo eget turpis dignissim</a></li>
                      <li><a href="#">Eget turpis dignissim</a></li>
                      <li><a href="#">Obortis leo eget turpis dignissim</a></li>
                      <li><a href="#">Feo eget turpis dignissim</a></li>
                      <li><a href="#">Eget turpis dignissim</a></li>
                  </ul>
                </td>
              </tr>
            </table>


        </div>
     </div>
</div>

<?php include("_include/modules/footer.php"); ?>


</body>
</html>