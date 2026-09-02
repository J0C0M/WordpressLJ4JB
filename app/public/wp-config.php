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
define( 'AUTH_KEY',          'L6gE..xO{TB H//(OCSLwfbd}D~6)746Xagf^|G*Tj)We-f3HBNv+,R%MMhiAiJ6' );
define( 'SECURE_AUTH_KEY',   '<jCX#CStV{GD+`C&wP776vqPG?}i_xrw.nzpEI;-R3*8Y)#.:pM=zc!L)xv*zLd}' );
define( 'LOGGED_IN_KEY',     'S}}*cWue2!|~,$US~#;:w%h^P vKBpgAR}cG},Q?#=2L9S(p^^jhS94aH4,Rr7RG' );
define( 'NONCE_KEY',         '2 X`b|,+tPo]mvjvAd&s^YPZ^wFsHcTQhGr5P:~X9|d FUw`B^i:{]DMf!,ax-~w' );
define( 'AUTH_SALT',         'btk]w.O*>H=!:Q~y.QNgj[mLu+JG4$B[lgj;#=o0^f9.Vzh4=`U Lz2J%e5H;ye}' );
define( 'SECURE_AUTH_SALT',  '_cu!@}s6M?cTsPz,9=95<r{-o]2/%!%w .CXWet+c5t%V=RS~V_D`|S_MFWD4qr<' );
define( 'LOGGED_IN_SALT',    't=k.(Y=gc742O[YD7-*nVokRLDh;*N*nZQ=o6oMvi,7v#bmK?@@_[<qhF3+)x9sE' );
define( 'NONCE_SALT',        'mKe4Q;NQey Z@dXSgO09@U[GgVdwUy^4oCLleF>;re?Fb@A`oKWjfmaS,T|?9 (`' );
define( 'WP_CACHE_KEY_SALT', 'p.zSzQ?.Y]oJ4(,>+;_hb5NmcucT^/lMc#aEQLKV4~;%D+F:n!k*WJVoy^~OQfMY' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
