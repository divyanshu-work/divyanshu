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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'AWYAt9TZ9g&KtPEv+e}<@:-Z^tC@;a<N:GMLUgrU>&D}JwQB!d6_S[u(.zY.F. |' );
define( 'SECURE_AUTH_KEY',  'dY!H8w8.+fNm@/_8`{;1(#]jB*<#B0@ThbescVgY G<Fg1_s-Y*WTR EK8<d.drX' );
define( 'LOGGED_IN_KEY',    '4u;#e6jWs:TCRJFq)n &>DY,fYbT#kU*,iI Nv$wl<BMhC@;D,_nY_m&B8LcULw-' );
define( 'NONCE_KEY',        'd]8$@cS+zbNOvM,fuCi|?`qrY.#7Pzr6Q@;3^Km+x}!iG#xND>a1Hq;Sl}xUJjWY' );
define( 'AUTH_SALT',        'ze3K^0hZmXB)du5O~pyvop@*?N^iP`DTmH*<di|5;GQh7]Wz$ ~hdA1QI*V<bED)' );
define( 'SECURE_AUTH_SALT', 'fJ,hDJ-9fWoz#XCGp#N[(^X,Xvfc=qyp{N.B:ez7o(YO:ocKN6=u&JB1&)O7zD 4' );
define( 'LOGGED_IN_SALT',   'YJ&rkkM$ `I3VH:{d+8vd{m^Jg|W7noE;LbZ-b7cd^HSha(/m=YMKEX++}E%NRWb' );
define( 'NONCE_SALT',       '41/5;|u^wXn]Xc7p 2p /k3PGOE[|33!VX^G[,aP]qDMpX%7vdvJ=UMUsr aoKs.' );

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
