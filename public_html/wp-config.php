<?php


require_once(__DIR__ . "/wp-domains.php");


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
define('DB_NAME', 'dnovikov32_ell');

/** MySQL database username */
define('DB_USER', 'dnovikov32_ell');

/** MySQL database password */
define('DB_PASSWORD', 'waeserreak');

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
define('AUTH_KEY',         '$/|d2;)<a3=fV y,WB8p5SGz[<} @NHY~&22H{w$G.2&vE)bWBU3;grV6%V)Vt.p');
define('SECURE_AUTH_KEY',  'Z_<^HF|{T~6d<Z%E&ch=5Xp-I#&}4rh8oC|:%*u]A7#Y$@rKF&: q3/j(VvKh[a5');
define('LOGGED_IN_KEY',    '.R!2},xz|%I%p/51NRz&}te#~o]p0Q(Vb$zblU_*? l/XumhP(P~1c&m$[Ut.YX|');
define('NONCE_KEY',        'i(ZiUWG&fZ)>33pR,Pm:hJ_.$wr2NcwmTM(g5Wci#$gZ~[O-6mI0RLBl7$Wcdl^A');
define('AUTH_SALT',        'U*$e08CGXB77GKycR#@l;8v~|bKWZN#k;Wp/pt?]kq=4hDEKL<q sukcG)6f4?XW');
define('SECURE_AUTH_SALT', '3^_^O7tp=BlfA)zJLfB6y&1fxcpc:!=P.]8N:$l=ERq3BBzv1jJqSaS7f.>xGn7R');
define('LOGGED_IN_SALT',   '8f;a)p;u{ol&t>OzQvIfNt=v6:rI7ou_Nt^6c?@ jB#Se9f5ffS[ZXrf8>;B}NB[');
define('NONCE_SALT',       '<^Ra)~Ww/xce99;:[OU<oOA>:;Qk6mR}t*R=IT_ )=^// aK%MCv]ucNZKi<r7{}');

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
