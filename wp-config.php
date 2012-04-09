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
define('DB_NAME', 'wp_portfolio');

/** MySQL database username */
define('DB_USER', 'suren');

/** MySQL database password */
define('DB_PASSWORD', 'thunder1');

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
define('AUTH_KEY',         '$4xgiV;EqatNAxg+4PT}N9-{DhoAsVP;U3dhgsry]/M&:h6=/ikgy^q~]`RGq([<');
define('SECURE_AUTH_KEY',  'FZm<=iu{65xG*v-z$8vPFjQ[c$FieJ-tXvm~KKeNCsex3e=rBBeMnbP,?<h&o6Q;');
define('LOGGED_IN_KEY',    '+v^wWY&7k/X5.t,NegwMkYC0>#)$Ad/c~1|se?SpCHO#+}u?cENaWbaKwuFxe:bC');
define('NONCE_KEY',        '+S_U~]?:pCh`WEE1CZ>9^A#mi/+ >;+^Ox@a*c9=i5yW3*3wB&X60;~cY_x?-x4K');
define('AUTH_SALT',        '+M@=ef,>tdMeQcHh^ss$h)K=HRQP=eJ9&f0:z#_9guxr)),7V-{-Ye/,<H+ehil-');
define('SECURE_AUTH_SALT', 'g7oi)k-_3X*<kJ1oy1h)+_u1VQy4O1>D9Op6hg~|UVU.P]#R[@s-Mij@@LzBYP!]');
define('LOGGED_IN_SALT',   ')g?u(3v T+!faL@_w%!_W;LHd)rINqEG3l`*RUU~[yxY+x%fGi0@eoVm%}.QG,3+');
define('NONCE_SALT',       '+_?E+[VmaUH1Y,h}$pp(*XYJF?-N;EDZD~7K@+-03NmT{xrrFW|_%3P6aZim~y_,');

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
