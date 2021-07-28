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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'inthesouthmedia' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'K6Lzqfzm$z)<Lv_Lcx$y/ZEJX]?;33Oaii*hV>|^6<y[g5!u(^8gHRGIY3Hluz<>' );
define( 'SECURE_AUTH_KEY',  'y3@O%:(U,i0FS~fVx9@4tar&VlkfC!@o3I<k/C[HMmC y`5K%0T_>nCJRNSgMA!M' );
define( 'LOGGED_IN_KEY',    'ZzhYw9rUUUiNZp![EJ9?K{).cK3kusu=3(KAg;2ZYkRwB4!I/3dA@v7X7p}g)7YQ' );
define( 'NONCE_KEY',        '?QY1poy^z!dr7]H#R0~5w_wPKpZS3`J(qh_32VsdDI0B1TNetJRZFi6S#@jj-^Mf' );
define( 'AUTH_SALT',        'G&94v{t[eh?}[/PGb5WO[hf^df?TSLMT5hF+0=K?1+QajIOiw~mu`ar=WL3=PM|H' );
define( 'SECURE_AUTH_SALT', 'z-q [<[m4m|bK;Yes9(OPUCYx!{V2!!45KSPV1_<9.Y(~IPmqpW*C]!;puq`wL!Y' );
define( 'LOGGED_IN_SALT',   '%E!-yZMU4I7]BcXs&_ G`;c&70+pc6j%:H}CJCbXVU+T_&L?7[[o)[GKFy)!^<uo' );
define( 'NONCE_SALT',       '}d8vM+BlUO+bq%]$gN.mAap]P>g^r1=oeml)2WzHm 6w >Xwr{C]3B-:cM)H6[B?' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'itsm_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
