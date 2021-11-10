<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

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
define( 'DB_NAME', 'kamillesvalgaard_com' );

/** MySQL database username */
define( 'DB_USER', 'kamillesvalgaard_com' );

/** MySQL database password */
define( 'DB_PASSWORD', 'K0tqfqn#' );

/** MySQL hostname */
define( 'DB_HOST', 'kamillesvalgaard.com.mysql' );

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
define( 'AUTH_KEY',         'gZ9!eGX/8E6%2f{f{q.iEYC*QG)41QH&3yY:mFLr4}.xk(}#z*kJ,@3yB-7e}X8@' );
define( 'SECURE_AUTH_KEY',  '%f{0wsZ<~f2N&#1)#<]aOAG4oav}GS$/}{k?A}HT.aA3f&R42&5uQG)Po<FOZWQ^' );
define( 'LOGGED_IN_KEY',    '60bRB&rl!^A%614Z{VUSY=VV8&*$]F40=h=lhhZP1sM8X$w2w+}XqO;:?>T6ps#b' );
define( 'NONCE_KEY',        'X-B~c~4kS<l,+TGY8YagL{%oJX<mWk`$/t!CooN&DAj-NRTCP,fd)FRN))FbZz7%' );
define( 'AUTH_SALT',        'Q?yJ1dtgD45lX=Zp<IR&79zuIy{q=#5g`]Z;m67.]-nLBFqn=ZRRC78.yFZ%UXp@' );
define( 'SECURE_AUTH_SALT', '.nghsJ38k[lxI5nP&x4M9|C9M9HBR$N.s`4}X&Au?SN5HA>6m/Op4u|GN6F.;WDB' );
define( 'LOGGED_IN_SALT',   'UD#|[AP+%J:s 4$(U/r=Bb;d~u50<@g=t*&JN1XveB ,z-HXKt/[9PeCrttG3bz1' );
define( 'NONCE_SALT',       'fc+k<!,c.uPAS)nx5:7)A#w39`M11(6rwUxf23X3:CgJ~fzGdT2Pe[q9)_}dpHFH' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_ehandel';

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
