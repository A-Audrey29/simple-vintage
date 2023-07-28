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

define('AUTH_KEY',         'R-s-PtfKq$i+.KkEx)nNH?+qaM!GyM[7)|*a+FG!KB0QpPM@+iQj&_I@cWe4mza)');
define('SECURE_AUTH_KEY',  '(!RBN%vN:Y=5:--9-jY#c7R-3 y(-)!Xq!Y~Mn]@QF^4+*5pKj}wqp(NQ~1* Tp#');
define('LOGGED_IN_KEY',    '{q;(|+R-D1z>P;81b0mb3^bkpn&>+U=T4*z+x$6|<u/`+r&@4 W=>V.QdN**g9:&');
define('NONCE_KEY',        '&,LZ-.X)e-0e65Hh#zXc.teGtGKLnT)a;R+!_bc<Mk([tCMe,.tz$ z?dOA?`>@%');
define('AUTH_SALT',        '5^phrvY<Q2F JWs|vU_-81AP$iB#t:])J9.,[]rWnxK:XxAOPVuM>Bxk9r3nM01~');
define('SECURE_AUTH_SALT', 'F[N+[D]tej%Zq7pK4(X[Fbf#bIlt:6;;#T8 A+$r=6+^I/{d*|u5.+/2-r6)@&Z;');
define('LOGGED_IN_SALT',   'WZc=2]S$>cu @R A+cL}[+;fAw$hgd;FE@L{_v*:])H*!=OnV%)p7CY649s|7c>t');
define('NONCE_SALT',       '`LyjAn;H/-W, >-y-Bdq68}o9 G!rCHR:W,7xXJ~K@pE_I$LP+rs/3-v2|9<`]Sw');

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
