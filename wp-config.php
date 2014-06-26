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
define('DB_NAME', 'decodedcreative');

/** MySQL database username */
define('DB_USER', 'decodedcreative');

/** MySQL database password */
define('DB_PASSWORD', '9rtRHCn33fSGtQBu');

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
define('AUTH_KEY',         'tR$t==txF]--H((|&[}|k*NqB#(N`(#W7#{HZG3XV38dhCD{)]P*ek|!ebOi7LiF');
define('SECURE_AUTH_KEY',  '3FRLJ#uPf:L{+ZI$psdz:VOZ<xQP&]mqu{K_C?y+4cEk|yN8DlG+;J|dcA(Mp*ko');
define('LOGGED_IN_KEY',    '#2(ue2ZM@%Ke_3o,l7k+yi3N.YcU9?vwP?u>;!it6(Y`<1yf-pU.u!Ma~=C0t!x ');
define('NONCE_KEY',        '#T{5XF+9jkr8<|a}tcP43+oz#yqTm `ClL5aX-?GS| $UaUW+=Ii<?DjWcF)|DYd');
define('AUTH_SALT',        '<7E!LM~mI][CX]T-lNN$&~8(2`$2j#(PEcw^4`-+0idS~9m,O|UL`-`;ip7ZaKP^');
define('SECURE_AUTH_SALT', 'tw#`aX9^w3`!F Q]{WS6->eq%8!zKeGu,MylcI1:qz1+zJVtPTU]A;ti#FT^PIm)');
define('LOGGED_IN_SALT',   '{fj.Z9mv6~V]Y;${NBc-T 1Pq)LoqAV}o&k.ZbXn-7pnJ]-jX>[p2qa8UK(R]NCf');
define('NONCE_SALT',       'Vqt!0J8j9zIMUI%ko _gg&28@f8+bP@h+zS%d5RW`^R8I^+ksy#IFnd+!plXoqK^');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('FS_METHOD','direct');