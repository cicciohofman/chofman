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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'chofhof8_chofman_wp');

/** MySQL database username */
define('DB_USER', 'chofhof8_chofman');

/** MySQL database password */
define('DB_PASSWORD', 'Hofman#1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '@Y{]eqa88|5u7Pj*$-y>rq{a~OZM.T-]~/jEGZ`nC-F4aA:v/#<B mRjmv(DAbf|');
define('SECURE_AUTH_KEY',  '@N9HHEb+>,*W3opz]^2CdJ]VCItIMMIE47H7pWc64PV0}QP}z|rgb`e;,3us^]vD');
define('LOGGED_IN_KEY',    'J$BsHlK<R7.vk2;^/m[R)n?t}l?NUXjE#;ORSM(K=Qk]UdGL AF@V5SmluR8it97');
define('NONCE_KEY',        'wf|78KYz^/e2JBQ*%=.#=3$IR87?nr{)]|.z@hf5Tw.e,tPYi,8AWzdqo1@b?anM');
define('AUTH_SALT',        'P7KZ!Wyvj+ZC}S?lyVWi<+pr_,ZQ0?PE,FcJ?j~[m=o_fuJ`?X+TY;ci<H!qfP3c');
define('SECURE_AUTH_SALT', 'R9hG:-;Fl.=V]C}emzsc3Uz2jE]9OXN]RB6J=03o;7pp;OQ^gbrY>|]fz)MZ^/@0');
define('LOGGED_IN_SALT',   '&=wn#gEWc|_w.$a1.t+?mA==/T . =CW,}@8}h-xN#7;%h4rsk#Fd5<1,?8Z}![y');
define('NONCE_SALT',       '*kMp_Q!Aex;&VU&30E,k3i.LV?QG9~_2-1<_R$&ie|reb,bmH{Ewt&RuV?D,/gkk');

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
