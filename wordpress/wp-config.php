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
define( 'DB_USER', 'nada' );

/** Database password */
define( 'DB_PASSWORD', 'nadaSTITOU' );

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
define( 'AUTH_KEY',         '.k%9]>CfNgMeCGg}!~1y;Df AfJ{#^=4U+eE}LCHG+y+B29)!>mHg7^qm`iw_,N!' );
define( 'SECURE_AUTH_KEY',  's,i#38R~ O@|xSlG9seY!a}]B,IPz ?JChy(llRJO0(v``n^J++K$u.Rn)<P5Soa' );
define( 'LOGGED_IN_KEY',    'HvotVt<Ac{|e u?2%BHi?O61v# 4s$h.cPCaWfvU%S`jfrMV+^/_^esb1||@mp*o' );
define( 'NONCE_KEY',        '~lO:/m-* [$kTC}%nm`]dhK8 |fW-x(fjQ#amL)mX@-`_RQqv(w<oGvCG(?w]F]k' );
define( 'AUTH_SALT',        '_#RO=cuIDijUI93ZJ#r}fmgp) zTuYOLl{zV|hKGQ[Pxv.(ZS5/b>Evn>$-_EPYQ' );
define( 'SECURE_AUTH_SALT', 'K-?B%h0Anhm#FUU<a@(+k>kPa[T|DCRYmVsfu|+_?J$Y5nXBA `K#@fBM[oh*f k' );
define( 'LOGGED_IN_SALT',   '(9P*bhOBSSx(-J~Q57g#TPk &$! _dDPH;a.qqW->pzujbsdTM6y4/Q#B~#v&;kr' );
define( 'NONCE_SALT',       '{8^Y9=t=u[jAN0HetO_ T(D*gIk+~YDtxJ6GljmY&8J#VILX1*fUObTCk]@wst[ ' );

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

/**importer */
@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


