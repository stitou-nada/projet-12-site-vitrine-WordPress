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
define( 'AUTH_KEY',         'J-tTBfeA]zAtD$w6kmu4ND8>UQJ d,(|{wp==hh#hb%R_)Ko%%L%>{0%3H/4VV ?' );
define( 'SECURE_AUTH_KEY',  'ntt<$XKR(%]Im2oPf&t_v#]j8dw?)o*nh=uQ?Z[E=CM>arOOb9&we5/+:Qg,JqiU' );
define( 'LOGGED_IN_KEY',    'tDyPF/3TJ+MTQ*}!%`3|4|`z&>4CARZz+dI/Rxf2C<y!<fU9%(k v0l#lec&IhJ<' );
define( 'NONCE_KEY',        '>)T/K%M:c2(1g30$0i Y_J/jO2FtRF`Jq-q!f~^D-bbtqfL~V/t1u;&;wi{0A`#6' );
define( 'AUTH_SALT',        '3-c<IFo~:+aI;LT9%@y$4^HLcmSik?zL sdXvwZ~BG3VeXQg^K_Nu@K5^u3DT3Sq' );
define( 'SECURE_AUTH_SALT', 'U:YoJHef2yfn?p!LS0 .G#u,o9h;m`d&Wn@)wK2+OT/X5>.Zr/PT)kL8nMD~@Q$*' );
define( 'LOGGED_IN_SALT',   '_<y 58+OM~qMH4nz=ZsE]8/-gI/YQg3I6$aJ1D4?J@2QF(S,tv}-:[fa},r>CX@]' );
define( 'NONCE_SALT',       'k`S@G%QDk|7b%u/1-?Zc[*$=d{{4`*fgx*)k|t#]FS!o;wTP0H3|[|SSg?WgV,`$' );

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
