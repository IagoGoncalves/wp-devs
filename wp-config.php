<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'eKD?=dw0z@bu]q[7>Y`:U_&VsMCD|#*aN.6&-fD6)(+;cy,I*YcMYm>K?PZ]!KC)' );
define( 'SECURE_AUTH_KEY',   'ignz!@Rjw<!j+SKC!Je1T+PX7koyY}G{s,%BhcwM9K*xfj|~Q%HEdN=dX7RroXB{' );
define( 'LOGGED_IN_KEY',     '%:#oSyQcz<~5])* Y0.|)k:8L[q<0WuKFn5i1L|0(EF,csN`5uQBO2BG.:^eO}{A' );
define( 'NONCE_KEY',         ']-qrBBu4yXA~xh|R>,d1QS&(Qan|>D3.F?$y=Z_<H0;^rpa0Z<r:V6RQ#LzV0d#e' );
define( 'AUTH_SALT',         '1@6||#ks=}BiH-}WIY=>_sN2_fb`%W.m 3D(9ZbjS7TaGJ(Na[5IQTzbNmK/5N]y' );
define( 'SECURE_AUTH_SALT',  'M:+,ds0+*FDHn.[T cXZ_9_|R_Wi;rl-B;##%KQ Q&R^H^t[aJIAPfEVZ8cHpEFH' );
define( 'LOGGED_IN_SALT',    'C/inrZ=f<AAhExE1S8eFh=k|t;W+b^qdT,E}9R&OxH&!_ZIq/(sC)7ZwS(|1};]n' );
define( 'NONCE_SALT',        'JB;&m0YT%;V#ljoN[VkP!dOGs])?X:f8}>IC0VFE P[lOa1,# .tdeM<gxkT8-8a' );
define( 'WP_CACHE_KEY_SALT', '-#<:(23eN/aiZHV?g3^xITB[*36[ W-vcxXb:a|RUAr*5*:w|-0ksuY+v@&5@&!7' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', true );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
