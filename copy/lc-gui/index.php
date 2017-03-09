<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php $page="login"; include_once("_include/modules/config.php"); ?>
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
            <h1>Login To Admin Panel</h1>
            <div class="welcome clearfix">
                <div class="icon-to-right"><img src="<?php echo $img_dir; ?>/icons/secure.png" alt="Secure"/></div>
                Nunc lobortis leo eget turpis dignissim nec luctus mi egestas
            </div>
        </div>
        <div class="login-content">
            <div class="notification success"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit varius nec feugiat sed, ultricies non sem.</span></div>
            <form action="dashboard.php">
            <table cellpadding="0" cellspacing="0" class="login-form">
              <tr>
                <td class="label">Username: <span class="required">*</span></td>
                <td><input name="username" /></td>
                <td>&nbsp;</td>
              </tr>
              <tr class="last">
                <td class="label">Password: <span class="required">*</span></td>
                <td><input name="password" type="password" /></td>
                <td>&nbsp;</td>
              </tr>
              <tr class="actions">
                <td colspan="2">Forgot your password? <a href="#" onclick="javascript:ajaxshow('#password');">Click here</a> to retrieve it.</td>
                <td class="label"><button class="btn btn-action fr" onclick="location.href='<?php echo $site_dir; ?>/dashboard.php'"><span>Login Now</span></button></td>
              </tr>
            </table>
            </form>
            <div id="password" class="password" style="display:none;">
                <form action="">
                  <table cellpadding="0" cellspacing="0" class="password-form">
                    <tr>
                      <td class="label">Your Email:</td>
                      <td><input name="username" /></td>
                      <td><button class="btn btn-soft-action-small fr" onclick="location.href='<?php echo $site_dir; ?>/dashboard.php'"><span>Submit</span></button></td>
                    </tr>
                  </table>
                </form>
            </div>
        </div>
     </div>
</div>

<?php include("_include/modules/footer.php"); ?>


</body>
</html>