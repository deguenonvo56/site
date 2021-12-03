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
define( 'DB_NAME', 'site' );

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
define( 'AUTH_KEY',         'encfyUAg28Kh$V#zYNwoz6MQDmfn*c#yH4DHv9{GWI|7x2A&{n0U|F?HRBS,RiRY' );
define( 'SECURE_AUTH_KEY',  'ljLn;7~zO,W&?-A0vS~oUwXyjQdq,+/9X1oc8@*,P;K6v`-QPv6q[zrD)@|!((@K' );
define( 'LOGGED_IN_KEY',    'pWAK}+S|I%|$H78mO7Mj#XT64_(!~{zifzCUv5rW-u+>i&;uqBd@j99u_(7M>z7m' );
define( 'NONCE_KEY',        'W$a&R<8DB;ry-4ZX@Oyf?nw9#>( 8k^|x{vI9WbS[ |b [%I<|8*r:P[:o%P(Q`f' );
define( 'AUTH_SALT',        'O2t:W>sXdO&[=k&qPBD6PDOVH{:y2=3I$LGcHJl0)O`1sWj-6=9P+oq,Rqq!%Pi?' );
define( 'SECURE_AUTH_SALT', '=bH3<lVa/X 4y)[.UW5`)Tj1q+tBC1dwq>hOYGg$%eM/p:=Vgm=t,mfODY.w`-sO' );
define( 'LOGGED_IN_SALT',   'xFM4It#_M7jaC.PC=z{+<XWE{)2nK[b^qrc6zB%Nl6l-)>9;k;(?#`nGw4`7?e-U' );
define( 'NONCE_SALT',       'Iw9 B1$*aA%x7;c>[-snn?+[P#&.V.`!YWR:)J;#p!Z[ZLLjb9`YHccWHV_*{ dO' );

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
