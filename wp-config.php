<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u383822294_GoSH8' );

/** Database username */
define( 'DB_USER', 'u383822294_D9o3J' );

/** Database password */
define( 'DB_PASSWORD', 'GbSym0CG6m' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'Wva(.dCzj*ZR&A6L$J`fhVGJm@`j}Y<dn5m`zw:gKd]BEAQo~7{}QL$9E)Q&E0Rk' );
define( 'SECURE_AUTH_KEY',   '3(gX_$U`X LoNr<J#p6el]azi;`6U(5q7L>iG@2[7L(wc)-o4)Cq>.V(TJ&tGcT#' );
define( 'LOGGED_IN_KEY',     'wrw>nqFSB=x(;cFu#VMN%lMv58q(]wLkiU{aOH9Z@FM}H1$]zM1~/(}Mp&CR(VeK' );
define( 'NONCE_KEY',         ')q#ZoLDI/i@xlv>wu;uUSJ;h)3%0MY+geZXzI}0qrre^}1)9N}kj5yX5NM_`aEnm' );
define( 'AUTH_SALT',         'XPF,$_@~Qw1vz#LxGuIEjR:cWd#.kN*YP;![#]dvs.nd~T4kj|J^b=$ARLZN|qQ/' );
define( 'SECURE_AUTH_SALT',  'eG?rwImJru6MSn7&6#.xo__gpCb3a7Ohuu2Bc<#ilZ|$9@N>toz}G_@VQDu$q&yG' );
define( 'LOGGED_IN_SALT',    '{:_cCEY$#$Q]dl%4:LeMX2ck_XY}Qv0)rV9j/%R#|Z*&NN:b,m~{@U+0Vr|V]q%$' );
define( 'NONCE_SALT',        'aYd*(ys[l$Vl:/OlWO?;}48vPoN1a`h5`/l<fPHd>`y$Le:HBpo</{SW^E1%d=:L' );
define( 'WP_CACHE_KEY_SALT', 'J[;{$0X78_6^EeMR?/^h^9j:9rKK?Qm#1kRb|S4Fjk`8FRgJH1,4_altza-O_uX4' );


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
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '51062fa8222ab4744ed2d75e829a872c' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
