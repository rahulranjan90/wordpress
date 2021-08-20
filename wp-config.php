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
define( 'DB_NAME', 'sitecheck' );

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
define( 'AUTH_KEY',         'G#]n$rg=--Yh#]0+:H},4TV~kaAAn86HTI5@G=~QZ#RxwBm^M2e3h69^Q;+Ua_T0' );
define( 'SECURE_AUTH_KEY',  '08wrzPm4n{7S>d?c=(H<mp9=led5?X/(%Z4jC4EF}Nw4.}QJS|pLSy)vG?|n`]p&' );
define( 'LOGGED_IN_KEY',    'F#PKsv)}WwU~w3}_~D9kmb%7uQckcP1P|t8!r +)@{`;Ie4U|g3/f74y=4u+lX|X' );
define( 'NONCE_KEY',        'Ul5:*/Z,MbZr&$^}k>yKV~v] v-p0&.hN>APs]E9~kN4l6Vvbm~33Wan-f--HJTB' );
define( 'AUTH_SALT',        '[Ts]l%*^>zBL2r[xxVGDCI--Yq uFn)}ZbAzy3)bT?TsLONsHg<}H@`%)KmR1BZd' );
define( 'SECURE_AUTH_SALT', '/Cz9CMIZ+/%!eo%jM V5u_PyH{zjuM*yZajka]19kkn{zN}%I(N^EL mHao#ehW2' );
define( 'LOGGED_IN_SALT',   'h)`o&!S(bCXK/5pxlGF_z0FZ .ED]cN;m?<wL6XifNIAU)7bsP 4dlRd9{ib6(&-' );
define( 'NONCE_SALT',       'Fp$GZsBF?y@TVM%leqCB5TLSC??T?#vZSXCM[=oEs)yF6h(ro..U+?q:q c%uT/&' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
