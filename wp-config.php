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
define( 'DB_NAME', 'mywordpress' );

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
define( 'AUTH_KEY',         'I@1YRAzoB ^O0P4$J6Sd)vZg>y(;QiIE&dnSEEt9S3ffEv<6.)Bo#xHM+h!IT>5.' );
define( 'SECURE_AUTH_KEY',  '0hS/L] :91M9V4*73CPWa/M;9;Qu73#6+,obS-bMX,&_u r^ISc:1DzN,YfijT N' );
define( 'LOGGED_IN_KEY',    'E;Bc>S)|>n%!U`itZES)zxxFBmmm3sDGQit&Wbf{1^$zudy}0Rs6cYU81g3#1@uJ' );
define( 'NONCE_KEY',        'P9Jq=~TkR *0AhbuN B8g1%m&/*1pZNJ)>Dr6&WWyi=u=-x`]}+ t^-C3eM$@X{O' );
define( 'AUTH_SALT',        ' OhztF=@PCt7}&V][{C_W^`:F>sg8o5I]B2))9f1AK:im[39:IBwfHyr9xp.6dR%' );
define( 'SECURE_AUTH_SALT', 'aS<sxoosK*L `wh?w/j}8Gfm/F}pr?b}EBE8W ;nt;L1*w;yew=e1oUI2AM,z]<y' );
define( 'LOGGED_IN_SALT',   '9j^>${_#4E$P5N-<6;DkJuBwUs:76eP@xe6Z@Fr/ut:iC:_iQk<-2`)1ZH%&oxR-' );
define( 'NONCE_SALT',       '--* eS]EGvbWzPS0C4e#L*wAj2SgN1#_{v aC@[GqBt..<k(t/S5fE+41#Kn[lE3' );

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
