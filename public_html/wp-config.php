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
define('AUTH_KEY',         'LpJpF>;p_!e]coY 1l4?e,4f+V3|:qeC85lsm8De9JWHH9pUF+asm~4Jr?[VBhja');
define('SECURE_AUTH_KEY',  'bN7S~WN H(]6h!C)k=%f!59YMS,8y.$t`tak&e.Fr %8f[;Emvh-TC7]{s4ZaVy/');
define('LOGGED_IN_KEY',    '=Wt_:[:8O6qbD4:9vM]%:!P]TON|{8kq:96e`A&5I(`e@skJ,tr{F%Ou?wdC-)X7');
define('NONCE_KEY',        'AZom91`=Y5%O7FGlX(dY)A,,m@BS^yJq<nZ}r/_c%RY]mRz&,b#(N*?F;]13$7qp');
define('AUTH_SALT',        '2%K/|c[+ncGv<rMP^>GT(mu#fUg%FmY/V[*k4!^M~ISx<1_9xvS.6z|yyT{~{m}=');
define('SECURE_AUTH_SALT', 'N%J|FpE)NDQvEO4uc Jdh7Pbey*,w:/=wB/f!]@eh1-1E:muO< xD|PpyU)r,?LY');
define('LOGGED_IN_SALT',   'An~e! #.axS|,]O4Q3w^a:axD|tyE#3 nX;x~A9K9#SsEq:9-SOD/j2,)m5q0ek&');
define('NONCE_SALT',       'tGXcs]dPPdPxGhf2.:UN&@rYc<3e<#PZqncgxa&#Q88:1m,Q1|h/.bJiIfdP:V.y');

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
