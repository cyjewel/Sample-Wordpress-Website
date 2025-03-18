<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressresume' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'AI$kf$w7p?ukrU!^b&/Zz )B`kNS.n&2M{mC6.d] oZlU&|9;ClF3c7d[tJ6PA^B' );
define( 'SECURE_AUTH_KEY',  ')}qi!rS2>f*b[B~n-M*{^%(J r!vE&O.N8>O^Q>?6eO#=#l#ao7E!PX$T [uaY9/' );
define( 'LOGGED_IN_KEY',    'yp)P4O;1_pylkd,V/JfIUaz~o.h7N?H}6~k/z6WP.O$-cq)(8WeP*+E+my&W{}Ie' );
define( 'NONCE_KEY',        'ra94(XjLc<QlI.<YAuYaBYP2YeYWMb]=WPuv_dd|TL>EYy;=9L)JE.3XCMqP8Zy%' );
define( 'AUTH_SALT',        '.[(D9Z+)<ODBtxKtrC45I7^Z>YMACvs=(N)4X1{7b39j0cd}o7.bFELt#]Z=%(X#' );
define( 'SECURE_AUTH_SALT', 'dC;!naGNdf{v=,Dxr[z@Fr-qqpEV7DvN,xOCzzEu3 1},-CF%,7fpe3}Hb,(i(X<' );
define( 'LOGGED_IN_SALT',   'B51%q02Uon0*m>,uW#^suFjBPrx{uu&wuJ23DS2])lHZsNTTP9dmK:4WcLi@1BGz' );
define( 'NONCE_SALT',       'lH3r%BErs3(y@}QI|fr1WziQ(~hN=*{R1Qz2(j4j/f<:HI4r>3q8dc*])>5#}tg_' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
