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

/** MySQL settings - You can get this info from your web host **/
/** The name of the database for WordPress */
define('DB_NAME', 'bddwp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'db' . ':' . '3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Disable WordPress file editor */
define( 'DISALLOW_FILE_EDIT', true );

define( 'COOKIEHASH', md5('root' . 'secure cookies' .'root' ) );	// Cookies hardening

define( 'WP_MEMORY_LIMIT', '256M' );

// Disable OP Cache mu-plugin feature
define('HIDE_CACHE_CLEAR',false);

// Disable SSO mu-plugin feature
define('HIDE_SSO_LINK',false);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'uU_;%ho*D+ym1>#)qTy6J:%:gtTs/K1{[f=~h1&`y0x:K(&L>D}$+d3BJO.cfOsP');
define('SECURE_AUTH_KEY',  'T.VI10(#6DxW}JXlAIUX`33hn)zG!5js8NP8vF39kQPsm@NO3K@^4H:e~^q_NVZk');
define('LOGGED_IN_KEY',    'K<(`3T/2Ba!3oH1tm*IQ#rq2@O{rdqj<U-~#d)YvB]f!MWX>WS7|a{dXb=Z3iGr6');
define('NONCE_KEY',        'j.E,[VqpcZIr>jmE{T>k|?,bWf7Vu3.jsEbTXmhjMezm6hmg(,i;#R^bv%%6F7&C');
define('AUTH_SALT',        '%9f7]lVKe`nTq8)xhhICkXol$#^LVTRGwRHZxmh?-WNyl*f;G%y$5{#c1qn]Sh`)');
define('SECURE_AUTH_SALT', '{j=)/x5 9(JvY N?`&oSCi}n!XC|3-}HE;%soDGv{,|_nO0a2l7@WI0 =+xptRzn');
define('LOGGED_IN_SALT',   '2@[ppS*hOGRYiqw[t;U6NnPSCFX=F>R4+Zwe$NELW=8^NezYxG._BSz/x0B[Q2Z&');
define('NONCE_SALT',       'goKP.qndj=+^w/f.6XThogR>x|C/zW({A#$V]{5Ts>c`pe[Y%p-d,&-iRpDbFls<');

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
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG_DISPLAY', true);
define('WP_DEBUG_LOG', true);
$sapi_type = php_sapi_name();
if ( $sapi_type == 'cli' ) {
    define( 'WP_DEBUG', false );
    error_reporting(0);
    @ini_set('display_errors', 0);
} else {
define('WP_DEBUG', true);
}
// @ini_set('log_errors', 'On');

define( 'WPMU_PLUGIN_DIR', '/mu-plugin' );
define( 'DOCKET_CACHE_CONTENT_PATH', '/tmp/docket_cache' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/** change permisssions for plugin installation */
define("FS_METHOD","direct");
