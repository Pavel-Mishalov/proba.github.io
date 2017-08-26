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
define('DB_NAME', 'dnovikov32_print');

/** MySQL database username */
define('DB_USER', 'dnovikov32_print');

/** MySQL database password */
define('DB_PASSWORD', 'q1w2e3r4');

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
define('AUTH_KEY',         'U&~O!qxQ1w:w3kPl ?k A$5OR-WUjBmi[{nv2b)<l*R:NwITpa6RtkAt&_{12JY<');
define('SECURE_AUTH_KEY',  'G[*BsCQ<Hv@=9+Oy{SPSx6sGOeHW=,hnjzGOybOLyN[v^hejS@nW#o-l!6 mhTmd');
define('LOGGED_IN_KEY',    '{EGSD?YU2kRcv)rHF[,;/=0My3>VkSu];tJiD4WdRzJJ@PVC26dR?MgwAWvg,4QR');
define('NONCE_KEY',        ']2Ajt_wF[AapC0ku0uQFAZZgR5?YTW{LtTxg}c]0<6&(.i DJ9BmFvEH %7Ud>#M');
define('AUTH_SALT',        '0.) oq~WBRBD9t!PIUj1q+b&I}P9vOVK2&N[2|%LLP$AE._iJjunbSiC1Z}$`f`k');
define('SECURE_AUTH_SALT', 'aV]e]]$B+UTsa2n;4S`SUKTmAvP=t*x=5@3a;G+&+MIrHwoOuZLUW$;hE[&/R6=u');
define('LOGGED_IN_SALT',   'T3dx+[p?QK8 9<&{%4MB;:bql,[D4?LAYAjDVp&b>TCh}j|_w]<t@$&7mo9&l[0R');
define('NONCE_SALT',       '?Taz EvWWP+&jiq,JZ[NUh [h(=Y7C=TR5e5?-G):(WD{F_qmuDo),19z{n7gFOY');

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
