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
 
ini_set('memory_limit','128M');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sommetsj_ro-company' );

/** MySQL database username */
define( 'DB_USER', 'sommetsj_DibeRebecca' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Way!corps!2030' );

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
define( 'AUTH_KEY',         '%oo|^dcVRy22Lr!97yu<QFb/e7=a(}~|%QoVcout5iA4kQj]co2S0:TcXp#$7uM<' );
define( 'SECURE_AUTH_KEY',  ')6xaG%A]Fl2.|kb>)3zVKe+!>|c[|$*>0wa[nUM`4@*@Mup>)$lTXx`bSPJ.N3Jr' );
define( 'LOGGED_IN_KEY',    '8eHz{YCD6convj-E(^OEk3;%JZ}yZhN4T-HVM8Rq d%&$oVn(S)K_6!1r{|qChhy' );
define( 'NONCE_KEY',        '2f<0/w^Sw%K-Br{,Xfkjj`J`rH<p$tS;N1yXI-cqfV5U7)bGxElQj6s8d%O]LKAO' );
define( 'AUTH_SALT',        '.=w9D3)Ls>BGMk2C,SRq/SxZbVHxFPPaF8/LvDZKEGJa:Y|OjIGYMw).={d3Fg..' );
define( 'SECURE_AUTH_SALT', '>]C3y*a*TAnkU)S7Hhc%E[FA:v%3{9>`.:xB %Ld2C7,~[IU<&BNJF5rpbUL>d:3' );
define( 'LOGGED_IN_SALT',   '#<jrt[TI&Vl_/@ftf%nz1eJ+!k{fQOl=774k2[Ow^0%#_MWoPVC6hre<2BrtMQo{' );
define( 'NONCE_SALT',       'v(}10Mazx)W=U0<I]?:&Co0+V_U.?5~A)kxgM5r.y_mbCq~_A,=f|u|3Rzvbb%Ul' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
