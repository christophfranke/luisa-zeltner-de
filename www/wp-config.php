<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

if( file_exists('wp-config-local.php') )
{
	include('wp-config-local.php');
}
else
{
	define('DB_NAME', 'db12538803-luisa');
	define('DB_USER', 'db12538803-luisa');
	define('DB_PASSWORD', 'sahnetorte');
	define('DB_HOST', 'localhost');

	define('WP_SITEURL', 'http://luisazeltner.de');
}

define('WP_HOME', WP_SITEURL);


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
define('AUTH_KEY',         'pU-9kngAP|90j|<H;a Q+8S8+3t=6*Vj~J W1%t2b^k~q9y*pJn-X<c|8q(E7T%q');
define('SECURE_AUTH_KEY',  '+Th@}(ZclGiScD5S6ip|p!rz}77Q?-HZD|+}wV1h$s1bPVmb6z@5s3o,LA&.sp[ ');
define('LOGGED_IN_KEY',    '0&s|wZ[j!b(ip@>}{q-k-.<ChY^OSr XN^D3&H;Aw9)j|S2Q?&<JeO7:WM|._xsp');
define('NONCE_KEY',        'y`X8V5)+G NJSdfWi1fX}CYtoYZ9-iKeF[LXlK:B_=,a*=CBi4%7dpj%2c7%%gf%');
define('AUTH_SALT',        'CgnOY{v%!Bjzjr.6Wi]`I-&j}`EZGi@L{nx{WQZb@:=U=>o;{]2>;g|AV-mS+p#h');
define('SECURE_AUTH_SALT', '&OLyL0h[rk17*:|,WXr< d+|^5fHC8r0Yh4(DPhdfepO^>-]dQ 9lERNe|6|B,[f');
define('LOGGED_IN_SALT',   '#?RjNSGul.EZMv|bu$$8-C5]h!m0!Y/gm.:tub&:mNfusAPQJPL(~5mThcxo@]dV');
define('NONCE_SALT',       'IksNS}.0`xb&*hpmo(q@B]_sdUU2=WL#5jJmwcdJMbA|S-O|Ial9F_L5-|(HLEAb');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
