<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'licensec_kbwp');

/** MySQL database username */
define('DB_USER', 'licensec_kbwp');

/** MySQL database password */
define('DB_PASSWORD', 'TN)^h{VkeRDa');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'W81(C>D,2} <=^~6aEMTKywx!<E{!c&HDz*nW|^u1Neh_]8=u-}4r)qp-}n$L9zZ');
define('SECURE_AUTH_KEY',  '#id.u~GA.Fnw.#4JW&]Xbg.o77RApNem!W*XX0vr1kb?1Kr6}6y7[G?cc%I./L0w');
define('LOGGED_IN_KEY',    'eg(h~^bU-#+=D<ao4Q#,>Rb5!>a+8PB--J!M XK#of1Keh$|<oNLe(o}@=BLsF>3');
define('NONCE_KEY',        '|jpNq-1zEeEX%Y*(s5o_nuk6.NuYKZ-VC!vqx-2xaF!u|v6o!H4{KtM/qg-(O4Xh');
define('AUTH_SALT',        'SIXHatNXw7*Sq|>dp>r(^B7PX0{nMWi7jTpILwP~sBFb?`*Nu]-:lCQR[<T>-CG+');
define('SECURE_AUTH_SALT', '2Ru{PO|TT#0DA+uQY:|O<m.+%ac0L4ru=>5$=2[+9)e&Svkd#>O+ErUhZ8Df>9`$');
define('LOGGED_IN_SALT',   'siz|k%s7#2!UtLBvU:-lrq(%p6qR=suLRwwdS|,>)xJMUN8JjxV}eX4VL[za ~~S');
define('NONCE_SALT',       'ZRo{~pQVf29~/iMLRN-)p:7y55y,--7-O<Z:;^[{#854pR%c!srwS4w;gqk7bjxL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
