     <div class="top container_12 clearfix">
        <div class="logo"><a href="<?php echo $site_dir; ?>/"><img src="<?php echo $img_dir; ?>/misc/logo.png" alt="License Cube" /></a></div>
        <div class="menu">
        <ul>
            <li <?php if( $page=="management" ) { ?>class="active"<?php } else { ?><?php } ?>><a href="<?php echo $site_dir; ?>/management.php"><img src="<?php echo $img_dir; ?>/misc/menu-management.png" alt="" /><br/>Management</a></li>
            <li <?php if( $page=="support" ) { ?>class="active"<?php } else { ?><?php } ?>><a href="<?php echo $site_dir; ?>/support.php"><img src="<?php echo $img_dir; ?>/misc/menu-support.png" alt="" /><br/>Support</a><div class="notify" onclick="location.href='#link'">3</div></li>
            <li <?php if( $page=="account" ) { ?>class="active"<?php } else { ?><?php } ?>><a href="<?php echo $site_dir; ?>/account.php"><img src="<?php echo $img_dir; ?>/misc/menu-account.png" alt="" /><br/>Account</a></li>
            <li <?php if( $page=="billing" ) { ?>class="active"<?php } else { ?><?php } ?>><a href="<?php echo $site_dir; ?>/billing.php"><img src="<?php echo $img_dir; ?>/misc/menu-billing.png" alt="" /><br/>Billing</a></li>
            <li <?php if( $page=="reports" ) { ?>class="active"<?php } else { ?><?php } ?>><a href="<?php echo $site_dir; ?>/reports.php"><img src="<?php echo $img_dir; ?>/misc/menu-reports.png" alt="" /><br/>Reports</a></li>
            <li <?php if( $page=="reviews" ) { ?>class="active"<?php } else { ?><?php } ?>><a href="<?php echo $site_dir; ?>/reviews.php"><img src="<?php echo $img_dir; ?>/misc/menu-reviews.png" alt="" /><br/>Reviews</a></li>
            <li <?php if( $page=="messages" ) { ?>class="active"<?php } else { ?><?php } ?>><a href="<?php echo $site_dir; ?>/messages.php"><img src="<?php echo $img_dir; ?>/misc/menu-messages.png" alt="" /><br/>Messages</a><div class="notify" onclick="location.href='#link'">2</div></li>
            <li <?php if( $page=="hosting" ) { ?>class="active"<?php } else { ?><?php } ?>><a href="<?php echo $site_dir; ?>/hosting.php"><img src="<?php echo $img_dir; ?>/misc/menu-hosting.png" alt="" /><br/>Hosting</a></li>
            <li <?php if( $page=="partners" ) { ?>class="active"<?php } else { ?><?php } ?>><a href="<?php echo $site_dir; ?>/partners.php"><img src="<?php echo $img_dir; ?>/misc/menu-partners.png" alt="" /><br/>Partners</a></li>
            <li <?php if( $page=="dashboard" ) { ?>class="last active"<?php } else { ?>class="last"<?php } ?>><a href="<?php echo $site_dir; ?>/dashboard.php"><img src="<?php echo $img_dir; ?>/misc/menu-home.png" alt="" /><br/>Home</a></li>
        </ul>
        </div>
     </div>