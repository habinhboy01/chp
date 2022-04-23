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
define( 'DB_NAME', 'chp' );

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
define( 'AUTH_KEY',         'p~g^dEJW q@.BXx}7ZvmcwC5#X!F.1m4/A~^]EhAdkVC1,%L%Y$iGr3)]^O5lyJ5' );
define( 'SECURE_AUTH_KEY',  '%h=h=iEEB_c6-9}U2c<=>x@xf*$29YCXS7 73%4U9e}x%?48~i&W0`cpnZ]LYHBD' );
define( 'LOGGED_IN_KEY',    '}1:qYl&!Za!3$-{&-{7Zv-/.#77WCkI2PRoDT!GxsO]F!s%Wz7D8G vF_+|)L:Wa' );
define( 'NONCE_KEY',        'd0]|O3o@0V7Q]ze_+(Q9d)6t+l]0bYq]UvWN2L6y>_c)<{sYym8tc~O@>Wa] bON' );
define( 'AUTH_SALT',        'fjpFyi=>?75&::7_H&Rfgq38aGU]`7?sN ^D[Ew@==^3Bu)b1W@oZXVJnm9+w#&4' );
define( 'SECURE_AUTH_SALT', 'X{NR<Hii%`k$?0L#QbbhFLc)iAf}/u81<3)ciW>HEfJhoYEeRIbl~){A^MXKS[G:' );
define( 'LOGGED_IN_SALT',   'bFv=#YZgh9?k:A_UBRMAhT8s%ts:H:<F;jy7;718#~]UT{wp9j<H_=}.;cbe$~0$' );
define( 'NONCE_SALT',       'gcwHk$uvi^88R@Oi:.g,<%^v|Cs#LX_e;Xju;j!)|6VFaNR:tN%9}OGq[9l)AT?O' );

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
