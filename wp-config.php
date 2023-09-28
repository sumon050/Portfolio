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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '$,KZ:,YX$pKH4G:5I?3>1aVDR(-{Y(cNY>kv1.#B(v]2DghKAfu!AZTY;IzubMaT' );
define( 'SECURE_AUTH_KEY',  'z))YcfF=jn(w|pIic&/wQ$2dZ_Y}d~FW>1nyLq FoqKCB.n$jMfrAJ0=qgV%Uu:r' );
define( 'LOGGED_IN_KEY',    '96[pA4m%*w,SgaDMyS.jCq-X`t P^Iq$@GH<A@:fToL +Ug)2R`pMuZ@NCi^wzHm' );
define( 'NONCE_KEY',        'v4^p#/LN7hwuXVE*.+loy_WXuQZJ`c+c/O:$d|V:4cHaI?R8,< dsE{{(W#7Ip/g' );
define( 'AUTH_SALT',        'T:sV!*/kr-7Q)@i5gg)*Aj,Yf-d)U`yRz =@>zifFS`2hu!|Zx_:xa=7uM9(0i47' );
define( 'SECURE_AUTH_SALT', '$Ko8}0XQ-L1=ia}G=}Mo;8O&w3WvNk;>XtWNg6wCJd]f4V>^A#t7XP!I_#,e(QH&' );
define( 'LOGGED_IN_SALT',   '#d4muj9gbVixj&1kJdr=4F~gb?ILRzr4o]QkGU*J{cO)+n3Bj;Vmr*)eA1G^tJ5Z' );
define( 'NONCE_SALT',       'Z$l&dJ@oYV.p,!_nQ[i?@mR19#&(pX]?|.Po7i~h*6}url iG3ckje>t5~Ua^1h$' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
