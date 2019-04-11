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
define( 'DB_NAME', 'wordpressnarish' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':lke-2;R[Ru,m#pULa-%^<s~._ji%T,#H!e<G}2DK;*]&tv}HT.IB_;Gq5dHXi9#' );
define( 'SECURE_AUTH_KEY',  'OI@uoHPsMV,~//U~<:X`3J Y)+2zjmpxG;6jkq+L,D!8nD^LL.`Nv2k>N-&hSv_>' );
define( 'LOGGED_IN_KEY',    'NT{.Cxcy`CM^U7+sbaH!#nDWRX_{ZNq:J)9#VK@/EL`g@_RRAV^%&Rw~_ZW?rpO_' );
define( 'NONCE_KEY',        '9EE+57iq`3o`3+Tq.-t1xh(z^{5UdMOZ:6f_;szrld`uuv|1Fja>;C;mU|r!wA/S' );
define( 'AUTH_SALT',        'Hw3n<9.I<C-<CWcOr>1*I`W7#?A@DTh$m6ffk{XUd5/mF{;&on815LT xXu.Jzbs' );
define( 'SECURE_AUTH_SALT', 'cJJeD|9+&XBLdG#s7E!@HHiIkfH)jj02v?xqm97c?^hiALUKsfWo(GxO*Z&*TxFl' );
define( 'LOGGED_IN_SALT',   'GpSJb(g;=_b]G.68 !,Fgl_z#*x.^CMI04JeL8S}jBWH2U49>6.lu14veVuqCW~f' );
define( 'NONCE_SALT',       'P~M?Ar{Q{4i>cg2^A~N>T5J@6X(]n=du(7MmyUqs,b]dE9}n!*xH&i#wMCyX;h&i' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
